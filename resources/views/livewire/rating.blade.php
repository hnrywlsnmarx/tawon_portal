@extends('layouts.app')

@section('styles')

		<!---Internal  Owl Carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!-- Internal RatingThemes css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/ratings.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-1to10.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-movie.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-square.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-pill.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-reversed.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-horizontal.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/fontawesome-stars.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/css-stars.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bootstrap-stars.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/fontawesome-stars-o.css')}}">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Rating</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Rating</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Static Star Rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Static Star Rating of template.</p>
								</div>
								<div class="static-rate tx-20">
									<i class="fa fa-star text-warning" aria-hidden="true"></i>
									<i class="fa fa-star text-warning" aria-hidden="true"></i>
									<i class="fa fa-star text-warning" aria-hidden="true"></i>
									<i class="fa fa-star text-warning" aria-hidden="true"></i>
									<i class="fa fa-star text-warning" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Static Heart Rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Static Heart Rating of template.</p>
								</div>
								<div class="static-rate tx-20">
									<i class="fa fa-heart text-danger" aria-hidden="true"></i>
									<i class="fa fa-heart text-danger" aria-hidden="true"></i>
									<i class="fa fa-heart text-danger" aria-hidden="true"></i>
									<i class="fa fa-heart text-danger" aria-hidden="true"></i>
									<i class="fa fa-heart text-danger" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Star Rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Static Star Rating of template.</p>
								</div>
								<div class="rating-stars block text-left" id="rating">
									<div class="rating-stars-container">
										<div class="rating-star is--active">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star is--active">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Heart Rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Static Star Rating of template.</p>
								</div>
								<div class="rating-stars block" id="another-rating">
									<div class="rating-stars-container">
										<div class="rating-star is--active">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star is--active">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Multi Star Rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Multi Star Rating of template.</p>
								</div>
								<div class="rating-stars block" id="more-rating">
									<div class="rating-stars-container">
										<div class="rating-star is--active">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star is--active">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star is--active">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Multi Heart Rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Multi Heart Rating of template.</p>
								</div>
								<div class="rating-stars block" id="another-rating1">
									<div class="rating-stars-container">
										<div class="rating-star is--active">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star is--active">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star is--active">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star is--active">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Bar 1/10 Rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Bar Rating of template.</p>
								</div>
								<div class="box  box-example-1to10">
									<div class="box-body">
										<select id="example-1to10" name="rating" autocomplete="off">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7" selected="selected">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Opinion rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Option Rating of template.</p>
								</div>
								<div class="box box-example-movie">
									<div class="box-body">
										<select id="example-movie" name="rating" autocomplete="off">
											<option value="Bad">Bad</option>
											<option value="Mediocre">Mediocre</option>
											<option value="Good" selected="selected">Good</option>
											<option value="Awesome">Awesome</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Square Rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Square Rating of template.</p>
								</div>
								<div class="box  box-example-1to10">
									<div class="box box-example-square">
										<div class="box-body">
											<select id="example-square" name="rating" autocomplete="off">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Grade Rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Grade Rating of template.</p>
								</div>
								<div class="box  box-example-pill">
									<div class="box-body">
										<select id="example-pill" name="rating" autocomplete="off">
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
											<option value="E">E</option>
											<option value="F">F</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Horizontal Bar Rating</h6>
									<p class="tx-12 text-muted card-sub-title">The Horizontal Bar Rating of template.</p>
								</div>
								<div class="box box-large box-example-horizontal">
									<div class="box-body">
										<select id="example-horizontal" name="rating" autocomplete="off">
											<option value="10">10</option>
											<option value="9">9</option>
											<option value="8">8</option>
											<option value="7">7</option>
											<option value="6">6</option>
											<option value="5">5</option>
											<option value="4">4</option>
											<option value="3">3</option>
											<option value="2">2</option>
											<option value="1" selected="selected">1</option>
										</select>
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

		<!-- Internal Rating js-->
		<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- Internal Rating js-->
		<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/ratings.js')}}"></script>

		<!-- Internal Rating js-->
		<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>

@endsection