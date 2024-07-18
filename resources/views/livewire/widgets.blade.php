@extends('layouts.app')

@section('styles')
@endsection

@section('content')

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Widgets</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Widgets</li>
							</ol>
						</nav>
					</div>

				@endsection('breadcrumb')

				@section('content')

				<!-- Row -->
				<div class="row row-sm">
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card card--donut mg-b-20">
							<div class="card-header pd-t-30">
								<h6 class="card-title mg-b-5-f">Business</h6>
								<p class="mg-b-0 tx-12 text-muted">Lorem Ipsum generators on the Internet as necessary <a href="">Learn more</a></p>
							</div>
							<div class="card-body pt-0">
								<div class="progress progress-sm mt-2">
									<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-primary wd-70p" role="progressbar"></div>
								</div>
								<small class="mb-0 text-muted">Monthly<span class="float-right text-muted">70%</span></small>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card card--donut mg-b-20">
							<div class="card-header pd-t-30">
								<h6 class="card-title mg-b-5-f">Shares</h6>
								<p class="mg-b-0 tx-12 text-muted">Lorem Ipsum generators on the Internet as necessary <a href="">Learn more</a></p>
							</div>
							<div class="card-body pt-0">
								<div class="progress progress-sm mt-2">
									<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar bg-success wd-70p" role="progressbar"></div>
								</div>
								<small class="mb-0 text-muted">Monthly<span class="float-right text-muted">65%</span></small>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card card--donut mg-b-20">
							<div class="card-header pd-t-30">
								<h6 class="card-title mg-b-5-f">Employees</h6>
								<p class="mg-b-0 tx-12 text-muted">Lorem Ipsum generators on the Internet as necessary <a href="">Learn more</a></p>
							</div>
							<div class="card-body pt-0">
								<div class="progress progress-sm mt-2">
									<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress-bar bg-danger wd-70p" role="progressbar"></div>
								</div>
								<small class="mb-0 text-muted">Monthly<span class="float-right text-muted">40%</span></small>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card card--donut mg-b-20">
							<div class="card-header pd-t-30">
								<h6 class="card-title mg-b-5-f">Downloads</h6>
								<p class="mg-b-0 tx-12 text-muted">Lorem Ipsum generators on the Internet as necessary <a href="">Learn more</a></p>
							</div>
							<div class="card-body pt-0">
								<div class="progress progress-sm mt-2">
									<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar bg-info wd-70p" role="progressbar"></div>
								</div>
								<small class="mb-0 text-muted">Monthly<span class="float-right text-muted">60%</span></small>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-12 col-xl-4">
						<div class="card stats">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="card-title mb-2">New Orders</h4>
										<h4 class="font-weight-bold tx-22 mb-1"><span>$</span>23,342</h4>
										<label class="tx-12 text-muted"><span class="text-danger">12.3% </span>higher vs previous month</label>
									</div>
									<div class="chart-circle chart-circle-md ml-auto mr-0" data-value="0.75" data-thickness="5" data-color="#5066e0"><canvas width="140" height="140"></canvas>
										<div class="chart-circle-value"><div class="tx-20 font-weight-bold">75%</div></div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="">
									<div class="row">
										<div class="col-6">
											<h4 class="font-weight-bold">$16,760</h4><span class="font-weight-semibold">Total Expensive</span>	<br>
											<small class="text-muted"><span class="tx-danger font-weight-semibold">63%</span> of your goals</small>
										</div>
										<div class="col-6">
											<h4 class="font-weight-bold">9,912</h4><span class="font-weight-semibold">New Leads</span><br>
											<small class="text-muted"><span class="tx-danger font-weight-semibold">23%</span> of your goals</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-12 col-xl-4">
						<div class="card stats">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="card-title mb-2">Product Sale</h4>
										<h4 class="font-weight-bold tx-22 mb-1"><span>$</span>645,32.70</h4>
										<label class="tx-12 text-muted"><span class="text-success">12.5% </span>higher vs previous month</label>
									</div>
									<div class="chart-circle chart-circle-md ml-auto mr-0" data-value="0.65" data-thickness="5" data-color="#00d48f"><canvas width="140" height="140"></canvas>
										<div class="chart-circle-value"><div class="tx-20 font-weight-bold">65%</div></div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<h4 class="font-weight-bold">$65,432</h4><span class="font-weight-semibold">Total Expensive</span><br>
										<small class="text-muted"><span class="tx-success font-weight-semibold">80% </span> of your goals</small>
									</div>
									<div class="col-6">
										<h4 class="font-weight-bold">8,765</h4><span class="font-weight-semibold">New Leads</span><br>
										<small class="text-muted"><span class="tx-success font-weight-semibold">50%</span> of your goals</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-12 col-xl-4">
						<div class="card stats">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="card-title mb-2">Total Revenue</h4>
										<h4 class="font-weight-bold tx-22 mb-1"><span>$</span>63,542</h4>
										<label class="tx-12 text-muted"><span class="text-danger">12.3% </span>higher vs previous month</label>
									</div>
									<div class="chart-circle chart-circle-md ml-auto mr-0" data-value="0.85" data-thickness="5" data-color="#fa5c7c"><canvas width="140" height="140"></canvas>
										<div class="chart-circle-value"><div class="tx-20 font-weight-bold">85%</div></div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="">
									<div class="row">
										<div class="col-6">
											<h4 class="font-weight-bold">$16,760</h4><span class="font-weight-semibold">Total Expensive</span>	<br>
											<small class="text-muted"><span class="tx-danger font-weight-semibold">63%</span> of your goals</small>
										</div>
										<div class="col-6">
											<h4 class="font-weight-bold">9,912</h4><span class="font-weight-semibold">New Leads</span><br>
											<small class="text-muted"><span class="tx-danger font-weight-semibold">23%</span> of your goals</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">App Views</div>
										<div class="h3 mt-2 mb-2"><b>19.89K</b></div><span class="text-success tx-13 ml-2">(+25%)</span>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="fe fe-eye project bg-light text-primary"></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<div class="progress progress-sm h-1 mb-1">
										<div class="progress-bar bg-primary wd-80 " role="progressbar"></div>
									</div>
									<small class="mb-0 text-muted">Monthly<span class="float-right text-muted">60%</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">New Users</div>
										<div class="h3 mt-2 mb-2"><b>692</b></div><span class="text-success tx-13 ml-2">(+15%)</span>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="fe fe-users project bg-light text-primary"></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<div class="progress progress-sm h-1 mb-1">
										<div class="progress-bar bg-primary wd-50 " role="progressbar"></div>
									</div>
									<small class="mb-0 text-muted">Monthly<span class="float-right text-muted">50%</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">Churned Users</div>
										<div class="h3 mt-2 mb-2"><b>286</b></div><span class="text-success tx-13 ml-2">(+08%)</span>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="ti-pulse project bg-light text-primary"></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<div class="progress progress-sm h-1 mb-1">
										<div class="progress-bar bg-primary wd-30" role="progressbar"></div>
									</div>
									<small class="mb-0 text-muted">Monthly<span class="float-right text-muted">30%</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">Total Revenue</div>
										<div class="h3 mt-2 mb-2"><b>$2.98M</b></div><span class="text-success tx-13 ml-2">(+35%)</span>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="ti-bar-chart-alt project bg-light text-primary"></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<div class="progress progress-sm h-1 mb-1">
										<div class="progress-bar bg-primary wd-25 " role="progressbar"></div>
									</div>
									<small class="mb-0 text-muted">Monthly<span class="float-right text-muted">25%</span></small>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="card-order">
									<h6 class="mb-2">New users</h6>
									<h2 class="text-right "><i class="mdi mdi-account-multiple icon-size float-left text-primary text-primary-shadow"></i><span>3,672</span></h2>
									<p class="mb-0">Monthly users<span class="float-right">50%</span></p>
								</div>
							</div>
						</div>
					</div><!-- COL END -->
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card ">
							<div class="card-body">
								<div class="card-widget">
									<h6 class="mb-2">Total Tax</h6>
									<h2 class="text-right"><i class="mdi mdi-cube icon-size float-left text-success text-success-shadow"></i><span>$89,265</span></h2>
									<p class="mb-0">Monthly Income<span class="float-right">$7,893</span></p>
								</div>
							</div>
						</div>
					</div><!-- COL END -->
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="card-widget">
									<h6 class="mb-2">Total Profit</h6>
									<h2 class="text-right"><i class="icon-size mdi mdi-poll-box   float-left text-warning text-warning-shadow"></i><span>$23,987</span></h2>
									<p class="mb-0">Monthly Profit<span class="float-right">$4,678</span></p>
								</div>
							</div>
						</div>
					</div><!-- COL END -->
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card ">
							<div class="card-body">
								<div class="card-widget">
									<h6 class="mb-2">Total Sales</h6>
									<h2 class="text-right"><i class="fa fa-cart-plus icon-size float-left text-danger text-danger-shadow"></i><span>46,486</span></h2>
									<p class="mb-0">Monthly Sales<span class="float-right">3,756</span></p>
								</div>
							</div>
						</div>
					</div><!-- COL END -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body ">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-bar-chart project bg-light mx-auto text-primary"></i>
								</div>
								<h6 class="mb-1 text-muted">Total Revenue</h6>
								<h3 class="font-weight-semibold">$125.465</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body ">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-pie-chart project bg-light mx-auto text-primary"></i>
								</div>
								<h6 class="mb-1 text-muted">Marketing Spend</h6>
								<h3 class="font-weight-semibold">$75.045</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-pulse  project bg-light mx-auto text-primary"></i>
								</div>
								<h6 class="mb-1 text-muted">Total Profit</h6>
								<h3 class="font-weight-semibold">$46.352</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body ">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-stats-up project bg-light mx-auto text-primary"></i>
								</div>
								<h6 class="mb-1 text-muted">Total Investiment</h6>
								<h3 class="font-weight-semibold">62%</h3>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body ">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-bar-chart project bg-primary-transparent mx-auto text-primary "></i>
								</div>
								<h6 class="mb-1 text-muted">Total Revenue</h6>
								<h3 class="font-weight-semibold">$125.465</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body ">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-pie-chart project bg-pink-transparent mx-auto text-pink "></i>
								</div>
								<h6 class="mb-1 text-muted">Marketing Spend</h6>
								<h3 class="font-weight-semibold">$75.045</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-pulse  project bg-teal-transparent mx-auto text-teal "></i>
								</div>
								<h6 class="mb-1 text-muted">Total Profit</h6>
								<h3 class="font-weight-semibold">$46.352</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body ">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-stats-up project bg-success-transparent mx-auto text-success "></i>
								</div>
								<h6 class="mb-1 text-muted">Total Investiment</h6>
								<h3 class="font-weight-semibold">62%</h3>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="plan-card text-center">
									<i class="fas fa-share-alt text-primary plan-icon"></i>
									<h6 class="text-drak text-uppercase mt-2">Total Shares</h6>
									<h2 class="mb-2">678</h2>
									<span class="badge badge-success"> +89% </span>
									<span class="text-muted">From previous month</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="plan-card text-center">
									<i class="fas fa-comments plan-icon text-primary"></i>
									<h6 class="text-drak text-uppercase mt-2">Total Comments</h6>
									<h2 class="mb-2">493</h2>
									<span class="badge badge-danger"> +76% </span>
									<span class="text-muted">From previous month</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="plan-card text-center">
									<i class="fas fa-thumbs-up plan-icon text-primary"></i>
									<h6 class="text-drak text-uppercase mt-2">Total Likes</h6>
									<h2 class="mb-2">3,287</h2>
									<span class="badge badge-success"> +18% </span>
									<span class="text-muted">From previous month</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="plan-card text-center">
									<i class="fas fa-eye plan-icon text-primary"></i>
									<h6 class="text-drak text-uppercase mt-2">Total Views</h6>
									<h2 class="mb-2">279</h2>
									<span class="badge badge-danger"> +5% </span>
									<span class="text-muted">From previous month</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- Row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-left">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3">Real time users</h4>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1 font-weight-bold">154<span class="text-success tx-13 ml-2">(+0.98%)</span></h4>
										<p class="mb-2 tx-12 text-muted">Overview of Last month</p>
									</div>
									<div class="card-chart bg-primary-transparent brround ml-auto mt-0">
										<i class="typcn typcn-group-outline text-primary tx-24"></i>
									</div>
								</div>

								<div class="progress progress-sm mt-2">
									<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-primary wd-70p" role="progressbar"></div>
								</div>
								<small class="mb-0  text-muted">Monthly<span class="float-right text-muted">70%</span></small>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-left">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3">Total visits</h4>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1 font-weight-bold">5274<span class="text-danger tx-13 ml-2">(-12.45%)</span></h4>
										<p class="mb-2 tx-12 text-muted">Overview of Last month</p>
									</div>
									<div class="card-chart bg-pink-transparent brround ml-auto mt-0">
										<i class="typcn typcn-chart-line-outline text-pink tx-24"></i>
									</div>
								</div>

								<div class="progress progress-sm mt-2">
									<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-pink wd-50p" role="progressbar"></div>
								</div>
								<small class="mb-0  text-muted">Monthly<span class="float-right text-muted">50%</span></small>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-left">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3">Bounce Rate</h4>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1   font-weight-bold">76.3%<span class="text-success tx-13 ml-2">(+13.52%)</span></h4>
										<p class="mb-2 tx-12 text-muted">Overview of Last month</p>
									</div>
									<div class="card-chart bg-teal-transparent brround ml-auto mt-0">
										<i class="typcn typcn-chart-bar-outline text-teal tx-20"></i>
									</div>
								</div>

								<div class="progress progress-sm mt-2">
									<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-teal wd-60p" role="progressbar"></div>
								</div>
								<small class="mb-0  text-muted">Monthly<span class="float-right text-muted">60%</span></small>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-left">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3">Visits Duration</h4>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1 font-weight-bold">5m 24s<span class="text-success tx-13 ml-2">(+19.5%)</span></h4>
										<p class="mb-2 tx-12 text-muted">Overview of Last month</p>
									</div>
									<div class="card-chart bg-purple-transparent brround ml-auto mt-0">
										<i class="typcn typcn-time  text-purple tx-24"></i>
									</div>
								</div>

								<div class="progress progress-sm mt-2">
									<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-purple wd-40p" role="progressbar"></div>
								</div>
								<small class="mb-0  text-muted">Monthly<span class="float-right text-muted">40%</span></small>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12 col-xl-4">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<h4 class="card-title">Active Projects</h4>
									<i class="fe fe-more-vertical"></i>
								</div>
								<p class="card-description mb-1">What're people doing right now</p>
								<div class="list d-flex align-items-center border-bottom py-3">
									<div class="avatar brround d-block cover-image" data-image-src="{{URL::asset('assets/img/faces/5.jpg')}}">
										<span class="avatar-status bg-green"></span>
									</div>
									<div class="wrapper w-100 ml-3">
										<p class="mb-0">
										<b>Lilly </b>posted in Website</p>
										<div class="d-sm-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<p class="mb-0">Awesome websites!</p>
											</div>
											<small class="text-muted ml-auto">2 hours ago</small>
										</div>
									</div>
								</div>
								<div class="list d-flex align-items-center border-bottom py-3">
									<div class="avatar brround d-block cover-image" data-image-src="{{URL::asset('assets/img/faces/1.jpg')}}">
										<span class="avatar-status bg-green"></span>
									</div>
									<div class="wrapper w-100 ml-3">
										<p class="mb-0">
										<b>Thomos</b>posted in Material</p>
										<div class="d-sm-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<p class="mb-0">Awesome websites!</p>
											</div>
											<small class="text-muted ml-auto">3 hours ago</small>
										</div>
									</div>
								</div>
								<div class="list d-flex align-items-center border-bottom py-3">
									<div class="avatar brround d-block cover-image" data-image-src="{{URL::asset('assets/img/faces/14.jpg')}}">
										<span class="avatar-status bg-green"></span>
									</div>
									<div class="wrapper w-100 ml-3">
										<p class="mb-0">
										<b>Marry cott </b>posted in photo</p>
										<div class="d-sm-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<p class="mb-0">That's Great!</p>
											</div>
											<small class="text-muted ml-auto">1 hours ago</small>
										</div>
									</div>
								</div>
								<div class="list d-flex align-items-center pt-3">
									<div class="avatar brround d-block cover-image" data-image-src="{{URL::asset('assets/img/faces/4.jpg')}}">
										<span class="avatar-status bg-green"></span>
									</div>
									<div class="wrapper w-100 ml-3">
										<p class="mb-0">
										<b>John </b>posted in Status</p>
										<div class="d-sm-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<p class="mb-0">Awesome websites!</p>
											</div>
											<small class="text-muted ml-auto">1 hours ago</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4">
						<div class="card">
							<div class="card-header pd-t-30">
								<h3 class="card-title">Busines Team</h3>
							</div>
							<div class="card-body">
								<div>
									<div class="chips">
										<div class="team">
											<a href="javascript:void(0)" class="chip">
												<span class="avatar cover-image" data-image-src="{{URL::asset('assets/img/faces/2.jpg')}}"></span> Victoria
											</a>
											<i class="fab fa-facebook text-primary" aria-hidden="true"></i>
											<i class="fab fa-twitter text-primary" aria-hidden="true"></i>
											<i class="fas fa-envelope text-primary" aria-hidden="true"></i>
											<p>On the other hand, we denounce with right indignation and dislike imagesralized</p>
										</div>
										<div class="team">
											<a href="javascript:void(0)" class="chip">
												<span class="avatar cover-image" data-image-src="{{URL::asset('assets/img/faces/3.jpg')}}"></span> Nathan
											</a>
											<i class="fab fa-facebook text-primary" aria-hidden="true"></i>
											<i class="fab fa-twitter text-primary" aria-hidden="true"></i>
											<i class="fas fa-envelope text-primary" aria-hidden="true"></i>
											<p>On the other hand, we denounce with right indignation and dislike imagesralized</p>
										</div>
										<div class="team">
											<a href="javascript:void(0)" class="chip">
												<span class="avatar cover-image" data-image-src="{{URL::asset('assets/img/faces/4.jpg')}}"></span> Alice
											</a>
											<i class="fab fa-facebook text-primary" aria-hidden="true"></i>
											<i class="fab fa-twitter text-primary" aria-hidden="true"></i>
											<i class="fas fa-envelope text-primary" aria-hidden="true"></i>
											<p class="mb-0">On the other hand, we denounce with right indignation and dislike imagesralized</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4">
						<div class="card overflow-hidden">
							<div class="card-header">
								<h3 class="card-title">Top Countries</h3>
							</div>
							<div class="card-body p-0">
								<table class="table card-table country-table mb-0">
									<tbody>
										<tr>
											<td class="w-1"><img src="{{URL::asset('assets/img/flags/us_flag.jpg')}}" alt="flags" class="flag wd-30 ht-20 flag-us mt-1"></td>
											<td>USA
												<div class="progress progress-sm mt-1">
													<div class="progress-bar bg-primary wd-80"></div>
												</div>
											</td>
											<td class="w-1 text-right"><span class="text-muted">$5235</span></td>
										</tr>
										<tr>
											<td class="w-1"><img src="{{URL::asset('assets/img/flags/spain_flag.jpg')}}" alt="flags" class="flag wd-30 ht-20 flag-us mt-1"></td>
											<td>Spain
												<div class="progress progress-sm mt-1">
													<div class="progress-bar bg-pink wd-60"></div>
												</div>
											</td>
											<td class="text-right"><span class="text-muted">$3214</span></td>
										</tr>
										<tr>
											<td class="w-1"><img src="{{URL::asset('assets/img/flags/germany_flag.jpg')}}" alt="flags" class="flag wd-30 ht-20 flag-us mt-1"></td>
											<td>Germany
												<div class="progress progress-sm mt-1">
													<div class="progress-bar bg-success wd-30"></div>
												</div>
											</td>
											<td class="text-right"><span class="text-muted">$4123</span></td>
										</tr>
										<tr>
											<td class="w-1"><img src="{{URL::asset('assets/img/flags/russia_flag.jpg')}}" alt="flags" class="flag wd-30 ht-20 flag-us mt-1"></td>
											<td>Russia
												<div class="progress progress-sm mt-1">
													<div class="progress-bar bg-warning wd-50"></div>
												</div>
											</td>
											<td class="text-right"><span class="text-muted">$1543</span></td>
										</tr>
										<tr>
											<td class="w-1"><img src="{{URL::asset('assets/img/flags/italy_flag.jpg')}}" alt="flags" class="flag wd-30 ht-20 flag-us mt-1"></td>
											<td>Italy
												<div class="progress progress-sm mt-1">
													<div class="progress-bar bg-teal wd-40"></div>
												</div>
											</td>
											<td class="text-right"><span class="text-muted ">$1543</span></td>
										</tr>
										<tr>
											<td class="w-1"><img src="{{URL::asset('assets/img/flags/french_flag.jpg')}}" alt="flags" class="flag wd-30 ht-20 flag-us mt-1"></td>
											<td>French
												<div class="progress progress-sm mt-1">
													<div class="progress-bar bg-teal wd-40"></div>
												</div>
											</td>
											<td class="text-right"><span class="text-muted ">$1543</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-10">Overall Rating</h4>
								</div>
								<p class="tx-12 text-muted mb-0">Opinion of a customer on the product in the form of ratings 5-star rating. <a href="">Learn more</a></p>
							</div><!-- card-header -->
							<div class="card-body pd-y-7">
								<div class="d-flex align-items-baseline">
									<h1 class="tx-30 mg-b-5 mg-r-5">4.8</h1>
									<p class="tx-11  mg-b-0"><span class="tx-medium tx-success">1.6% <i class="icon ion-md-arrow-up"></i></span></p>
								</div>
								<h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 tx-color-02 mg-b-15">Overall product rating by the customers.</h6>
								<table class="table table-borderless mt-3 rating-table">
									<tbody>
										<tr>
											<td class="text-gray"><small class="mr-1">1</small></td>
											<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
											<td class="w-100">
												<div class="progress mt-2 ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-20p bg-danger" role="progressbar"></div>
												</div>
											</td>
											<td class=""><small class="text-gray">7</small></td>
										</tr>
										<tr>
											<td class="text-gray"><small class="mr-1">2</small></td>
											<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
											<td class="w-100">
												<div class="progress mt-2 ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-30p bg-primary" role="progressbar"></div>
												</div>
											</td>
											<td class=""><small class="text-gray">27</small></td>
										</tr>
										<tr>
											<td class="text-gray"><small class="mr-1">3</small></td>
											<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
											<td class="w-100">
												<div class="progress mt-2 ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-60p bg-warning" role="progressbar"></div>
												</div>
											</td>
											<td class=""><small class="text-gray">64</small></td>
										</tr>
										<tr>
											<td class="text-gray"><small class="mr-1">4</small></td>
											<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
											<td class="w-100">
												<div class="progress mt-2 ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-70p bg-teal" role="progressbar"></div>
												</div>
											</td>
											<td class=""><small class="text-gray">93</small></td>
										</tr>
										<tr>
											<td class="text-gray"><small class="mr-1">5</small></td>
											<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
											<td class="w-100">
												<div class="progress mt-2 ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-80p bg-success" role="progressbar"></div>
												</div>
											</td>
											<td class=""><small class="text-gray">82</small></td>
										</tr>
									</tbody>
								</table>
								<div class="wrapper d-flex justify-content-center image-group pb-3">
									<img src="{{URL::asset('assets/img/faces/1.jpg')}}" alt="profile" class="img-xs rounded-circle">
									<img src="{{URL::asset('assets/img/faces/2.jpg')}}" alt="profile" class="img-xs rounded-circle">
									<img src="{{URL::asset('assets/img/faces/13.jpg')}}" alt="profile" class="img-xs rounded-circle">
									<img src="{{URL::asset('assets/img/faces/14.jpg')}}" alt="profile" class="img-xs rounded-circle">
									<img src="{{URL::asset('assets/img/faces/5.jpg')}}" alt="profile" class="img-xs rounded-circle">
									<img src="{{URL::asset('assets/img/faces/16.jpg')}}" alt="profile" class="img-xs rounded-circle">
								</div>
							</div><!-- card-body -->
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
						<div class="card order-list">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-10">Order Activity</h4>
								</div>
								<p class="tx-12 text-muted mb-3">Order Activity is ecommerce platforms to track the orders placed on their stores <a href="">Learn more</a></p>
								<ul class="list list-noborders pb-0 mb-0">
									<li class="list-item">
										<img class="img-sm rounded-circle bg-warning d-flex align-items-center justify-content-center text-white" src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="Profile Image">
										<div class=" ml-3">
											<h6 class="mb-1 font-weight-medium">Lottie Arnold</h6>
											<p class="mb-0 text-muted tx-13">#PRD-10250</p>
										</div>
										<div class="ml-auto d-flex">
											<img class="img-sm mr-1" src="{{URL::asset('assets/img/ecommerce/03.jpg')}}" alt="thumb images">
											<img class="img-sm" src="{{URL::asset('assets/img/ecommerce/08.jpg')}}" alt="thumb images">
										</div>
									</li>
									<li class="list-item">
										<img class="img-sm rounded-circle bg-warning d-flex align-items-center justify-content-center text-white" src="{{URL::asset('assets/img/faces/9.jpg')}}" alt="Profile Image">
										<div class=" ml-3">
											<h6 class="mb-1 font-weight-medium">Alan Macedo</h6>
											<p class="mb-0 tx-13 text-muted">#PRD-10251</p>
										</div>
										<div class="ml-auto d-flex">
											<img class="img-sm mr-1" src="{{URL::asset('assets/img/ecommerce/04.jpg')}}" alt="thumb images">
											<img class="img-sm" src="{{URL::asset('assets/img/ecommerce/05.jpg')}}" alt="thumb images">
										</div>
									</li>
									<li class="list-item">
										<img class="img-sm rounded-circle bg-warning d-flex align-items-center justify-content-center text-white" src="{{URL::asset('assets/img/faces/5.jpg')}}" alt="Profile Image">
										<div class=" ml-3">
											<h6 class="mb-1 font-weight-medium">Bruce Tran</h6>
											<p class="mb-0 text-muted tx-13">#PRD-10252</p>
										</div>
										<div class="ml-auto d-flex">
											<img class="img-sm mr-1" src="{{URL::asset('assets/img/ecommerce/06.jpg')}}" alt="thumb images">
											<img class="img-sm" src="{{URL::asset('assets/img/ecommerce/07.jpg')}}" alt="thumb images">
										</div>
									</li>
									<li class="list-item">
										<img class="img-sm rounded-circle bg-warning d-flex align-items-center justify-content-center text-white" src="{{URL::asset('assets/img/faces/12.jpg')}}" alt="Profile Image">
										<div class=" ml-3">
											<h6 class="mb-1 font-weight-medium">Mina Harper</h6>
											<p class="mb-0 text-muted tx-13">#PRD-10253</p>
										</div>
										<div class="ml-auto d-flex">
											<img class="img-sm mr-1" src="{{URL::asset('assets/img/ecommerce/08.jpg')}}" alt="thumb images">
											<img class="img-sm" src="{{URL::asset('assets/img/ecommerce/09.jpg')}}" alt="thumb images">
										</div>
									</li>
									<li class="list-item pb-0 mb-0">
										<img class="img-sm rounded-circle bg-warning d-flex align-items-center justify-content-center text-white" src="{{URL::asset('assets/img/faces/8.jpg')}}" alt="Profile Image">
										<div class=" ml-3">
											<h6 class="mb-1 font-weight-medium">Maria Quinn</h6>
											<p class="mb-0 text-muted tx-13">#PRD-10254</p>
										</div>
										<div class="ml-auto d-flex">
											<img class="img-sm mr-1" src="{{URL::asset('assets/img/ecommerce/02.jpg')}}" alt="thumb images">
											<img class="img-sm" src="{{URL::asset('assets/img/ecommerce/01.jpg')}}" alt="thumb images">
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4 col-md-6 col-sm-12">
						<div class="card overflow-hidden latest-tasks">
							<div class="">
								<div class="d-flex justify-content-between pl-4 pt-4 pr-4">
									<h4 class="card-title mg-b-10">Latest Task</h4>
								</div>
								<div class="">
									<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
										<li class="nav-item">
											<a class="nav-link active show" data-toggle="tab" href="#tasktab-1" role="tab" aria-selected="false">
												Today
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tasktab-2" role="tab" aria-selected="false">
												Week
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tasktab-3" role="tab" aria-selected="true">
												Month
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body pt-3">
								<div class="tab-content">
									<div class="tab-pane fade active show" id="tasktab-1" role="tabpanel">
										<div class="">
											<div class="tasks">
												<div class=" task-line primary">
													<a href="#" class="span">
														XML Import & Export
													</a>
													<div class="time">
														12:00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input checked type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line pink">
													<a href="#" class="span">
														Database Optimization
													</a>
													<div class="time">
														02:13 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line success">
													<a href="#" class="span">
														Create Wireframes
													</a>
													<div class="time">
														06:20 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line warning">
													<a href="#" class="span">
														Develop MVP
													</a>
													<div class="time">
														10: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks mb-0">
												<div class="task-line teal">
													<a href="#" class="span">
														Design Evommerce
													</a>
													<div class="time">
														10: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tasktab-2" role="tabpanel">
										<div class="">
											<div class="tasks">
												<div class=" task-line teal">
													<a href="#" class="span">
														Management meeting
													</a>
													<div class="time">
														06:30 AM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line danger">
													<a href="#" class="span">
														Connect API to pages
													</a>
													<div class="time">
														08:00 AM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line purple">
													<a href="#" class="span">
														Icon change in Redesign App
													</a>
													<div class="time">
														11:20 AM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line warning">
													<a href="#" class="span">
														Test new features in tablets
													</a>
													<div class="time">
														02: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line success">
													<a href="#" class="span">
														Design Logo
													</a>
													<div class="time">
														04: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tasktab-3" role="tabpanel">
										<div class="">
											<div class="tasks">
												<div class=" task-line info">
													<a href="#" class="span">
														Design a Landing Page
													</a>
													<div class="time">
														06:12 AM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line danger">
													<a href="#" class="span">
														Food Delivery Mobile Application
													</a>
													<div class="time">
														3:00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line warning">
													<a href="#" class="span">
														Export Database values
													</a>
													<div class="time">
														03:20 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line pink">
													<a href="#" class="span">
														Write Simple Python Script
													</a>
													<div class="time">
														04: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line success">
													<a href="#" class="span">
														Write Simple Anugalr Program
													</a>
													<div class="time">
														05: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-6 col-xl-4 col-sm-12">
						<div class="card">
							<div class="card-header pb-0 pd-t-30">
								<div class="justify-content-between">
									<h4 class="card-title">Latest Ratings and Reviews</h4>
									<p class="tx-12 text-muted mb-0">A review is an evaluation of a publication, service, or company .<a href="">Learn more</a></p>
								</div>
							</div>

							<div class="rating-scroll ps ps--active-y">
								<div class="pl-3 pr-3 py-3 border-bottom">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{URL::asset('assets/img/faces/5.jpg')}}">
											</a>
										</div>
										<div class="media-body">
											<div class="d-flex">
												<h6 class="mt-0 mb-0 font-weight-semibold ">Joanne Scott</h6>
												<span class="tx-12 ml-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
												</span>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">long established fact..</p>
												<small class="ml-auto text-right">5 reviews</small>
											</div>

										</div>
									</div>
								</div>
								<div class="pl-3 pr-3 py-3 border-bottom">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{URL::asset('assets/img/faces/9.jpg')}}">
											</a>
										</div>
										<div class="media-body">
											<div class="d-flex">
												<h6 class="mt-0 mb-0 font-weight-semibold ">Cristobal Sharp</h6>
												<span class="tx-12 ml-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">The point of using Lorem..</p>
												<small class="ml-auto text-right">5 reviews</small>
											</div>
										</div>
									</div>
								</div>
								<div class="pl-3 pr-3 py-3 border-bottom">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{URL::asset('assets/img/faces/4.jpg')}}">
											</a>
										</div>
										<div class="media-body">
											<div class="d-flex">
												<h6 class="mt-0 mb-0 font-weight-semibold ">Velma Wellons </h6>
												<span class="tx-12 ml-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
												</span>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">Various versions have..</p>
												<small class="ml-auto text-right">5 reviews</small>
											</div>

										</div>
									</div>
								</div>
								<div class="pl-3 pr-3 py-3 border-bottom">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{URL::asset('assets/img/faces/7.jpg')}}">
											</a>
										</div>
										<div class="media-body">
											<div class="d-flex">
												<h6 class="mt-0 mb-0 font-weight-semibold ">Cathie Madonna </h6>
												<span class="tx-12 ml-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">long established fact..</p>
												<small class="ml-auto text-right">5 reviews</small>
											</div>

										</div>
									</div>
								</div>
								<div class="pl-3 pr-3 py-3 border-bottom">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{URL::asset('assets/img/faces/12.jpg')}}">
											</a>
										</div>
										<div class="media-body">
											<div class="d-flex">
												<h6 class="mt-0 mb-0 font-weight-semibold ">Aurelio Dahmer </h6>
												<span class="tx-12 ml-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
												</span>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">Ut enim ad minim veniam..</p>
												<small class="ml-auto text-right">5 reviews</small>
											</div>

										</div>
									</div>
								</div>
								<div class="pl-3 pr-3 py-3 border-bottom">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{URL::asset('assets/img/faces/13.jpg')}}">
											</a>
										</div>
										<div class="media-body">
											<div class="d-flex">
												<h6 class="mt-0 mb-1 font-weight-semibold ">Cyrus Macarthur </h6>
												<span class="tx-12 ml-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">variations of passages..</p>
												<small class="ml-auto text-right">5 reviews</small>
											</div>

										</div>
									</div>
								</div>
								<div class="pl-3 pr-3 py-3 border-bottom">
									<div class="media mt-0">
										<div class="d-flex mr-3">
											<a href="#">
												<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{URL::asset('assets/img/faces/2.jpg')}}">
											</a>
										</div>
										<div class="media-body">
											<div class="d-flex">
												<h6 class="mt-0 mb-1 font-weight-semibold ">Bernardo Sykes </h6>
												<span class="tx-12 ml-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
											</div>
											<div class="d-flex">
												<p class="tx-12 text-muted mb-0">you are going to use..</p>
												<small class="ml-auto text-right">5 reviews</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card">
							<div class="card-header bg-transparent pd-t-30">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-10">Sessions by Countries</h4>
								</div>
								<p class="tx-12 text-muted mb-0">session by country mean that the user is from the stated country or that the session is originating in the stated country. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<ul class="sales-session mb-0">
									<li>
										<div class="d-flex justify-content-between">
											<h6>1. United States </h6>
											<p class="font-weight-semibold mb-2">$273.12 <span class="text-muted font-weight-normal">(2.17%)</span></p>
										</div>
										<div class="progress  ht-5">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-60p bg-primary" role="progressbar"></div>
										</div>
									</li>
									<li>
										<div class="d-flex justify-content-between">
											<h6>2. United kingdom</h6>
											<p class="font-weight-semibold mb-2">$423.10 <span class="text-muted font-weight-normal">(12.43%)</span></p>
										</div>
										<div class="progress  ht-5">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-70p bg-info" role="progressbar"></div>
										</div>
									</li>
									<li>
									<div class="d-flex justify-content-between">
										<h6>3. Australia</h6>
										<p class="font-weight-semibold mb-2">$547.18 <span class="text-muted font-weight-normal">(3.14%)</span></p>
									</div>
									<div class="progress  ht-5">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar wd-60p bg-danger" role="progressbar"></div>
										</div>
									</li>
									<li>
										<div class="d-flex justify-content-between">
											<h6>4. Canada</h6>
											<p class="font-weight-semibold mb-2">$728.32 <span class="text-muted font-weight-normal">(7.23%)</span></p>
										</div>
										<div class="progress  ht-5">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-50p bg-warning" role="progressbar"></div>
										</div>
									</li>
									<li>
										<div class="d-flex justify-content-between">
											<h6>5. Russia</h6>
											<p class="font-weight-semibold mb-2">$843.19 <span class="text-muted font-weight-normal">(1.83%)</span></p>
										</div>
										<div class="progress mb-0 ht-5">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-40p bg-success" role="progressbar"></div>
										</div>
									</li>
									<li class="mb-0 pb-1">
										<div class="d-flex justify-content-between">
											<h6>6. Japan</h6>
											<p class="font-weight-semibold mb-2">$562.19 <span class="text-muted font-weight-normal">(1.35%)</span></p>
										</div>
										<div class="progress mb-0 ht-5">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-60p bg-purple" role="progressbar"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-6 col-xl-4 col-sm-12">
						<div class="card">
							<div class="card-header pd-t-30">
								<div class="d-flex justify-content-between">
									<h4 class="card-title">Browser Usage</h4>
								</div>
								<p class="tx-12 text-muted mb-0">Tells you where your visitors originated from, such as search engines, social networks or website referrals. <a href="">Learn more</a></p>
							</div><!-- card-header -->
							<div class="card-body p-0">
								<div class="browser-stats">
									<div class="d-flex align-items-center item  border-bottom">
										<div class="d-flex">
											<img src="{{URL::asset('assets/img/svgicons/chrome.svg')}}" alt="img" class="ht-30 wd-30 mr-2">
											<div class="">
												<h6 class="">Chrome</h6>
												<span class="sub-text">Mozilla Foundation, Inc.</span>
											</div>
										</div>
										<div class="ml-auto my-auto">
											<div class="d-flex">
												<span class="mr-4 my-auto">35,502</span>
												<span class="text-success fs-15"><i class="fe fe-arrow-up"></i>12.75%</span>
											</div>
										</div>
									</div>
									<div class="d-flex align-items-center item  border-bottom">
										<div class="d-flex">
											<img src="{{URL::asset('assets/img/svgicons/opera.svg')}}" alt="img" class="ht-30 wd-30 mr-2">
											<div class="">
												<h6 class="">Opera</h6>
												<span class="sub-text">Mozilla Foundation, Inc.</span>
											</div>
										</div>
										<div class="ml-auto my-auto">
											<div class="d-flex">
												<span class="mr-4 my-auto">12,563</span>
												<span class="text-danger"><i class="fe fe-arrow-down"></i>15.12%</span>
											</div>
										</div>
									</div>
									<div class="d-flex align-items-center item  border-bottom">
										<div class="d-flex">
											<img src="{{URL::asset('assets/img/svgicons/edge.svg')}}" alt="img" class="ht-30 wd-30 mr-2">
											<div class="">
												<h6 class="">Edge</h6>
												<span class="sub-text">Mozilla Foundation, Inc.</span>
											</div>
										</div>
										<div class="ml-auto my-auto">
											<div class="d-flex">
												<span class="mr-4 mt-1">25,364</span>
												<span class="text-success"><i class="fe fe-arrow-up"></i>24.37%</span>
											</div>
										</div>
									</div>
									<div class="d-flex align-items-center item  border-bottom">
										<div class="d-flex">
											<img src="{{URL::asset('assets/img/svgicons/firefox.svg')}}" alt="img" class="ht-30 wd-30 mr-2">
											<div class="">
												<h6 class="">Firefox</h6>
												<span class="sub-text">Mozilla Foundation, Inc.</span>
											</div>
										</div>
										<div class="ml-auto my-auto">
											<div class="d-flex">
												<span class="mr-4 mt-1">14,635</span>
												<span class="text-success"><i class="fe fe-arrow-up"></i>15,63%</span>
											</div>
										</div>
									</div>
									<div class="d-flex align-items-center item border-bottom">
										<div class="d-flex">
											<img src="{{URL::asset('assets/img/svgicons/uc-browser.svg')}}" alt="img" class="ht-30 wd-30 mr-2">
											<div class="">
												<h6 class="">Ucbrowser</h6>
												<span class="sub-text">Mozilla Foundation, Inc.</span>
											</div>
										</div>
										<div class="ml-auto my-auto">
											<div class="d-flex">
												<span class="mr-4 mt-1">15,453</span>
												<span class="text-danger"><i class="fe fe-arrow-down"></i>23.70%</span>
											</div>
										</div>
									</div>
									<div class="d-flex align-items-center item">
										<div class="d-flex">
											<img src="{{URL::asset('assets/img/svgicons/safari.svg')}}" alt="img" class="ht-30 wd-30 mr-2">
											<div class="">
												<h6 class="">Safari</h6>
												<span class="sub-text">Mozilla Foundation, Inc.</span>
											</div>
										</div>
										<div class="ml-auto my-auto">
											<div class="d-flex">
												<span class="mr-4 mt-1">35,657</span>
												<span class="text-danger"><i class="fe fe-arrow-down"></i>12.54%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- card -->
					</div>
				</div>
				<!-- /row -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-4">
						<div class="card total-revenue">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-10">THIS YEAR'S TOTAL Sales</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<div class="row">
									<div class="col-xl-12 col-md-12 total-revenue">
										<p class="tx-12 text-muted mb-4">Total revenue in economics refers to the total receipts from sales of a given quantity of goods or services. <a href="">Learn more</a></p>
										<div class="aligner-wrapper">
											<canvas id="chart-donut" class=""></canvas>
										</div>
										<div class="d-flex justify-content-center mt-4 mb-0">
											<div class="wrapper d-flex flex-column align-items-center pr-3">
												<p class="text-muted mb-0 font-weight-normal d-flex"><span class="legend bg-primary brround"></span>Local</p>
												<h4 class="mb-0 font-weight-medium tx-30">3642</h4>
												<span class="tx-10 text-success"><strong>13%</strong><i class="mdi mdi-arrow-up"></i> <span class="text-muted tx-12 ml-0 mt-1">increased</span></span>
											</div>
											<div class="wrapper d-flex flex-column align-items-center pr-3">
												<p class="text-muted mb-0 font-weight-normal d-flex"><span class="legend bg-danger brround"></span>Domestic</p>
												<h4 class="mb-0 font-weight-medium tx-30">1688</h4>
												<span class=" tx-10 text-danger"><strong>-5%</strong><i class="mdi mdi-arrow-down"></i> <span class="text-muted tx-12 ml-0 mt-1">decrease</span></span>
											</div>
											<div class="wrapper d-flex flex-column align-items-center">
												<p class="text-muted mb-0 font-weight-normal d-flex"><a class="legend bg-secondary brround"></a>International</p>
												<h4 class="mb-0 font-weight-medium tx-30">2160</h4>
												<span class=" tx-10 text-danger"><strong>-10%</strong><i class="mdi mdi-arrow-down"></i> <span class="text-muted tx-12 ml-0 mt-1">decrease</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4">
						<div class="card mg-b-20">
							<div class="card-body p-0">
								<div class="pd-30">
									<div class="main-content-label mb-1">Latest Updates</div>
									<p class="mg-b-0 tx-12 text-muted">Sales Performance for Online and Offline.</p>
								</div>
								<div class="product-timeline card-body pt-0">
									<ul class="timeline-1 mb-0">
										<li class="mt-0">
											<i class="ti-pie-chart bg-primary text-white product-icon"></i>
											<span class="font-weight-semibold mb-4 tx-16">Total Products</span>
											<a href="#" class="float-right tx-11 text-muted">3 days ago</a>
											<p class="mb-0 text-muted tx-12">1.3k New Products</p>
										</li>
										<li class="mt-0">
											<i class="mdi mdi-cart-outline bg-warning text-white product-icon"></i>
											<span class="font-weight-semibold mb-4 tx-16">Total Sales</span>
											<a href="#" class="float-right tx-11 text-muted">35 mins ago</a>
											<p class="mb-0 text-muted tx-12">1k New Sales</p>
										</li>
										<li class="mt-0">
											<i class="ti-bar-chart-alt bg-success text-white product-icon"></i>
											<span class="font-weight-semibold mb-4 tx-16">Total Revenue</span>
											<a href="#" class="float-right tx-11 text-muted">50 mins ago</a>
											<p class="mb-0 text-muted tx-12">23.5K New Revenue</p>
										</li>
										<li class="mt-0">
											<i class="ti-wallet bg-danger text-white product-icon"></i>
											<span class="font-weight-semibold mb-4 tx-16">Total Profit</span>
											<a href="#" class="float-right tx-11 text-muted">1 hour ago</a>
											<p class="mb-0 text-muted tx-12">3k New profit</p>
										</li>
										<li class="mt-0 mb-0">
											<i class="si si-eye bg-secondary text-white product-icon"></i>
											<span class="font-weight-semibold mb-4 tx-16">Customer Visits</span>
											<a href="#" class="float-right tx-11 text-muted">1 day ago</a>
											<p class="mb-0 text-muted tx-12">15% increased</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card">
							<div class="card-body pd-b-15">
								<div id="carousel-indicator" class="carousel slide dashboard-carousel" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<div class="d-flex justify-content-between align-items-center">
												<h4 class="card-title mb-2">Browser Status</h4>
												<div class="btn-group border-0">
													<button type="button" class="btn btn-icons btn-square  btn-light btn-inverse-info mr-2">
														<i class="mdi mdi-chevron-left"></i>
													</button>
													<button type="button" class="btn btn-icons btn-square btn-inverse-info">
														<i class="mdi mdi-chevron-right"></i>
													</button>
												</div>
											</div>
											<div class="mt-3 border">
												<div class="browser-stats">
													<div class="d-flex align-items-center item  border-bottom">
														<div class="d-flex">
															<img src="{{URL::asset('assets/img/svgicons/chrome.svg')}}" alt="browsers" class="ht-30 wd-30 mr-2">
															<div class="ml-2 mt-2">
																<h6 class="">Chrome</h6>
															</div>
														</div>
														<div class="ml-auto my-auto">
															<div class="d-flex">
																<span class="mr-4 my-auto">35,502</span>
																<span class="text-success fs-15"><i class="fe fe-arrow-up"></i>12.75%</span>
															</div>
														</div>
													</div>
													<div class="d-flex align-items-center item  border-bottom">
														<div class="d-flex">
															<img src="{{URL::asset('assets/img/svgicons/opera.svg')}}" alt="browsers" class="ht-30 wd-30 mr-2">
															<div class="ml-2 mt-2">
																<h6 class="">Opera</h6>
															</div>
														</div>
														<div class="ml-auto my-auto">
															<div class="d-flex">
																<span class="mr-4 my-auto">12,563</span>
																<span class="text-danger"><i class="fe fe-arrow-down"></i>15.12%</span>
															</div>
														</div>
													</div>
													<div class="d-flex align-items-center item  border-bottom">
														<div class="d-flex">
															<img src="{{URL::asset('assets/img/svgicons/edge.svg')}}" alt="browsers" class="ht-30 wd-30 mr-2">
															<div class="ml-2 mt-2">
																<h6 class="">Edge</h6>
															</div>
														</div>
														<div class="ml-auto my-auto">
															<div class="d-flex">
																<span class="mr-4 mt-1">25,364</span>
																<span class="text-success"><i class="fe fe-arrow-up"></i>24.37%</span>
															</div>
														</div>
													</div>
													<div class="d-flex align-items-center item  border-bottom">
														<div class="d-flex">
															<img src="{{URL::asset('assets/img/svgicons/firefox.svg')}}" alt="browsers" class="ht-30 wd-30 mr-2">
															<div class="ml-2 mt-2">
																<h6 class="">Firefox</h6>
															</div>
														</div>
														<div class="ml-auto my-auto">
															<div class="d-flex">
																<span class="mr-4 mt-1">14,635</span>
																<span class="text-success"><i class="fe fe-arrow-up"></i>15,63%</span>
															</div>
														</div>
													</div>
													<div class="d-flex align-items-center item border-bottom">
														<div class="d-flex">
															<img src="{{URL::asset('assets/img/svgicons/uc-browser.svg')}}" alt="browsers" class="ht-30 wd-30 mr-2">
															<div class="ml-2 mt-2">
																<h6 class="">Ucbrowser</h6>
															</div>
														</div>
														<div class="ml-auto my-auto">
															<div class="d-flex">
																<span class="mr-4 mt-1">15,453</span>
																<span class="text-danger"><i class="fe fe-arrow-down"></i>23.70%</span>
															</div>
														</div>
													</div>
													<div class="d-flex align-items-center item">
														<div class="d-flex">
															<img src="{{URL::asset('assets/img/svgicons/safari.svg')}}" alt="browsers" class="ht-30 wd-30 mr-2">
															<div class="ml-2 mt-2">
																<h6 class="">Safari</h6>
															</div>
														</div>
														<div class="ml-auto my-auto">
															<div class="d-flex">
																<span class="mr-4 mt-1">35,657</span>
																<span class="text-danger"><i class="fe fe-arrow-down"></i>12.54%</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="carousel-item carousel slide dashboard-carousel" data-ride="carousel">
											<div class="d-flex justify-content-between align-items-center">
												<h4 class="card-title mb-2">New Orders</h4>
												<div class="btn-group border-0">
													<button type="button" class="btn btn-icons btn-square  btn-light btn-inverse-info mr-2">
														<i class="mdi mdi-chevron-left"></i>
													</button>
													<button type="button" class="btn btn-icons btn-square btn-inverse-info">
														<i class="mdi mdi-chevron-right"></i>
													</button>
												</div>
											</div>
											<div class="border mt-3 border-top-0">
												<div class="table-responsive">
													<table class="table transaction-table mb-0">
														<tbody>
															<tr>
																<td class="d-flex">
																	<img class="main-img-user avatar-sm brround mr-3" src="{{URL::asset('assets/img/faces/1.jpg')}}" alt="media1">
																	<div class="mt-0">
																		<h6 class="mb-0 font-weight-semibold">John Wisely</h6>
																		<small class="text-muted tx-12">1340 Gills Rd, VA, 23139</small>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="d-flex">
																	<img class="main-img-user avatar-sm brround mr-3" src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="media1">
																	<div class="mt-0">
																		<h6 class="mb-0 font-weight-semibold">Lula Malone</h6>
																		<small class="text-muted tx-12">104 Jefferson Ln, TN, 37643</small>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="d-flex">
																	<img class="main-img-user avatar-sm brround mr-3" src="{{URL::asset('assets/img/faces/10.jpg')}}" alt="media1">
																	<div class="mt-0">
																		<h6 class="mb-0 font-weight-semibold">Rina Summa</h6>
																		<small class="text-muted tx-12">49 Scott Dr, NY, 10941</small>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="d-flex">
																	<img class="main-img-user avatar-sm brround mr-3" src="{{URL::asset('assets/img/faces/5.jpg')}}" alt="media1">
																	<div class="mt-0">
																		<h6 class="mb-0 font-weight-semibold">Yadira Acklin</h6>
																		<small class="text-muted tx-12">507 E 22nd St S, IA, 50208</small>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="d-flex">
																	<img class="main-img-user avatar-sm brround mr-3" src="{{URL::asset('assets/img/faces/12.jpg')}}" alt="media1">
																	<div class="mt-0">
																		<h6 class="mb-0 font-weight-semibold">Joanna Latta</h6>
																		<small class="text-muted tx-12">511 N Walnut St, LA, 71082</small>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carousel-indicator" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carousel-indicator" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
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

		<!-- Internal Piety js -->
		<script src="{{URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- Chart-circle js -->
		<script src="{{URL::asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart-circle/chart-circle.js')}}"></script>

		<!-- Internal Chart js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- widget-chart -->
		<script src="{{URL::asset('assets/js/widget-chart.js')}}"></script>

@endsection