@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Chat</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chat</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="card">
					<div class="row row-sm main-content-app no-gutters pt-0">
						<div class="col-xl-4 col-lg-5">
							<div class="">
								<div class="main-content-left main-content-left-chat">
									<div class="tab-menu-heading">
										<nav class="nav main-nav-line main-nav-line-chat tabs-menu">
											<a class="nav-link active" data-toggle="tab" href="#ChatList"><i class="typcn typcn-mail tx-24 mg-r-5"></i> Chat</a>
											<a class="nav-link" data-toggle="tab" href="#grouplist"><i class="typcn typcn-group-outline tx-24 mg-r-5"></i> Groups</a>
											<a class="nav-link" data-toggle="tab" href="#cal-list"><i class="typcn typcn-phone-outline tx-24 mg-r-5"></i> Calls</a>
										</nav>
									</div>
									<div class="main-chat-contacts-wrapper">
										<label class="main-content-label main-content-label-sm">Active Contacts (5)</label>
										<div class="main-chat-contacts" id="chatActiveContacts">
											<div>
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/3.jpg')}}"></div><small>Adrian</small>
											</div>
											<div>
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div><small>John</small>
											</div>
											<div>
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/4.jpg')}}"></div><small>Daniel</small>
											</div>
											<div>
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div><small>Katherine</small>
											</div>
											<div>
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div><small>Raymart</small>
											</div>
											<div>
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div><small>Junrisk</small>
											</div>
											<div>
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div><small>George</small>
											</div>
											<div>
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/15.jpg')}}"></div><small>Maryjane</small>
											</div>
											<div>
												<div class="main-chat-contacts-more">
													20+
												</div><small>More</small>
											</div>
										</div><!-- main-active-contacts -->
									</div><!-- main-chat-active-contacts -->
									<div class="tab-content">
										<div class="main-chat-list tab-pane active" id="ChatList">
											<div class="media new">
												<div class="main-img-user online">
													<img alt="" src="{{URL::asset('assets/img/faces/5.jpg')}}"> <span>2</span>
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Socrates Itumay</span> <span>2 hours</span>
													</div>
													<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
												</div>
											</div>
											<div class="media new">
												<div class="main-img-user">
													<img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"> <span>1</span>
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Dexter dela Cruz</span> <span>3 hours</span>
													</div>
													<p>Maec enas tempus, tellus eget con dime ntum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media selected">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Reynante Labares</span> <span>10 hours</span>
													</div>
													<p>Nam quam nunc, bl ndit vel aecenas et ante tincid</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/11.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Joyce Chua</span> <span>2 days</span>
													</div>
													<p>Ma ecenas tempus, tellus eget con dimen tum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/4.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Rolando Paloso</span> <span>2 days</span>
													</div>
													<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
												</div>
											</div>
											<div class="media new">
												<div class="main-img-user">
													<img alt="" src="{{URL::asset('assets/img/faces/7.jpg')}}"> <span>1</span>
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Ariana Monino</span> <span>3 days</span>
													</div>
													<p>Maece nas tempus, tellus eget cond imentum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/8.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Maricel Villalon</span> <span>4 days</span>
													</div>
													<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Maryjane Pechon</span> <span>5 days</span>
													</div>
													<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/15.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Lovely Dela Cruz</span> <span>5 days</span>
													</div>
													<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/10.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Daniel Padilla</span> <span>5 days</span>
													</div>
													<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/3.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>John Pratts</span> <span>6 days</span>
													</div>
													<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/7.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Raymart Santiago</span> <span>6 days</span>
													</div>
													<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
												</div>
											</div>
											<div class="media border-bottom-0">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Samuel Lerin</span> <span>7 days</span>
													</div>
													<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
												</div>
											</div>
										</div><!-- main-chat-list -->
										<div class="main-chat-list tab-pane" id="grouplist">
											<div class="media new">
												<div class="main-avatar main-img-user online">
													S <span>2</span>
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Socrates Itumay</span> <span>2 hours</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media new">
												<div class="main-avatar main-img-user">
													D <span>1</span>
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Dexter dela Cruz</span> <span>3 hours</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media selected">
												<div class="main-avatar main-img-user online">R</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Reynante Labares</span> <span>10 hours</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user main-avatar">J</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Joyce Chua</span> <span>2 days</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user main-avatar">R</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Rolando Paloso</span> <span>2 days</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media new">
												<div class="main-avatar main-img-user">
													A <span>1</span>
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Ariana Monino</span> <span>3 days</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media">
												<div class="main-avatar main-img-user">M</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Maricel Villalon</span> <span>4 days</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media">
												<div class="main-avatar main-img-user">M</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Maryjane Pechon</span> <span>5 days</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user main-avatar">L</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Lovely Dela Cruz</span> <span>5 days</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user main-avatar">D</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Daniel Padilla</span> <span>5 days</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user main-avatar">J</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>John Pratts</span> <span>6 days</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user main-avatar">R</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Raymart Santiago</span> <span>6 days</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
											<div class="media border-bottom-0">
												<div class="main-img-user main-avatar">s</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Samuel Lerin</span> <span>7 days</span>
													</div>
													<p>Samuel, Lerin, Raymart , and 20+ Memberes</p>
												</div>
											</div>
										</div>
										<div class="main-chat-list tab-pane" id="cal-list">
											<div class="media new">
												<div class="main-img-user online">
													<img alt="" src="{{URL::asset('assets/img/faces/5.jpg')}}"> <span>2</span>
												</div>
												<div class="media-body">
													<div class="media-contact-name mb-0">
														<span>Socrates Itumay</span> <span></span>
													</div>
													<span class="tx-danger tx-12">2 mins ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media new">
												<div class="main-img-user">
													<img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"> <span>1</span>
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Dexter dela Cruz</span> <span></span>
													</div>
													<span class="tx-12">10 mins ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media selected">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Reynante Labares</span> <span></span>
													</div>
													<span class="tx-12">1 hour ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/11.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Joyce Chua</span> <span></span>
													</div>
													<span class="tx-12">10 hours ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/4.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Rolando Paloso</span> <span></span>
													</div>
													<span class="tx-12">1 day ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media new">
												<div class="main-img-user">
													<img alt="" src="{{URL::asset('assets/img/faces/7.jpg')}}"> <span>1</span>
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Ariana Monino</span> <span></span>
													</div>
													<span class="tx-12">1 day ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/8.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Maricel Villalon</span> <span></span>
													</div>
													<span class="tx-12">2 days ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Maryjane Pechon</span> <span></span>
													</div>
													<span class="tx-12">2 days ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/15.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Lovely Dela Cruz</span> <span></span>
													</div>
													<span class="tx-12">5 days ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/10.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Daniel Padilla</span> <span></span>
													</div>
													<span class="tx-12">10 days ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/3.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>John Pratts</span> <span></span>
													</div>
													<span class="tx-12">10 days ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/7.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Raymart Santiago</span> <span></span>
													</div>
													<span class="tx-12">2 days ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
											<div class="media border-bottom-0">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Samuel Lerin</span>
													</div>
													<span class="tx-12">2 days ago</span>
												</div>
												<div>
													<a class="" href="#"><i class="typcn typcn-phone-outline tx-24"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-7">
							<div class="">
								<a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
								<div class="main-content-body main-content-body-chat">
									<div class="main-chat-header">
										<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
										<div class="main-chat-msg-name">
											<h6>Reynante Labares</h6><small>Last seen: 2 minutes ago</small>
										</div>
										<nav class="nav">
											<a class="nav-link" href=""><i class="icon ion-md-more"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Call"><i class="icon ion-ios-call"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Archive"><i class="icon ion-ios-filing"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Trash"><i class="icon ion-md-trash"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="View Info"><i class="icon ion-md-information-circle"></i></a>
										</nav>
									</div><!-- main-chat-header -->
									<div class="main-chat-body" id="ChatBody">
										<div class="content-inner">
											<label class="main-chat-time"><span>3 days ago</span></label>
											<div class="media flex-row-reverse">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
												<div class="media-body">
													<div class="main-msg-wrapper">
														Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
													</div>
													<div class="main-msg-wrapper">
														Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
													</div>
													<div class="main-msg-wrapper">
														rhoncus ut, imperdiet a, venenatis vitae, justo...
													</div>
													<div>
														<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
												<div class="media-body">
													<div class="main-msg-wrapper">
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
													</div>
													<div>
														<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
											<div class="media flex-row-reverse">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
												<div class="media-body">
													<div class="main-msg-wrapper">
														Nullam dictum felis eu pede mollis pretium
													</div>
													<div>
														<span>11:22 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
											<label class="main-chat-time"><span>Yesterday</span></label>
											<div class="media">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
												<div class="media-body">
													<div class="main-msg-wrapper">
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
													</div>
													<div>
														<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
											<div class="media flex-row-reverse">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
												<div class="media-body">
													<div class="main-msg-wrapper">
														Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
													</div>
													<div class="main-msg-wrapper">
														Nullam dictum felis eu pede mollis pretium
													</div>
													<div>
														<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
											<label class="main-chat-time"><span>Today</span></label>
											<div class="media">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
												<div class="media-body">
													<div class="main-msg-wrapper">
														Maecenas tempus, tellus eget condimentum rhoncus
													</div>
													<div class="main-msg-wrapper">
														Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
													</div>
													<div>
														<span>10:12 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
											<div class="media flex-row-reverse">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
												<div class="media-body">
													<div class="main-msg-wrapper">
														Maecenas tempus, tellus eget condimentum rhoncus
													</div>
													<div class="main-msg-wrapper">
														Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
													</div>
													<div>
														<span>09:40 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="main-chat-footer">
									<nav class="nav">
										<a class="nav-link" data-toggle="tooltip" href="" title="Add Photo"><i class="fas fa-camera"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Attach a File"><i class="fas fa-paperclip"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Add Emoticons"><i class="far fa-smile"></i></a> <a class="nav-link" href=""><i class="fas fa-ellipsis-v"></i></a>
									</nav><input class="form-control" placeholder="Type your message here..." type="text"> <a class="main-msg-send" href=""><i class="far fa-paper-plane"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

@endsection('content')

@section('scripts') 

		<!--Internal  Perfect-scrollbar js -->
		<script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

		<!--Internal  lightslider js -->
		<script src="{{URL::asset('assets/plugins/lightslider/js/lightslider.min.js')}}"></script>

		<!--Internal  Chat js -->
		<script src="{{URL::asset('assets/js/chat.js')}}"></script>

@endsection
