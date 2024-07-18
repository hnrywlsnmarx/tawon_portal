@extends('layouts.app')  

@section('styles') 
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Blog List 01</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Blog</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog List 01</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- Row -->
				<div class="row">
					<div class="col-md-6 col-xl-4">
						<div class="card overflow-hidden">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#"> annoying consequences</a></h5>
								<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center mt-auto">
									<img class="avatar brround avatar-md mr-3 " src="{{URL::asset('assets/img/faces/1.jpg')}}" alt="img">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold text-default">Anna Ogden</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center mt-auto">
									<img class="avatar brround avatar-md mr-3" src="{{URL::asset('assets/img/faces/2.jpg')}}" alt="img">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold text-default">Anna Ogden</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas</a></h5>
								<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center mt-auto">
									<img class="avatar brround avatar-md mr-3" src="{{URL::asset('assets/img/faces/14.jpg')}}" alt="img">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold text-default">Carol Paige</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card overflow-hidden">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#"> annoying consequences</a></h5>
								<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center mt-auto">
									<img class="avatar brround avatar-md mr-3 " src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="img">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold text-default">Anna Ogden</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center mt-auto">
									<img class="avatar brround avatar-md mr-3" src="{{URL::asset('assets/img/faces/5.jpg')}}" alt="img">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold text-default">Anna Ogden</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas</a></h5>
								<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center mt-auto">
									<img class="avatar brround avatar-md mr-3" src="{{URL::asset('assets/img/faces/7.jpg')}}" alt="img">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold text-default">Carol Paige</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card overflow-hidden">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#"> annoying consequences</a></h5>
								<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center mt-auto">
									<img class="avatar brround avatar-md mr-3 " src="{{URL::asset('assets/img/faces/8.jpg')}}" alt="img">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold text-default">Anna Ogden</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center mt-auto">
									<img class="avatar brround avatar-md mr-3" src="{{URL::asset('assets/img/faces/15.jpg')}}" alt="img">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold text-default">Anna Ogden</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card">
							<div class="card-body d-flex flex-column">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas</a></h5>
								<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center mt-auto">
									<img class="avatar brround avatar-md mr-3" src="{{URL::asset('assets/img/faces/14.jpg')}}" alt="img">
									<div>
										<a href="{{url('profile')}}" class="font-weight-semibold text-default">Carol Paige</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
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
				<!--End Row-->

@endsection('content') 

@section('scripts') 

    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
 
	<!-- Internal Select2 js-->
	<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

@endsection
				
