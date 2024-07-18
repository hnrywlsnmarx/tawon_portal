@extends('layouts.app')

@section('styles') 

		<!-- Internal Ion.rangeSlider css -->
		<link href="{{URL::asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Range Slider</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Range Slider</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Range Slider
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">Default range slider Of Dashfox.</p>
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" name="example_name" type="text" value="">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider2" name="example_name" type="text" value="">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider3" name="example_name" type="text" value="">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider4" name="example_name" type="text" value="">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Range Slider (Modern Skin)
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is the modern skin range slider of Dashfox.</p>
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider2" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider3" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider4" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Range Slider (Outline Skin)
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is the outline skin range slider of Dashfox.</p>
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider2" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider4" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
					</div>
				</div>

@endsection('content')

@section('scripts') 

		<!--Internal Sparkline js -->
		<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>

		<!-- Internal Piety js -->
		<script src="{{URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!--Internal Ion.rangeSlider.min js -->
		<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

		<!-- Internal Chart js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- Internal  rangeslider js -->
		<script src="{{URL::asset('assets/js/rangeslider.js')}}"></script>

@endsection