@extends('layouts.app')

@section('styles') 

		<!-- Internal Morris Css-->
		<link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Flot Charts</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Flot Chart</li>
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
								<div class="ht-200 ht-sm-300" id="flotBar1"></div>
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
								<div class="ht-200 ht-sm-300" id="flotBar2"></div>
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
								<div class="ht-200 ht-sm-300" id="flotLine1"></div>
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
								<div class="ht-200 ht-sm-300" id="flotLine2"></div>
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
								<div class="ht-200 ht-sm-300" id="flotArea1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6 ">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="ht-200 ht-sm-300" id="flotArea2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-20 mg-md-b-0">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pie Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="ht-200 ht-sm-300" id="flotPie1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pie Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Basic Charts Of Dashfox template.</p>
								<div class="ht-200 ht-sm-300" id="flotPie2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Flot js -->
		<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Chart flot js -->
		<script src="{{URL::asset('assets/js/chart.flot.js')}}"></script>
		
@endsection
