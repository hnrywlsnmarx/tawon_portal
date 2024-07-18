@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')				

<div class="left-content">
    <h4 class="content-title mb-1">Data Scoring</h4>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data Scoring</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
</div>

@endsection('breadcrumb')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Data Scoring</h5>
            </div>
        </div>
    </div>
    <br>
    <form action="{{ url()->current() }}" method="get">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <div class="input-group">
                            <div class="col-md-4">
                                <input type="text"
                                class="form-control"
                                name="keyword"
                                value="{{ request('keyword') }}"
                                placeholder="Search No Rekening ...">
                            </div>
                            <span class="input-group-btn">
                                <button type="submit" class="btn ripple btn-sm btn-primary br-tl-0 br-bl-0" type="button">Submit</button>
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

    <table class="table table-bordered table-hover mb-0 text-md-nowrap border" style="font-size: smaller;">
        <tr style="background-color: rgb(204, 227, 253)">
            <th>No</th>
            <th>Request Code</th>
            <th>Username</th>
            <th>Host</th>
            <th>Request Data</th>
            <th>Response Data</th>
            <th>Service Name</th>
            <th>Insert Date</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($scoring as $apps)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $apps->request_code }}</td>
            <td>{{ $apps->username }}</td>
            <td>{{ $apps->host }}</td>
            <td style="word-break: break-all;">{{ $apps->param }}</td>
            <td style="word-break: break-all;">{{ $apps->data }}</td>
            <td>{{ $apps->service_name }}</td>

            <td>{{ $apps->insert_date }}</td>
            <td>
                <a class="btn btn-sm btn-success" style="float: left;" href="{{ route('datascoring.show',$apps->request_code) }}">Show</a>
                {{-- <a class="btn btn-sm btn-danger" style="float: right;" href="{{ route('scoring.edit', $apps->norek) }}">Edit</a> --}}
            </td>
        </tr>
        @endforeach
    </table>
{!! $scoring->links() !!}
<br>
<br>
<br>
@endsection