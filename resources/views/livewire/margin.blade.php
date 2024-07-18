
@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Margin</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utility</a></li>
								<li class="breadcrumb-item active" aria-current="page">Margin</li>
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
									Margin Values
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-flex">
									<div class="wd-100 ht-80 bg-gray-100"></div>
									<div class="d-flex align-items-center justify-content-center wd-100 ht-80 bg-gray-100 mg-l-10">
										.mg-l-10
									</div>
									<div class="d-flex align-items-center justify-content-center wd-100 ht-80 bg-gray-100 mg-l-20">
										.mg-l-20
									</div>
									<div class="d-flex align-items-center justify-content-center wd-100 ht-80 bg-gray-100 mg-l-30">
										.mg-l-30
									</div>
								</div>
								<h6 class="mg-t-25 mb-0">Margin-top Values</h6>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-10 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.mg-t-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
											</tr>
										</tbody>
									</table>
								</div>
								<h6 class="mg-t-25 mb-0">Margin-Left Values</h6>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-10 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.mg-l-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
											</tr>
										</tbody>
									</table>
								</div>
								<h6 class="mg-t-25 mb-0">Margin-right Values</h6>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-10 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.mg-r-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
											</tr>
										</tbody>
									</table>
								</div>
								<h6 class="mg-t-25 mb-0">Margin-bottom Values</h6>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-10 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.mg-b-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
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
									Media Query Margin
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
												<td><code>.mg-[breakpoint]-t-[value]<br>
												.mg-[breakpoint]-r-[value]<br>
												.mg-[breakpoint]-b-[value]<br>
												.mg-[breakpoint]-l-[value]</code></td>
												<td>
													<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
													<p class="mg-b-0">value: the margin value (refer to code above)</p>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Auto Margin
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference  text-nowrap mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.mg-t-auto</code></td>
												<td>Set a top margin to auto</td>
											</tr>
											<tr>
												<td><code>.mg-r-auto</code></td>
												<td>Set a right margin to auto</td>
											</tr>
											<tr>
												<td><code>.mg-b-auto</code></td>
												<td>Set a bottom margin to auto</td>
											</tr>
											<tr>
												<td><code>.mg-l-auto</code></td>
												<td>Set a left margin to auto</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->

@endsection('content')

@section('scripts') 
@endsection

