@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Pricing</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pricing</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')
				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card">
							<div class="card-body text-center">
								<div class="card-title mb-0 tx-22">
									Free
								</div>
							</div>
							<div class="card-body text-center">
								<div class="display-4 font-weight-semibold my-2">$0</div>
							</div>
							<div class="text-center border-top">
								<ul class="list-unstyled leading-loose mb-0">
									<li><strong>4</strong> Ads</li>
									<li><i class="fe fe-check text-success mr-2"></i> 30 days</li>
									<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
									<li><i class="fe fe-x text-danger mr-2"></i> Urgent Ads</li>
								</ul>
							</div>
							<div class="card-body text-center">
								<div class="text-center mt-6">
									<a href="#" class="btn btn-primary btn-block">Choose plan</a>
								</div>
							</div>
						</div>
					</div><!-- col-end -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card">
							<div class="card-body text-center">
								<div class="card-title mb-0 tx-22">
									Unlimited
								</div>
							</div>
							<div class="card-body text-center">
								<div class="display-4 font-weight-semibold  my-2">$150</div>
							</div>
							<div class="text-center border-top">
								<ul class="list-unstyled leading-loose mb-0">
									<li><strong>Unlimited</strong> Ads</li>
									<li><i class="fe fe-check text-success mr-2"></i> 365 Days</li>
									<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
									<li><i class="fe fe-check text-success mr-2"></i> Urgent ads</li>
								</ul>
							</div>
							<div class="card-body text-center">
								<div class="text-center mt-6">
									<a href="#" class="btn btn-warning btn-block">Choose plan</a>
								</div>
							</div>
						</div>
					</div><!-- col-end -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card overflow-hidden">
							<div class="card-status bg-success"></div>
							<div class="card-body text-center">
								<div class="card-title mb-0 tx-22">
									Premium
								</div>
							</div>
							<div class="card-body text-center">
								<div class="display-4 font-weight-semibold  my-2">$65</div>
							</div>
							<div class="text-center border-top">
								<ul class="list-unstyled leading-loose mb-0">
									<li><strong>50</strong> Ads</li>
									<li><i class="fe fe-check text-success mr-2"></i> 60 Days</li>
									<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
									<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
								</ul>
							</div>
							<div class="card-body text-center">
								<div class="text-center mt-6">
									<a href="#" class="btn btn-success btn-block">Choose plan</a>
								</div>
							</div>
						</div>
					</div><!-- col-end -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card">
							<div class="card-body text-center">
								<div class="card-title mb-0 tx-22">
									Enterprise
								</div>
							</div>
							<div class="card-body text-center">
								<div class="display-4 font-weight-semibold  my-2">$100</div>
							</div>
							<div class="text-center border-top">
								<ul class="list-unstyled leading-loose mb-0">
									<li><strong>100</strong> Ads</li>
									<li><i class="fe fe-check text-success mr-2"></i> 180 days</li>
									<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
									<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
								</ul>
							</div>
							<div class="card-body text-center">
								<div class="text-center mt-6">
									<a href="#" class="btn btn-danger btn-block">Choose plan</a>
								</div>
							</div>
						</div>
					</div><!-- col-end -->
				</div>
				<!-- /row -->
				<div class="row">
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card shadow-none">
							<div class="card-body text-center pricing bg-primary rounded-5">
								<div class="card-category tx-22">Basic</div>
								<div class="display-4 my-4 font-weight-semibold text-white">$10</div>
								<ul class="list-unstyled leading-loose tx-white-8">
									<li><strong>2 </strong> FreeDomain Name</li>
									<li><strong>2</strong> One-Click Apps</li>
									<li><strong>1</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarntee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-5">
									<a href="#" class="btn btn-lg btn-white btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card shadow-none">
							<div class="card-body text-center  pricing bg-primary rounded-5">
								<div class="card-category tx-22">Premium</div>
								<div class="display-4 my-4 font-weight-semibold text-white">$49</div>
								<ul class="list-unstyled leading-loose tx-white-8">
									<li><strong>3 </strong> FreeDomain Name</li>
									<li><strong>5</strong> One-Click Apps</li>
									<li><strong>3</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarntee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-5">
									<a href="#" class="btn btn-lg btn-white btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card shadow-none">
							<div class="card-body text-center pricing bg-danger rounded-5">
								<div class="card-category font-weight-semibold tx-22">Enterprise</div>
								<div class="display-4 my-4 font-weight-semibold text-white">$99</div>
								<ul class="list-unstyled leading-loose tx-white-8">
									<li><strong>10 </strong> FreeDomain Name</li>
									<li><strong>10</strong> One-Click Apps</li>
									<li><strong>8</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarntee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-5">
									<a href="#" class="btn btn-lg btn-white btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card shadow-none">
							<div class="card-body text-center  pricing bg-primary rounded-5">
								<div class="card-category tx-22">Unlimited</div>
								<div class="display-4 my-4 font-weight-semibold text-white">$139</div>
								<ul class="list-unstyled leading-loose tx-white-8">
									<li><strong>12 </strong> FreeDomain Name</li>
									<li><strong>10</strong> One-Click Apps</li>
									<li><strong>6</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarntee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-5">
									<a href="#" class="btn btn-lg btn-white btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

@endsection('content')

@section('scripts') 

		<!--Internal  Chart.bundle js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

@endsection