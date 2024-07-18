@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')					
<div class="left-content">
    <h4 class="content-title mb-1">Data Adjustment</h4>				
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">				
            <li class="breadcrumb-item"><a href="#">Data Adjustment</a></li>					
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
                            <input type="text" class="form-control form-control-sm" name="keyword" value="{{ request('keyword') }}" placeholder="Search Refernce Number">
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
            <th>NIK</th>
            <th>Token Registrasi</th>
            <th>Reference Number</th>
            <th>Produk KTA</th>
            <th>Nama Nasabah</th>
            <th>Kabupaten/Kota</th>
            <th>Adjusment Pinjaman</th>
            <th>Cabang yang ditunjuk</th>
            <th>Adjusted By</th>
            <th width="120px">Action</th>
        </tr>
        @foreach($scoring as $score)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $score->nik }}</td>
            <td>{{ $score->tokenreg }}</td>
            <td>{{ $score->ref_no }}</td>
            <td>{{ $score->produkkta }}</td>
            <td>{{ $score->namapemohon }}</td>
            <td>{{ $score->kabupatenkota }}</td>
            <td>{{ $score->adjustment_pinjaman }}</td>
            <td>{{ $score->desired_branch }}</td>
            <td>{{ $score->created_by }}</td>
            
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('dataadjustment.show',$score->ref_no) }}" style="margin-right: 30px">Show</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    {!! $scoring->links() !!}
@endsection