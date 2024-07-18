@extends('layouts.app')

@section('styles') 

		<!---Internal  Owl Carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!--- Internal Sweet-Alert css-->
		<link href="{{URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Sweet Alerts</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sweet Alerts</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- Row -->
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Alert</h6>
									<p class="tx-12 text-muted card-sub-title">A Basic Message</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-basic'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Title alert</h6>
									<p class="tx-12 text-muted card-sub-title">A title with a text under</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-title'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Success alert</h6>
									<p class="tx-12 text-muted card-sub-title">A Success Message</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-success'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Warning alert</h6>
									<p class="tx-12 text-muted card-sub-title">A warning message</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-warning'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Passing a parameter alert</h6>
									<p class="tx-12 text-muted card-sub-title">By passing a parameter</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-parameter'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Image alert</h6>
									<p class="tx-12 text-muted card-sub-title">A message with custom Image</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-image'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Timer alert</h6>
									<p class="tx-12 text-muted card-sub-title">A message with auto close timer</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-timer'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Ajax Alert</h6>
									<p class="tx-12 text-muted card-sub-title">With a loader (for a AJAX requests)</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-ajax'>
									Click me !
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Rating js-->
		<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/ratings.js')}}"></script>

		<!--Internal  Sweet-Alert js-->
		<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>

@endsection