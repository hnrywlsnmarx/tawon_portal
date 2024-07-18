@extends('layouts.app')

@section('styles') 

		<!-- Internal Images-Comparsion css -->
		<link href="{{URL::asset('assets/plugins/images-comparsion/twentytwenty.css')}}" rel="stylesheet" />

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Image Comparision</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Image Comparision</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Horizontal Image Comparision
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="twentytwenty-container">
									<img src="{{URL::asset('assets/img/photos/compare1.jpg')}}" alt="img" />
									<img src="{{URL::asset('assets/img/photos/compare2.jpg')}}" alt="img" />
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vertical Image Comparision
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="twentytwenty-container" data-orientation="vertical">
									<img src="{{URL::asset('assets/img/photos/compare1.jpg')}}" alt="img" />
									<img src="{{URL::asset('assets/img/photos/compare2.jpg')}}" alt="img" />
								</div>
							</div>
						</div>
						<!-- div -->
					</div>
				</div>

@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal  Images-Comparsion js -->
		<script src="{{URL::asset('assets/plugins/images-comparsion/jquery.twentytwenty.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/images-comparsion/jquery.event.move.js')}}"></script>
		<script src="{{URL::asset('assets/js/image-comparision.js')}}"></script>

@endsection