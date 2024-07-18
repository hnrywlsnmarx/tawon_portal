@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Requestor Link Registrasi KTA Global</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Requestor Link Registrasi KTA Global</a></li>
								<li class="breadcrumb-item active" aria-current="page">Show</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Detail Requestor Link Registrasi KTA Global</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('requestor.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        @foreach($globalrequestor as $glob)

        @endforeach
            <div class="col-lg-12 col-md-12">
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
                                    {{ $glob->nik }}
                                    
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Token Registrasi</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->tokenreg }}
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Nama</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->nama }}
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Email</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->email }}
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Kabupaten/Kota</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->kabupatenkota }}
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">No Handphone</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->no_hp }}
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">IP Address</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    {{ $glob->ip_address }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
    <!-- /row -->

@endsection