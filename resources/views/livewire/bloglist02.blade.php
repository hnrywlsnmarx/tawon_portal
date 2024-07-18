@extends('layouts.app')

@section('styles') 
@endsection	

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Blog List 02</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Blog</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog List 02</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- Row -->
				<div class="row">
					<div class="col-md-6 col-xl-4">
						<div class="card overflow-hidden">
							<a href="#"><img class="card-img-top" src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="img" ></a>
							<div class="card-body">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<a href="" class="mt-3 btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card overflow-hidden">
							<a href="#"><img class="card-img-top" src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="img"></a>
							<div class="card-body">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<a href="" class="mt-3 btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card overflow-hidden">
							<a href="#"><img class="card-img-top" src="{{URL::asset('assets/img/photos/10.jpg')}}" alt="img"></a>
							<div class="card-body">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<a href="" class="mt-3 btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card overflow-hidden">
							<a href="#"><img class="card-img-top" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="img" ></a>
							<div class="card-body">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<a href="" class="mt-3 btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card overflow-hidden">
							<a href="#"><img class="card-img-top" src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="img"></a>
							<div class="card-body">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<a href="" class="mt-3 btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="card overflow-hidden">
							<a href="#"><img class="card-img-top" src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="img"></a>
							<div class="card-body">
								<h5 class="text-capitalize"><a href="#">voluptatem quia voluptas.</a></h5>
								<div class="text-muted mg-b-10">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
								<div class="text-muted">Who avoids a pain that produces.Many desktop publishing packages and web page editors now use default model text, and a search for will uncover.To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some</div>
								<a href="" class="mt-3 btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-12">
						<ul class="pagination float-right">
							<li class="page-item"><a class="page-link bg-white" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link bg-white" href="#">2</a></li>
							<li class="page-item"><a class="page-link bg-white" href="#">3</a></li>
							<li class="page-item"><a class="page-link bg-white" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
						</ul>
					</div>
				</div>
				<!--End Row-->

@endsection('content')

@section('scripts') 

	<!--Internal  Datepicker js -->
	<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

	<!-- Internal Select2 js-->
	<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

@endsection	
				
