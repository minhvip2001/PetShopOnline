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
<ul id="cart-sidebar" class="mini-products-list count_li update_cart_url" data-url="{{route('cart.update')}}">
	@if(session()->get('cart') == null)
		<div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div>
	@endif
	<style>
		.top-cart-content li.item .detail-item button.items-count1 {
			display: inline-block;
		}

		.qty_drop_cart button.btn_reduced1 {
			height: 24px;
			width: 25px;
			line-height: 24px;
			line-height: 1;
			text-align: center;
			overflow: hidden;
			border-style: hidden;
			border: 1px solid #ebebeb;
			background: #fff !important;
			font-size: 14px;
			cursor: pointer;
		}
		.qty_drop_cart button.btn_increase1 {
    height: 24px;
    width: 25px;
    line-height: 24px;
    text-align: center;
    line-height: 1;
    overflow: hidden;
    border-style: hidden;
    border: 1px solid #ebebeb;
    background: #fff !important;
    font-size: 14px;
    cursor: pointer;
	}	

		.qty_drop_cart .btn_increase1,
		.qty_drop_cart .btn_reduced1 {
			width: 25px;
			height: 24px;
			color: #000;
			float: left;
		}
	</style>
	<ul class="list-item-cart">
		
		@foreach(session()->get('cart') as $id => $cartItem)
		@php
		$total += $cartItem['price'] * $cartItem['quantity']
		@endphp
		<li class="item productid-{{$id}}">
			<div class="border_list">
				<a class="product-image" href="{{route('product', $cartItem['slug'])}}" title="{{$cartItem['name']}}">
					<img alt="{{$cartItem['name']}}" src="{{asset('/uploads/products/'.$cartItem['image'])}}" width="100"></a>
				<div class="detail-item">
					<div class="product-details">
						<p class="product-name">
							<a class="text2line" href="{{route('product', $cartItem['slug'])}}"
								title="{{$cartItem['name']}}">{{$cartItem['name']}}</a>
						</p>
					</div>
					<div class="product-details-bottom">
						<span class="price">{{number_format($cartItem['price'], 0, ',', '.')}}₫</span>
						<a href="" data-id="{{$id}}" title="Xóa" class="remove-cart-item fa fa-times">&nbsp;</a>
						<div class="quantity-select qty_drop_cart input_qty_cart">
							<input class="variantID" type="hidden" name="variantId" value="{{$id}}">
							<button class="btn_reduced1 items-count1 btn-minus cart_update" data-id="{{$id}}" type="button">–</button>
							<input onchange="if(this.value == 0)this.value=1;" type="text" maxlength="12" min="1"
								class="input-text number-sidebar input-quantity-{{$id}} quantity" data-id="{{$id}}" name="Lines" size="4" value="{{$cartItem['quantity']}}">
							<button class="btn_increase1 items-count1 btn-plus cart_update" data-id="{{$id}}" type="button">+</button>
						</div>
					</div>
				</div>
			</div>
		</li>
		@endforeach	
	</ul>
	@if(session()->get('cart') != null)
	<div class="pd">
		<div class="top-subtotal">Tổng tiền thanh toán: <span class="price">{{number_format($total, 0,',','.')}}₫</span>
		</div>
	</div>
	<div class="pd right_ct"><a href="{{route('cart')}}" class="btn btn-primary"><span>Giỏ hàng</span></a><a href="{{route('checkout')}}"
			class="btn btn-white"><span>Thanh toán</span></a>
	</div>
	@endif	
</ul>