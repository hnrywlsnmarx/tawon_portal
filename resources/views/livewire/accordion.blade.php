@extends('layouts.app')

@section('styles')
@endsection

				@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Accordions</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Accordions</li>
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
									<h6 class="card-title mb-1">Basic Style Accordion</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
									<div class="card mb-0">
										<div class="card-header" id="headingOne" role="tab">
											<a aria-controls="collapseOne" aria-expanded="true" data-toggle="collapse" href="#collapseOne">Lorem Ipsum is not simply random text</a>
										</div>
										<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordion" id="collapseOne" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingTwo" role="tab">
											<a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwo">All the Lorem Ipsum generators on the Internet</a>
										</div>
										<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="collapseTwo" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingThree" role="tab">
											<a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThree">Lorem Ipsum is therefore always free from repetition</a>
										</div>
										<div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="collapseThree" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div><!-- collapse -->
									</div>
								</div><!-- accordion -->
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dark Style Accordion</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2" role="tablist">
									<div class="card mb-0">
										<div class="card-header" id="headingOne2" role="tab">
											<a aria-controls="collapseOne2" aria-expanded="false" data-toggle="collapse" href="#collapseOne2">Lorem Ipsum is not simply random text</a>
										</div>
										<div aria-labelledby="headingOne2" class="collapse show" data-parent="#accordion2" id="collapseOne2" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingTwo2" role="tab">
											<a aria-controls="collapseTwo2" aria-expanded="true" class="collapsed" data-toggle="collapse" href="#collapseTwo2">All the Lorem Ipsum generators on the Internet</a>
										</div>
										<div aria-labelledby="headingTwo2" class="collapse" data-parent="#accordion2" id="collapseTwo2" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingThree2" role="tab">
											<a aria-controls="collapseThree2" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThree2">Lorem Ipsum is therefore always free from repetition</a>
										</div>
										<div aria-labelledby="headingThree2" class="collapse" data-parent="#accordion2" id="collapseThree2" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div><!-- collapse -->
									</div>
								</div><!-- accordion -->
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Primary Style Accordion</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div aria-multiselectable="true" class="accordion accordion-primary" id="accordion3" role="tablist">
									<div class="card mb-0">
										<div class="card-header" id="headingOne3" role="tab">
											<a aria-controls="collapseOne3" aria-expanded="false" data-toggle="collapse" href="#collapseOne3">Lorem Ipsum is not simply random text</a>
										</div>
										<div aria-labelledby="headingOne3" class="collapse show" data-parent="#accordion3" id="collapseOne3" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingTwo3" role="tab">
											<a aria-controls="collapseTwo3" aria-expanded="true" class="collapsed" data-toggle="collapse" href="#collapseTwo3">All the Lorem Ipsum generators on the Internet</a>
										</div>
										<div aria-labelledby="headingTwo3" class="collapse" data-parent="#accordion3" id="collapseTwo3" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingThree3" role="tab">
											<a aria-controls="collapseThree2" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThree3">Lorem Ipsum is therefore always free from repetition</a>
										</div>
										<div aria-labelledby="headingThree3" class="collapse" data-parent="#accordion3" id="collapseThree3" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div><!-- collapse -->
									</div>
								</div><!-- accordion -->
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Gray Style Accordion</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div aria-multiselectable="true" class="accordion accordion-gray" id="accordion4" role="tablist">
									<div class="card mb-0">
										<div class="card-header" id="headingOne4" role="tab">
											<a aria-controls="collapseOne4" aria-expanded="false" data-toggle="collapse" href="#collapseOne4">Lorem Ipsum is not simply random text</a>
										</div>
										<div aria-labelledby="headingOne4" class="collapse show" data-parent="#accordion4" id="collapseOne4" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingTwo4" role="tab">
											<a aria-controls="collapseTwo4" aria-expanded="true" class="collapsed" data-toggle="collapse" href="#collapseTwo4">All the Lorem Ipsum generators on the Internet</a>
										</div>
										<div aria-labelledby="headingTwo4" class="collapse" data-parent="#accordion4" id="collapseTwo4" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingThree4" role="tab">
											<a aria-controls="collapseThree4" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThree4">Lorem Ipsum is therefore always free from repetition</a>
										</div>
										<div aria-labelledby="headingThree4" class="collapse" data-parent="#accordion4" id="collapseThree4" role="tabpanel">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
											</div>
										</div><!-- collapse -->
									</div>
								</div><!-- accordion -->
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts')

		<!--Internal  Datepicker js -->\
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		
@endsection
				