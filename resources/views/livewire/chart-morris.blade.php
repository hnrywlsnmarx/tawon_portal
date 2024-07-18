@extends('layouts.app')

@section('styles') 

		<!-- Internal Morris Css-->
		<link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Morris Charts</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Morris Charts</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="morris-wrapper-demo" id="morrisBar1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="morris-wrapper-demo" id="morrisBar2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="morris-wrapper-demo" id="morrisBar3"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="morris-wrapper-demo" id="morrisBar4"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="morris-wrapper-demo" id="morrisLine1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="morris-wrapper-demo" id="morrisLine2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="morris-wrapper-demo" id="morrisArea1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="morris-wrapper-demo" id="morrisArea2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-md-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Donut Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Donut Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="morris-donut-wrapper-demo" id="morrisDonut2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- row closed -->
                
@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal  Morris js -->
		<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/morris.js/morris.min.js')}}"></script>

		<!--Internal Chart Morris js -->
		<script src="{{URL::asset('assets/js/chart.morris.js')}}"></script>
		
@endsection
