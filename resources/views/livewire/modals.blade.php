@extends('layouts.app')

@section('styles') 

		<!---Internal Owl Carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!---Internal  Multislider css-->
		<link href="{{URL::asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Modals</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced uI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Modals</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<!--div-->
						<div class="card" id="modal">
							<div class="card-header pd-t-30">
								<div class="card-title">
									Basic Modal
								</div>
								<p class="mg-b-0 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							</div>
							<div class="card-body">
								<div class="example bg-gray-100">
									<div class="modal d-block pos-static">
										<div class="modal-dialog" role="document">
											<div class="modal-content modal-content-demo overflow-hidden">
												<div class="modal-header">
													<h6 class="modal-title">Message Preview</h6>
													<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<h6>Why We Use Electoral College, Not Popular Vote</h6>
													<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
												</div>
												<div class="modal-footer">
													<button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-light" type="button">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- pd-y-50 -->
								<div class="example bg-gray-100 text-center">
									<a class="btn btn-primary" data-target="#modaldemo1" data-toggle="modal" href="">View Live Demo</a>
								</div><!-- pd-y-30 -->

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="example bg-gray-100">
<div class="modal d-block pos-static">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-demo">
			<div class="modal-header">
				<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h6>Why We Use Electoral College, Not Popular Vote</h6>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-light" type="button">Close</button>
			</div>
		</div>
	</div>
</div>
</div><!-- pd-y-50 -->
<div class="example bg-gray-100">
<a class="btn btn-primary" data-target="#modaldemo1" data-toggle="modal" href="">View Live Demo</a>
</div><!-- pd-y-30 --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
						</div>
						</div>
						<!--/div-->
						<!--div-->
						<div class="card" id="modal1">
							<div class="card-header pd-t-30">
								<div class="card-title">
									Small Modal
								</div>
								<p class="mg-b-0 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							</div>
							<div class="card-body">
								<div class="example bg-gray-100">
									<div class="modal d-block pos-static">
										<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content modal-content-demo">
												<div class="modal-header">
													<h6 class="modal-title">Notice</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
												</div>
												<div class="modal-footer justify-content-center">
													<button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-light" type="button">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- modal-wrapper-demo -->
								<div class="example bg-gray-100 text-center">
									<a class="btn btn-primary" data-target="#modaldemo2" data-toggle="modal" href="">View Live Demo</a>
								</div><!-- pd-y-30 -->

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="example bg-gray-100">
<div class="modal d-block pos-static">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content modal-content-demo">
			<div class="modal-header">
				<h6 class="modal-title">Notice</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-light" type="button">Close</button>
			</div>
		</div>
	</div>
</div>
</div><!-- modal-wrapper-demo -->
<div class="example bg-gray-100">
<a class="btn btn-primary" data-target="#modaldemo2" data-toggle="modal" href="">View Live Demo</a>
</div><!-- pd-y-30 --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
						</div>
						</div>
						<!--/div-->
						<!--div-->
						<div class="card">
							<div class="card-header pd-t-30">
								<div class="card-title">
									Large Modal
								</div>
								<p class="mg-b-0 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							</div>
							<div class="card-body">
								<div class="example bg-gray-100">
									<div class="modal d-block pos-static">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content modal-content-demo">
												<div class="modal-header">
													<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<h6>Why We Use Electoral College, Not Popular Vote</h6>
													<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
												</div>
												<div class="modal-footer">
													<button class="btn btn-primary" type="button">Save changes</button>
													<button class="btn btn-light" type="button">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- modal-wrapper-demo -->
								<div class="example bg-gray-100 text-center">
									<a class="btn btn-primary" data-target="#modaldemo3" data-toggle="modal" href="">View Live Demo</a>
								</div><!-- pd-y-30 -->

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="example bg-gray-100">
<div class="modal d-block pos-static">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content modal-content-demo">
			<div class="modal-header">
				<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h6>Why We Use Electoral College, Not Popular Vote</h6>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-light" type="button">Close</button>
			</div>
		</div>
	</div>
</div>
</div><!-- modal-wrapper-demo -->
<div class="example bg-gray-100">
<a class="btn btn-primary" data-target="#modaldemo3" data-toggle="modal" href="">View Live Demo</a>
</div><!-- pd-y-30 --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
						</div>
						</div>
						<!--/div-->
						<!--div-->
						<div class="card">
							<div class="card-header pd-t-30">
								<div class="card-title">
									Full Width Modal
								</div>
								<p class="mg-b-0 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							</div>
							<div class="card-body">
								<div class="example bg-gray-100">
									<div class="modal d-block pos-static">
										<div class="modal-dialog modal-width" role="document">
											<div class="modal-content modal-content-demo">
												<div class="modal-header">
													<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<h6>Why We Use Electoral College, Not Popular Vote</h6>
													<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
												</div>
												<div class="modal-footer">
													<button class="btn btn-primary" type="button">Save changes</button>
													<button class="btn btn-light" type="button">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- modal-wrapper-demo -->
								<div class="example bg-gray-100 text-center">
									<a class="btn btn-primary" data-target="#modaldemo31" data-toggle="modal" href="">View Live Demo</a>
								</div><!-- pd-y-30 -->

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element31"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="example bg-gray-100">
<div class="modal d-block pos-static">
	<div class="modal-dialog modal-width" role="document">
		<div class="modal-content modal-content-demo">
			<div class="modal-header">
				<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h6>Why We Use Electoral College, Not Popular Vote</h6>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-light" type="button">Close</button>
			</div>
		</div>
	</div>
</div>
</div><!-- modal-wrapper-demo -->
<div class="example bg-gray-100">
<a class="btn btn-primary" data-target="#modaldemo31" data-toggle="modal" href="">View Live Demo</a>
</div><!-- pd-y-30 --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element31"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
						</div>
						</div>
						<!--/div-->
						<!--div-->
						<div class="card" id="modal3">
							<div class="card-header pd-t-30">
								<div class="card-title">
									Success Alert Messages
								</div>
								<p class="mg-b-0 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							</div>
							<div class="card-body">
								<div class="example bg-gray-100">
									<div class="modal d-block pos-static">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body text-center p-4">
													<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
													<i class="fe fe-check-circle tx-100 text-success lh-1 mb-4 d-inline-block"></i>
													<h4 class="text-success mb-4">Congratulations!</h4>
													<p class="mb-4 mx-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button class="btn btn-success pd-x-25" type="button">Continue</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- modal-wrapper-demo -->
								<div class="example bg-gray-100 text-center">
									<a class="btn btn-primary" data-target="#modaldemo4" data-toggle="modal" href="">View Live Demo</a>
								</div><!-- modal-footer-demo -->

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="example bg-gray-100">
<div class="modal d-block pos-static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body text-center p-4">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="fe fe-check-circle tx-100 text-success lh-1 mg-t-20 d-inline-block"></i>
				<h4 class="text-success">Congratulations!</h4>
				<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button class="btn btn-success pd-x-25" type="button">Continue</button>
			</div>
		</div>
	</div>
</div>
</div><!-- modal-wrapper-demo -->
<div class="example bg-gray-100">
<a class="btn btn-primary" data-target="#modaldemo4" data-toggle="modal" href="">View Live Demo</a>
</div><!-- modal-footer-demo --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
						</div>
						</div>
						<!--/div-->
						<!--div-->
						<div class="card" id="modal4">
							<div class="card-header pd-t-30">
								<div class="card-title">
									Warning Alert Messages
								</div>
								<p class="mg-b-0 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							</div>
							<div class="card-body">
								<div class="example bg-gray-100">
									<div class="modal d-block pos-static">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body text-center p-4">
													<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
													<i class="fe fe-x-circle tx-100 text-danger lh-1 mb-4 d-inline-block"></i>
													<h4 class="text-danger mb-20">Error: Cannot process your entry!</h4>
													<p class="mb-4 mx-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25" type="button">Continue</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- modal-wrapper-demo -->
								<div class="example bg-gray-100 text-center">
									<a class="btn btn-primary" data-target="#modaldemo5" data-toggle="modal" href="">View Live Demo</a>
								</div><!-- modal-footer-demo -->

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="example bg-gray-100">
<div class="modal d-block pos-static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body text-center p-4">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="fe fe-x-circle tx-100 text-danger lh-1 mg-t-20 d-inline-block"></i>
				<h4 class="text-danger">Error: Cannot process your entry!</h4>
				<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25" type="button">Continue</button>
			</div>
		</div>
	</div>
</div>
</div><!-- modal-wrapper-demo -->
<div class="example bg-gray-100">
<a class="btn btn-primary" data-target="#modaldemo5" data-toggle="modal" href="">View Live Demo</a>
</div><!-- modal-footer-demo --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
						</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card" id="modal5">
							<div class="card-header  pd-t-30">
								<div class="card-title">
									Modal Animation Effects
								</div>
								<p class="mg-b-0 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							</div>
							<div class="card-body">
								<div class="row ">
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Scale</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-slide-in-right" data-toggle="modal" href="#modaldemo8">Slide In Right</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-slide-in-bottom" data-toggle="modal" href="#modaldemo8">Slide In Bottom</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-newspaper" data-toggle="modal" href="#modaldemo8">Newspaper</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-fall" data-toggle="modal" href="#modaldemo8">Fall</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-flip-horizontal" data-toggle="modal" href="#modaldemo8">Flip Horizontal</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-flip-vertical" data-toggle="modal" href="#modaldemo8">Flip Vertical</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-super-scaled" data-toggle="modal" href="#modaldemo8">Super Scaled</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-sign" data-toggle="modal" href="#modaldemo8">Sign</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-rotate-bottom" data-toggle="modal" href="#modaldemo8">Rotate Bottom</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-rotate-left" data-toggle="modal" href="#modaldemo8">Rotate Left</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo8">Just Me</a>
									</div>
								</div>
<!---Prism Pre code-->
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row ">
<div class="col-sm-6 col-md-4 col-xl-3">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Scale</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-sm-t-0">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-slide-in-right" data-toggle="modal" href="#modaldemo8">Slide In Right</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-md-t-0">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-slide-in-bottom" data-toggle="modal" href="#modaldemo8">Slide In Bottom</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-xl-t-0">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-newspaper" data-toggle="modal" href="#modaldemo8">Newspaper</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-fall" data-toggle="modal" href="#modaldemo8">Fall</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-flip-horizontal" data-toggle="modal" href="#modaldemo8">Flip Horizontal</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-flip-vertical" data-toggle="modal" href="#modaldemo8">Flip Vertical</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-super-scaled" data-toggle="modal" href="#modaldemo8">Super Scaled</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-sign" data-toggle="modal" href="#modaldemo8">Sign</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-rotate-bottom" data-toggle="modal" href="#modaldemo8">Rotate Bottom</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-rotate-left" data-toggle="modal" href="#modaldemo8">Rotate Left</a>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
	<a class="modal-effect btn btn-primary btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo8">Just Me</a>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
						</div>
						</div>
						<!--/div-->
					</div>
				</div>
				<!-- End Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="card">
							<div class="card-header pd-t-30">
								<h3 class="card-title">Modal Sizes</h3>
								<p class="mg-b-0 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							</div>
							<div class="card-body text-center">
								<p>Add <code class="highlighter-rouge">.modal-sm </code> or <code class="highlighter-rouge">.modal-lg </code> to modal-dialog to increase and decrease the modal box sizes.</p>
								<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#smallmodal">Small Modal</button>
								<button type="button" class="btn btn-secondary mt-3" data-toggle="modal" data-target="#normalmodal">Default Modal</button>
								<button type="button" class="btn btn-info mt-3" data-toggle="modal" data-target="#largemodal">large Modal</button>

							<!---Prism Pre code-->
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><p>Add <code class="highlighter-rouge">.modal-sm </code> or <code class="highlighter-rouge">.modal-lg </code> to modal-dialog to increase and decrease the modal box sizes.</p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#smallmodal">Small Modal</button>
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#normalmodal">Default Modal</button>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#largemodal">large Modal</button></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->

@endsection('content')

@section('modals')

		<!-- Basic modal -->
		<div class="modal" id="modaldemo1">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Basic Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Modal Body</h6>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Basic modal -->

		<!-- Small modal -->
		<div class="modal" id="modaldemo2">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h6 class="modal-title">Small Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
					<div class="modal-footer justify-content-center">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Small Modal -->

		<!-- Large Modal -->
		<div class="modal" id="modaldemo3">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Large Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Modal Body</h6>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--End Large Modal -->
		
		<!-- Large Modal -->
		<div class="modal" id="modaldemo31">
			<div class="modal-dialog modal-width" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Fullwidth Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Modal Body</h6>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--End Large Modal -->

		<!-- Scroll modal -->
		<div class="modal" id="scrollingmodal">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
						<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
						<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--End Scroll modal -->

		<!-- Scroll with content modal -->
		<div class="modal" id="scrollmodal">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
						<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
						<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--End Scroll with content modal -->

		<!-- Modal alert message -->
		<div class="modal" id="modaldemo4">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content tx-size-sm">
					<div class="modal-body tx-center pd-y-20 pd-x-20">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
						<h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
						<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn ripple btn-success pd-x-25" data-dismiss="modal" type="button">Continue</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal" id="modaldemo5">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content tx-size-sm">
					<div class="modal-body tx-center pd-y-20 pd-x-20">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
						<h4 class="tx-danger mg-b-20">Error: Cannot process your entry!</h4>
						<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn ripple btn-danger pd-x-25" data-dismiss="modal" type="button">Continue</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal alert message -->

		<!-- Grid modal -->
		<div class="modal" id="modaldemo6">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Grid Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							</div>
							<div class="col-md-6">
								<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the who loves toil and pain can procureor sit aspernatur  system.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure desires to obtain pain.</p>
							</div>
							<div class="col-md-6">
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat aut odit voluptatem.</p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--End Grid modal -->

		<!-- Modal effects -->
		<div class="modal" id="modaldemo8">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Modal Header</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Modal Body</h6>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal effects-->

					<!-- Modal -->
					<div class="modal  fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodal" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodal1">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="normalmodal" tabindex="-1" role="dialog" aria-labelledby="normalmodal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="normalmodal1">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
				<div class="modal-dialog modal-lg " role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largemodal1">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>

@endsection('modals')

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

		<!-- Internal Modal js-->
		<script src="{{URL::asset('assets/js/modal.js')}}"></script>

@endsection