@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Userlist</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">User List</li>
							</ol>
						</nav>
					</div>

				@endsection('breadcrumb')

				@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-lg-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div class="user-lock text-center">
									<div class="dropdown text-right">
										<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											<i class="fe fe-more-vertical"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right shadow">
											<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
											<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
											<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
											<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
										</div>
									</div>
									<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/2.jpg')}}">
								</div>
								<h5 class=" mb-1 mt-3 card-title">Socrates Itumay</h5>
								<p class="mb-2 mt-1 tx-inverse">Project Manager</p>
								<p class="text-muted text-center mt-0">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
								<div class="mt-2 user-info btn-list">
									<a class="btn btn-outline-light btn-block" href=""><i class="typcn typcn-mail mr-2 tx-22 lh-1"></i><span>socrates23@gmail.com</span></a>
									<a class="btn btn-outline-light btn-block" href=""><i class="typcn typcn-phone mr-2 tx-22 lh-1"></i><span>0-235-657-24587</span></a>
									<a class="btn btn-outline-light btn-block" href=""><i class="typcn typcn-map mr-2 tx-22 lh-1"></i><span>California, USA</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div class="user-lock text-center">
									<div class="dropdown text-right">
										<a href="#"  class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											<i class="fe fe-more-vertical"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right shadow">
											<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
											<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
											<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
											<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
										</div>
									</div>
									<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/3.jpg')}}">
								</div>
								<h5 class="mb-1 mt-3  card-title">Reynante Labares</h5>
								<p class="mb-2 mt-1 tx-inverse">Web Designer</p>
								<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
								<div class="mt-2 user-info btn-list">
									<a class="btn btn-outline-light btn-block" href=""><i class="typcn typcn-mail mr-2 tx-22 lh-1"></i><span>reynante23@gmail.com</span></a>
									<a class="btn btn-outline-light btn-block" href=""><i class="typcn typcn-phone mr-2 tx-22 lh-1"></i><span>0-235-657-24587</span></a>
									<a class="btn btn-outline-light btn-block" href=""><i class="typcn typcn-map mr-2 tx-22 lh-1"></i><span>Wales, UK</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div class="user-lock text-center">
									<div class="dropdown text-right">
										<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											<i class="fe fe-more-vertical"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right shadow">
											<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
											<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
											<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
											<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
										</div>
									</div>
									<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
								</div>
								<h5 class="mb-1 mt-3 card-title">Owen Bongcaras</h5>
								<p class="mb-2 mt-1 tx-inverse">App Developer</p>
								<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
								<div class="mt-2 user-info btn-list">
									<a class="btn btn-outline-light btn-block" href=""><i class="typcn typcn-mail mr-2 tx-22 lh-1"></i><span>owenbong@gmail.com</span></a>
									<a class="btn btn-outline-light btn-block" href=""><i class="typcn typcn-phone mr-2 tx-22 lh-1"></i><span>0-235-657-24587</span></a>
									<a class="btn btn-outline-light btn-block" href=""><i class="typcn typcn-map mr-2 tx-22 lh-1"></i><span>0-235-657-24587</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div class="user-lock text-center">
									<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}">
								</div>
								<h5 class="mb-1 mt-3 card-title">Mariane Galeon</h5>
								<p class="mb-2 mt-1 tx-inverse">Administrator</p>
								<p class="mb-1"><i class="typcn typcn-mail mr-2 tx-22 lh-1"></i>mariane28@gmail.com</p>
								<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
									<p class="mb-2 mr-3"><i class="typcn typcn-map mr-2 tx-22 lh-1"></i>Scotland, UK</p>
									<p class="mb-2"><i class="typcn typcn-phone mr-2 tx-22 lh-1"></i>0-235-657-24587</p>
								</div>
								<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
								<div class="justify-content-center text-center mt-3 d-flex">
									<a href="#" class="btn ripple btn-primary btn-icon mr-3">
										<i class="typcn typcn-message"></i>
									</a>
									<a href="#" class="btn ripple btn-secondary btn-icon mr-3">
										<i class="typcn typcn-edit"></i>
									</a>
									<a href="#" class="btn ripple btn-info btn-icon mr-3">
										<i class="typcn typcn-eye"></i>
									</a>
									<a href="#" class="btn ripple btn-danger btn-icon">
										<i class="typcn typcn-trash"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div class="user-lock text-center">
									<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}">
								</div>
								<h5 class="mb-1 mt-3 card-title ">Joyce Chua</h5>
								<p class="mb-2 mt-1 tx-inverse">App Designer</p>
								<p class="mb-1"><i class="typcn typcn-mail mr-2 tx-22 lh-1"></i>joyce78@gmail.com</p>
								<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
									<p class="mb-2 mr-3"><i class="typcn typcn-map mr-2 tx-22 lh-1"></i>Washington, USA</p>
									<p class="mb-2"><i class="typcn typcn-phone mr-2 tx-22 lh-1"></i>0-235-657-24587</p>
								</div>
								<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
								<div class="justify-content-center text-center mt-3 d-flex">
									<a href="#" class="btn ripple btn-primary btn-icon mr-3">
										<i class="typcn typcn-message"></i>
									</a>
									<a href="#" class="btn ripple btn-secondary btn-icon mr-3">
										<i class="typcn typcn-edit"></i>
									</a>
									<a href="#" class="btn ripple btn-info btn-icon mr-3">
										<i class="typcn typcn-eye"></i>
									</a>
									<a href="#" class="btn ripple btn-danger btn-icon">
										<i class="typcn typcn-trash"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div class="user-lock text-center">
									<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/7.jpg')}}">
								</div>
								<h5 class="mb-1 mt-3 card-title">Petey Cruiser</h5>
								<p class="mb-2 mt-1 tx-inverse">Web Developer</p>
								<p class="mb-1"><i class="typcn typcn-mail mr-2 tx-22 lh-1"></i>petey78@gmail.com</p>
								<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
									<p class="mb-2 mr-3"><i class="typcn typcn-map mr-2 tx-22 lh-1"></i>England, UK</p>
									<p class="mb-2"><i class="typcn typcn-phone mr-2 tx-22 lh-1"></i>0-235-657-24587</p>
								</div>
								<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
								<div class="justify-content-center text-center mt-3 d-flex">
									<a href="#" class="btn ripple btn-primary btn-icon mr-3">
										<i class="typcn typcn-message"></i>
									</a>
									<a href="#" class="btn ripple btn-secondary btn-icon mr-3">
										<i class="typcn typcn-edit"></i>
									</a>
									<a href="#" class="btn ripple btn-info btn-icon mr-3">
										<i class="typcn typcn-eye"></i>
									</a>
									<a href="#" class="btn ripple btn-danger btn-icon">
										<i class="typcn typcn-trash"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		
@endsection