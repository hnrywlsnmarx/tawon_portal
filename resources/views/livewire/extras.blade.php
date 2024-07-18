
@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')
				<div class="left-content">
					<h4 class="content-title mb-1">Extras</h4>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Utility</a></li>
							<li class="breadcrumb-item active" aria-current="page">Extras</li>
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
								Opacity
							</div>
							<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-t-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code>.op-[value]</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code>.op-[breakpoint]-[value]</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>
												<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
												<p class="mg-b-0">value: 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</p>
											</td>
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
								Shadow
							</div>
							<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code>.shadow-base</code></td>
											<td><code>.shadow-none</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>Add shadow to any box element.</td>
											<td>Remove shadow to any box element.</td>
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