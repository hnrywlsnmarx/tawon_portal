@extends('layouts.app')

@section('styles') 

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Typhography</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Typhography</li>
							</ol>
						</nav>
					</div>


				@endsection('breadcrumb')

				@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card mg-b-20" id="typography">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Size
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100"><b>Classes</b></td>
												<td><code>.tx-[size]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Values</b></td>
												<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 140</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100"><b>Classes</b></td>
												<td><code>.tx-[viewport]-[size]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Viewports</b></td>
												<td>xs | sm | md | lg | xl</td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Sizes</b></td>
												<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 140 (step of 2)</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Weight
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100"><b>Classes</b></td>
												<td><code>.tx-[weight]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Weight</b></td>
												<td>bold | semibold | medium | normal | light | thin | xthin</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Color
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-[color]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
												<td>primary | success | warning | danger | info | indigo | purple | orange | teal | pink | black | white | inverse</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-gray-[num]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
												<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-white-[transparency]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
												<td>2 | 3 | 4 | 5 | 6 | 7 | 8</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Spacing
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-spacing-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-spacing--[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 ( negative spacing result )</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Height
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.lh-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.lh-[viewport]-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>View Port</b></td>
												<td>xs | sm | md | lg | xl</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal  Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection	