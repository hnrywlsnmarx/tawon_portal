@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Display</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utility</a></li>
								<li class="breadcrumb-item active" aria-current="page">Display</li>
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
									Basic Display
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mb-0 mg-t-5">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.d-inline</code></td>
												<td>Set an inline display property of an element.</td>
											</tr>
											<tr>
												<td><code>.d-inline-block</code></td>
												<td>Set an inline-block display property of an element.</td>
											</tr>
											<tr>
												<td><code>.d-block</code></td>
												<td>Set a block display property of an element.</td>
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
									Hiding Elements
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference  text-nowrap mb-0 mg-t-5">
										<thead>
											<tr>
												<th class="wd-40p">Class</th>
												<th class="wd-60p">Screen Size</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.d-none</code></td>
												<td>Hidden on all</td>
											</tr>
											<tr>
												<td><code>.d-none .d-sm-block</code></td>
												<td>Hidden only on xs</td>
											</tr>
											<tr>
												<td><code>.d-sm-none .d-md-block</code></td>
												<td>Hidden only on sm</td>
											</tr>
											<tr>
												<td><code>.d-md-none .d-lg-block</code></td>
												<td>Hidden only on md</td>
											</tr>
											<tr>
												<td><code>.d-lg-none .d-xl-block</code></td>
												<td>Hidden only on lg</td>
											</tr>
											<tr>
												<td><code>.d-xl-none</code></td>
												<td>Hidden only on xl</td>
											</tr>
											<tr>
												<td><code>.d-block</code></td>
												<td>Visible on all</td>
											</tr>
											<tr>
												<td><code>.d-block .d-sm-none</code></td>
												<td>Visible only on xs</td>
											</tr>
											<tr>
												<td><code>.d-none .d-sm-block .d-md-none</code></td>
												<td>Visible only on sm</td>
											</tr>
											<tr>
												<td><code>.d-none .d-md-block .d-lg-none</code></td>
												<td>Visible only on md</td>
											</tr>
											<tr>
												<td><code>.d-none .d-lg-block .d-xl-none</code></td>
												<td>Visible only on lg</td>
											</tr>
											<tr>
												<td><code>.d-none .d-xl-block</code></td>
												<td>Visible only on xl</td>
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