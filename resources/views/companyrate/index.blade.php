@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Perusahaan</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Perusahaansse</a></li>
								<li class="breadcrumb-item active" aria-current="page">Index</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>perusahaan</h5>
            </div>
            {{-- <div class="pull-right">
                <a class="btn btn-sm btn-success" href="{{ route('perusahaan.create') }}"> Create Company Rate</a>
            </div> --}}
        </div>
    </div>
    <br>
    <form action="{{ url()->current() }}"
        method="get">
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
                            placeholder="Search Name ...">
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
   
    <table class="table table-bordered table-hover  mb-0 text-md-nowrap border" style="font-size: smaller;">
        <tr style="background-color: rgb(204, 227, 253)">
            <th>No</th>
            <th>Company Code</th>
            <th>Company Name</th>
            <th>Jenis Industri</th>
            
            {{-- <th width="150px">Action</th> --}}
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->comp_code }}</td>
            <td>{{ $user->comp_name }}</td>
            <td>{{ $user->nama_bidang_usaha }}</td>
            {{-- <td> --}}
                
   
                    {{-- <a class="btn btn-sm btn-info" href="{{ route('perusahaan.show',$user->id) }}">Show</a> --}}
    
                    {{-- <a class="btn btn-sm btn-primary" href="{{ route('perusahaan.edit', $user->id) }}">Edit</a> --}}
   
                    {{-- @csrf
                    @method('DELETE')
                    
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button> --}}
                
            {{-- </td> --}}
        </tr>
        @endforeach
    </table>
    <br>
    <br>
    <br>
    {!! $users->links() !!}
      
@endsection