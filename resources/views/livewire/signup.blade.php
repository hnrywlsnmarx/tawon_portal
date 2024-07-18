@extends('layouts.customapp')

@section('custom-styles') 
@endsection

@section('content')

		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper error-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
					<div class="my-auto authentication-pages">
						<div>
							<img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="m-0 mb-4" alt="logo">
							<h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
							<p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
							<a href="{{url('index')}}" class="btn btn-danger">Learn More</a>
						</div>
					</div>
				</div>
				<div class="sign-up-body wd-md-50p">
					<div class="main-signin-header">
						<h2>Welcome back!</h2>
						<h4>Please Register with Dashfox</h4>
						<form action="{{url('page-profile')}}">
							<div class="form-group">
								<label>Firstname &amp; Lastname</label> <input class="form-control" placeholder="Enter your firstname and lastname" type="text">
							</div>
							<div class="form-group">
								<label>Email</label> <input class="form-control" placeholder="Enter your email" type="text">
							</div>
							<div class="form-group">
								<label>Password</label> <input class="form-control" placeholder="Enter your password" type="password">
							</div><button class="btn btn-main-primary btn-block">Create Account</button>
						</form>
					</div>
					<div class="main-signup-footer mg-t-10">
						<p>Already have an account? <a href="{{url('signin')}}">Sign In</a></p>
					</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->

@endsection('content')

@section('custom-scripts') 
@endsection