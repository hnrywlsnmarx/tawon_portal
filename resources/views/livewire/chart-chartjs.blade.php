@extends('layouts.app') 

@section('styles') 
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Chart Js</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chart Js</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-4">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Solid Color
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="ht-200 ht-lg-250">
									<canvas id="chartBar1"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									With Transparency
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="ht-200 ht-lg-250">
									<canvas id="chartBar2"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Using Gradient Color
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="ht-200 ht-lg-250">
									<canvas id="chartBar3"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-12 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Horizontal Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartBar4"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Horizontal Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartBar5"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartStacked1"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartStacked2"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartLine1"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartArea1"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6">
						<div class="card mg-b-md-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pie Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartPie"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Donut Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartDonut"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!--Internal  Chart.bundle js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal Chartjs js -->
		<script src="{{URL::asset('assets/js/chart.chartjs.js')}}"></script>

@endsection