@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Branchlist</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Master Branch</a></li>
								<li class="breadcrumb-item active" aria-current="page">Index</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Master Branch</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('branch.create') }}"> Create Branch</a>
            </div>
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
                            placeholder="Search Branch Name ...">
                        </div>
                        <span class="input-group-btn">
                            <button type="submit" class="btn ripple btn-primary br-tl-0 br-bl-0" type="button">Submit</button>
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
        <tr>
            <th>No</th>
            <th>Branch Code</th>
            <th>Branch Name</th>
            <th>Parent Branch</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($branch as $br)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $br->branch_code }}</td>
            <td>{{ $br->branch_name }}</td>
            <td>{{ $br->parent_branch }}</td>
            
            <td>
                <form action="{{ route('branch.destroy',$br->branch_code ) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('branch.show',$br->branch_code) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('branch.edit', $br->branch_code) }}">Edit</a>
   
                    {{-- @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button> --}}
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    {!! $branch->links() !!}
      
@endsection