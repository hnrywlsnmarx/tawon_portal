<?php

namespace App\Http\Controllers;

use App\Models\DetailKTAScoringModel;
use App\Models\KTAScoringModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataScoringController extends Controller
{
    //
    public function index(Request $request)
    {
        $pagination  = 10;
        $ayeuna = Carbon::now();
        $yeuh = $ayeuna->format('Y-m-d');
        $keyword = $request->input('keyword');

        $nik = session('nik');
        $usrnm = session('nama');

        $altbranch = DB::table('users_bank')
            ->join('master_branch', 'users_bank.kodecab', '=', 'master_branch.id')
            ->select('users_bank.kodecab')
            ->where('users_bank.nik', '=', $nik)
            ->pluck('users_bank.kodecab')->first();

        $altbranchname = DB::table('users_bank')
            ->join('master_branch', 'users_bank.kodecab', '=', 'master_branch.id')
            ->select('master_branch.name')
            ->where('users_bank.nik', '=', $nik)
            ->pluck('master_branch.name')->first();

        $altbranchcity = DB::table('users_bank')
            ->join('master_branch', 'users_bank.kodecab', '=', 'master_branch.id')
            ->select('master_branch.city')
            ->where('users_bank.nik', '=', $nik)
            ->pluck('master_branch.city')->first();

        // dd($altbranch);
        $branch_id = session('branch');
        $firstchar = $altbranch[0];

        return view('datascoring.index1');
    }

    public function show($ref_no = 0)
    {
        $datascoring = DetailKTAScoringModel::where('detail_kta_scoring.ref_no', $ref_no)
            ->join('kta_scoring', 'detail_kta_scoring.ref_no', '=', 'kta_scoring.ref_no')
            ->get();
        return view(
            'datascoring.show',
            [
                'datascoring' => $datascoring
            ]
        );
    }

    public function approve($ref_no = 0)
    {
        $datascoring = DetailKTAScoringModel::where('detail_kta_scoring.ref_no', $ref_no)
            ->join('kta_scoring', 'detail_kta_scoring.ref_no', '=', 'kta_scoring.ref_no')
            ->get();
        return view(
            'datascoring.approve',
            [
                'datascoring' => $datascoring
            ]
        );
    }

    public function reject($ref_no = 0)
    {
        $datascoring = DetailKTAScoringModel::where('detail_kta_scoring.ref_no', $ref_no)
            ->join('kta_scoring', 'detail_kta_scoring.ref_no', '=', 'kta_scoring.ref_no')
            ->get();
        return view(
            'datascoring.reject',
            [
                'datascoring' => $datascoring
            ]
        );
    }

    public function deletescoring($ref_no)
    {
        // $id = $request->input('id');
        // dd($ref_no);
        
        $ktascoring = KTAScoringModel::where('ref_no', $ref_no);
        // dd($ktascoring);
        $ktascoring->delete();

        $detailkta = DetailKTAScoringModel::where('ref_no', $ref_no);
        $detailkta->delete();

        return redirect()->back()->with('success', 'Data terhapus');
    }
}
