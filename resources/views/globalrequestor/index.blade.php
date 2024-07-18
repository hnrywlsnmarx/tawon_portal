@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')					
<div class="left-content">
    <h4 class="content-title mb-1">Data Requestor Link Registrasi</h4>				
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">				
            <li class="breadcrumb-item"><a href="#">Requestor Link Registrasi</a></li>					
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
                            <input type="text" class="form-control form-control-sm" name="keyword" value="{{ request('keyword') }}" placeholder="Search Name ...">
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
        <a href="simtoday/exportexcel" class="btn btn-sm btn-danger mt-2 mb-3" target="_blank">Download Excel</a>
        <a href="simtoday/exportcsv" class="btn btn-sm btn-info mt-2 mb-3" target="_blank">Download CSV</a>
    </div> --}}

    <table class="table table-bordered table-hover mb-0 text-md-nowrap border" style="font-size: smaller;">
        <tr style="background-color: rgb(204, 227, 253)">
            <th>No</th>
            <th>NIK</th>
            <th>Token Registrasi</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kabupaten/Kota</th>
            <th>Nomor Handphone</th>
            <th>IP Address</th>
            <th width="100px">Action</th>
        </tr>
        @foreach ($requestor as $req)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $req->nik }}</td>
            <td>{{ $req->tokenreg }}</td>
            <td>{{ $req->nama }}</td>
            <td>{{ $req->email }}</td>
            <td>{{ $req->kabupatenkota }}</td>
            <td>{{ $req->no_hp }}</td>
            <td>{{ $req->ip_address }}</td>
            <td>
                <a class="btn btn-sm btn-success" href="{{ route('requestor.show',$req->nik) }}">Show</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    {!! $requestor->links() !!}
@endsection