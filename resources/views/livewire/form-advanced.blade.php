
@extends('layouts.app')

@section('styles') 

		<!--- Internal Select2 css-->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

		<!---Internal Fileupload css-->
		<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

		<!---Internal Fancy uploader css-->
		<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

		<!--Internal Sumoselect css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect.css')}}">

		<!--Internal  TelephoneInput css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.css')}}">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Form Advanced</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Advanced</li>
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
								<div>
									<h6 class="card-title mb-1">Telephone Input</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="input-group">
									<input class="form-control" id="phone" name="phone" type="tel">
									<span class="input-group-btn">
										<button class="btn ripple btn-primary br-tl-0 br-bl-0" type="button">Submit</button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Single Select Style</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="mb-4">
									<p class="mg-b-10">Single Select</p>
									<select name="somename" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
										<!--placeholder-->
										<option title="Volvo is a car"  value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
									</select>
								</div>
								<div class="mb-4">
									<p class="mg-b-10">Disabled Select</p>
									<select class="SlectBox form-control" disabled>
										<option value="volvo">Volvo</option>
										<option selected value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
										<option disabled value="opt1">option1</option>
										<option value="opt2">option2</option>
										<option value="opt3">option3</option>
									</select>
								</div>
								<div>
									<p class="mg-b-10">Inline Select</p>
									<select class="SlectBox form-control">
										<option>selected</option>
										<option>Volvo</option>
										<option>Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
										<option>Volvo</option>
										<option>Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
										<option>Volvo</option>
										<option>Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
										<option>Volvo</option>
										<option>Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Multiple Select Styles</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="mb-4">
									<p class="mg-b-10">Multiple Select</p>
									<select multiple="multiple" class="testselect2">
										<option selected value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
									</select>
								</div>
								<div class="mb-4">
									<p class="mg-b-10">Disabled Select</p>
									<select multiple="multiple" class="testselect2" disabled >
									   <option selected value="volvo">Volvo</option>
									   <option value="saab">Saab</option>
									   <option disabled="disabled" value="mercedes">Mercedes</option>
									   <option value="audi">Audi</option>
									   <option value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option class="someclass" value="audi">Audi</option>
									   <option class="someclass" value="bmw">BMW</option>
									   <option class="someclass" value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="audi">Audi</option>
									   <option value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="hyundai">Hyundai</option>
									   <option value="mitsubishi">Mitsubishi</option>
									</select>
								</div>
								<div>
									<p class="mg-b-10">Optgroup Support</p>
									<select   multiple="multiple" class="testselect2">
									   <option selected value="volvo">Volvo</option>
									   <option value="saab">Saab</option>
									   <option disabled="disabled" value="mercedes">Mercedes</option>
									   <option value="audi">Audi</option>
									   <option value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option class="someclass" value="audi">Audi</option>
									   <option class="someclass" value="bmw">BMW</option>
									   <option class="someclass" value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="audi">Audi</option>
									   <option value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="hyundai">Hyundai</option>
									   <option value="mitsubishi">Mitsubishi</option>
								   </select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Multiple Select Styles</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="mb-4">
									<p class="mg-b-10">Multiple Select-1</p>
									<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="selectsum1">
									   <option selected value="volvo">Volvo</option>
									   <option value="saab">Saab</option>
									   <option disabled="disabled" value="mercedes">Mercedes</option>
									   <option value="audi">Audi</option>
									   <option selected value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="mitsubishi">Mitsubishi</option>
									</select>
								</div>
								<div>
									<p class="mg-b-10">Multiple Select-2</p>
									<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="selectsum2">
									   <option selected value="volvo">Volvo</option>
									   <option value="saab">Saab</option>
									   <option disabled="disabled" value="mercedes">Mercedes</option>
									   <option value="audi">Audi</option>
									   <option selected value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="mitsubishi">Mitsubishi</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection('content')


@section('scripts') 
		<!--Internal  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

        <!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal Fileuploads js-->
		<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!--Internal Fancy uploader js-->
		<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!--Internal  Form-elements js-->
		<script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>

		<!--Internal Sumoselect js-->
		<script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

		<!-- Internal TelephoneInput js-->
		<script src="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>

@endsection

                