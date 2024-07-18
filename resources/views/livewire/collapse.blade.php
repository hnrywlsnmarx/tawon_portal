@extends('layouts.app')

@section('styles')

		<!---Internal Owl Carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!---Internal  Multislider css-->
		<link href="{{URL::asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Collapse</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Collapse</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div>
									<a aria-controls="collapseExample" aria-expanded="false" class="btn ripple btn-primary" data-toggle="collapse" href="#collapseExample" role="button">Toggle Content</a>
									<div class="collapse mg-t-5" id="collapseExample">
										<div class="card card-body border">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Multiple Targets</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div>
									<div class="btn-list">
										<a aria-controls="multiCollapseExample1" aria-expanded="false" class="btn ripple btn-primary mb-3 mb-xl-0" data-toggle="collapse" href="#multiCollapseExample1" role="button">Toggle First Content</a>
										<a aria-controls="multiCollapseExample2" aria-expanded="false" class="btn ripple btn-secondary mb-3 mb-xl-0" href="#multiCollapseExample2" data-toggle="collapse" role="button">Toggle Second Content</a>
										<a aria-controls="multiCollapseExample1 multiCollapseExample2" aria-expanded="false" class="btn ripple btn-success mb-3 mb-xl-0" href=".multi-collapse" data-toggle="collapse" role="button">Toggle Both Contents</a>
									</div>
									<div class="row row-sm">
										<div class="col">
											<div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
												<div class="card card-body border">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												</div>
											</div>
										</div>
										<div class="col">
											<div class="collapse multi-collapse mt-2" id="multiCollapseExample2">
												<div class="card card-body border">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												</div>
											</div>
										</div>
									</div>
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

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Owl Carousel js-->
		<script src="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>

		<!---Internal  Multislider js-->
		<script src="{{URL::asset('assets/plugins/multislider/multislider.js')}}"></script>
		<script src="{{URL::asset('assets/js/carousel.js')}}"></script>

@endsection