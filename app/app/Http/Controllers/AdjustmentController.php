<?php

namespace App\Http\Controllers;

use App\Models\AktifitasModel;
use App\Models\ApplicantStepFiveModel;
use App\Models\DetailKTAScoringModel;
use App\Models\KTAAdjustmentModel;
use App\Models\KTAScoringModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdjustmentController extends Controller
{
    //
    public function index(Request $request)
    {
        $pagination  = 10;
        $ayeuna = Carbon::now();
        $yeuh = $ayeuna->format('Y-m-d');
        $keyword = $request->input('keyword');

        $usrnm = session('nama');
        $nik = session('nik');

        $ref_nostepfive =  DB::table('applicant_stepfive')
            ->select('ref_no')
            ->pluck('ref_no')->all();
        $ref_nosocring = DB::table('kta_scoring')
            ->select('ref_no')
            ->pluck('ref_no')->all();
        // dd($ref_nostepfive);

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

        $checkRefNo = DB::table('applicant_stepfive')
            ->join('kta_scoring', 'applicant_stepfive.ref_no', '=', 'kta_scoring.ref_no')
            // ->select('kta_scoring.totalscore')
            // ->where('applicant_stepfive.ref_no', $ref_no)
            ->get();

        // dd($checkRefNo);

        $branch_id = session('branch');
        $firstchar = $altbranch[0];

        if ($firstchar == 0) {
            $scoring = KTAScoringModel::where('ref_no', 'like', "%{$keyword}%")
                ->where('flag_approval', 0)
                ->where('flag_disbursement', 0)
                ->paginate($pagination);
        } else {
            $scoring = KTAScoringModel::where('kabupatenkota', 'like', '%' . $altbranchcity . '%')
                ->where('ref_no', 'like', "%{$keyword}%")
                ->where('flag_approval', 0)
                ->where('flag_disbursement', 0)
                ->paginate($pagination);
        }

        $scoring->appends($request->only('keyword'));

        return view('globaladjustment.index', [
            'ref_no'    => 'Ref No',
            'scoring' => $scoring,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function store(Request $request)
    {
        $created_by = $request->input('created_by');
        $nik = $request->input('nik');
        $tokenreg = session('tokenreg');
        $ref_no = $request->input('ref_no');
        $namapemohon = $request->input('namapemohon');
        $kabupatenkota = $request->input('kabupatenkota');
        $produkkta = $request->input('produkkta');
        $totalscore = $request->input('totalscore');
        $adjustment_pinjaman =  $request->input('adjustment_pinjaman');
        $adjustment_pinjaman_number =  $request->input('adjustment_pinjaman_number');
        $flag_approval = $request->input('flag_approval');
        $flag_disbursement = $request->input('flag_disbursement');
        $scoreusia = $request->input('scoreusia');
        $scoremarital = $request->input('scoremarital');
        $scoretanggungan = $request->input('scoretanggungan');
        $scorehousing = $request->input('scorehousing');
        $scorelos = $request->input('scorelos');
        $scoreregion = $request->input('scoreregion');
        $scorehubungan = $request->input('scorehubungan');
        $scorepekerjaan = $request->input('scorepekerjaan');
        $scorejabatan = $request->input('scorejabatan');
        $scorelamabekerja = $request->input('scorelamabekerja');
        $scorecreditcard = $request->input('scorecreditcard');
        $scorelamakepemilikan = $request->input('scorelamakepemilikan');
        $scorejumlahpinjaman = $request->input('scorejumlahpinjaman');
        $scorejangkawaktu = $request->input('scorejangkawaktu');
        $scoredhbi = $request->input('scoredhbi');
        $scoreslik = $request->input('scoreslik');
        $scoredbr = $request->input('scoredbr');
        $scorereferensi = $request->input('scorereferensi');
        $scoreteldeb = $request->input('scoreteldeb');
        $scoretelkel = $request->input('scoretelkel');
        $scoretelper = $request->input('scoretelper');
        $url = $request->fullUrl();
        // dd($scoretanggungan);

        // dd($namapemohon);

        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'tokenreg' => 'required',
            'ref_no' => 'required',
            'namapemohon' => 'required',
            'kabupatenkota' => 'required',
            'produkkta' => 'required',
            'jumlah_pinjaman' => 'required',
            'totalscore' => 'required',
            'adjustment_pinjaman' => 'required',
            'adjustment_pinjaman_number' => 'required',
            'desired_branch' => 'required',
            'created_by' => 'required',
            'flag_approval' => 'required',
            'flag_disbursement' => 'required',
        ]);

        // dd($scoring_result);

        KTAAdjustmentModel::create($request->all());
        AktifitasModel::insert([
            'nik' => $created_by,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Adjusting and Distributing KTA by Ref No ' . $ref_no,
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return redirect()->back()->with('success', 'Data Adjustment tersimpan');
    }

    public function edit(Request $request, $ref_no = 0)
    {
        $ayeuna = Carbon::now();
        $yeuh = $ayeuna->format('Y');

        $scoring = DB::table('applicant_stepfive')
            ->join('applicant_stepfour', 'applicant_stepfive.nik', '=', 'applicant_stepfour.nik')
            ->join('applicant_stepthree', 'applicant_stepfive.nik', '=', 'applicant_stepthree.nik')
            ->join('applicant_steptwo', 'applicant_stepfive.nik', '=', 'applicant_steptwo.nik')
            ->join('applicant_stepone', 'applicant_stepfive.nik', '=', 'applicant_stepone.nik')
            ->where('applicant_stepfive.ref_no', $ref_no)
            ->get();

        $id = KTAAdjustmentModel::select('id')
            ->where('ref_no', $ref_no)
            ->pluck('id')->first();
        // dd($ref_no);

        $ktaapa = DB::table('applicant_stepfive')
            ->select('produk_pinjaman')
            ->where('applicant_stepfive.ref_no', $ref_no)
            ->pluck('produk_pinjaman')->first();

        $checkTableScoring = DB::table('kta_adjustment')
            ->select('ref_no')
            ->where('ref_no', $ref_no)
            ->count();

        $checkTableDBR = DB::table('dbr_kta_acc')
            ->select('ref_no')
            ->where('ref_no', $ref_no)
            ->count();        

        foreach ($scoring as $score) {
            $tgl_lahir = $score->tgl_lahir;
            $julah_tanggungan = $score->julah_tanggungan;
            $marital_status = $score->marital_status;
            $housing = $score->housing;
            $los_year = $score->los_year;
            $los_month = $score->los_month;
            $kabupatenkota = $score->kabupatenkota;
            $hubungan = $score->hubungan;
            $pekerjaan = $score->pekerjaan;
            $jabatan = $score->jabatan;
            $bidang_usaha = $score->bidang_usaha;
            $lama_bekerja_tahun = $score->lama_bekerja_tahun;
            $lama_bekerja_bulan = $score->lama_bekerja_bulan;
            $penghasilan_perbulan = $score->penghasilan_perbulan;
            $penghasilan_perbulan_number = $score->penghasilan_perbulan_number;
            $creditcard = $score->creditcard;
            $limit = $score->limit;
            $limit_number = $score->limit_number;
            $lama_kepemilikan_tahun = $score->lama_kepemilikan_tahun;
            $lama_kepemilikan_bulan = $score->lama_kepemilikan_bulan;
            $ref_no = $score->ref_no;
            $nik = $score->nik;
            $tokenreg = $score->tokenreg;
            $namapemohon = $score->nama;
            $produk_pinjaman = $score->produk_pinjaman;
            $jumlah_pinjaman = $score->jumlah_pinjaman;
            $jumlah_pinjaman_number = $score->jumlah_pinjaman_number;
            $jangka_waktu = $score->jangka_waktu;
        }

        $thn_lahir = substr($tgl_lahir, 6);
        $usia = $yeuh - $thn_lahir;

        $region = DB::table('master_region_kc')
            ->where('nama_wilayah', 'like', '%' . $kabupatenkota . '%')
            ->get();

        $bunga = DB::table('master_bunga')
            ->select('bunga')
            ->where('produk_kta', $ktaapa)
            ->where('jangka_waktu', $jangka_waktu)
            ->pluck('bunga')
            ->last();

        $adjustment_pinjaman =  DB::table('kta_adjustment')
            ->select('adjustment_pinjaman')
            ->where('ref_no', $ref_no)
            ->pluck('adjustment_pinjaman')
            ->first();

        $adjustment_pinjaman_number =  DB::table('kta_adjustment')
            ->select('adjustment_pinjaman_number')
            ->where('ref_no', $ref_no)
            ->pluck('adjustment_pinjaman_number')
            ->first();

        $desired_branch = DB::table('kta_adjustment')
            ->select('desired_branch')
            ->where('ref_no', $ref_no)
            ->pluck('desired_branch')
            ->first();

        
        // $scorejumlahpinjaman = 
        // dd($lama_kepemilikan_tahun);

        // dd($scorejangkawaktu);
        $totalscore = KTAScoringModel::select('totalscore')
            ->where('ref_no', $ref_no)
            ->pluck('totalscore')
            ->first();
        return view('globaladjustment.edit', compact(
            'scoring',
            'region',
            'usia',
            'julah_tanggungan',
            'housing',
            'los_year',
            'los_month',
            'kabupatenkota',
            'hubungan',
            'pekerjaan',
            'jabatan',
            'bidang_usaha',
            'lama_bekerja_tahun',
            'lama_bekerja_bulan',
            'penghasilan_perbulan',
            'penghasilan_perbulan_number',
            'creditcard',
            'limit',
            'limit_number',
            'lama_kepemilikan_tahun',
            'lama_kepemilikan_bulan',
            'ref_no',
            'nik',
            'id',
            'tokenreg',
            'namapemohon',
            'produk_pinjaman',
            'jumlah_pinjaman',
            'jumlah_pinjaman_number',
            'jangka_waktu',
            'marital_status',
            'ktaapa',
            'totalscore',
            'desired_branch',
            'adjustment_pinjaman',
            'adjustment_pinjaman_number',
            'bunga',
            'checkTableScoring'
        ));
    }

    public function update(Request $request, KTAAdjustmentModel $adjustment)
    {
        // dd($adjustment);
        $created_by = $request->input('created_by');
        $nik = $request->input('nik');
        $tokenreg = $request->input('tokenreg');
        $ref_no = $request->input('ref_no');
        $namapemohon = $request->input('namapemohon');
        $kabupatenkota = $request->input('kabupatenkota');
        $produkkta = $request->input('produkkta');
        $totalscore = $request->input('totalscore');
        $adjustment_pinjaman =  $request->input('adjustment_pinjaman');
        $adjustment_pinjaman_number =  $request->input('adjustment_pinjaman_number');
        $scoreusia = $request->input('scoreusia');
        $scoremarital = $request->input('scoremarital');
        $scoretanggungan = $request->input('scoretanggungan');
        $scorehousing = $request->input('scorehousing');
        $scorelos = $request->input('scorelos');
        $scoreregion = $request->input('scoreregion');
        $scorehubungan = $request->input('scorehubungan');
        $scorepekerjaan = $request->input('scorepekerjaan');
        $scorejabatan = $request->input('scorejabatan');
        $scorelamabekerja = $request->input('scorelamabekerja');
        $scorecreditcard = $request->input('scorecreditcard');
        $scorelamakepemilikan = $request->input('scorelamakepemilikan');
        $scorejumlahpinjaman = $request->input('scorejumlahpinjaman');
        $scorejangkawaktu = $request->input('scorejangkawaktu');
        $scoredhbi = $request->input('scoredhbi');
        $scoreslik = $request->input('scoreslik');
        $scoredbr = $request->input('scoredbr');
        $scorereferensi = $request->input('scorereferensi');
        $scoreteldeb = $request->input('scoreteldeb');
        $scoretelkel = $request->input('scoretelkel');
        $scoretelper = $request->input('scoretelper');
        $url = $request->fullUrl();
        // dd($adjustment_pinjaman);

        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'tokenreg' => 'required',
            'ref_no' => 'required',
            'namapemohon' => 'required',
            'kabupatenkota' => 'required',
            'produkkta' => 'required',
            'jumlah_pinjaman' => 'required',
            'totalscore' => 'required',
            'adjustment_pinjaman' => 'required',
            'adjustment_pinjaman_number' => 'required',
            'desired_branch' => 'required',
            'created_by' => 'required',
            'flag_approval' => 'required',
            'flag_disbursement' => 'required',
        ]);

        // dd($scoring_result);
        $adjustment->update($request->all());
        // dd($tokenreg);
        AktifitasModel::insert([
            'nik' => $created_by,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Update Adjustment & Distribusi KTA for Ref No ' . $ref_no,
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return redirect()->back()->with('success', 'Data Adjustment terupdate');
    }

    public function show($ref_no = 0)
    {
        $ayeuna = Carbon::now();
        $yeuh = $ayeuna->format('Y');

        $scoring = DB::table('applicant_stepfive')
            ->join('applicant_stepfour', 'applicant_stepfive.nik', '=', 'applicant_stepfour.nik')
            ->join('applicant_stepthree', 'applicant_stepfive.nik', '=', 'applicant_stepthree.nik')
            ->join('applicant_steptwo', 'applicant_stepfive.nik', '=', 'applicant_steptwo.nik')
            ->join('applicant_stepone', 'applicant_stepfive.nik', '=', 'applicant_stepone.nik')
            ->where('applicant_stepfive.ref_no', $ref_no)
            ->get();

        // dd($scoring);
        $created_by = DB::table('kta_scoring')
            ->select('created_by')
            ->where('ref_no', $ref_no)
            ->pluck('created_by')->last();

        $ktaapa = DB::table('applicant_stepfive')
            ->select('produk_pinjaman')
            ->where('applicant_stepfive.ref_no', $ref_no)
            ->pluck('produk_pinjaman')->last();

        $checkTableScoring = DB::table('kta_adjustment')
            ->select('ref_no')
            ->where('ref_no', $ref_no)
            ->count();

        foreach ($scoring as $score) {
            $tgl_lahir = $score->tgl_lahir;
            $julah_tanggungan = $score->julah_tanggungan;
            $marital_status = $score->marital_status;
            $housing = $score->housing;
            $los_year = $score->los_year;
            $los_month = $score->los_month;
            $kabupatenkota = $score->kabupatenkota;
            $hubungan = $score->hubungan;
            $pekerjaan = $score->pekerjaan;
            $jabatan = $score->jabatan;
            $bidang_usaha = $score->bidang_usaha;
            $lama_bekerja_tahun = $score->lama_bekerja_tahun;
            $lama_bekerja_bulan = $score->lama_bekerja_bulan;
            $penghasilan_perbulan = $score->penghasilan_perbulan;
            $penghasilan_perbulan_number = $score->penghasilan_perbulan_number;
            $creditcard = $score->creditcard;
            $limit = $score->limit;
            $limit_number = $score->limit_number;
            $lama_kepemilikan_tahun = $score->lama_kepemilikan_tahun;
            $lama_kepemilikan_bulan = $score->lama_kepemilikan_bulan;
            $ref_no = $score->ref_no;
            $nik = $score->nik;
            $tokenreg = $score->tokenreg;
            $namapemohon = $score->nama;
            $produk_pinjaman = $score->produk_pinjaman;
            $jumlah_pinjaman = $score->jumlah_pinjaman;
            $jumlah_pinjaman_number = $score->jumlah_pinjaman_number;
            $jangka_waktu = $score->jangka_waktu;
        }

        $bunga = DB::table('master_bunga')
            ->select('bunga')
            ->where('produk_kta', $ktaapa)
            ->where('jangka_waktu', $jangka_waktu)
            ->pluck('bunga')
            ->last();

        $thn_lahir = substr($tgl_lahir, 6);
        $usia = $yeuh - $thn_lahir;

        $region = DB::table('master_region_kc')
            ->where('nama_wilayah', 'like', '%' . $kabupatenkota . '%')
            ->get();

        $totalscore = KTAScoringModel::select('totalscore')
            ->where('ref_no', $ref_no)
            ->pluck('totalscore')
            ->last();

        return view('globaladjustment.show', compact(
            'scoring',
            'usia',
            'julah_tanggungan',
            'housing',
            'los_year',
            'los_month',
            'kabupatenkota',
            'hubungan',
            'pekerjaan',
            'jabatan',
            'bidang_usaha',
            'lama_bekerja_tahun',
            'lama_bekerja_bulan',
            'penghasilan_perbulan',
            'penghasilan_perbulan_number',
            'creditcard',
            'limit',
            'limit_number',
            'lama_kepemilikan_tahun',
            'lama_kepemilikan_bulan',
            'ref_no',
            'nik',
            'tokenreg',
            'namapemohon',
            'produk_pinjaman',
            'jumlah_pinjaman',
            'jumlah_pinjaman_number',
            'jangka_waktu',
            'marital_status',
            'checkTableScoring',
            'totalscore',
            'ktaapa',
            'region',
            'bunga',
            'created_by'
        ));
    }
}
