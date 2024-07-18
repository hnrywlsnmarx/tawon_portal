@extends('layouts.app')

@section('styles')
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Mail</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Mail</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="card">
				<div class="row main-content-mail no-gutters">
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
					<div class="col-xl-9 col-lg-8">
						<div class="border-left">
							<div class="tab-menu-heading">
								<nav class="nav main-nav-line main-nav-line-email tabs-menu">
									<a class="nav-link active" data-toggle="tab" href="#inbox"><i class="typcn typcn-mail tx-24 mg-r-5"></i> Primary</a>
									<a class="nav-link" data-toggle="tab" href="#social"><i class="typcn typcn-group-outline tx-24 mg-r-5"></i>Social <small class="text-danger font-weight-bold">(33 New)</small></a>
									<a class="nav-link" data-toggle="tab" href="#promotions"><i class="typcn typcn-folder tx-24 mg-r-5"></i> Promotions <small class="text-success font-weight-bold">(40 New)</small></a>
								</nav>
							<div>
							<div class="tab-content">
								<div class="main-content-body main-content-body-mail card-body tab-pane active border-top-0" id="inbox">
									<div class="main-mail-header">
										<div>
											<h4 class="main-content-title mg-b-5">Inbox</h4>
											<p>You have 2 unread messages</p>
										</div>
										<div>
											<span>1-50 of 1200</span>
											<div class="btn-group" role="group">
												<button class="btn btn-outline-secondary disabled" type="button"><i class="icon ion-ios-arrow-back"></i></button> <button class="btn btn-outline-secondary" type="button"><i class="icon ion-ios-arrow-forward"></i></button>
											</div>
										</div>
									</div><!-- main-mail-list-header -->
									<div class="main-mail-options">
										<label class="ckbox ckbox1"><input id="checkAll" type="checkbox"> <span></span></label>
										<div class="btn-group">
											<button class="btn btn-light"><i class="typcn typcn-arrow-sync"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-archive"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-info-outline"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-trash"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-folder"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-tag"></i></button>
										</div><!-- btn-group -->
									</div><!-- main-mail-options -->
									<div class="main-mail-list">
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Someone who believes in you</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-attachment">
												<i class="typcn typcn-attachment"></i>
											</div>
											<div class="main-mail-date">
												11:30am
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star active">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/2.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Here's What You Missed This Week</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor...</span>
												</div>
											</div>
											<div class="main-mail-date">
												06:50am
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-attachment">
												<i class="typcn typcn-attachment"></i>
											</div>
											<div class="main-mail-date">
												Yesterday
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/10.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>We're Giving a Macbook for Free</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Yesterday
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 13
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>We've Made Some Changes</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 13
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-avatar bg-gray-800">
												J
											</div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Grab Our Holiday Deals</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 12
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/15.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Just a Few Steps Away</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 05
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star active">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/7.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Credit Card Promos</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 04
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/10.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 02
											</div>
										</div>
										<div class="main-mail-item border-bottom-0">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox1"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/1.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 02
											</div>
										</div>
									</div>
								</div>
								<div class="main-content-body main-content-body-mail card-body tab-pane border-top-0" id="social">
									<div class="main-mail-header">
										<div>
											<h4 class="main-content-title mg-b-5">Social</h4>
											<p>You have 30 unread messages</p>
										</div>
										<div>
											<span>1-50 of 1200</span>
											<div class="btn-group" role="group">
												<button class="btn btn-outline-secondary disabled" type="button"><i class="icon ion-ios-arrow-back"></i></button> <button class="btn btn-outline-secondary" type="button"><i class="icon ion-ios-arrow-forward"></i></button>
											</div>
										</div>
									</div><!-- main-mail-list-header -->
									<div class="main-mail-options">
										<label class="ckbox ckbox2"><input id="checkAll2" type="checkbox"> <span></span></label>
										<div class="btn-group">
											<button class="btn btn-light"><i class="typcn typcn-arrow-sync"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-archive"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-info-outline"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-trash"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-folder"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-tag"></i></button>
										</div><!-- btn-group -->
									</div><!-- main-mail-options -->
									<div class="main-mail-list">
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Someone who believes in you</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-attachment">
												<i class="typcn typcn-attachment"></i>
											</div>
											<div class="main-mail-date">
												11:30am
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star active">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/2.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Here's What You Missed This Week</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor...</span>
												</div>
											</div>
											<div class="main-mail-date">
												06:50am
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-attachment">
												<i class="typcn typcn-attachment"></i>
											</div>
											<div class="main-mail-date">
												Yesterday
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/10.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>We're Giving a Macbook for Free</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Yesterday
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 13
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>We've Made Some Changes</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 13
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-avatar bg-gray-800">
												J
											</div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Grab Our Holiday Deals</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 12
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/15.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Just a Few Steps Away</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 05
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star active">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/7.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Credit Card Promos</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 04
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/10.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 02
											</div>
										</div>
										<div class="main-mail-item border-bottom-0">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox2"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/1.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 02
											</div>
										</div>
									</div>
								</div>
								<div class="main-content-body main-content-body-mail card-body tab-pane border-top-0" id="promotions">
									<div class="main-mail-header">
										<div>
											<h4 class="main-content-title mg-b-5">Promotions</h4>
											<p>You have 40 unread messages</p>
										</div>
										<div>
											<span>1-50 of 1200</span>
											<div class="btn-group" role="group">
												<button class="btn btn-outline-secondary disabled" type="button"><i class="icon ion-ios-arrow-back"></i></button> <button class="btn btn-outline-secondary" type="button"><i class="icon ion-ios-arrow-forward"></i></button>
											</div>
										</div>
									</div><!-- main-mail-list-header -->
									<div class="main-mail-options">
										<label class="ckbox ckbox3"><input id="checkAll3" type="checkbox"> <span></span></label>
										<div class="btn-group">
											<button class="btn btn-light"><i class="typcn typcn-arrow-sync"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-archive"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-info-outline"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-trash"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-folder"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-tag"></i></button>
										</div><!-- btn-group -->
									</div><!-- main-mail-options -->
									<div class="main-mail-list">
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Someone who believes in you</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-attachment">
												<i class="typcn typcn-attachment"></i>
											</div>
											<div class="main-mail-date">
												11:30am
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star active">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Here's What You Missed This Week</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor...</span>
												</div>
											</div>
											<div class="main-mail-date">
												06:50am
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-attachment">
												<i class="typcn typcn-attachment"></i>
											</div>
											<div class="main-mail-date">
												Yesterday
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/10.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>We're Giving a Macbook for Free</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Yesterday
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 13
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>We've Made Some Changes</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 13
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-avatar bg-gray-800">
												J
											</div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Grab Our Holiday Deals</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 12
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/15.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Just a Few Steps Away</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 05
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star active">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/7.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Credit Card Promos</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 04
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/10.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 02
											</div>
										</div>
										<div class="main-mail-item border-bottom-0">
											<div class="main-mail-checkbox">
												<label class="ckbox ckbox3"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/1.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-subject">
													<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 02
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="main-mail-compose">
						<div>
							<div class="container">
								<div class="main-mail-compose-box">
									<div class="main-mail-compose-header">
										<span>New Message</span>
										<nav class="nav">
											<a class="nav-link" href=""><i class="fas fa-minus"></i></a> <a class="nav-link" href=""><i class="fas fa-compress"></i></a> <a class="nav-link" href=""><i class="fas fa-times"></i></a>
										</nav>
									</div>
									<div class="main-mail-compose-body">
										<div class="form-group">
											<label class="form-label">To</label>
											<div>
												<input class="form-control" placeholder="Enter recipient's email address" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Subject</label>
											<div>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Write your message here..." rows="8"></textarea>
										</div>
										<div class="form-group mg-b-0">
											<nav class="nav">
												<a class="nav-link" data-toggle="tooltip" href="" title="Add attachment"><i class="fas fa-paperclip"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Add photo"><i class="far fa-image"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Add link"><i class="fas fa-link"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Emoticons"><i class="far fa-smile"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Discard"><i class="far fa-trash-alt"></i></a>
											</nav><button class="btn btn-primary">Send</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>
				</div>
				<!-- /row -->

@endsection('content')

@section('scripts')

		<!--Internal Sparkline js -->
		<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>

		<!-- Check all min js -->
		<script src="{{URL::asset('assets/js/check-all-mail.js')}}"></script>

		<!--Internal Apexchart js-->
		<script src="{{URL::asset('assets/plugins/apexcharts/apexcharts.js')}}"></script>

@endsection