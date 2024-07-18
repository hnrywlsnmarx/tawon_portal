
@extends('layouts.app')

@section('styles')

		<!--  Owl-carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

		<!-- Maps css -->
		<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

		<!-- Jvectormap css -->
        <link href="{{URL::asset('assets/plugins/jqvmap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
		<script src="{{URL::asset('assets/js/jquery-1.9.1.js')}}"></script>
		<script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{URL::asset('assets/js/moment.js')}}"></script>

@endsection

@section('breadcrumb')
<div class="left-content">
	<h4 class="content-title mb-2">Hi, Welcome Back! {{ session('nama') }}</h4>
	<h6 class="content-title mb-2">Branch: {{ session('branch') }} || {{ session('branchname') }} || Alternate Branch : {{ $altbranch }} || Branch: {{ $altbranchname }}</h6>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Analytics &amp; Monitoring</li>
		</ol>
	</nav>
</div>					
@endsection('breadcrumb')

@section('content')				
<div class="row row-sm" >				
	<div class="col-lg-12">				
		<div class="row row-sm">				
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">				
				<div class="card">	
					<div class="card-body iconfont text-left">
						<div class="d-flex justify-content-between">
							<h4 class="card-title mb-2">Permohonan Scoring Hari ini</h4>
							<div class="card-options ml-auto">
							</div>
						</div>
						<div class="d-flex mb-0">
							<div class="">
								<h4 class="mt-2 mb-1 font-weight-bold">{{ $todayscoring }}</h4>
							</div>
							<div class="card-chart bg-primary-transparent brround ml-auto mt-0">
								<i class="typcn typcn-clipboard text-primary tx-24"></i>
							</div>
						</div>
					</div>
				</div>		
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
				<div class="card">
					<div class="card-body iconfont text-left">
						<div class="d-flex justify-content-between">
							<h4 class="card-title mb-2">Scoring Layak Hari ini</h4>
							<div class="card-options ml-auto">
							</div>
						</div>
						<div class="d-flex mb-0">
							<div class="">
								{{-- <a href="{{ url('todayapproval') }}"> --}}
									<h4 class="mt-2 mb-1 font-weight-bold">{{ $todaylayakscoring }}</h4>
								{{-- </a>								 --}}
							</div>
							<div class="card-chart bg-primary-transparent brround ml-auto mt-0">
								<i class="typcn typcn-tick-outline text-primary tx-24"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
				<div class="card">
					<div class="card-body iconfont text-left">
						<div class="d-flex justify-content-between">
							<h4 class="card-title mb-2">Scoring Tidak Layak Hari ini</h4>
							<div class="card-options ml-auto">
							</div>
						</div>
						<div class="d-flex mb-0">
							<div class="">								
								{{-- <a href="{{ url('todayrejection') }}"> --}}
									<h4 class="mt-2 mb-1 font-weight-bold">{{ $todaytidaklayakscoring }}</h4>
								{{-- </a>								 --}}
							</div>
							<div class="card-chart bg-danger-transparent brround ml-auto mt-0">
								<i class="typcn typcn-times-outline text-danger tx-24"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
				<div class="card">
					<div class="card-body iconfont text-left">
						<div class="d-flex justify-content-between">
							<h4 class="card-title mb-2">Total Permohonan Scoring</h4>
							<div class="card-options ml-auto">
							</div>
						</div>
						<div class="d-flex mb-0">
							<div class="">
								<a href="{{ url('datascoring') }}">
									<h4 class="mt-2 mb-1 font-weight-bold">{{ $totalscoring }}</h4>
								</a>
							</div>
							<div class="card-chart bg-success-transparent brround ml-auto mt-0">
								<i class="typcn typcn-clipboard text-success tx-24"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
				<div class="card">
					<div class="card-body iconfont text-left">
						<div class="d-flex justify-content-between">
							<h4 class="card-title mb-2">Total Scoring Layak</h4>
							<div class="card-options ml-auto">
							</div>
						</div>
						<div class="d-flex mb-0">
							<div class="">
								{{-- <a href="{{ url('dataapproval') }}"> --}}
									<h4 class="mt-2 mb-1 font-weight-bold">{{ $totallayakscoring }}</h4>
								{{-- </a> --}}
							</div>
							<div class="card-chart bg-success-transparent brround ml-auto mt-0">
								<i class="typcn typcn-tick text-success tx-24"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
				<div class="card">
					<div class="card-body iconfont text-left">
						<div class="d-flex justify-content-between">
							<h4 class="card-title mb-2">Total Scoring Tidak Layak</h4>
							<div class="card-options ml-auto">
							</div>
						</div>
						<div class="d-flex mb-0">
							<div class="">
								{{-- <a href="{{ url('datarejection') }}"> --}}
									<h4 class="mt-2 mb-1 font-weight-bold">{{ $totaltidaklayakscoring }}</h4>
								{{-- </a> --}}
							</div>
							<div class="card-chart bg-danger-transparent brround ml-auto mt-0">
								<i class="typcn typcn-times text-danger tx-24"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
				
@endsection