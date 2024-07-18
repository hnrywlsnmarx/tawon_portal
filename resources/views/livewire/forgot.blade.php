@extends('layouts.customapp')

@section('custom-styles') 
@endsection

@section('content')		
		
		<!-- Main-signin-wrapper -->
		<div class="my-auto page">
			<div class="main-signin-wrapper error-wrapper">
				<div class="main-card-signin forgot-password d-md-flex wd-100p">
					<div class="wd-md-50p  page-signin-style p-md-5 p-4 text-white d-none d-md-block ">
						<div class="my-auto authentication-pages">
							<div>
								<img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class=" m-0 mb-4" alt="logo">
								<h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
								<p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								<a href="{{url('index')}}" class="btn btn-danger">Learn More</a>
							</div>
						</div>
					</div>
					<div class="p-5 wd-md-50p">
						<div class="main-signin-header">
							<h2>Forgot Password!</h2>
							<h4>Please Enter Your Email</h4>
							<form action="{{url('page-profile')}}">
								<div class="form-group">
									<label>Email</label> <input class="form-control" placeholder="Enter your email" type="text">
								</div>
								<button class="btn btn-main-primary btn-block">Send</button>
							</form>
						</div>
						<div class="main-signup-footer mg-t-10">
							<p>Forget it, <a href="{{url('signin')}}"> Send me back</a> to the sign in screen.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main-signin-wrapper -->

@endsection('content')

@section('custom-scripts')  
@endsection 

