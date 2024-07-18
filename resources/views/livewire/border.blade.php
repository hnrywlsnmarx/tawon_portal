@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')
				<div class="left-content">
					<h4 class="content-title mb-1">Border</h4>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Utility</a></li>
							<li class="breadcrumb-item active" aria-current="page">Border</li>
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
								Set Border
							</div>
							<p class="mg-b-20 tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							<div class="d-flex">
								<div class="wd-80 ht-80 bg-gray-100 bd bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-t bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-r bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-b bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-l bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-y bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-x bd-2"></div>
							</div>
							<div class="table-responsive mt-5">
								<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
									<thead>
										<tr>
											<th class="wd-30p bg-gray-100">Class</th>
											<th class="wd-70p bg-gray-100">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd"</code></td>
											<td>Add border in all sides of an element using default color and width.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-l"</code></td>
											<td>Add border to left side of element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-r"</code></td>
											<td>Add border to right side of element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-b"</code></td>
											<td>Add border to bottom side of element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-t"</code></td>
											<td>Add border to top side of element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-y"</code></td>
											<td>Add border to top and bottom side of element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-x"</code></td>
											<td>Add border to left and right side of element.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/div-->
				<!--div-->
				<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Border Sizes
							</div>
							<p class="mg-b-20 tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							<div class="d-flex">
								<div class="wd-80 ht-80 bg-gray-100 bd"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-3"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-4"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-5"></div>
							</div>
							<div class="table-responsive mg-t-25">
								<table class="table main-table-reference text-nowrap mg-b-0 mg-t-10">
									<thead>
										<tr>
											<th class="wd-30p bg-gray-100">Class</th>
											<th class="wd-70p bg-gray-100">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd"</code></td>
											<td>Set 1px (default) border to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd bd-2"</code></td>
											<td>Set 2px border to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd bd-3"</code></td>
											<td>Set 3px border to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd bd-4"</code></td>
											<td>Set 4px border to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd bd-5"</code></td>
											<td>Set 5px border to element.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/div-->
				<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<div class="card mg-b-20">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Remove Border
							</div>
							<p class="mg-b-20 tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							<div class="d-flex">
								<div class="wd-80 ht-80 bg-gray-100 bd bd-2 bd-t-0"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2 bd-r-0"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2 bd-b-0"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2 bd-l-0"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2 bd-x-0"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2 bd-y-0"></div>
							</div>
							<div class="table-responsive mg-t-25">
								<table class="table main-table-reference text-nowrap mg-b-0 mg-t-10">
									<thead>
										<tr>
											<th class="wd-30p bg-gray-100">Class</th>
											<th class="wd-70p bg-gray-100">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-t-0"</code></td>
											<td>Remove top border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-r-0"</code></td>
											<td>Remove right border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-b-0"</code></td>
											<td>Remove bottom border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-l-0"</code></td>
											<td>Remove left border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-x-0"</code></td>
											<td>Remove left and right border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-y-0"</code></td>
											<td>Remove top and bottom border of an element</td>
										</tr>
										<tr>
											<td><code class="">bd-[t||r|bl|x|y]-0-f</code></td>
											<td>Force remove border of any side of an element.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/div-->
				<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Border Color
							</div>
							<p class="mg-b-20 tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							<div class="d-flex mg-b-40">
								<div class="wd-80 ht-80 bd bd-2 bd-primary"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-2 bd-success"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-2 bd-warning"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-2 bd-danger"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-2 bd-info"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-2 bd-gray-500"></div>
							</div>
							<div class="table-responsive mg-t-25">
								<table class="table main-table-reference text-nowrap mg-b-0 mg-t-10">
									<thead>
										<tr>
											<th class="wd-30p bg-gray-100">Class</th>
											<th class="wd-70p bg-gray-100">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-primary"</code></td>
											<td>Set Border Color primary to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-secondary"</code></td>
											<td>Set Border Color secondary to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-info"</code></td>
											<td>Set Border Color info to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-success"</code></td>
											<td>Set Border Color success to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-warning"</code></td>
											<td>Set Border Color warning to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-danger"</code></td>
											<td>Set Border Color danger to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-light"</code></td>
											<td>Set Border Color light to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="bd-dark"</code></td>
											<td>Set Border Color dark to element.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Border Radius
							</div>
							<p class="mg-b-20 tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							<div class="d-flex">
								<div class="wd-80 ht-80 bd bd-gray-500 rounded"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-gray-500 rounded-5"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-gray-500 rounded-10"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-gray-500 rounded-20"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-gray-500 rounded-30"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-gray-500 rounded-circle"></div>
							</div>
							<div class="table-responsive mg-t-25">
								<table class="table main-table-reference text-nowrap mg-b-0 mg-t-10">
									<thead>
										<tr>
											<th class="wd-30p bg-gray-100">Class</th>
											<th class="wd-70p bg-gray-100">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="rounded-5"</code></td>
											<td>Set Border Radius 5px to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="rounded-10"</code></td>
											<td>Set Border Radius 10px to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="rounded-20"</code></td>
											<td>Set Border Radius 20px to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="rounded-30"</code></td>
											<td>Set Border Radius 30px to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="rounded-40"</code></td>
											<td>Set Border Radius 40px to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="rounded-50"</code></td>
											<td>Set Border Radius 50px to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="rounded"</code></td>
											<td>Set Border Radius to element.</td>
										</tr>
										<tr>
											<td><code class="pd-5 bg-gray-100 rounded-5">class="rounded-circle"</code></td>
											<td>Set Border Radius 50% to element.</td>
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
				
