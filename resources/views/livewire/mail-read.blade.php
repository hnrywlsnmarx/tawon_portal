@extends('layouts.app')

@section('styles') 

		<!-- Internal Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Read Mail</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Read Mail</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row opened -->
				<div class="card">
				<div class="row no-gutters">
					<!-- Col -->
					<div class="col-xl-3 col-lg-4">
						<div class="mg-b-20 mg-lg-b-0">
							<div class="card-body">
								<div class="main-content-left main-content-left-mail">
									<a class="btn btn-main-primary btn-compose btn-lg" href="" id="btnCompose">Compose</a>
									<div class="main-mail-menu">
										<nav class="nav main-nav-column mg-b-20">
											<a class="nav-link active" href=""><i class="typcn typcn-mail"></i> Inbox <span>20</span></a>
											<a class="nav-link" href=""><i class="typcn typcn-star-outline"></i> Starred <span>3</span></a>
											<a class="nav-link" href=""><i class="typcn typcn-bookmark"></i> Important <span>10</span></a>
											<a class="nav-link" href=""><i class="typcn typcn-arrow-forward-outline"></i> Sent Mail <span>8</span></a>
											<a class="nav-link" href=""><i class="typcn typcn-pen"></i> Drafts <span>15</span></a>
											<a class="nav-link" href=""><i class="typcn typcn-cancel-outline"></i> Spam <span>128</span></a>
											<a class="nav-link" href=""><i class="typcn typcn-trash"></i> Trash <span>6</span></a>
										</nav>
										<label class="main-content-label main-content-label-sm">Tags</label>
										<nav class="nav main-nav-column mg-b-20">
											<a class="nav-link" href="#"><i class="typcn typcn-social-twitter-circular"></i> Twitter <span>2</span></a>
											<a class="nav-link" href="#"><i class="typcn typcn-social-github-circular"></i> Github <span>32</span></a>
											<a class="nav-link" href="#"><i class="typcn typcn-social-google-plus-circular"></i> Google <span>7</span></a>
										</nav>
										<label class="main-content-label main-content-label-sm">Settings</label>
										<nav class="nav main-nav-column">
											<a class="nav-link active" href="#">Email Settings</a>
											<a class="nav-link" href="#">Account Information</a>
										</nav>
									</div><!-- main-mail-menu -->
								</div>
							</div>
						</div>
					</div>
					<!-- /Col -->
					<div class="col-xl-9 col-lg-8">
						<div class="border-left">
							<div class="card-header pd-t-20 pd-b-20 border-bottom">
								<h4 class="card-title">Mail Read</h4>
							</div>
							<div class="card-body bg-gray-100 py-3">
								<div class="email-media">
									<div class="mt-0 d-sm-flex">
										<img class="mr-2 rounded-circle avatar-md" src="{{URL::asset('assets/img/faces/6.jpg')}}" alt="avatar">
										<div class="media-body">
											<div class="float-right d-none d-md-flex fs-14">
												<span class="mr-3 mt-2">Sep 13 , 2019 12:45 pm</span>
												<span class="mr-3"><i class="typcn typcn-star-outline text-muted tx-21" data-toggle="tooltip" title="" data-original-title="Rated"></i></span>
												<span class="mr-3"><i class="typcn typcn-arrow-back-outline text-muted tx-21" data-toggle="tooltip" title="" data-original-title="Reply"></i></span>
												<div class="mr-3">
													<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="text-muted typcn typcn-th-menu tx-20" data-toggle="tooltip" title="" data-original-title="View more"></i></a>
													<div class="dropdown-menu shadow">
														<a class="dropdown-item" href="#">Reply</a>
														<a class="dropdown-item" href="#">Report Spam</a>
														<a class="dropdown-item" href="#">Delete</a>
														<a class="dropdown-item" href="#">Show Original</a>
														<a class="dropdown-item" href="#">Print</a>
														<a class="dropdown-item" href="#">Filter</a>
													</div>
												</div>
											</div>
											<div class="media-title font-weight-bold mt-1">Alica Nestle <span class="text-muted">( alicnestle@gmail.com )</span></div>
											<p class="mb-0">to Adam Cotter ( adamcotter@gmail.com ) </p>
											<small class="mr-2 d-md-none">Dec 13 , 2018 12:45 pm</small>
											<small class="mr-2 d-md-none"><i class="fe fe-star text-muted" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
											<small class="mr-2 d-md-none"><i class="fa fa-reply text-muted" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body p-3">
								<div class="eamil-body mt-4 m-3">
									<div class="p-0">
										<h6 class="mb-4">Hi Sir/Madam</h6>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
										<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
										<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
										<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
										<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
										<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
										<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
										<p class="mb-0">Thanking you Sir/Madam</p>
										<hr>
										<div class="email-attch">
											<div class="float-right">
												<a href="#"><i class="typcn typcn-download tx-22" data-toggle="tooltip" title="" data-original-title="Download"></i></a>
											</div>
											<p>3 Attachments<a href="#"> View All Images</a></p>
											<div class="emai-img">
												<div class="d-sm-flex">
													<div class="m-2 border text-center">
														<a href="#"><img class="wd-150 mb-0" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="placeholder image"></a>
														<h6 class="mb-0 p-3 bg-gray-100">image.jpg <br><small class="text-muted">12kb</small></h6>
													</div>
													<div class="m-2 border text-center">
														<a href="#"><img class="wd-150 mb-0" src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="placeholder image"></a>
														<h6 class="mb-0 p-3 bg-gray-100">image2.jpg <br><small class="text-muted">18kb</small></h6>
													</div>
													<div class="m-2 border text-center">
														<a href="#"><img class="wd-150 mb-0" src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="placeholder image"></a>
														<h6 class="mb-0 p-3 bg-gray-100">image3.jpg <br><small class="text-muted">21kb</small></h6>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a class="btn btn-primary mt-1 mb-1" href="#"><i class="fa fa-reply"></i> Reply</a>
								<a class="btn btn-info mt-1 mb-1" href="#"><i class="fa fa-share"></i> Forward</a>
							</div>
						</div>
					</div>
				</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!--Internal Sparkline js -->
		<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>

		<!-- Internal Select2.min js -->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
		
@endsection