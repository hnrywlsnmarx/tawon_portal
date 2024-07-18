<?php

namespace App\Http\Controllers;

use App\Models\RequestorModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestorGlobalController extends Controller
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
            $requestor = RequestorModel::where('nama', 'like', "%{$keyword}%")
                ->paginate($pagination);
        } else {
            $requestor = RequestorModel::where('kabupatenkota', 'like', '%' . $altbranchcity . '%')
            ->where('nama', 'like', "%{$keyword}%")
            ->paginate($pagination);
        }

        $requestor->appends($request->only('keyword'));

        return view('globalrequestor.index', [
            'nik'    => 'NIK',
            'requestor' => $requestor,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function show($nik = 0)
    {
        $globalrequestor = DB::table('kta_requestor')->where('nik', $nik)->get();
        
        return view('globalrequestor.show', compact('globalrequestor'));
    }
}
