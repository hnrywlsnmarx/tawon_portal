@extends('layouts.app')

@section('styles')

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Popover</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Popover</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card" id="popover">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">DEFAULT POPOVER</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="tx-10 mb-1 font-weight-bold text-muted text-uppercase">
											STATIC EXAMPLE
										</div>
										<div class="popover-static-demo">
											<div class="row">
												<div class="col-md-6">
													<div class="popover bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
												<div class="col-md-6 mg-t-30 mg-md-t-0">
													<div class="popover bs-popover-bottom">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
												<div class="col-md-6 mg-t-30">
													<div class="popover bs-popover-left">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Left</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
												<div class="col-md-6 mg-t-30">
													<div class="popover bs-popover-right">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Right</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
											</div><!-- row -->
										</div>
									</div>
									<div class="example">
									<div class="tx-10 mb-1 font-weight-bold text-muted text-uppercase">
										Live EXAMPLE
									</div>
									<div class="pd-20 bg-gray-100">
										<div class="row row-sm tx-center">
											<div class="col-sm-6 col-lg-3">
												<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
											</div><!-- col-3 -->
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
											</div><!-- col-3 -->
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover right">Click me</button>
											</div><!-- col-3 -->
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover left">Click me</button>
											</div><!-- col-3 -->
										</div><!-- row -->
									</div>
								</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="popover01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover left">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover right">Click me</button>
	</div><!-- col-3 -->
</div><!-- row --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#popover01"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card" id="popover2">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">DEFAULT POPOVER</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="popover-static-demo">
												<div class="row">
													<div class="col-md-6">
														<div class="popover popover-head-primary bs-popover-top">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
													<div class="col-md-6 mg-t-30 mg-md-t-0">
														<div class="popover popover-head-secondary bs-popover-bottom">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
												</div>
											</div>
										</div>
										<div class="example">
											<div class="pd-20 bg-gray-100">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button type="button" class="btn btn-primary" data-container="body" data-popover-color="head-primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
													</div><!-- col-3 -->
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
														<button type="button" class="btn btn-primary" data-container="body" data-popover-color="head-secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
													</div><!-- col-3 -->
												</div>
											</div>
										</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="popover02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm tx-center">
		<div class="col-sm-6 col-lg-3">
			<button type="button" class="btn btn-primary" data-container="body" data-popover-color="head-primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
		</div><!-- col-3 -->
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
			<button type="button" class="btn btn-primary" data-container="body" data-popover-color="head-secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
		</div><!-- col-3 -->
	</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#popover02"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
	</figure>
	<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card" id="popover3">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">DEFAULT POPOVER</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="popover-static-demo">
												<div class="row">
													<div class="col-md-6">
														<div class="popover popover-primary bs-popover-top">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
													<div class="col-md-6 mg-t-30 mg-md-t-0">
														<div class="popover popover-secondary bs-popover-bottom">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
												</div>
											</div>
										</div>
										<div class="example">
											<div class="pd-20 bg-gray-100">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button type="button" class="btn btn-primary" data-container="body" data-popover-color="primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
												    </div><!-- col-3 -->
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
														<button type="button" class="btn btn-primary" data-container="body" data-popover-color="secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
													</div><!-- col-3 -->
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="popover03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button type="button" class="btn btn-primary" data-container="body" data-popover-color="primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button type="button" class="btn btn-primary" data-container="body" data-popover-color="secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
	</div><!-- col-3 -->
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#popover03"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
	<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
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