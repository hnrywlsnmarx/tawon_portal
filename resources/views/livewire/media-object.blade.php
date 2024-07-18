@extends('layouts.app')

@section('styles') 

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Media Object</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Media Object</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card" id="media-object">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/4.jpg')}}">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/4.jpg')}}">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object01"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object2">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Nesting</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/9.jpg')}}">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												<div class="media d-block d-sm-flex mg-t-25">
													<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/8.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/9.jpg')}}">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
		<div class="media d-block d-sm-flex mg-t-25">
			<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/8.jpg')}}">
			<div class="media-body">
				<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
				Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object02"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object3">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Alignment</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0 align-self-center" src="{{URL::asset('assets/img/faces/14.jpg')}}">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0 align-self-center" src="{{URL::asset('assets/img/faces/14.jpg')}}">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object03"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object4">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Order</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
											<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-t-20 mg-sm-t-0" src="{{URL::asset('assets/img/faces/5.jpg')}}">
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object04"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
	</div>
	<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-t-20 mg-sm-t-0" src="{{URL::asset('assets/img/faces/5.jpg')}}">
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object04"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object5">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Media List</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media media-list d-block d-sm-flex">
											<ul class="list-unstyled mb-0">
												<li class="media d-block d-sm-flex">
													<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/2.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mg-t-25">
													<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/12.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mg-t-25">
													<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/7.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
											</ul>
										</div>
									</div>
									<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object05"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-unstyled mb-0">
	<li class="media d-block d-sm-flex">
		<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/2.jpg')}}">
		<div class="media-body">
			<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
			Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
		</div>
	</li>
	<li class="media d-block d-sm-flex mg-t-25">
		<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/12.jpg')}}">
		<div class="media-body">
			<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
			Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
		</div>
	</li>
	<li class="media d-block d-sm-flex mg-t-25">
		<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/7.jpg')}}">
		<div class="media-body">
			<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
			Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
		</div>
	</li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object05"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
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
