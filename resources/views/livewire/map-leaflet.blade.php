@extends('layouts.app')

@section('styles')

		<!-- Internal  leaflet-map css -->
		<link href="{{URL::asset('assets/plugins/leaflet/leaflet.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Leaflet Maps</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Maps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Leaflet Maps</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="ht-300" id="leaflet1"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									With Popup
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="ht-300" id="leaflet2"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Map with circle
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="ht-200 ht-sm-300 ht-md-400 mb-0" id="leaflet3"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection('content')

@section('scripts') 

		<!--Internal  Leaflet-maps js -->
		<script src="{{URL::asset('assets/plugins/leaflet/leaflet.js')}}"></script>
		<script src="{{URL::asset('assets/js/map-leafleft.js')}}"></script>

@endsection