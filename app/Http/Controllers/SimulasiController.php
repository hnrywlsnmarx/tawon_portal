<?php

namespace App\Http\Controllers;

use App\Models\EFormModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimulasiController extends Controller
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

        $simulasi = EFormModel::where('nama', 'like', "%{$keyword}%")
            ->where('created_at', 'like', '%' . $yeuh . '%')
            ->paginate($pagination);

        $simulasi->appends($request->only('keyword'));

        return view('simulasi.index', [
            'nik'    => 'NIK',
            'simulasi' => $simulasi,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function show($nik = 0)
    {
        $simulasi = DB::table('simulasi')->where('nik', $nik)->get();
        
        return view('simulasi.show', compact('simulasi'));
    }
}
