<?php

use Illuminate\Support\Facades\DB;

/**
 * [total_warga_rt description]
 * @param  [type] $rt [description]
 * @return [type]     [description]
 */

function format_date_view($date)
{

    if ($date == '0000-00-00 00:00:00' || $date == null) {
        $resultdate = '';
    } else {
        $resultdate = date('Y-m-d', strtotime($date));
    }
    return $resultdate;
}

function checkref($ref_no)
    {
        $checkRefNoStepFive = DB::table('applicant_stepfive')
            ->join('kta_scoring', 'applicant_stepfive.ref_no', '=', 'kta_scoring.ref_no')
            ->select('applicant_stepfive.ref_no')
            ->where('applicant_stepfive.ref_no', $ref_no)
            ->get();

        // dd($checkRefNoStepFive);
        // return $checkRefNoStepFive;
        
            // ->where('applicant_stepfive.ref_no', $ref_no)
    }

function get_name_ehr($id)
{
    $users = DB::connection('mysql_ehr')->select('select name from data_employee where id = :id', ['id' => $id]);
    $name = '';
    foreach ($users as $u) {
        $name = $u->name;
    }
    //dd($name);
    return $name;
}

function get_cabang_ehr($id)
{
    $users = DB::connection('mysql_ehr')->select('SELECT master_branch.`name FROM data_employee INNER JOIN master_branch ON data_employee branch_id = master_branch.id where data_employee.id = :id', ['id' => $id]);
    $name = '';
    foreach ($users as $u) {
        $name = $u->name;
    }
    //dd($name);
    return $name;
}

function log_aktifitas($ket)
{
    DB::insert('insert into t_log_aktifitas (
            nik,
            nama,
            ket,
            created_at,
            updated_at
            ) values (?,?,?,?,?)', [
        session('nik'),
        session('nama'),
        $ket,
        date('Y-m-d H:i:s'),
        date('Y-m-d H:i:s')
    ]);

    return true;
}

// function get_jml_transaksi($id)
// {
//     if($id !== NULL ){
//         $jml=\App\Models\Transaction::where('entity_reference','=', $id)->count();

//         $data=$jml;

//     }else{
//         $data='';
//     }

//     return $data;
// }

//  function get_jenis_transaksi($id)
// {
//     if($id !== NULL ){
//         $keterangan=\App\Models\JenisTransalksiMode::where('Kode','=', $id)->first();
// 		if($keterangan==null){
// 		$data='';
// 		}else{
//         $data=$keterangan->Keterangan;
// 		}
//     }else{
//         $data='';
//     }

//     return $data;
// }

// function get_instrumen_transaksi($id)
// {

//     if($id !== NULL ){
//         $keterangan=\App\Models\InstrumenTransaksi::where('Kode','=', $id)->first();
//         if($keterangan==null){
// 		$data='';
// 		}else{
// 			$data=$keterangan->Keterangan;
// 		}
//     }else{
//         $data='';
//     }

//     return $data;
// }


// function get_negara($id)
// {
//     if($id !== NULL ){
//         $keterangan=\App\Models\NamaNegara::where('Kode','=', $id)->first();
//         if($keterangan==null){
// 		$data='';
// 		}else{
// 			$data=$keterangan->Keterangan;
// 		}
//     }else{
//         $data='';
//     }

//     return $data;

// }

// function get_jenis_rek($id)
// {
//     if($id !== NULL ){
//         $keterangan=\App\Models\JenisRekening::where('Kode','=', $id)->first();
// 		if($keterangan==null){
// 		$data='';
// 		}else{
//         $data=$keterangan->Keterangan;
// 		}
//     }else{
//         $data='';
//     }

//     return $data;
// }

// function get_status_rek($id)
// {
//     if($id !== NULL ){
//         $keterangan=\App\Models\StatusRekening::where('Kode','=', $id)->first();
// 		if($keterangan==null){
// 		$data='';
// 		}else{
//         $data=$keterangan->Keterangan;
// 		}
//     }else{
//         $data='';
//     }

//     return $data;
// }

// function get_mata_uang($id)
// {


//     if($id !== NULL ){
//         $keterangan=\App\Models\MataUangDunia::where('Kode','=', $id)->first();
//         if($keterangan==null){
// 		$data='';
// 		}else{
// 			$data=$keterangan->Keterangan;
// 		}
//     }else{
//         $data='';
//     }

//     return $data;
// }

// function get_gender($id)
// {
//     if($id !== NULL ){
//         $keterangan=\App\Models\JenisKelamin::where('Kode','=', $id)->first();
//         if($keterangan==null){
// 		$data='';
// 		}else{
// 			$data=$keterangan->Keterangan;
// 		}
//     }else{
//         $data='';
//     }

//     return $data;
// }

// function get_kategori_kontak($id)
// {
//     if($id !== NULL ){
//         $keterangan=\App\Models\KategoriKontak::where('Kode','=', $id)->first();
//         if($keterangan==null){
// 		$data='';
// 		}else{
// 			$data=$keterangan->Keterangan;
// 		}
//     }else{
//         $data='';
//     }

//     return $data;
// }

// function get_alat_komunikasi($id)
// {
//     if($id !== NULL ){
//         $keterangan=\App\Models\JenisAlatkomunikasi::where('Kode','=', $id)->first();
//         if($keterangan==null){
// 		$data='';
// 		}else{
// 			$data=$keterangan->Keterangan;
// 		}
//     }else{
//         $data='';
//     }

//     return $data;
// }

// function get_no_ref($report_code)
// {

//         $nomor=\App\Models\CounterLaporan::where('TahunLaporan','=', date('Y'))->where('report_code','=',$report_code)->orderBy('Nomax', 'DESC')->first();

//         if($nomor === NULL){
//             $tahun=date('Y');
//             $nomax=1;
//             $no=$report_code.$tahun.'-'.$nomax;
//         }else{
//             $tahun=$nomor->TahunLaporan;
//             $nomax=$nomor->Nomax+1;
//             $no=$report_code.$tahun.'-'.$nomax;

//         }

//     return $no;
// }

// function get_userid($id)
// {

//         $userid=\App\User::where('id','=',$id)->first();

//         if($userid === NULL){
//             $data='';
//         }else{
//             $data=$userid->name;
//         }

//     return $data;
// }

// function get_submission_code($id)
// {

//         $type=\App\Models\SubmissionType::where('Kode','=',$id)->first();

//         if($type === NULL){
//             $data='';
//         }else{
//             $data=$type->Keterangan;
//         }

//     return $data;
// }

// function get_peran($id)
// {

//         $type=\App\Models\PeranDalamRekening::where('Kode','=',$id)->first();

//         if($type === NULL){
//             $data='';
//         }else{
//             $data=$type->Keterangan;
//         }

//     return $data;
// }


// function get_no_max($report_code)
// {

//         $nomor=\App\Models\CounterLaporan::where('TahunLaporan','=', date('Y'))->where('report_code','=',$report_code)->orderBy('Nomax', 'DESC')->first();

//         if($nomor === NULL){
//             $tahun=date('Y');
//             $nomax=1;
//             $no=$report_code.$tahun.'-'.$nomax;
//         }else{
//             $tahun=$nomor->TahunLaporan;
//             $nomax=$nomor->Nomax+1;
//             $no=$report_code.$tahun.'-'.$nomax;

//         }

//         //dd($no);


//     return $nomax;
// }

function format_tanggal($id)
{
    if ($id !== NULL) {
        $tanggal = date('d-M-Y', strtotime($id));
    } else {
        $tanggal = '';
    }

    return $tanggal;
}

function format_nominal($id)
{
    $nominal = number_format($id, 2, ',', '.');
    return $nominal;
}

function format_tanggal_xml($id)
{

    if ($id !== NULL && $id !== '0000-00-00 00:00:00') {
        $tanggal = date('Y-m-d', strtotime($id)) . 'T' . date('H:i:s', strtotime($id));
    } else {
        $tanggal = '';
    }

    return $tanggal;
}


function getfromto($id)
{
    if ($id == 't_from_my_client') {
        $name = '(From My Client)';
    } else if ($id == 't_from') {
        $name = '(From)';
    } else if ($id == 't_to_my_client') {
        $name = '(To My Client)';
    } else if ($id == 't_to') {
        $name = '(To)';
    } else {
        $name = '';
    }
    return $name;
}
