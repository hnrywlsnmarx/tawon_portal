@extends('layouts.app')

@section('styles') 

		<!--- Internal Select2 css-->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Form Validation</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Validation</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Required Input Validation
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<form action="{{url('form-validation')}}" data-parsley-validate="">
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Firstname: <span class="tx-danger">*</span></label>
												<input class="form-control" name="firstname" placeholder="Enter firstname" required="" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">Lastname: <span class="tx-danger">*</span></label>
												<input class="form-control" name="lastname" placeholder="Enter lastname" required="" type="text">
											</div>
										</div>
										<div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">Validate Form</button></div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Email Validation
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<form action="{{url('form-validation')}}" data-parsley-validate="">
									<div class="row">
										<div class="col-lg-9 col-md-8 form-group mg-b-0">
											<label class="form-label">Email: <span class="tx-danger">*</span></label>
											<input class="form-control" name="email" placeholder="Enter email" required="" type="email">
										</div>
										<div class="col-lg-3 col-md-4 mg-t-10 mg-sm-t-25">
											<button class="btn btn-main-primary pd-x-20" type="submit">Validate Email</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Custom Checkbox/Radio Validation
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<form action="{{url('form-validation')}}" data-parsley-validate="">
									<p class="mg-b-10">What is your favorite browser? <span class="tx-danger">*</span></p>
									<div class="parsley-checkbox" id="cbWrapper">
										<label class="ckbox mg-b-5"><input data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" data-parsley-mincheck="2" name="browser[]" required="" type="checkbox" value="1"><span>Firefox</span></label>
										<label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="2"><span>Chrome</span></label> <label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="3"><span>Safari</span></label>
										<label class="ckbox"><input name="browser[]" type="checkbox" value="4"><span>Edge</span></label>
									</div>
									<div id="cbErrorContainer"></div>
									<div class="mg-t-20">
										<button class="btn btn-main-primary pd-x-20" type="submit" value="5">Validate Form</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Select2 Box Validation
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<form action="{{url('form-validation')}}" id="selectForm" name="selectForm">
									<div class="row">
										<div class="parsley-select col-lg-9 col-md-8" id="slWrapper">
											<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" required="">
												<option label="Choose one">
												</option>
												<option value="Firefox">
													Firefox
												</option>
												<option value="Chrome">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option value="Opera">
													Opera
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
											<div id="slErrorContainer"></div>
										</div>
										<div class="col-lg-3 col-md-4 mg-t-10 mg-sm-t-0">
											<button class="btn btn-main-primary pd-x-20" type="submit" value="5">Validate Form</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Custom Style Invalid Messages
								</div>
								<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<form action="{{url('form-validation')}}" class="parsley-style-1" id="selectForm2" name="selectForm2">
									<div class="">
										<div class="row mg-b-20">
											<div class="parsley-input col-md-6" id="fnWrapper">
												<label>Firstname: <span class="tx-danger">*</span></label>
												<input class="form-control" data-parsley-class-handler="#fnWrapper" name="firstname" placeholder="Enter firstname" required="" type="text">
											</div>
											<div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
												<label>Lastname: <span class="tx-danger">*</span></label>
												<input class="form-control" data-parsley-class-handler="#lnWrapper" name="lastname" placeholder="Enter lastname" required="" type="text">
											</div>
										</div>
									</div>
									<p class="mg-b-10">What is your favorite browser? <span class="tx-danger">*</span></p>
									<div class="parsley-checkbox wd-250 mg-b-0" id="cbWrapper2">
										<label class="ckbox mg-b-5">
											<input data-parsley-class-handler="#cbWrapper2" data-parsley-errors-container="#cbErrorContainer2" data-parsley-mincheck="2" name="browser[]" required="" type="checkbox" value="1">
											<span>Firefox</span>
										</label>
										<label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="2"><span>Chrome</span></label>
										<label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="3"><span>Safari</span></label>
										<label class="ckbox"><input name="browser[]" type="checkbox" value="4"><span>Edge</span></label>
									</div>
									<!-- parsley-checkbox -->
									<div class="wd-250" id="cbErrorContainer2"></div>
									<div class="parsley-select wd-250 mg-t-30" id="slWrapper2">
										<select class="form-control select2" data-parsley-class-handler="#slWrapper2" data-parsley-errors-container="#slErrorContainer2" data-placeholder="Choose one" required="">
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
										<div id="slErrorContainer2"></div>
									</div>
									<div class="mg-t-30">
										<button class="btn btn-main-primary pd-x-20" type="submit">Validate Form</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!--Internal  Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal  Parsley.min js -->
		<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

		<!--Internal  Perfect-scrollbar js -->
		<script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

		<!-- Internal Form-validation js -->
		<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>

@endsection