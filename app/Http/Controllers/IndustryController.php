<?php

namespace App\Http\Controllers;

use App\Models\AktifitasModel;
use App\Models\User;
use App\Models\Branchlist;
use App\Models\CompanyRate;
use App\Models\PicCabang;
use App\Models\PicHO;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:administrator');
        //$this->middleware('role:staff');
    }

    public function index(Request $request)
    {
        $pagination  = 10;
        $users    = DB::table('ref_industry')
            ->select('*')
            ->where('nama_bidang_usaha', 'like', "%{$request->keyword}%")
            ->paginate($pagination);

        $users->appends($request->only('keyword'));

        return view('industry.index', [
            'nik'    => 'NIK',
            'users' => $users,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }



    public function branchSearch(Request $request)
    {
        $branch = [];

        if ($request->has('q')) {
            $search = $request->q;
            $branch = Branchlist::select("branch_code", "branch_name")
                ->where('branch_name', 'LIKE', "%$search%")
                ->orderBy('branch_code', 'asc')
                ->get();
        } else {
            $search = $request->q;
            $branch = Branchlist::select("branch_code", "branch_name")
                ->orderBy('branch_code', 'asc')
                ->get();
        }
        return response()->json($branch);
    }

    public function roleSearch(Request $request)
    {
        $role = [];

        if ($request->has('q')) {
            $search = $request->q;
            $role = Role::select("id", "name")
                ->where('name', 'LIKE', "%$search%")
                ->get();
        } else {
            $search = $request->q;
            $role = Role::select("id", "name")
                ->get();
        }
        return response()->json($role);
    }

    public function statusSearch(Request $request)
    {
        $status = [];

        if ($request->has('q')) {
            $search = $request->q;
            $status = DB::table('status')
                ->select('id', 'nama')
                ->where('nama', 'LIKE', "%$search%")
                ->get();
        } else {
            $search = $request->q;
            $status = DB::table('status')
                ->select('id', 'nama')
                ->get();
        }
        return response()->json($status);
    }

    public function nikSearch(Request $request)
    {
        $nik = [];

        if ($request->has('q')) {
            $search = $request->q;
            $nik = DB::connection('mysql2')
                ->table('data_employee')
                ->select('id', 'name', 'branch_id')
                ->where('id', 'LIKE', "%$search%")
                ->get();
        } else {
            $search = $request->q;
            $nik = DB::connection('mysql2')
                ->table('data_employee')
                ->select('id', 'name', 'branch_id')
                ->get();
        }
        return response()->json($nik);
    }

    public function getDataNIK($id = 0)
    {
        $data = DB::connection('mysql2')
            ->table('data_employee')
            ->join('master_branch', 'data_employee.branch_id', '=', 'master_branch.id')
            ->join('auth_user', 'data_employee.id', '=', 'auth_user.username')
            ->where('data_employee.id', '=', $id)
            ->select('data_employee.id', 'data_employee.name', 'data_employee.branch_id', 'master_branch.id as branchehr', 'master_branch.name as namacabehr', 'auth_user.email')
            ->get();
        echo json_encode($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companyrate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {

    //     $username = $request->email;
    //     $password = $request->password;
    //     $ip_address = $request->ip_address;
    //     $url = $request->fullUrl();

    //     $nik = session('nik');
    //     $nikuser = $request->input('nik');
    //     // dd($nikuser);

    //     $request->validate([
    //         'companycode' => 'required',
    //         'companyname' => 'required',
    //         'rate' => 'required',
    //         'adminfee' => 'required',
    //         'provision' => 'required',
    //         'branchcode' => 'required',
    //         'created_by' => 'required'
    //     ]);

    //     $user_bank = DB::table('users_bank')
    //         ->select('nik')
    //         ->pluck('nik');

    //     // dd($user_bank);
    //     if ($user_bank->contains($nikuser)) {
    //         return redirect()->back()->withErrors("Rate Perusahaan sudah terdaftar")->withInput();
    //     } else {
    //         CompanyRate::create($request->all());

    //         AktifitasModel::insert([
    //             'nik' => $nik,
    //             'email' => $nik,
    //             'ip_address' => $ip_address,
    //             'nama' => $nik,
    //             'url' => $url,
    //             'action' => 'Create User ' . $username,
    //             'status' => 'Success',
    //             'caused_by' => '',
    //             'created_at' => now(),
    //             'updated_at' => now(),

    //         ]);

    //         return redirect()->route('company-rate.index')
    //             ->with('success', 'Company Rate created successfully.');
    //     }
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    // public function show(User $user, $id = 0)
    // {
    //     // dd($id);
    //     $users = CompanyRate::where('id', $id)
    //         ->get();
    //     return view(
    //         'companyrate.show',
    //         [
    //             'users' => $users
    //         ]
    //     );
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function edit(User $user, $id = 0)
    // {
    //     // dd($id);

    //     $users = CompanyRate::where('id', $id)
    //         ->get();
    //     $branchall = [];
    //     $branchlist = Branchlist::select("branch_code", "branch_name")
    //         ->where('branch_code', $user->branch_code)
    //         ->orderBy('branch_code', 'asc')
    //         ->get();
    //     foreach ($branchlist as $branch) {
    //         $branchall[] = $branch->branch_code;
    //     }

    //     // $branchall = [];
    //     // $branchlist = DB::table('master_branch')
    //     //     ->select("id", "name")
    //     //     ->where('id', $user->kodecab)
    //     //     ->orderBy('id', 'asc')
    //     //     ->get();
    //     // foreach ($branchlist as $branch) {
    //     //     $branchall[] = $branch->id;
    //     // }

    //     $roleall = [];
    //     $rolelist = Role::select("id", "name")
    //         ->where('id', $user->role)
    //         ->orderBy('id', 'asc')
    //         ->get();
    //     foreach ($rolelist as $role) {
    //         $roleall[] = $role->id;
    //     }

    //     $statusall = [];
    //     $statuslist = DB::table('status')
    //         ->select('id', 'nama')
    //         ->where('id', $user->status)
    //         ->orderBy('id', 'asc')
    //         ->get();
    //     foreach ($statuslist as $status) {
    //         $statusall[] = $status->id;
    //     }
    //     //dd($branchall);
    //     //return view('users.create',compact('branchlist'));
    //     return view('companyrate.edit', compact('id', 'users', 'branchlist', 'branchall', 'rolelist', 'roleall', 'statuslist', 'statusall'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, User $user, $id = 0)
    // {
    //     $username = $request->email;
    //     $password = $request->password;
    //     $ip_address = $request->ip_address;
    //     $url = $request->fullUrl();

    //     $nik = session('nik');
    //     $request->validate([
    //         'companycode' => 'required',
    //         'companyname' => 'required',
    //         'rate' => 'required',
    //         'adminfee' => 'required',
    //         'provision' => 'required',
    //         'branchcode' => 'required',
    //         'created_by' => 'required'
    //     ]);

    //     // $user->update($request->all());

    //     $companycode = $request->companycode;
    //     $companyname = $request->companyname;
    //     $rate = $request->rate;
    //     $adminfee = $request->adminfee;
    //     $provision = $request->provision;
    //     $branchcode = $request->branchcode;
    //     $created_by = $request->created_by;

    //     CompanyRate::where('id', $id)
    //         ->update(
    //             [
    //                 'companycode' => $companycode,
    //                 'companyname' => $companyname,
    //                 'rate' => $rate,
    //                 'adminfee' => $adminfee,
    //                 'provision' => $provision,
    //                 'branchcode' => $branchcode,
    //                 'created_by' => $created_by

    //             ]
    //         );

    //     AktifitasModel::insert([
    //         'nik' => $nik,
    //         'email' => $nik,
    //         'ip_address' => $ip_address,
    //         'nama' => $nik,
    //         'url' => $url,
    //         'action' => 'Update User ' . $username,
    //         'status' => 'Success',
    //         'caused_by' => '',
    //         'created_at' => now(),
    //         'updated_at' => now(),

    //     ]);

    //     return redirect()->route('company-rate.index')
    //         ->with('success', 'Company Rate updated successfully');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
