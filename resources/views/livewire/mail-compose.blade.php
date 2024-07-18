@extends('layouts.app')

@section('styles') 

		<!-- Internal Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Compose Mail</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Compose Mail</li>
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
						<div class="border-right">
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
						<div class="">
							<div class="card-header pd-t-30">
								<h3 class="card-title mb-0">Compose new message</h3>
							</div>
							<div class="card-body">
								<form >
									<div class="form-group">
										<div class="row align-items-center">
											<label class="col-sm-12">Mail To</label>
											<div class="col-sm-12">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row align-items-center">
											<label class="col-sm-12">Subject</label>
											<div class="col-sm-12">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row ">
											<label class="col-sm-12">Message</label>
											<div class="col-sm-12">
												<textarea rows="10" class="form-control"></textarea>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="card-footer d-sm-flex bg-white">
								<div class="mt-2 mb-2">
									<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Attach"><i class="fe fe-paperclip text-muted tx-20"></i></a>
									<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Link"><i class="fe fe-link-2 text-muted tx-20"></i></a>
									<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Photos"><i class="fe fe-image text-muted tx-20"></i></a>
									<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fe fe-trash-2 text-muted tx-20"></i></a>
								</div>
								<div class="btn-list ml-auto">
									<button type="button" class="btn btn-danger btn-space">Cancel</button>
									<button type="submit" class="btn btn-primary btn-space">Send message</button>
								</div>
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