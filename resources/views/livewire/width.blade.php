@extends('layouts.app')

@section('styles') 
@endsection

					@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Widths</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Widths</li>
							</ol>
						</nav>
					</div>

					@endsection('breadcrumb')

					@section('content')

					<!-- row -->
					<div class="row">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Width Values
									</div>
									<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-flex mb-3">
										<div class="d-flex align-items-center justify-content-center wd-100 ht-100 bg-gray-100">
											.wd-100
										</div>
										<div class="d-flex align-items-center justify-content-center wd-200 ht-100 bg-gray-100 mg-l-20">
											.wd-200
										</div>
										<div class="d-flex align-items-center justify-content-center wd-300 ht-100 bg-gray-100 mg-l-20">
											.wd-300
										</div>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Smaller Width</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]</code></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0">
											<thead>
												<tr>
													<th class="wd-30p">Regular Width</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]</code></td>
													<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5)</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Bigger Width</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]</code></td>
													<td>150 | 200 | 250 | 300 | ... | 1000 &nbsp; (step of 50)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Percentage Width
									</div>
									<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]p</code></td>
													<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Media Query Width
									</div>
									<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[size]-[value]</code></td>
													<td rowspan="2">
														<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the width value (refer to code above)</p>
													</td>
												</tr>
												<tr>
													<td><code>.wd-[size]-[value]p</code></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Extra Width Classes
									</div>
									<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-100v</code></td>
													<td>Set a width to an element based on viewport width.</td>
												</tr>
												<tr>
													<td><code>.wd-auto</code></td>
													<td>Set an auto width to an element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

					@endsection('content')

@section('scripts') 
@endsection	
