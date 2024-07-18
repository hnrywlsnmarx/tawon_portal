@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')					
<div class="left-content">				
    <h5 class="content-title mb-1">Reject Pengajuan KTA</h5>					
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">					
            <li class="breadcrumb-item"><a href="#">Reject Pengajuan KTA</a></li>					
            <li class="breadcrumb-item active" aria-current="page">Show</li>					
        </ol>					
    </nav>			
    <div class="pull-right mt-1">
        <a class="btn btn-sm btn-primary" href="{{ route('datascoring.index') }}"> Back</a>
    </div>
</div>
@endsection('breadcrumb')

@section('content')
<div class="row" style="font-size: smaller;">
    @foreach($datascoring as $score)

    @endforeach
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="main-content-label mg-b-5">
                        User {{ $simulasi->nik }}
                    </div> --}}
                    {{-- <p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">NIK</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->nik }}
                                
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Token Registrasi</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->tokenreg }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Reference Number</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->ref_no }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Produk KTA</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->produkkta }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Nama Nasabah</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->namapemohon }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Total Score</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->totalscore }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-5">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Scored By</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->created_by }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-10">
                            ________________________________________________________________________________________
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Usia</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scoreusia }}
                                
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Pernikahan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scoremarital }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jumlah Tanggungan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scoretanggungan }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Hunian</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorehousing }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Lama Tinggal</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorelos }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Region</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scoreregion }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Hubungan Keluarga</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorehubungan }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Pekerjaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorepekerjaan }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jabatan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorejabatan }}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="main-content-label mg-b-5">
                        User {{ $simulasi->nik }}
                    </div> --}}
                    {{-- <p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Lama Bekerja</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorelamabekerja }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Penghasilan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorepenghasilan }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Kartu Kredit</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorecreditcard }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Lama Kepemilikan Kartu Kredit</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorelamakepemilikan }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jumlah Pinjaman</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorejumlahpinjaman }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jangka Waktu</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorejangkawaktu }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score DHBI</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scoredhbi }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score SLIK</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scoreslik }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score DBR</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scoredbr }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Referensi</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scorereferensi }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Verifikasi Telepon Debitur</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scoreteldeb }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Verifikasi Telepon Keluarga</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scoretelkel }}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Verifikasi Telepon Perusahaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->scoretelper }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection