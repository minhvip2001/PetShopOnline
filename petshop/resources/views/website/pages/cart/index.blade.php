@extends('website.layouts.master2')
@section('title')
Siêu thị thú cưng Pet shop Hà Nội
@endsection
@section('content')
<section class="main-cart-page main-container col1-layout">
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
					<p>(Chưa có sản phẩm nào) nhấn vào <a href="/collections/all">cửa hàng</a> để mua hàng</p>
				</div>

			</div>

			<div class="header-cart-content" style="background:#fff;"></div>

		</form>

	</div>
	@endif
</section>
<script>
  
	function plus(){
		let id = $(this).data('id') 
		var qty =  document.getElementById("input-quantity-"+id)
		var newQuantity = parseInt(qty.value)+1;
    qty.value = newQuantity
		
	}
	function minus(){
		let id = $(this).data('id') 
		var qty =  document.getElementById("input-quantity-"+id)
		var newQuantity = parseInt(qty.value)-1;
    qty.value = newQuantity
		if(qty.value < 1){
			doccument.setAttribute("disabled", true);
		}
		
	}
	function cartUpdate(event){
		
		event.preventDefault();
		let urlUpdateCart = $('.update_cart_url').data('url')
		let id = $(this).data('id') 
		let quantity = $(this).parents('.input_qty_pr').find('input.quantity').val();
		// console.log(quantity)
		$.ajax({
			type: "Get",
			url: urlUpdateCart,
			data: {
				id: id,
				quantity: quantity
			},
			success:function(data){
				$('.main-cart-page.main-container.col1-layout').html(data.data);
			}
		})
	}
	$(function(){
		$(document).on('click', '.btn-plus', plus)
		$(document).on('click', '.btn-minus', minus)
		$(document).on('click', '.cart_update', cartUpdate)
	})
</script>
@endsection