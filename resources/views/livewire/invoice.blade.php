@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Invoice</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Invoice</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12 col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="row m-0 no-gutters">
									<div class="col-lg-5 col-xl-4">
										<div class="border border-right-0 p-0 invoicelist main-invoice-list" id="invoicelist">
											<div class="card-body p-0">
												<div class="tab-menu-heading sub-panel-heading p-0 border-0">
													<div class="tabs-menu">
														<!-- Tabs -->
														<ul class="nav panel-tabs">
															<li class="active w-100">
																<a class="d-block" data-toggle="tab" href="#tab41" aria-expanded="true">
																	<div class="media selected">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$25</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab42" aria-expanded="false">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$32</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab42" aria-expanded="false">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$18</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab41" aria-expanded="true">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$32</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab42" aria-expanded="false">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$18</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab41" aria-expanded="true">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$25</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab42" aria-expanded="false">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002299</span> <span>$16</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 435423</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab41" aria-expanded="true">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$32</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab42" aria-expanded="false">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$18</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab41" aria-expanded="true">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$25</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab42" aria-expanded="false">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002299</span> <span>$16</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 435423</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab41" aria-expanded="true">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$32</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
															<li class="w-100">
																<a class="d-block" data-toggle="tab" href="#tab42" aria-expanded="false">
																	<div class="media">
																		<div class="media-icon">
																			<i class="far fa-file-alt"></i>
																		</div>
																		<div class="media-body">
																			<h6><span>Invoice002300</span> <span>$18</span></h6>
																			<div>
																				<p><span>Date:</span> Oct 25</p>
																				<p><span>Product:</span> 921021</p>
																			</div>
																		</div>
																	</div>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-7 col-xl-8 p-md-0">
										<div class="panel-body tabs-menu-body p-6 invoice-print d-block invoicedetailspage" id="invoicedetailspage">
											<div class="tab-content">
												<div class="tab-pane active" id="tab41">
													<div class="card-body p-0">
														<div class="invoice-header text-right d-block mb-5">
															<h1 class="invoice-title font-weight-bold text-uppercase mb-1">Invoice</h1>
														</div><!-- invoice-header -->
														<div class="row mt-4">
															<div class="col-md">
																<label class="font-weight-bold">Billed To</label>
																<div class="billed-to">
																	<h6>Goerge</h6>
																	<p>2406  Raoul Wallenberg Place<br>
																	Tel No: 203-875-4147<br>
																	Email: goerge234@gmail.com</p>
																</div>
															</div>
															<div class="col-md">
																<div class="billed-from text-md-right">
																	<label class="font-weight-bold">Billed From</label>
																	<h6>Spruko Technologies Pvt Ltd.</h6>
																	<p>201 Something St., Something Town, YT 242, Country 6546<br>
																	Tel No: 324 445-4544<br>
																	Email: info@spruko.com</p>
																</div><!-- billed-from -->
															</div>
														</div>
														<div class="table-responsive mt-4">
															<table class="table table-bordered border text-nowrap mb-0">
																<thead>
																	<tr>
																		<th class="wd-20p">Product</th>
																		<th class="tx-center">QNTY</th>
																		<th class="tx-right">Unit Price</th>
																		<th class="tx-right">Amount</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="font-weight-bold">Website design &amp; development</td>
																		<td class="tx-center">6</td>
																		<td class="tx-right">$250.00</td>
																		<td class="tx-right">$1500.00</td>
																	</tr>
																	<tr>
																		<td class="font-weight-bold">Branding</td>
																		<td class="tx-center">1</td>
																		<td class="tx-right">$900.00</td>
																		<td class="tx-right">$900.00</td>
																	</tr>
																	<tr>
																		<td class="font-weight-bold">Redesign Service</td>
																		<td class="tx-center">1</td>
																		<td class="tx-right">$500.00</td>
																		<td class="tx-right">$500.00</td>
																	</tr>
																	<tr>
																		<td class="font-weight-bold">Wordpress Plugins</td>
																		<td class="tx-center">5</td>
																		<td class="tx-right">$360.00</td>
																		<td class="tx-right">$1800.00</td>
																	</tr>
																	<tr>
																		<td class="valign-middle" rowspan="4">
																			<div class="invoice-notes">
																				<label class="main-content-label tx-13 font-weight-semibold">Notes</label>
																				<p> voluptatum deleniti atque corrupti explicabo.</p>
																			</div><!-- invoice-notes -->
																		</td>
																		<td class="tx-right font-weight-semibold">Sub-Total</td>
																		<td class="tx-right font-weight-semibold" colspan="2">$4700.00</td>
																	</tr>
																	<tr>
																		<td class="tx-right font-weight-semibold">Tax (5%)</td>
																		<td class="tx-right font-weight-semibold" colspan="2">$235.50</td>
																	</tr>
																	<tr>
																		<td class="tx-right font-weight-semibold">Discount</td>
																		<td class="tx-right font-weight-semibold" colspan="2">-$50.00</td>
																	</tr>
																	<tr>
																		<td class="text-uppercase font-weight-semibold">Total Due</td>
																		<td class="tx-right" colspan="2">
																			<h4 class="text-primary font-weight-bold">$4,885.50</h4>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="float-right mb-4">
															<button type="button" class="btn btn-primary mt-4" onClick="javascript:window.print();"><i class="si si-wallet"></i> Pay</button>
															<button type="button" class="btn btn-secondary mt-4" onClick="javascript:window.print();"><i class="si si-cloud-download"></i> Send</button>
															<button type="button" class="btn btn-info mt-4" onClick="javascript:window.print();"><i class="si si-printer"></i> Print</button>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab42">
													<div class="card-body p-0">
														<div class="invoice-header text-right d-block mb-5">
															<h1 class="invoice-title font-weight-bold text-uppercase mb-1">Invoice1</h1>
														</div><!-- invoice-header -->
														<div class="row mt-4">
															<div class="col-md">
																<label class="font-weight-bold">Billed To</label>
																<div class="billed-to">
																	<h6>Spruko Technologies Pvt Ltd.</h6>
																	<p>201 Something St., Something Town, YT 242, Country 6546<br>
																	Tel No: 324 445-4544<br>
																	Email: info@spruko.com</p>

																</div>
															</div>
															<div class="col-md">
																<div class="billed-from text-md-right">
																	<label class="font-weight-bold">Billed From</label>
																	<h6>Goerge</h6>
																	<p>2406  Raoul Wallenberg Place<br>
																	Tel No: 203-875-4147<br>
																	Email: goerge234@gmail.com</p>
																</div><!-- billed-from -->
															</div>
														</div>
														<div class="table-responsive mt-4">
															<table class="table table-bordered border text-nowrap mb-0">
																<thead>
																	<tr>
																		<th class="wd-20p">Product</th>
																		<th class="tx-center">QNTY</th>
																		<th class="tx-right">Unit Price</th>
																		<th class="tx-right">Amount</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="font-weight-bold">Website design &amp; development</td>
																		<td class="tx-center">6</td>
																		<td class="tx-right">$250.00</td>
																		<td class="tx-right">$1500.00</td>
																	</tr>
																	<tr>
																		<td class="font-weight-bold">Branding</td>
																		<td class="tx-center">1</td>
																		<td class="tx-right">$900.00</td>
																		<td class="tx-right">$900.00</td>
																	</tr>
																	<tr>
																		<td class="font-weight-bold">Redesign Service</td>
																		<td class="tx-center">1</td>
																		<td class="tx-right">$500.00</td>
																		<td class="tx-right">$500.00</td>
																	</tr>
																	<tr>
																		<td class="font-weight-bold">Wordpress Plugins</td>
																		<td class="tx-center">5</td>
																		<td class="tx-right">$360.00</td>
																		<td class="tx-right">$1800.00</td>
																	</tr>
																	<tr>
																		<td class="valign-middle" rowspan="4">
																			<div class="invoice-notes">
																				<label class="main-content-label tx-13 font-weight-semibold">Notes</label>
																				<p> voluptatum deleniti atque corrupti explicabo.</p>
																			</div><!-- invoice-notes -->
																		</td>
																		<td class="tx-right font-weight-semibold">Sub-Total</td>
																		<td class="tx-right font-weight-semibold" colspan="2">$4700.00</td>
																	</tr>
																	<tr>
																		<td class="tx-right font-weight-semibold">Tax (5%)</td>
																		<td class="tx-right font-weight-semibold" colspan="2">$235.50</td>
																	</tr>
																	<tr>
																		<td class="tx-right font-weight-semibold">Discount</td>
																		<td class="tx-right font-weight-semibold" colspan="2">-$50.00</td>
																	</tr>
																	<tr>
																		<td class="text-uppercase font-weight-semibold">Total Due</td>
																		<td class="tx-right" colspan="2">
																			<h4 class="text-primary font-weight-bold">$4,885.50</h4>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="float-right mb-4">
															<button type="button" class="btn btn-primary mt-4" onClick="javascript:window.print();"><i class="si si-wallet"></i> Pay</button>
															<button type="button" class="btn btn-secondary mt-4" onClick="javascript:window.print();"><i class="si si-cloud-download"></i> Send</button>
															<button type="button" class="btn btn-info mt-4" onClick="javascript:window.print();"><i class="si si-printer"></i> Print</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- main-invoice-list -->
				</div>
				<!-- row closed -->

                
@endsection('content')

@section('scripts') 

		<!--Internal  Chart.bundle js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>


		<!--Internal  Chart.bundle js -->
		<script src="{{URL::asset('assets/plugins/perfect-scrollbar/p-invoice.js')}}"></script>
		
@endsection