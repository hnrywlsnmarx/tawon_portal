@extends('layouts.app')

@section('styles') 

		<!-- Internal fullcalendar Css-->
		<link href="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet">

		<!-- Internal Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Calendar</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Calendar</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<div class="main-content-app pd-b-0  main-content-calendar pt-0">

					<div class="card">
					<!-- row -->
					<div class="row no-gutters">
						<div class="col-lg-12 col-xl-12">
							<div class="main-content-body main-content-body-calendar p-4">
								<div class="main-calendar" id="calendar"></div>
							</div>
						</div>
					</div>
					</div>
				</div>
					<!-- /row -->

@endsection('content')

@section('modals')

		<!-- Modal -->
		<div aria-hidden="true" class="modal main-modal-calendar-schedule" id="modalSetSchedule" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h6 class="modal-title">Create New Event</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form action="{{url('calendar')}}" id="mainFormCalendar" method="post" name="mainFormCalendar">
							<div class="form-group">
								<input class="form-control" placeholder="Add title" type="text">
							</div>
							<div class="form-group d-flex align-items-center mb-0">
								<label class="rdiobox mg-r-60"><input checked name="etype" type="radio" value="event"> <span>Event</span></label> <label class="rdiobox"><input name="etype" type="radio" value="reminder"> <span>Reminder</span></label>
							</div>
							<div class="form-group mg-t-10">
								<label class="tx-13 mg-b-5 tx-gray-600">Start Date</label>
								<div class="row row-xs">
									<div class="col-7">
										<input class="form-control" id="mainEventStartDate" placeholder="Select date" type="text" value="">
									</div><!-- col-7 -->
									<div class="col-5">
										<select class="select2 main-event-time" data-placeholder="Select time" id="mainEventStartTime">
											<option label="Select time">
												Select time
											</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="tx-13 mg-b-5 tx-gray-600">End Date</label>
								<div class="row row-xs">
									<div class="col-7">
										<input class="form-control" id="EventEndDate" placeholder="Select date" type="text" value="">
									</div><!-- col-7 -->
									<div class="col-5">
										<select class="select2 main-event-time" data-placeholder="Select time" id="EventEndTime">
											<option label="Select time">
												Select time
											</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Write some description (optional)" rows="2"></textarea>
							</div>
							<div class="d-flex mg-t-15 mg-lg-t-30">
								<button class="btn btn-main-primary pd-x-25 mg-r-5" type="submit">Save</button> <a class="btn btn-light" data-dismiss="modal" href="">Discard</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->

		<!-- Modal -->
		<div aria-hidden="true" class="modal main-modal-calendar-event" id="modalCalendarEvent" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<nav class="nav nav-modal-event">
							<a class="nav-link" href="#"><i class="icon ion-md-open"></i></a>
							<a class="nav-link" href="#"><i class="icon ion-md-trash"></i></a>
							<a class="nav-link" data-dismiss="modal" href="#">
							<i class="icon ion-md-close"></i></a>
						</nav>
					</div>
					<div class="modal-body">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="tx-13 tx-gray-600 mg-b-2">Start Date</label>
								<p class="event-start-date"></p>
							</div>
							<div class="col-sm-6">
								<label class="tx-13 mg-b-2">End Date</label>
								<p class="event-end-date"></p>
							</div>
						</div><label class="tx-13 tx-gray-600 mg-b-2">Description</label>
						<p class="event-desc tx-gray-900 mg-b-30"></p><a class="btn btn-secondary wd-80" data-dismiss="modal" href="">Close</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->

@endsection('modals')

@section('scripts') 

    <!-- moomet min js -->
	<script src="{{URL::asset('assets/plugins/moment/min/moment.min.js')}}"></script>

	<!--Internal  Date picker js -->
	<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

	<!--Internal  Fullcalendar js -->
	<script src="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>

	<!-- Internal Select2.full.min js -->
	<script src="{{URL::asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

	<!--Internal App calendar js -->
	<script src="{{URL::asset('assets/js/app-calendar-events.js')}}"></script>
	<script src="{{URL::asset('assets/js/app-calendar.js')}}"></script>

	<!-- Internal Select2.min js -->
	<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/select2.js')}}"></script>
	
@endsection
				