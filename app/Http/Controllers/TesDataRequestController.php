<?php

namespace App\Http\Controllers;

use App\Models\AktifitasModel;
use App\Models\ApplicantStepFiveModel;
use App\Models\DataReq;
use App\Models\DetailKTAScoringModel;
use App\Models\KTAScoringModel;
use App\Models\LogRequest;
use App\Models\MainAccount;
use App\Models\SubmittedData;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToArray;
use Symfony\Component\Mime\Header\Headers;

class TesDataRequestController extends Controller
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

        // dd($nik);

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

        $branch_id = session('branch');
        $firstchar = $altbranch[0];

        $token = DB::table('tbl_token_access')
            ->where('client_id', '=', $nik)
            ->orderBy('create_date', 'desc') 
            ->value('access_token');

        $auth = DB::table('tbl_token_access')
            ->where('client_id', '=', $nik)
            ->pluck('client_key')
            ->last();

        // dd($token);

        $compname = DB::table('ref_comp')
            ->get();

        $ind = DB::table('ref_industry')
            ->get();

        if ($firstchar == 0) {
            $scoring = SubmittedData::where('response_code', 'like', "%{$keyword}%")
                ->orderBy('insert_date', 'desc')
                ->paginate($pagination);
        }

        // else {
        //     $scoring = ApplicantStepFiveModel::where('kabupatenkota', 'like', '%' . $altbranchcity . '%')
        //         ->where('ref_no', 'like', "%{$keyword}%")

        //         ->paginate($pagination);
        // }

        $scoring->appends($request->only('keyword'));

        return view('eform.first1', [
            'ref_no'    => 'Ref No',
            'scoring' => $scoring,
            'ind' => $ind,
            'token' => $token,
            'auth' => $auth
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function store(Request $request)
    {
        $created_by = $request->input('created_by');
        $nik = $request->input('nik');
        $norek = $request->input('norek');
        $status_emp = $request->input('status_emp');
        $condition = $request->input('condition');
        $collateral_year = $request->input('collateral_year');
        $collateral_month = $request->input('collateral_month');
        $capacity = $request->input('capacity');
        $capital = $request->input('capital');
        $character = $request->input('character');

        $url = $request->fullUrl();

        $authHeader = $request->header('Authorization');

        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'norek' => 'required',
            'status_emp' => 'required',
            'condition' => 'required',
            'collateral_year' => 'required',
            'collateral_month' => 'required',
            'capacity' => 'required',
            'capital' => 'required',
            'character' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'stdCode' => '01',
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }

        $jsonparams = [
            'nik' => $nik,
            'norek' => $norek,
            'status_emp' => $status_emp,
            'capacity' => $capacity,
            'collateral_year' => $collateral_year,
            'collateral_month' => $collateral_month,
            'condition' => $condition,
            'capital' => $capital,
            'character' => $character
        ];

        $datareq = DataReq::create($request->all());
        MainAccount::create($request->all());
        // $logRequest = new LogRequest();
        // $logRequest->nik = $nik;
        // $logRequest->norek = $norek;
        // $logRequest->ip_address = session('ip_address');
        // $logRequest->params = json_encode($jsonparams);
        // $logRequest->save();

        // $arrayLog = $logRequest->toArray();
        // $arrayLog['params'] = json_decode($arrayLog['params']);

        // return response()->json([
        //     'success' => true,
        //     'stdCode' => '00',
        //     'message' => 'Request Tersimpan',
        //     'data' => $arrayLog
        // ], 200, [], JSON_UNESCAPED_SLASHES);

        return redirect()->back()->with('success', 'Data tersimpan');
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

        $id = KTAScoringModel::select('id')
            ->where('ref_no', $ref_no)
            ->pluck('id')->first();
        // dd($ref_no);

        $ktaapa = DB::table('applicant_stepfive')
            ->select('produk_pinjaman')
            ->where('applicant_stepfive.ref_no', $ref_no)
            ->pluck('produk_pinjaman')->first();

        $checkTableScoring = DB::table('kta_scoring')
            ->select('ref_no')
            ->where('ref_no', $ref_no)
            ->count();

        $checkTableDBR = DB::table('dbr_kta_acc')
            ->select('ref_no')
            ->where('ref_no', $ref_no)
            ->count();

        if ($ktaapa == 'KTA Payroll') {
            $checkTableDBRUsaha = 0;
            $checkTableDBR = DB::table('dbr_kta_acc')
                ->select('ref_no')
                ->where('ref_no', $ref_no)
                ->count();
            if ($checkTableDBR == 0) {
                $scoredbr = 0;
                $new_dbr = 0;
            } else {
                $getDBR = DB::table('dbr_kta_acc')
                    ->select('new_dbr')
                    ->where('ref_no', $ref_no)
                    ->get();

                foreach ($getDBR as $get) {
                    $new_dbr = $get->new_dbr;
                }

                // dd($new_dbr);

                if ($new_dbr < 35) {
                    $scoredbr = 4;
                } else if ($new_dbr > 35 && $new_dbr < 55) {
                    $scoredbr = 3;
                } else if ($new_dbr >= 55) {
                    $scoredbr = 2;
                } else if ($new_dbr >= 70) {
                    $scoredbr = 1;
                } else {
                    $scoredbr = 0;
                }
            }
        } else if ($ktaapa == 'KTA Retail') {
            $checkTableDBR = 0;
            $checkTableDBRUsaha = DB::table('dbr_usaha_acc')
                ->select('ref_no')
                ->where('ref_no', $ref_no)
                ->count();

            if ($checkTableDBRUsaha == 0) {
                $new_dbr = 0;
                $scoredbr = 0;
                // dd($scoredbr);
            } else {
                $getDBR = DB::table('dbr_usaha_acc')
                    ->select('new_dbr')
                    ->where('ref_no', $ref_no)
                    ->get();

                foreach ($getDBR as $get) {
                    $new_dbr = $get->new_dbr;
                }

                if ($new_dbr < 35) {
                    $scoredbr = 4;
                } else if ($new_dbr > 35 && $new_dbr < 55) {
                    $scoredbr = 3;
                } else if ($new_dbr >= 55) {
                    $scoredbr = 2;
                } else if ($new_dbr >= 70) {
                    $scoredbr = 1;
                } else {
                    $scoredbr = 0;
                }
            }
        }

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

        $scoreusia = DB::table('scoring_stepone')
            ->select('score')
            ->where('kode_scoring', 'usia')
            ->where('item_scoring', $usia)
            ->pluck('score')->first();

        $scoremarital = DB::table('scoring_stepone')
            ->select('score')
            ->where('kode_scoring', 'marital')
            ->where('item_scoring', $marital_status)
            ->pluck('score')->first();

        $scoretanggungan = DB::table('scoring_stepone')
            ->select('score')
            ->where('kode_scoring', 'tanggungan')
            ->where('item_scoring', $julah_tanggungan)
            ->pluck('score')->first();

        $scorehousing = DB::table('scoring_stepone')
            ->select('score')
            ->where('kode_scoring', 'housing')
            ->where('item_scoring', $housing)
            ->pluck('score')->first();

        $scorelos = DB::table('scoring_stepone')
            ->select('score')
            ->where('kode_scoring', 'los')
            ->where('item_scoring', $los_year)
            ->pluck('score')->first();

        $scorehubungan = DB::table('scoring_steptwo')
            ->select('score')
            ->where('kode_scoring', 'hubungan')
            ->where('item_scoring', $hubungan)
            ->pluck('score')->first();

        $scorejabatan = DB::table('scoring_stepthree')
            ->select('score')
            ->where('kode_scoring', 'jabatan')
            ->where('item_scoring', $jabatan)
            ->pluck('score')->first();

        $scorepekerjaan = DB::table('scoring_stepthree')
            ->select('score')
            ->where('kode_scoring', 'pekerjaan')
            ->where('item_scoring', $pekerjaan)
            ->pluck('score')->first();

        if ($lama_bekerja_tahun == 0) {
            $scorelamabekerja = 0;
        } else {
            if ($lama_bekerja_tahun > 10) {
                $scorelamabekerja = 4;
            } else {
                $scorelamabekerja = DB::table('scoring_stepthree')
                    ->select('score')
                    ->where('kode_scoring', 'lamabekerja')
                    ->where('item_scoring', $lama_bekerja_tahun)
                    ->pluck('score')->first();
            }
        }

        $getpenghasilan = DB::table('scoring_stepthree')
            ->select('item_scoring')
            ->where('kode_scoring', 'penghasilan')
            ->get();
        // dd($getpenghasilan);

        // if($penghasilan_perbulan_number > )

        $scorepenghasilan = DB::table('scoring_stepthree')
            ->select('score')
            ->where('kode_scoring', 'penghasilan')
            ->where('item_scoring', '<=', $penghasilan_perbulan_number)
            ->pluck('score')->first();

        $getregion = DB::table('master_region_kc')
            ->select('nama_region')
            ->where('nama_wilayah', 'like', "%{$kabupatenkota}%")
            ->pluck('nama_region')->first();
        // dd($getregion);

        $scoreregion = DB::table('scoring_stepone')
            ->select('score')
            ->where('kode_scoring', 'region')
            ->where('item_scoring', $getregion)
            ->pluck('score')->first();

        $scorecreditcard = DB::table('scoring_stepfour')
            ->select('score')
            ->where('kode_scoring', 'havingcard')
            ->where('item_scoring', $creditcard)
            ->pluck('score')->first();

        if ($scorecreditcard == 0) {
            $limit = 'Tidak Memiliki Kartu Kredit';
            $lama_kepemilikan_tahun = 'Tidak Memiliki Kartu Kredit ';
            $scorelimit = 0;
            $scorelamakepemilikan = 0;
        } else {
            $limit = $limit;
            $lama_kepemilikan_tahun = $lama_kepemilikan_tahun;
            $scorelimit = DB::table('scoring_stepfour')
                ->select('score')
                ->where('kode_scoring', 'limit')
                ->where('item_scoring', '<=', $limit_number)
                ->pluck('score')->first();

            if ($lama_kepemilikan_tahun == 0) {
                $scorelamakepemilikan = 0;
            } else {
                $scorelamakepemilikan = DB::table('scoring_stepfour')
                    ->select('score')
                    ->where('kode_scoring', 'lamakepemilikan')
                    ->where('item_scoring', '=', $lama_kepemilikan_tahun)
                    ->pluck('score')->first();
            }
        }

        $scorejumlahpinjaman = DB::table('scoring_stepfive')
            ->select('score')
            ->where('kode_scoring', 'jumlahpengajuan')
            ->where('item_scoring', '<=', $jumlah_pinjaman_number)
            ->pluck('score')->last();

        $getjangkawaktu = DB::table('scoring_stepfive')
            ->select('item_scoring')
            ->where('kode_scoring', 'jangkawaktu')
            ->pluck('item_scoring')->last();

        if ($jangka_waktu > $getjangkawaktu) {
            $scorejangkawaktu = 0;
        } else if ($jangka_waktu == 6) {
            $scorejangkawaktu = DB::table('scoring_stepfive')
                ->select('score')
                ->where('kode_scoring', 'jangkawaktu')
                ->where('item_scoring', '<=', $jangka_waktu)
                ->pluck('score')->first();
        } else {
            $scorejangkawaktu = DB::table('scoring_stepfive')
                ->select('score')
                ->where('kode_scoring', 'jangkawaktu')
                ->where('item_scoring', '<=', $jangka_waktu)
                ->pluck('score')->last();
        }
        // $scorejumlahpinjaman = 
        // dd($lama_kepemilikan_tahun);

        // dd($scorejangkawaktu);
        return view('globalscoring.edit', compact(
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
            'id',
            'tokenreg',
            'namapemohon',
            'produk_pinjaman',
            'jumlah_pinjaman',
            'jumlah_pinjaman_number',
            'jangka_waktu',
            'marital_status',
            'scoreusia',
            'scoremarital',
            'scoretanggungan',
            'scorehousing',
            'scorelos',
            'scorehubungan',
            'scorejabatan',
            'scorepekerjaan',
            'scorelamabekerja',
            'scorepenghasilan',
            'getregion',
            'scoreregion',
            'scorecreditcard',
            'scorelimit',
            'scorelamakepemilikan',
            'scorejumlahpinjaman',
            'scorejangkawaktu',
            'checkTableScoring',
            'checkTableDBR',
            'checkTableDBRUsaha',
            'new_dbr',
            'scoredbr',
            'ktaapa'

        ));
    }

    public function update(Request $request, KTAScoringModel $scoring)
    {
        $created_by = $request->input('created_by');
        $nik = $request->input('nik');
        $tokenreg = $request->input('tokenreg');
        $ref_no = $request->input('ref_no');
        $namapemohon = $request->input('namapemohon');
        $kabupatenkota = $request->input('kabupatenkota');
        $produkkta = $request->input('produkkta');
        $totalscore = $request->input('totalscore');
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
        // dd($namapemohon);

        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'tokenreg' => 'required',
            'ref_no' => 'required',
            'namapemohon' => 'required',
            'kabupatenkota' => 'required',
            'produkkta' => 'required',
            'totalscore' => 'required',
            'flag_approval' => 'required',
            'flag_disbursement' => 'required',
            'created_by' => 'required'
        ]);

        // dd($scoring_result);
        $scoring->update($request->all());
        // dd($tokenreg);
        AktifitasModel::insert([
            'nik' => $created_by,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Update Scoring KTA for Ref No ' . $ref_no,
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DetailKTAScoringModel::where('ref_no', $ref_no)
            ->update([
                'nik' => $nik,
                'tokenreg' => $tokenreg,
                'ref_no' => $ref_no,
                'produkkta' => $produkkta,
                'namapemohon' => $namapemohon,
                'kabupatenkota' => $kabupatenkota,
                'scoreusia' => $scoreusia,
                'scoremarital' => $scoremarital,
                'scoretanggungan' => $scoretanggungan,
                'scorehousing' => $scorehousing,
                'scorelos' => $scorelos,
                'scoreregion' => $scoreregion,
                'scorehubungan' => $scorehubungan,
                'scorepekerjaan' => $scorepekerjaan,
                'scorejabatan' => $scorejabatan,
                'scorelamabekerja' => $scorelamabekerja,
                'scorecreditcard' => $scorecreditcard,
                'scorelamakepemilikan' => $scorelamakepemilikan,
                'scorejumlahpinjaman' => $scorejumlahpinjaman,
                'scorejangkawaktu' => $scorejangkawaktu,
                'scoredhbi' => $scoredhbi,
                'scoreslik' => $scoreslik,
                'scoredbr' => $scoredbr,
                'scorereferensi' => $scorereferensi,
                'scoreteldeb' => $scoreteldeb,
                'scoretelkel' => $scoretelkel,
                'scoretelper' => $scoretelper,
                'created_by' => $created_by

            ]);
        AktifitasModel::insert([
            'nik' => $created_by,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Update Detail Scoring KTA for Ref No ' . $ref_no,
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return redirect()->back()->with('success', 'Data Scoring terupdate');
    }

    public function show($id = 0)
    {
        $ayeuna = Carbon::now();
        $yeuh = $ayeuna->format('Y');

        $scoring = DB::table('submitted_data')
            ->where('id', $id)
            ->get();

        return view('globalscoring.show', compact(
            'scoring',
            'id'
        ));
    }

    public function validateRekening($norek = 0)
    {
        $data = DB::table('log_request_score')
            ->select("norek")
            ->where("norek", $norek)
            ->get();
        echo json_encode($data);
    }

    public function validateNIK($nik = 0)
    {
        $data = DB::table('log_request_score')
            ->select("nik")
            ->where("nik", $nik)
            ->get();
        echo json_encode($data);
    }
}
