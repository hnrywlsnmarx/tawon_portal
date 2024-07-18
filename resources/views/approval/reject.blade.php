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
        <a class="btn btn-sm btn-primary" href="{{ route('approval.index') }}"> Back</a>
    </div>
</div>
@endsection('breadcrumb')

@section('content')
    <div class="row" style="font-size: smaller;">
        @if($ctDokumen != 0)
            @foreach($dokumen as $data)
            @endforeach
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <center><u style="font-weight: bolder;">Resume Dokumen</u></center>
                            <div class="pd-30 pd-sm-40">
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
                        {{-- <p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                        <div class="pd-30 pd-sm-40 bg-gray-100">
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
    <div class="row" style="font-size: smaller;">
        @foreach($approval as $score)
        @endforeach
        
        <div class="col-lg-6 col-md-6">
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
            <form action="{{ route('approval.store') }}" method="POST">
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
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="nik" name="nik" readonly value="{{ $score->nik }}"> 
                                    <input type="hidden" required style="width: 150px; border: none; float: right;" id="email" name="email" readonly value="{{ $score->email }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Token Registrasi</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="tokenreg" name="tokenreg" readonly value="{{ $score->tokenreg }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Reference Number</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="ref_no" name="ref_no" readonly value="{{ $score->ref_no }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Produk KTA</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="produkkta" name="produkkta" readonly value="{{ $score->produkkta }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Nama Nasabah</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="namapemohon" name="namapemohon" readonly value="{{ $score->namapemohon }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Nominal Pengajuan Pinjaman</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="jumlah_pinjaman" name="jumlah_pinjaman" readonly value="{{ $score->jumlah_pinjaman }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Jangka Waktu</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="jangka_waktu" name="jangka_waktu" readonly value="{{ $score->jangka_waktu }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Area Domisili</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="kabupatenkota" name="kabupatenkota" readonly value="{{ $score->kabupatenkota }}"> 
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Total Score</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="totalscore" name="totalscore" readonly value="{{ $score->totalscore }}"> 
                                </div>
                            </div>
                            <hr>
                            @if($score->totalscore >= 801)
                                <div class="row row-xs align-items-center mg-b-5">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">Status By HO</label>
                                    </div>
                                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                                        <input type="text" required style="width: 150px; border: none; float: right;" id="status_by_ho" name="status_by_ho" readonly value="Good">
                                    </div>
                                </div>
                            @elseif($score->totalscore < 801 && $score->totalscore > 601)
                                <div class="row row-xs align-items-center mg-b-5">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">Status By HO</label>
                                    </div>
                                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                                        <input type="text" required style="width: 150px; border: none; float: right;" id="status_by_ho" name="status_by_ho" readonly value="Recommended">
                                    </div>
                                </div>
                            @else
                                <div class="row row-xs align-items-center mg-b-5">
                                    <div class="col-md-3">
                                        <label class="form-label mg-b-0">Status By HO</label>
                                    </div>
                                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                                        <input type="text" required style="width: 150px; border: none; float: right;" id="status_by_ho" name="status_by_ho" readonly value="Reject">
                                    </div>
                                </div>
                            @endif
                            <hr>
                            <div class="row row-xs align-items-center mg-b-5">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">HO Scoring By</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="created_by_ho" name="created_by_ho" readonly value="{{ $score->created_by }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Keterangan</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <textarea class="form-control form-control-sm" name="comment_by_cabang" id="comment_by_cabang" cols="10" rows="4" required></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Status By Cabang</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="status_by_cabang" name="status_by_cabang" readonly value="Reject">
                                </div>
                            </div>
                            <hr>
                            <div class="row row-xs align-items-center mg-b-0">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Rejected By</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" required style="width: 150px; border: none; float: right;" id="created_by_cabang" name="created_by_cabang" readonly value="{{ session('nik') }}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-danger" style="float: right">Reject</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <center><b><u>Summary Score</u></b></center>
                    {{-- <div class="main-content-label mg-b-5">
                        User {{ $simulasi->nik }}
                    </div> --}}
                    {{-- <p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                    <div class="pd-30 pd-sm-40" style="margin: auto;">
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Usia</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoreusia }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoreusia" name="scoreusia" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Pernikahan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoremarital }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoremarital" name="scoremarital" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jumlah Tanggungan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoretanggungan }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoretanggungan" name="scoretanggungan" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Hunian</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorehousing }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorehousing" name="scorehousing" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Lama Tinggal</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorelos }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorelos" name="scorelos" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Region</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoreregion }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoreregion" name="scoreregion" readonly> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Hubungan Keluarga</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorehubungan }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoreregion" name="scoreregion" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Pekerjaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorepekerjaan }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorepekerjaan" name="scorepekerjaan" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jabatan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorejabatan }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorejabatan" name="scorejabatan" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Lama Bekerja</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorelamabekerja }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorelamabekerja" name="scorelamabekerja" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Penghasilan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorepenghasilan }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorepenghasilan" name="scorepenghasilan" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Kartu Kredit</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorecreditcard }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorecreditcard" name="scorecreditcard" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Lama Kepemilikan Kartu Kredit</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorelamakepemilikan }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorelamakepemilikan" name="scorelamakepemilikan" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jumlah Pinjaman</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorejumlahpinjaman }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorejumlahpinjaman" name="scorejumlahpinjaman" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Jangka Waktu</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorejangkawaktu }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorejangkawaktu" name="scorejangkawaktu" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score DHBI</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoredhbi }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoredhbi" name="scoredhbi" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score SLIK</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoreslik }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoreslik" name="scoreslik" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score DBR</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoredbr }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoredbr" name="scoredbr" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Referensi</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scorereferensi }}" style="width: 100px; border: none; float: right; text-align: right;" id="scorereferensi" name="scorereferensi" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Verifikasi Telepon Debitur</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoreteldeb }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoreteldeb" name="scoreteldeb" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Verifikasi Telepon Keluarga</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoretelkel }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoretelkel" name="scoretelkel" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Score Verifikasi Telepon Perusahaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" value="{{ $score->scoretelper }}" style="width: 100px; border: none; float: right; text-align: right;" id="scoretelper" name="scoretelper" readonly>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
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