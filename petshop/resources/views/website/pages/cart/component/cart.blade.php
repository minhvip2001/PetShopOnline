@php
	$total = 0
@endphp
<div class="main container hidden-xs cart-desktop">
		<div class="header-cart" style="background:#fff;">
			<div class="title-cart">
				<h3>Giỏ hàng của bạn</h3> (<span class="count_item_pr">1</span> sản phẩm)
			</div>

		</div>

		<div class="col-main cart_desktop_page cart-page">
			<div class="cart page_cart hidden-xs">
				<form class="margin-bottom-0 update_cart_url" data-url="{{route('cart.update')}}">
					<div class="bg-scroll">
						<div class="cart-thead">
							<div style="width: 17%">Ảnh sản phẩm</div>
							<div style="width: 33%"><span class="nobr">Tên sản phẩm</span></div>
							<div style="width: 15%" class="a-center"><span class="nobr">Đơn giá</span></div>
							<div style="width: 20%" class="a-center">Số lượng</div>
							<div style="width: 15%" class="a-center">Thành tiền</div>
						</div>

						<div class="cart-tbody">
							@foreach(session()->get('cart') as $id => $cartItem)
							@php
							$total += $cartItem['price'] * $cartItem['quantity']
							@endphp
							<div class="item-cart productid-{{$cartItem['id']}}">
								<div style="width: 17%" class="image"><a class="product-image" title="{{$cartItem['name']}}"
										href="{{route('product', $cartItem['slug'])}}"><img width="75" height="auto"
											alt="{{$cartItem['name']}}" src="{{asset('/uploads/products/'.$cartItem['image'])}}"></a>
								</div>
								<div style="width: 33%" class="prd_name">
									<h2 class="product-name">
										<a class="text2line" href="{{route('product', $cartItem['slug'])}}">{{$cartItem['name']}}</a>
										<span class="variant-title">Default Title</span>
									</h2>
									<a class="button remove-item remove-item-cart" title="Xóa" href="javascript:;"
										data-id="{{$cartItem['id']}}"><span><i class="fa fa-trash" aria-hidden="true"></i><span>Xóa sản
												phẩm</span></span>
									</a>
								</div>
								<div style="width: 15%" class="a-center">
									<span class="item-price">
										<span class="price">{{number_format($cartItem['price'], 0, ',', '.')}}₫</span>
									</span>
								</div>
								<style>
									.cart-tbody .item-cart .input_qty_pr .items-count1 {
										border: 1px solid #ddd;
										outline: none;
										background: #fff;
										height: 34px;
										width: 34px;
										line-height: 28px;
										text-align: center;
										vertical-align: top;
										padding: 0;
									}

									@media (min-width: 1200px) {
										.main-container .col-main .cart .cart-tbody .item-cart .number-sidebar1 {
											border: 1px solid #ddd;
											height: 34px;
											margin-left: -1px;
											text-align: center;
											width: 50px;
											vertical-align: top;
											margin-right: -1px;
											display: inline-block;
											min-height: 24px;
											padding: 0;
										}
									}

									.main-container .col-main .cart .cart-tbody .item-cart .number-sidebar1 {
										font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
										min-height: 0;
										position: static;
										display: inline-block;
										float: none;
										margin-bottom: 0;
									}
								</style>

								<div style="width: 20%" class="a-center">
									<div class="input_qty_pr">
										<input class="variantID" type="hidden" name="variantId"
											value="{{$cartItem['id']}}">
											<button class="reduced_pop items-count1 btn-minus cart_update" data-id="{{$id}}"
											type="button">–</button>
                      <input type="number" maxlength="12" min="1"
											onchange="if(this.value == 0)this.value=1;" class="input-text number-sidebar1 input_pop input_pop quantity"
											name="Lines" size="4" id="input-quantity-{{$id}}" value="{{$cartItem['quantity']}}"><button
											class="increase_pop items-count1 btn-plus cart_update" data-id="{{$id}}" type="button">+</button></div>
								</div>
								<div style="width: 15%" class="a-center"><span class="cart-price"> <span
											class="price">{{number_format($cartItem['price'] * $cartItem['quantity'], 0, ',', '.')}}₫</span>
									</span></div>
							</div>
							@endforeach
						</div>

					</div>
				</form>
				<div class="cart-collaterals cart_submit row">
					<div class="totals-table totals col-sm-12 col-md-6 col-xs-12">
						<div class="totals">
							<div class="inner">
								<table class="table shopping-cart-table-total margin-bottom-0" id="shopping-cart-totals-table">
									<colgroup>
										<col>
										<col>
									</colgroup>
									<tfoot>
										<tr>
											<td colspan="0" class="a-right"><span>Tạm tính:</span></td>
											<td class="a-right"><strong><span class="totals_price price">{{number_format($total, 0, ',',
														'.')}}₫</span></strong></td>
										</tr>
										<tr>
											<td colspan="0" class="a-right"><span>Thành tiền:</span></td>
											<td class="a-right"><strong><span
														class="totals_price_second totals_price price">{{number_format($total, 0, ',',
														'.')}}₫</span></strong></td>
										</tr>
									</tfoot>
								</table>
								<ul class="checkout">
									<li class="clearfix f-right">
										<button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button"
											onclick="window.location.href='/collections/all'"><span>Tiếp tục mua
												hàng</span></button>
										<button class="btn btn-primary button btn-proceed-checkout f-right" title="Thực hiện thanh toán"
											type="button" onclick="myfunction()"><span>Thực
												hiện thanh toán</span></button>
										<script>
											function myfunction() {
												window.location.href = "{{route('checkout')}}";
											}
										</script>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<div class="cart-mobile hidden-md hidden-lg hidden-sm">
		<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
			<div class="header-cart" style="background:#fff;">

				<div class="title-cart">
					<h3>Giỏ hàng của bạn</h3>
				</div>

			</div>

			<div class="header-cart-content" style="background:#fff;">
				<div class="cart_page_mobile content-product-list">
					@foreach(session()->get('cart') as $cartItem)
					<div class="item-product item productid-{{$cartItem['id']}}">
						<div class="item-product-cart-mobile"><a href="{{route('product', $cartItem['slug'])}}"> </a><a
								class="product-images1" href="" title="{{$cartItem['name']}}"><img width="80" height="150" alt=""
									src="{{asset('/uploads/products/'.$cartItem['image'])}}"></a>
						</div>
						<div class="title-product-cart-mobile">
							<h3><a href="{{route('product', $cartItem['slug'])}}"
									title="{{$cartItem['name']}}">{{$cartItem['name']}}</a></h3>
							<p>Giá: <span>{{number_format($cartItem['price'], 0, ',', '.')}}₫</span></p>
						</div>
						<style>
							@media screen and (max-width: 991px) {
								.select-item-qty-mobile .txt_center button.reduced.items-count1.btn-minus {
									position: absolute;
									left: 0;
									top: 0;
									margin: 0;
									line-height: 1;
									height: 25px;
									width: 25px;
									border-style: hidden;
									background: none !important;
									color: #000;
									border: solid thin #ebebeb;
									border-right: 0px;
									text-align: center;
									padding: 0px;
								}

								.select-item-qty-mobile .txt_center button.increase.items-count1.btn-plus {
									position: absolute;
									right: 0;
									top: 0;
									margin: 0;
									height: 25px;
									width: 25px;
									display: inline-block;
									line-height: 1;
									border-style: hidden;
									color: #fff;
									background: none !important;
									color: #000;
									border: solid thin #ddd;
									border-left: 0px;
									text-align: center;
									padding: 0px;
								}
							}
						</style>
						<div class="select-item-qty-mobile">
							<div class="txt_center">
								<input class="variantID" type="hidden" name="variantId"
									value="{{$cartItem['id']}}">
									<button class="reduced items-count1 btn-minus"type="button">–</button>
									<input type="text" maxlength="12" min="0"
									class="input-text number-sidebar qtyMobile44819071" id="qtyMobile44819071" name="Lines" size="4"
									value="{{$cartItem['quantity']}}">
									<button class="increase items-count1 btn-plus"
									type="button">+</button></div><a class="button remove-item remove-item-cart" href="javascript:;"
								data-id="{{$cartItem['id']}}">Xoá</a>
						</div>
					</div>
					@endforeach
				</div>
				<div class="header-cart-price" style="">
					<div class="title-cart ">
						<h3 class="text-xs-left">Tổng tiền</h3><a
							class="text-xs-right pull-right totals_price_mobile">{{number_format($total, 0, ',', '.')}}₫</a>
					</div>
					<div class="checkout"><button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button"
							onclick="window.location.href='/checkout'"><span>Tiến hành thanh toán</span></button><button
							class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button"
							onclick="window.location.href='/collections/all'"><span>Tiếp tục mua hàng</span></button></div>
				</div>
			</div>

		</form>

	</div>
  