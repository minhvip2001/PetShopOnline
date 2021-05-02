@extends('admin.layouts.login')
@section('title')
Đăng nhập
@endsection
@section('content')
<div class="header-w3l">
			<h1>Login to CutePet</h1>
		</div>
<div class="main-w3layouts-agileinfo">
	<!--form-stars-here-->
	<div class="wthree-form">
		<h2>Fill out the form below to login</h2>
		@if($message = session()->get('msg'))
		<h2>{{$message}}</h2>
		@endif
		<form method="post" action="{{route('admin.login')}}" autocomplete="off">
			@csrf
			<div class="form-sub-w3">
				<input type="text" name="email" placeholder="Email" required="">
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
			</div>
			<div class="form-sub-w3">
				<input type="password" name="password" placeholder="Password" required="">
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
			</div>
			<label class="anim">
				<input type="checkbox" class="checkbox">
				<span>Remember Me</span>
				<a href="#">Forgot Password</a>
			</label>
			<div class="clear"></div>
			<div class="submit-agileits">
				<input type="submit" value="Login">
			</div>
		</form>

	</div>
	<!--//form-ends-here-->

</div>
@endsection