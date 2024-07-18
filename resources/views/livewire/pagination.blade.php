@extends('layouts.app')

@section('styles') 

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Pagination</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pagination</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">BASIC PAGINATION</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<ul class="pagination mb-0">
											<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
										 </ul>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination1"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="pagination">
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
	<li class="page-item active"><a class="page-link" href="#">1</a></li>
	<li class="page-item"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination1"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">PAGINATION FOR DARK BACKGROUND</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="pd-20 bg-gray-800">
												<ul class="pagination pagination-dark mb-0 mg-b-0">
													<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
													<li class="page-item active"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
												</ul>
											 </div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="pd-20 bg-gray-800">
	<ul class="pagination pagination-dark mg-b-0">
		<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
		<li class="page-item active"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
	</ul>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination2"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">COLOR VARIANT PAGINATION</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-sm">
												<div class="col-sm-6 col-lg-4">
													<ul class="pagination pagination-primary mg-sm-b-0">
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
														<li class="page-item active"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
													</ul>
												</div><!-- col-4 -->
												<div class="col-sm-6 col-lg-4 mg-sm-t-0">
													<ul class="pagination pagination-success mb-0">
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
														<li class="page-item active"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
													</ul>
												</div><!-- col-4 -->
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm">
	<div class="col-sm-6 col-lg-4">
		<ul class="pagination pagination-primary">
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
		</ul>
	</div><!-- col-4 -->
	<div class="col-sm-6 col-lg-4 mg-sm-t-0">
		<ul class="pagination pagination-success">
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
		</ul>
	</div><!-- col-4 -->
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination3"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">CIRCLED PAGINATION</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<ul class="pagination pagination-circled mb-0">
												<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination4"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="pagination pagination-circled mb-0">
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
	<li class="page-item active"><a class="page-link" href="#">1</a></li>
	<li class="page-item"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination4"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
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