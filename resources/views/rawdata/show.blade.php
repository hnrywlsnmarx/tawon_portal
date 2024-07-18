@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')					
<div class="left-content">				
    <h5 class="content-title mb-1">request Log</h5>					
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">					
            <li class="breadcrumb-item"><a href="#">request Log</a></li>					
            <li class="breadcrumb-item active" aria-current="page">Show</li>					
        </ol>					
    </nav>			
    <div class="pull-right mt-1">
        <a class="btn btn-sm btn-primary" href="{{ route('rawdata.index') }}"> Back</a>
    </div>
</div>
@endsection('breadcrumb')

@section('content')
    <div class="row" style="font-size: smaller;">
        @foreach($approval as $score)
        @endforeach
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="main-content-label mg-b-5">
                        User {{ $simulasi->nik }}
                    </div> --}}
                    {{-- <p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                    <div class="pd-30 pd-sm-40">
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Request code</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->request_code }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">USer API</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->username }}
                            </div>
                        </div>
                        <hr>
                       
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Data</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->param }}
                            </div>
                        </div>
                        <hr>
                        
                        <div class="row row-xs align-items-center mg-b-0">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Host</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->host }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-5">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">Updated At</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                {{ $score->insert_date }}
                            </div>
                        </div>
                        <hr>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection