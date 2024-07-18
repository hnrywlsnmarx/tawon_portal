<?php

namespace App\Http\Controllers;

use App\Models\AktifitasModel;
use App\Models\PemohonModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use ZipArchive;
use Illuminate\Support\Facades\Storage;

class NasabahGlobalController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:administrator');
        //$this->middleware('role:staff');
    }

    public function index(Request $request)
    {
        $pagination  = 10;
        $ayeuna = Carbon::now();
        $yeuh = $ayeuna->format('Y-m-d');
        $keyword = $request->input('keyword');

        $usrnm = session('nama');
        // $altbranch = DB::table('users_bank')
        //     ->join('branchlist', 'users_bank.branch_code', '=', 'branchlist.branch_code')
        //     ->select('users_bank.branch_code')
        //     ->where('users_bank.name', '=', $usrnm)
        //     ->pluck('users_bank.branch_code')->first();

        // $altbranchname = DB::table('users_bank')
        //     ->join('branchlist', 'users_bank.branch_code', '=', 'branchlist.branch_code')
        //     ->select('branchlist.branch_name')
        //     ->where('users_bank.name', '=', $usrnm)
        //     ->pluck('users_bank.branch_name')->first();

        $altbranch = DB::table('users_bank')
            ->join('master_branch', 'users_bank.kodecab', '=', 'master_branch.id')
            ->select('users_bank.kodecab')
            ->where('users_bank.name', '=', $usrnm)
            ->pluck('users_bank.kodecab')->first();

        $altbranchname = DB::table('users_bank')
            ->join('master_branch', 'users_bank.kodecab', '=', 'master_branch.id')
            ->select('master_branch.name')
            ->where('users_bank.name', '=', $usrnm)
            ->pluck('master_branch.name')->first();

        $altbranchcity = DB::table('users_bank')
            ->join('master_branch', 'users_bank.kodecab', '=', 'master_branch.id')
            ->select('master_branch.city')
            ->where('users_bank.name', '=', $usrnm)
            ->pluck('master_branch.city')->first();

        // dd($altbranch);
        $branch_id = session('branch');
        $firstchar = $altbranch[0];

        if ($firstchar == 0) {
            $nasabah = PemohonModel::where('users.name', 'like', "%{$keyword}%")
                ->join('applicant_stepone', 'users.nik', '=', 'applicant_stepone.nik')
                ->paginate($pagination);
        } else {
            $nasabah = PemohonModel::where('users.kabupatenkota', 'like', '%' . $altbranchcity . '%')
                ->join('applicant_stepone', 'users.nik', '=', 'applicant_stepone.nik')
                ->where('users.name', 'like', "%{$keyword}%")
                ->paginate($pagination);
        }

        $nasabah->appends($request->only('keyword'));

        return view('globalnasabah.index', [
            'nik'    => 'NIK',
            'nasabah' => $nasabah,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function show($nik = 0)
    {
        $globalnasabah = DB::table('users')
            ->join('applicant_stepone', 'users.nik', '=', 'applicant_stepone.nik')
            ->join('applicant_stepthree', 'users.nik', '=', 'applicant_stepthree.nik')
            ->where('users.nik', $nik)
            ->get();
        $ctDokumen = DB::table('applicant_stepupload')->where('nik', $nik)->count();
        $dokumen = DB::table('applicant_stepupload')->where('nik', $nik)->get();

        // dd($dokumen);

        return view('globalnasabah.show', compact('globalnasabah', 'dokumen', 'ctDokumen'));
    }

    // public function downloadZip($nik)
    // {
    //     $path_prim = DB::table('applicant_stepupload')
    //         ->select('path_prim')
    //         ->where('nik', $nik)->pluck('path_prim')->first();
    //     $path = substr($path_prim, 0, 28);
    //     $realpath = "public/storage/".$path;
    //     dd($realpath);

    //     $zip = new ZipArchive();
    //     $fileName = '3212102912900002_CopyKTP_b5b0ef332296cd0bdfbe0f5bbecf7394.zip';
    //     $filejpg = '3212102912900002_CopyKTP_b5b0ef332296cd0bdfbe0f5bbecf7394.jpg';
    //     // $fileName = 'tes.zip';
    //     $fileName = $nik.'.zip';
    //     dd($nik);
    //     if ($zip->open(($realpath), ZipArchive::CREATE) === TRUE) {
    //         $files = File::files($realpath);
    //         // dd($files);
    //         foreach ($files as $key => $value) {
    //             $relativeNameInZipFile = basename($value);

    //             $zip->addFile($value, $relativeNameInZipFile);
    //         }
    //         $zip->close();
    //         // dd($dir);
    //     }
    //     return response()->download(public_path($fileName));
    // }

    public function zipDownload(Request $request, $nik)
    {

        $nikpeg = session('nik');
        $ip_address = session('ip_address');
        $url = $request->fullUrl();

        $path_prim = DB::table('applicant_stepupload')
            ->select('path_prim')
            ->where('nik', $nik)->pluck('path_prim')->first();
        $path = substr($path_prim, 0, 28);
        $fileName = $nik . '.zip';
        $realpath =  'storage/' . $path;
        $destinationPath = 'kta';
        $storageDestinationPath = public_path("$destinationPath");
        // dd($realpath);
        // dd($storageDestinationPath);

        if (!File::exists($storageDestinationPath)) {
            File::makeDirectory($storageDestinationPath, 0755, true);
        }

        $zip = (new ZipArchive());
        $isOpened =  $zip->open($storageDestinationPath . "/" . $fileName, ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        if ($isOpened === TRUE) {
            $this->addToZip(
                $zip,
                [
                    public_path($realpath),
                ],
                $nik . '.zip'
            );

            $zip->close();

            AktifitasModel::insert([
                'nik' => $nikpeg,
                'email' => $nikpeg,
                'ip_address' => $ip_address,
                'nama' => $nikpeg,
                'url' => $url,
                'action' => 'Download Dokumen user ' . $nik,
                'status' => 'Success',
                'caused_by' => '',
                'created_at' => now(),
                'updated_at' => now(),

            ]);

            return response()->download($storageDestinationPath . "/" . $fileName);
        } else {
            return response()->html("Unable to create/open zip");
        }
    }

    function addToZip($zip, $filesArray, $fileName = '')
    {
        $dir = '';
        if ($fileName != '') {
            $fileName = '';
            $zip->addEmptyDir($fileName);
            $dir = $fileName . "/";
        }
        foreach ($filesArray as $k => $path) {

            $isFile =  \File::isFile($path);
            if ($isFile) {
                $file = new \SplFileInfo($path);
                $zip->addFile($file->getPathname(), $dir . $file->getFilename());
            } else {
                $it = new \RecursiveDirectoryIterator($path);
                $repalcer = dirname($it->getPath());;
                foreach (new \RecursiveIteratorIterator($it) as $file) {
                    if (!$file->isDir()) {
                        $zip->addFile($file->getPathname(), "$dir" . str_replace($repalcer . "/", "", $file->getPathname()));
                    }
                }
            }
        }
    }
}
