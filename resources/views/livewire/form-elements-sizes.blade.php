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
						<h4 class="content-title mb-1">Form Element Sizes</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Element Sizes</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Form Element Sizes
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-xl-12">
										<p>Form control small Size add class <code class="highlighter-rouge">.form-control-sm</code> to <code class="highlighter-rouge">.form-control</code></p>
										<div class="form-group">
											<input type="text" class="form-control form-control-sm" name="input">
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-group">
											<label>Form Control Medium Size <code class="highlighter-rouge">.form-control</code></label>
											<input type="text" class="form-control" name="input">
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-group">
											<p>Form control small Size add class <code class="highlighter-rouge">.form-control-lg</code> to <code class="highlighter-rouge">.form-control</code></p>
											<input type="text" class="form-control form-control-lg" name="input">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Checkbox Sizes
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-xl-4">
										<div class="form-group m-0">
											<div class="custom-controls-stacked">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
													<span class="custom-control-label">Option 1</span>
												</label>
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label">Option 2</span>
												</label>
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
													<span class="custom-control-label">Option Disabled</span>
												</label>
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
													<span class="custom-control-label">Option Disabled Checked</span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-4 mt-4 mt-xl-0">
										<div class="form-group m-0">
											<div class="custom-controls-stacked">
												<label class="custom-control custom-checkbox custom-control-md mg-b-10">
													<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
													<span class="custom-control-label custom-control-label-md">Option 1</span>
												</label>
												<label class="custom-control custom-checkbox custom-control-md mg-b-10">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label custom-control-label-md">Option 2</span>
												</label>
												<label class="custom-control custom-checkbox custom-control-md mg-b-10">
													<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
													<span class="custom-control-label custom-control-label-md">Option Disabled</span>
												</label>
												<label class="custom-control custom-checkbox custom-control-md mg-b-10">
													<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
													<span class="custom-control-label custom-control-label-md">Option Disabled Checked</span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-4 mt-4 mt-xl-0">
										<div class="form-group m-0">
											<div class="custom-controls-stacked">
												<label class="custom-control custom-checkbox custom-control-lg mg-b-10">
													<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
													<span class="custom-control-label custom-control-label-lg">Option 1</span>
												</label>
												<label class="custom-control custom-checkbox custom-control-lg mg-b-10">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label custom-control-label-lg">Option 2</span>
												</label>
												<label class="custom-control custom-checkbox custom-control-lg mg-b-10">
													<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
													<span class="custom-control-label custom-control-label-lg">Option Disabled</span>
												</label>
												<label class="custom-control custom-checkbox custom-control-lg mg-b-10">
													<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
													<span class="custom-control-label custom-control-label-lg">Option Disabled Checked</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Radio Sizes
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-xl-4">
										<div class="form-group ">
											<div class="custom-controls-stacked">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
													<span class="custom-control-label">Option 1</span>
												</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option2">
													<span class="custom-control-label">Option 2</span>
												</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option3" disabled="">
													<span class="custom-control-label">Option Disabled</span>
												</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios02" value="option4" disabled="" checked="">
													<span class="custom-control-label">Option Disabled Checked</span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-4 mt-4 mt-xl-0">
										<div class="form-group ">
											<div class="custom-controls-stacked">
												<label class="custom-control custom-radio custom-control-md">
													<input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked="">
													<span class="custom-control-label custom-control-label-md">Option 1</span>
												</label>
												<label class="custom-control custom-radio custom-control-md">
													<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
													<span class="custom-control-label custom-control-label-md">Option 2</span>
												</label>
												<label class="custom-control custom-radio custom-control-md">
													<input type="radio" class="custom-control-input" name="example-radios1" value="option3" disabled="">
													<span class="custom-control-label custom-control-label-md">Option Disabled</span>
												</label>
												<label class="custom-control custom-radio custom-control-md">
													<input type="radio" class="custom-control-input" name="example-radios12" value="option4" disabled="" checked="">
													<span class="custom-control-label custom-control-label-md">Option Disabled Checked</span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-4 mt-4 mt-xl-0">
										<div class="form-group ">
											<div class="custom-controls-stacked">
												<label class="custom-control custom-radio custom-control-lg">
													<input type="radio" class="custom-control-input" name="example-radios2" value="option1" checked="">
													<span class="custom-control-label custom-control-label-lg">Option 1</span>
												</label>
												<label class="custom-control custom-radio custom-control-lg">
													<input type="radio" class="custom-control-input" name="example-radios2" value="option2">
													<span class="custom-control-label custom-control-label-lg">Option 2</span>
												</label>
												<label class="custom-control custom-radio custom-control-lg">
													<input type="radio" class="custom-control-input" name="example-radios2" value="option3" disabled="">
													<span class="custom-control-label custom-control-label-lg">Option Disabled</span>
												</label>
												<label class="custom-control custom-radio custom-control-lg">
													<input type="radio" class="custom-control-input" name="example-radios22" value="option4" disabled="" checked="">
													<span class="custom-control-label custom-control-label-lg">Option Disabled Checked</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Check Box Sizes Switches
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-xl-4">
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Check Box</span>
												<input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
												<span class="custom-switch-indicator"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Check Box</span>
												<input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input" checked>
												<span class="custom-switch-indicator custom-switch-indicator-lg"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Check Box</span>
												<input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
												<span class="custom-switch-indicator custom-switch-indicator-xl"></span>
											</label>
										</div>
									</div>
									<div class="col-xl-4 mt-4 mt-xl-0">
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Check Box</span>
												<input type="checkbox" name="custom-switch-checkbox2" class="custom-switch-input">
												<span class="custom-switch-indicator custom-square"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Check Box</span>
												<input type="checkbox" name="custom-switch-checkbox2" class="custom-switch-input">
												<span class="custom-switch-indicator custom-switch-indicator-lg custom-square"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Check Box</span>
												<input type="checkbox" name="custom-switch-checkbox2" class="custom-switch-input" checked>
												<span class="custom-switch-indicator custom-switch-indicator-xl custom-square"></span>
											</label>
										</div>
									</div>
									<div class="col-xl-4 mt-4 mt-xl-0">
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Check Box</span>
												<input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input" checked>
												<span class="custom-switch-indicator custom-radius"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Check Box</span>
												<input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input">
												<span class="custom-switch-indicator custom-switch-indicator-lg custom-radius"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Check Box</span>
												<input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input">
												<span class="custom-switch-indicator custom-switch-indicator-xl custom-radius"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Radio Button Sizes Switches
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-xl-4">
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Radio Buttons</span>
												<input type="radio" name="custom-switch-radio" class="custom-switch-input">
												<span class="custom-switch-indicator"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Radio Buttons</span>
												<input type="radio" name="custom-switch-radio" class="custom-switch-input">
												<span class="custom-switch-indicator custom-switch-indicator-lg"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Radio Buttons</span>
												<input type="radio" name="custom-switch-radio" class="custom-switch-input" checked>
												<span class="custom-switch-indicator custom-switch-indicator-xl"></span>
											</label>
										</div>
									</div>
									<div class="col-xl-4 mt-4 mt-xl-0">
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Radio Buttons</span>
												<input type="radio" name="custom-switch-radio1" class="custom-switch-input">
												<span class="custom-switch-indicator custom-square"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Radio Buttons</span>
												<input type="radio" name="custom-switch-radio1" class="custom-switch-input">
												<span class="custom-switch-indicator custom-switch-indicator-lg custom-square"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Radio Buttons</span>
												<input type="radio" name="custom-switch-radio1" class="custom-switch-input" checked>
												<span class="custom-switch-indicator custom-switch-indicator-xl custom-square"></span>
											</label>
										</div>
									</div>
									<div class="col-xl-4 mt-4 mt-xl-0">
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Radio Buttons</span>
												<input type="radio" name="custom-switch-radio2" class="custom-switch-input" checked>
												<span class="custom-switch-indicator custom-radius"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Radio Buttons</span>
												<input type="radio" name="custom-switch-radio2" class="custom-switch-input">
												<span class="custom-switch-indicator custom-switch-indicator-lg custom-radius"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="custom-switch pl-0">
												<span class="custom-switch-description mr-2">Radio Buttons</span>
												<input type="radio" name="custom-switch-radio2" class="custom-switch-input">
												<span class="custom-switch-indicator custom-switch-indicator-xl custom-radius"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

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