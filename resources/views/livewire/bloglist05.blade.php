@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Blog List 05</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Blog</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog List 05</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- Row-->
				<div class="row">
					<div class="col-lg-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<div class="d-flex align-items-center pt-3 mt-auto">
									<img class="avatar brround avatar-md mr-3" alt="img" src="{{URL::asset('/assets/img/faces/15.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold">MeganPeters</a>
										<small class="d-block text-muted">1 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
							<img class="card-img-bottom" src="{{URL::asset('/assets/img/photos/1.jpg')}}" alt="And this isn&#39;t my nose. This is a false one."></a>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<div class="d-flex align-items-center pt-3 mt-auto">
									<img class="avatar brround avatar-md mr-3"  alt="img" src="{{URL::asset('/assets/img/faces/16.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold">Anna Ogden</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
							<img class="card-img-bottom" src="{{URL::asset('/assets/img/photos/8.jpg')}}" alt="Well, I didn&#39;t vote for you."></a>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<div class="d-flex align-items-center pt-3 mt-auto">
									<img class="avatar brround avatar-md mr-3" alt="img" src="{{URL::asset('/assets/img/faces/1.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold">Carol Paige</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
							<img class="card-img-bottom" src="{{URL::asset('/assets/img/photos/3.jpg')}}" alt="How do you know she is a witch?">
						</div>
					</div>
					<div class="col-lg-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<div class="d-flex align-items-center pt-3 mt-auto">
									<img class="avatar brround avatar-md mr-3" alt="img" src="{{URL::asset('/assets/img/faces/5.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold">MeganPeters</a>
										<small class="d-block text-muted">1 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
							<img class="card-img-bottom" src="{{URL::asset('/assets/img/photos/4.jpg')}}" alt="And this isn&#39;t my nose. This is a false one."></a>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<div class="d-flex align-items-center pt-3 mt-auto">
									<img class="avatar brround avatar-md mr-3"  alt="img" src="{{URL::asset('/assets/img/faces/16.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold">Anna Ogden</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
							<img class="card-img-bottom" src="{{URL::asset('/assets/img/photos/5.jpg')}}" alt="Well, I didn&#39;t vote for you."></a>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<div class="d-flex align-items-center pt-3 mt-auto">
									<img class="avatar brround avatar-md mr-3" alt="img" src="{{URL::asset('/assets/img/faces/4.jpg')}}">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold">Carol Paige</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
							<img class="card-img-bottom" src="{{URL::asset('/assets/img/photos/6.jpg')}}" alt="How do you know she is a witch?">
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
				
