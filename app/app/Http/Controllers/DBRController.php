<?php

namespace App\Http\Controllers;

use App\Models\AktifitasModel;
use App\Models\ApplicantStepFiveModel;
use App\Models\DBRAccKTAModel;
use App\Models\DBRKTAModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DBRController extends Controller
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
            $scoring = DB::table('applicant_stepfive')
                ->join('applicant_stepthree', 'applicant_stepfive.nik', '=', 'applicant_stepthree.nik')
                ->where('ref_no', 'like', "%{$keyword}%")
                ->where('applicant_stepthree.pekerjaan', '!=', 'Pengusaha')
                // ->where('applicant_stepfive.produk_pinjaman', '!=', 'KTA Retail')
                ->where('flag_approval', 0)
                ->paginate($pagination);
        } else {
            $scoring = ApplicantStepFiveModel::join('applicant_stepthree', 'applicant_stepfive.nik', '=', 'applicant_stepthree.nik')
                ->where('kabupatenkota', 'like', '%' . $altbranchcity . '%')
                ->where('applicant_stepthree.pekerjaan', '!=', 'Pengusaha')
                // ->where('applicant_stepfive.produk_pinjaman', '!=', 'KTA Retail')
                ->where('ref_no', 'like', "%{$keyword}%")
                ->where('flag_approval', 0)
                ->paginate($pagination);
        }

        // dd($scoring);

        $scoring->appends($request->only('keyword'));

        return view('globaldbr.index', [
            'ref_no'    => 'Ref No',
            'scoring' => $scoring,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function store(Request $request)
    {
        $url = $request->fullUrl();
        $usrnm = session('nama');
        $nik = session('nik');
        $ref_no = $request->input('ref_no');
        // dd($ref_no);
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'tokenreg' => 'required',
            'ref_no' => 'required',
            'namapemohon' => 'required',
            'kabupatenkota' => 'required',
            'pekerjaan' => 'required',
            'status_bi_checking' => 'required',
            'last_slik' => 'required',
            'last_slik_hid' => 'required',
            'nama_bank' => 'required',
            'limit' => 'required',
            'limit_number' => 'required',
            'balance' => 'required',
            'balance_number' => 'required',
            'credit_facility' => 'required',
            'rate' => 'required',
            'rate_number' => 'required',
            'maturity' => 'required',
            'maturity_hid' => 'required',
            'installment' => 'required',
            'installment_number' => 'required',
            'created_by' => 'required'
        ]);

        DBRKTAModel::create($request->all());
        AktifitasModel::insert([
            'nik' => $nik,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Counting DBR Karyawan for Ref No ' . $request->input('ref_no'),
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        $niknasabah = DB::table('applicant_stepfive')
            ->select('nik')
            ->where('ref_no', $ref_no)
            ->pluck('nik')
            ->last();
        // dd($niknasabah);

        DB::table('applicant_stepone')
            ->where('nik', $niknasabah)
            ->update([
                'flag_lock' => 1,
            ]);

        DB::table('applicant_steptwo')
            ->where('nik', $niknasabah)
            ->update([
                'flag_lock' => 1,
            ]);

        DB::table('applicant_stepthree')
            ->where('nik', $niknasabah)
            ->update([
                'flag_lock' => 1,
            ]);

        DB::table('applicant_stepfour')
            ->where('nik', $niknasabah)
            ->update([
                'flag_lock' => 1,
            ]);

        AktifitasModel::insert([
            'nik' => $nik,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Lock Eform NIK Nasabah ' . $niknasabah . ' Profil',
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->back()->with('success', 'Data DBR tersimpan');
    }

    public function storeacc(Request $request)
    {
        $url = $request->fullUrl();
        $usrnm = session('nama');
        $nik = session('nik');
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'tokenreg' => 'required',
            'ref_no' => 'required',
            'namapemohon' => 'required',
            'kabupatenkota' => 'required',
            'total_installment' => 'required',
            'dbr_existing' => 'required',
            'angsuran_kta' => 'required',
            'new_dbr' => 'required',
            'dsr_kta' => 'required',
            'created_by' => 'required'
        ]);

        DBRAccKTAModel::create($request->all());
        AktifitasModel::insert([
            'nik' => $nik,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => $usrnm,
            'url' => $url,
            'action' => 'Accumulating DBR Karyawan for Ref No ' . $request->input('ref_no'),
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return redirect()->back()->with('success', 'Data Akumulasi DBR tersimpan');
    }

    public function updateacc(Request $request)
    {
        // dd($dbracckta);
        $id = $request->input('id');
        // dd($id);
        $nik = $request->input('nik');
        $tokenreg = $request->input('tokenreg');
        $ref_no = $request->input('ref_no');
        $namapemohon = $request->input('namapemohon');
        $kabupatenkota = $request->input('kabupatenkota');
        $created_by = $request->input('created_by');
        $total_installment = $request->input('total_installment');
        $dbr_existing = $request->input('dbr_existing');
        $angsuran_kta = $request->input('angsuran_kta');
        $new_dbr = $request->input('new_dbr');
        $dsr_kta = $request->input('dsr_kta');

        $url = $request->fullUrl();
        $usrnm = session('nama');
        $created_by = session('nik');

        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'tokenreg' => 'required',
            'ref_no' => 'required',
            'namapemohon' => 'required',
            'kabupatenkota' => 'required',
            'total_installment' => 'required',
            'dbr_existing' => 'required',
            'angsuran_kta' => 'required',
            'new_dbr' => 'required',
            'dsr_kta' => 'required',
            'created_by' => 'required'
        ]);

        // $dbracckta->update($request->all());
        DBRAccKTAModel::where('ref_no', $ref_no)
            ->update([
                'nik' => $nik,
                'tokenreg' => $tokenreg,
                'ref_no' => $ref_no,
                'namapemohon' => $namapemohon,
                'kabupatenkota' => $kabupatenkota,
                'total_installment' => $total_installment,
                'dbr_existing' => $dbr_existing,
                'angsuran_kta' => $angsuran_kta,
                'new_dbr' => $new_dbr,
                'dsr_kta' => $dsr_kta,
                'created_by' => $created_by

            ]);

        AktifitasModel::insert([
            'nik' => $nik,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => $usrnm,
            'url' => $url,
            'action' => 'Update Accumulating DBR Karyawan for Ref No ' . $request->input('ref_no'),
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return redirect()->back()->with('success', 'Data Akumulasi DBR terupdate');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $nik = $request->input('nik');
        $tokenreg = $request->input('tokenreg');
        $ref_no = $request->input('ref_no');
        $namapemohon = $request->input('namapemohon');
        $kabupatenkota = $request->input('kabupatenkota');
        $pekerjaan = $request->input('pekerjaan');
        $status_bi_checking = $request->input('status_bi_checking');
        $last_slik  = $request->input('last_slik');
        $last_slik_hid = $request->input('last_slik_hid');
        $nama_bank = $request->input('nama_bank');
        $limit = $request->input('limit');
        $limit_number = $request->input('limit_number');
        $balance = $request->input('balance');
        $balance_number = $request->input('balance_number');
        $credit_facility = $request->input('credit_facility');
        $rate = $request->input('rate');
        $rate_number = $request->input('rate_number');
        $maturity = $request->input('maturity');
        $maturity_hid = $request->input('maturity_hid');
        $installment = $request->input('installment');
        $installment_number = $request->input('installment_number');
        $created_by = $request->input('created_by');
        $url = $request->fullUrl();

        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'tokenreg' => 'required',
            'ref_no' => 'required',
            'namapemohon' => 'required',
            'kabupatenkota' => 'required',
            'pekerjaan' => 'required',
            'status_bi_checking' => 'required',
            'last_slik' => 'required',
            'last_slik_hid' => 'required',
            'nama_bank' => 'required',
            'limit' => 'required',
            'limit_number' => 'required',
            'balance' => 'required',
            'balance_number' => 'required',
            'credit_facility' => 'required',
            'rate' => 'required',
            'rate_number' => 'required',
            'maturity' => 'required',
            'maturity_hid' => 'required',
            'installment' => 'required',
            'installment_number' => 'required',
            'created_by' => 'required'
        ]);

        // dd($dbrkta->ref_no);
        // dd($request->all());
        // $dbrkta->update($request->all());
        DBRKTAModel::where('id', $id)
            ->update([
                'nik' => $nik,
                'tokenreg' => $tokenreg,
                'ref_no' => $ref_no,
                'namapemohon' => $namapemohon,
                'pekerjaan' => $pekerjaan,
                'kabupatenkota' => $kabupatenkota,
                'status_bi_checking' => $status_bi_checking,
                'last_slik' => $last_slik,
                'last_slik_hid' => $last_slik_hid,
                'nama_bank' => $nama_bank,
                'limit' => $limit,
                'limit_number' => $limit_number,
                'balance' => $balance,
                'balance_number' => $balance_number,
                'credit_facility' => $credit_facility,
                'rate' => $rate,
                'maturity' => $maturity,
                'maturity_hid' => $maturity_hid,
                'installment' => $installment,
                'installment_number' => $installment_number,
                'created_by' => $created_by
            ]);

        AktifitasModel::insert([
            'nik' => $created_by,
            'email' => session('email'),
            'ip_address' => session('ip_address'),
            'nama' => session('nama'),
            'url' => $url,
            'action' => 'Update DBR Karyawan for Ref No ' . $request->input('ref_no'),
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return redirect()->back()->with('success', 'Data DBR terupdate');
    }

    public function edit(Request $request, $id = 0)
    {
        $ayeuna = Carbon::now();
        $yeuh = $ayeuna->format('Y');

        $dbr = DBRKTAModel::where('id', $id)
            ->get();

        $master_bank = DB::table('master_bank')
            ->get();

        // dd($dbr);

        foreach ($dbr as $db) {
            $ref_no = $db->ref_no;
            $nik = $db->nik;
            $tokenreg = $db->tokenreg;
            $namapemohon = $db->namapemohon;
            $kabupatenkota = $db->kabupatenkota;
            $pekerjaan = $db->pekerjaan;
            $status_bi_checking = $db->status_bi_checking;
            $last_slik = $db->last_slik;
            $last_slik_hid = $db->last_slik_hid;
            $nama_bank = $db->nama_bank;
            $limit = $db->limit;
            $limit_number = $db->limit_number;
            $balance = $db->balance;
            $balance_number = $db->balance_number;
            $credit_facility = $db->credit_facility;
            $rate = $db->rate;
            $rate_number = $db->rate_number;
            $maturity = $db->maturity;
            $maturity_hid = $db->maturity_hid;
            $installment = $db->installment;
            $installment_number = $db->installment_number;
            $created_by = $db->created_by;
        }

        // dd($nama_bank);

        return view(
            'globaldbr.edit',
            [

                'master_bank' => $master_bank,
                'nik' => $nik,
                'tokenreg' => $tokenreg,
                'ref_no' => $ref_no,
                'namapemohon' => $namapemohon,
                'kabupatenkota' => $kabupatenkota,
                'pekerjaan' => $pekerjaan,
                'status_bi_checking' => $status_bi_checking,
                'last_slik' => $last_slik,
                'last_slik_hid' => $last_slik_hid,
                'nama_bank' => $nama_bank,
                'limit' => $limit,
                'limit_number' => $limit_number,
                'balance' => $balance,
                'balance_number' => $balance_number,
                'credit_facility' => $credit_facility,
                'rate' => $rate,
                'rate_number' => $rate_number,
                'maturity' => $maturity,
                'maturity_hid' => $maturity_hid,
                'installment' => $installment,
                'installment_number' => $installment_number,
                'id' => $id,
                'created_by' => $created_by
            ]
        );
    }

    public function show($ref_no = 0)
    {
        // dd($ref_no);
        $ayeuna = Carbon::now();
        $yeuh = $ayeuna->format('Y');

        $master_bank = DB::table('master_bank')
            ->get();

        $scoring = DB::table('applicant_stepfive')
            ->join('applicant_stepfour', 'applicant_stepfive.nik', '=', 'applicant_stepfour.nik')
            ->join('applicant_stepthree', 'applicant_stepfive.nik', '=', 'applicant_stepthree.nik')
            ->join('applicant_steptwo', 'applicant_stepfive.nik', '=', 'applicant_steptwo.nik')
            ->join('applicant_stepone', 'applicant_stepfive.nik', '=', 'applicant_stepone.nik')
            ->where('applicant_stepfive.ref_no', $ref_no)
            ->get();

        $dbr = DBRKTAModel::where('ref_no', $ref_no)
            ->get();

        $dbracc = DBRAccKTAModel::where('ref_no', $ref_no)
            ->count();

        $sumlimit = DBRKTAModel::where('ref_no', $ref_no)
            ->sum('limit_number');
        // dd($sumlimit);
        $sumbalance = DBRKTAModel::where('ref_no', $ref_no)
            ->sum('balance_number');

        $suminstallment = DBRKTAModel::where('ref_no', $ref_no)
            ->sum('installment_number');

        $getnik = DB::table('applicant_stepfive')
            ->select('nik')
            ->where('ref_no', $ref_no)
            ->pluck('nik')->first();

        $checkDocUpload = DB::table('applicant_stepupload')
            ->where('nik', $getnik)
            ->count();

        // dd($checkDocUpload);

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
            $lama_bekerja_tahun = $score->lama_bekerja_tahun;
            $lama_bekerja_bulan = $score->lama_bekerja_bulan;
            $penghasilan_perbulan = $score->penghasilan_perbulan;
            $penghasilan_perbulan_number = $score->penghasilan_perbulan_number;
            $angsuran_perbulan = $score->angsuran_perbulan;
            $angsuran_perbulan_number = $score->angsuran_perbulan_number;
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
            $bank_penerbit = $score->bank_penerbit;
        }

        $ctStepFour = DB::table('applicant_stepfour')
            ->where('nik', $nik)
            ->where('tokenreg', $tokenreg)
            ->count();

        $stepfour = DB::table('applicant_stepfour')
            ->where('nik', $nik)
            ->where('tokenreg', $tokenreg)
            ->get();

        return view(
            'globaldbr.show',
            [
                'nik' => $nik,
                'tokenreg' => $tokenreg,
                'ref_no' => $ref_no,
                'namapemohon' => $namapemohon,
                'kabupatenkota' => $kabupatenkota,
                'pekerjaan' => $pekerjaan,
                'produk_pinjaman' => $produk_pinjaman,
                'creditcard' => $creditcard,
                'master_bank' => $master_bank,
                'bank_penerbit' => $bank_penerbit,
                'ctStepFour' => $ctStepFour,
                'stepfour' => $stepfour,
                'dbr' => $dbr,
                'penghasilan_perbulan' => $penghasilan_perbulan,
                'penghasilan_perbulan_number' => $penghasilan_perbulan_number,
                'sumlimit' => $sumlimit,
                'sumbalance' => $sumbalance,
                'suminstallment' => $suminstallment,
                'angsuran_perbulan' => $angsuran_perbulan,
                'angsuran_perbulan_number' => $angsuran_perbulan_number,
                'dbracc' => $dbracc,
                'checkDocUpload' => $checkDocUpload
            ]
        );
    }

    public function hapusdbr($id)
    {
        // $id = $request->input('id');
        // dd($id);
        $dbrusaha = DBRKTAModel::find($id);
        $dbrusaha->delete();

        return redirect()->back()->with('success', 'Data terhapus');
    }
}
