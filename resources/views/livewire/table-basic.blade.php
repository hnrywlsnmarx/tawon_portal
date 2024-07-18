@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Basic Tables</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0 pd-t-25">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
								</div>
								<p class="tx-12 text-muted mb-2">Example of Dashfox Simple Table. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table mg-b-0 text-md-nowrap border">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0 pd-t-25">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Bordered Table</h4>
								</div>
								<p class="tx-12 text-muted mb-2">Example of Dashfox Bordered Table.. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0 pd-t-25">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">STRIPED ROWS</h4>
								</div>
								<p class="tx-12 text-muted mb-2">Example of Dashfox Striped Rows.. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap border">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
											</tr>
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0 pd-t-25">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Hoverable Rows Table</h4>
								</div>
								<p class="tx-12 text-muted mb-2">Example of Dashfox Hoverable Rows Table.. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover mb-0 text-md-nowrap border">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
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

		<!-- Eva-icons js -->
		<script src="{{URL::asset('assets/js/eva-icons.min.js')}}"></script>
		
@endsection