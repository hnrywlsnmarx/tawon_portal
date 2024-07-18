@extends('layouts.app')

@section('styles') 
@endsection
  
@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Blog Details</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Blog</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog Details</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- Row -->
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="card overflow-hidden">
							<div class="item7-card-img px-4 pt-4">
								<a href="#"></a>
								<img src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="img" class="cover-image br-7 w-100">
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center mt-auto mg-b-10">
									<img class="avatar brround avatar-md mr-3 " src="{{URL::asset('assets/img/faces/1.jpg')}}">
									<div>
										<a href="profile.html" class="font-weight-semibold text-default">Anna Ogden</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-heart-outline tx-24"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="typcn typcn-thumbs-up tx-24"></i></a>
									</div>
								</div>
								<a href="#" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
								<p class="">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
								<p>but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example</p>
								<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
								<div class="row row-sm">
									<div class="col">
										<img alt="img" class="w-100" src="{{URL::asset('assets/img/photos/3.jpg')}}">
									</div>
									<div class="col">
										<img alt="img" class="w-100" src="{{URL::asset('assets/img/photos/2.jpg')}}">
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

						<!--Comments-->
						<div class="card">
							<div class="card-header pd-t-25">
								<h3 class="card-title">3 Comments</h3>
							</div>
							<div class="card-body pd-t-0">
								<div class="d-sm-flex mt-3 p-4 sub-review-section border border-bottom-0 br-bl-0 br-br-0 rounded-5">
                                    <div class="d-flex mr-3">
                                        <a href="#"><img class="media-object brround avatar-md" alt="64x64" src="{{URL::asset('assets/img/faces/6.jpg')}}"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
											<span class="tx-14 ml-2"> 4.5 <i class="fa fa-star tx-warning"></i></span>
										</h6>
										<p class="font-13  mb-2 mt-2">
                                           Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
                                        </p>
										<a href="#" class="mr-2 mt-1"><span class="badge badge-primary">Helpful</span></a>
										<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#Comment"><span class="badge badge-light">Comment</span></a>
										<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#report"><span  class="badge badge-light">Report</span></a>
										<div class="btn-group btn-group-sm mb-1 ml-auto float-sm-right mt-1">
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-up"></i></button>
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-down"></i></button>
										</div>
									</div>
								</div>
								<div class="d-sm-flex p-4 sub-review-section border subsection-color br-tl-0 br-tr-0 rounded-5">
									<div class="d-flex mr-3">
										<a href="#"><img class="media-object brround avatar-md" alt="64x64" src="{{URL::asset('assets/img/faces/1.jpg')}}"> </a>
									</div>
									<div class="media-body">
										<h6 class="mt-0 mb-1 font-weight-semibold">Rose Slater </h6>
										<p class="font-13  mb-2 mt-2">
											Lorem ipsum dolor sit amet nostrud exercitation ullamco laboris   commodo consequat.
										</p>
										<a href="" data-toggle="modal" data-target="#Comment" class="mt-1"><span class="badge badge-light">Comment</span></a>
										<div class="btn-group btn-group-sm mb-1 ml-auto float-right mt-1">
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-up"></i></button>
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-down"></i></button>
										</div>
									</div>
								</div>
								<div class="d-sm-flex p-4 mt-4 border sub-review-section rounded-5">
									<div class="d-flex mr-3">
										<a href="#"><img class="media-object brround avatar-md" alt="64x64" src="{{URL::asset('assets/img/faces/2.jpg')}}"> </a>
									</div>
									<div class="media-body">
										<h6 class="mt-0 mb-1 font-weight-semibold">Edward
											<span class="tx-14 ml-2"> 4 <i class="fa fa-star tx-warning"></i></span>
										</h6>
										<p class="font-13  mb-2 mt-2">
                                           Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
                                        </p>
										<a href="#" class="mr-2 mt-1"><span class="badge badge-primary">Helpful</span></a>
										<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#Comment"><span class="badge badge-light">Comment</span></a>
										<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#report"><span  class="badge badge-light">Report</span></a>
										<div class="btn-group btn-group-sm mb-1 ml-auto float-sm-right mt-1">
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-up"></i></button>
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-down"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/Comments-->

						<div class="card">
							<div class="card-header pd-t-25">
								<h3 class="card-title">Add a Review</h3>
							</div>
							<div class="card-body pd-t-0">
								<div class="mt-2">
									<div class="form-group">
										<input type="text" class="form-control" id="name1" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="email" placeholder="Email Address">
									</div>
									<div class="form-group">
										<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Review"></textarea>
									</div>
									<a href="#" class="btn btn-primary">Send Reply</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="input-group">
									<input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-3  br-br-3">
											Search
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header pd-t-20">
								<h3 class="card-title">Recent Posts</h3>
							</div>
							<div class="card-body p-0">
								<div class="pl-4 pr-4 pt-4">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object rounded-5 wd-60-f ht-40-f" alt="64x64" src="{{URL::asset('assets/img/photos/5.jpg')}}">
											</a>
										</div>
										<div class="media-body mg-t-5">
											<div class="d-flex">
												<h6 class="mt-0 mb-0 font-weight-semibold ">Joanne Scott</h6>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">long established fact..</p>
											</div>
										</div>
									</div>
								</div>
								<div class="pl-4 pr-4 pt-4">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object rounded-5 wd-60-f ht-40-f" alt="64x64" src="{{URL::asset('assets/img/photos/9.jpg')}}">
											</a>
										</div>
										<div class="media-body mg-t-5">
											<div class="d-flex">
												<h6 class="mt-0 mb-0 font-weight-semibold ">Cristobal Sharp</h6>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">The point of using Lorem..</p>
											</div>
										</div>
									</div>
								</div>
								<div class="pl-4 pr-4 pt-4">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object rounded-5 wd-60-f ht-40-f" alt="64x64" src="{{URL::asset('assets/img/photos/4.jpg')}}">
											</a>
										</div>
										<div class="media-body mg-t-5">
											<div class="d-flex">
												<h6 class="mt-0 mb-0 font-weight-semibold ">Velma Wellons </h6>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">Various versions have..</p>
											</div>
										</div>
									</div>
								</div>
								<div class="pl-4 pr-4 pt-4">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object rounded-5 wd-60-f ht-40-f" alt="64x64" src="{{URL::asset('assets/img/photos/7.jpg')}}">
											</a>
										</div>
										<div class="media-body mg-t-5">
											<div class="d-flex">
												<h6 class="mt-0 mb-0 font-weight-semibold ">Cathie Madonna </h6>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">long established fact..</p>
											</div>
										</div>
									</div>
								</div>
								<div class="pl-4 pr-4 pt-4">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object rounded-5 wd-60-f ht-40-f" alt="64x64" src="{{URL::asset('assets/img/photos/12.jpg')}}">
											</a>
										</div>
										<div class="media-body mg-t-5">
											<div class="d-flex">
												<h6 class="mt-0 mb-0 font-weight-semibold ">Aurelio Dahmer </h6>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">Ut enim ad minim veniam..</p>
											</div>
										</div>
									</div>
								</div>
								<div class="pl-4 pr-4 pt-4">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object rounded-5 wd-60-f ht-40-f" alt="64x64" src="{{URL::asset('assets/img/photos/13.jpg')}}">
											</a>
										</div>
										<div class="media-body mg-t-5">
											<div class="d-flex">
												<h6 class="mt-0 mb-1 font-weight-semibold ">Cyrus Macarthur </h6>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">variations of passages..</p>
											</div>
										</div>
									</div>
								</div>
								<div class="pl-4 pr-4 pt-4 pb-4">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object rounded-5 wd-60-f ht-40-f" alt="64x64" src="{{URL::asset('assets/img/photos/2.jpg')}}">
											</a>
										</div>
										<div class="media-body mg-t-5">
											<div class="d-flex">
												<h6 class="mt-0 mb-1 font-weight-semibold ">Bernardo Sykes </h6>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">you are going to use..</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header pd-b-0 pd-t-20">
								<h3 class="card-title">Popular Tags</h3>
							</div>
							<div class="card-body">
								<div class="product-tags clearfix">
									<span class="tag mg-b-5">RealEstate</span>
									<span class="tag mg-b-5">AutoMobiles</span>
									<span class="tag mg-b-5">Events</span>
									<span class="tag mg-b-5">Health&amp; Beauty</span>
									<span class="tag mg-b-5">Services</span>
									<span class="tag mg-b-5">Restaurant</span>
									<span class="tag mg-b-5">Events</span>
									<span class="tag mg-b-5">Jobs</span>
									<span class="tag mg-b-5">Automobiles</span>
									<span class="tag mg-b-5">Computer</span>
									<span class="tag mg-b-5">Electronics</span>
								</div>
							</div>
						</div>
						<div class="card mb-lg-0">
							<div class="card-header pd-t-20">
								<h3 class="card-title">Blog Authors</h3>
							</div>
							<div class="card-body p-0">
								<ul class="list-group wd-md-100p bd-0">
									<li class="list-group-item d-flex align-items-center bd-0">
										<img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/5.jpg')}}">
										<div>
											<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Adrian Monino</h6><span class="d-block tx-11 text-muted">Blog Author</span>
										</div>
									</li>
									<li class="list-group-item d-flex align-items-center bd-0">
										<img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/6.jpg')}}">
										<div>
											<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-11 text-muted">Blog Author</span>
										</div>
									</li>
									<li class="list-group-item d-flex align-items-center bd-0">
										<img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/9.jpg')}}">
										<div>
											<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Marianne Audrey</h6><span class="d-block tx-11 text-muted">Blog Author</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--End Row-->
				
@endsection('content')

@section('scripts') 

	<!--Internal  Datepicker js -->
	<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <!-- Internal Select2 js-->
	<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

@endsection
				
