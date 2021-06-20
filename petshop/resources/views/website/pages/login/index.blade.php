@extends('website.layouts.master2')
@section('title')
Đăng nhập
@endsection
@section('content')
@include("website.blocks.breadcumb", ['element' => 'hidden','name' => '', 'url' => '', 'param' => 'Đăng nhập tài khoản'])
<div class="container">
	<div class="row">
		<div class="content_login_base">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-40">
				<div class="page_login_ page_base_h">
					<h1 class="title_center_page title_customers"><span>Đăng nhập</span></h1>
					<div id="login">
						<form accept-charset="utf-8" method="post" action="{{route('login')}}" id="customer_login">
							{{ csrf_field() }}
							<div class="form-signup text_warning margin-bottom-10">
							</div>
							<div class="form-signup clearfix">
								<div class="row">
									<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
										<div class="content_all">
											<label class="label_h content_l">Email:</label>
											<fieldset class="form-group content_r">
												<input type="email" class="form-control form-control-lg"
													pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" name="email" id="customer_email"
													required="">
											</fieldset>
											<label class="label_h content_l">Mật khẩu:</label>
											<fieldset class="form-group content_r">
												<input type="password" class="form-control form-control-lg" value="" name="password"
													id="customer_password" required="">
											</fieldset>
										</div>
									</div>
								</div>
								<div class="btn_style">
									<button type="summit" value="Đăng nhập" class="btn btn-primary btn_customer">Đăng nhập</button>
									<span class="recv-text"> <a id="rcv-pass">Quên mật
											khẩu</a></span>

									<div class="block social-login--facebooks">
										<p class="a-center">
											Hoặc đăng nhập bằng
										</p>
										<a href="javascript:void(0)" class="social-login--facebook"><img width="129px" height="37px"
												alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
										<a href="javascript:void(0)" class="social-login--google"><img width="129px" height="37px"
												alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
									</div>
								</div>

							</div>
						</form>
					</div>

					<span class="have_ac">Bạn chưa có tài khoản, vui lòng đăng ký <a href="/account/register"
							style="text-decoration: underline;">tại đây</a></span>
					<div id="recover-password" class="rcv" style="display:none;">

						<div class="form-signup clearfix" style="margin-top:0px;">
							<div class="recovers">
								<form accept-charset="utf-8" action="/account/recover" id="recover_customer_password" method="post">
									<input name="FormType" type="hidden" value="recover_customer_password">
									<input name="utf8" type="hidden" value="true">
									<div class="form-signup aaaaaaaa" style="margin-top:0px;">

									</div>
									<div class="form-signup clearfix">
										<fieldset class="form-group">
											<input type="email" class="form-control form-control-lg" value="" name="Email" id="recover-email"
												placeholder="Nhập Email để lấy lại mật khẩu" required="">
										</fieldset>
									</div>
									<div class="action_bottom btn_style">
										<button type="summit" value="Lấy lại mật khẩu" class="btn btn-primary btn_customer">Lấy lại mật khẩu
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="bg_login"></div>
			</div>
		</div>
	</div>
	<style>
		.suntory-alo-phone {
			background-color: transparent;
			cursor: pointer;
			height: 95px;
			top: initial !important;
			position: fixed;
			transition: visibility 0.5s ease 0s;
			width: 120px;
			z-index: 20 !important;
		}

		.suntory-alo-ph-circle {
			animation: 1.2s ease-in-out 0s normal none infinite running suntory-alo-circle-anim;
			background-color: transparent;
			border: 2px solid rgba(30, 30, 30, 0.4);
			border-radius: 100%;
			height: 100px;
			left: 0px;
			opacity: 0.1;
			position: absolute;
			top: 0px;
			transform-origin: 50% 50% 0;
			transition: all 0.5s ease 0s;
			width: 100px;
		}

		.suntory-alo-ph-circle-fill {
			animation: 2.3s ease-in-out 0s normal none infinite running suntory-alo-circle-fill-anim;
			border: 2px solid transparent;
			border-radius: 100%;
			height: 70px;
			left: 15px;
			position: absolute;
			top: 15px;
			transform-origin: 50% 50% 0;
			transition: all 0.5s ease 0s;
			width: 70px;
		}

		.suntory-alo-ph-img-circle {
			/* animation: 1s ease-in-out 0s normal none infinite running suntory-alo-circle-img-anim; */
			border: 2px solid transparent;
			border-radius: 100%;
			height: 50px;
			left: 25px;
			opacity: 0.7;
			position: absolute;
			top: 25px;
			transform-origin: 50% 50% 0;
			width: 50px;
		}

		.suntory-alo-phone.suntory-alo-hover,
		.suntory-alo-phone:hover {
			opacity: 1;
		}

		.suntory-alo-phone.suntory-alo-active .suntory-alo-ph-circle {
			animation: 1.1s ease-in-out 0s normal none infinite running suntory-alo-circle-anim !important;
		}

		.suntory-alo-phone.suntory-alo-static .suntory-alo-ph-circle {
			animation: 2.2s ease-in-out 0s normal none infinite running suntory-alo-circle-anim !important;
		}

		.suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-circle,
		.suntory-alo-phone:hover .suntory-alo-ph-circle {
			border-color: #00aff2;
			opacity: 0.5;
		}

		.suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-circle,
		.suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-circle {
			border-color: #EB278D;
			opacity: 1;
		}

		.suntory-alo-phone.suntory-alo-green .suntory-alo-ph-circle {
			border-color: #bfebfc;
			opacity: 1;
		}

		.suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-circle-fill,
		.suntory-alo-phone:hover .suntory-alo-ph-circle-fill {
			background-color: rgba(0, 175, 242, 0.9);
		}

		.suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-circle-fill,
		.suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-circle-fill {
			background-color: #EB278D;
		}

		.suntory-alo-phone.suntory-alo-green .suntory-alo-ph-circle-fill {
			background-color: rgba(0, 175, 242, 0.9);
		}

		.suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-img-circle,
		.suntory-alo-phone:hover .suntory-alo-ph-img-circle {
			background-color: #00aff2;
		}

		.suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-img-circle,
		.suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-img-circle {
			background-color: #EB278D;
		}

		.suntory-alo-phone.suntory-alo-green .suntory-alo-ph-img-circle {
			background-color: #00aff2;
		}

		@keyframes suntory-alo-circle-anim {
			0% {
				opacity: 0.1;
				transform: rotate(0deg) scale(0.5) skew(1deg);
			}

			30% {
				opacity: 0.5;
				transform: rotate(0deg) scale(0.7) skew(1deg);
			}

			100% {
				opacity: 0.6;
				transform: rotate(0deg) scale(1) skew(1deg);
			}
		}

		@keyframes suntory-alo-circle-img-anim {
			0% {
				transform: rotate(0deg) scale(1) skew(1deg);
			}

			10% {
				transform: rotate(-25deg) scale(1) skew(1deg);
			}

			20% {
				transform: rotate(25deg) scale(1) skew(1deg);
			}

			30% {
				transform: rotate(-25deg) scale(1) skew(1deg);
			}

			40% {
				transform: rotate(25deg) scale(1) skew(1deg);
			}

			50% {
				transform: rotate(0deg) scale(1) skew(1deg);
			}

			100% {
				transform: rotate(0deg) scale(1) skew(1deg);
			}
		}

		@keyframes suntory-alo-circle-fill-anim {
			0% {
				opacity: 0.2;
				transform: rotate(0deg) scale(0.7) skew(1deg);
			}

			50% {
				opacity: 0.2;
				transform: rotate(0deg) scale(1) skew(1deg);
			}

			100% {
				opacity: 0.2;
				transform: rotate(0deg) scale(0.7) skew(1deg);
			}
		}

		.suntory-alo-ph-img-circle i {
			animation: 1s ease-in-out 0s normal none infinite running suntory-alo-circle-img-anim;
			font-size: 30px;
			line-height: 50px;
			padding-left: 10px;
			color: #fff;
		}

		/*=================== End phone ring ===============*/
		@keyframes suntory-alo-ring-ring {
			0% {
				transform: rotate(0deg) scale(1) skew(1deg);
			}

			10% {
				transform: rotate(-25deg) scale(1) skew(1deg);
			}

			20% {
				transform: rotate(25deg) scale(1) skew(1deg);
			}

			30% {
				transform: rotate(-25deg) scale(1) skew(1deg);
			}

			40% {
				transform: rotate(25deg) scale(1) skew(1deg);
			}

			50% {
				transform: rotate(0deg) scale(1) skew(1deg);
			}

			100% {
				transform: rotate(0deg) scale(1) skew(1deg);
			}
		}
	</style>
	<a href="tel:0949111520" class="suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon"
		style="right: -12px;bottom: 80px;">
		<div class="suntory-alo-ph-circle"></div>
		<div class="suntory-alo-ph-circle-fill"></div>
		<div class="suntory-alo-ph-img-circle"><i class="fa fa-phone"></i></div>
	</a>
	<!--<a href="https://zalo.me/0949111520" class="zs-ico zs-has-notify">
	<div class="zs-ico-main"></div><em></em>
</a>
<style>
	.zs-ico
	{
		position: relative;
		position: fixed;
		z-index: 12;
		bottom: 180px;
   		right: 25px;

		display: block;

		cursor: pointer;
		
		z-index: 50;
	}
	.zs-ico .zs-ico-main
	{
		position: relative;
		z-index: 3;

		display: block;

		width: 70px;
		height: 58px;

		background: url(//bizweb.dktcdn.net/100/307/433/themes/751183/assets/stick_zalo.png?1622620435137) 0 0 no-repeat;
		background-size: auto;
		background-size: cover;
	}
	.zs-ico.zs-has-notify::before
	{
		position: absolute;
		z-index: 4;
		top: 2px;
		left: 12px;

		width: 8px;
		height: 8px;

		content: '';

		border: 1px solid #fff;
		-webkit-border-radius: 100%;
		-moz-border-radius: 100%;
		border-radius: 100%;
	}
	.zs-ico.zs-has-notify::before
	{
		left: 36px !important;

		background-color: #ff5d5d;
	}
	.zs-ico.zs-has-notify em
	{
		position: absolute;
		top: 7px;
		left: 17px;
	}
	.zs-ico.zs-has-notify em::after,
	.zs-ico.zs-has-notify em::before
	{
		position: absolute;
		top: 2px;
		left: -4px;

		width: 32px;
		height: 32px;

		content: '';
		-webkit-animation-name: Grow;
		-moz-animation-name: Grow;
		animation-name: Grow;
		-webkit-animation-duration: 1.5s;
		-moz-animation-duration: 1.5s;
		animation-duration: 1.5s;
		-webkit-animation-timing-function: linear;
		-moz-animation-timing-function: linear;
		animation-timing-function: linear;
		-webkit-animation-iteration-count: infinite;
		-moz-animation-iteration-count: infinite;
		animation-iteration-count: infinite;

		-webkit-border-radius: 100%;
		-moz-border-radius: 100%;
		border-radius: 100%;
	}
	.zs-ico.zs-has-notify em::before
	{
		-webkit-box-shadow: 0 0 8px 4px #ff5d5d;
		box-shadow: 0 0 8px 4px #ff5d5d;
	}
	.zs-ico.zs-has-notify em::after
	{
		-webkit-box-shadow: inset 0 0 6px 2px #ff5d5d;
		box-shadow: inset 0 0 6px 2px #ff5d5d;
	}

	@-webkit-keyframes Grow
	{
		0%
		{
			-webkit-transform: scale(.1);
			-ms-transform: scale(.1);
			transform: scale(.1);

			opacity: 0;

			filter: alpha(opacity=0);
		}
		50%
		{
			opacity: 1;

			filter: alpha(opacity=100);
		}
		to
		{
			-webkit-transform: scale(1.8);
			-ms-transform: scale(1.8);
			transform: scale(1.8);

			opacity: 0;

			filter: alpha(opacity=0);
		}
	}
	@-moz-keyframes Grow
	{
		0%
		{
			-webkit-transform: scale(.1);
			-ms-transform: scale(.1);
			transform: scale(.1);

			opacity: 0;

			filter: alpha(opacity=0);
		}
		50%
		{
			opacity: 1;

			filter: alpha(opacity=100);
		}
		to
		{
			-webkit-transform: scale(1.8);
			-ms-transform: scale(1.8);
			transform: scale(1.8);

			opacity: 0;

			filter: alpha(opacity=0);
		}
	}
	@keyframes Grow
	{
		0%
		{
			-webkit-transform: scale(.1);
			-ms-transform: scale(.1);
			transform: scale(.1);

			opacity: 0;

			filter: alpha(opacity=0);
		}
		50%
		{
			opacity: 1;

			filter: alpha(opacity=100);
		}
		to
		{
			-webkit-transform: scale(1.8);
			-ms-transform: scale(1.8);
			transform: scale(1.8);

			opacity: 0;

			filter: alpha(opacity=0);
		}
	}
</style>-->

	<!-- Bizweb javascript -->
	<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/option-selectors.js?1622620435137"
		type="text/javascript"></script>
	<script src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script>
	<!-- Plugin JS -->
	<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/owl.carousel.min.js?1622620435137"
		type="text/javascript"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
	<!-- Add to cart -->
	<div class="ajax-load">
		<span class="loading-icon">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
				<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
					<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s"
						repeatCount="indefinite"></animate>
				</rect>
				<rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
					<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s"
						repeatCount="indefinite"></animate>
				</rect>
				<rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
					<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s"
						repeatCount="indefinite"></animate>
				</rect>
			</svg>
		</span>
	</div>

	<div class="loading awe-popup">
		<div class="overlay"></div>
		<div class="loader" title="2">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
				<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
					<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s"
						repeatCount="indefinite"></animate>
				</rect>
				<rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
					<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s"
						repeatCount="indefinite"></animate>
				</rect>
				<rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
					<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s"
						repeatCount="indefinite"></animate>
					<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s"
						repeatCount="indefinite"></animate>
				</rect>
			</svg>
		</div>

	</div>

	<div class="addcart-popup product-popup awe-popup">
		<div class="overlay no-background"></div>
		<div class="content">
			<div class="row row-noGutter">
				<div class="col-xl-6 col-xs-12">
					<div class="btn btn-full btn-primary a-left popup-title"><i class="fa fa-check"></i>Thêm vào giỏ hàng thành
						công
					</div>
					<a href="javascript:void(0)" class="close-window close-popup"><i class="fa fa-close"></i></a>
					<div class="info clearfix">
						<div class="product-image margin-top-5">
							<img alt="popup" src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/logo.png?1622620435137"
								style="max-width:150px; height:auto">
						</div>
						<div class="product-info">
							<p class="product-name"></p>
							<p class="quantity color-main"><span>Số lượng: </span></p>
							<p class="total-money color-main"><span>Tổng tiền: </span></p>

						</div>
						<div class="actions">
							<button class="btn  btn-primary  margin-top-5 btn-continue">Tiếp tục mua hàng</button>
							<button class="btn btn-gray margin-top-5" onclick="window.location='/cart'">Kiểm tra giỏ hàng</button>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
	<div class="error-popup awe-popup">
		<div class="overlay no-background"></div>
		<div class="popup-inner content">
			<div class="error-message"></div>
		</div>
	</div>

	<div id="popup-cart" class="modal fade" role="dialog">
		<div id="popup-cart-desktop" class="clearfix">
			<div class="title-popup-cart">
				<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/icon-check.png?1622620435137"
					alt="Cutepets - Pet shop &amp; Grooming Spa Thú cưng Hà Nội"> <span class="your_product">Bạn đã thêm <span
						class="cart_name_style">[ <span class="cart-popup-name"></span>]</span> vào giỏ hàng thành công ! </span>
			</div>
			<div class="wrap_popup">
				<div class="title-quantity-popup">
					<span class="cart_status" onclick="window.location.href='/cart';">Giỏ hàng của bạn có <span
							class="cart-popup-count">3</span> sản phẩm </span> <i class="fa fa-caret-right" aria-hidden="true"></i>
				</div>
				<div class="content-popup-cart">
					<div class="thead-popup">
						<div style="width: 53%;" class="text-left">Sản phẩm</div>
						<div style="width: 15%;" class="text-center">Đơn giá</div>
						<div style="width: 15%;" class="text-center">Số lượng</div>
						<div style="width: 17%;" class="text-center">Thành tiền</div>
					</div>
					<div class="tbody-popup scrollbar-dynamic">
						<div class="item-popup productid-45627188">
							<div style="width: 13%;" class="border height image_ text-left">
								<div class="item-image"><a class="product-image"
										href="/thuc-an-cho-lon-ganador-adult-10kg-vi-cuu-va-gao"
										title="Thức ăn chó lớn Ganador Adult 10Kg - Vị Cừu và Gạo"><img
											alt="Thức ăn chó lớn Ganador Adult 10Kg - Vị Cừu và Gạo"
											src="//bizweb.dktcdn.net/100/307/433/products/thuc-an-cho-lon-ganador-adult-tai-10kg-vi-cuu-va-gao.jpg?v=1621265866707"
											width="90"></a></div>
							</div>
							<div style="width:37.8%;" class="height text-left">
								<div class="item-info">
									<p class="item-name"><a class="text2line" href="/thuc-an-cho-lon-ganador-adult-10kg-vi-cuu-va-gao"
											title="Thức ăn chó lớn Ganador Adult 10Kg - Vị Cừu và Gạo">Thức ăn chó lớn Ganador Adult 10Kg - Vị
											Cừu và Gạo</a></p><span class="variant-title-popup" style="display: none;">Default Title</span><a
										href="javascript:;" class="remove-item-cart" title="Xóa" data-id="45627188"><i
											class="fa fa-close"></i>&nbsp;&nbsp;Xoá</a>
									<p class="addpass" style="color:#fff;margin:0px;">45627188</p>
								</div>
							</div>
							<div style="width: 14.4%;" class="border height text-center">
								<div class="item-price"><span class="price">425.000₫</span></div>
							</div>
							<div style="width: 14.5%;" class="border height text-center">
								<div class="qty_inputt check_"><input class="variantID" type="hidden" name="variantId"
										value="45627188"><button
										onclick="var result = document.getElementById('qtyItemP45627188'); var qtyItem45627188 = result.value; if( !isNaN( qtyItem45627188 ) &amp;&amp; qtyItem45627188 > 1 ) result.value--;return false;"
										disabled="" class="num1 reduced items-count btn-minus" type="button">-</button><input type="text"
										maxlength="12" min="0" readonly="" class="input-text number-sidebar qtyItemP45627188"
										id="qtyItemP45627188" name="Lines" size="4" value="1"><button
										onclick="var result = document.getElementById('qtyItemP45627188'); var qtyItemP45627188 = result.value; if( !isNaN( qtyItemP45627188 )) result.value++;return false;"
										class="num2 increase items-count btn-plus" type="button">+</button></div>
							</div>
							<div style="width: 20.3%;" class="border height text-center"><span class="cart-price"> <span
										class="price">425.000₫</span> </span></div>
						</div>
						<div class="item-popup productid-33034438">
							<div style="width: 13%;" class="border height image_ text-left">
								<div class="item-image"><a class="product-image" href="/day-dat-doi-2-dau-dat-2-cun"
										title="Dây dắt đôi 1cm 2 đầu dắt dành cho 2 cún - Cutepets"><img
											alt="Dây dắt đôi 1cm 2 đầu dắt dành cho 2 cún - Cutepets"
											src="//bizweb.dktcdn.net/100/307/433/products/day-dat-doi-1cm-2-dau-dat-danh-cho-2-cun-cutepets.jpg?v=1590481001047"
											width="90"></a></div>
							</div>
							<div style="width:37.8%;" class="height text-left">
								<div class="item-info">
									<p class="item-name"><a class="text2line" href="/day-dat-doi-2-dau-dat-2-cun"
											title="Dây dắt đôi 1cm 2 đầu dắt dành cho 2 cún - Cutepets">Dây dắt đôi 1cm 2 đầu dắt dành cho 2
											cún - Cutepets</a></p><span class="variant-title-popup" style="display: none;">Default
										Title</span><a href="javascript:;" class="remove-item-cart" title="Xóa" data-id="33034438"><i
											class="fa fa-close"></i>&nbsp;&nbsp;Xoá</a>
									<p class="addpass" style="color:#fff;margin:0px;">33034438</p>
								</div>
							</div>
							<div style="width: 14.4%;" class="border height text-center">
								<div class="item-price"><span class="price">100.000₫</span></div>
							</div>
							<div style="width: 14.5%;" class="border height text-center">
								<div class="qty_inputt check_"><input class="variantID" type="hidden" name="variantId"
										value="33034438"><button
										onclick="var result = document.getElementById('qtyItemP33034438'); var qtyItem33034438 = result.value; if( !isNaN( qtyItem33034438 ) &amp;&amp; qtyItem33034438 > 1 ) result.value--;return false;"
										class="num1 reduced items-count btn-minus" type="button">-</button><input type="text" maxlength="12"
										min="0" readonly="" class="input-text number-sidebar qtyItemP33034438" id="qtyItemP33034438"
										name="Lines" size="4" value="2"><button
										onclick="var result = document.getElementById('qtyItemP33034438'); var qtyItemP33034438 = result.value; if( !isNaN( qtyItemP33034438 )) result.value++;return false;"
										class="num2 increase items-count btn-plus" type="button">+</button></div>
							</div>
							<div style="width: 20.3%;" class="border height text-center"><span class="cart-price"> <span
										class="price">200.000₫</span> </span></div>
						</div>
					</div>
					<div class="tfoot-popup">
						<div class="tfoot-popup-1 a-right clearfix">
							<span class="total-p popup-total">Tổng tiền thanh toán: <span class="total-price">625.000₫</span></span>
						</div>
						<div class="tfoot-popup-2 clearfix">
							<a class="button checkout_ btn-proceed-checkout" title="Thực hiện thanh toán" href="/checkout"><span>Thực
									hiện thanh toán</span></a>
							<a class="button buy_ btn-continus-h" title="Tiếp tục mua hàng"
								onclick="$('#popup-cart').modal('hide');"><span><span>Tiếp tục mua hàng</span></span></a>

						</div>
					</div>
				</div>
				<a title="Close" class="quickview-close close-window" href="javascript:;"
					onclick="$('#popup-cart').modal('hide');"><i class="fa  fa-close"></i></a>
			</div>
		</div>

	</div>
	<div id="myModal" class="modal fade" role="dialog">
	</div>
	<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/cs.script.js?1622620435137"
		type="text/javascript"></script>
	<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/appear.js?1622620435137"
		type="text/javascript"></script>
	<!-- Quick view -->



	<div id="quick-view-product" class="quickview-product" style="display:none;">
		<div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
		<div class="quick-view-product"></div>
		<div id="quickview-modal" style="display:none;">
			<div class="block-quickview primary_block row">

				<div class="product-left-column col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<div class="clearfix image-block">
						<span class="view_full_size">
							<a class="img-product" title="" href="#">
								<img id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview"
									src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/logo.png?1622620435137" alt="quickview">
							</a>
						</span>
						<div class="loading-imgquickview" style="display:none;"></div>
					</div>
					<div class="more-view-wrapper clearfix">
						<div class="thumbs_quickview" id="thumbs_list_quickview">
							<ul class="product-photo-thumbs quickview-more-views-owlslider" id="thumblist_quickview"></ul>
						</div>
					</div>
				</div>
				<div class="product-center-column product-info product-item col-xs-5 col-sm-7 col-md-7 col-lg-7">
					<div class="head-qv">
						<h3 class="qwp-name">abc</h3>

					</div>
					<div class="quickview-info">

						<span class="prices">
							<span class="price"></span>
							<del class="old-price"></del>
						</span>

					</div>
					<div class="vend-qv">
						<div class="left_vend">
							<span class="vendor_"></span>
							<span class="line">|</span>
							<span class="condition">Tình trạng: <span class="soluong"></span></span>
						</div>

					</div>
					<div class="product-description">
						<div class="rte text2line">

						</div>

					</div>

					<form action="/cart/add" method="post" enctype="multipart/form-data"
						class="quick_option variants form-ajaxtocart">
						<span class="price-product-detail hidden" style="opacity: 0;">
							<span class=""></span>
						</span>
						<select name="variantId" class="hidden" style="display:none"></select>
						<div class="clearfix"></div>
						<div class="quantity_wanted_p">
							<div class="input_qty_qv">
								<a class="btn_num num_1 button button_qty"
									onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv > 1 ) result.value--;return false;">-</a>
								<input type="text" id="quantity-detail" name="quantity" value="1" onkeypress="validate(event)"
									onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')" class="form-control prd_quantity">
								<a class="btn_num num_2 button button_qty"
									onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">+</a>
							</div>

							<div class="button_actions">
								<button type="submit"
									class="btn btn-lg fix_add_to_cart  btn-cart button_cart_buy_enable add_to_cart btn_buy add_to_cart_detail ajax_addtocart"
									title="Cho vào giỏ hàng">
									<span class="btn-content">Mua hàng</span>
								</button>
							</div>
						</div>
						<div class="total-price" style="display:none">625.000₫</div>

					</form>

				</div>

			</div>
			<a title="Close" class="quickview-close close-window" href="javascript:;"><i class="fa   fa-times"></i></a>
		</div>
	</div>

	<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/quickview.js?1622620435137"
		type="text/javascript"></script>


	<!-- Main JS -->
	<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/main.js?1622620435137"
		type="text/javascript"></script>

	<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/ega-gateway.min.js?1622620435137"
		type="text/javascript"></script>

	<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/ega.sales-countdown.settings.js?1622620435137"
		type="text/javascript"></script>


	<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/iwish.js?1622620435137"
		type="text/javascript"></script>

	<script
		src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/appbulk-available-notice-variant-change.js?1622620435137"
		type="text/javascript"></script>

	<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/ega.code-scanner.settings.js?1622620435137"
		type="text/javascript"></script>


</div>
@endsection