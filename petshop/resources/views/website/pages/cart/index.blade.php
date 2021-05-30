@extends('website.layouts.master2')
@section('title')
Siêu thị thú cưng Pet shop Hà Nội
@endsection
@section('content')
<section class="main-cart-page main-container col1-layout">
	<div class="main container hidden-xs cart-desktop">
		<div class="header-cart" style="background:#fff;">

			<div class="title-cart">
				<h3>Giỏ hàng của bạn</h3> (<span class="count_item_pr">1</span> sản phẩm)
			</div>

		</div>
		<div class="col-main cart_desktop_page cart-page">
			<div class="cart page_cart hidden-xs">
				<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
					<div class="bg-scroll">
						<div class="cart-thead">
							<div style="width: 17%">Ảnh sản phẩm</div>
							<div style="width: 33%"><span class="nobr">Tên sản phẩm</span></div>
							<div style="width: 15%" class="a-center"><span class="nobr">Đơn giá</span></div>
							<div style="width: 20%" class="a-center">Số lượng</div>
							<div style="width: 15%" class="a-center">Thành tiền</div>
						</div>
						<div class="cart-tbody">
							<div class="item-cart productid-44819071">
								<div style="width: 17%" class="image"><a class="product-image"
										title="Thức ăn hạt Cho Mèo Me-O Gold 1.2kg - CutePets - Fit and Firm Mèo Trưởng Thành"
										href="/thuc-an-hat-cho-meo-me-o-gold-1-2kg"><img width="75" height="auto"
											alt="Thức ăn hạt Cho Mèo Me-O Gold 1.2kg - CutePets - Fit and Firm Mèo Trưởng Thành"
											src="//bizweb.dktcdn.net/thumb/small/100/307/433/products/thuc-an-hat-cho-meo-me-o-gold-cutepets3-0fc89741-4e21-4e6c-8a91-e95ccafa4ff3.jpg"></a>
								</div>
								<div style="width: 33%" class="prd_name">
									<h2 class="product-name"> <a class="text2line" href="/thuc-an-hat-cho-meo-me-o-gold-1-2kg">Thức ăn hạt
											Cho Mèo Me-O Gold 1.2kg - CutePets</a><span class="variant-title">Fit and Firm Mèo Trưởng
											Thành</span> </h2><a class="button remove-item remove-item-cart" title="Xóa" href="javascript:;"
										data-id="44819071"><span><i class="fa fa-trash" aria-hidden="true"></i><span>Xóa sản
												phẩm</span></span></a>
								</div>
								<div style="width: 15%" class="a-center"><span class="item-price"> <span
											class="price">160.000₫</span></span></div>
								<div style="width: 20%" class="a-center">
									<div class="input_qty_pr"><input class="variantID" type="hidden" name="variantId"
											value="44819071"><button
											onclick="var result = document.getElementById('qtyItem44819071'); var qtyItem44819071 = result.value; if( !isNaN( qtyItem44819071 ) &amp;&amp; qtyItem44819071 > 1 ) result.value--;return false;"
											disabled="" class="reduced_pop items-count btn-minus" type="button">–</button><input type="text"
											maxlength="12" min="1" onchange="if(this.value == 0)this.value=1;"
											class="input-text number-sidebar input_pop input_pop qtyItem44819071" id="qtyItem44819071"
											name="Lines" size="4" value="1"><button
											onclick="var result = document.getElementById('qtyItem44819071'); var qtyItem44819071 = result.value; if( !isNaN( qtyItem44819071 )) result.value++;return false;"
											class="increase_pop items-count btn-plus" type="button">+</button></div>
								</div>
								<div style="width: 15%" class="a-center"><span class="cart-price"> <span class="price">160.000₫</span>
									</span></div>
							</div>
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
											<td class="a-right"><strong><span class="totals_price price">160.000₫</span></strong></td>
										</tr>
										<tr>
											<td colspan="0" class="a-right"><span>Thành tiền:</span></td>
											<td class="a-right"><strong><span
														class="totals_price_second totals_price price">160.000₫</span></strong></td>
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
					<div class="item-product item productid-44819071 ">
						<div class="item-product-cart-mobile"><a href="/thuc-an-hat-cho-meo-me-o-gold-1-2kg"> </a><a
								class="product-images1" href=""
								title="Thức ăn hạt Cho Mèo Me-O Gold 1.2kg - CutePets - Fit and Firm Mèo Trưởng Thành"><img width="80"
									height="150" alt=""
									src="//bizweb.dktcdn.net/thumb/small/100/307/433/products/thuc-an-hat-cho-meo-me-o-gold-cutepets3-0fc89741-4e21-4e6c-8a91-e95ccafa4ff3.jpg"></a>
						</div>
						<div class="title-product-cart-mobile">
							<h3><a href="/thuc-an-hat-cho-meo-me-o-gold-1-2kg"
									title="Thức ăn hạt Cho Mèo Me-O Gold 1.2kg - CutePets - Fit and Firm Mèo Trưởng Thành">Thức ăn hạt Cho
									Mèo Me-O Gold 1.2kg - CutePets - Fit and Firm Mèo Trưởng Thành</a></h3>
							<p>Giá: <span>160.000₫</span></p>
						</div>
						<div class="select-item-qty-mobile">
							<div class="txt_center"><input class="variantID" type="hidden" name="variantId" value="44819071"><button
									onclick="var result = document.getElementById('qtyMobile44819071'); var qtyMobile44819071 = result.value; if( !isNaN( qtyMobile44819071 ) &amp;&amp; qtyMobile44819071 > 1 ) result.value--;return false;"
									class="reduced items-count btn-minus" type="button">–</button><input type="text" maxlength="12"
									min="0" class="input-text number-sidebar qtyMobile44819071" id="qtyMobile44819071" name="Lines"
									size="4" value="1"><button
									onclick="var result = document.getElementById('qtyMobile44819071'); var qtyMobile44819071 = result.value; if( !isNaN( qtyMobile44819071 )) result.value++;return false;"
									class="increase items-count btn-plus" type="button">+</button></div><a
								class="button remove-item remove-item-cart" href="javascript:;" data-id="44819071">Xoá</a>
						</div>
					</div>
				</div>
				<div class="header-cart-price" style="">
					<div class="title-cart ">
						<h3 class="text-xs-left">Tổng tiền</h3><a class="text-xs-right pull-right totals_price_mobile">160.000₫</a>
					</div>
					<div class="checkout"><button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button"
							onclick="window.location.href='/checkout'"><span>Tiến hành thanh toán</span></button><button
							class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button"
							onclick="window.location.href='/collections/all'"><span>Tiếp tục mua hàng</span></button></div>
				</div>
			</div>

		</form>

	</div>

</section>
@endsection