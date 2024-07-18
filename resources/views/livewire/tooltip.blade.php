@extends('layouts.app')

@section('styles') 

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Tooltip</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tooltip</li>
							</ol>
						</nav>
					</div>


				@endsection('breadcrumb')

				@section('content')

				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<!-- div -->
						<div class="card mg-b-20" id="Tooltip">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Default Tooltip
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="main-content-label main-content-label-sm mg-b-10">
									Static Example
								</div>
								<div class="tooltip-static-demo mg-b-20">
									<div class="row row-sm">
										<div class="col-sm-6 col-lg-3">
											<div class="tooltip bs-tooltip-top" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the top
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
											<div class="tooltip bs-tooltip-bottom" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the bottom
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip bs-tooltip-left" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the left
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip bs-tooltip-right" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the right
												</div>
											</div>
										</div>
									</div>
								</div><!-- tooltip-static-demo -->
								<div class="main-content-label main-content-label-sm mg-b-10">
									Example
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-sm tx-center">
											<div class="col-sm-6 col-lg-3">
												<button class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-primary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-primary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
											</div>
										</div>
									</div>

<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-primary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-primary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- /div -->

						<!--div-->
						<div class="card mg-b-20" id="Tooltip2">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Colored Tooltip
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="main-content-label main-content-label-sm mg-b-10">
									Static Example
								</div>
								<div class="tooltip-static-demo mg-b-20">
									<div class="row row-sm">
										<div class="col-sm-6 col-lg-3">
											<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the top
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
											<div class="tooltip tooltip-primary bs-tooltip-bottom" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the bottom
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip tooltip-primary bs-tooltip-left" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the left
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip tooltip-primary bs-tooltip-right" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the right
												</div>
											</div>
										</div>
									</div>
								</div><!-- tooltip-static-demo -->
								<div class="main-content-label main-content-label-sm mg-b-10">
									Example
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="bg-gray-100 pd-20">
											<div class="row row-sm tx-center">
											<div class="col-sm-6 col-lg-3">
												<button class="btn btn-primary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-primary" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-primary" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" type="button">Hover me</button>
											</div>
										</div>
										</div>
									</div>

<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" type="button">Hover me</button>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->

@endsection('content')

@section('scripts')
 
		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal  Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection