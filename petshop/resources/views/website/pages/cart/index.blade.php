@extends('website.layouts.master2')
@section('title')
Siêu thị thú cưng Pet shop Hà Nội - Giỏ hàng
@endsection
@section('content')
@include("website.blocks.breadcumb", ['element' => 'hidden','name' => '', 'url' => '', 'param' => 'Giỏ hàng'])
<section class="main-cart-page main-container col1-layout cart-content" data-url="{{route('cart.delete')}}">
	@if(session()->get('cart') != null)
	  @include('website.pages.cart.component.cart')
	@else
	<div class="main container hidden-xs cart-desktop">
		<div class="header-cart" style="background:#fff;">

			<div class="title-cart">
				<h3>Giỏ hàng của bạn</h3>
			</div>

		</div>
		<div class="col-main cart_desktop_page cart-page" style="min-height: auto;">
			<p class="hidden-xs-down">Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="/" style="color:;">cửa hàng</a>
				để tiếp tục mua sắm.</p>
		</div>

	</div>
	<div class="cart-mobile hidden-md hidden-lg hidden-sm">
		<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
			<div class="header-cart" style="background:#fff;">

				<div class="title-cart">
					<h3>Giỏ hàng của bạn</h3>
					<p>(Chưa có sản phẩm nào) nhấn vào <a href="{{route('home')}}">cửa hàng</a> để mua hàng</p>
				</div>

			</div>

			<div class="header-cart-content" style="background:#fff;"></div>

		</form>

	</div>
	@endif
</section>

@endsection