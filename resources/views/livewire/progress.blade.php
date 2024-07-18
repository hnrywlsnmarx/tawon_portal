@extends('layouts.app')

@section('styles') 

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Progress</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Progress</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card" id="progress">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">BASIC PROGRESS</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress mg-b-20">
											<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-indigo wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-20">
	<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-indigo wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress01"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="progress2">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">STRIPED PROGRESS</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-striped bg-info wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar progress-bar-striped bg-info wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress02"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="progress3">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Progress Sizes</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<span class="tx-uppercase tx-11 d-block mg-b-5">Size Super Extra Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar ht-2 wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success ht-2 wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger ht-2 wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Extra Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success progress-bar-xs wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-sm wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success progress-bar-sm wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger progress-bar-sm wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Normal</span>
										<div class="progress mg-b-10">
											<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Large</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-lg wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success progress-bar-lg wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
	<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-10">
	<div class="progress-bar ht-2 wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success ht-2 wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger ht-2 wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Extra Small</span>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success progress-bar-xs wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Small</span>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-sm wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success progress-bar-sm wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger progress-bar-sm wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Normal</span>
<div class="progress mg-b-10">
	<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Large</span>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-lg wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success progress-bar-lg wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress03"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
	<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="progress04">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">PROGRESS LABEL</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-lg bg-success wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-lg bg-danger wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-10">
	<div class="progress-bar progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-lg bg-success wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
</div>
<div class="progress">
	<div class="progress-bar progress-bar-lg bg-danger wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress04"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Progress Animated</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 15%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 25%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow" style="width: 50%">50%</div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-green" style="width: 70%">40%</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 15%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 25%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow" style="width: 50%">50%</div>
</div>
<div class="progress progress-md">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-green" style="width: 70%">40%</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress5"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
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