@extends('layouts.customapp')

@section('custom-styles') 
@endsection

@section('content') 
		
		<!-- main-signin-wrapper -->
		<div class="my-auto page main-signin-wrapper error-wrapper mg-lg-t-0 mg-lg-b-50">
			<div class="text-center mb-2">
				<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="header-brand-img" alt="logo">
				<div class="main-signin-wrapper">
					<div class="main-card-signin d-md-flex ">
						<div class="p-5 w-100">
							<div class="main-signin-header">
								<img alt=""  class="avatar avatar-xxl avatar-xxl mx-auto text-center mb-2 rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}">
								<div class="mx-auto text-center mt-4 mg-b-30">
									<h5 class="mg-b-10 tx-16">Mintrona Pechon</h5>
									<p class="tx-13">Enter Your Password to View your Screen</p>
								</div>
								<form action="{{url('page-profile')}}">
									<div class="form-group">
										<input class="form-control" placeholder="Enter your password" type="password" value="">
									</div>
									<button class="btn btn-main-primary btn-block">Unlock</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main-signin-wrapper -->

@endsection('content')

@section('custom-scripts') 
@endsection