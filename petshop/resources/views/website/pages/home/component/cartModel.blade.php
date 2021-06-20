@php
$total = 0;
$item_quantity = 0;
@endphp
@foreach(session()->get('cart') as $id => $cartItem)
@php
$item_quantity += $cartItem['quantity']
@endphp
@endforeach
<?php session()->put('quantity_cart', $item_quantity); ?>
<div id="popup-cart-desktop" class="clearfix update_cart_url" data-url="{{route('cart.update')}}">
	<div class="title-popup-cart">
		<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/icon-check.png?1621568561910"
			alt="Cutepets - Siêu thị thú cưng Pet shop Hà Nội" /> <span class="your_product">Bạn đã thêm <span
				class="cart_name_style">[ <span class="cart-popup-name">sản phẩm</span>]</span> vào giỏ hàng thành công ! </span>
	</div>
	<div class="wrap_popup">
		<div class="title-quantity-popup">
			<span class="cart_status" onclick="window.location.href='/cart';">Giỏ hàng của bạn có <span
					class="cart-popup-count">{{$item_quantity}}</span> sản phẩm </span> <i class="fa fa-caret-right"
				aria-hidden="true"></i>
		</div>
		<div class="content-popup-cart">
			<div class="thead-popup">
				<div style="width: 53%;" class="text-left">Sản phẩm</div>
				<div style="width: 15%;" class="text-center">Đơn giá</div>
				<div style="width: 15%;" class="text-center">Số lượng</div>
				<div style="width: 17%;" class="text-center">Thành tiền</div>
			</div>
			<div class="tbody-popup scrollbar-dynamic">
				@foreach(session()->get('cart') as $id => $cartItem)
				@php
				$total += $cartItem['price'] * $cartItem['quantity']
				@endphp
				<div class="item-popup productid-{{$id}}">
					<div style="width: 13%;" class="border height image_ text-left">
						<div class="item-image"><a class="product-image" href="{{route('product', $cartItem['slug'])}}"
								title="{{$cartItem['name']}}"><img alt="{{$cartItem['image']}}"
									src="{{asset('/uploads/products/'.$cartItem['image'])}}" width="90"></a></div>
					</div>
					<div style="width:37.8%;" class="height text-left">
						<div class="item-info">
							<p class="item-name">
								<a class="text2line" href="{{route('product', $cartItem['slug'])}}"
									title="{{$cartItem['name']}}">{{$cartItem['name']}}</a>
							</p>
							<span class="variant-title-popup" style="display: none;">Default Title</span><a href="javascript:;"
								class="remove-cart-item" title="Xóa" data-id="{{$cartItem['id']}}"><i
									class="fa fa-close"></i>&nbsp;&nbsp;Xoá</a>
							<p class="addpass" style="color:#fff;margin:0px;">{{$cartItem['name']}}</p>
						</div>
					</div>
					<div style="width: 14.4%;" class="border height text-center">
						<div class="item-price"><span class="price">{{number_format($cartItem['price'], 0, ',', '.')}}₫</span></div>
					</div>
					<div style="width: 14.5%;" class="border height text-center">
						<div class="qty_inputt check_ input_qty_cart">
							<input class="variantID" type="hidden" name="variantId" value="{{$cartItem['id']}}">
							<button class="num1 reduced items-count1 btn-minus cart_update" type="button" data-id="{{$id}}">-</button><input type="text" maxlength="12" min="1" readonly="" class="input-text number-sidebar quantity input-quantity-{{$id}}" data-id="{{$id}}"
								id="qtyItemP{{$cartItem['id']}}" name="Lines" size="4" value="{{$cartItem['quantity']}}"><button class="num2 increase items-count1 btn-plus cart_update" data-id="{{$id}}"
								type="button">+</button>
						</div>
					</div>
					<div style="width: 20.3%;" class="border height text-center"><span class="cart-price">
							<span class="price">{{number_format($cartItem['price'] * $cartItem['quantity'], 0, ',', '.')}}₫</span>
						</span>
					</div>
				</div>
				@endforeach
			</div>
			<div class="tfoot-popup">
				<div class="tfoot-popup-1 a-right clearfix">
					<span class="total-p popup-total">Tổng tiền thanh toán: <span class="total-price">{{number_format($total, 0,
							',','.')}}₫</span></span>
				</div>
				<div class="tfoot-popup-2 clearfix">
					<a class="button checkout_ btn-proceed-checkout" title="Thực hiện thanh toán" href="{{route('checkout')}}"><span>Thực
							hiện thanh toán</span></a>
					<a class="button buy_ btn-continus-h" onclick="$('#popup-cart').hide();"
						title="Tiếp tục mua hàng"><span><span>Tiếp tục mua hàng</span></span></a>

				</div>
			</div>
		</div>
		<a title="Close" id="close-window" onclick="$('#popup-cart').hide();" class="quickview-close close-window"><i
				class="fa fa-close"></i></a>
	</div>
</div>
@if(session()->get('cart') == null)
  <script>$('#popup-cart').hide()</script>
@endif