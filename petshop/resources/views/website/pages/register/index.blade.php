@extends('website.layouts.master2')
@section('title')
Ten san pham
@endsection
@section('content')
@include("website.blocks.breadcumb", ['element' => 'hidden','name' => '', 'url' => '', 'param' => 'Đăng ký tài khoản'])
<div class="container">
	<div class="row">
		<div class="content_login_base">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-40">
				<div class="page_login_ page_base_h">
					<h1 class="title_center_page title_customers"><span>Đăng ký</span></h1>
					<div id="login">
						<form accept-charset="utf-8" id="customer_register" method="post">
							
							<div class="form-signup text_warning margin-bottom-10">

							</div>
							<div class="form-signup clearfix">
								<div class="row">
									<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
										<div class="content_all">
											<label class="label_h content_l">Họ và tên:</label>
											<fieldset class="form-group content_r">
												<input type="text" class="form-control form-control-lg" value="" name="firstName" id="firstName"
													required="">
											</fieldset>
											<label class="label_h content_l">Email:</label>
											<fieldset class="form-group content_r">
												<input type="email" class="form-control form-control-lg"
													pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" name="email" id="email"
													required="">
											</fieldset>
											<label class="label_h content_l">Số điện thoại:</label>
											<fieldset class="form-group content_r">
												<input type="text" class="form-control form-control-lg" pattern="\d+" value="" name="phone"
													id="phone" required="">
											</fieldset>
											<label class="label_h content_l">Mật khẩu:</label>
											<fieldset class="form-group content_r">
												<input type="password" class="form-control form-control-lg" value="" name="password"
													required="">
											</fieldset>
										</div>
									</div>
								</div>
								<div class="btn_style">
									<button type="summit" value="Đăng ký" class="btn btn-primary btn_customer">Đăng ký</button>

								</div>

								<div class="block social-login--facebooks">
									<p class="a-center">
										Hoặc đăng nhập bằng
									</p>
									<script>function loginFacebook() { var a = { client_id: "947410958642584", redirect_uri: "https://store.mysapo.net/account/facebook_account_callback", state: JSON.stringify({ redirect_url: window.location.href }), scope: "email", response_type: "code" }, b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0); window.location.href = b } function loginGoogle() { var a = { client_id: "885968593373-197u9i4pte44vmvcc0j50pvhlfvl27ds.apps.googleusercontent.com", redirect_uri: "https://store.mysapo.net/account/google_account_callback", scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile", access_type: "online", state: JSON.stringify({ redirect_url: window.location.href }), response_type: "code" }, b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0); window.location.href = b } function encodeURIParams(a, b) { var c = []; for (var d in a) if (a.hasOwnProperty(d)) { var e = a[d]; null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e)) } return 0 == c.length ? "" : (b ? "?" : "") + c.join("&") }</script>
									<a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img
											width="129px" height="37px" alt="facebook-login-button"
											src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
									<a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img width="129px"
											height="37px" alt="google-login-button"
											src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="bg_login"></div>
			</div>
		</div>
	</div>
</div>
@endsection