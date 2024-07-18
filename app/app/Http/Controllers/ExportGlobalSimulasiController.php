<?php

namespace App\Http\Controllers;

use App\Exports\SimulasiGlobalBranchExport;
use App\Exports\SimulasiGlobalExport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ExportGlobalSimulasiController extends Controller
{
    public function index(Request $request)
    {
        $ayeuna = Carbon::now();
        $yeuh = $ayeuna->format('Y-m-d');

        $usrnm = session('nama');

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

        $from_date = $request->input('from_date_hid');
        $to_date = $request->input('to_date_hid');

        $expexcel = $request->input('expex') == 'expexcel';
        $expcsv = $request->input('expcs') == 'expcsv';

        if ($from_date != '' && $to_date != '') {
            if ($to_date < $from_date) {
                echo "<script>";
                echo "alert('From Date & To Date tidak boleh kosong');";
                echo "</script>";
            } else {
                if ($firstchar != 0) {
                    if ($expexcel) {
                        return Excel::download(new SimulasiGlobalBranchExport($from_date, $to_date, $altbranchcity), 'SimulasiGlobal-' . $yeuh . '-' . $altbranch . '.xlsx');
                    } else {
                        return Excel::download(new SimulasiGlobalBranchExport($from_date, $to_date, $altbranch), 'SimulasiGlobal-' . $yeuh . '-' . $altbranch . '.csv');
                    }
                } else {
                    if ($expexcel) {
                        return Excel::download(new SimulasiGlobalExport($from_date, $to_date), 'SimulasiGlobal-' . $yeuh . '-' . 'HO' . '.xlsx');
                    } else {
                        return Excel::download(new SimulasiGlobalExport($from_date, $to_date), 'SimulasiGlobal-' . $yeuh . '-' . 'HO' . '.csv');
                    }
                }
            }
        }
        return view('exportsimulasi.index');
    }
}
