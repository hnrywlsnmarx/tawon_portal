@extends('layouts.app')

@section('styles') 

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!---Internal Input tags css-->
		<link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Tags</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tags</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<!-- div -->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									DEFAULT TAG
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website aplication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="tags">
											<span class="tag">First tag</span>
											<span class="tag">Second tag</span>
											<span class="tag">Third tag</span>
										</div>
									</div>

<figure class="highlight mb-0" id="element01"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag">First tag</span>
	<span class="tag">Second tag</span>
	<span class="tag">Third tag</span>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element01"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Link Tag
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website aplication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="tags">
											<span class="tag tag-rounded">First tag</span>
											<span class="tag tag-rounded">Second tag</span>
											<span class="tag tag-rounded">Third tag</span>
										</div>
									</div>

<figure class="highlight mb-0" id="element02"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag tag-rounded">First tag</span>
	<span class="tag tag-rounded">Second tag</span>
	<span class="tag tag-rounded">Third tag</span>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element02"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Default Tags Addon
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website aplication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="tags">
											<span class="tag tag-default">
												One
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag tag-default">
												Two
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag tag-default">
												Three
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag tag-default">
												Four
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
										</div>
									</div>

<figure class="highlight mb-0" id="element03"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag tag-default">
		One
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag tag-default">
		Two
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag tag-default">
		Three
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag tag-default">
		Four
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element03"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Colored tags
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website aplication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="tags">
											<span class="tag tag-blue">Blue tag</span>
											<span class="tag tag-azure">Azure tag</span>
											<span class="tag tag-indigo">Indigo tag</span>
											<span class="tag tag-purple">Purple tag</span>
											<span class="tag tag-pink">Pink tag</span>
											<span class="tag tag-red">Red tag</span>
											<span class="tag tag-orange">Orange tag</span>
											<span class="tag tag-yellow">Yellow tag</span>
											<span class="tag tag-lime">Lime tag</span>
											<span class="tag tag-green">Green tag</span>
											<span class="tag tag-teal">Teal tag</span>
											<span class="tag tag-cyan">Cyan tag</span>
											<span class="tag tag-gray">Gray tag</span>
											<span class="tag tag-gray-dark">Dark gray tag</span>
										</div>
									</div>

<figure class="highlight mb-0" id="element04"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag tag-blue">Blue tag</span>
	<span class="tag tag-azure">Azure tag</span>
	<span class="tag tag-indigo">Indigo tag</span>
	<span class="tag tag-purple">Purple tag</span>
	<span class="tag tag-pink">Pink tag</span>
	<span class="tag tag-red">Red tag</span>
	<span class="tag tag-orange">Orange tag</span>
	<span class="tag tag-yellow">Yellow tag</span>
	<span class="tag tag-lime">Lime tag</span>
	<span class="tag tag-green">Green tag</span>
	<span class="tag tag-teal">Teal tag</span>
	<span class="tag tag-cyan">Cyan tag</span>
	<span class="tag tag-gray">Gray tag</span>
	<span class="tag tag-gray-dark">Dark gray tag</span>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element04"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Input Tags
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website aplication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="form-group">
											<input type="text" data-role="tagsinput" value="jQuery,Script,Net" class="form-control">
										</div>
										<div class="form-group mb-0">
											<select multiple data-role="tagsinput" class="form-control">
												<option value="jQuery">jQuery</option>
												<option value="Angular">Angular</option>
												<option value="React">React</option>
												<option value="Vue">Vue</option>
											</select>
										</div>
									</div>

<figure class="highlight mb-0" id="element05"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><select multiple data-role="tagsinput" class="form-control">
	<option value="jQuery">jQuery</option>
	<option value="Angular">Angular</option>
	<option value="React">React</option>
	<option value="Vue">Vue</option>
</select>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element05"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
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

		<!-- Internal Input tags js-->
		<script src="{{URL::asset('assets/plugins/inputtags/inputtags.js')}}"></script>

		<!--Internal  Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection