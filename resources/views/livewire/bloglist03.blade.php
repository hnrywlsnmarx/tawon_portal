@extends('layouts.app')

@section('styles') 
@endsection	

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Blog List 03</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Blog</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog List 03</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- Row-->
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img class="avatar brround avatar-md mr-3" alt="img" src="{{URL::asset('assets/img/faces/2.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold tx-gray-900">Thomos Scott</a>
										<small class="d-block text-muted">1 day ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
								<h6 class="text-capitalize tx-16"><a href="#">Publishing packages</a></h6>
								<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
								<div><a href="" class="mt-3 btn btn-primary">Read more</a></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img class="avatar brround avatar-md mr-3" alt="img" src="{{URL::asset('assets/img/faces/4.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold tx-gray-900">IreneScott</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
								<h6 class="text-capitalize tx-16"><a href="#">Nihil molestaturrgt.</a></h6>
								<div class="text-muted">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
								<div><a href="" class="mt-3 btn btn-primary">Read more</a></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img class="avatar brround avatar-md mr-3" alt="img" src="{{URL::asset('assets/img/faces/6.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold tx-gray-900">Thomos Scott</a>
										<small class="d-block text-muted">1 day ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
								<h6 class="text-capitalize tx-16"><a href="#">Publishing packages</a></h6>
								<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
								<div><a href="" class="mt-3 btn btn-primary">Read more</a></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img class="avatar brround avatar-md mr-3" alt="img" src="{{URL::asset('assets/img/faces/6.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold tx-gray-900">IreneScott</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
								<h6 class="text-capitalize tx-16"><a href="#">Nihil molestaturrgt.</a></h6>
								<div class="text-muted">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
								<div><a href="" class="mt-3 btn btn-primary">Read more</a></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img class="avatar brround avatar-md mr-3" alt="img" src="{{URL::asset('assets/img/faces/10.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold tx-gray-900">Thomos Scott</a>
										<small class="d-block text-muted">1 day ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
								<h6 class="text-capitalize tx-16"><a href="#">Publishing packages</a></h6>
								<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
								<div><a href="" class="mt-3 btn btn-primary">Read more</a></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img class="avatar brround avatar-md mr-3" alt="img" src="{{URL::asset('assets/img/faces/12.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold tx-gray-900">IreneScott</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
								<h6 class="text-capitalize tx-16"><a href="#">Nihil molestaturrgt.</a></h6>
								<div class="text-muted">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
								<div><a href="" class="mt-3 btn btn-primary">Read more</a></div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<ul class="pagination float-right">
							<li class="page-item"><a class="page-link bg-white" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link bg-white" href="#">2</a></li>
							<li class="page-item"><a class="page-link bg-white" href="#">3</a></li>
							<li class="page-item"><a class="page-link bg-white" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- End row-->

@endsection('content')

@section('scripts') 

	<!--Internal  Datepicker js -->
	<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

	<!-- Internal Select2 js-->
	<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
	
@endsection	
				
