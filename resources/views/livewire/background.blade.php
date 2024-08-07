@extends('layouts.app')

@section('styles')
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Background</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utility</a></li>
								<li class="breadcrumb-item active" aria-current="page">Background</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Gray Set
								</div>
								<p class="mg-b-20 tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-flex flex-wrap ht-80 gray-set">
									<div class="flex-1 bg-gray-900 ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-gray-800 ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-gray-700 ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-gray-600 ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-gray-500 ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-gray-400 ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-gray-300 ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-gray-200 ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-gray-100 ht-100p rounded-5 mg-5"></div>
								</div>
								<div class="table-responsive mg-t-20 mb-0">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>class="bg-gray-[value]"</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>900 | 800 | 700 | 600 | 500 | 400 | 300 | 200 | 100</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!--/div-->
					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Solid Background Set
								</div>
								<p class="mg-b-20 tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-flex flex-wrap ht-80">
									<div class="flex-1 bg-primary ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-success ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-warning ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-danger ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-info ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-indigo ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-purple ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-pink ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-teal ht-100p rounded-5 mg-5"></div>
									<div class="flex-1 bg-orange ht-100p rounded-5 mg-5"></div>
								</div>
								<div class="table-responsive mg-t-20 mb-0">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>class="bg-[value]"</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>primary | secondary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!--/div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Transparent White Set
								</div>
								<p class="mg-b-20 tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-flex flex-wrap">
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-white-1"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-white-2"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-white-3"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-white-4"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-white-5"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-white-6"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-white-7"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-white-8"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-white-9"></div>
									</div>
								</div>
								<div class="table-responsive mg-t-20 mb-0">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>class="bg-white-[value]"</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!--/div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Transparent Black Set
								</div>
								<p class="mg-b-20 tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-flex flex-wrap">
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-black-1"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-black-2"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-black-3"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-black-4"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-black-5"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-black-6"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-black-7"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-black-8"></div>
									</div>
									<div class="flex-1 pos-relative mg-5 rounded-5 overflow-hidden">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/4.jpg')}}">
										<div class="pos-absolute a-0 bg-black-9"></div>
									</div>
								</div>
								<div class="table-responsive mg-t-20 mb-0">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>class="bg-black-[value]"</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
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
@endsection				
