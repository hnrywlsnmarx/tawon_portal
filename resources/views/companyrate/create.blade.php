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
            <h2>Add New Company Rate</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('company-rate.index') }}"> Back</a>
        </div>
    </div>
</div>
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
   
<form action="{{ route('company-rate.store') }}" method="POST">
    @csrf
    <div class="row">
        <input type="hidden" name="ip_address" value="{{ session('ip_address') }}">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Create Company Rate
                    </div>
                    {{-- <p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-12">
                                <label class="form-label mg-b-0">Kode Perusahaan</label>
                            </div>
                            <div class="col-md-12 mg-t-5">
                                
                                <input type="text" name="companycode" id="companycode" class="form-control" placeholder="Kode Perusahaan">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-12">
                                <label class="form-label mg-b-0">Nama Perusahaan</label>
                            </div>
                            <div class="col-md-12 mg-t-5">
                                <input type="text" name="companyname" id="companyname" class="form-control" placeholder="Nama Perusahaan">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-12">
                                <label class="form-label mg-b-0">Rate (%)</label>
                            </div>
                            <div class="col-md-12 mg-t-5">
                                <input type="number" name="rate" id="rate" class="form-control" placeholder="Rate (%)">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-12">
                                <label class="form-label mg-b-0">Admin Fee</label>
                            </div>
                            <div class="col-md-12 mg-t-5">
                                <input type="number" name="adminfee" id="adminfee" class="form-control" placeholder="Admin Fee">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-12">
                                <label class="form-label mg-b-0">Provision (%)</label>
                            </div>
                            <div class="col-md-12 mg-t-5">
                                <input type="number" name="provision" id="provision" class="form-control" placeholder="Provision (%)">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-12">
                                <label class="form-label mg-b-0">Cabang Payroll</label>
                            </div>
                            <div class="col-md-12 mg-t-5">
                                <select class="form-control p-3" name="branchcode" id="livesearch-branch">
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

$('#livesearch-branch').select2({
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

    $('#livesearch-role').select2({
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

    $('#livesearch-nik').select2({
        placeholder: 'Select NIK',
        ajax: {
            url: '/nik-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.id,
                            id: item.id,
                        }
                    }
                    )
                };
            },            
            cache: true
        }
    }).on('change', function(e){
        var id = $(this).val();
        var url = '/get-datanik/' + id;

        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            success: function(data){
                return {
                    results: $.map(data, function (item) {
                        console.log(item.namacab);
                        $('[name="name"]').val(item.name);
                        $('[name="email"]').val(item.email);
                        $('[name="branch_code"]').val(item.branchehr);
                        $('[name="namacab"]').val(item.namacabehr);
                    })
                };
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert("Gagal memperoleh data");
              }
            
        });
        
    });

   
</script>
@endsection