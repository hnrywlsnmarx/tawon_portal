@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')					
<div class="left-content">
    <h4 class="content-title mb-1">Log Data Request (Incoming Request)</h4>				
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">				
            <li class="breadcrumb-item"><a href="#">Log Data Request (Incoming Request)</a></li>					
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>					
    </nav>			
</div>

@endsection('breadcrumb')

@section('content')
    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Master User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create User</a>
            </div>
        </div>
    </div> --}}
    <form action="{{ url()->current() }}" method="get">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="pd-10 pd-sm-40 bg-gray-100">
                    <div class="input-group">
                        <div class="col-md-4">
                            <input type="text" class="form-control form-control-sm" name="keyword" value="{{ request('keyword') }}" placeholder="Search Reference Number">
                        </div>
                        <span class="input-group-btn">
                            <button type="submit" class="btn ripple btn-sm btn-dark br-tl-0 br-bl-0" type="button">Submit</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    {{-- <div style="float: right;">
        <a href="{{ url('exportsimulasi') }}" class="btn btn-sm btn-danger mt-2 mb-3">Download</a>
    </div> --}}

    <table class="table table-bordered table-hover mb-0 text-md-nowrap border" style="font-size: smaller;">
        <tr style="background-color: rgb(204, 227, 253)">
            <th>No</th>
            <th>Request Code</th>
            <th>user API</th>
            <th>Data</th>
            <th>Host</th>
            <th>Updated At</th>
            <th width="50px">Action</th>
        </tr>
        @foreach($scoring as $score)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $score->request_code }}</td>
            <td>{{ $score->username }}</td>
            
            <td style="word-break: break-all;">{{ $score->param }}</td>
            <td>{{ $score->host }}</td>
            <td>{{ $score->insert_date }}</td>
            <td>
                <a class="btn btn-sm btn-success" href="{{ route('rawdata.show',$score->request_code) }}"style="margin-right: 30px">Show</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    {!! $scoring->links() !!}
@endsection