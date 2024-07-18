@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Faqs</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Faqs</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Frequently Asked Questions</h6>
									<p class="tx-12 text-muted card-sub-title">The default Frequently Asked Questions About Template.</p>
								</div>
								<div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
									<div class="card mb-0">
										<div class="card-header" id="headingOne" role="tab">
											<a aria-controls="collapseOne" aria-expanded="true" data-toggle="collapse" href="#collapseOne">How To Insert All The Plugins?</a>
										</div>
										<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordion" id="collapseOne" role="tabpanel">
											<div class="card-body">
												A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingTwo" role="tab">
											<a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwo">How Can I contact?</a>
										</div>
										<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="collapseTwo" role="tabpanel">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingThree" role="tab">
											<a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThree">Can I use this Plugins in Another Template?</a>
										</div>
										<div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="collapseThree" role="tabpanel">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
											</div>
										</div><!-- collapse -->
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingFour" role="tab">
											<a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseFour">How Can I Add another page in Template?</a>
										</div>
										<div aria-labelledby="headingFour" class="collapse" data-parent="#accordion" id="collapseFour" role="tabpanel">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
											</div>
										</div><!-- collapse -->
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingFive" role="tab">
											<a aria-controls="collapseFive" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseFive">It is Easy to Customizable?</a>
										</div>
										<div aria-labelledby="headingFive" class="collapse" data-parent="#accordion" id="collapseFive" role="tabpanel">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
											</div>
										</div><!-- collapse -->
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingSix" role="tab">
											<a aria-controls="collapseSix" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseSix">How can I download This template?</a>
										</div>
										<div aria-labelledby="headingSix" class="collapse" data-parent="#accordion" id="collapseSix" role="tabpanel">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
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

		<!--Internal  Chart.bundle js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

@endsection	