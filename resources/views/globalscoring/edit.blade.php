@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')					
<div class="left-content">				
    <h5 class="content-title mb-1">Edit Scoring KTA By Reference Number</h5>					
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">					
            <li class="breadcrumb-item"><a href="#">Edit Scoring KTA By Reference Number</a></li>					
            <li class="breadcrumb-item active" aria-current="page">Show</li>					
        </ol>					
    </nav>			
    <div class="pull-right mt-1">
        <a class="btn btn-sm btn-primary" href="{{ route('scoring.index') }}"> Back</a>
    </div>
</div>
@endsection('breadcrumb')
@section('content')
@if($checkTableScoring != 0)
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @foreach($errors->all() as $error)
        <div>
            <font color='red' style="font-weight: bold;">{{$error}}</font>
        </div>
    @endforeach
    <form action="{{ route('scoring.update', $id) }}" method="POST">
    @method('PUT')
    @csrf
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body" style="font-size: smaller;">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">NIK</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="hidden" class="form-control form-control-sm" required readonly value=" {{ session('nik') }}" style="background-color: white; border: none;" name="created_by">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $nik }}" style="background-color: white; border: none;" name="nik">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Token Registrasi</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $tokenreg }}" style="background-color: white; border: none;" name="tokenreg">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Reference Number</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $ref_no }}" style="background-color: white; border: none;" name="ref_no">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Nama Pemohon</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $namapemohon }}" style="background-color: white; border: none;" name="namapemohon">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Area Domisili</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $kabupatenkota }}" style="background-color: white; border: none;" name="kabupatenkota">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Produk KTA</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $produk_pinjaman }}" style="background-color: white; border: none;" name="produkkta"> 
                            </div>
                        </div>
                        <hr>
                        <input type="hidden" class="form-control form-control-sm" value="0" required readonly style="background-color: white; border: none;" name="flag_approval"> 
                        <input type="hidden" class="form-control form-control-sm" value="0" required readonly style="background-color: white; border: none;" name="flag_disbursement"> 
                    </div>
                </div>    
            </div>
            <div class="col-lg-8 col-md-8">
                
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-condensed" style="width: 100%; border-collapse: collapse; font-size: smaller;" border="0">
                            <tbody>
                                <tr style="background-color: rgb(178, 210, 251); font-weight: bolder;">
                                    <td>Item Scoring</td>
                                    <td>Variabel Scoring</td>
                                    <td>Score</td>
                                    <td>Bobot</td>
                                    <td>Base Score</td>
                                    <td>Result Scoring</td>
                                </tr>
                                <tr>
                                    <td>Usia</td>
                                    <td><input type="text" value="{{ $usia }}" style="width: 150px; border: none;" id="usia" name="usia" readonly></td>
                                    <td><input type="text" value="{{ $scoreusia }}" style="width: 42px; border: none;" id="scoreusia" name="scoreusia" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobotusia" name="bobotusia" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescoreusia" name="basescoreusia" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringusia" name="scoringusia" readonly></td>
                                </tr>
                                <tr>
                                    <td>Status Pernikahan</td>
                                    <td><input type="text" value="{{ $marital_status }}" style="width: 150px; border: none;" id="usia" name="usia" readonly></td>
                                    <td><input type="text" value="{{ $scoremarital }}" style="width: 42px; border: none;" id="scoremarital" name="scoremarital" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobotmarital" name="bobotmarital" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescoremarital" name="basescoremarital" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringmarital" name="scoringmarital" readonly></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Tanggungan</td>    
                                    <td><input type="text" value="{{ $julah_tanggungan }}"  style="width: 150px; border: none;" id="julah_tanggungan" name="julah_tanggungan" readonly></td> 
                                    <td><input type="text" value="{{ $scoretanggungan }}" style="width: 42px; border: none;" id="scoretanggungan" name="scoretanggungan" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobottanggungan" name="bobottanggungan" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescoretanggungan" name="basescoretanggungan" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringtanggungan" name="scoringtanggungan" readonly></td>
                                </tr>
                                <tr>
                                    <td>Status Hunian</td>
                                    <td><input type="text" value="{{ $housing }}"  style="width: 150px; border: none;" id="housing" name="housing" readonly></td>
                                    <td><input type="text" value="{{ $scorehousing }}" style="width: 42px; border: none;" id="scorehousing" name="scorehousing" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobothousing" name="bobothousing" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescorehousing" name="basescorehousing" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringhousing" name="scoringhousing" readonly></td>
                            
                                </tr>
                                <tr>
                                    <td>Lama Kepemilikan Hunian</td>
                                    <td><input type="text" value="{{ $los_year }} tahun {{ $los_month }} bulan"  style="width: 150px; border: none;" id="los_year" name="los_year" readonly></td>
                                    <td><input type="text" value="{{ $scorelos }}" style="width: 42px; border: none;" id="scorelos" name="scorelos" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobotlos" name="bobotlos" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescorelos" name="basescorelos" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringlos" name="scoringlos" readonly></td>
                                </tr>
                                <tr>
                                    <td>Region</td>
                                    <td><input type="text" value="{{ $kabupatenkota }} ({{ $getregion }})" style="width: 150px; border: none;" id="region" name="region"></td>
                                    <td><input type="text" value="{{ $scoreregion }}" style="width: 42px; border: none;" id="scoreregion" name="scoreregion" readonly></td>
                                    <td><input type="text" value="2%" style="width: 42px; border: none;" id="bobotregion" name="bobotregion" readonly></td>
                                    <td><input type="text" value="20" style="width: 42px; border: none;" id="basescoreregion" name="basescoreregion" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringregion" name="scoringregion" readonly></td>
                                
                                </tr>
                                <tr>
                                    <td>Hubungan Kekeluargaan</td>
                                    <td><input type="text" value="{{ $hubungan }}"  style="width: 150px; border: none;" id="hubungan" name="hubungan" readonly></td>
                                    <td><input type="text" value="{{ $scorehubungan }}" style="width: 42px; border: none;" id="scorehubungan" name="scorehubungan" readonly></td>
                                    <td><input type="text" value="2%" style="width: 42px; border: none;" id="bobothubungan" name="bobothubungan" readonly></td>
                                    <td><input type="text" value="20" style="width: 42px; border: none;" id="basescorehubungan" name="basescorehubungan" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringhubungan" name="scoringhubungan" readonly></td>
                                
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td><input type="text" value="{{ $pekerjaan }}"  style="width: 150px; border: none;" id="pekerjaan" name="pekerjaan" readonly></td>
                                    <td><input type="text" value="{{ $scorepekerjaan }}" style="width: 42px; border: none;" id="scorepekerjaan" name="scorepekerjaan" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobotpekerjaan" name="bobotpekerjaan" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescorepekerjaan" name="basescorepekerjaan" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringpekerjaan" name="scoringpekerjaan" readonly></td>
                                
                                </tr>
                                @if($pekerjaan == 'Pengusaha')
                                <tr>
                                    <td>Jabatan</td> 
                                    <td><input type="text" value="Direksi/Owner"  style="width: 150px; border: none;" id="bidang_usaha" name="bidang_usaha" readonly></td>
                                    <td><input type="text" value="4" style="width: 42px; border: none;" id="scorejabatan" name="scorejabatan" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobotjabatan" name="bobotjabatan" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescorejabatan" name="basescorejabatan" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringjabatan" name="scoringjabatan" readonly></td>
                                
                                </tr>
                            @else
                                <tr>
                                    <td>Jabatan</td> 
                                    <td><input type="text" value="{{ $jabatan }}"  style="width: 150px; border: none;" id="jabatan" name="jabatan" readonly></td>
                                    <td><input type="text" value="{{ $scorejabatan }}" style="width: 42px; border: none;" id="scorejabatan" name="scorejabatan" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobotjabatan" name="bobotjabatan" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescorejabatan" name="basescorejabatan" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringjabatan" name="scoringjabatan" readonly></td>
                                
                                </tr>
                            @endif
                                <tr>
                                    <td>Lama Bekerja</td>                                
                                    <td><input type="text" value="{{ $lama_bekerja_tahun }} tahun {{ $lama_bekerja_bulan }} bulan"  style="width: 150px; border: none;" id="lama_bekerja_tahun" name="lama_bekerja_tahun" readonly></td>
                                    <td><input type="text" value="{{ $scorelamabekerja }}" style="width: 42px; border: none;" id="scorelamabekerja" name="scorelamabekerja" readonly></td>
                                    <td><input type="text" value="5%" style="width: 42px; border: none;" id="bobotlamabekerja" name="bobotlamabekerja" readonly></td>
                                    <td><input type="text" value="50" style="width: 42px; border: none;" id="basescorelamabekerja" name="basescorelamabekerja" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringlamabekerja" name="scoringlamabekerja" readonly></td>
                                
                                </tr>
                                <tr>
                                    <td>Penghasilan Perbulan</td>
                                    <td><input type="text" value="{{ $penghasilan_perbulan }}"  style="width: 150px; border: none;" id="penghasilan_perbulan_number" name="penghasilan_perbulan_number" readonly></td>
                                    <td><input type="text" value="{{ $scorepenghasilan }}" style="width: 42px; border: none;" id="scorepenghasilan" name="scorepenghasilan" readonly></td>
                                    <td><input type="text" value="10%" style="width: 42px; border: none;" id="bobotpenghasilan" name="bobotpenghasilan" readonly></td>
                                    <td><input type="text" value="100" style="width: 42px; border: none;" id="basescorepenghasilan" name="basescorepenghasilan" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringpenghasilan" name="scoringpenghasilan" readonly></td>
                                
                                </tr>
                                <tr>
                                    <td>Memiliki Kartu Kredit</td>
                                    <td><input type="text" value="{{ $creditcard }}"  style="width: 150px; border: none;" id="creditcard" name="creditcard" readonly></td>
                                    <td><input type="text" value="{{ $scorecreditcard }}" style="width: 42px; border: none;" id="scorecreditcard" name="scorecreditcard" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobotcreditcard" name="bobotcreditcard" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescorecreditcard" name="basescorecreditcard" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringcreditcard" name="scoringcreditcard" readonly></td>
                                
                                </tr>
                                <tr>
                                    <td>Limit Kartu Kredit</td>
                                    <td><input type="text" value="{{ $limit }}"  style="width: 150px; border: none;" id="limit_number" name="limit_number" readonly></td>
                                    <td><input type="text" value="{{ $scorelimit }}" style="width: 42px; border: none;" id="scorelimit" name="scorelimit" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobotlimit" name="bobotlimit" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescorelimit" name="basescorelimit" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringlimit" name="scoringlimit" readonly></td>
                                
                                </tr>
                                <tr>
                                    <td>Lama Kepemilikan Kartu Kredit</td>
                                    <td><input type="text" value="{{ $lama_kepemilikan_tahun }} tahun {{ $lama_kepemilikan_bulan }} bulan"  style="width: 150px; border: none;" id="lama_kepemilikan_tahun" name="lama_kepemilikan_tahun" readonly></td>
                                    <td><input type="text" value="{{ $scorelamakepemilikan }}" style="width: 42px; border: none;" id="scorelamakepemilikan" name="scorelamakepemilikan" readonly></td>
                                    <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobotlamakepemilikan" name="bobotlamakepemilikan" readonly></td>
                                    <td><input type="text" value="30" style="width: 42px; border: none;" id="basescorelamakepemilikan" name="basescorelamakepemilikan" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringlamakepemilikan" name="scoringlamakepemilikan" readonly></td>
                                
                                </tr>
                                <tr>
                                    <td>Nominal Pengajuan Kredit</td>
                                    <td><input type="text" value="{{ $jumlah_pinjaman }}"  style="width: 150px; border: none;" id="jumlah_pinjaman_number" name="jumlah_pinjaman_number" readonly></td>
                                    <td><input type="text" value="{{ $scorejumlahpinjaman }}" style="width: 42px; border: none;" id="scorejumlahpinjaman" name="scorejumlahpinjaman" readonly></td>
                                    <td><input type="text" value="4%" style="width: 42px; border: none;" id="bobotpinjaman" name="bobotpinjaman" readonly></td>
                                    <td><input type="text" value="40" style="width: 42px; border: none;" id="basescorepinjaman" name="basescorepinjaman" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringpinjaman" name="scoringpinjaman" readonly></td>
                                
                                </tr>
                                <tr>
                                    <td>Jangka Waktu</td>
                                    <td><input type="text" value="{{ $jangka_waktu }} bulan"  style="width: 150px; border: none;" id="jangka_waktu" name="jangka_waktu" readonly></td>
                                    <td><input type="text" value="{{ $scorejangkawaktu }}" style="width: 42px; border: none;" id="scorejangkawaktu" name="scorejangkawaktu" readonly></td>
                                    <td><input type="text" value="4%" style="width: 42px; border: none;" id="bobotjangkawaktu" name="bobotjangkawaktu" readonly></td>
                                    <td><input type="text" value="40" style="width: 42px; border: none;" id="basescorejangkawaktu" name="basescorejangkawaktu" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringjangkawaktu" name="scoringjangkawaktu" readonly></td>
                                
                                </tr>
                                <tr>
                                    <td>DHBI</td>
                                    <td>
                                        <select class="form-control form-control-sm" required style="width: 120px;" name="dhbi" id="dhbi" onchange="getDhbi()">
                                            <option value="" selected="true">- Pilih Opsi -</option>
                                            <option value="Ada">Ada</option>
                                            <option value="Tidak Ada">Tidak Ada</option>
                                        </select>
                                    </td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoredhbi" name="scoredhbi" readonly></td>
                                    <td><input type="text" value="2%" style="width: 42px; border: none;" id="bobotdhbi" name="bobotdhbi" readonly></td>
                                    <td><input type="text" value="20" style="width: 42px; border: none;" id="basescoredhbi" name="basescoredhbi" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringdhbi" name="scoringdhbi" readonly></td>
                                
                                </tr>
                                <tr>
                                    <td>SLIK</td>
                                    <td>
                                        <select class="form-control form-control-sm" required style="width: 135px;" name="slik" id="slik" onchange="getSlik()">
                                            <option value="" selected="true">- Pilih Opsi -</option>
                                            <option value="Coll 1">Coll 1</option>
                                            <option value="Coll 2 dpd 15 hari">Coll 2 dpd 15 hari</option>
                                            <option value="Coll 2 dpd 30 hari">Coll 2 dpd 30 hari</option>
                                            <option value="Coll 3-5">Coll 3-5</option>
                                        </select>
                                    </td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoreslik" name="scoreslik" readonly></td>
                                    <td><input type="text" value="20%" style="width: 42px; border: none;" id="bobotslik" name="bobotslik" readonly></td>
                                    <td><input type="text" value="200" style="width: 42px; border: none;" id="basescoreslik" name="basescoreslik" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringslik" name="scoringslik" readonly></td>
                                
                                </tr>
                                @if($ktaapa == 'KTA Payroll')
                                @if($checkTableDBR == 0)
                                    <tr style="background-color: red; color: white;">
                                        <td>Belum dilakukan perhitungan DBR</td>
                                        <td><input type="text" value="%" style="width: 150px; border: none;background-color: red;color: white;" id="dbr" name="dbr" readonly></td>
                                        <td><input type="text" value="0" style="width: 42px; border: none;background-color: red;color: white;" id="scoredbr" name="scoredbr" readonly></td>
                                        <td><input type="text" value="10%" style="width: 42px; border: none;background-color: red;color: white;" id="bobotdbr" name="bobotdbr" readonly></td>
                                        <td><input type="text" value="100" style="width: 42px; border: none;background-color: red;color: white;" id="basescoredbr" name="basescoredbr" readonly></td>
                                        <td><input type="text" style="width: 42px; border: none;background-color: red;color: white;" id="scoringdbr" name="scoringdbr" readonly></td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>DBR</td>
                                        <td><input type="text" value="{{ $new_dbr }} %"  style="width: 150px; border: none;" id="dbr" name="dbr" readonly></td>
                                        <td><input type="text" value="{{ $scoredbr }}" style="width: 42px; border: none;" id="scoredbr" name="scoredbr" readonly></td>
                                        <td><input type="text" value="10%" style="width: 42px; border: none;" id="bobotdbr" name="bobotdbr" readonly></td>
                                        <td><input type="text" value="100" style="width: 42px; border: none;" id="basescoredbr" name="basescoredbr" readonly></td>
                                        <td><input type="text" style="width: 42px; border: none;" id="scoringdbr" name="scoringdbr" readonly></td>
                                    
                                    </tr>
                                @endif
                            @elseif($ktaapa == 'KTA Retail')
                                @if($checkTableDBRUsaha == 0)
                                    <tr style="background-color: red; color: white;">
                                        <td>Belum dilakukan perhitungan DBR</td>
                                        <td><input type="text" value="%" style="width: 150px; border: none;background-color: red;color: white;" id="dbr" name="dbr" readonly></td>
                                        <td><input type="text" value="0" style="width: 42px; border: none;background-color: red;color: white;" id="scoredbr" name="scoredbr" readonly></td>
                                        <td><input type="text" value="10%" style="width: 42px; border: none;background-color: red;color: white;" id="bobotdbr" name="bobotdbr" readonly></td>
                                        <td><input type="text" value="100" style="width: 42px; border: none;background-color: red;color: white;" id="basescoredbr" name="basescoredbr" readonly></td>
                                        <td><input type="text" style="width: 42px; border: none;background-color: red;color: white;" id="scoringdbr" name="scoringdbr" readonly></td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>DBR</td>
                                        <td><input type="text" value="{{ $new_dbr }} %"  style="width: 150px; border: none;" id="dbr" name="dbr" readonly></td>
                                        <td><input type="text" value="{{ $scoredbr }}" style="width: 42px; border: none;" id="scoredbr" name="scoredbr" readonly></td>
                                        <td><input type="text" value="10%" style="width: 42px; border: none;" id="bobotdbr" name="bobotdbr" readonly></td>
                                        <td><input type="text" value="100" style="width: 42px; border: none;" id="basescoredbr" name="basescoredbr" readonly></td>
                                        <td><input type="text" style="width: 42px; border: none;" id="scoringdbr" name="scoringdbr" readonly></td>
                                    
                                    </tr>
                                @endif                             
                            @endif
                                <tr>
                                    <td>Referensi</td>
                                    <td>
                                        <select class="form-control form-control-sm" required style="width: 120px;" name="referensi" id="referensi" onchange="getReferensi()">
                                            <option value="" selected="true">- Pilih Opsi -</option>
                                            <option value="Ada">Ada</option>
                                            <option value="Tidak">Tidak Ada</option>
                                        </select>
                                    </td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scorereferensi" name="scorereferensi" readonly></td>
                                    <td><input type="text" value="2%" style="width: 42px; border: none;" id="bobotreferensi" name="bobotreferensi" readonly></td>
                                    <td><input type="text" value="20" style="width: 42px; border: none;" id="basescorereferensi" name="basescorereferensi" readonly></td>
                                    <td><input type="text" style="width: 42px; border: none;" id="scoringdbr" name="scoringreferensi" readonly></td>
                                
                            </tr>
                            <tr>
                                <td>Verifikasi Telepon Debitur</td>
                                <td>
                                    <select class="form-control form-control-sm" required style="width: 120px;" name="teldeb" id="teldeb" onchange="getTeldeb()">
                                        <option value="" selected="true">- Pilih Opsi -</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak">Tidak Ada</option>
                                    </select>
                                </td>
                                <td><input type="text" style="width: 42px; border: none;" id="scoreteldeb" name="scoreteldeb" readonly></td>
                                <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobotteldeb" name="bobotteldeb" readonly></td>
                                <td><input type="text" value="30" style="width: 42px; border: none;" id="basescoreteldeb" name="basescoreteldeb" readonly></td>
                                <td><input type="text" style="width: 42px; border: none;" id="scoringteldeb" name="scoringteldeb" readonly></td>
                                
                            </tr>
                            <tr>
                                <td>Verifikasi Telepon Keluarga</td>        
                                <td>
                                    <select class="form-control form-control-sm" required style="width: 120px;" name="telkel" id="telkel" onchange="getTelkel()">
                                        <option value="" selected="true">- Pilih Opsi -</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak">Tidak Ada</option>
                                    </select>
                                </td>
                                <td><input type="text" style="width: 42px; border: none;" id="scoretelkel" name="scoretelkel" readonly></td>
                                <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobottelkel" name="bobottelkel" readonly></td>
                                <td><input type="text" value="30" style="width: 42px; border: none;" id="basescoretelkel" name="basescoretelkel" readonly></td>
                                <td><input type="text" style="width: 42px; border: none;" id="scoringtelkel" name="scoringtelkel" readonly></td>
                            </tr>
                            <tr>
                                <td>Verifikasi Telepon Perusahaan</td> 
                                <td>
                                    <select class="form-control form-control-sm" required style="width: 120px;" name="telper" id="telper" onchange="getTelper()">
                                        <option value="" selected="true">- Pilih Opsi -</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak">Tidak Ada</option>
                                    </select>
                                </td>
                                <td><input type="text" style="width: 42px; border: none;" id="scoretelper" name="scoretelper" readonly></td>
                                <td><input type="text" value="3%" style="width: 42px; border: none;" id="bobottelper" name="bobottelper" readonly></td>
                                <td><input type="text" value="30" style="width: 42px; border: none;" id="basescoretelper" name="basescoretelper" readonly></td>
                                <td><input type="text" style="width: 42px; border: none;" id="scoringtelper" name="scoringtelper" readonly></td>    
                            </tr>
                                <tr style="background-color:rgb(178, 210, 251); font-weight: bolder;">
                                    <td colspan="5">Total Score</td>
                                    <td><input type="text" style="width: 100%; border: none; text-align: right; font-weight: bolder; background-color:rgb(178, 210, 251)" id="totalscore" required name="totalscore"></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-sm btn-danger" style="float: left">Proceed to Database</button>                        
                        <button type="button" style="float: right;" class="btn btn-sm btn-primary" onclick="calculateScore()">Calculate Score</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@else
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body" style="font-weight: bolder;">
                <center>Belum dilakukan Scoring</center>
            </div>
        </div>
    </div>
</div>
@endif

    <!-- /row -->

<script>
    function calculateScore(){

        var checkDhbiValue = document.getElementById('scoredhbi').value;
        var checkSlikValue = document.getElementById('scoreslik').value;
        var checkDbrValue = document.getElementById('scoredbr').value;
        var checkReferensiValue = document.getElementById('scorereferensi').value;
        var checkTeldebValue = document.getElementById('scoreteldeb').value;
        var checkTelkelValue = document.getElementById('scoretelkel').value;
        var checkTelperValue = document.getElementById('scoretelper').value;
        // alert(checkDbrValue);

        if(checkDhbiValue == ''){
            alert('Isi DHBI');
        } else if(checkSlikValue == ''){
            alert('Isi SLIK');
        } else if(checkDbrValue == ''){
            alert('Isi DBR');
        } else if(checkReferensiValue == ''){
            alert('Isi Referensi');
        } else if(checkTeldebValue == ''){
            alert('Isi Verifikasi Telepon Debitur');
        } else if(checkTelkelValue == ''){
            alert('Isi Verifikasi Telepon Keluarga');
        } else if(checkTelperValue == ''){
            alert('Isi Verifikasi Telepon Perusahaan');
        } else {
            var baseScoreUsiaValue = document.getElementById('basescoreusia').value;
            var scoreusiaValue = document.getElementById('scoreusia').value;
            var identifier = 4;
            scoringUsia = baseScoreUsiaValue/identifier*scoreusiaValue;
            $('[name="scoringusia"]').val(scoringUsia);

            var baseScoreMaritalValue = document.getElementById('basescoremarital').value;
            var scoremaritalValue = document.getElementById('scoremarital').value;
            var identifier = 4;
            scoringMarital = baseScoreMaritalValue/identifier*scoremaritalValue;
            $('[name="scoringmarital"]').val(scoringMarital);

            var baseScoreTanggunganValue = document.getElementById('basescoretanggungan').value;
            var scoreTanggunganValue = document.getElementById('scoretanggungan').value;
            var identifier = 4;
            scoringTanggungan = baseScoreTanggunganValue/identifier*scoreTanggunganValue;
            $('[name="scoringtanggungan"]').val(scoringTanggungan);

            var baseScoreHousingValue = document.getElementById('basescorehousing').value;
            var scoreHousingValue = document.getElementById('scorehousing').value;
            var identifier = 4;
            scoringHousing = baseScoreHousingValue/identifier*scoreHousingValue;
            $('[name="scoringhousing"]').val(scoringTanggungan);

            var baseScoreLosValue = document.getElementById('basescorelos').value;
            var scoreLosValue = document.getElementById('scorelos').value;
            var identifier = 4;
            scoringLos = baseScoreLosValue/identifier*scoreLosValue;
            $('[name="scoringlos"]').val(scoringLos);

            var baseScoreRegionlValue = document.getElementById('basescoreregion').value;
            var scoreregionValue = document.getElementById('scoreregion').value;
            var identifier = 4;
            scoringRegion = baseScoreRegionlValue/identifier*scoreregionValue;
            $('[name="scoringregion"]').val(scoringRegion);

            var baseScoreHubunganValue = document.getElementById('basescorehubungan').value;
            var scorehubunganValue = document.getElementById('scorehubungan').value;
            var identifier = 4;
            scoringHubungan = baseScoreHubunganValue/identifier*scorehubunganValue;
            $('[name="scoringhubungan"]').val(scoringHubungan);

            var baseScorePekerjaanValue = document.getElementById('basescorepekerjaan').value;
            var scorepekerjaanValue = document.getElementById('scorepekerjaan').value;
            var identifier = 4;
            scoringPekerjaan = baseScorePekerjaanValue/identifier*scorepekerjaanValue;
            $('[name="scoringpekerjaan"]').val(scoringPekerjaan);

            var baseScoreJabatanValue = document.getElementById('basescorejabatan').value;
            var scoreJabatanValue = document.getElementById('scorejabatan').value;
            var identifier = 4;
            scoringJabatan = baseScoreJabatanValue/identifier*scoreJabatanValue;
            $('[name="scoringjabatan"]').val(scoringJabatan);

            var baseScoreLamabekerjaValue = document.getElementById('basescorelamabekerja').value;
            var scoreLamabekerjaValue = document.getElementById('scorelamabekerja').value;
            var identifier = 4;
            scoringLamabekerja = baseScoreLamabekerjaValue/identifier*scoreLamabekerjaValue;
            $('[name="scoringlamabekerja"]').val(scoringLamabekerja);

            var baseScorePenghasilan = document.getElementById('basescorepenghasilan').value;
            var scorePenghasilanValue = document.getElementById('scorepenghasilan').value;
            var identifier = 4;
            scoringPenghasilan = baseScorePenghasilan/identifier*scorePenghasilanValue;
            $('[name="scoringpenghasilan"]').val(scoringPenghasilan);

            var baseScoreCreditcardValue = document.getElementById('basescorecreditcard').value;
            var scorecreditcardValue = document.getElementById('scorecreditcard').value;
            var identifier = 4;
            scoringCreditcard = baseScoreCreditcardValue/identifier*scorecreditcardValue;
            $('[name="scoringcreditcard"]').val(scoringCreditcard);

            var baseScoreLimitValue = document.getElementById('basescorelimit').value;
            var scorelimitValue = document.getElementById('scorelimit').value;
            var identifier = 4;
            scoringLimit = baseScoreLimitValue/identifier*scorelimitValue;
            $('[name="scoringlimit"]').val(scoringLimit);

            var baseScoreLamakepemilikanValue = document.getElementById('basescorelamakepemilikan').value;
            var scoreLamakepemilikanValue = document.getElementById('scorelamakepemilikan').value;
            var identifier = 4;
            scoringLamakepemilikan = baseScoreLamakepemilikanValue/identifier*scoreLamakepemilikanValue;
            $('[name="scoringlamakepemilikan"]').val(scoringLamakepemilikan);

            var baseScoreJumlahpinjamanValue = document.getElementById('basescorepinjaman').value;
            var scoreJumlahpinjamanValue = document.getElementById('scorejumlahpinjaman').value;
            var identifier = 4;
            scoringPinjaman = baseScoreJumlahpinjamanValue/identifier*scoreJumlahpinjamanValue;
            $('[name="scoringpinjaman"]').val(scoringPinjaman);

            var baseScoreJangkawaktuValue = document.getElementById('basescorejangkawaktu').value;
            var scoreJangkawaktuValue = document.getElementById('scorejangkawaktu').value;
            var identifier = 4;
            scoringJangkawaktu = baseScoreJangkawaktuValue/identifier*scoreJangkawaktuValue;
            $('[name="scoringjangkawaktu"]').val(scoringJangkawaktu);

            var baseScoreDhbiValue = document.getElementById('basescoredhbi').value;
            var scoreDhbiValue = document.getElementById('scoredhbi').value;
            var identifier = 4;
            scoringDhbi = baseScoreDhbiValue/identifier*scoreDhbiValue;
            $('[name="scoringdhbi"]').val(scoringDhbi);

            var baseScoreSlikValue = document.getElementById('basescoreslik').value;
            var scoreSlikValue = document.getElementById('scoreslik').value;
            var identifier = 4;
            scoringSlik = baseScoreSlikValue/identifier*scoreSlikValue;
            $('[name="scoringslik"]').val(scoringSlik);

            var baseScoreDbrValue = document.getElementById('basescoredbr').value;
            var scoreDbrValue = document.getElementById('scoredbr').value;
            var identifier = 4;
            scoringDbr = baseScoreDbrValue/identifier*scoreDbrValue;
            $('[name="scoringdbr"]').val(scoringDbr);

            var baseScoreReferensiValue = document.getElementById('basescorereferensi').value;
            var scoreReferensiValue = document.getElementById('scorereferensi').value;
            var identifier = 4;
            scoringReferensi = baseScoreReferensiValue/identifier*scoreReferensiValue;
            $('[name="scoringreferensi"]').val(scoringReferensi);

            var baseScoreTeldebValue = document.getElementById('basescoreteldeb').value;
            var scoreTeldebValue = document.getElementById('scoreteldeb').value;
            var identifier = 4;
            scoringTeldeb = baseScoreTeldebValue/identifier*scoreTeldebValue;
            $('[name="scoringteldeb"]').val(scoringTeldeb);

            var baseScoreTelkelValue = document.getElementById('basescoretelkel').value;
            var scoreTelkelValue = document.getElementById('scoretelkel').value;
            var identifier = 4;
            scoringTelkel = baseScoreTelkelValue/identifier*scoreTelkelValue;
            $('[name="scoringtelkel"]').val(scoringTelkel);

            var baseScoreTelperValue = document.getElementById('basescoretelper').value;
            var scoreTelperValue = document.getElementById('scoretelper').value;
            var identifier = 4;
            scoringTelper = baseScoreTelperValue/identifier*scoreTelperValue;
            $('[name="scoringtelper"]').val(scoringTelper);

            $totalscore = scoringUsia + scoringMarital + scoringTanggungan + scoringHousing + scoringLos + scoringRegion + scoringHubungan + scoringPekerjaan + scoringJabatan + scoringLamabekerja + 
            scoringPenghasilan + scoringCreditcard + scoringLimit + scoringLamakepemilikan + scoringPinjaman + scoringJangkawaktu + scoringDhbi + scoringSlik + scoringDbr + scoringReferensi + scoringTeldeb + 
            scoringTelkel + scoringTelper;
            $('[name="totalscore"]').val($totalscore);
        }
    }

    function getDhbi(){
        var valselect = document.getElementById('dhbi').value;
        // alert(valselect);
        if(valselect == 'Ada'){
            $('[name="scoredhbi"]').val(1);
        } else {
            $('[name="scoredhbi"]').val(4);
        }
    }

    function getSlik(){
        var valselect = document.getElementById('slik').value;
        if(valselect == 'Coll 1'){
            $('[name="scoreslik"]').val(4);
        } else if(valselect == 'Coll 2 dpd 15 hari'){
            $('[name="scoreslik"]').val(3);
        } else if(valselect == 'Coll 2 dpd 30 hari'){
            $('[name="scoreslik"]').val(2);
        } else if(valselect == 'Coll 3-5'){
            $('[name="scoreslik"]').val(0);
        } 
    }

    function getDbr(){
        var valselect = document.getElementById('dbr').value;
        if(valselect == '< 35%'){
            $('[name="scoredbr"]').val(4);
        } else if(valselect == '> 35%'){
            $('[name="scoredbr"]').val(3);
        } else if(valselect == '>= 55%'){
            $('[name="scoredbr"]').val(2); 
        } else if(valselect == '>= 70%'){
            $('[name="scoredbr"]').val(1); 
        } else {
            $('[name="scoredbr"]').val(0); 
        }
    }

    function getReferensi(){
        var valselect = document.getElementById('referensi').value;
        // alert(valselect);
        if(valselect == 'Ada'){
            $('[name="scorereferensi"]').val(4);
        } else {
            $('[name="scorereferensi"]').val(0);
        }
    }

    function getTeldeb(){
        var valselect = document.getElementById('teldeb').value;
        // alert(valselect);
        if(valselect == 'Ada'){
            $('[name="scoreteldeb"]').val(4);
        } else {
            $('[name="scoreteldeb"]').val(0);
        }
    }

    function getTelkel(){
        var valselect = document.getElementById('telkel').value;
        // alert(valselect);
        if(valselect == 'Ada'){
            $('[name="scoretelkel"]').val(4);
        } else {
            $('[name="scoretelkel"]').val(0);
        }
    }

    function getTelper(){
        var valselect = document.getElementById('telper').value;
        // alert(valselect);
        if(valselect == 'Ada'){
            $('[name="scoretelper"]').val(4);
        } else {
            $('[name="scoretelper"]').val(0);
        }
    }
</script>

@endsection