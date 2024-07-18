@extends('layouts.app')

@section('styles') 

		<!--- Internal Select2 css-->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Product Checkout</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Product Checkout</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Content Wizard
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div id="wizard1">
									<h3>My Cart</h3>
									<section>
										<div class="table-responsive mg-t-20">
											<table class="table table-bordered table-hover mb-0 text-nowrap">
												<thead>
													<tr>
														<th>Product</th>
														<th class="w-150">Quantity</th>
														<th >Price</th>
														<th >Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<img src="{{URL::asset('assets/img/ecommerce/01.jpg')}}" alt="img" class="ht-70-f wd-70-f mg-r-20">
																</div>
																<div class="media-body">
																	<div class="card-item-desc mt-1">
																		<h6 class="font-weight-semibold mt-0 text-uppercase">Flower wase</h6>
																		<dl class="card-item-desc-1">
																		  <dt>Size: </dt>
																		  <dd>XXL</dd>
																		</dl>
																		<dl class="card-item-desc-1">
																		  <dt>Color: </dt>
																		  <dd>Green and Black color</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<div class="form-group">
																<select name="quantity" id="select-countries" class="form-control custom-select select2">
																	<option value="1" selected>1</option>
																	<option value="2">2</option>
																	<option value="3" >3</option>
																	<option value="4">4</option>
																</select>
															</div>
														</td>
														<td>$45</td>
														<td>
															<div class="d-flex">
																<a class="btn btn-danger btn-icon btn-sm text-white mr-2" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash"></i></a>
																<a class="btn btn-info btn-icon btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fe fe-heart"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<img src="{{URL::asset('assets/img/ecommerce/06.jpg')}}" alt="img" class="ht-70-f wd-70-f mg-r-20">
																</div>
																<div class="media-body">
																	<div class="card-item-desc mt-1">
																		<h6 class="font-weight-semibold mt-0 text-uppercase">New Stool</h6>
																		<dl class="card-item-desc-1">
																		  <dt>Size: </dt>
																		  <dd>XL</dd>
																		</dl>
																		<dl class="card-item-desc-1">
																		  <dt>Color: </dt>
																		  <dd>Black color</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<div class="form-group">
																<select name="quantity" id="select-countries1" class="form-control custom-select select2">
																	<option value="1" selected>1</option>
																	<option value="2">2</option>
																	<option value="3" >3</option>
																	<option value="4">4</option>
																</select>
															</div>
														</td>
														<td>$15</td>
														<td>
															<div class="d-flex">
																<a class="btn btn-danger btn-icon btn-sm text-white mr-2" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash"></i></a>
																<a class="btn btn-info btn-icon btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fe fe-heart"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<img src="{{URL::asset('assets/img/ecommerce/08.jpg')}}" alt="img" class="ht-70-f wd-70-f mg-r-20">
																</div>
																<div class="media-body">
																	<div class="card-item-desc mt-1">
																		<h6 class="font-weight-semibold mt-0 text-uppercase">New Flower Wase</h6>
																		<dl class="card-item-desc-1">
																		  <dt>Size: </dt>
																		  <dd>XL</dd>
																		</dl>
																		<dl class="card-item-desc-1">
																		  <dt>Color: </dt>
																		  <dd>LightPink color</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<div class="form-group">
																<select name="quantity" id="select-countries2" class="form-control custom-select select2">
																	<option value="1" selected>1</option>
																	<option value="2">2</option>
																	<option value="3" >3</option>
																	<option value="4">4</option>
																</select>
															</div>
														</td>
														<td>$136</td>
														<td>
															<div class="d-flex">
																<a class="btn btn-danger btn-icon btn-sm text-white mr-2" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash"></i></a>
																<a class="btn btn-info btn-icon btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fe fe-heart"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<img src="{{URL::asset('assets/img/ecommerce/02.jpg')}}" alt="img" class="ht-70-f wd-70-f mg-r-20">
																</div>
																<div class="media-body">
																	<div class="card-item-desc mt-1">
																		<h6 class="font-weight-semibold mt-0 text-uppercase">Modren Sofa</h6>
																		<dl class="card-item-desc-1">
																		  <dt>Size: </dt>
																		  <dd>11-12 inches</dd>
																		</dl>
																		<dl class="card-item-desc-1">
																		  <dt>Color: </dt>
																		  <dd>LightGray color</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<div class="form-group">
																<select name="quantity" id="select-countries3" class="form-control custom-select select2">
																	<option value="1" selected>1</option>
																	<option value="2">2</option>
																	<option value="3" >3</option>
																	<option value="4">4</option>
																</select>
															</div>
														</td>
														<td>$274</td>
														<td>
															<div class="d-flex">
																<a class="btn btn-danger btn-icon btn-sm text-white mr-2" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash"></i></a>
																<a class="btn btn-info btn-icon btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fe fe-heart"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td colspan="2">Cart Subtotal</td>
														<td colspan="2" class="text-right">$792.00</td>
													</tr>
													<tr>
														<td colspan="2"><span>Totals</span></td>
														<td colspan="2" class="text-right text-muted"><span>$792.00</span></td>
													</tr>
													<tr>
														<td colspan="2"><span>Order Total</span></td>
														<td colspan="2"><h2 class="price text-right mb-0">$792.00</h2></td>
													</tr>
												</tbody>
											</table>
										</div>
									</section>
									<h3>Shipping Details</h3>
									<section>
										<div class="control-group form-group">
											<label class="form-label">Name</label>
											<input type="text" class="form-control required" placeholder="Name">
										</div>
										<div class="control-group form-group">
											<label class="form-label">Email</label>
											<input type="email" class="form-control required" placeholder="Email Address">
										</div>
										<div class="control-group form-group">
											<label class="form-label">Phone Number</label>
											<input type="number" class="form-control required" placeholder="Number">
										</div>
										<div class="control-group form-group mb-0">
											<label class="form-label">Address</label>
											<input type="text" class="form-control required" placeholder="Address">
										</div>
									</section>
									<h3>Payment</h3>
									<section>
										<div class="form-group">
											<label class="form-label" >CardHolder Name</label>
											<input type="text" class="form-control" id="name1" placeholder="First Name">
										</div>
										<div class="form-group">
											<label class="form-label">Card number</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search for...">
												<span class="input-group-append">
													<button class="btn btn-info" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
													<i class="fab fa-cc-mastercard"></i></button>
												</span>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-8">
												<div class="form-group mb-sm-0">
													<label class="form-label">Expiration</label>
													<div class="input-group">
														<input type="number" class="form-control" placeholder="MM" name="expiremonth">
														<input type="number" class="form-control" placeholder="YY" name="expireyear">
													</div>
												</div>
											</div>
											<div class="col-sm-4 ">
												<div class="form-group mb-0">
													<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
													<input type="number" class="form-control" required="">
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection('content')

@section('scripts') 

		<!--Internal  Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Jquery.steps js -->
		<script src="{{URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
        
		<!--Internal  Form-wizard js -->
		<script src="{{URL::asset('assets/js/form-wizard.js')}}"></script>

@endsection