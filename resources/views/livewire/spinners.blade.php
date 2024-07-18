
@extends('layouts.app')

@section('styles')

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Spinner</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Spinner</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card" id="spinner2">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">BORDER SPINNERS</h6>
									<p class="tx-12 text-muted card-sub-title">Use the border spinners for a lightweight loading indicator..</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div>
											<div class="spinner-border" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-primary" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-secondary" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-success" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-danger" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-warning" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-info" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-light" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-dark" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-primary" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-secondary" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-success" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-danger" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-warning" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-info" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-light" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-dark" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner02"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card" id="spinner4">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">GROWING Color</h6>
									<p class="tx-12 text-muted card-sub-title">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="spinner-grow" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-primary" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-secondary" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-success" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-danger" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-warning" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-info" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-light" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-dark" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner04"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-grow" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-primary" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-light" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner04"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner5">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">ALIGNMENT</h6>
									<p class="tx-12 text-muted card-sub-title">Use flexbox utilities or text alignment utilities to place spinners exactly where you need them in any situation.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="text-center mg-b-20">
											<div class="spinner-border" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
										<div class="text-right">
											<div class="spinner-border" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner05"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="text-center mg-b-20">
	<div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div>
<div class="text-right">
	<div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner05"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner6">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Size</h6>
									<p class="mg-b-20">Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="spinner-border spinner-border-sm" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow spinner-grow-sm" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner06"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-border spinner-border-sm" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner06"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner7">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Button Spinner</h6>
									<p class="tx-12 text-muted card-sub-title">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed..</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<button class="btn btn-primary mg-b-10" type="button">
										    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-primary mg-b-10" type="button">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
										<button class="btn btn-secondary mg-b-10" type="button">
										    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-secondary mg-b-10" type="button">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
										<button class="btn btn-success mg-b-10" type="button">
										    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-success mg-b-10" type="button">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
										<button class="btn btn-warning mg-b-10" type="button">
										    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-warning mg-b-10" type="button">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
										<button class="btn btn-info mg-b-10" type="button">
										    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-info mg-b-10" type="button">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
										<button class="btn btn-danger mg-b-10" type="button">
										    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-danger mg-b-10" type="button">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner07"><pre><code class="language-markup"><script type="html-dashlead/script"><button class="btn btn-primary mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-primary mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
<button class="btn btn-secondary mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-secondary mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
<button class="btn btn-success mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-success mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
<button class="btn btn-warning mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-warning mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
<button class="btn btn-info mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-info mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
<button class="btn btn-danger mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-danger mg-b-10" type="button">
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner07"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card" id="spinner7">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Button Grow</h6>
									<p class="tx-12 text-muted card-sub-title">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed..</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<button class="btn btn-primary mg-b-10" type="button">
										    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-primary mg-b-10" type="button">
											<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
										<button class="btn btn-secondary mg-b-10" type="button">
										    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-secondary mg-b-10" type="button">
											<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
										<button class="btn btn-success mg-b-10" type="button">
										    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-success mg-b-10" type="button">
											<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
										<button class="btn btn-warning mg-b-10" type="button">
										    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-warning mg-b-10" type="button">
											<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
										<button class="btn btn-info mg-b-10" type="button">
										    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-info mg-b-10" type="button">
											<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
										<button class="btn btn-danger mg-b-10" type="button">
										    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-danger mg-b-10" type="button">
											<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner08"><pre><code class="language-markup"><script type="html-dashlead/script"><button class="btn btn-primary mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-primary mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
<button class="btn btn-secondary mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-secondary mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
<button class="btn btn-success mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-success mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
<button class="btn btn-warning mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-warning mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
<button class="btn btn-info mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-info mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
<button class="btn btn-danger mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-danger mg-b-10" type="button">
	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Loading...
</button></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner08"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
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