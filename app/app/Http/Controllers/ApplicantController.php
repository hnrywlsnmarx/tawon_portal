<?php

namespace App\Http\Controllers;

use App\Models\ApplicantStepFiveModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
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
            $applicant = ApplicantStepFiveModel::where('ref_no', 'like', "%{$keyword}%")
                ->where('created_at', 'like', '%' . $yeuh . '%')
                ->paginate($pagination);
        } else {
            $applicant = ApplicantStepFiveModel::where('kabupatenkota', 'like', '%' . $altbranchcity . '%')
                ->where('created_at', 'like', '%' . $yeuh . '%')
                ->where('ref_no', 'like', "%{$keyword}%")
                ->paginate($pagination);
        }

        $applicant->appends($request->only('keyword'));

        return view('applicant.index', [
            'ref_no'    => 'Ref No',
            'applicant' => $applicant,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function show($ref_no = 0)
    {
        $nik = DB::table('applicant_stepfive')
            ->where('ref_no', $ref_no)
            ->pluck('nik')->last();
        // dd($nik);

        $databank = DB::table('applicant_stepfour')
            ->where('nik', $nik)
            ->get();
        // dd($databank);

        $applicant = DB::table('applicant_stepfive')
            ->join('applicant_stepone', 'applicant_stepone.nik', '=', 'applicant_stepfive.nik')
            ->join('applicant_steptwo', 'applicant_steptwo.nik', '=', 'applicant_stepfive.nik')
            ->join('applicant_stepthree', 'applicant_stepthree.nik', '=', 'applicant_stepfive.nik')
            ->join('applicant_stepfour', 'applicant_stepfour.nik', '=', 'applicant_stepfive.nik')
            ->where('ref_no', $ref_no)->get();

        // $applicant = DB::table('applicant_stepfive')->where('ref_no', $ref_no)->get();

        return view('applicant.show', compact('applicant','databank'));
    }
}
