@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Permohonan KTA</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Permohonan KTA</a></li>
								<li class="breadcrumb-item active" aria-current="page">Show</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5> Show Detail Permohonan KTA</h5>
            </div>
            <div class="pull-right">
                <a class="btn btn-sm btn-primary" href="{{ route('application-today.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row" style="font-size: smaller;">
        @foreach($applicant as $glob)

        @endforeach
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="main-content-label mg-b-5">
                        User {{ $simulasi->nik }}
                    </div> --}}
                    {{-- <p class="mg-b-0 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Token Registrasi</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->tokenreg }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">NIK</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->nik }}
                                
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Nomor KK</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->kk_stone }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">NPWP</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->npwp_stone }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Nama Nasabah</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->nama }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Nomor Handphone</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->no_hp }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Nama Ibu Kandung</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->mother_name }}
                            </div>
                        </div> 
                        <hr>                      
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Kabupaten/Kota</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->kabupatenkota }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Tempat, Tanggal Lahir</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->tempat_lahir }}, {{ $glob->tgl_lahir }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Status Pernikahan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->marital_status }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Jumlah Tanggungan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->julah_tanggungan }} orang
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Desa</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->desa }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Kecamatan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->kecamatan }} 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Kabupaten/Kota</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->kabupatenkota }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Provinsi</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->provinsi }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Alamat</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->alamat }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Kode Pos</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->kodepos }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Status Kepemilikan Hunian</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->housing }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Lama Kepemilikan Hunian</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->los_year }} tahun {{ $glob->los_month }} bulan
                            </div>
                        </div>
                        <hr>
                        
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
                    {{-- <p class="mg-b-0 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Pekerjaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->pekerjaan }}
                            </div>
                        </div>
                        <hr>
                        @if($glob->pekerjaan == 'Pengusaha')
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Jabatan</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                   Direksi/Owner
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Bidang Usaha</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                   {{ $glob->bidang_usaha }}
                                </div>
                            </div>
                            <hr>
                        @else
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Jabatan</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->jabatan }}
                                </div>
                            </div>
                            <hr>
                        @endif
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Nama Perusahaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->nama_perusahaan }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Lama Bekerja</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->lama_bekerja_tahun }} tahun {{ $glob->lama_bekerja_bulan }} bulan
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Alamat Perusahaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->alamat_kantor }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">No Telepon Perusahaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->tel_kantor }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Sumber Penghasilan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->sumber_penghasilan }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Penghasilan Perbulan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->penghasilan_perbulan }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Nama Saudara</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->nama_saudara }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Alamat Saudara</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->alamat_saudara }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Hubungan Kekeluargaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->hubungan }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">No HP saudara</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->no_hp_saudara }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Memiliki Kartu Kredit</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->creditcard }}
                            </div>
                        </div>
                        <hr>
                        @if($glob->creditcard == 'Tidak')
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Bank Penerbit</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    -
                                </div>
                            </div>
                            <hr>
                        @else
                            @foreach($databank as $bank)
                                <div class="row row-xs align-items-center mg-b-0">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">Bank Penerbit</label>
                                    </div>
                                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                                        {{ $bank->bank_penerbit }}
                                        <br> Lama Kepemilikan: {{ $bank->lama_kepemilikan_tahun }} tahun {{ $bank->lama_kepemilikan_bulan }} bulan
                                        <br> Limit: {{ $bank->limit }} 
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        @endif
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Produk KTA</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->produk_pinjaman }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Reference Number</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->ref_no }}
                            </div>
                        </div>    
                        <hr> 
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Jumlah Pinjaman</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->jumlah_pinjaman }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Jangka Waktu</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->jangka_waktu }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Tujuan Pinjaman</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $glob->tujuan_pinjaman }}
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- /row -->

@endsection