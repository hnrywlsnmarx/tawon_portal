<?php

namespace App\Http\Controllers;

use App\Models\ApplicantStepFiveModel;
use App\Models\ApprovalModel;
use App\Models\EFormModel;
use App\Models\KTAAdjustmentModel;
use App\Models\SubmittedData;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\VCustomerMonitoringModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $status = session('status');

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

        $ayeuna = Carbon::now();
        $yeuh = $ayeuna->format('Y-m-d');
        // $yester = $yesterday->format('Ymd');
        // $sbtryester = substr($yester, 0, 6);
        // dd($yeuh);

        $totalscoring = SubmittedData::count();
        $todayscoring = SubmittedData::where('created_at', 'like', '%' . $yeuh . '%')
            ->count();

        $totallayakscoring = SubmittedData::where('stdCd', '00')
            ->count();
        $todaylayakscoring = SubmittedData::where('stdCd', '00')
            ->where('created_at', 'like', '%' . $yeuh . '%')
            ->count();

        $totaltidaklayakscoring = SubmittedData::where('stdCd', '01')
            ->count();
        $todaytidaklayakscoring = SubmittedData::where('stdCd', '01')
            ->where('created_at', 'like', '%' . $yeuh . '%')
            ->count();

        return view('home.index', [
            "altbranch" => $altbranch,
            "altbranchname" => $altbranchname,
            "status" => $status,
            "totalscoring"=>$totalscoring,
            "todayscoring"=>$todayscoring,
            "totallayakscoring"=>$totallayakscoring,
            "todaylayakscoring"=>$todaylayakscoring,
            "totaltidaklayakscoring"=>$totaltidaklayakscoring,
            "todaytidaklayakscoring"=>$todaytidaklayakscoring,

            // 'sims' => $sims
        ]);
    }
}
