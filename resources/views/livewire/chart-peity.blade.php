@extends('layouts.app')

@section('styles')

		<!-- Internal Morris Css-->
		<link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Peity Chart</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Peity Chart</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-sm-flex">
									<div>
										<span class="peity-line" data-peity='{ "fill": false, "stroke": "#560bd0", "height": 70, "width": 200 }'>4,4,7,5,9,10,10,4,4,7,5,9,10,1</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span class="peity-line" data-peity='{ "fill": false, "stroke": "#ff8c00", "height": 70, "width": 200 }'>-4,-4,-7,-5,-9,-10,-10,-4,-4,-7,-5,-9,-10,-1</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-sm-flex">
									<div>
										<span class="peity-line" data-peity='{ "fill": "rgba(80, 102, 224,.2)", "stroke": "#560bd0", "height": 70, "width": 200 }'>5,9,10,10,4,4,7,5,9,10,1,4,4,7</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span class="peity-line" data-peity='{ "fill": "rgba(255, 140, 0, .2)", "stroke": "#ff8c00", "height": 70, "width": 200 }'>-5,-9,-10,-1,-4,-4,-7,-5,-9,-10,-10,-4,-4,-7</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-md-flex">
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-t-20 bg-gray-100">
										<span class="peity-bar" data-peity='{ "fill": ["#ff8c00"], "height": 70, "width": 200 }'>4,4,7,5,9,10,10,4,4,7,5,9,10,5</span>
									</div>
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-t-20 bg-gray-100">
										<span class="peity-bar" data-peity='{ "fill": ["#ff8c00","#5066e0"], "height": 70, "width": 200 }'>7,5,9,10,0,4,4,7,5,9,10,5,4,4</span>
									</div>
								</div>
								<div class="d-md-flex">
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-b-20 bg-gray-100">
										<span class="peity-bar" data-peity='{ "fill": ["#5066e0"], "height": 70, "width": 200 }'>-12,-7,-5,-9,-10,-10,-12,-12,-7,-5,-9,-10,-5,-13</span>
									</div>
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-b-20 bg-gray-100">
										<span class="peity-bar" data-peity='{ "fill": ["#5066e0","#ff8c00"], "height": 70, "width": 200 }'>-5,-9,-10,-10,-12,-12,-7,-5,-9,-10,-5,-13,-12,-7</span>
									</div>
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-y-10 bg-gray-100">
										<span class="peity-bar" data-peity='{ "fill": ["#ff8c00","#5066e0"], "height": 70, "width": 200 }'>-4,7,-5,9,-10,9,10,10,-4,4,5,-7,5,-9,-5,10,-5,4</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pie Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-md-flex">
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#5066e0", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>1/6</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#ff8c00", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>240/360</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#00d48f", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>0.32/1.561</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#ffc107", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>1,4</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#02d7ff", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>226,134</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#fa5c7c", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>0.52,1.041</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#5066e0","#ff8c00","#02d7ff"], "height": 70, "width": 70 }'>10,4,4</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Donut Chart
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-md-flex">
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#5066e0", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>1/6</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#ff8c00", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>240/360</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#00d48f", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>0.32/1.561</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#ffc107", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>1,4</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#02d7ff", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>226,134</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#fa5c7c", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70 }'>0.52,1.041</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#5066e0","#ff8c00","#02d7ff"], "height": 70, "width": 70 }'>10,4,4</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Data Attributes
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-md-flex">
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#5066e0", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70, "innerRadius": 10, "radius": 40 }'>1/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#ff8c00", "rgba(0, 0, 0, 0.1)"],"height": 70, "width": 70, "innerRadius": 14, "radius": 36 }'>2/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#00d48f", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70, "innerRadius": 16, "radius": 32 }'>3/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#ffc107", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70, "innerRadius": 18, "radius": 28 }'>4/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#02d7ff", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70, "innerRadius": 20, "radius": 24 }'>5/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#fa5c7c", "rgba(0, 0, 0, 0.1)"], "height": 70, "width": 70, "innerRadius": 18, "radius": 20 }'>6/7</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Updating Charts
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="wd-200">
									<span class="updating-chart" data-peity='{ "fill": ["rgba(80, 102, 224,.4)"],"stroke":["#5066e0"]}'>5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
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

		<!-- Internal jQuery Peity js -->
		<script src="{{URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Peity js -->
		<script src="{{URL::asset('assets/js/chart.peity.js')}}"></script>
		
@endsection
