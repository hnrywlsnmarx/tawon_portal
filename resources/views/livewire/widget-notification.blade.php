@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Widget Notification</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Widget Notification</li>
							</ol>
						</nav>
					</div>

				@endsection('breadcrumb')

				@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-danger">
								<div class="main-error-wrapper">
									<i class="si si-close mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Data Not Found.</h4>
									<a class="btn btn-outline-danger" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-success">
								<div class="main-error-wrapper">
									<i class="si si-check mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Submitted Successfully</h4>
									<a class="btn btn-outline-success" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-info">
								<div class="main-error-wrapper">
									<i class="si si-info mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Info Alert</h4>
									<a class="btn btn-outline-info" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-danger">
							<div class="card-body text-white">
								<div class="main-error-wrapper">
									<i class="si si-close mg-b-20 tx-50"></i>
									<h4 class="mg-b-10">Data Not Found.</h4>
									<p class="mb-0 tx-white-8 tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-success">
							<div class="card-body text-white">
								<div class="main-error-wrapper">
									<i class="si si-check mg-b-20 tx-50"></i>
									<h4 class="mg-b-10">Submitted Successfully</h4>
									<p class="mb-0 tx-white-8 tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-info">
							<div class="card-body text-white">
								<div class="main-error-wrapper">
									<i class="si si-info mg-b-20 tx-50"></i>
									<h4 class="mg-b-10">Info Alert</h4>
									<p class="mb-0 tx-white-8 tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
				</div>
				<!-- row -->

				<!-- /row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 alert p-0 overflow-hidden">
							<div class="card-header text-danger font-weight-bold bg-danger-transparent pd-t-30">
								<i class="far fa-times-circle"></i> Error Data
								<button aria-label="Close" class="close text-danger" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-danger bg-danger-transparent">
								<strong>Oh snap!</strong> Change a few things up and try submitting again.
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 alert p-0 overflow-hidden">
							<div class="card-header text-success font-weight-bold bg-success-transparent pd-t-30">
								<i class="far fa-check-circle"></i> Success Data
								<button aria-label="Close text-success" class="close text-success" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-success bg-success-transparent">
								<strong>Well done!</strong> You successfully read this important alert message.
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 alert p-0 overflow-hidden">
							<div class="card-header text-info font-weight-bold bg-info-transparent pd-t-30">
								<i class="far fa-question-circle"></i> Info Data
								<button aria-label="Close" class="close text-info" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-info bg-info-transparent">
								<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-header text-white font-weight-bold bg-danger py-4">
								<i class="far fa-times-circle"></i> Error Data
								<button aria-label="Close" class="close text-white" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-danger">
								<div class="main-error-wrapper">
									<i class="si si-close mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Data Not Found.</h4>
									<a class="btn btn-outline-danger" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-header text-white font-weight-bold bg-success py-4">
								<i class="far fa-check-circle"></i> Success Data
								<button aria-label="Close" class="close text-white" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-success">
								<div class="main-error-wrapper">
									<i class="si si-check mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Submitted Successfully</h4>
									<a class="btn btn-outline-success" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-header text-white font-weight-bold bg-info py-4">
								<i class="far fa-question-circle"></i> Info Data
								<button aria-label="Close" class="close text-white" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-info">
								<div class="main-error-wrapper">
									<i class="si si-info mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Info Alert</h4>
									<div>
										<a class="btn btn-outline-info" href="">Cancel</a>
										<a class="btn btn-info" href="">Okay</a>
									</div>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-header text-white font-weight-bold bg-danger py-4">
								<i class="far fa-times-circle"></i> Error Data
								<button aria-label="Close" class="close text-white" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body">
								<div class="p-0">
									<h5 class="mg-b-10"><i class="si si-close"></i> Data Not Found.</h5>
									<p class="mb-0 text-muted tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
								</div>
							</div>
							<div class="card-footer text-right bg-white">
								<a class="btn btn-danger" href="#">Okay</a>
								<a class="btn btn-light" href="#">Cancel</a>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-header text-white font-weight-bold bg-success py-4">
								<i class="far fa-check-circle"></i> Success Data
								<button aria-label="Close" class="close text-white" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body">
								<div class="p-0">
									<h5 class="mg-b-10"><i class="si si-check"></i> Submitted Successfully</h5>
									<p class="mb-0 text-muted tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
								</div>
							</div>
							<div class="card-footer text-right bg-white">
								<a class="btn btn-success" href="#">Okay</a>
								<a class="btn btn-light" href="#">Cancel</a>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-header text-white font-weight-bold bg-info py-4">
								<i class="far fa-question-circle"></i> Info Data
								<button aria-label="Close" class="close text-white" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body">
								<div class="p-0">
									<h5 class="mg-b-10"><i class="si si-info"></i> Info Alert</h5>
									<p class="mb-0 text-muted tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
								</div>
							</div>
							<div class="card-footer text-right bg-white">
								<a class="btn btn-info" href="#">Okay</a>
								<a class="btn btn-light" href="#">Cancel</a>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="fe fe-facebook project bg-primary-transparent mx-auto text-primary"></i>
								</div>
								<h5 class="">Turn on Notification</h5>
								<p class="mb-0 text-muted tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
							</div>
							<a class="card-body pd-10" href="#">
								Not Now
							</a>
							<a class="card-body pd-10" href="#">
								Allow
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="fe fe-user project bg-success-transparent mx-auto text-success"></i>
								</div>
								<h5 class="">Allow Contacts</h5>
								<p class="mb-0 text-muted tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
							</div>
							<a class="card-body pd-10" href="#">
								Not Now
							</a>
							<a class="card-body pd-10" href="#">
								Allow
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="fe fe-map-pin project bg-danger-transparent mx-auto text-danger"></i>
								</div>
								<h5 class="">Allow Location</h5>
								<p class="mb-0 text-muted tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
							</div>
							<a class="card-body pd-10" href="#">
								Not Now
							</a>
							<a class="card-body pd-10" href="#">
								Allow
							</a>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- /row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<div class="card mg-b-20 text-center">
							<div class="card-body">
								<img src="{{URL::asset('assets/img/svgicons/not-found.svg')}}" alt="" class="wd-35p">
								<h5 class="mg-b-10 mg-t-15 tx-18">Page Items Not Found</h5>
								<p class="text-muted tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
								<a class="btn btn-primary" href="#">Go to Settings</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="card mg-b-20 text-center">
							<div class="card-body">
								<img src="{{URL::asset('assets/img/svgicons/sync.svg')}}" alt="" class="wd-35p">
								<h5 class="mg-b-10 mg-t-15 tx-18">Its Empty In Here</h5>
								<p class="text-muted tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
								<a class="btn btn-primary" href="#">Go to Settings</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="card mg-b-20 text-center">
							<div class="card-body">
								<img src="{{URL::asset('assets/img/svgicons/status.svg')}}" alt="" class="wd-40p">
								<h5 class="mg-b-10 mg-t-15 tx-18">No Site Selected</h5>
								<p class="text-muted tx-12">On the other hand, we denounce with right indignation and dislike imagesralized</p>
								<a class="btn btn-primary" href="#">Go to Settings</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection('content')

@section('scripts') 

		<!-- Internal Chart js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

@endsection	