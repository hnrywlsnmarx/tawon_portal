
@extends('layouts.app')

@section('styles') 

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Navigation</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Navigation</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Navigation</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="p-3 bg-gray-100 rounded-5">
											<nav class="nav main-nav flex-column flex-md-row">
												<a class="nav-link active" href="#">Home</a>
												<a class="nav-link" href="#">About</a>
												<a class="nav-link" href="#">Pages</a>
												<a class="nav-link" href="#">Custom</a>
											</nav>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav1"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="nav main-nav flex-column flex-md-row">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav1"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="vertical">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Vertical Navigation</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-gray-100 rounded-5">
												<nav class="nav main-nav-column">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav2"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="nav main-nav-column">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav2"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="pill">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Pills Navigation</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-gray-100 rounded-5">
												<nav class="nav nav-pills flex-column flex-md-row">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav3"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="nav nav-pills flex-column flex-md-row">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav3"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="verticallpill">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Vertical Pills Navigation</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-gray-100 rounded-5">
												<nav class="nav nav-pills flex-column">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav4"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="nav nav-pills flex-column">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav4"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="hori">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Horizontal Alignment</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-gray-100 rounded-5 mb-3">
												<nav class="nav main-nav flex-column flex-md-row justify-content-center">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
											<div class="p-3 bg-gray-100 rounded-5">
												<nav class="nav main-nav flex-column flex-md-row justify-content-end">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="p-3 bg-gray-100 rounded-5 mb-3">
	<nav class="nav main-nav flex-column flex-md-row justify-content-center">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div>
<div class="p-3 bg-gray-100 rounded-5">
	<nav class="nav main-nav flex-column flex-md-row justify-content-end">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav5"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="colored">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Colored Nav Variations</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-primary mb-3 rounded-5">
												<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
											<div class="p-3 bg-secondary rounded-5">
												<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav6"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="p-3 bg-primary mb-3">
	<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div>
<div class="p-3 bg-secondary">
	<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav6"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card custom-nav" id="underline">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Underline Navigation</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-gray-100 rounded-5">
												<nav class="nav main-nav-line flex-column flex-md-row">
													<a class="nav-link active" data-toggle="tab" href="#">Home</a>
													<a class="nav-link" data-toggle="tab" href="#">About</a>
													<a class="nav-link" data-toggle="tab" href="#">Pages</a>
													<a class="nav-link" data-toggle="tab" href="#">Custom</a>
												</nav>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav7"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="nav main-nav-line flex-column flex-md-row">
	<a class="nav-link active" data-toggle="tab" href="#">Home</a>
	<a class="nav-link" data-toggle="tab" href="#">About</a>
	<a class="nav-link" data-toggle="tab" href="#">Pages</a>
	<a class="nav-link" data-toggle="tab" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav7"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="tab">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Simple Tab Navigation</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="border">
												<div class="bg-gray-100 nav-bg pd-t-20 pd-l-5">
													<nav class="nav nav-tabs border-bottom-0">
														<a class="nav-link active" data-toggle="tab" href="#tabCont1">Home</a>
														<a class="nav-link" data-toggle="tab" href="#tabCont2">About</a>
														<a class="nav-link" data-toggle="tab" href="#tabCont3">Contact</a>
													</nav>
												</div>
												<div class="card-body tab-content">
													<div class="tab-pane active show" id="tabCont1">
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="tabCont2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
													<div class="tab-pane" id="tabCont3">
														 Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav8"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="tab-content">
	<div class="tab-pane active show" id="tabCont1">
		Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
	</div>
	<div class="tab-pane" id="tabCont2">
		At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
	</div>
	<div class="tab-pane" id="tabCont3">
		 Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav8"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
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