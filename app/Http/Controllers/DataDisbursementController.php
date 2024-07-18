<?php

namespace App\Http\Controllers;

use App\Models\AktifitasModel;
use App\Models\ApprovalModel;
use App\Models\DetailKTAScoringModel;
use App\Models\KTADisbursementModel;
use App\Models\KTAScoringModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DataDisbursementController extends Controller
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
            ->pluck('master_branch.city')->first();

        // dd($altbranch);
        $branch_id = session('branch');
        $firstchar = $altbranch[0];

        if ($firstchar == 0) {
            $scoring = KTADisbursementModel::select('*')
            ->where('ref_no', 'like', "%{$keyword}%")
                ->paginate($pagination);
            // dd($scoring);
        } else {
            $scoring = KTADisbursementModel::select('*')
                ->where('kabupatenkota', 'like', '%' . $altbranchcity . '%')
                ->where('ref_no', 'like', "%{$keyword}%")
                ->paginate($pagination);
        }

        $scoring->appends($request->only('keyword'));

        return view('datadisbursement.index', [
            'ref_no'    => 'Ref No',
            'scoring' => $scoring,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function show($ref_no = 0)
    {
        $updated_by = KTADisbursementModel::select('updated_by')
            ->where('ref_no', $ref_no)
            ->pluck('updated_by')->last();

            // dd($updated_by);

        $approval = ApprovalModel::where('applicant_approval_status.ref_no', $ref_no)
            ->join('detail_kta_scoring', 'applicant_approval_status.ref_no', '=', 'detail_kta_scoring.ref_no')
            ->get();
        return view(
            'datadisbursement.show',
            [
                'approval' => $approval,
                'updated_by' => $updated_by
            ]
        );
    }
}
