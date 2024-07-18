@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')					
<div class="left-content">				
    <h5 class="content-title mb-1">Detail Scoring TAWON KASBON</h5>			
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">					
            <li class="breadcrumb-item"><a href="#">Detail Scoring TAWON KASBON</a></li>					
            <li class="breadcrumb-item active" aria-current="page">Show</li>					
        </ol>					
    </nav>			
    <div class="pull-right mt-1">
        <a class="btn btn-sm btn-primary" href="{{ route('datascoring.index') }}"> Back</a>
    </div>
</div>
@endsection('breadcrumb')
@section('content')
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
    <form action="{{ route('datascoring.store') }}" method="POST">
    @csrf
    @foreach($scoring as $score)
    @endforeach
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body" style="font-size: smaller;">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">request code</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="hidden" class="form-control form-control-sm" required readonly value=" {{ session('nik') }}" style="background-color: white; border: none;" name="created_by">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $score->request_code }}" style="background-color: white; border: none;" name="nik">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Username</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $score->username }}" style="background-color: white; border: none;" name="tokenreg">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Host</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $score->host }}" style="background-color: white; border: none;" name="kabupatenkota">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Request Data</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0" style="word-break: break-all;">
                                {{-- <input type="text" class="form-control form-control-sm" required readonly value="{{ $score->data }}" style="background-color: white; border: none;" name="ref_no"> --}}
                                {{ $score->param }}
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Response Data</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $score->data }}" style="background-color: white; border: none;" name="namapemohon">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Service Name</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $score->service_name }}" style="background-color: white; border: none;" name="kabupatenkota">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Insert Date At</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $score->insert_date }}" style="background-color: white; border: none;" name="produkkta"> 
                            </div>
                        </div>
                        <hr>
                        
                        <input type="hidden" class="form-control form-control-sm" value="0" required readonly style="background-color: white; border: none;" name="flag_approval"> 
                        <input type="hidden" class="form-control form-control-sm" value="0" required readonly style="background-color: white; border: none;" name="flag_disbursement"> 
                    </div>
                </div>    
            </div>
        </div>
    </form>


    <!-- /row -->

<script>
    
</script>

@endsection