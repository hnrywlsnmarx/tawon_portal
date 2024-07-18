@extends('layouts.app')

@section('styles') 

		<!--Internal  jqvmap Css-->
		<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Vector Maps</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Maps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Vector Maps</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6">
						<div class="card mg-b-20" id="map">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: World
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="ht-300" id="vmap"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card mg-b-20" id="map1">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: Canada
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="ht-300" id="vmap3"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card mg-b-20" id="map2">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: USA
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="ht-300" id="vmap2"></div>
							</div><!-- col-->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card mg-b-20" id="map6">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: Germany
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="ht-300" id="vmap7"></div>
							</div><!-- col-->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card mg-b-20" id="map7">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: Russia
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="ht-300" id="vmap8"></div>
							</div><!-- col-->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card" id="map8">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: France
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="ht-300" id="vmap9"></div>
							</div><!-- col-->
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection('content')


@section('scripts') 

		<!--Internal  Vector-maps js -->
		<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.canada.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.algeria.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.argentina.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.europe.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.germany.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.russia.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.france.js')}}"></script>
		<script src="{{URL::asset('assets/js/vector-map.js')}}"></script>

		<!-- Internal Vector-sampledata js -->
		<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>

@endsection