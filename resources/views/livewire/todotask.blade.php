
@extends('layouts.app')

@section('styles') 

		<!-- Internal Gallery css -->
		<link href="{{URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Todo Task</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Todo Task</li>
							</ol>
						</nav>
					</div>


				@endsection('breadcrumb')

				@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-9 col-md-12">
						<div class="row row-sm">
							<!-- col -->
							<div class="col-lg-12">
								<div class="card mg-b-20">
									<div class="card-body d-flex p-3">
										<div class="main-content-label mb-0 mg-t-8">User Today Tasks</div>
										<div class="ml-auto"><a class="d-block tx-20" data-placement="top" data-toggle="tooltip" title="Add New User" href="#"><i class="si si-plus text-muted"></i></a></div>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class="drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{URL::asset('assets/img/faces/1.jpg')}}"><span class="assigned-task bg-purple">9</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="text-muted option-dots2"><i class="fe fe-inbox"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="text-muted option-dots2"><i class="fe fe-info"></i></a>
													<a class="text-muted option-dots2" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu tx-13 dropleft">
														<a class="dropdown-item" href="#">Assign New Task</a>
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
														<a class="dropdown-item" href="#">View All</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">Work Assigned by Clients ,try to get new work</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">Sed ut perspiciatis unde omnis iste natus</h5>
										</div>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class="drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{URL::asset('assets/img/faces/12.jpg')}}"><span class="assigned-task bg-info">2</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="text-muted option-dots2"><i class="fe fe-inbox"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="text-muted option-dots2"><i class="fe fe-info"></i></a>
													<a class="text-muted option-dots2" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu tx-13 dropleft">
														<a class="dropdown-item" href="#">Assign New Task</a>
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
														<a class="dropdown-item" href="#">View All</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">voluptatem accusantium dolo laudantium</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">inventore veritatis et quasi architecto</h5>
										</div>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class="drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{URL::asset('assets/img/faces/9.jpg')}}"><span class="assigned-task bg-danger">6</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="text-muted option-dots2"><i class="fe fe-inbox"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="text-muted option-dots2"><i class="fe fe-info"></i></a>
													<a class="text-muted option-dots2" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu tx-13 dropleft">
														<a class="dropdown-item" href="#">Assign New Task</a>
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
														<a class="dropdown-item" href="#">View All</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">Nemo enim ipsam voluptatem quia voluptas</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">vero eos et accusamus et iusto odio dignissimos</h5>
										</div>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class="drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{URL::asset('assets/img/faces/4.jpg')}}"><span class="assigned-task bg-info">9</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="text-muted option-dots2"><i class="fe fe-inbox"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="text-muted option-dots2"><i class="fe fe-info"></i></a>
													<a class="text-muted option-dots2" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu tx-13 dropleft">
														<a class="dropdown-item" href="#">Assign New Task</a>
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
														<a class="dropdown-item" href="#">View All</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">Ut enim ad minima veniam nostrum exercitationem</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">Quis autem vel eum iure reprehenderit qui</h5>
										</div>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4  col-md-6">
								<div class="card">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class=" drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/img/faces/15.jpg')}}"><span class="assigned-task bg-primary">7</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="text-muted option-dots2"><i class="fe fe-inbox"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="text-muted option-dots2"><i class="fe fe-info"></i></a>
													<a class="text-muted option-dots2" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu tx-13 dropleft">
														<a class="dropdown-item" href="#">Assign New Task</a>
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
														<a class="dropdown-item" href="#">View All</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">I must explain to you how all this mistaken</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">I will give you a complete account of the system</h5>
										</div>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class="drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{URL::asset('assets/img/faces/5.jpg')}}"><span class="assigned-task bg-info">4</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="text-muted option-dots2"><i class="fe fe-inbox"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="text-muted option-dots2"><i class="fe fe-info"></i></a>
													<a class="text-muted option-dots2" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu tx-13 dropleft">
														<a class="dropdown-item" href="#">Assign New Task</a>
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
														<a class="dropdown-item" href="#">View All</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">Rationally encounter quences extremely painful</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-13 mb-0 mg-t-5 text-capitalize lh-5">Which of us ever undertakes laborious physical</h5>
										</div>
									</div>
								</div>
							</div>
							<!-- /col -->
						</div>
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
					<!-- /col -->

					<!-- col -->
					<div class="col-lg-12 col-xl-3">
						<div class="card card--events">
							<div class="card-body">
								<div class="pd-20 pd-b-0-f">
									<div class="main-content-label">Tasks</div>
									<p class="mg-b-0 tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="pd-20 border-bottom">
									<nav class="nav main-nav-column">
										<a class="nav-link active" href=""><i class="typcn typcn-mail"></i> All Tasks <span>20</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-star-outline"></i> Starred <span>3</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-bookmark"></i> Important <span>10</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-cancel-outline"></i> Spam <span>128</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-trash"></i> Trash <span>6</span></a>
									</nav>
								</div>
								<div class="list-group to-do-tasks">
									<a class="list-group-item pd-t-10-f pd-b-10-f" href="#">
										<div class="event-indicator bg-info"></div>
										<h6 class="mg-t-5">Today Tasks</h6>
									</a>
									<a class="list-group-item pd-t-10-f pd-b-10-f" href="#">
										<div class="event-indicator bg-primary"></div>
										<h6 class="mg-t-5">Yesterday Tasks</h6>
									</a>
									<a class="list-group-item pd-t-10-f pd-b-10-f" href="#">
										<div class="event-indicator bg-success"></div>
										<h6 class="mg-t-5">Weakly Tasks</h6>
									</a>
									<a class="list-group-item pd-t-10-f pd-b-10-f" href="#">
										<div class="event-indicator bg-danger"></div>
										<h6 class="mg-t-5">Mothly Tasks</h6>
									</a>
									<a class="list-group-item pd-t-10-f pd-b-10-f" href="#">
										<div class="event-indicator bg-warning"></div>
										<h6 class="mg-t-5">User Tasks</h6>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

@endsection	