@extends('layouts.customapp')

@section('custom-styles') 
@endsection

@section('content')		
		
		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper error-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
					<div class="wd-md-50p login d-none d-md-block p-5 text-white" style="background-color: #66A5AD;">
						<div class="my-auto authentication-pages" style="margin: auto; padding: 35px;">
							<center><h4 style="color: black;"> Portal TAWON </h4></center>
							<div class="mt-1" style="background-color: #C4DFE6; padding:25px; margin: auto; border-radius:25px;">
								<center>
									<img src="{{URL::asset('assets/img/logo.png')}}" alt="logo">
								</center>
							</div>
						</div>
					</div>
					<div class="p-5 wd-md-50p" style="background-color: #07575B;">
						<div class="main-signin-header">
							<h2 style="color: rgb(157, 173, 175);">Welcome back!</h2>
							<h4 style="color: rgb(123, 161, 164);">Please sign in to continue</h4>
							@if ($message = Session::get('error'))
								<div class="alert alert-danger alert-block">
									<button type="button" class="close" data-dismiss="alert">×</button> 
									<strong>{{ $message }}</strong>
								</div>
							@endif
							<form method="POST" action="{{ route('loginehr') }}">
								@csrf
								<div class="form-group">
									<input id="ip_address" type="hidden" class="form-control @error('ip_address') is-invalid @enderror" name="ip_address" value="{{ Request::getClientIp(true) }}" required autocomplete="ip_address" autofocus>
                                	@error('ip_address')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
                                	@enderror
									<label style="color: rgb(101, 183, 183)">NIK EHR</label>
									<input name="email" type="text" class="form-control" id="username" placeholder="Enter EHR NIK" autofocus required>
									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="form-group">
									<label style="color: rgb(101, 183, 183)">Password</label>
									<input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="userpassword" value="" placeholder="Enter password" required>
									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div><button class="btn btn-main-primary btn-block" style="background-color: rgb(4, 52, 54);" type="submit">Sign In</button>
							</form>
						</div>
						{{-- <div class="main-signin-footer mt-3 mg-t-5">
							<p><a href="">Forgot password?</a></p>
							<p>Don't have an account? <a href="{{url('page-signup')}}">Create an Account</a></p>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->

@endsection('content')

@section('custom-scripts') 
 
@endsection