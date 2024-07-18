@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Products</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Products</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-4 mb-3 mb-md-0">
						<div class="card overflow-hidden">
							<h5 class="m-0 p-3 card-title bg-white border-bottom">Search</h5>
							<div class="py-3 px-3">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search ...">
									<span class="input-group-append">
										<button class="btn btn-primary" type="button">Search</button>
									</span>
								</div>
							</div>
						</div>
						<div class="card overflow-hidden">
							<h5 class="m-0 p-3 card-title bg-white border-bottom">Category</h5>
							<div class="py-2 px-3">
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="checkbox">
										<span class="check-box mb-0">
											<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-2">
										Foot wear
									</span>
								</label>
								<label class="p-1 d-flex align-items-center">
									<span class="checkbox">
										<span class="check-box mb-0">
											<span class="ckbox"><input type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-2">
										Top wear
									</span>
								</label>
								<label class="p-1 d-flex align-items-center">
									<span class="checkbox">
										<span class="check-box mb-0">
											<span class="ckbox"><input type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-2">
										Bottom wear
									</span>
								</label>
								<label class="p-1 d-flex align-items-center">
									<span class="check-box mb-0">
										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
									</span>
									<span class="ml-2">
									Accessories
									</span>
								</label>
								<label class="p-1 d-flex align-items-center">
									<span class="checkbox">
										<span class="check-box mb-0">
											<span class="ckbox"><input type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-2">
										Furniture
									</span>
								</label>
								<label class="p-1 d-flex align-items-center">
									<span class="check-box mb-0">
										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
									</span>
									<span class="ml-2">
										Electronics
									</span>
								</label>
							</div>
						</div>
						<div class="card overflow-hidden">
							<h5 class="m-0 p-3 card-title bg-white border-bottom border-top">Price</h5>
							<div class="p-3 d-flex align-items-center">
								<div class="w-50">
									<input placeholder="From" class="form-control rounded-0" />
								</div>
								<span class="h4 m-0 font-weight-normal px-2">-</span>
								<div class="w-50">
									<input placeholder="Up to" class="form-control rounded-0" />
								</div>
							</div>
						</div>
						<div class="card overflow-hidden">
							<h5 class="m-0 p-3 card-title bg-white border-bottom border-top">Ratings</h5>
							<div class="py-2 px-3">
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="check-box mb-0">
										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
									</span>
									<span class="ml-3 tx-16 my-auto">
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
									</span>
								</label>
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="check-box mb-0">
										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
									</span>
									<span class="ml-3 tx-16 my-auto">
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
									</span>
								</label>
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="check-box mb-0">
										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
									</span>
									<span class="ml-3 tx-16 my-auto">
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
									</span>
								</label>
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="checkbox mb-0">
										<span class="check-box">
											<span class="ckbox"><input type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-3 tx-16 my-auto">
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
									</span>
								</label>
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="checkbox mb-0">
										<span class="check-box">
											<span class="ckbox"><input type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-3 tx-16 my-auto">
										<i class="ion ion-md-star  text-warning"></i>
									</span>
								</label>
							</div>
							<div class="px-3 py-3 border-top">
								<button class="btn btn-danger btn-block">FILTER</button>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8">
						<div class="row row-sm">
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card overflow-hidden">
									<img class="w-100 mt-0" src="{{URL::asset('assets/img/ecommerce/01.jpg')}}" alt="product-image"/>
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-muted small mg-b-5">planters</span>
											<span class="ml-auto"><i class="fa fa-heart text-danger"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Flower Pot</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$25 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$47</span></h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<button class="btn btn-primary btn-block mb-0 mt-4">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card overflow-hidden">
									<img class="w-100 mt-0" src="{{URL::asset('assets/img/ecommerce/02.jpg')}}"  alt="product-image"/>
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-muted small mg-b-5">Furniture</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Fabric Armchair</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$56 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$79</span></h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<button class="btn btn-primary btn-block mb-0 mt-4">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card overflow-hidden">
									<img class="w-100 mt-0" src="{{URL::asset('assets/img/ecommerce/06.jpg')}}"  alt="product-image"/>
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-muted small mg-b-5">Furniture</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Chair</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$39</h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<button class="btn btn-primary btn-block mb-0 mt-4">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card overflow-hidden">
									<img class="w-100 mt-0" src="{{URL::asset('assets/img/ecommerce/10.jpg')}}"  alt="product-image"/>
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-muted small mg-b-5">Cloting</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Womens Casual dress</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$25</h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<button class="btn btn-primary btn-block mb-0 mt-4">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card overflow-hidden">
									<img class="w-100 mt-0" src="{{URL::asset('assets/img/ecommerce/07.jpg')}}"  alt="product-image"/>
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-muted small mg-b-5">Kitchen & Dining</span>
											<span class="ml-auto"><i class="fa fa-heart text-danger"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Coffee Cup</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$41</h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<button class="btn btn-primary btn-block mb-0 mt-4">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card overflow-hidden">
									<img class="w-100 mt-0" src="{{URL::asset('assets/img/ecommerce/04.jpg')}}"  alt="product-image"/>
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-muted small mg-b-5">Electronics</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Mens Watch</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$69 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$97</span></h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<button class="btn btn-primary btn-block mb-0 mt-4">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card overflow-hidden">
									<img class="w-100 mt-0" src="{{URL::asset('assets/img/ecommerce/08.jpg')}}"  alt="product-image"/>
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-muted small mg-b-5">planters</span>
											<span class="ml-auto"><i class="fa fa-heart text-danger"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">cactus plant</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$39 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$59</span></h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<button class="btn btn-primary btn-block mb-0 mt-4">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card overflow-hidden">
									<img class="w-100 mt-0" src="{{URL::asset('assets/img/ecommerce/09.jpg')}}"  alt="product-image"/>
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-muted small mg-b-5">Accessories</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Stylish College bag</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$45 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$674</span></h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<button class="btn btn-primary btn-block mb-0 mt-4">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card overflow-hidden">
									<img class="w-100 mt-0" src="{{URL::asset('assets/img/ecommerce/11.jpg')}}"  alt="product-image" />
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-muted small mg-b-5">Clothing</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Casual T-shirt</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$32</h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<button class="btn btn-primary btn-block mb-0 mt-4">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Pagination -->
						<div class="row mb-5">
							<div class="col-md-6 mt-1 d-none d-md-block"><b>1 - 10</b> of <b>234</b> Photos</div>
							<div class="col-md-6">
								<div class="float-right ml-auto">
									<ul class="pagination">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link bg-white" href="#">2</a></li>
										<li class="page-item"><a class="page-link bg-white" href="#">3</a></li>
										<li class="page-item"><a class="page-link bg-white" href="#">4</a></li>
										<li class="page-item"><a class="page-link bg-white" href="#">5</a></li>
										<li class="page-item page-next">
											<a class="page-link bg-white" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- Pagination -->
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 
@endsection