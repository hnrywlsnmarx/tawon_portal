@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">CIF</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('cus_no')}}">Master CIF</a></li>
								<li class="breadcrumb-item active" aria-current="page">Index</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Master CIF</h2>
            </div>
        </div>
    </div>

    <form action="{{ url()->current() }}"
        method="get">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="pd-30 pd-sm-40 bg-gray-100">
                    <div class="input-group">                        
                        {{-- <div class="col-md-4">
                            <input type="text"
                            class="form-control"
                            name="keyword"
                            value="{{ request('keyword') }}"
                            placeholder="Search Cus No Name ...">
                        </div> --}}
                        
                        {{-- <span class="input-group-btn">
                            <button type="submit" class="btn ripple btn-primary br-tl-0 br-bl-0" type="button">Submit</button>
                        </span>&nbsp;&nbsp;&nbsp; --}}
                        <span class="input-group-btn">
                            <a href="export-csv" target="_blank" class="btn btn-primary me-1">Export Excel</a>
                        </span>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</form>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-hover  mb-0 text-md-nowrap border">
    <tr style="text-align:center; background-color:#8EE2FA;">
        {{-- <th>No</th> --}}
        <th>CUS NO</th>
        <th>CUS CLASS DESC</th>
        <th>RGS TRN EMP NO</th>
        <th>RGS TRN DT</th>
        <th>OPN BR CD</th>
        <th>LOAD DATE</th>
        <th>REPORT DATE</th>
        <th>WARNING DATA</th>

    </tr>
    @foreach ($cus_no as $cno)
    <tr>
        {{-- <td>{{ ++$i }}</td> --}}
        <td>{{ $cno->CUS_NO }}</td>
        <td>{{ $cno->CUS_CLASS_DESC }}</td>
        <td>{{ $cno->RGS_TRN_EMP_NO }}</td>
        <td>{{ $cno->RGS_TRN_DT }}</td>
        <td>{{ $cno->OPN_BR_CD }}</td>
        <td>{{ $cno->LOAD_DATE }}</td>
        <td>{{ $cno->REPORT_DATE }}</td>
        <td>{{ $cno->WARNING_DATA }}</td>
        
    </tr>
    @endforeach
</table>
<br>
    {!! $cus_no->links() !!}

@endsection