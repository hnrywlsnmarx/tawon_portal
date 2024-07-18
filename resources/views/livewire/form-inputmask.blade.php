@extends('layouts.app')

@section('styles') 

		<!-- Internal Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

		<!--Internal  Datetimepicker-slider css -->
		<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">

		<!-- Internal Spectrum-colorpicker css -->
		<link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Form Input Mask</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Input Mask</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Input Mask
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													Date:
												</div>
											</div><input class="form-control" id="dateMask" placeholder="MM/DD/YYYY" type="text">
										</div><!-- input-group -->
									</div><!-- col-4 -->
									<div class="col-lg-12 mg-t-20">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													Phone:
												</div>
											</div><!-- input-group-prepend -->
											<input class="form-control" id="phoneMask" placeholder="(000) 000-0000" type="text">
										</div><!-- input-group -->
									</div>
									<div class="col-lg-12 mg-t-20">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													Phone + Ext.:
												</div>
											</div><!-- input-group-prepend -->
											<input class="form-control" id="phoneExtMask" placeholder="(000) 000-0000 ext 0000" type="text">
										</div><!-- input-group -->
									</div>
									<div class="col-lg-12 mg-t-20">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													SSN:
												</div><!-- input-group-text -->
											</div><!-- input-group-prepend -->
											<input class="form-control" id="ssnMask" placeholder="000-00-0000" type="text">
										</div>
									</div>
									<div class="col-lg-12 mg-t-20">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													$ Currency
												</div><!-- input-group-text -->
											</div><!-- input-group-prepend -->
											<input class="form-control" id="dolor" placeholder="000-00-0000" type="text" value="$">
										</div>
									</div>
									<div class="col-lg-12 mg-t-20">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													Time
												</div><!-- input-group-text -->
											</div><!-- input-group-prepend -->
											<input class="form-control" id="time" placeholder="00:00:00" type="text" value="$">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!--Internal  jquery.maskedinput js -->
		<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

		<!--Internal  spectrum-colorpicker js -->
		<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>

		<!-- Internal Select2.min js -->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal Ion.rangeSlider.min js -->
		<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

		<!--Internal  jquery-simple-datetimepicker js -->
		<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>

		<!-- Ionicons js -->
		<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>

		<!--Internal  pickerjs js -->
		<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>

		<!-- Internal form-elements js -->
		<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>

@endsection	
