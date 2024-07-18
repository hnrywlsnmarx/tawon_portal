@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Counters</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Counters</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- Row -->
				<div class="row">
					<div class="col-md-12 col-xl-4">
						<div class="card overflow-hidden">
							<a href="#"><img class="card-img-top  " src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="img"></a>
							<div class="card-body d-flex flex-column">
								<h4 class="card-title">Time Counting From 0</h4>
								<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="bg-primary p-3 rounded-5 mt-4 text-center">
									<span id="timer-countup" class="h5 text-white mb-0"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4">
						<div class="card overflow-hidden">
							<a href="#"><img class="card-img-top " src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="img"></a>
							<div class="card-body d-flex flex-column">
								<h4 class="card-title">Time Counting From 60 to 20</h4>
								<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="bg-secondary p-3 rounded-5 mt-4 text-center">
									<span id="timer-countinbetween" class="h5 text-white mb-0"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4">
						<div class="card overflow-hidden">
							<a href="#"><img class="card-img-top " src="{{URL::asset('assets/img/photos/10.jpg')}}" alt="img"></a>
							<div class="card-body d-flex flex-column">
								<h4 class="card-title">Time 1 minute counter</h4>
								<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="bg-success p-3 rounded-5 mt-4 text-center">
									<span id="timer-countercallback" class="h5 text-white mb-0"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--End Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="">
									<h3 class="card-title mb-1">Time Counting days Limit</h3>
									<p class="tx-12 text-muted card-sub-title">The Time Counting days Limit of template.</p>
								</div>
								<div class="bg-info p-3 rounded-5 text-center">
									<span id="timer-outputpattern" class="h4 text-white mb-0 tx-captalize"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--End Row -->

				<!-- Row -->				
				<div class="card">
					<div class="card-body pb-0">
						<div class="row row-sm">
							<div class="col-sm-12 col-md-4 pd-b-20">
								<div class="text-center border p-3 bg-gray-100 rounded-5">
									<h2 class="counter number-font mb-0">2569</h2>
									<div>
										<h6 class="card-title mg-t-10">Numbers counter</h6>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 pd-b-20">
								<div class="text-center border p-3 bg-gray-100 rounded-5">
									<h2 class="counter number-font mb-0">2,56989.32</h2>
									<div>
										<h6 class="card-title mg-t-10">Floating counter</h6>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 pd-b-20">
								<div class="text-center border p-3 bg-gray-100 rounded-5">
									<h2 class="counter number-font mb-0">0.8998</h2>
									<div>
										<h6 class="card-title mg-t-10">Numbers counter</h6>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--End Row -->

@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal Counters -->
		<script src="{{URL::asset('assets/plugins/counters/waypoints.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/counters/counterup.min.js')}}"></script>

		<!--Internal Time Counter -->
		<script src="{{URL::asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/counters/counter.js')}}"></script>

@endsection