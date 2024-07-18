@extends('layouts.app')

@section('styles') 

		<!--- Internal Select2 css-->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Form Layouts</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
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
									Horizontal Alignment
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="pd-30 pd-sm-40 bg-gray-100">
									<div class="row row-xs">
										<div class="col-md-5">
											<input class="form-control" placeholder="Enter your username" type="text">
										</div>
										<div class="col-md-5 mg-t-10 mg-md-t-0">
											<input class="form-control" placeholder="Enter your password" type="password">
										</div>
										<div class="col-md mg-t-10 mg-md-t-0">
											<button class="btn btn-main-primary btn-block">Sign In</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vertical Alignment
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-lg-12">
										<div class="bg-gray-100 p-4">
											<div class="form-group">
												<input class="form-control" placeholder="Enter your username" type="text">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Enter your password" type="password">
											</div><button class="btn btn-main-primary pd-x-20">Sign In</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Horizontal Alignment with Icons
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="pd-30 pd-sm-40 bg-gray-100">
									<div class="row row-xs">
										<div class="col-md-5">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fe fe-user"></i></span>
												</div>
												<input class="form-control" placeholder="Enter your username" type="text">
											</div>
										</div>
										<div class="col-md-5 mg-t-10 mg-md-t-0">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fe fe-eye"></i></span>
												</div>
												<input class="form-control" placeholder="Enter your password" type="password">
											</div>
										</div>
										<div class="col-md mg-t-10 mg-md-t-0">
											<button class="btn btn-main-primary btn-block">Sign In</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vertical Alignment with Icons
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="pd-30 pd-sm-40 bg-gray-100">
									<div class="row row-xs">
										<div class="col-md-12">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fe fe-user"></i></span>
												</div>
												<input class="form-control" placeholder="Enter your username" type="text">
											</div>
										</div>
										<div class="col-md-12 mg-t-10">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fe fe-eye"></i></span>
												</div>
												<input class="form-control" placeholder="Enter your password" type="password">
											</div>
										</div>
										<div class="col-md-12 mg-t-10">
											<button class="btn btn-main-primary pd-x-30">Sign In</button>
										</div>
									</div>
								</div>
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
									Left Label Alignment
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="pd-30 pd-sm-40 bg-gray-100">
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Firstname</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input class="form-control" placeholder="Enter your firstname" type="text">
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Lastnane</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input class="form-control" placeholder="Enter your lastname" type="text">
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Email</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input class="form-control" placeholder="Enter your email" type="email">
										</div>
									</div>
									<button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">Register</button>
									<button class="btn btn-dark pd-x-30 mg-t-5">Cancel</button>
								</div>
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
									Vertical Label Alignment
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="pd-30 pd-sm-40 bg-gray-100">
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-12">
											<label class="form-label mg-b-0">Firstname</label>
										</div>
										<div class="col-md-12 mg-t-5">
											<input class="form-control" placeholder="Enter your firstname" type="text">
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-12">
											<label class="form-label mg-b-0">Lastnane</label>
										</div>
										<div class="col-md-12 mg-t-5">
											<input class="form-control" placeholder="Enter your lastname" type="text">
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-12">
											<label class="form-label mg-b-0">Email</label>
										</div>
										<div class="col-md-12 mg-t-5">
											<input class="form-control" placeholder="Enter your email" type="email">
										</div>
									</div>
									<button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">Register</button>
									<button class="btn btn-dark pd-x-30 mg-t-5">Cancel</button>
								</div>
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
									Form Group Wrapper
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="">
									<div class="row row-xs formgroup-wrapper">
										<div class="col-md-6">
											<div class="main-form-group">
												<label class="form-label text-muted">Email</label> <input class="form-control" placeholder="Enter your email" type="email" value="me@sprukotechnologies.com">
											</div><!-- main-form-group -->
										</div>
										<div class="col-md-6 mg-t-20 mg-md-t-0">
											<div class="main-form-group">
												<label class="form-label text-muted">Password</label> <input class="form-control" placeholder="Enter your password" type="password" value="thisismypassword">
											</div><!-- main-form-group -->
										</div>
									</div>
								</div>
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
									Form in Dropdown
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="main-dropdown-form-demo">
									<div class="mg-t-20">
										<button class="btn btn-main-primary pd-x-20" data-toggle="dropdown">Live Example <i class="icon ion-ios-arrow-down mg-l-5 tx-12"></i></button>
										<div class="dropdown-menu shadow">
											<h6 class="dropdown-title">Subscribe</h6>
											<p class="mg-b-20 text-muted">Don't miss any update from us.</p>
											<div class="form-group">
												<input class="form-control" placeholder="Enter your fullname" type="text">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Enter your email" type="email">
											</div><button class="btn btn-primary btn-block">Subscribe</button>
										</div>
									</div>
								</div><!-- main-dropdown-demo -->
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
									Form in Modal
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="tx-center pd-y-20 bg-gray-100">
									<a class="btn btn-main-primary" data-target="#modaldemo1" data-toggle="modal" href="">View Live Demo</a>
								</div><!-- pd-y-30 -->
								<div class="modal">
									<div class="modal-dialog wd-xl-400" role="document">
										<div class="modal-content">
											<div class="modal-body pd-sm-40">
												<button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												<h5 class="modal-title mg-b-5">Create New Account</h5>
												<p class="mg-b-20 text-muted">Let's get you all setup so you can begin using our app.</p>
												<div class="form-group">
													<input class="form-control" placeholder="Firstname" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Lastname" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Phone" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Email" type="text">
												</div>
												<div class="form-group mg-b-25">
													<label class="ckbox mg-b-5"><input type="checkbox"><span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span></label> <label class="ckbox"><input checked type="checkbox"><span class="tx-13">Yes, I want to receive email from your newsletter.</span></label>
												</div><button class="btn btn-primary btn-block">Continue</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Payment Details
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
										<div class="card card-body pd-20 pd-md-40 border shadow-none">
											<h5 class="card-title mg-b-20">Your Payment Details</h5>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-900">Name on Card</label> <input class="form-control" required="" type="text">
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-900">Card Number</label>
												<div class="pos-relative">
													<input class="form-control pd-r-80" required="" type="text">
													<div class="d-flex pos-absolute t-5 r-10"><img alt="" class="wd-30 mg-r-5" src="{{URL::asset('assets/img/visa.png')}}"> <img alt="" class="wd-30" src="{{URL::asset('assets/img/mastercard.png')}}"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="row row-sm">
													<div class="col-sm-9">
														<label class="main-content-label tx-11 tx-medium tx-gray-900">Expiration Date</label>
														<div class="row row-sm">
															<div class="col-sm-7">
																<select class="form-control select2-no-search">
																	<option label="Choose one">
																	</option>
																	<option value="January">
																		January
																	</option>
																	<option value="February">
																		February
																	</option>
																	<option value="March">
																		March
																	</option>
																	<option value="April">
																		April
																	</option>
																	<option value="May">
																		May
																	</option>
																</select>
															</div>
															<div class="col-sm-5 mg-t-10 mg-sm-t-0">
																<select class="form-control select2-no-search">
																	<option label="Choose one">
																	</option>
																	<option value="2018">
																		2018
																	</option>
																	<option value="2019">
																		2019
																	</option>
																	<option value="2020">
																		2020
																	</option>
																	<option value="2021">
																		2021
																	</option>
																	<option value="2022">
																		2022
																	</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-sm-3 mg-t-20 mg-sm-t-0">
														<label class="main-content-label tx-11 tx-medium tx-gray-900">CVC</label> <input class="form-control" required="" type="text">
													</div>
												</div>
											</div>
											<div class="form-group mg-b-20">
												<label class="ckbox"><input checked type="checkbox"><span class="tx-13">Save my card for future purchases</span></label>
											</div>
											<button class="btn btn-main-primary btn-block">Complete Payment</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									ESTIMATE SHIPPING AND TAX
								</div>
								<p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
										<div class="card card-body pd-20 pd-md-40 border shadow-none">
											<div class="form-group mb-4">
											<label class="form-label fs-15">Country</label>
												<div class=" gutters-xs">
													<select name="user[month]" class="form-control custom-select select2">
														<option value="UM">United States of America</option>
														<option value="AF">Afghanistan</option>
														<option value="AL">Albania</option>
														<option value="AD">Andorra</option>
														<option value="AG">Antigua and Barbuda</option>
														<option value="AU">Australia</option>
														<option value="AM">Armenia</option>
														<option value="AO">Angola</option>
														<option value="AR">Argentina</option>
														<option value="AT">Austria</option>
														<option value="AZ">Azerbaijan</option>
														<option value="BA">Bosnia and Herzegovina</option>
														<option value="BB">Barbados</option>
														<option value="BD">Bangladesh</option>
														<option value="BE">Belgium</option>
														<option value="BF">Burkina Faso</option>
														<option value="BG">Bulgaria</option>
														<option value="BH">Bahrain</option>
														<option value="BJ">Benin</option>
														<option value="BN">Brunei</option>
														<option value="BO">Bolivia</option>
														<option value="BT">Bhutan</option>
														<option value="BY">Belarus</option>
														<option value="CD">Congo</option>
														<option value="CA">Canada</option>
														<option value="CF">Central African Republic</option>
														<option value="CI">Cote d'Ivoire</option>
														<option value="CL">Chile</option>
														<option value="CM">Cameroon</option>
														<option value="CN">China</option>
														<option value="CO">Colombia</option>
														<option value="CU">Cuba</option>
														<option value="CV">Cabo Verde</option>
														<option value="CY">Cyprus</option>
														<option value="DJ">Djibouti</option>
														<option value="DK">Denmark</option>
														<option value="DM">Dominica</option>
														<option value="DO">Dominican Republic</option>
														<option value="EC">Ecuador</option>
														<option value="EE">Estonia</option>
														<option value="ER">Eritrea</option>
														<option value="ET">Ethiopia</option>
														<option value="FI">Finland</option>
														<option value="FJ">Fiji</option>
														<option value="FR">France</option>
														<option value="GA">Gabon</option>
														<option value="GD">Grenada</option>
														<option value="GE">Georgia</option>
														<option value="GH">Ghana</option>
														<option value="GH">Ghana</option>
														<option value="HN">Honduras</option>
														<option value="HT">Haiti</option>
														<option value="HU">Hungary</option>
														<option value="ID">Indonesia</option>
														<option value="IE">Ireland</option>
														<option value="IL">Israel</option>
														<option value="IN">India</option>
														<option value="IQ">Iraq</option>
														<option value="IR">Iran</option>
														<option value="IS">Iceland</option>
														<option value="IT">Italy</option>
														<option value="JM">Jamaica</option>
														<option value="JO">Jordan</option>
														<option value="JP">Japan</option>
														<option value="KE">Kenya</option>
														<option value="KG">Kyrgyzstan</option>
														<option value="KI">Kiribati</option>
														<option value="KW">Kuwait</option>
														<option value="KZ">Kazakhstan</option>
														<option value="LA">Laos</option>
														<option value="LB">Lebanons</option>
														<option value="LI">Liechtenstein</option>
														<option value="LR">Liberia</option>
														<option value="LS">Lesotho</option>
														<option value="LT">Lithuania</option>
														<option value="LU">Luxembourg</option>
														<option value="LV">Latvia</option>
														<option value="LY">Libya</option>
														<option value="MA">Morocco</option>
														<option value="MC">Monaco</option>
														<option value="MD">Moldova</option>
														<option value="ME">Montenegro</option>
														<option value="MG">Madagascar</option>
														<option value="MH">Marshall Islands</option>
														<option value="MK">Macedonia (FYROM)</option>
														<option value="ML">Mali</option>
														<option value="MM">Myanmar (formerly Burma)</option>
														<option value="MN">Mongolia</option>
														<option value="MR">Mauritania</option>
														<option value="MT">Malta</option>
														<option value="MV">Maldives</option>
														<option value="MW">Malawi</option>
														<option value="MX">Mexico</option>
														<option value="MZ">Mozambique</option>
														<option value="NA">Namibia</option>
														<option value="NG">Nigeria</option>
														<option value="NO">Norway</option>
														<option value="NP">Nepal</option>
														<option value="NR">Nauru</option>
														<option value="NZ">New Zealand</option>
														<option value="OM">Oman</option>
														<option value="PA">Panama</option>
														<option value="PF">Paraguay</option>
														<option value="PG">Papua New Guinea</option>
														<option value="PH">Philippines</option>
														<option value="PK">Pakistan</option>
														<option value="PL">Poland</option>
														<option value="QA">Qatar</option>
														<option value="RO">Romania</option>
														<option value="RU">Russia</option>
														<option value="RW">Rwanda</option>
														<option value="SA">Saudi Arabia</option>
														<option value="SB">Solomon Islands</option>
														<option value="SC">Seychelles</option>
														<option value="SD">Sudan</option>
														<option value="SE">Sweden</option>
														<option value="SG">Singapore</option>
														<option value="TG">Togo</option>
														<option value="TH">Thailand</option>
														<option value="TJ">Tajikistan</option>
														<option value="TL">Timor-Leste</option>
														<option value="TM">Turkmenistan</option>
														<option value="TN">Tunisia</option>
														<option value="TO">Tonga</option>
														<option value="TR">Turkey</option>
														<option value="TT">Trinidad and Tobago</option>
														<option value="TW">Taiwan</option>
														<option value="UA">Ukraine</option>
														<option value="UG">Uganda</option>
														<option value="UY">Uruguay</option>
														<option value="UZ">Uzbekistan</option>
														<option value="VA">Vatican City (Holy See)</option>
														<option value="VE">Venezuela</option>
														<option value="VN">Vietnam</option>
														<option value="VU">Vanuatu</option>
														<option value="YE">Yemen</option>
														<option value="ZM">Zambia</option>
														<option value="ZW">Zimbabwe</option>
													</select>
												</div>
												<label class="form-label mt-4 fs-15">Expiration Date</label>
												<div class="gutters-xs">
													<select name="alabama" class="form-control custom-select select2">
														<option value="">Alabama</option>
														<option value="Alabama">Alabama</option>
														<option value="Alaska">Alaska</option>
														<option value="American Samoa">American Samoa</option>
														<option value="Arkansas">Arkansas</option>
														<option value="California">California</option>
														<option value="Colorado">Colorado</option>
														<option value="Connecticut">Connecticut</option>
														<option value="Delaware">Delaware</option>
														<option value="Florida">Florida</option>
														<option value="Georgia">Georgia</option>
														<option value="Idaho">Idaho</option>
													</select>
												</div>
												<label class="form-label mt-4 fs-15">Zip/Postal Code</label>
												<div class="form-group mb-0">
													<div class="form-group">
														<input type="number" class="form-control" id="postal" placeholder="Zip/Postal">
													</div>
												</div>
											</div>
											<div class="form-footer mt-2">
												<a href="#" class="btn btn-primary">GET A QUOTE</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection('content')

@section('modals') 

		<!-- modal -->
		<div id="modaldemo1" class="modal">
			<div class="modal-dialog wd-xl-400" role="document">
				<div class="modal-content">
					<div class="modal-body pd-20 pd-sm-40">
						<button type="button" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h5 class="modal-title mg-b-5">Create New Account</h5>
						<p class="mg-b-20 text-muted">Let's get you all setup so you can begin using our app.</p>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Firstname">
						</div><!-- form-group -->
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Lastname">
						</div><!-- form-group -->
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Phone">
						</div><!-- form-group -->
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email">
						</div><!-- form-group -->
						<div class="form-group mg-b-25">
							<label class="ckbox mg-b-5">
								<input type="checkbox">
								<span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span>
							</label>
							<label class="ckbox">
								<input type="checkbox" checked>
								<span class="tx-13">Yes, I want to receive email from your newsletter.</span>
							</label>
						</div><!-- form-group -->
						<button class="btn btn-primary btn-block">Continue</button>
					</div><!-- modal-body -->
				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->

@endsection('modals')

@section('scripts') 

		<!--Internal  Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal  Perfect-scrollbar js -->
		<script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

		<!-- Form-layouts js -->
		<script src="{{URL::asset('assets/js/form-layouts.js')}}"></script>

@endsection	