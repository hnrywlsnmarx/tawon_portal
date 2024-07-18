@extends('layouts.app')

@section('styles') 

		<!-- Internal Morris Css-->
		<link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Sparkline Charts</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utility</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sparkline Chart</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline5">4,4,7,5,9,10,3,4,4,7,5,9,10,6</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline6">6,4,4,7,5,9,10,3,4,4,7,5,9,10</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->

					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline7">9,10,8,7,8,10,7,5,9,10,6,9,4,7,5</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline8">5,9,10,6,4,4,7,5,9,10,8,3,4,4,7</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Below is the basic line chart example.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline1">4,7,5,9,10,3,4,4,7,5,9,10,6,4</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline2">4,7,5,9,10,3,4,4,7,5,9,10,6,4</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->
					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Below is the area bar chart example.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline3">4,7,5,9,10,8,7,8,10,7,5,9,10,6,9</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline4">4,4,7,5,9,10,8,3,4,4,7,5,9,10,6</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12">
						<!-- div -->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pie Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">An example of a pie chart with two series.</p>
								<div class="d-flex">
									<div>
										<span id="sparkline9">5,2,3</span>
									</div>
									<div class="mg-l-30">
										<span id="sparkline10">7,5,9,3,4,4,</span>
									</div>
								</div>
							</div>
						</div>
					<!-- /div -->
					</div><!-- col-6 -->
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Jquery-sparkline js -->
		<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/chart.sparkline.js')}}"></script>

@endsection