<?php

namespace App\Http\Controllers;

use App\Models\AktifitasModel;
use App\Models\ApplicantStepFiveModel;
use App\Models\ApprovalModel;
use App\Models\DetailKTAScoringModel;
use App\Models\KTADisbursementModel;
use App\Models\KTAScoringModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DisbursementController extends Controller
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

        // dd($altbranchcity);
        $branch_id = session('branch');
        $firstchar = $altbranch[0];

        if ($firstchar == 0) {
            $scoring = ApprovalModel::select('*')
                ->join('kta_scoring', 'applicant_approval_status.ref_no', '=', 'kta_scoring.ref_no')
                ->where('kta_scoring.flag_disbursement', 0)
                ->where('applicant_approval_status.status_by_cabang', 'Approve')
                ->where('applicant_approval_status.ref_no', 'like', "%{$keyword}%")
                ->paginate($pagination);
            // dd($scoring);
        } else {
            $scoring = ApprovalModel::select('*')
                ->join('kta_scoring', 'applicant_approval_status.ref_no', '=', 'kta_scoring.ref_no')
                ->where('kta_scoring.flag_disbursement', 0)
                ->where('applicant_approval_status.kabupatenkota', 'like', '%' . $altbranchcity . '%')
                ->where('applicant_approval_status.status_by_cabang', 'Approve')
                ->where('applicant_approval_status.ref_no', 'like', "%{$keyword}%")
                ->paginate($pagination);
        }

        $scoring->appends($request->only('keyword'));

        return view('disbursement.index', [
            'ref_no'    => 'Ref No',
            'scoring' => $scoring,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function show($ref_no = 0)
    {
        $approval = ApprovalModel::where('applicant_approval_status.ref_no', $ref_no)
            ->join('detail_kta_scoring', 'applicant_approval_status.ref_no', '=', 'detail_kta_scoring.ref_no')
            ->get();
        return view(
            'disbursement.show',
            [
                'approval' => $approval
            ]
        );
    }

    public function store(Request $request)
    {
        $nik = $request->input('nik');
        $tokenreg = $request->input('tokenreg');
        $ref_no = $request->input('ref_no');
        $namapemohon = $request->input('namapemohon');
        $produkkta = $request->input('produkkta');
        $totalscore = $request->input('totalscore');
        $created_by = $request->input('created_by');
        $updated_by = $request->input('updated_by');
        $url = $request->fullUrl();

        // dd($status_by_ho);

        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'tokenreg' => 'required',
            'ref_no' => 'required',
            'namapemohon' => 'required',
            'produkkta' => 'required',
            'totalscore' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);

        KTADisbursementModel::create($request->all());
        AktifitasModel::insert([
            'nik' => $updated_by,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Mark Ref No ' . $ref_no . ' as Disbursed',
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        KTAScoringModel::where('ref_no', $ref_no)
        ->update([
            'flag_disbursement' => 1,
        ]);
        AktifitasModel::insert([
            'nik' => $updated_by,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Update Flag Disbursement KTA for Ref No ' . $ref_no,
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        ApplicantStepFiveModel::where('ref_no', $ref_no)
            ->update([
                'flag_disbursement' => 1,
            ]);
        AktifitasModel::insert([
            'nik' => $updated_by,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Update Flag Disbursement KTA Table stepfive for Ref No ' . $ref_no,
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        return redirect()->back()->with('success', 'KTA Mark as Disbursed');
    }
}
