@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')					
<div class="left-content">				
    <h5 class="content-title mb-1">Data KTA Expired (Nasabah tidak melakukan Disbursement)</h5>					
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">					
            <li class="breadcrumb-item"><a href="#">Data KTA Expired (Nasabah tidak melakukan Disbursement)</a></li>					
            <li class="breadcrumb-item active" aria-current="page">Show</li>					
        </ol>					
    </nav>			
    <div class="pull-right mt-1">
        <a class="btn btn-sm btn-primary" href="{{ route('dataexpirednasabah.index') }}"> Back</a>
    </div>
</div>
@endsection('breadcrumb')

@section('content')
    <div class="row justify-content-md-center" style="font-size: smaller;">
        @foreach($approval as $score)
        @endforeach
        <div class="col-lg-6 col-md-6>
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
            
                @csrf
                <div class="card">
                    <div class="card-body">
                        {{-- <div class="main-content-label mg-b-5">
                            User {{ $simulasi->nik }}
                        </div> --}}
                        {{-- <p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                        <div class="pd-30 pd-sm-40">
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">NIK</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; margin-left: 120px;" id="nik" name="nik" readonly value="{{ $score->nik }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Token Registrasi</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; margin-left: 120px;" id="tokenreg" name="tokenreg" readonly value="{{ $score->tokenreg }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Reference Number</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; margin-left: 120px;" id="ref_no" name="ref_no" readonly value="{{ $score->ref_no }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Produk KTA</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; margin-left: 120px;" id="produkkta" name="produkkta" readonly value="{{ $score->produkkta }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Nama Nasabah</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; margin-left: 120px;" id="namapemohon" name="namapemohon" readonly value="{{ $score->namapemohon }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Pinjaman yang diajukan</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; margin-left: 120px;" id="totalscore" name="totalscore" readonly value="{{ $score->jumlah_pinjaman }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-5">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Penyesuaian Pinjaman</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; margin-left: 120px;" id="status_by" name="status_by" readonly value="{{ $score->adjustment_pinjaman }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-5">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Cabang yang ditunjuk</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; margin-left: 120px;" id="created_by" name="created_by" readonly value="{{ $score->desired_branch }}">
                                    <input type="hidden" required style="width: 150px; border: none; margin-left: 120px;" id="updated_by" name="updated_by" readonly value="{{ session('nik') }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-5">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Adjusted at</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; margin-left: 120px;" id="created_by" name="created_by" readonly value="{{ $score->created_at }}">
                                    <input type="hidden" required style="width: 150px; border: none; margin-left: 120px;" id="updated_by" name="updated_by" readonly value="{{ session('nik') }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-5">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Adjusted By</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; margin-left: 120px;" id="created_by" name="created_by" readonly value="{{ $created_by }}">
                                </div>
                            </div>
                            <hr>
                        </div>
                        
                    </div>
                </div>
          
        </div>
        {{-- <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <center><b><u>Summary Score</u></b></center> --}}
                    {{-- <div class="main-content-label mg-b-5">
                        User {{ $simulasi->nik }}
                    </div> --}}
                    {{-- <p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                    {{-- <div class="pd-30 pd-sm-40" style="margin: auto;">
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Usia</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoreusia }}" style="width: 100px; border: none; text-align: right;" id="scoreusia" name="scoreusia" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Pernikahan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoremarital }}" style="width: 100px; border: none; text-align: right;" id="scoremarital" name="scoremarital" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jumlah Tanggungan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoretanggungan }}" style="width: 100px; border: none; text-align: right;" id="scoretanggungan" name="scoretanggungan" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Hunian</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorehousing }}" style="width: 100px; border: none; text-align: right;" id="scorehousing" name="scorehousing" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Lama Tinggal</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorelos }}" style="width: 100px; border: none; text-align: right;" id="scorelos" name="scorelos" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Region</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoreregion }}" style="width: 100px; border: none; text-align: right;" id="scoreregion" name="scoreregion" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Hubungan Keluarga</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorehubungan }}" style="width: 100px; border: none; text-align: right;" id="scoreregion" name="scoreregion" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Pekerjaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorepekerjaan }}" style="width: 100px; border: none; text-align: right;" id="scorepekerjaan" name="scorepekerjaan" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jabatan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorejabatan }}" style="width: 100px; border: none; text-align: right;" id="scorejabatan" name="scorejabatan" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Lama Bekerja</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorelamabekerja }}" style="width: 100px; border: none; text-align: right;" id="scorelamabekerja" name="scorelamabekerja" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Penghasilan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorepenghasilan }}" style="width: 100px; border: none; text-align: right;" id="scorepenghasilan" name="scorepenghasilan" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Kartu Kredit</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorecreditcard }}" style="width: 100px; border: none; text-align: right;" id="scorecreditcard" name="scorecreditcard" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Lama Kepemilikan Kartu Kredit</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorelamakepemilikan }}" style="width: 100px; border: none; text-align: right;" id="scorelamakepemilikan" name="scorelamakepemilikan" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jumlah Pinjaman</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorejumlahpinjaman }}" style="width: 100px; border: none; text-align: right;" id="scorejumlahpinjaman" name="scorejumlahpinjaman" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jangka Waktu</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorejangkawaktu }}" style="width: 100px; border: none; text-align: right;" id="scorejangkawaktu" name="scorejangkawaktu" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score DHBI</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoredhbi }}" style="width: 100px; border: none; text-align: right;" id="scoredhbi" name="scoredhbi" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score SLIK</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoreslik }}" style="width: 100px; border: none; text-align: right;" id="scoreslik" name="scoreslik" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score DBR</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoredbr }}" style="width: 100px; border: none; text-align: right;" id="scoredbr" name="scoredbr" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Referensi</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorereferensi }}" style="width: 100px; border: none; text-align: right;" id="scorereferensi" name="scorereferensi" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Verifikasi Telepon Debitur</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoreteldeb }}" style="width: 100px; border: none; text-align: right;" id="scoreteldeb" name="scoreteldeb" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Verifikasi Telepon Keluarga</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoretelkel }}" style="width: 100px; border: none; text-align: right;" id="scoretelkel" name="scoretelkel" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Verifikasi Telepon Perusahaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoretelper }}" style="width: 100px; border: none; text-align: right;" id="scoretelper" name="scoretelper" readonly>
                            </div>
                        </div>
                        <hr>
                    </div> --}}
                {{-- </div>
            </div>
        </div> --}}
    </div>

@endsection