@extends('layouts.app')

@section('styles') 

		<!-- Internal Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">Product Cart</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Product Cart</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row opened -->
				<div class="row">
					<div class="col-xl-7 col-lg-7">
						<div class="card">
							<div class="card-header border-bottom py-3 d-sm-flex align-items-center">
								<h4 class="card-title">My Cart(1)</h4>
								<div class="ml-auto card-options">
									<div class="d-flex mg-t-10 mg-sm-t-0">
										<div class="font-weight-bold mg-r-10 mg-t-10"><i class="fe fe-map"></i> Deliver to</div>
										<div>
											<select class="select2 form-control">
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
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="media">
									<div class="card-aside-img">
										<img src="{{URL::asset('assets/img/ecommerce/01.jpg')}}" alt="img" class="wd-100-f ht-100 mr-4">
										<div class="d-flex mg-t-10">
											<a class="tx-24 mg-t-5" href="#"><i class="fe fe-minus-circle"></i></a>
											<input type="text" class="form-control form-control-sm text-center wd-50 mg-x-5" placeholder="1">
											<a class="tx-24 mg-t-5" href="#"><i class="fe fe-plus-circle"></i></a>
										</div>
									</div>
									<div class="media-body">
										<div class="card-item-desc mt-0">
											<h6 class="font-weight-semibold mt-0 text-uppercase">New Modal Tree for Selling</h6>
											<small class="text-muted tx-13">Finish Color-Multi Color</small>
											<p class="tx-13 mg-b-5">Seller:<b>New Manager</b></p>
											<div class="d-flex">
												<h4 class="h5 w-50 font-weight-bold text-danger">$25 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$47</span></h4>
											</div>
											<a class="tx-gray-900 tx-uppercase font-weight-bold mg-r-10" href="#">Save For Later</a>
											<a class="tx-gray-900 tx-uppercase font-weight-bold" href="#">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="media">
									<div class="card-aside-img">
										<img src="{{URL::asset('assets/img/ecommerce/02.jpg')}}" alt="img" class="wd-100-f ht-100 mr-4">
										<div class="d-flex mg-t-10">
											<a class="tx-24 mg-t-5" href="#"><i class="fe fe-minus-circle"></i></a>
											<input type="text" class="form-control form-control-sm text-center wd-50 mg-x-5" placeholder="1">
											<a class="tx-24 mg-t-5" href="#"><i class="fe fe-plus-circle"></i></a>
										</div>
									</div>
									<div class="media-body">
										<div class="card-item-desc mt-0">
											<h6 class="font-weight-semibold mt-0 text-uppercase">New Modal Sofa for Selling</h6>
											<small class="text-muted tx-13">Finish Color-Multi Color</small>
											<p class="tx-13 mg-b-5">Seller:<b>New Manager</b></p>
											<div class="d-flex">
												<h4 class="h5 w-50 font-weight-bold text-danger">$25 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$47</span></h4>
											</div>
											<a class="tx-gray-900 tx-uppercase font-weight-bold mg-r-10" href="#">Save For Later</a>
											<a class="tx-gray-900 tx-uppercase font-weight-bold" href="#">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="media">
									<div class="card-aside-img">
										<img src="{{URL::asset('assets/img/ecommerce/03.jpg')}}" alt="img" class="wd-100-f ht-100 mr-4">
										<div class="d-flex mg-t-10">
											<a class="tx-24 mg-t-5" href="#"><i class="fe fe-minus-circle"></i></a>
											<input type="text" class="form-control form-control-sm text-center wd-50 mg-x-5" placeholder="1">
											<a class="tx-24 mg-t-5" href="#"><i class="fe fe-plus-circle"></i></a>
										</div>
									</div>
									<div class="media-body">
										<div class="card-item-desc mt-0">
											<h6 class="font-weight-semibold mt-0 text-uppercase">New Modal Headset for Selling</h6>
											<small class="text-muted tx-13">Finish Color-Multi Color</small>
											<p class="tx-13 mg-b-5">Seller:<b>New Manager</b></p>
											<div class="d-flex">
												<h4 class="h5 w-50 font-weight-bold text-danger">$25 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$47</span></h4>
											</div>
											<a class="tx-gray-900 tx-uppercase font-weight-bold mg-r-10" href="#">Save For Later</a>
											<a class="tx-gray-900 tx-uppercase font-weight-bold" href="#">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="media">
									<div class="card-aside-img">
										<img src="{{URL::asset('assets/img/ecommerce/04.jpg')}}" alt="img" class="wd-100-f ht-100 mr-4">
										<div class="d-flex mg-t-10">
											<a class="tx-24 mg-t-5" href="#"><i class="fe fe-minus-circle"></i></a>
											<input type="text" class="form-control form-control-sm text-center wd-50 mg-x-5" placeholder="1">
											<a class="tx-24 mg-t-5" href="#"><i class="fe fe-plus-circle"></i></a>
										</div>
									</div>
									<div class="media-body">
										<div class="card-item-desc mt-0">
											<h6 class="font-weight-semibold mt-0 text-uppercase">New Modal Watch for Selling</h6>
											<small class="text-muted tx-13">Finish Color-Multi Color</small>
											<p class="tx-13 mg-b-5">Seller:<b>New Manager</b></p>
											<div class="d-flex">
												<h4 class="h5 w-50 font-weight-bold text-danger">$25 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$47</span></h4>
											</div>
											<a class="tx-gray-900 tx-uppercase font-weight-bold mg-r-10" href="#">Save For Later</a>
											<a class="tx-gray-900 tx-uppercase font-weight-bold" href="#">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer text-right">
								<a class="btn btn-success" href="">Place Order</a>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-5">
						<div class="card">
							<div class="card-header pd-y-20 border-bottom">
								<h3 class="card-title mb-0">Estimate Shipping and tax</h3>
							</div>
							<div class="card-body">
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
						<div class="card">
							<div class="card-header pd-y-20 border-bottom">
								<div class="card-title mb-0">Order Summery</div>
							</div>
							<div class="card-body">
								<div class="row mb-4">
									<div class="col-6"><input class="productcart form-control" type="text" placeholder="Coupon Code"></div>
									<div class="col-6"><a href="#" class="btn btn-primary btn-md">Apply</a></div>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td>Cart Subtotal</td>
												<td class="text-right">$792.00</td>
											</tr>
											<tr>
												<td><span>Totals</span></td>
												<td class="text-right text-muted"><span>$792.00</span></td>
											</tr>
											<tr>
												<td><span>Order Total</span></td>
												<td><h2 class="price text-right mb-0">$792.00</h2></td>
											</tr>
										</tbody>
									</table>
								</div>
								<form class="text-center">
									<button class="btn btn-secondary float-left mt-2 m-b-20 " type="submit" value="Proceed To Checkout">Proceed To Checkout</button>
									<button class="btn btn-success mt-2 float-right" type="submit" value="Continue Shopping">Continue Shopping</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts') 

		<!-- Internal Select2.min js -->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
		
@endsection