@extends('layouts.app')

@section('styles') 

	<!---Internal  Prism css-->
	<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

	<!--- Custom-scroll -->
	<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Breadcrumbs</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
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
									<h6 class="card-title mb-1">Basic Styling</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb mg-b-0">
												<li class="breadcrumb-item">
													<a href="#">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="#">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb1"><pre><code class="language-markup"><script type="html-dashlead/script"><nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#breadcrumb1"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="custom">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Custom Styling</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-style1 mg-b-0">
												<li class="breadcrumb-item">
													<a href="#">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="#">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb2"><pre><code class="language-markup"><script type="html-dashlead/script"><nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-style1">
		<li class="breadcrumb-item">
			<a href="#">Home</a>

		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#breadcrumb2"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="divider">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Custom Divider</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-style2 mb-0">
												<li class="breadcrumb-item">
													<a href="#">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="#">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb3"><pre><code class="language-markup"><script type="html-dashlead/script"><nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-style2">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#breadcrumb3"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Breadcrumbs-Center align</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<nav class="breadcrumb-3">
											<ol class="breadcrumb breadcrumb-style1 mb-0">
												<li class="breadcrumb-item">
													<a href="#">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="#">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb4"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="breadcrumb-3">
	<ol class="breadcrumb breadcrumb-style1">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#breadcrumb4"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="right">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Breadcrumbs-Right align</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav class="breadcrumb-4">
												<ol class="breadcrumb breadcrumb-style1 mb-0">
													<li class="breadcrumb-item">
														<a href="#">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="#">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb5"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="breadcrumb-4">
	<ol class="breadcrumb breadcrumb-style1">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#breadcrumb5"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
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

	<!-- Internal Select2 js-->
	<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

	<!--Internal  Clipboard js-->
	<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

	<!-- Internal Prism js-->
	<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
	
@endsection
				
