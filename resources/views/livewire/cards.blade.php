@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Cards</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cards</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- Row-->
				<div class="row row-sm">
					<div class="col-md-12 col-lg-4">
						<div class="card">
							<div class="card-body">
								This is some text within a card body.
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="#">Card link</a> <a class="card-link" href="#">Another link</a>
							</div>
						</div>
						<div class="card overflow-hidden">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Vestibulum at eros</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="card overflow-hidden">
							<img alt="image" src="{{URL::asset('assets/img/photos/10.jpg')}}" class="IE-H-100">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
							</ul>
							<div class="card-body">
								<a class="card-link" href="#">Card link</a> <a class="card-link" href="#">Another link</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="card">
							<div class="card-header border-bottom">
								<div class="card-title">
									Featured
								</div>
							</div>
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
							</div>
						</div>
						<div class="card text-center">
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
							</div>
							<div class="card-footer text-muted">
								2 days ago
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="card">
							<div class="card-header border-bottom">
								<div class="card-title">
									Featured
								</div>
							</div>
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="card">
							<div class="card-header border-bottom">
								<div class="card-title">
									Quote
								</div>
							</div>
							<div class="card-body">
								<blockquote class="blockquote mb-0">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									<footer class="blockquote-footer">
										Someone famous in <cite title="Source Title">Source Title</cite>
									</footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Button</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="card text-center">
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="card text-right">
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>



				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md">
						<div class="card card-body bg-gray-200 bd-0">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card card-body bg-secondary tx-white bd-0">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
						</div>
					</div>
					<div class="col-md  mg-md-t-0">
						<div class="card card-body bg-primary tx-white bd-0">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md-4 col-lg-4">
						<div class="card">
							<img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/14.jpg')}}">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
							</div>
						</div>
					</div><!-- col-4 -->
					<div class="col-md-4 col-lg-4 mg-md-t-0">
						<div class="card">
							<img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/12.jpg')}}">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
							</div>
						</div>
					</div><!-- col-4 -->
					<div class="col-md-4 col-lg-4 mg-md-t-0">
						<div class="card">
							<img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/13.jpg')}}">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
							</div>
						</div>
					</div><!-- col-4 -->
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md-4 col-lg-4">
						<div class="card">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
							</div>
							<img alt="Image" class="img-fluid card-img-bottom" src="{{URL::asset('assets/img/photos/1.jpg')}}">
						</div>
					</div><!-- col-4 -->
					<div class="col-md-4 col-lg-4 mg-md-t-0">
						<div class="card">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
							</div>
							<img alt="Image" class="img-fluid card-img-bottom" src="{{URL::asset('assets/img/photos/2.jpg')}}">
						</div>
					</div><!-- col-4 -->
					<div class="col-md-4 col-lg-4 mg-md-t-0">
						<div class="card">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
							</div>
							<img alt="Image" class="img-fluid card-img-bottom" src="{{URL::asset('assets/img/photos/11.jpg')}}">
						</div>
					</div><!-- col-4 -->
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md">
						<div class="card">
							<img alt="Image" class="img-fluid card-img" src="{{URL::asset('assets/img/photos/3.jpg')}}">
							<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
								<p class="tx-white tx-medium mg-b-15">The Cat Prisoner</p>
								<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								<p class="tx-13 mg-b-0"><a class="tx-white" href="">Read more</a></p>
							</div><!-- card-img-overlay -->
						</div>
					</div>
					<div class="col-md mg mg-md-t-0">
						<div class="card">
							<img alt="Image" class="card-img img-fluid card-img" src="{{URL::asset('assets/img/photos/5.jpg')}}">
							<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
								<p class="tx-white tx-medium mg-b-15">The Ghost Town</p>
								<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								<p class="tx-13 mg-b-0"><a class="tx-white" href="">Read more</a></p>
							</div><!-- card-img-overlay -->
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card">
							<img alt="Image" class="card-img img-fluid card-img" src="{{URL::asset('assets/img/photos/6.jpg')}}">
							<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
								<p class="tx-white tx-medium mg-b-15">The Green Leaves</p>
								<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								<p class="tx-13 mg-b-0"><a class="tx-white" href="">Read more</a></p>
							</div><!-- card-img-overlay -->
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header tx-medium bd-0 tx-white bg-secondary">
								Description
							</div>
							<div class="card-body ">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mg-md-t-0">
						<div class="card">
							<div class="card-header tx-medium bd-0 tx-white bg-primary">
								Description
							</div>
							<div class="card-body ">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mg-md-t-0">
						<div class="card">
							<div class="card-header tx-medium bd-0 tx-white bg-gray-800">
								Description
							</div>
							<div class="card-body ">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md">
						<div class="card">
							<div class="card-body">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
							<div class="card-footer bd-t">
								January, 20, 2017 4:30am
							</div>
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card">
							<div class="card-body">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
							<div class="card-footer bd-t tx-center">
								<a href="">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card">
							<div class="card-body">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
							<div class="card-footer bd-t tx-right">
								Share <i class="icon ion-logo-facebook mg-l-5 mg-r-5"></i> <i class="icon ion-logo-twitter"></i>
							</div>
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md">
						<div class="card card-body tx-white-8 bg-primary bd-0">
							Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
						</div>
					</div>
					<div class="col-md  mg-md-t-0">
						<div class="card card-body tx-white-8 bg-secondary bd-0">
							Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card card-body tx-white-8 bg-success bd-0">
							Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-12  col-lg-12 col-xl-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
								<p class="card-text">Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a href="#" class="card-link text-primary">Card link</a>
								<a href="#" class="card-link text-primary">Another link</a>
							</div>
						</div>
					</div>
					<div class="col-12  col-lg-12 col-xl-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
								<p class="card-text">Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a href="#" class="card-link text-primary">Card link</a>
								<a href="#" class="card-link text-primary">Another link</a>
							</div>
						</div>
					</div>
					<div class="col-12  col-lg-12 col-xl-4">
						<div class="card bg-info">
							<div class="card-body">
								<h5 class="card-title text-white">Card title</h5>
								<h6 class="card-subtitle mb-2 text-white">Card subtitle</h6>
								<p class="card-text text-white">Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a href="#" class="card-link text-white">Card link</a>
								<a href="#" class="card-link text-white">Another link</a>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-3">Special title treatment</h5>
								<p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
								<a href="#" class="btn btn-primary">See more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-3">Special title treatment</h5>
								<p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
								<a href="#" class="btn btn-primary">See more</a>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-12 col-12 col-sm-12">
						<div class="card">
							<img class="card-img-top" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="Card image cap">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-12 col-sm-12">
						<div class="card">
							<img class="card-img-top" src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="Card image cap">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-12 col-sm-12">
						<div class="card">
							<img class="card-img-top" src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="Card image cap">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card text-center mb-0">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 
@endsection
				