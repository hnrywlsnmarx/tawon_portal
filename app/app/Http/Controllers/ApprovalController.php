<?php

namespace App\Http\Controllers;

use App\Models\AktifitasModel;
use App\Mail\SendPermitMail;
use App\Mail\SendRejectionMail;
use App\Models\ApplicantStepFiveModel;
use App\Models\ApprovalModel;
use App\Models\DetailKTAScoringModel;
use App\Models\KTAAdjustmentModel;
use App\Models\KTAScoringModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use ZipArchive;

class ApprovalController extends Controller
{
    //
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
            ->pluck('master_brasnch.city')->first();

        // dd($altbranchname);
        $branch_id = session('branch');
        $firstchar = $altbranch[0];

        if ($firstchar == 0) {
            // $scoring = DetailKTAScoringModel::select('*')
            //     ->join('kta_scoring', 'detail_kta_scoring.ref_no', '=', 'kta_scoring.ref_no')
            //     ->where('kta_scoring.flag_approval', 0)
            //     ->paginate($pagination);
            // dd($scoring);
            $scoring = KTAAdjustmentModel::select('*')
                ->join('kta_scoring', 'kta_adjustment.ref_no', '=', 'kta_scoring.ref_no')
                ->where('kta_adjustment.ref_no', 'like', "%{$keyword}%")
                ->where('kta_adjustment.flag_approval', 0)
                ->paginate($pagination);
        } else {
            // $scoring = DetailKTAScoringModel::select('*')
            //     ->join('kta_scoring', 'detail_kta_scoring.ref_no', '=', 'kta_scoring.ref_no')
            //     ->where('kta_scoring.flag_approval', 0)
            //     ->paginate($pagination);
            $scoring = KTAAdjustmentModel::select('*')
                ->join('kta_scoring', 'kta_adjustment.ref_no', '=', 'kta_scoring.ref_no')
                ->where('kta_adjustment.ref_no', 'like', "%{$keyword}%")
                ->where('kta_adjustment.flag_approval', 0)
                ->where('kta_adjustment.desired_branch', $altbranchname)
                ->paginate($pagination);
        }

        // dd($scoring);

        // $applicant->appends($request->only('keyword'));

        return view('approval.index', [
            'ref_no'    => 'Ref No',
            'scoring' => $scoring,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function show($ref_no = 0)
    {
        $infobasic = DB::table('applicant_stepfive')
            ->join('applicant_stepfour', 'applicant_stepfive.nik', '=', 'applicant_stepfour.nik')
            ->join('applicant_stepthree', 'applicant_stepfive.nik', '=', 'applicant_stepthree.nik')
            ->join('applicant_steptwo', 'applicant_stepfive.nik', '=', 'applicant_steptwo.nik')
            ->join('applicant_stepone', 'applicant_stepfive.nik', '=', 'applicant_stepone.nik')
            ->where('applicant_stepfive.ref_no', $ref_no)
            ->get();

        $approval = KTAAdjustmentModel::where('kta_adjustment.ref_no', $ref_no)
            ->join('kta_scoring', 'kta_scoring.ref_no', '=', 'kta_adjustment.ref_no')
            ->join('detail_kta_scoring', 'detail_kta_scoring.ref_no', '=', 'kta_adjustment.ref_no')
            ->join('applicant_stepfive', 'kta_adjustment.ref_no', '=', 'applicant_stepfive.ref_no')
            ->join('users', 'detail_kta_scoring.nik', '=', 'users.nik')
            ->get();

        return view(
            'approval.show',
            [
                'approval' => $approval,
                'infobasic' => $infobasic
            ]
        );
    }

    public function approve($ref_no = 0)
    {
        // dd($ref_no);

        $infobasic = DB::table('applicant_stepfive')
            ->join('applicant_stepfour', 'applicant_stepfive.nik', '=', 'applicant_stepfour.nik')
            ->join('applicant_stepthree', 'applicant_stepfive.nik', '=', 'applicant_stepthree.nik')
            ->join('applicant_steptwo', 'applicant_stepfive.nik', '=', 'applicant_steptwo.nik')
            ->join('applicant_stepone', 'applicant_stepfive.nik', '=', 'applicant_stepone.nik')
            ->where('applicant_stepfive.ref_no', $ref_no)
            ->get();

        $nik = DB::table('applicant_stepfive')
            ->select('nik')
            ->where('ref_no', $ref_no)
            ->pluck('nik')->first();

        // dd($nik);

        $ctDokumen = DB::table('applicant_stepupload')->where('nik', $nik)->count();
        $dokumen = DB::table('applicant_stepupload')->where('nik', $nik)->get();
        // dd($ctDokumen);

        $approval = KTAAdjustmentModel::where('kta_adjustment.ref_no', $ref_no)
            ->join('kta_scoring', 'kta_scoring.ref_no', '=', 'kta_adjustment.ref_no')
            ->join('detail_kta_scoring', 'detail_kta_scoring.ref_no', '=', 'kta_adjustment.ref_no')
            ->join('applicant_stepfive', 'kta_adjustment.ref_no', '=', 'applicant_stepfive.ref_no')
            ->join('users', 'detail_kta_scoring.nik', '=', 'users.nik')
            ->get();

        return view(
            'approval.approve',
            [
                'approval' => $approval,
                'infobasic' => $infobasic,
                'ctDokumen' => $ctDokumen,
                'dokumen' => $dokumen
            ]
        );
    }

    public function reject($ref_no = 0)
    {
        // dd($ref_no);
        $nik = DB::table('applicant_stepfive')
            ->select('nik')
            ->where('ref_no', $ref_no)
            ->pluck('nik')->first();

        // dd($nik);

        $ctDokumen = DB::table('applicant_stepupload')->where('nik', $nik)->count();
        $dokumen = DB::table('applicant_stepupload')->where('nik', $nik)->get();
        // dd($ctDokumen);
        $approval = KTAAdjustmentModel::where('kta_adjustment.ref_no', $ref_no)
            ->join('kta_scoring', 'kta_scoring.ref_no', '=', 'kta_adjustment.ref_no')
            ->join('detail_kta_scoring', 'detail_kta_scoring.ref_no', '=', 'kta_adjustment.ref_no')
            ->join('applicant_stepfive', 'kta_adjustment.ref_no', '=', 'applicant_stepfive.ref_no')
            ->join('users', 'detail_kta_scoring.nik', '=', 'users.nik')
            ->get();

        return view(
            'approval.reject',
            [
                'approval' => $approval,
                'ctDokumen' => $ctDokumen,
                'dokumen' => $dokumen
            ]
        );
    }

    public function store(Request $request)
    {

        $nik = $request->input('nik');
        $email = $request->input('email');
        $tokenreg = $request->input('tokenreg');
        $ref_no = $request->input('ref_no');
        $namapemohon = $request->input('namapemohon');
        $kabupatenkota = $request->input('kabupatenkota');
        $produkkta = $request->input('produkkta');
        $totalscore = $request->input('totalscore');
        $jumlah_pinjaman = $request->input('jumlah_pinjaman');
        $jangka_waktu = $request->input('jangka_waktu');
        $adjustment_pinjaman = $request->input('adjustment_pinjaman');
        $angsuran_perbulan = $request->input('angsuran_perbulan');
        $created_by_ho = $request->input('created_by_ho');
        $status_by_ho = $request->input('status_by_ho');
        $created_by_cabang = $request->input('created_by_cabang');
        $status_by_cabang = $request->input('status_by_cabang');
        $comment_by_cabang = $request->input('comment_by_cabang');
        $url = $request->fullUrl();

        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'tokenreg' => 'required',
            'ref_no' => 'required',
            'namapemohon' => 'required',
            'kabupatenkota' => 'required',
            'produkkta' => 'required',
            'totalscore' => 'required',
            'created_by_ho' => 'required',
            'status_by_ho' => 'required',
            'created_by_cabang' => 'required',
            'status_by_cabang' => 'required',
            'comment_by_cabang' => 'required',
        ]);

        // dd($angsuran_perbulan);

        ApprovalModel::create($request->all());

        if ($status_by_cabang == 'Reject') {
            $details = [
                'title' => 'Rejection Notification',
                'body' => 'Mohon maaf, pengajuan Pinjaman KTA anda belum dapat kami lanjutkan untuk proses pencairan',
                'nik' => $nik,
                'ref_no' => $ref_no,
                'namapemohon' => $namapemohon
            ];

            Mail::to($email)->send(new SendRejectionMail($details));
        } else {
            $details = [
                'title' => 'Approval Notification',
                'body' => 'Selamat, Pinjaman KTA yang anda ajukan telah disetujui. Persetujuan ini hanya berlaku selama 14 hari dari tanggal email ini dikirimkan. Segera kunjungi Bank Woori Saudara terdekat.',
                'nik' => $nik,
                'ref_no' => $ref_no,
                'namapemohon' => $namapemohon,
                'jumlah_pinjaman' => $jumlah_pinjaman,
                'adjustment_pinjaman' => $adjustment_pinjaman,
                'jangka_waktu' => $jangka_waktu,
                'angsuran_perbulan' => $angsuran_perbulan
            ];

            Mail::to($email)->send(new SendPermitMail($details));
        }

        AktifitasModel::insert([
            'nik' => $created_by_cabang,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Create Approval KTA for Ref No ' . $ref_no,
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        KTAScoringModel::where('ref_no', $ref_no)
            ->update([
                'flag_approval' => 1,
            ]);

        KTAAdjustmentModel::where('ref_no', $ref_no)
            ->update([
                'flag_approval' => 1,
            ]);

        AktifitasModel::insert([
            'nik' => $created_by_cabang,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Update Flag Approval KTA for Ref No ' . $ref_no,
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        ApplicantStepFiveModel::where('ref_no', $ref_no)
            ->update([
                'flag_approval' => 1,
            ]);
        AktifitasModel::insert([
            'nik' => $created_by_cabang,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Update Flag Approval KTA Table stepfive for Ref No ' . $ref_no,
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return redirect()->back()->with('success', 'Success');
    }

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
