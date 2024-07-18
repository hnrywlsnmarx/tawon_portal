<?php

namespace App\Http\Controllers;

use App\Exports\ApplicationTodayBranchExport;
use App\Exports\ApplicationTodayExport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ExportTodayApplicationController extends Controller
{
    //
    public function exportexcel(Request $request)
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

        if ($firstchar == 0) {
            return Excel::download(new ApplicationTodayExport($yeuh), 'ApplicationToday-' . $yeuh . '-HO.xlsx');
        } else {
            return Excel::download(new ApplicationTodayBranchExport($yeuh, $altbranchcity), 'ApplicationToday-' . $yeuh . '-' . $altbranch . '-.xlsx');
        }
    }

    public function exportcsv(Request $request)
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

        if ($firstchar == 0) {
            return Excel::download(new ApplicationTodayExport($yeuh), 'ApplicationToday-' . $yeuh . '-HO.csv');
        } else {
            return Excel::download(new ApplicationTodayBranchExport($yeuh, $altbranchcity), 'ApplicationToday-' . $yeuh . '-' . $altbranch . '-.csv');
        }
    }
}
