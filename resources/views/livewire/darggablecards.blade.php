@extends('layouts.app')

@section('styles') 

		<!---Internal  Owl Carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!---Internal  Darggable css-->
		<link href="{{URL::asset('assets/plugins/darggable/jquery-ui-darggable.css')}}" rel="stylesheet">

		<!-- Dragula Css -->
		<link href="{{URL::asset('assets/plugins/dragula/dragula.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Draggable Cards</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cards</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')
                <!-- row -->
				<div class="examples ">
					<div class="parent1 row row-sm">
						<div class="wrapper col-lg-4">
							<div class="card p-4" id="left-defaults">
								<h4 class="card-title mb-4">Draggable Cards</h4>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-primary"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/1.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Anna Ogden</a>
												<small class="d-block text-muted tx-10">App Designer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-secondary"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/2.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Socrates Itumay</a>
												<small class="d-block text-muted tx-10">App Developer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-success"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Reynante Labares</a>
												<small class="d-block text-muted tx-10">web Developer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-danger"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/4.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Owen Bongcaras</a>
												<small class="d-block text-muted tx-10">Web designer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-info"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/5.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Stephen Metcalfe</a>
												<small class="d-block text-muted tx-10">Director</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-warning"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/6.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Mariane Galeon</a>
												<small class="d-block text-muted tx-10">HR Recurter</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-danger"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/7.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Joyce Chua</a>
												<small class="d-block text-muted tx-10">App developer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-purple"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/8.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Petey Cruiser</a>
												<small class="d-block text-muted tx-10">Web designer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="wrapper col-lg-4">
							<div class="card p-4" id="right-defaults">
								<h4 class="card-title mb-4">Draggable Cards</h4>

								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-info"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/5.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Stephen Metcalfe</a>
												<small class="d-block text-muted tx-10">Director</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-warning"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/6.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Mariane Galeon</a>
												<small class="d-block text-muted tx-10">HR Recurter</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-danger"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md mr-3" src="{{URL::asset('assets/img/faces/7.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Joyce Chua</a>
												<small class="d-block text-muted tx-10">App developer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-purple"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md mr-3" src="{{URL::asset('assets/img/faces/8.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Petey Cruiser</a>
												<small class="d-block text-muted tx-10">Web designer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-primary"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-autassets/img/faces/1.jpgo">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/1.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Anna Ogden</a>
												<small class="d-block text-muted tx-10">App Designer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-secondary"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/2.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Socrates Itumay</a>
												<small class="d-block text-muted tx-10">App Developer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-success"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Reynante Labares</a>
												<small class="d-block text-muted tx-10">web Developer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-danger"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/4.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Owen Bongcaras</a>
												<small class="d-block text-muted tx-10">Web designer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="wrapper col-lg-4">
							<div class="card p-4" id="left-events">
								<h4 class="card-title mb-4">Draggable Cards</h4>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-primary"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/1.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Anna Ogden</a>
												<small class="d-block text-muted tx-10">App Designer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-secondary"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/2.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Socrates Itumay</a>
												<small class="d-block text-muted tx-10">App Developer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-danger"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/7.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Joyce Chua</a>
												<small class="d-block text-muted tx-10">App developer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-purple"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/8.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Petey Cruiser</a>
												<small class="d-block text-muted tx-10">Web designer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>

								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-success"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Reynante Labares</a>
												<small class="d-block text-muted tx-10">web Developer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-danger"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/4.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Owen Bongcaras</a>
												<small class="d-block text-muted tx-10">Web designer</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-info"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/5.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Stephen Metcalfe</a>
												<small class="d-block text-muted tx-10">Director</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
								<div class="card border shadow-none overflow-hidden mb-3">
									<div class="card-status card-status-left bg-warning"></div>
									<div class="card-body p-3">
										<div class="d-flex align-items-center mt-auto">
											<img class="avatar brround avatar-md  mr-3" src="{{URL::asset('assets/img/faces/6.jpg')}}" alt="img">
											<div>
												<a class="font-weight-semibold tx-12 tx-gray-900" href="{{url('profile')}}">Mariane Galeon</a>
												<small class="d-block text-muted tx-10">HR Recurter</small>
											</div>
											<div class="ml-auto">
												<i class="fe fe-edit tx-success"></i>
												<i class="fe fe-trash tx-danger mg-l-10"></i>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!--End Row -->

@endsection('content')


@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Dragula Js -->
		<script src="{{URL::asset('assets/plugins/dragula/dragula.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/dragula/example.min.js')}}"></script>
		
@endsection
