@extends('layouts.app')

@section('styles') 

		<!-- Internal Gallery css -->
		<link href="{{URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">

		<!-- Internal Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Profile</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="">
									<div class="main-profile-overview">
										<div class="profile-banner relative">
											<img src="{{URL::asset('assets/img/banner.png')}}" alt="img" class="rounded-10 ht-250 w-100"/>
											<div class="profile-content d-sm-flex">
												<div class="main-img-user profile-user mb-0">
													<img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
												</div>
												<div class="mg-t-10 mg-sm-t-60 mg-l-10">
													<div>
														<h5 class="main-profile-name">Mintrona Pechon</h5>
														<p class="main-profile-name-text">Web Designer</p>
													</div>
												</div>
											</div>
											<div class="profile-buttons">
												<a class="btn btn-success" href="#"><i class="fe fe-edit"></i> Edit Profile</a>
											</div>
										</div>
										<div class="tab-menu-heading mg-t-100">
											<nav class="nav main-nav-line tabs-menu profile-nav-line bg-gray-100 rounded-10">
												<a class="nav-link  active" data-toggle="tab" href="#about">About</a>
												<a class="nav-link" data-toggle="tab" href="#timeline">Timeline</a>
												<a class="nav-link" data-toggle="tab" href="#gallery">Gallery</a>
												<a class="nav-link" data-toggle="tab" href="#friends">Friends</a>
												<a class="nav-link" data-toggle="tab" href="#settings">Account Settings</a>
											</nav>
										</div>
										<div class="tab-content">
											<div class="main-content-body tab-pane active border-top-0" id="about">
												<div class="card-body border rounded-10">
													<h6>Bio</h6>
													<div class="main-profile-bio">
														pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a>
													</div><!-- main-profile-bio -->
													<div class="d-sm-flex">
														<div class="main-profile-work-list mg-sm-r-20">
															<div class="media">
																<div class="media-logo bg-success-transparent text-success">
																	<i class="icon ion-logo-whatsapp"></i>
																</div>
																<div class="media-body">
																	<h6>Web Designer at <a href="">Spruko</a></h6><span>2018 - present</span>
																	<p>Past Work: Spruko, Inc.</p>
																</div>
															</div>
														</div>
														<div class="main-profile-work-list">
															<div class="media">
																<div class="media-logo bg-primary-transparent text-primary">
																	<i class="icon ion-logo-buffer"></i>
																</div>
																<div class="media-body">
																	<h6>Studied at <a href="">University</a></h6><span>2004-2008</span>
																	<p>Graduation: Bachelor of Science in Computer Science</p>
																</div>
															</div>
														</div><!-- main-profile-work-list -->
													</div>
													<hr class="mg-y-30">
													<label class="main-content-label tx-13 mg-b-20">Contact</label>
													<div class="d-sm-flex">
														<div class="mg-sm-r-20 mg-b-10">
															<div class="main-profile-contact-list">
																<div class="media">
																	<div class="media-icon bg-primary-transparent text-primary">
																		<i class="icon ion-md-phone-portrait"></i>
																	</div>
																	<div class="media-body">
																		<span>Mobile</span>
																		<div>
																			+245 354 654
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="mg-sm-r-20 mg-b-10">
															<div class="main-profile-contact-list">
																<div class="media">
																	<div class="media-icon bg-success-transparent text-success">
																		<i class="icon ion-logo-slack"></i>
																	</div>
																	<div class="media-body">
																		<span>Slack</span>
																		<div>
																			@spruko.w
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="">
															<div class="main-profile-contact-list">
																<div class="media">
																	<div class="media-icon bg-info-transparent text-info">
																		<i class="icon ion-md-locate"></i>
																	</div>
																	<div class="media-body">
																		<span>Current Address</span>
																		<div>
																			San Francisco, CA
																		</div>
																	</div>
																</div>
															</div> 
														</div>
													</div>
													<hr class="mg-y-30"> 
													<label class="main-content-label tx-13 mg-b-20">Social</label>
													<div class="d-md-flex">
														<div class="mg-md-r-20 mg-b-10">
															<div class="main-profile-social-list">
																<div class="media">
																	<div class="media-icon bg-primary-transparent text-primary">
																		<i class="icon ion-logo-github"></i>
																	</div>
																	<div class="media-body">
																		<span>Github</span> <a href="">github.com/spruko</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="mg-md-r-20 mg-b-10">
															<div class="main-profile-social-list">
																<div class="media">
																	<div class="media-icon bg-success-transparent text-success">
																		<i class="icon ion-logo-twitter"></i>
																	</div>
																	<div class="media-body">
																		<span>Twitter</span> <a href="">twitter.com/spruko.me</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="mg-md-r-20 mg-b-10">
															<div class="main-profile-social-list">
																<div class="media">
																	<div class="media-icon bg-info-transparent text-info">
																		<i class="icon ion-logo-linkedin"></i>
																	</div>
																	<div class="media-body">
																		<span>Linkedin</span> <a href="">linkedin.com/in/spruko</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="mg-md-r-20 mg-b-10">
															<div class="main-profile-social-list">
																<div class="media">
																	<div class="media-icon bg-danger-transparent text-danger">
																		<i class="icon ion-md-link"></i>
																	</div>
																	<div class="media-body">
																		<span>My Portfolio</span> <a href="">spruko.com/</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="main-content-body tab-pane border-top-0" id="timeline">
												<div class="">
													<div class="main-content-body main-content-body-profile">
														<div class="main-profile-body p-0">
															<div class="row row-sm">
																<div class="col-12">
																	<div class="card mg-b-20 border">
																		<div class="card-body">
																			<div class="card-header">
																				<div class="media">
																					<div class="media-user mr-2">
																						<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
																					</div>
																					<div class="media-body">
																						<h6 class="mb-0 mg-t-9">Mintrona Pechon Pechon</h6><span class="text-primary">just now</span>
																					</div>
																					<div class="ml-auto">
																						<div class="dropdown show">
																							<a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																							<div class="dropdown-menu dropdown-menu-right shadow">
																								<a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
																			<div class="row row-sm">
																				<div class="col">
																					<img alt="img" class="wd-200 mr-4" src="{{URL::asset('assets/img/photos/1.jpg')}}">
																					<img alt="img" class="wd-200" src="{{URL::asset('assets/img/photos/2.jpg')}}">
																				</div>
																			</div>
																			<div class="media mg-t-15 profile-footer">
																				<div class="media-user mr-2">
																					<div class="demo-avatar-group">
																						<div class="demo-avatar-group main-avatar-list-stacked">
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																							<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div>
																							<div class="main-avatar">
																								+23
																							</div>
																						</div><!-- demo-avatar-group -->
																					</div><!-- demo-avatar-group -->
																				</div>
																				<div class="media-body">
																					<h6 class="mb-0 mg-t-10">28 people like your photo</h6>
																				</div>
																				<div class="ml-auto">
																					<div class="dropdown show">
																						<a class="new" href="JavaScript:void(0);"><i class="far fa-heart"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="card mg-b-20 border">
																		<div class="card-body h-100">
																			<div class="card-header">
																				<div class="media">
																					<div class="media-user mr-2">
																						<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
																					</div>
																					<div class="media-body">
																						<h6 class="mb-0 mg-t-9">Mintrona Pechon Pechon</h6><span class="text-muted">Sep 26 2019, 10:14am</span>
																					</div>
																					<div class="ml-auto">
																						<div class="dropdown show">
																							<a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																							<div class="dropdown-menu dropdown-menu-right shadow">
																								<a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
																			<div class="row row-sm">
																				<div class="col">
																					<img alt="img" class="wd-200 mr-4" src="{{URL::asset('assets/img/photos/4.jpg')}}">
																					<img alt="img" class="wd-200" src="{{URL::asset('assets/img/photos/5.jpg')}}">
																				</div>
																			</div>
																			<div class="media mg-t-15 profile-footer">
																				<div class="media-user mr-2">
																					<div class="demo-avatar-group">
																						<div class="demo-avatar-group main-avatar-list-stacked">
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																							<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																							<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div>
																							<div class="main-avatar">
																								+23
																							</div>
																						</div><!-- demo-avatar-group -->
																					</div><!-- demo-avatar-group -->
																				</div>
																				<div class="media-body">
																					<h6 class="mb-0 mg-t-10">28 people like your photo</h6>
																				</div>
																				<div class="ml-auto">
																					<div class="dropdown show">
																						<a class="new" href="JavaScript:void(0);"><i class="far fa-heart"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="card mg-b-20 border">
																		<div class="card-body">
																			<div class="card-header">
																				<div class="media">
																					<div class="media-user mr-2">
																						<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
																					</div>
																					<div class="media-body">
																						<h6 class="mb-0 mg-t-9">Mintrona Pechon Pechon</h6><span class="text-muted">Sep 22 2019, 10:14am</span>
																					</div>
																					<div class="ml-auto">
																						<div class="dropdown show">
																							<a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																							<div class="dropdown-menu dropdown-menu-right shadow">
																								<a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

																			<div class="media mg-t-15 profile-footer">
																				<div class="media-user mr-2">
																					<div class="demo-avatar-group">
																						<div class="demo-avatar-group main-avatar-list-stacked">
																							<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																							<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div>
																							<div class="main-avatar">
																								+23
																							</div>
																						</div><!-- demo-avatar-group -->
																					</div><!-- demo-avatar-group -->
																				</div>
																				<div class="media-body">
																					<h6 class="mb-0 mg-t-10">28 people like your photo</h6>
																				</div>
																				<div class="ml-auto">
																					<div class="dropdown show">
																						<a class="new" href="JavaScript:void(0);"><i class="far fa-heart"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="card border">
																		<div class="card-body h-100">
																			<div class="card-header">
																				<div class="media">
																					<div class="media-user mr-2">
																						<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/15.jpg')}}"></div>
																					</div>
																					<div class="media-body">
																						<h6 class="mb-0 mg-t-9">Mintrona Pechon</h6><span class="text-muted">Sep 21 2019, 10:14am</span>
																					</div>
																					<div class="ml-auto">
																						<div class="dropdown show">
																							<a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																							<div class="dropdown-menu dropdown-menu-right shadow">
																								<a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
																			<div class="row row-sm">
																				<div class="col">
																					<img alt="img" class="wd-200 mr-3" src="{{URL::asset('assets/img/photos/6.jpg')}}">
																					<img alt="img" class="wd-200" src="{{URL::asset('assets/img/photos/7.jpg')}}">
																				</div>
																			</div>
																			<div class="media mg-t-15 profile-footer">
																				<div class="media-user mr-2">
																					<div class="demo-avatar-group">
																						<div class="demo-avatar-group main-avatar-list-stacked">
																							<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/11.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																							<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}"></div>
																							<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div>
																							<div class="main-avatar">
																								+23
																							</div>
																						</div><!-- demo-avatar-group -->
																					</div><!-- demo-avatar-group -->
																				</div>
																				<div class="media-body">
																					<h6 class="mb-0 mg-t-10">28 people like your photo</h6>
																				</div>
																				<div class="ml-auto">
																					<div class="dropdown show">
																						<a class="new" href="JavaScript:void(0);"><i class="far fa-heart"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div><!-- main-profile-body -->
													</div>
												</div>
											</div>
											<div class="main-content-body tab-pane border-top-0" id="gallery">
												<div class="card-body border">
													<div class="demo-gallery">
														<ul id="lightgallery" class="list-unstyled row row-sm">
															<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/1.jpg')}}" data-src="{{URL::asset('assets/img/photos/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4>" >
																<a href="">
																	<img class="img-responsive" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="Thumb-1">
																</a>
															</li>
															<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/2.jpg')}}" data-src="{{URL::asset('assets/img/photos/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4>" >
																<a href="">
																	<img class="img-responsive" src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="Thumb-1">
																</a>
															</li>
															<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/3.jpg')}}" data-src="{{URL::asset('assets/img/photos/3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4>" >
																<a href="">
																	<img class="img-responsive" src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="Thumb-1">
																</a>
															</li>
															<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/4.jpg')}}" data-src="{{URL::asset('assets/img/photos/4.jpg')}}" data-sub-html="<h4>Gallery Image 4</h4>" >
																<a href="">
																	<img class="img-responsive" src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="Thumb-1">
																</a>
															</li>
															<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/5.jpg')}}" data-src="{{URL::asset('assets/img/photos/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4>" >
																<a href="">
																	<img class="img-responsive" src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="Thumb-1">
																</a>
															</li>
															<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/6.jpg')}}" data-src="{{URL::asset('assets/img/photos/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4>" >
																<a href="">
																	<img class="img-responsive" src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="Thumb-1">
																</a>
															</li>
															<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/7.jpg')}}" data-src="{{URL::asset('assets/img/photos/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4>" >
																<a href="">
																	<img class="img-responsive" src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="Thumb-1">
																</a>
															</li>
															<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/8.jpg')}}" data-src="{{URL::asset('assets/img/photos/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4>" >
																<a href="">
																	<img class="img-responsive" src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="Thumb-1">
																</a>
															</li>
															<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/9.jpg')}}" data-src="{{URL::asset('assets/img/photos/9.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4>" >
																<a href="">
																	<img class="img-responsive" src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="Thumb-1">
																</a>
															</li>
														</ul>
														<!-- /Gallery -->
													</div>
												</div>
											</div>
											<div class="main-content-body tab-pane border-top-0" id="friends">
												<div class="card-body border pd-b-10">
													<!-- row -->
													<div class="row row-sm">
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
															<div class="card custom-card border">
																<div class="card-body text-center">
																	<div class="user-lock text-center">
																		<div class="dropdown text-right">
																			<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																				<i class="fe fe-more-vertical"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right shadow">
																				<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
																			</div>
																		</div>
																		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/2.jpg')}}">
																	</div>
																	<h5 class=" mb-1 mt-3 card-title">Socrates Itumay</h5>
																	<p class="mb-2 mt-1 tx-inverse">Project Manager</p>
																	<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
															<div class="card custom-card border">
																<div class="card-body text-center">
																	<div class="user-lock text-center">
																		<div class="dropdown text-right">
																			<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																				<i class="fe fe-more-vertical"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right shadow">
																				<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
																			</div>
																		</div>
																		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/3.jpg')}}">
																	</div>
																	<h5 class="mb-1 mt-3  card-title">Reynante Labares</h5>
																	<p class="mb-2 mt-1 tx-inverse">Web Designer</p>
																	<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
															<div class="card custom-card border">
																<div class="card-body text-center">
																	<div class="user-lock text-center">
																		<div class="dropdown text-right">
																			<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																				<i class="fe fe-more-vertical"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right shadow">
																				<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
																			</div>
																		</div>
																		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
																	</div>
																	<h5 class="mb-1 mt-3 card-title">Owen Bongcaras</h5>
																	<p class="mb-2 mt-1 tx-inverse">App Developer</p>
																	<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
															<div class="card custom-card border">
																<div class="card-body text-center">
																	<div class="user-lock text-center">
																		<div class="dropdown text-right">
																			<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																				<i class="fe fe-more-vertical"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right shadow">
																				<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
																			</div>
																		</div>
																		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/8.jpg')}}">
																	</div>
																	<h5 class="mb-1 mt-3 card-title">Stephen Metcalfe</h5>
																	<p class="mb-2 mt-1 tx-inverse">Administrator</p>
																	<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
															<div class="card custom-card border">
																<div class="card-body text-center">
																	<div class="user-lock text-center">
																		<div class="dropdown text-right">
																			<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																				<i class="fe fe-more-vertical"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right shadow">
																				<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
																			</div>
																		</div>
																		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/2.jpg')}}">
																	</div>
																	<h5 class=" mb-1 mt-3 card-title">Socrates Itumay</h5>
																	<p class="mb-2 mt-1 tx-inverse">Project Manager</p>
																	<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
															<div class="card custom-card border">
																<div class="card-body text-center">
																	<div class="user-lock text-center">
																		<div class="dropdown text-right">
																			<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																				<i class="fe fe-more-vertical"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right shadow">
																				<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
																			</div>
																		</div>
																		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/3.jpg')}}">
																	</div>
																	<h5 class="mb-1 mt-3  card-title">Reynante Labares</h5>
																	<p class="mb-2 mt-1 tx-inverse">Web Designer</p>
																	<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
															<div class="card custom-card border">
																<div class="card-body text-center">
																	<div class="user-lock text-center">
																		<div class="dropdown text-right">
																			<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																				<i class="fe fe-more-vertical"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right shadow">
																				<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
																			</div>
																		</div>
																		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
																	</div>
																	<h5 class="mb-1 mt-3 card-title">Owen Bongcaras</h5>
																	<p class="mb-2 mt-1 tx-inverse">App Developer</p>
																	<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
															<div class="card custom-card border">
																<div class="card-body text-center">
																	<div class="user-lock text-center">
																		<div class="dropdown text-right">
																			<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																				<i class="fe fe-more-vertical"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right shadow">
																				<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
																			</div>
																		</div>
																		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/8.jpg')}}">
																	</div>
																	<h5 class="mb-1 mt-3 card-title">Stephen Metcalfe</h5>
																	<p class="mb-2 mt-1 tx-inverse">Administrator</p>
																	<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="main-content-body tab-pane border-top-0" id="settings">
												<div class="card-body border">
													<form class="form-horizontal">
														<div class="mb-4 main-content-label">Account</div>
														<div class="form-group ">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">User Name</label>
																</div>
																<div class="col-md-9">
																	<input type="text" class="form-control"  placeholder="User Name" value="Redashna">
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">Email</label>
																</div>
																<div class="col-md-9">
																	<input type="text" class="form-control"  placeholder="Email" value="info@redash.in">
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">Language</label>
																</div>
																<div class="col-md-9">
																	<select class="form-control select2">
																		<option>Us English</option>
																		<option>Arabic</option>
																		<option>Korean</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">Timezone</label>
																</div>
																<div class="col-md-9">
																	<select class="form-control select2">
																		<option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
																		<option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
																		<option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
																		<option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
																		<option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
																		<option value="America/Anchorage">(GMT-09:00) Alaska</option>
																		<option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
																		<option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
																		<option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
																		<option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
																		<option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
																		<option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
																		<option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
																		<option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
																		<option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
																		<option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
																		<option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
																		<option value="America/Havana">(GMT-05:00) Cuba</option>
																		<option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
																		<option value="America/Caracas">(GMT-04:30) Caracas</option>
																		<option value="America/Santiago">(GMT-04:00) Santiago</option>
																		<option value="America/La_Paz">(GMT-04:00) La Paz</option>
																		<option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
																		<option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
																		<option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
																		<option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
																		<option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
																		<option value="America/Araguaina">(GMT-03:00) UTC-3</option>
																		<option value="America/Montevideo">(GMT-03:00) Montevideo</option>
																		<option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
																		<option value="America/Godthab">(GMT-03:00) Greenland</option>
																		<option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
																		<option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
																		<option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
																		<option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
																		<option value="Atlantic/Azores">(GMT-01:00) Azores</option>
																		<option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
																		<option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
																		<option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
																		<option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
																		<option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
																		<option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
																		<option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
																		<option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
																		<option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
																		<option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
																		<option value="Asia/Beirut">(GMT+02:00) Beirut</option>
																		<option value="Africa/Cairo">(GMT+02:00) Cairo</option>
																		<option value="Asia/Gaza">(GMT+02:00) Gaza</option>
																		<option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
																		<option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
																		<option value="Europe/Minsk">(GMT+02:00) Minsk</option>
																		<option value="Asia/Damascus">(GMT+02:00) Syria</option>
																		<option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
																		<option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
																		<option value="Asia/Tehran">(GMT+03:30) Tehran</option>
																		<option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
																		<option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
																		<option value="Asia/Kabul">(GMT+04:30) Kabul</option>
																		<option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
																		<option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
																		<option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
																		<option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
																		<option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
																		<option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
																		<option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
																		<option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
																		<option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
																		<option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
																		<option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
																		<option value="Australia/Perth">(GMT+08:00) Perth</option>
																		<option value="Australia/Eucla">(GMT+08:45) Eucla</option>
																		<option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
																		<option value="Asia/Seoul">(GMT+09:00) Seoul</option>
																		<option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
																		<option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
																		<option value="Australia/Darwin">(GMT+09:30) Darwin</option>
																		<option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
																		<option value="Australia/Hobart">(GMT+10:00) Hobart</option>
																		<option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
																		<option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
																		<option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
																		<option value="Asia/Magadan">(GMT+11:00) Magadan</option>
																		<option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
																		<option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
																		<option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
																		<option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
																		<option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
																		<option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
																		<option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row">
																<div class="col-md-3 col">
																	<label class="form-label">Verification</label>
																</div>
																<div class="col-md-9 col">
																	<label class="ckbox mg-b-10"><input type="checkbox"><span>Email</span></label>
																	<label class="ckbox mg-b-10"><input checked="" type="checkbox"><span>SMS</span></label>
																	<label class="ckbox mg-b-10"><input type="checkbox"><span>Phone</span></label>
																</div>
															</div>
														</div>
														<div class="mb-4 main-content-label">Secuirity Settings</div>
														<div class="form-group ">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">Login Verification</label>
																</div>
																<div class="col-md-9">
																	<a class="" href="#">Settup Verification</a>
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">Password Verification</label>
																</div>
																<div class="col-md-9">
																	<label class="ckbox mg-b-10"><input type="checkbox"><span>Require Personal Details</span></label>
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row">
																<div class="col-md-3">
																</div>
																<div class="col-md-9">
																	<a class="mg-r-20" href="#">Deactivate Account</a>
																	<a class="" href="#">Change Password</a>
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>

										<!-- main-profile-overview -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">

					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!-- Internal Select2.min js -->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>

		<!-- Internal Gallery js -->
		<script src="{{URL::asset('assets/plugins/gallery/lightgallery-all.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/gallery/jquery.mousewheel.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/gallery.js')}}"></script>

@endsection