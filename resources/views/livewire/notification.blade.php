@extends('layouts.app')

@section('styles') 

	<!--Internal  Font Awesome -->
	<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

	<!--Internal  Bootstrap -->
	<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!--Internal   Notify -->
	<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Notification</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Notification</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<!-- div -->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Position Notification
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not1()" class="btn btn-light mg-t-5">Top</button>
										<button onclick="not2()" class="btn btn-light mg-t-5">Center</button>
										<button onclick="not3()" class="btn btn-light mg-t-5">Left</button>
										<button onclick="not4()" class="btn btn-light mg-t-5">Top Fullwidth</button>
										<button onclick="not5()" class="btn btn-light mg-t-5">Right</button>
										<button onclick="not51()" class="btn btn-light mg-t-5">Bottom</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Notification Types
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not6()" class="btn btn-primary mg-t-5">Primary</button>
										<button onclick="not7()" class="btn btn-success mg-t-5">Success</button>
										<button onclick="not8()" class="btn btn-danger mg-t-5">Error</button>
										<button onclick="not9()" class="btn btn-warning mg-t-5">Warning</button>
										<button onclick="not10()" class="btn btn-info mg-t-5">Info</button>
										<button onclick="not11()" class="btn btn-danger mg-t-5">Fixed Error</button>
										<button onclick="not12()" class="btn btn-dark mg-t-5">Opacity</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Notification Styles
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not13()" class="btn btn-primary mg-t-5">Mutiple lines</button>
										<button onclick="not14()" class="btn btn-primary mg-t-5">Fade Animation</button>
										<button onclick="not15()" class="btn btn-primary mg-t-5">Customize Background</button>
										<button onclick="not16()" class="btn btn-primary mg-t-5">Timeout</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Call Back Notification
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not17()" class="btn btn-primary">Call Back</button>
										<button onclick="not18()" class="btn btn-primary">Call Back 2</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->
					</div>
				</div>
			</div>

@endsection('content')

@section('scripts') 

		<!--Internal  Perfect-scrollbar js -->
		<script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

		<!--Internal  Notify js -->
		<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection