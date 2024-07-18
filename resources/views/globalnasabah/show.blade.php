@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h5 class="content-title mb-1">Nasabah KTA</h5>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Nasabah KTA</a></li>
								<li class="breadcrumb-item active" aria-current="page">Show</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4> Show Detail Nasabah KTA</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-sm btn-primary" href="{{ route('nasabah.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row" style="font-size: smaller;">
        <input type="hidden" name="ip_address" value="{{ session('ip_address') }}">
        @foreach($globalnasabah as $glob)

        @endforeach
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        {{-- <div class="main-content-label mg-b-5">
                            User {{ $simulasi->nik }}
                        </div> --}}
                        {{-- <p class="mg-b-0 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                        <div class="pd-30 pd-sm-10 ">
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
                                    <label class="form-label mg-b-0">Token Registrasi</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->tokenreg }}
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Nama</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Email</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->email }}
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
                                    <label class="form-label mg-b-0">Kabupaten/Kota</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->kabupatenkota }}
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
                                    <label class="form-label mg-b-0">Desa/Kelurahan</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->desa }}
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
                                    <label class="form-label mg-b-0">No Handphone</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->no_hp }}
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
                        <div class="pd-30 pd-sm-10 ">
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Pekerjaan</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->pekerjaan }}
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Nama Perusahaan</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->nama_perusahaan }}
                                </div>
                            </div>
                            <hr>
                            @if($glob->pekerjaan == 'Pengusaha')
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
                                    <label class="form-label mg-b-0">Penghasilan Perbulan</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->penghasilan_perbulan }}
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
                                    <label class="form-label mg-b-0">Telepon Perusahaan</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->tel_kantor }}
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
                            {{-- <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">No Handphone</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->no_hp }}
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">IP Address</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->ip_address }}
                                </div>
                            </div>
                            <hr> --}}
                        </div>
                    </div>
                </div>
            </div>
            @if($ctDokumen != 0)
                @foreach($dokumen as $data)

                @endforeach
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <div class="main-content-label mg-b-5">
                                User {{ $simulasi->nik }}
                            </div> --}}
                            {{-- <p class="mg-b-0 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                            <div class="pd-30 pd-sm-10 ">
                                <table class="table" style="width: 100%; border-collapse: collapse;" border="0">
                                    <tbody>
                                        <tr>
                                            <td style="width: 33.3333%;">Fotocopy KTP</td>
                                            <button type="button" id="btnhidektp" class="btn btn-sm btn-danger" onclick="hideKTP()" style="display: none; float:right;">Close KTP</button>
                                            <center><img width="400" style="display: none;" id="imgktp" src="{{ asset('/public/storage/'.$data->path_prim."/".$data->copyktp) }}" alt="{{ asset('public/storage/'.$data->path_prim."/".$data->copyktp) }}"></center>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">{{ $data->path_prim."/".$data->copyktp }}</td>
                                            <td><button type="button" id="btnktp" class="btn btn-sm btn-success" onclick="showKTP()">Show</button></td>
                                        </tr>
                                        <tr> 
                                            <td style="width: 33.3333%;">NPWP</td>
                                            <button type="button" id="btnhidenpwp" class="btn btn-sm btn-danger" onclick="hideNPWP()" style="display: none; float:right;">Close NPWP</button>
                                            <center><img width="400" style="display: none;" id="imgnpwp" src="{{ asset('public/storage/'.$data->path_prim."/".$data->npwp) }}" alt="{{ asset('public/storage/'.$data->path_prim."/".$data->npwp) }}"></center>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">{{ $data->path_prim."/".$data->npwp }}</td>
                                            <td><button type="button" id="btnnpwp" class="btn btn-sm btn-success" onclick="showNPWP()">Show</button></td>
                                        </tr>
                                        <tr> 
                                            <td style="width: 33.3333%;">Kartu Keluarga</td>
                                            <button type="button" id="btnhidekk" class="btn btn-sm btn-danger" onclick="hideKK()" style="display: none; float:right;">Close KK</button>
                                            <center><img width="400" style="display: none;" id="imgkk" src="{{ asset('public/storage/'.$data->path_prim."/".$data->kk) }}" alt="{{ asset('public/storage/'.$data->path_prim."/".$data->kk) }}"></center>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">{{ $data->path_prim."/".$data->kk }}</td>
                                            <td><button type="button" id="btnkk" class="btn btn-sm btn-success" onclick="showKK()">Show</button></td>
                                        </tr>
                                        @if($data->slip_gaji != '')
                                        <tr> 
                                            <td style="width: 33.3333%;">Slip Gaji</td>
                                            <button type="button" id="btnhideslip" class="btn btn-sm btn-danger" onclick="hideSlip()" style="display: none; float:right;">Close Slip Gaji</button>
                                            <center><img width="400" style="display: none;" id="imgslip" src="{{ asset('public/storage/'.$data->path_supp."/".$data->slip_gaji) }}" alt="{{ asset('public/storage/'.$data->path_supp."/".$data->slip_gaji) }}"></center>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">{{ $data->path_supp."/".$data->slip_gaji }}</td>
                                            <td><button type="button" id="btnslip" class="btn btn-sm btn-success" onclick="showSlip()">Show</button></td>
                                        </tr>
                                        @else
                                        <tr> 
                                            <td style="width: 33.3333%;">Slip Gaji</td>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">No Data</td>
                                        </tr>
                                        @endif
                                        @if($data->mutasirekening != '')
                                        <tr>
                                            <td style="width: 33.3333%;">Mutasi Rekening</td>
                                            <button type="button" id="btnhidemutasi" class="btn btn-sm btn-danger" onclick="hideMutasi()" style="display: none; float:right;">Close Mutasi Rekening</button>
                                            <center><img width="400" style="display: none;" id="imgmutasi" src="{{ asset('public/storage/'.$data->path_supp."/".$data->mutasirekening) }}" alt="{{ asset('public/storage/'.$data->path_supp."/".$data->mutasirekening) }}"></center>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">{{ $data->path_supp."/".$data->mutasirekening }}</td>
                                            <td><button type="button" id="btnmutasi" class="btn btn-sm btn-success" onclick="showMutasi()">Show</button></td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td style="width: 33.3333%;">Mutasi Rekening</td>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">No Data</td>
                                        </tr>
                                        @endif
                                        @if($data->sip != '')
                                        <tr>
                                            <td style="width: 33.3333%;">SIP</td>
                                            <button type="button" id="btnhidesip" class="btn btn-sm btn-danger" onclick="hideSip()" style="display: none; float:right;">Close SIP</button>
                                            <center><img width="400" style="display: none;" id="imgsip" src="{{ asset('public/storage/'.$data->path_supp."/".$data->sip) }}" alt="{{ asset('public/storage/'.$data->path_supp."/".$data->sip) }}"></center>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">{{ $data->path_supp."/".$data->sip }}</td>
                                            <td><button type="button" id="btnsip" class="btn btn-sm btn-success" onclick="showSip()">Show</button></td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td style="width: 33.3333%;">SIP</td>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">No Data</td>
                                        </tr>
                                        @endif
                                        @if($data->siup != '')
                                        <tr>
                                            <td style="width: 33.3333%;">SIUP</td>
                                            <button type="button" id="btnhidesiup" class="btn btn-sm btn-danger" onclick="hideSiup()" style="display: none; float:right;">Close SIUP</button>
                                            <center><img width="400" style="display: none;" id="imgsiup" src="{{ asset('public/storage/'.$data->path_supp."/".$data->siup) }}" alt="{{ asset('public/storage/'.$data->path_supp."/".$data->siup) }}"></center>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">{{ $data->path_supp."/".$data->siup }}</td>
                                            <td><button type="button" id="btnsiup" class="btn btn-sm btn-success" onclick="showSiup()">Show</button></td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td style="width: 33.3333%;">SIUP</td>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">No Data</td>
                                        </tr>
                                        @endif
                                        @if($data->billingcc != '')
                                        <tr>
                                            <td style="width: 33.3333%;">Billing Kartu Kredit</td>
                                            <button type="button" id="btnhidebilling" class="btn btn-sm btn-danger" onclick="hideBilling()" style="display: none; float:right;">Close Billing Kartu Kredit</button>
                                            <center><img width="400" style="display: none;" id="imgbilling" src="{{ asset('public/storage/'.$data->path_supp."/".$data->billingcc) }}" alt="{{ asset('public/storage/'.$data->path_supp."/".$data->billingcc) }}"></center>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">{{ $data->path_supp."/".$data->billingcc }}</td>
                                            <td><button type="button" id="btnbilling" class="btn btn-sm btn-success" onclick="showBilling()">Show</button></td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td style="width: 33.3333%;">Billing Kartu Kredit</td>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 3.50874%;">No Data</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                                {{-- <a href="" class="btn btn-sm btn-dark" target="_blank" style="float: right;">Download Zip</a> --}}
                                {{-- <button type="submit" class="btn btn-sm btn-dark" style="float: right;">Download Zip</button> --}}
                                <a class="btn btn-sm btn-dark" style="float: right;" href="{{ route('zipDownload', $data->nik) }}">Zip</a>
                            </div>
                        </div>
                    </div>                
                </div>
            @else
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <div class="main-content-label mg-b-5">
                            User {{ $simulasi->nik }}
                        </div> --}}
                        {{-- <p class="mg-b-0 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                        <div class="pd-30 pd-sm-40 ">
                            <table class="table" style="width: 100%; border-collapse: collapse;" border="0">
                                <tbody>
                                    Belum Melakukan Upload Dokumen
                                </tbody>
                            </table>
                            {{-- <a href="" class="btn btn-sm btn-dark" target="_blank" style="float: right;">Download Zip</a> --}}
                            {{-- <button type="submit" class="btn btn-sm btn-dark" style="float: right;">Download Zip</button> --}}
                        </div>
                    </div>
                </div>                
            </div>
            @endif
           
    </div>
    <!-- /row -->

    <script>
        function showKTP() {
            document.getElementById('imgktp')
                    .style.display = "block";
    
            document.getElementById('btnktp')
                    .style.display = "none";
            
            document.getElementById('btnhidektp')
                    .style.display = "block";
        }
    
        function hideKTP() {
            document.getElementById('imgktp')
                    .style.display = "none";
    
            document.getElementById('btnktp')
                    .style.display = "block";
            
            document.getElementById('btnhidektp')
                    .style.display = "none";
        }
    
        function showNPWP() {
            document.getElementById('imgnpwp')
                    .style.display = "block";
    
            document.getElementById('btnnpwp')
                    .style.display = "none";
            
            document.getElementById('btnhidenpwp')
                    .style.display = "block";
        }
    
        function hideNPWP() {
            document.getElementById('imgnpwp')
                    .style.display = "none";
    
            document.getElementById('btnnpwp')
                    .style.display = "block";
            
            document.getElementById('btnhidenpwp')
                    .style.display = "none";
        }
    
        function showKK() {
            document.getElementById('imgkk')
                    .style.display = "block";
    
            document.getElementById('btnkk')
                    .style.display = "none";
            
            document.getElementById('btnhidekk')
                    .style.display = "block";
        }
    
        function hideKK() {
            document.getElementById('imgkk')
                    .style.display = "none";
    
            document.getElementById('btnkk')
                    .style.display = "block";
            
            document.getElementById('btnhidekk')
                    .style.display = "none";
        }
    
        function showSlip() {
            document.getElementById('imgslip')
                    .style.display = "block";
    
            document.getElementById('btnslip')
                    .style.display = "none";
            
            document.getElementById('btnhideslip')
                    .style.display = "block";
        }
    
        function hideSlip() {
            document.getElementById('imgslip')
                    .style.display = "none";
    
            document.getElementById('btnslip')
                    .style.display = "block";
            
            document.getElementById('btnhideslip')
                    .style.display = "none";
        }
    
        function showMutasi() {
            document.getElementById('imgmutasi')
                    .style.display = "block";
    
            document.getElementById('btnmutasi')
                    .style.display = "none";
            
            document.getElementById('btnhidemutasi')
                    .style.display = "block";
        }
    
        function hideMutasi() {
            document.getElementById('imgmutasi')
                    .style.display = "none";
    
            document.getElementById('btnmutasi')
                    .style.display = "block";
            
            document.getElementById('btnhidemutasi')
                    .style.display = "none";
        }
    
        function showSip() {
            document.getElementById('imgsip')
                    .style.display = "block";
    
            document.getElementById('btnsip')
                    .style.display = "none";
            
            document.getElementById('btnhidesip')
                    .style.display = "block";
        }
    
        function hideSip() {
            document.getElementById('imgsip')
                    .style.display = "none";
    
            document.getElementById('btnsip')
                    .style.display = "block";
            
            document.getElementById('btnhidesip')
                    .style.display = "none";
        }
    
        function showSiup() {
            document.getElementById('imgsiup')
                    .style.display = "block";
    
            document.getElementById('btnsiup')
                    .style.display = "none";
            
            document.getElementById('btnhidesiup')
                    .style.display = "block";
        }
    
        function hideSiup() {
            document.getElementById('imgsiup')
                    .style.display = "none";
    
            document.getElementById('btnsiup')
                    .style.display = "block";
            
            document.getElementById('btnhidesiup')
                    .style.display = "none";
        }
    
        function showBilling() {
            document.getElementById('imgbilling')
                    .style.display = "block";
    
            document.getElementById('btnbilling')
                    .style.display = "none";
            
            document.getElementById('btnhidebilling')
                    .style.display = "block";
        }
    
        function hideBilling() {
            document.getElementById('imgbilling')
                    .style.display = "none";
    
            document.getElementById('btnbilling')
                    .style.display = "block";
            
            document.getElementById('btnhidebilling')
                    .style.display = "none";
        }
    </script>

@endsection