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
						<h4 class="content-title mb-1">Form Upload</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Upload</li>
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
									File Upload 01
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm">
									<div class="col-sm-12 col-md-12 col-lg-8">
										<div class="input-group">
											<input type="text" class="form-control browse-file" placeholder="Choose" readonly>
											<label class="input-group-btn">
												<span class="btn btn-primary br-tl-0 br-bl-0">
													Browse <input type="file" style="display: none;" multiple>
												</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">File Upload 02</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="row mb-4">
									<div class="col-sm-12 col-md-4">
										<input type="file" class="dropify" data-height="200" />
									</div>
									<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
										<input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"  />
									</div>
									<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
										<input type="file" class="dropify" disabled="disabled"  />
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">File Upload style 03</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div>
									<input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png, html, zip, css,js" multiple>
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

   		<!-- Fileupload js-->
		<script src="{{URL::asset('assets/js/file-upload.js')}}"></script>
		
	@endsection	