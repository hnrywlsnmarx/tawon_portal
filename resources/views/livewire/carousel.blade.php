@extends('layouts.app')

@section('styles') 

	<!---Internal  Owl Carousel css-->
	<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

	<!---Internal  Multislider css-->
	<link href="{{URL::asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Carousel</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Carousel</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Static Carousel</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="">
									<div class="carousel slide" data-ride="carousel" id="carouselExampleSlidesOnly">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/8.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/9.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/10.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">With Controls</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div>
									<div class="carousel slide" data-ride="carousel" id="carouselExample2">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/11.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/12.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/13.jpg')}}">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
											<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
											<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">With Indicator</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div>
									<div class="carousel slide" data-ride="carousel" id="carouselExample3">
										<ol class="carousel-indicators">
											<li class="active" data-slide-to="0" data-target="#carouselExample3"></li>
											<li data-slide-to="1" data-target="#carouselExample3"></li>
											<li data-slide-to="2" data-target="#carouselExample3"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/14.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/15.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/16.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">With Caption</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div>
									<div class="carousel slide" data-ride="carousel" id="carouselExample4">
										<ol class="carousel-indicators">
											<li class="active" data-slide-to="0" data-target="#carouselExample4"></li>
											<li data-slide-to="1" data-target="#carouselExample4"></li>
											<li data-slide-to="2" data-target="#carouselExample4"></li>
										</ol>
										<div class="carousel-inner bg-dark">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100 op-3" src="{{URL::asset('assets/img/photos/17.jpg')}}">
												<div class="carousel-caption d-none d-md-block">
													<h5>First Slide</h5>
													<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
												</div>
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100 op-3" src="{{URL::asset('assets/img/photos/18.jpg')}}">
												<div class="carousel-caption d-none d-md-block">
													<h5>Second Slide</h5>
													<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
												</div>
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100 op-3" src="{{URL::asset('assets/img/photos/19.jpg')}}">
												<div class="carousel-caption d-none d-md-block">
													<h5>Third Slide</h5>
													<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Fade Animate Carousel</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div>
									<div class="carousel slide carousel-fade" data-ride="carousel" id="carouselExample5">
										<ol class="carousel-indicators">
											<li class="active" data-slide-to="0" data-target="#carouselExample5"></li>
											<li data-slide-to="1" data-target="#carouselExample5"></li>
											<li data-slide-to="2" data-target="#carouselExample5"></li>
										</ol>
										<div class="carousel-inner bg-dark">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/20.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/1.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/2.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Carousel With Thumbnails</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="carousel-slider">
									<div id="carousel" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active"><img src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="img"> </div>
										</div>
										<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
											<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
											<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
										</a>
									</div>
									<div class="clearfix">
										<div id="thumbcarousel" class="carousel slide" data-interval="false">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="img"></div>
												</div>
												<div class="carousel-item">
													<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="5" class="thumb"><img src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="6" class="thumb"><img src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="7" class="thumb"><img src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="img"></div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
												<i class="fa fa-angle-left fs-20" aria-hidden="true"></i>
											</a>
											<a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
												<i class="fa fa-angle-right fs-20" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Multi Slider</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div id="basicSlider">
									<div class="MS-content">
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/10.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/11.jpg')}}" alt="" /> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts')

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Owl Carousel js-->
		<script src="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>

		<!---Internal  Multislider js-->
		<script src="{{URL::asset('assets/plugins/multislider/multislider.js')}}"></script>
		<script src="{{URL::asset('assets/js/carousel.js')}}"></script>
		
@endsection
				