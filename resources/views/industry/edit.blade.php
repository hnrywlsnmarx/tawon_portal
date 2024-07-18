@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Company Rate</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Master Company Rate</a></li>
								<li class="breadcrumb-item active" aria-current="page">Index</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Company Rate</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('company-rate.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @foreach($users as $user)

    @endforeach
   <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('company-rate.update',$id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <input type="hidden" name="ip_address" value="{{ session('ip_address') }}">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Edit Company Rate
                        </div>
                        {{-- <p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                        <div class="pd-30 pd-sm-40 bg-gray-100">
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-12">
                                    <label class="form-label mg-b-0">Kode Perusahaan</label>
                                </div>
                                <div class="col-md-12 mg-t-5">
                                    <input type="text" name="companycode" value="{{ $user->companycode }}" class="form-control" placeholder="Kode Perusahaan" readonly>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-12">
                                    <label class="form-label mg-b-0">Nama Perusahaan</label>
                                </div>
                                <div class="col-md-12 mg-t-5">
                                    <input type="text" name="companyname" value="{{ $user->companyname }}" class="form-control" placeholder="Nama Perusahaan" readonly>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-12">
                                    <label class="form-label mg-b-0">Rate (%)</label>
                                </div>
                                <div class="col-md-12 mg-t-5">
                                    <input type="number" name="rate" value="{{ $user->rate }}" class="form-control" placeholder="Rate" readonly>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-12">
                                    <label class="form-label mg-b-0">Admin Fee</label>
                                </div>
                                <div class="col-md-12 mg-t-5">
                                    <input type="text" name="adminfee" value="{{ $user->adminfee }}" class="form-control" placeholder="Admin Fee" readonly>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-12">
                                    <label class="form-label mg-b-0">Provisi</label>
                                </div>
                                <div class="col-md-12 mg-t-5">
                                    <input type="text" name="provision" value="{{ $user->provision }}" class="form-control" placeholder="Provisi (%)" readonly>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-12">
                                    <label class="form-label mg-b-0">Cabang Payroll</label>
                                </div>
                                <div class="col-md-12 mg-t-5">
                                    {{-- <input type="text" name="cabang" value="{{ $user->cabang }}" class="form-control" placeholder="Branch"> --}}
                                    <select class="livesearch-branch form-control p-3" name="branchcode">
                                        @foreach($branchlist as $branch)
                                           @if(in_array($user->branch_code, $branchall))
                                                <option value="{{ $branch->branch_code }}" selected="true">{{ $branch->branch_name }}</option>
                                           @else
                                                <option value="{{ $branch->branch_code }}">{{ $branch->branch_code }}</option>
                                            @endif 
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-12">
                                    <label class="form-label mg-b-0">Created By</label>
                                </div>
                                <div class="col-md-12 mg-t-5">
                                    <input class="form-control" name="created_by" placeholder="Created By" type="text" value="{{ session('nik') }}" readonly>
                                </div>
                            </div>
     
                            <button type="submit" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">Submit</button>
                            {{-- <button class="btn btn-dark pd-x-30 mg-t-5">Cancel</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

        
   
    </form>
@endsection

@section('scripts')
<script type="text/javascript">


$('#status').select2({
    placeholder: 'Pilih Status',
        ajax: {
            url: '/status-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.nama,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
        
});


    $('.livesearch-branch').select2({
        placeholder: 'Select Branch',
        ajax: {
            url: '/branch-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.branch_name,
                            id: item.branch_code
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('.livesearch-role').select2({
        placeholder: 'Select Role',
        ajax: {
            url: '/role-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>
@endsection