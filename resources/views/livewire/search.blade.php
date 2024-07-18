@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Search</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Search</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body pb-0">
								<div class="input-group mb-4">
									<input type="text" class="form-control" placeholder="Searching.....">
									<span class="input-group-append">
										<button class="btn ripple btn-primary" type="button">Search</button>
									</span>
								</div>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body d-sm-flex">
								<img class="wd-200 mr-4" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="">
								<div>
									<div class="mb-2">
										<a class="tx-gray-900" href="#">www.dummydemolist.com</a><br>
										<a href="#" class="h4 card-title tx-primary">Search the new animations</a>
									</div>
									<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div class="mb-2">
									<a class="tx-gray-900" href="#">www.dummydemolist.com</a><br>
									<a href="#" class="h4 card-title tx-primary">Free Boostrap admin templates</a>
								</div>
								<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
								<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div class="mb-2">
									<a class="tx-gray-900" href="#">www.dummydemolist.com</a><br>
									<a href="#" class="h4 card-title tx-primary">20+ download the free templates</a>
								</div>
								<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
								<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body d-sm-flex">
								<img class="wd-200 mr-4" src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="">
								<div>
									<div class="mb-2">
										<a class="tx-gray-900" href="#">www.dummydemolist.com</a><br>
										<a href="#" class="h4 card-title tx-primary">Customizable admin templates</a>
									</div>
									<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<div class="mb-2">
										<a class="tx-gray-900" href="#">www.dummydemolist.com</a><br>
										<a href="#" class="h4 card-title tx-primary">Duis aute irure dolor in reprehenderit in voluptate velit esse</a>
									</div>
									<div class="d-sm-flex">
										<img class="wd-100 mr-4" src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="">
										<div class="">
											<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
											<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div class="mb-2">
									<a class="tx-gray-900" href="#">www.dummydemolist.com</a><br>
									<a href="#" class="h4 card-title tx-primary">Best free admin templates</a>
								</div>
								<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
								<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							</div>
						</div>
						<!-- Pagination -->
						<div class="row mb-5">
							<div class="col-md-6 mt-1 d-none d-md-block"><b>1 - 10</b> of <b>234</b> Photos</div>
							<div class="col-md-6">
								<div class="float-right">
									<ul class="pagination">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link bg-white" href="#">2</a></li>
										<li class="page-item"><a class="page-link bg-white" href="#">3</a></li>
										<li class="page-item"><a class="page-link bg-white" href="#">4</a></li>
										<li class="page-item"><a class="page-link bg-white" href="#">5</a></li>
										<li class="page-item page-next">
											<a class="page-link bg-white" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- Pagination -->
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Rating js-->
		<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/ratings.js')}}"></script>

		<!-- Internal Rating js-->
		<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>

@endsection