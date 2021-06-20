@extends('website.layouts.master2')
@section('title')
Ten san pham
@endsection
@section('content')
@include("website.blocks.breadcumb", ['element' => 'show','name' => 'Tài khoản', 'url' => route('profile'), 'param' => 'Địa chỉ khách hàng'])
<section class="address">
	<div class="container page_address margin-bottom-20">
		<div class="row">
			<div class="col-xs-12 col-lg-12 adr_title">
				<h1 class="title-head h5">Địa chỉ của bạn <a class="f-right a_address" href="/account" alt=""><i
							class="fa fa-arrow-left" aria-hidden="true"></i> Quay lại trang tài khoản</a></h1>
			</div>
			<div class="col-xs-12 col-lg-12">
				<div class="row">
					<div class="col-md-12">
						<p class="btn-row">
							<button class="btn-edit-addr btn btn-primary 1" type="button">+ Thêm địa chỉ</button>
							<script>
								$('.btn-edit-addr.btn.btn-primary.1').click(function () {
									if ($('#add_address').css('display') === 'block') {
										$('#add_address').css('display', 'none')
									} else {
										$('#add_address').css('display', 'block')
									}
								})
							</script>
						</p>
					</div>
					<div id="add_address" class="col-xs-12 form-list" style="display:none; margin-top:30px;">
						<form accept-charset="utf-8" action="/account/addresses" id="customer_address" method="post">
							<div class="clearfix row">
								<div class="col-xs-12 col-lg-12">
									<fieldset class="form-group">
										<label>Tên <span class="required">*</span></label>
										<input type="text" class="form-control" name="FirstName" placeholder="Nhập tên của bạn"
											value="ssssssssss" required="" requiredmsg="Không được bỏ trống">
									</fieldset>
								</div>
								<div class="col-xs-12 col-lg-12">
									<fieldset class="form-group">
										<label>Họ <span class="required">*</span></label>
										<input type="text" class="form-control" name="LastName" placeholder="Nhập họ của bạn" value=""
											required="" requiredmsg="Không được bỏ trống">
									</fieldset>
								</div>
								<div class="col-xs-12 col-lg-12">
									<fieldset class="form-group">
										<label>Công ty</label>
										<input type="text" class="form-control" name="Company" placeholder="Nhập công ty của bạn" value="">
									</fieldset>
								</div>
								<div class="col-xs-12 col-lg-12">
									<fieldset class="form-group">
										<label>Địa chỉ <span class="required">*</span></label>
										<input type="text" class="form-control" name="Address1" placeholder="Nhập địa chỉ của bạn" value=""
											required="" requiredmsg="Không được bỏ trống">
									</fieldset>
								</div>
								<div class="col-xs-12 col-lg-12">
									<fieldset class="form-group">
										<label>Địa chỉ 2</label>
										<input type="text" class="form-control" name="Address2" placeholder="Nhập địa chỉ của bạn" value="">
									</fieldset>
								</div>
								<div class="col-xs-12 col-lg-12">
									<fieldset class="form-group">
										<label>Thành phố <span class="required">*</span></label>
										<input type="text" class="form-control" name="City" placeholder="Nhập thành phố của bạn" value=""
											required="" requiredmsg="Không được bỏ trống">
									</fieldset>
								</div>
								<div class="col-xs-12 col-lg-12">
									<fieldset class="form-group">
										<label>Quốc gia <span class="required">*</span></label>
										<select name="Country" class="form-control vn-fix" id="mySelect1" data-default="">
											<option value="Abkhazia">Abkhazia</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Antigua and Barbuda">Antigua and Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia">Bolivia</option>
											<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Brazil">Brazil</option>
											<option value="Brunei">Brunei</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo-Brazzaville">Congo-Brazzaville</option>
											<option value="Congo-Kinshasa">Congo-Kinshasa</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Côte d" ivoire'="">Côte d'Ivoire</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">Dominican Republic</option>
											<option value="East Timor">East Timor</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Greece">Greece</option>
											<option value="Grenada">Grenada</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea-Bissau">Guinea-Bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran">Iran</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan (Nippon)">Japan (Nippon)</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea">Korea</option>
											<option value="Kosovo">Kosovo</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Laos">Laos</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libya">Libya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macedonia (FYROM)">Macedonia (FYROM)</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia">Micronesia</option>
											<option value="Moldova">Moldova</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherlands">Netherlands</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="North Korea">North Korea</option>
											<option value="Northern Cyprus">Northern Cyprus</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau">Palau</option>
											<option value="Palestine">Palestine</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Qatar">Qatar</option>
											<option value="Romania">Romania</option>
											<option value="Russia">Russia</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
											<option value="Saint Lucia">Saint Lucia</option>
											<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
											<option value="Samoa">Samoa</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome and Principe">Sao Tome and Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Scotland">Scotland</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Slovak Republic">Slovak Republic</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="Somaliland">Somaliland</option>
											<option value="South Africa">South Africa</option>
											<option value="South Ossetia">South Ossetia</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syria">Syria</option>
											<option value="Taiwan">Taiwan</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania">Tanzania</option>
											<option value="Thailand">Thailand</option>
											<option value="Togo">Togo</option>
											<option value="Tonga">Tonga</option>
											<option value="Transnistria">Transnistria</option>
											<option value="Trinidad and Tobago">Trinidad and Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
											<option value="Uruguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Vatican City">Vatican City</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Vietnam">Vietnam</option>
											<option value="Wales">Wales</option>
											<option value="Western Sahara">Western Sahara</option>
											<option value="Yemen">Yemen</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
										</select>
									</fieldset>
								</div>

								<div class="col-xs-12 col-lg-12">
									<fieldset class="form-group">
										<label>Mã Zip</label>
										<input type="text" class="form-control" name="Zip" placeholder="Nhập địa chỉ của bạn" value="">
									</fieldset>
								</div>
								<div class="col-xs-12 col-lg-12">
									<fieldset class="form-group">
										<label>Số điện thoại <span class="required">*</span></label>
										<input type="number" class="form-control" name="PhoneNumber"
											placeholder="Nhập số điện thoại của bạn" value="" required="" requiredmsg="Không được bỏ trống">
									</fieldset>
								</div>

								<div class="checkbox  col-xs-12 col-lg-12">
									<label class="c-input c-checkbox">
										<input type="checkbox" id="address_default_address_0" name="IsDefault" value="true">
										<span class="c-indicator"></span>
										Đặt là địa chỉ mặc định?
									</label>
								</div>
								<div class="form-group clearfix col-xs-12">

									<div class="col-xs-12">
										<div class="">
											<button class="btn btn-lg btn-primary" type="submit"><span>Thêm địa chỉ</span></button>
											<button class="btn btn-lg btn-dark btn-outline article-readmore"
												type="button"><span>Hủy</span></button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-lg-12">

				<div class="row total_address">


					<div id="view_address_18675876" class="customer_address col-xs-12">

						<div class="row" style="border-top: 1px #ebebeb solid;padding-top: 30px;margin-top: 20px;">
							<div class="col-sm-6">
								<div class="address_info ">
									<div class="info clearfix">
										<span class="address-group">




											<div class="address form-signup">
												<p><strong>Tên tài khoản: </strong>ssssssssss 111111111111111111

												</p>

												<p><strong>Công ty:</strong> </p>
												<p>
													<strong>Địa chỉ: </strong>
													ssssssssssssss ,
													,
													sssssssss,
													Barbados
												</p>
												<p><strong>Quốc tịch:</strong> Barbados</p>
												<p><strong>Số điện thoại:</strong> 01554686868</p>


											</div>
										</span>
									</div>
								</div>
								<div id="tool_address_18675876" class="">
									<p class="btn-row">
										<!-- <button class="btn btn-lg btn-style article-readmore" type="button"  onclick="Bizweb.CustomerAddress.toggleEditForm(18675876);return false" ><span>Sửa</span></button> -->
										<button class="btn-edit-addr btn btn-primary 2" type="button" data-toggle="collapse"
											data-target="#collapseExample-18675876" aria-expanded="false"
											aria-controls="collapseExample-18675876">
											Chỉnh sửa địa chỉ
										</button>
										<button class="btn btn-dark btn-edit-addr" type="button"
										><span>Xóa</span></button>
									</p>
									<script>
										$('.btn-edit-addr.btn.btn-primary.2').click(function () {
											if ($('#collapseExample-18675876').css('display') === 'block') {
												$('#collapseExample-18675876').css('display', 'none')
											} else {
												$('#collapseExample-18675876').css('display', 'block')
											}
										})
									</script>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="collapse" id="collapseExample-18675876" style="display: none;">
									<div id="edit_address_18675876" class="form-list">
										<form accept-charset="utf-8" action="/account/addresses/18675876" id="customer_address"
											method="post">
											<input name="FormType" type="hidden" value="customer_address">
											<input name="utf8" type="hidden" value="true">
											<div class="clearfix">
												<fieldset class="form-group">
													<label>Tên <span class="required">*</span></label>
													<input type="text" class="form-control" name="FirstName" value="111111111111111111"
														required="" requiredmsg="Không được bỏ trống">
												</fieldset>
												<fieldset class="form-group">
													<label>Họ <span class="required">*</span></label>
													<input type="text" class="form-control" name="LastName" value="ssssssssss" required=""
														requiredmsg="Không được bỏ trống">
												</fieldset>
												<fieldset class="form-group">
													<label>Công ty</label>
													<input type="text" class="form-control" name="Company" value="">
												</fieldset>
												<fieldset class="form-group">
													<label>Địa chỉ <span class="required">*</span></label>
													<input type="text" class="form-control" name="Address1" value="ssssssssssssss" required=""
														requiredmsg="Không được bỏ trống">
												</fieldset>
												<fieldset class="form-group">
													<label>Địa chỉ 2</label>
													<input type="text" class="form-control" name="Address2" value="">
												</fieldset>
												<fieldset class="form-group">
													<label>Thành phố <span class="required">*</span></label>
													<input type="text" class="form-control" name="City" value="sssssssss" required=""
														requiredmsg="Không được bỏ trống">
												</fieldset>
												<fieldset class="form-group">
													<label>Quốc gia <span class="required">*</span></label>
													<select name="Country" class="form-control mySelect2" id="mySelect2_18675876"
														data-default="Barbados">Barbados<option value="Abkhazia">Abkhazia</option>
														<option value="Afghanistan">Afghanistan</option>
														<option value="Albania">Albania</option>
														<option value="Algeria">Algeria</option>
														<option value="Andorra">Andorra</option>
														<option value="Angola">Angola</option>
														<option value="Antigua and Barbuda">Antigua and Barbuda</option>
														<option value="Argentina">Argentina</option>
														<option value="Armenia">Armenia</option>
														<option value="Australia">Australia</option>
														<option value="Austria">Austria</option>
														<option value="Azerbaijan">Azerbaijan</option>
														<option value="Bahamas">Bahamas</option>
														<option value="Bahrain">Bahrain</option>
														<option value="Bangladesh">Bangladesh</option>
														<option value="Barbados">Barbados</option>
														<option value="Belarus">Belarus</option>
														<option value="Belgium">Belgium</option>
														<option value="Belize">Belize</option>
														<option value="Benin">Benin</option>
														<option value="Bhutan">Bhutan</option>
														<option value="Bolivia">Bolivia</option>
														<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
														<option value="Botswana">Botswana</option>
														<option value="Brazil">Brazil</option>
														<option value="Brunei">Brunei</option>
														<option value="Bulgaria">Bulgaria</option>
														<option value="Burkina Faso">Burkina Faso</option>
														<option value="Burundi">Burundi</option>
														<option value="Cambodia">Cambodia</option>
														<option value="Cameroon">Cameroon</option>
														<option value="Canada">Canada</option>
														<option value="Cape Verde">Cape Verde</option>
														<option value="Central African Republic">Central African Republic</option>
														<option value="Chad">Chad</option>
														<option value="Chile">Chile</option>
														<option value="China">China</option>
														<option value="Colombia">Colombia</option>
														<option value="Comoros">Comoros</option>
														<option value="Congo-Brazzaville">Congo-Brazzaville</option>
														<option value="Congo-Kinshasa">Congo-Kinshasa</option>
														<option value="Costa Rica">Costa Rica</option>
														<option value="Côte d" ivoire'="">Côte d'Ivoire</option>
														<option value="Croatia">Croatia</option>
														<option value="Cuba">Cuba</option>
														<option value="Cyprus">Cyprus</option>
														<option value="Czech Republic">Czech Republic</option>
														<option value="Denmark">Denmark</option>
														<option value="Djibouti">Djibouti</option>
														<option value="Dominica">Dominica</option>
														<option value="Dominican Republic">Dominican Republic</option>
														<option value="East Timor">East Timor</option>
														<option value="Ecuador">Ecuador</option>
														<option value="Egypt">Egypt</option>
														<option value="El Salvador">El Salvador</option>
														<option value="Equatorial Guinea">Equatorial Guinea</option>
														<option value="Eritrea">Eritrea</option>
														<option value="Estonia">Estonia</option>
														<option value="Ethiopia">Ethiopia</option>
														<option value="Fiji">Fiji</option>
														<option value="Finland">Finland</option>
														<option value="France">France</option>
														<option value="Gabon">Gabon</option>
														<option value="Gambia">Gambia</option>
														<option value="Georgia">Georgia</option>
														<option value="Germany">Germany</option>
														<option value="Ghana">Ghana</option>
														<option value="Greece">Greece</option>
														<option value="Grenada">Grenada</option>
														<option value="Guatemala">Guatemala</option>
														<option value="Guinea">Guinea</option>
														<option value="Guinea-Bissau">Guinea-Bissau</option>
														<option value="Guyana">Guyana</option>
														<option value="Haiti">Haiti</option>
														<option value="Honduras">Honduras</option>
														<option value="Hong Kong">Hong Kong</option>
														<option value="Hungary">Hungary</option>
														<option value="Iceland">Iceland</option>
														<option value="India">India</option>
														<option value="Indonesia">Indonesia</option>
														<option value="Iran">Iran</option>
														<option value="Iraq">Iraq</option>
														<option value="Ireland">Ireland</option>
														<option value="Israel">Israel</option>
														<option value="Italy">Italy</option>
														<option value="Jamaica">Jamaica</option>
														<option value="Japan (Nippon)">Japan (Nippon)</option>
														<option value="Jordan">Jordan</option>
														<option value="Kazakhstan">Kazakhstan</option>
														<option value="Kenya">Kenya</option>
														<option value="Kiribati">Kiribati</option>
														<option value="Korea">Korea</option>
														<option value="Kosovo">Kosovo</option>
														<option value="Kuwait">Kuwait</option>
														<option value="Kyrgyzstan">Kyrgyzstan</option>
														<option value="Laos">Laos</option>
														<option value="Latvia">Latvia</option>
														<option value="Lebanon">Lebanon</option>
														<option value="Lesotho">Lesotho</option>
														<option value="Liberia">Liberia</option>
														<option value="Libya">Libya</option>
														<option value="Liechtenstein">Liechtenstein</option>
														<option value="Lithuania">Lithuania</option>
														<option value="Luxembourg">Luxembourg</option>
														<option value="Macedonia (FYROM)">Macedonia (FYROM)</option>
														<option value="Madagascar">Madagascar</option>
														<option value="Malawi">Malawi</option>
														<option value="Malaysia">Malaysia</option>
														<option value="Maldives">Maldives</option>
														<option value="Mali">Mali</option>
														<option value="Malta">Malta</option>
														<option value="Marshall Islands">Marshall Islands</option>
														<option value="Mauritania">Mauritania</option>
														<option value="Mauritius">Mauritius</option>
														<option value="Mexico">Mexico</option>
														<option value="Micronesia">Micronesia</option>
														<option value="Moldova">Moldova</option>
														<option value="Monaco">Monaco</option>
														<option value="Mongolia">Mongolia</option>
														<option value="Montenegro">Montenegro</option>
														<option value="Morocco">Morocco</option>
														<option value="Mozambique">Mozambique</option>
														<option value="Myanmar">Myanmar</option>
														<option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
														<option value="Namibia">Namibia</option>
														<option value="Nauru">Nauru</option>
														<option value="Nepal">Nepal</option>
														<option value="Netherlands">Netherlands</option>
														<option value="New Zealand">New Zealand</option>
														<option value="Nicaragua">Nicaragua</option>
														<option value="Niger">Niger</option>
														<option value="Nigeria">Nigeria</option>
														<option value="North Korea">North Korea</option>
														<option value="Northern Cyprus">Northern Cyprus</option>
														<option value="Norway">Norway</option>
														<option value="Oman">Oman</option>
														<option value="Pakistan">Pakistan</option>
														<option value="Palau">Palau</option>
														<option value="Palestine">Palestine</option>
														<option value="Panama">Panama</option>
														<option value="Papua New Guinea">Papua New Guinea</option>
														<option value="Paraguay">Paraguay</option>
														<option value="Peru">Peru</option>
														<option value="Philippines">Philippines</option>
														<option value="Poland">Poland</option>
														<option value="Portugal">Portugal</option>
														<option value="Qatar">Qatar</option>
														<option value="Romania">Romania</option>
														<option value="Russia">Russia</option>
														<option value="Rwanda">Rwanda</option>
														<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
														<option value="Saint Lucia">Saint Lucia</option>
														<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
														<option value="Samoa">Samoa</option>
														<option value="San Marino">San Marino</option>
														<option value="Sao Tome and Principe">Sao Tome and Principe</option>
														<option value="Saudi Arabia">Saudi Arabia</option>
														<option value="Scotland">Scotland</option>
														<option value="Senegal">Senegal</option>
														<option value="Serbia">Serbia</option>
														<option value="Seychelles">Seychelles</option>
														<option value="Sierra Leone">Sierra Leone</option>
														<option value="Singapore">Singapore</option>
														<option value="Slovak Republic">Slovak Republic</option>
														<option value="Slovakia">Slovakia</option>
														<option value="Slovenia">Slovenia</option>
														<option value="Solomon Islands">Solomon Islands</option>
														<option value="Somalia">Somalia</option>
														<option value="Somaliland">Somaliland</option>
														<option value="South Africa">South Africa</option>
														<option value="South Ossetia">South Ossetia</option>
														<option value="Spain">Spain</option>
														<option value="Sri Lanka">Sri Lanka</option>
														<option value="Sudan">Sudan</option>
														<option value="Suriname">Suriname</option>
														<option value="Swaziland">Swaziland</option>
														<option value="Sweden">Sweden</option>
														<option value="Switzerland">Switzerland</option>
														<option value="Syria">Syria</option>
														<option value="Taiwan">Taiwan</option>
														<option value="Tajikistan">Tajikistan</option>
														<option value="Tanzania">Tanzania</option>
														<option value="Thailand">Thailand</option>
														<option value="Togo">Togo</option>
														<option value="Tonga">Tonga</option>
														<option value="Transnistria">Transnistria</option>
														<option value="Trinidad and Tobago">Trinidad and Tobago</option>
														<option value="Tunisia">Tunisia</option>
														<option value="Turkey">Turkey</option>
														<option value="Turkmenistan">Turkmenistan</option>
														<option value="Tuvalu">Tuvalu</option>
														<option value="Uganda">Uganda</option>
														<option value="Ukraine">Ukraine</option>
														<option value="United Arab Emirates">United Arab Emirates</option>
														<option value="United Kingdom">United Kingdom</option>
														<option value="United States">United States</option>
														<option value="Uruguay">Uruguay</option>
														<option value="Uzbekistan">Uzbekistan</option>
														<option value="Vanuatu">Vanuatu</option>
														<option value="Vatican City">Vatican City</option>
														<option value="Venezuela">Venezuela</option>
														<option value="Vietnam">Vietnam</option>
														<option value="Wales">Wales</option>
														<option value="Western Sahara">Western Sahara</option>
														<option value="Yemen">Yemen</option>
														<option value="Zambia">Zambia</option>
														<option value="Zimbabwe">Zimbabwe</option>
													</select>
												</fieldset>
												<fieldset class="form-group">
													<label>Mã Zip</label>
													<input type="text" class="form-control" name="Zip" value="10000">
												</fieldset>
												<fieldset class="form-group">
													<label>Số điện thoại <span class="required">*</span></label>
													<input type="number" class="form-control" name="PhoneNumber" value="01554686868" required=""
														requiredmsg="Không được bỏ trống">
												</fieldset>
												<div class="checkbox ">
													<label class="c-input c-checkbox">
														<input type="checkbox" name="IsDefault" value="true">
														<span class="c-indicator"></span>
														Đặt là địa chỉ mặc định?
													</label>
												</div>
											</div>
											<div class="form-group clearfix">
												<div class="col-sm-9">
													<div class="row">
														<button class="btn btn-primary" type="submit"><span>Cập nhật địa chỉ</span></button>
														<button class="btn btn-dark btn-fix-addr" type="button">
															Hủy
														</button>
													</div>
												</div>
											</div>
										</form>
									</div>


								</div>
							</div>

						</div>

					</div>


					<div id="view_address_18678265" class="customer_address col-xs-12">

						<div class="row" style="border-top: 1px #ebebeb solid;padding-top: 30px;margin-top: 20px;">
							<div class="col-sm-6">
								<div class="address_info ">
									<div class="info clearfix">
										<span class="address-group">




											<div class="address form-signup">
												<p><strong>Tên tài khoản: </strong> ssssssssss

													<small>(Địa chỉ mặc định)</small>

												</p>

												<p><strong>Công ty:</strong> </p>
												<p>
													<strong>Địa chỉ: </strong>
													sssssssssssssssssssssss ,
													,
													TP Hồ Chí Minh,
													Vietnam
												</p>
												<p><strong>Quốc tịch:</strong> Vietnam</p>
												<p><strong>Số điện thoại:</strong> 0381235575</p>


											</div>
										</span>
									</div>
								</div>
								<div id="tool_address_18678265" class="">
									<p class="btn-row">
										<!-- <button class="btn btn-lg btn-style article-readmore" type="button"  onclick="Bizweb.CustomerAddress.toggleEditForm(18678265);return false" ><span>Sửa</span></button> -->
										<button class="btn-edit-addr btn btn-primary" type="button" data-toggle="collapse"
											data-target="#collapseExample-18678265" aria-expanded="false"
											aria-controls="collapseExample-18678265">
											Chỉnh sửa địa chỉ
										</button>
										<button class="hidden btn btn-dark btn-edit-addr" type="button"
											onclick="Bizweb.CustomerAddress.destroy(18678265);return false"><span>Xóa</span></button>
									</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="collapse" id="collapseExample-18678265" style="display: none;">
									<div id="edit_address_18678265" class="form-list">
										<form accept-charset="utf-8" action="/account/addresses/18678265" id="customer_address"
											method="post">
											<input name="FormType" type="hidden" value="customer_address">
											<input name="utf8" type="hidden" value="true">
											<div class="clearfix">
												<fieldset class="form-group">
													<label>Tên <span class="required">*</span></label>
													<input type="text" class="form-control" name="FirstName" value="ssssssssss" required=""
														requiredmsg="Không được bỏ trống">
												</fieldset>
												<fieldset class="form-group">
													<label>Họ <span class="required">*</span></label>
													<input type="text" class="form-control" name="LastName" value="" required=""
														requiredmsg="Không được bỏ trống">
												</fieldset>
												<fieldset class="form-group">
													<label>Công ty</label>
													<input type="text" class="form-control" name="Company" value="">
												</fieldset>
												<fieldset class="form-group">
													<label>Địa chỉ <span class="required">*</span></label>
													<input type="text" class="form-control" name="Address1" value="sssssssssssssssssssssss"
														required="" requiredmsg="Không được bỏ trống">
												</fieldset>
												<fieldset class="form-group">
													<label>Địa chỉ 2</label>
													<input type="text" class="form-control" name="Address2" value="">
												</fieldset>
												<fieldset class="form-group">
													<label>Thành phố <span class="required">*</span></label>
													<input type="text" class="form-control" name="City" value="TP Hồ Chí Minh" required=""
														requiredmsg="Không được bỏ trống">
												</fieldset>
												<fieldset class="form-group">
													<label>Quốc gia <span class="required">*</span></label>
													<select name="Country" class="form-control mySelect2" id="mySelect2_18678265"
														data-default="Vietnam">Vietnam<option value="Abkhazia">Abkhazia</option>
														<option value="Afghanistan">Afghanistan</option>
														<option value="Albania">Albania</option>
														<option value="Algeria">Algeria</option>
														<option value="Andorra">Andorra</option>
														<option value="Angola">Angola</option>
														<option value="Antigua and Barbuda">Antigua and Barbuda</option>
														<option value="Argentina">Argentina</option>
														<option value="Armenia">Armenia</option>
														<option value="Australia">Australia</option>
														<option value="Austria">Austria</option>
														<option value="Azerbaijan">Azerbaijan</option>
														<option value="Bahamas">Bahamas</option>
														<option value="Bahrain">Bahrain</option>
														<option value="Bangladesh">Bangladesh</option>
														<option value="Barbados">Barbados</option>
														<option value="Belarus">Belarus</option>
														<option value="Belgium">Belgium</option>
														<option value="Belize">Belize</option>
														<option value="Benin">Benin</option>
														<option value="Bhutan">Bhutan</option>
														<option value="Bolivia">Bolivia</option>
														<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
														<option value="Botswana">Botswana</option>
														<option value="Brazil">Brazil</option>
														<option value="Brunei">Brunei</option>
														<option value="Bulgaria">Bulgaria</option>
														<option value="Burkina Faso">Burkina Faso</option>
														<option value="Burundi">Burundi</option>
														<option value="Cambodia">Cambodia</option>
														<option value="Cameroon">Cameroon</option>
														<option value="Canada">Canada</option>
														<option value="Cape Verde">Cape Verde</option>
														<option value="Central African Republic">Central African Republic</option>
														<option value="Chad">Chad</option>
														<option value="Chile">Chile</option>
														<option value="China">China</option>
														<option value="Colombia">Colombia</option>
														<option value="Comoros">Comoros</option>
														<option value="Congo-Brazzaville">Congo-Brazzaville</option>
														<option value="Congo-Kinshasa">Congo-Kinshasa</option>
														<option value="Costa Rica">Costa Rica</option>
														<option value="Côte d" ivoire'="">Côte d'Ivoire</option>
														<option value="Croatia">Croatia</option>
														<option value="Cuba">Cuba</option>
														<option value="Cyprus">Cyprus</option>
														<option value="Czech Republic">Czech Republic</option>
														<option value="Denmark">Denmark</option>
														<option value="Djibouti">Djibouti</option>
														<option value="Dominica">Dominica</option>
														<option value="Dominican Republic">Dominican Republic</option>
														<option value="East Timor">East Timor</option>
														<option value="Ecuador">Ecuador</option>
														<option value="Egypt">Egypt</option>
														<option value="El Salvador">El Salvador</option>
														<option value="Equatorial Guinea">Equatorial Guinea</option>
														<option value="Eritrea">Eritrea</option>
														<option value="Estonia">Estonia</option>
														<option value="Ethiopia">Ethiopia</option>
														<option value="Fiji">Fiji</option>
														<option value="Finland">Finland</option>
														<option value="France">France</option>
														<option value="Gabon">Gabon</option>
														<option value="Gambia">Gambia</option>
														<option value="Georgia">Georgia</option>
														<option value="Germany">Germany</option>
														<option value="Ghana">Ghana</option>
														<option value="Greece">Greece</option>
														<option value="Grenada">Grenada</option>
														<option value="Guatemala">Guatemala</option>
														<option value="Guinea">Guinea</option>
														<option value="Guinea-Bissau">Guinea-Bissau</option>
														<option value="Guyana">Guyana</option>
														<option value="Haiti">Haiti</option>
														<option value="Honduras">Honduras</option>
														<option value="Hong Kong">Hong Kong</option>
														<option value="Hungary">Hungary</option>
														<option value="Iceland">Iceland</option>
														<option value="India">India</option>
														<option value="Indonesia">Indonesia</option>
														<option value="Iran">Iran</option>
														<option value="Iraq">Iraq</option>
														<option value="Ireland">Ireland</option>
														<option value="Israel">Israel</option>
														<option value="Italy">Italy</option>
														<option value="Jamaica">Jamaica</option>
														<option value="Japan (Nippon)">Japan (Nippon)</option>
														<option value="Jordan">Jordan</option>
														<option value="Kazakhstan">Kazakhstan</option>
														<option value="Kenya">Kenya</option>
														<option value="Kiribati">Kiribati</option>
														<option value="Korea">Korea</option>
														<option value="Kosovo">Kosovo</option>
														<option value="Kuwait">Kuwait</option>
														<option value="Kyrgyzstan">Kyrgyzstan</option>
														<option value="Laos">Laos</option>
														<option value="Latvia">Latvia</option>
														<option value="Lebanon">Lebanon</option>
														<option value="Lesotho">Lesotho</option>
														<option value="Liberia">Liberia</option>
														<option value="Libya">Libya</option>
														<option value="Liechtenstein">Liechtenstein</option>
														<option value="Lithuania">Lithuania</option>
														<option value="Luxembourg">Luxembourg</option>
														<option value="Macedonia (FYROM)">Macedonia (FYROM)</option>
														<option value="Madagascar">Madagascar</option>
														<option value="Malawi">Malawi</option>
														<option value="Malaysia">Malaysia</option>
														<option value="Maldives">Maldives</option>
														<option value="Mali">Mali</option>
														<option value="Malta">Malta</option>
														<option value="Marshall Islands">Marshall Islands</option>
														<option value="Mauritania">Mauritania</option>
														<option value="Mauritius">Mauritius</option>
														<option value="Mexico">Mexico</option>
														<option value="Micronesia">Micronesia</option>
														<option value="Moldova">Moldova</option>
														<option value="Monaco">Monaco</option>
														<option value="Mongolia">Mongolia</option>
														<option value="Montenegro">Montenegro</option>
														<option value="Morocco">Morocco</option>
														<option value="Mozambique">Mozambique</option>
														<option value="Myanmar">Myanmar</option>
														<option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
														<option value="Namibia">Namibia</option>
														<option value="Nauru">Nauru</option>
														<option value="Nepal">Nepal</option>
														<option value="Netherlands">Netherlands</option>
														<option value="New Zealand">New Zealand</option>
														<option value="Nicaragua">Nicaragua</option>
														<option value="Niger">Niger</option>
														<option value="Nigeria">Nigeria</option>
														<option value="North Korea">North Korea</option>
														<option value="Northern Cyprus">Northern Cyprus</option>
														<option value="Norway">Norway</option>
														<option value="Oman">Oman</option>
														<option value="Pakistan">Pakistan</option>
														<option value="Palau">Palau</option>
														<option value="Palestine">Palestine</option>
														<option value="Panama">Panama</option>
														<option value="Papua New Guinea">Papua New Guinea</option>
														<option value="Paraguay">Paraguay</option>
														<option value="Peru">Peru</option>
														<option value="Philippines">Philippines</option>
														<option value="Poland">Poland</option>
														<option value="Portugal">Portugal</option>
														<option value="Qatar">Qatar</option>
														<option value="Romania">Romania</option>
														<option value="Russia">Russia</option>
														<option value="Rwanda">Rwanda</option>
														<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
														<option value="Saint Lucia">Saint Lucia</option>
														<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
														<option value="Samoa">Samoa</option>
														<option value="San Marino">San Marino</option>
														<option value="Sao Tome and Principe">Sao Tome and Principe</option>
														<option value="Saudi Arabia">Saudi Arabia</option>
														<option value="Scotland">Scotland</option>
														<option value="Senegal">Senegal</option>
														<option value="Serbia">Serbia</option>
														<option value="Seychelles">Seychelles</option>
														<option value="Sierra Leone">Sierra Leone</option>
														<option value="Singapore">Singapore</option>
														<option value="Slovak Republic">Slovak Republic</option>
														<option value="Slovakia">Slovakia</option>
														<option value="Slovenia">Slovenia</option>
														<option value="Solomon Islands">Solomon Islands</option>
														<option value="Somalia">Somalia</option>
														<option value="Somaliland">Somaliland</option>
														<option value="South Africa">South Africa</option>
														<option value="South Ossetia">South Ossetia</option>
														<option value="Spain">Spain</option>
														<option value="Sri Lanka">Sri Lanka</option>
														<option value="Sudan">Sudan</option>
														<option value="Suriname">Suriname</option>
														<option value="Swaziland">Swaziland</option>
														<option value="Sweden">Sweden</option>
														<option value="Switzerland">Switzerland</option>
														<option value="Syria">Syria</option>
														<option value="Taiwan">Taiwan</option>
														<option value="Tajikistan">Tajikistan</option>
														<option value="Tanzania">Tanzania</option>
														<option value="Thailand">Thailand</option>
														<option value="Togo">Togo</option>
														<option value="Tonga">Tonga</option>
														<option value="Transnistria">Transnistria</option>
														<option value="Trinidad and Tobago">Trinidad and Tobago</option>
														<option value="Tunisia">Tunisia</option>
														<option value="Turkey">Turkey</option>
														<option value="Turkmenistan">Turkmenistan</option>
														<option value="Tuvalu">Tuvalu</option>
														<option value="Uganda">Uganda</option>
														<option value="Ukraine">Ukraine</option>
														<option value="United Arab Emirates">United Arab Emirates</option>
														<option value="United Kingdom">United Kingdom</option>
														<option value="United States">United States</option>
														<option value="Uruguay">Uruguay</option>
														<option value="Uzbekistan">Uzbekistan</option>
														<option value="Vanuatu">Vanuatu</option>
														<option value="Vatican City">Vatican City</option>
														<option value="Venezuela">Venezuela</option>
														<option value="Vietnam">Vietnam</option>
														<option value="Wales">Wales</option>
														<option value="Western Sahara">Western Sahara</option>
														<option value="Yemen">Yemen</option>
														<option value="Zambia">Zambia</option>
														<option value="Zimbabwe">Zimbabwe</option>
													</select>
												</fieldset>
												<fieldset class="form-group">
													<label>Mã Zip</label>
													<input type="text" class="form-control" name="Zip" value="">
												</fieldset>
												<fieldset class="form-group">
													<label>Số điện thoại <span class="required">*</span></label>
													<input type="number" class="form-control" name="PhoneNumber" value="0381235575" required=""
														requiredmsg="Không được bỏ trống">
												</fieldset>
												<div class="checkbox hidden ">
													<label class="c-input c-checkbox">
														<input type="checkbox" name="IsDefault" value="true">
														<span class="c-indicator"></span>
														Đặt là địa chỉ mặc định?
													</label>
												</div>
											</div>
											<div class="form-group clearfix">
												<div class="col-sm-9">
													<div class="row">
														<button class="btn btn-primary" type="submit"><span>Cập nhật địa chỉ</span></button>
														<button class="btn btn-dark btn-fix-addr" type="button">
															Hủy
														</button>
													</div>
												</div>
											</div>
										</form>
									</div>


								</div>
							</div>

						</div>

					</div>

				</div>


			</div>
		</div>
	</div>
</section>
@endsection