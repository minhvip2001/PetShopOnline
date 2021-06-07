@extends('website.layouts.master2')
@section('title')
Ten san pham
@endsection
@section('content')
<section class="product margin-top-20">
	<div class="container">
		<div class="main-product-page">
			<div class="row">
				<div class="details-product">
					<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
						<div class="rows">
							<div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-5 col-lg-5">
								<div class="row">
									<div class="col_large_default large-image">
										<a href="{{asset('/uploads/products/'.$product[0]->product_feature_image)}}"
											class="large_image_url checkurl" data-rel="prettyPhoto[product-gallery]">

											<img id="img_01" class="img-responsive"
												alt="Thức ăn chó lớn Ganador Adult Tải 10Kg - Vị Cừu và Gạo"
												src="{{asset('/uploads/products/'.$product[0]->product_feature_image)}}"
												data-zoom-image="{{asset('/uploads/products/'.$product[0]->product_feature_image)}}" />
										</a>
										<div class="hidden">

											<div class="item">
												<a href="{{asset('/uploads/products/'.$product[0]->product_feature_image)}}"
													data-image="{{asset('/uploads/products/'.$product[0]->product_feature_image)}}"
													data-zoom-image="{{asset('/uploads/products/'.$product[0]->product_feature_image)}}"
													data-rel="prettyPhoto[product-gallery]">
												</a>
											</div>

											<div class="item">
												<a href="https://bizweb.dktcdn.net/100/307/433/products/thuc-an-cho-cho-con-ganador-adult.jpg?v=1621265869640"
													data-image="https://bizweb.dktcdn.net/100/307/433/products/thuc-an-cho-cho-con-ganador-adult.jpg?v=1621265869640"
													data-zoom-image="https://bizweb.dktcdn.net/100/307/433/products/thuc-an-cho-cho-con-ganador-adult.jpg?v=1621265869640"
													data-rel="prettyPhoto[product-gallery]">
												</a>
											</div>

											<div class="item">
												<a href="https://bizweb.dktcdn.net/100/307/433/products/thuc-an-cho-cho-con-ganador-adult-2.jpg?v=1621265872720"
													data-image="https://bizweb.dktcdn.net/100/307/433/products/thuc-an-cho-cho-con-ganador-adult-2.jpg?v=1621265872720"
													data-zoom-image="https://bizweb.dktcdn.net/100/307/433/products/thuc-an-cho-cho-con-ganador-adult-2.jpg?v=1621265872720"
													data-rel="prettyPhoto[product-gallery]">
												</a>
											</div>

										</div>
									</div>

									<div class="product-detail-thumb">
										<div id="gallery_02"
											class="owl-carousel owl-theme thumbnail-product thumb_product_details not-dqowl" data-loop="false"
											data-lg-items="4" data-md-items="4" data-sm-items="3" data-xs-items="3" data-xxs-items="3">

											<div class="item">
												<a href="#"
													data-image="https://bizweb.dktcdn.net/100/307/433/products/thuc-an-cho-lon-ganador-adult-tai-10kg-vi-cuu-va-gao.jpg?v=1621265866707"
													data-zoom-image="//bizweb.dktcdn.net/thumb/1024x1024/100/307/433/products/thuc-an-cho-lon-ganador-adult-tai-10kg-vi-cuu-va-gao.jpg?v=1621265866707">
													<img
														data-img="//bizweb.dktcdn.net/thumb/1024x1024/100/307/433/products/thuc-an-cho-lon-ganador-adult-tai-10kg-vi-cuu-va-gao.jpg?v=1621265866707"
														src="//bizweb.dktcdn.net/thumb/small/100/307/433/products/thuc-an-cho-lon-ganador-adult-tai-10kg-vi-cuu-va-gao.jpg?v=1621265866707"
														alt="Thức ăn chó lớn Ganador Adult Tải 10Kg - Vị Cừu và Gạo">
												</a>
											</div>

											<div class="item">
												<a href="#"
													data-image="https://bizweb.dktcdn.net/100/307/433/products/thuc-an-cho-cho-con-ganador-adult.jpg?v=1621265869640"
													data-zoom-image="//bizweb.dktcdn.net/thumb/1024x1024/100/307/433/products/thuc-an-cho-cho-con-ganador-adult.jpg?v=1621265869640">
													<img
														data-img="//bizweb.dktcdn.net/thumb/1024x1024/100/307/433/products/thuc-an-cho-cho-con-ganador-adult.jpg?v=1621265869640"
														src="//bizweb.dktcdn.net/thumb/small/100/307/433/products/thuc-an-cho-cho-con-ganador-adult.jpg?v=1621265869640"
														alt="Thức ăn chó lớn Ganador Adult Tải 10Kg - Vị Cừu và Gạo">
												</a>
											</div>

											<div class="item">
												<a href="#"
													data-image="https://bizweb.dktcdn.net/100/307/433/products/thuc-an-cho-cho-con-ganador-adult-2.jpg?v=1621265872720"
													data-zoom-image="//bizweb.dktcdn.net/thumb/1024x1024/100/307/433/products/thuc-an-cho-cho-con-ganador-adult-2.jpg?v=1621265872720">
													<img
														data-img="//bizweb.dktcdn.net/thumb/1024x1024/100/307/433/products/thuc-an-cho-cho-con-ganador-adult-2.jpg?v=1621265872720"
														src="//bizweb.dktcdn.net/thumb/small/100/307/433/products/thuc-an-cho-cho-con-ganador-adult-2.jpg?v=1621265872720"
														alt="Thức ăn chó lớn Ganador Adult Tải 10Kg - Vị Cừu và Gạo">
												</a>
											</div>

										</div>
									</div>

								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 details-pro">
								<h1 class="title-product">{{$product[0]->product_name}}</h1>
								<div class="group-status">
									<span class="first_status">Thương hiệu: <span class="status_name">Ganador</span></span>
									<span class="first_status"> <span class="space">&nbsp; | &nbsp;</span> Tình trạng: <span
											class="status_name availabel">
											Hết hàng
										</span></span>
									<span class="first_status" style="display: block">SKU: <span class="status_name sku">TACGA10CG</span>
										&nbsp; | &nbsp; Serial: <span class="status_name barcode">8938509770471</span></span>
								</div>
								<div class="reviews_details_product">
									<div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail"
										data-id="{{$product[0]->product_id}}"></div>
								</div>

								<div class="price-box" itemscope itemtype="http://schema.org/Offer">

									<span class="special-price"><span class="price product-price"
											itemprop="price">{{$product[0]->product_price}}₫</span>
										<meta itemprop="priceCurrency" content="VND">
									</span> <!-- Giá Khuyến mại -->
									<span class="old-price"><del class="price product-price-old sale"
											itemprop="priceSpecification">{{$product[0]->product_price}}₫</del>
										<meta itemprop="priceCurrency" content="VND">
									</span> <!-- Giá gốc -->

								</div>


								<div class="product-summary product_description ">
									<div class="rte description text4line ">
										{!!$product[0]->product_content!!}
									</div>
									<a class="see-detail" href="#block-tab-infor">[Xem tiếp]</a>
								</div>

								<div class="form-product col-sm-12">
									<form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post"
										class="form-inline margin-bottom-0">

										<div class="box-variant clearfix ">

											<input type="hidden" name="variantId" value="45627188" />

										</div>
										<div class="form-group form_button_details">
											<div class="form_hai ">
												<div class="custom input_number_product custom-btn-number form-control">
													<button class="btn_num num_1 button button_qty"
														onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;"
														type="button">-</button>
													<input type="text" id="qtym" name="quantity" value="1" onkeyup="valid(this,'numbers')"
														onkeypress='validate(event)' class="form-control prd_quantity">
													<button class="btn_num num_2 button button_qty"
														onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
														type="button">+</button>
												</div>
												<div class="button_actions">
													<input class="hidden" type="hidden" name="variantId" value="45627188" />

													<button class="btn btn-lg btn-style button_cart_buy_disable  btn-cart" title="Hết hàng"
														disabled="disabled"><i class="fa fa-shopping-basket hidden"></i>&nbsp;&nbsp;<span>Hết
															hàng</span></button>


												</div>
												<div class="chatshop">
													<a
														href="https://www.messenger.com/t/136319063654266/?messaging_source=source%3Apages%3Amessage_shortlink">Chat
														với shop</a>
												</div>
											</div>
										</div>
										<br />
										<a class="iWishAdd iwishAddWrapper" href="javascript:;" data-customer-id="0"
											data-product="{{$product[0]->product_id}}"><span class="iwishAddChild iwishAddBorder"><img
													class="iWishImg"
													src="https://wishlists.sapoapps.vn/content/images/iwish_add.png" /></span><span
												class="iwishAddChild">Thêm vào yêu thích</span></a>
										<a class="iWishAdded iwishAddWrapper iWishHidden" href="javascript:;" data-customer-id="0"
											data-product="{{$product[0]->product_id}}"><span class="iwishAddChild iwishAddBorder"><img
													class="iWishImg"
													src="https://wishlists.sapoapps.vn/content/images/iwish_added.png" /></span><span
												class="iwishAddChild">Đã yêu thích</span></a>

										<div class="ab-available-notice-button ab-hide" data-ab-product-id="{{$product[0]->product_id}}">
											<button class="ab-notice-btn" title="" type="button"
												onclick="ABAvailableNotice.noticeButtonClick()">
												BÁO KHI CÓ HÀNG
											</button>
										</div>
									</form>
								</div>


								<div class="social-sharing ">
									<div class="addthis_inline_share_toolbox share_add">
										<script type="text/javascript"
											src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58589c2252fc2da4">
											</script>
									</div>
								</div>

							</div>
						</div>

						<div id="block-tab-infor" class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
							<div class="row margin-top-50 xs-margin-top-15">

								<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 no-padding">
									<!-- Nav tabs -->
									<div class="product-tab e-tabs">
										<ul class="tabs tabs-title clearfix">

											<li class="tab-link" data-tab="tab-1">
												<h3><span>Mô tả</span></h3>
											</li>


											<li class="tab-link" data-tab="tab-2">
												<h3><span>Hướng Dẫn Mua Hàng</span></h3>
											</li>


											<li class="tab-link" data-tab="tab-3">
												<h3><span>Đánh giá(APP)</span></h3>
											</li>

										</ul>

										<div id="tab-1" class="tab-content">
											<div class="rte">
												{!!$product[0]->product_description!!}
											</div>

										</div>


										<div id="tab-2" class="tab-content">
											<div class="rte">
												<p style="text-align: justify;"><strong>Bước 1:</strong> Truy cập website và lựa chọn sản phẩm
													cần mua để mua hàng</p>
												<p style="text-align: justify;"><strong>Bước 2:</strong> Click và sản phẩm muốn mua, màn hình
													hiển thị ra pop up với các lựa chọn sau</p>
												<p style="text-align: justify;">Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng
													để lựa chọn thêm sản phẩm vào giỏ hàng</p>
												<p style="text-align: justify;">Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem
													giỏ hàng</p>
												<p style="text-align: justify;">Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng
													bấm vào: Đặt hàng và thanh toán</p>
												<p style="text-align: justify;"><strong>Bước 3:</strong> Lựa chọn thông tin tài khoản thanh
													toán</p>
												<p style="text-align: justify;">Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập
													là email và mật khẩu vào mục đã có tài khoản trên hệ thống</p>
												<p style="text-align: justify;">Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng
													điền các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng
													theo dõi được đơn hàng của mình</p>
												<p style="text-align: justify;">Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp
													chuột vào mục đặt hàng không cần tài khoản</p>
												<p style="text-align: justify;"><strong>Bước 4:</strong> Điền các thông tin của bạn để nhận
													đơn hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình</p>
												<p style="text-align: justify;"><strong>Bước 5:</strong> Xem lại thông tin đặt hàng, điền chú
													thích và gửi đơn hàng</p>
												<p style="text-align: justify;">Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng
													cách gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
												<p style="text-align: justify;">Trân trọng cảm ơn.</p>
											</div>
										</div>


										<div id="tab-3" class="tab-content">
											<div class="rte">
												<div id="sapo-product-reviews" class="sapo-product-reviews" data-id="21622445">
													<div id="sapo-product-reviews-noitem" style="display: none;">
														<div class="content">
															<p data-content-text="language.suggest_noitem"></p>
															<div class="product-reviews-summary-actions">
																<button type="button" class="btn-new-review"
																	onclick="BPR.newReview(this); return false;"
																	data-content-str="language.newreview"></button>
															</div>
															<div id="noitem-bpr-form_" data-id="formId" class="noitem-bpr-form" style="display:none;">
																<div class="sapo-product-reviews-form"></div>
															</div>
														</div>
													</div>

												</div>
											</div>
										</div>

									</div>
								</div>


							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
						<div class="right_module">
							<div class="module_service_details">
								<div class="wrap_module_service">
									<div class="item_service">
										<div class="wrap_item_">
											<div class="content_service">
												<p>Giao hàng nhanh chóng</p>
												<span>Chỉ trong vòng 24h đồng hồ</span>
											</div>
										</div>
									</div>
									<div class="item_service">
										<div class="wrap_item_">
											<div class="content_service">
												<p>Sản phẩm chính hãng</p>
												<span>Sản phẩm nhập khẩu 100%</span>
											</div>
										</div>
									</div>
									<div class="item_service">
										<div class="wrap_item_">
											<div class="content_service">
												<p>Đổi trả cực kì dễ dàng</p>
												<span>Đổi trả trong 5 ngày đầu tiên</span>
											</div>
										</div>
									</div>
									<div class="item_service">
										<div class="wrap_item_">
											<div class="content_service">
												<p>Mua hàng tiết kiệm</p>
												<span>Tiết kiệm hơn từ 10% - 30%</span>
											</div>
										</div>
									</div>
									<div class="item_service">
										<div class="wrap_item_">
											<div class="content_service">
												<p>Hotline mua hàng:</p>
												<span class="phone_red"> <a class="hai01" href="tel:0949111520">0949111520</a></span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="module_best_sale_product margin-bottom-30">
								<div class="title_module_ heading">
									<h2 class="title-head"><a href="frontpage" title="Có thể bạn thích">Có thể bạn thích</a></h2>
								</div>
								<div class="sale_off_today">

									<div class="not-dqowl wrp_list_product">

									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>



		</div>
		<div class="row">





			<div class="col-lg-12 related-product margin-top-30 xs-margin-top-0">
				<div class="section_prd_feature">
					<div class="heading heading_related_h">
						<h2 class="title-head"><a href="/thuc-an-danh-cho-cho">Sản phẩm cùng loại</a></h2>
					</div>
					<div class="row">
						<div
							class="products product_related products-view-grid-bb owl-carousel owl-theme products-view-grid not-dot2"
							data-dot="false" data-nav="false" data-lg-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2"
							data-margin="30">





							<div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
								<div class="owl_item_product product-col">














































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/smart-heart-power-pack-puppy-20kg"
												title="Smart Heart Power Pack puppy 20kg phát triển cơ bắp dành cho cho con - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1621568561910"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/smart-heart-power-pack-puppy-20kg.jpg?v=1612325911000"
													alt="Smart Heart Power Pack puppy 20kg phát triển cơ bắp dành cho cho con - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20557867" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="41430195" />
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/smart-heart-power-pack-puppy-20kg"
															data-handle="smart-heart-power-pack-puppy-20kg"
															class="button_wh_40 btn_view right-to quick-view">
															<i class="fa fa-eye"></i>
															<span class="style-tooltip">Xem nhanh</span>
														</a>



													</div>
												</form>
											</div>
										</div>
										<div class="product-info effect a-left">

											<div class="info_hhh">
												<h3 class="product-name product-name-hover"><a href="/smart-heart-power-pack-puppy-20kg"
														title="Smart Heart Power Pack puppy 20kg phát triển cơ bắp dành cho cho con - CutePets">Smart
														Heart Power Pack puppy 20kg phát triển cơ bắp dành cho cho con - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="20557867"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">1.130.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>



							<div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
								<div class="owl_item_product product-col">
































































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												33%
											</span>







											<a class="image_link display_flex" href="/thit-bo-vun-bo-uc-goi-500g"
												title="Thịt bò vụn - Bò Mỹ Gói 500g - Cutepets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1621568561910"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/thit-bo-vun-bo-my-goi-500g-cutepets.jpg?v=1608698254000"
													alt="Thịt bò vụn - Bò Mỹ Gói 500g - Cutepets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20209507" enctype="multipart/form-data">
													<div>

														<!--<button disabled="disabled" class="btn-cart button_wh_40  left-to" title="Hết hàng"><i class="icon-settings icons"></i></button>-->


														<a title="Xem nhanh" href="/thit-bo-vun-bo-uc-goi-500g"
															data-handle="thit-bo-vun-bo-uc-goi-500g"
															class="button_wh_40 btn_view right-to quick-view">
															<i class="fa fa-eye"></i>
															<span class="style-tooltip">Xem nhanh</span>
														</a>



													</div>
												</form>
											</div>
										</div>
										<div class="product-info effect a-left">

											<div class="info_hhh">
												<h3 class="product-name product-name-hover"><a href="/thit-bo-vun-bo-uc-goi-500g"
														title="Thịt bò vụn - Bò Mỹ Gói 500g - Cutepets">Thịt bò vụn - Bò Mỹ Gói 500g -
														Cutepets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="20209507"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">20.000₫</span>

													<span class="price product-price-old">
														30.000₫
													</span>


												</div>



											</div>

										</div>

									</div>
								</div>
							</div>



							<div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
								<div class="owl_item_product product-col">




















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/white-dogs-thuc-an-vi-cuu-cho-cho-long-trang-400g"
												title="Thức ăn cho chó lông trắng Superior Care Adult Thịt Cừu - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1621568561910"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/thuc-an-cho-cho-long-trang-superior-care-adult-400g-vi-cuu-cutepets-3.jpg?v=1612327585000"
													alt="Thức ăn cho chó lông trắng Superior Care Adult Thịt Cừu - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19455933" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="37262883" />
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/white-dogs-thuc-an-vi-cuu-cho-cho-long-trang-400g'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/white-dogs-thuc-an-vi-cuu-cho-cho-long-trang-400g"
															data-handle="white-dogs-thuc-an-vi-cuu-cho-cho-long-trang-400g"
															class="button_wh_40 btn_view right-to quick-view">
															<i class="fa fa-eye"></i>
															<span class="style-tooltip">Xem nhanh</span>
														</a>



													</div>
												</form>
											</div>
										</div>
										<div class="product-info effect a-left">

											<div class="info_hhh">
												<h3 class="product-name product-name-hover"><a
														href="/white-dogs-thuc-an-vi-cuu-cho-cho-long-trang-400g"
														title="Thức ăn cho chó lông trắng Superior Care Adult Thịt Cừu - CutePets">Thức ăn cho chó
														lông trắng Superior Care Adult Thịt Cừu - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19455933"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">150.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>



							<div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
								<div class="owl_item_product product-col">
































































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												9%
											</span>







											<a class="image_link display_flex"
												href="/pho-mai-vien-cheddar-cheese-ball-100g-banh-thuong-bow-wow-cho-cho"
												title="Phô mai viên Cheddar Cheese Ball 100g Bánh thưởng Bow Wow cho chó - Cutepets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1621568561910"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/pho-mai-vien-cheddar-cheese-ball-100g-banh-thuong-bow-wow-cho-cho-cutepets-6.jpg?v=1599555621860"
													alt="Phô mai viên Cheddar Cheese Ball 100g Bánh thưởng Bow Wow cho chó - Cutepets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19071289" enctype="multipart/form-data">
													<div>

														<!--<button disabled="disabled" class="btn-cart button_wh_40  left-to" title="Hết hàng"><i class="icon-settings icons"></i></button>-->


														<a title="Xem nhanh"
															href="/pho-mai-vien-cheddar-cheese-ball-100g-banh-thuong-bow-wow-cho-cho"
															data-handle="pho-mai-vien-cheddar-cheese-ball-100g-banh-thuong-bow-wow-cho-cho"
															class="button_wh_40 btn_view right-to quick-view">
															<i class="fa fa-eye"></i>
															<span class="style-tooltip">Xem nhanh</span>
														</a>



													</div>
												</form>
											</div>
										</div>
										<div class="product-info effect a-left">

											<div class="info_hhh">
												<h3 class="product-name product-name-hover"><a
														href="/pho-mai-vien-cheddar-cheese-ball-100g-banh-thuong-bow-wow-cho-cho"
														title="Phô mai viên Cheddar Cheese Ball 100g Bánh thưởng Bow Wow cho chó - Cutepets">Phô
														mai viên Cheddar Cheese Ball 100g Bánh thưởng Bow Wow cho chó - Cutepets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19071289"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">68.000₫</span>

													<span class="price product-price-old">
														75.000₫
													</span>


												</div>



											</div>

										</div>

									</div>
								</div>
							</div>



							<div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
								<div class="owl_item_product product-col">


















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/banh-thuong-palmer-quy-bo-tron-100g"
												title="Bánh thưởng PALMER 100g quy bơ tròn dành cho chó - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1621568561910"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/banh-thuong-palmer-100g-quy-bo-tron1.jpg?v=1592834842000"
													alt="Bánh thưởng PALMER 100g quy bơ tròn dành cho chó - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18324690" enctype="multipart/form-data">
													<div>

														<!--<button disabled="disabled" class="btn-cart button_wh_40  left-to" title="Hết hàng"><i class="icon-settings icons"></i></button>-->


														<a title="Xem nhanh" href="/banh-thuong-palmer-quy-bo-tron-100g"
															data-handle="banh-thuong-palmer-quy-bo-tron-100g"
															class="button_wh_40 btn_view right-to quick-view">
															<i class="fa fa-eye"></i>
															<span class="style-tooltip">Xem nhanh</span>
														</a>



													</div>
												</form>
											</div>
										</div>
										<div class="product-info effect a-left">

											<div class="info_hhh">
												<h3 class="product-name product-name-hover"><a href="/banh-thuong-palmer-quy-bo-tron-100g"
														title="Bánh thưởng PALMER 100g quy bơ tròn dành cho chó - CutePets">Bánh thưởng PALMER
														100g quy bơ tròn dành cho chó - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18324690"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">25.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>



							<div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
								<div class="owl_item_product product-col">



































































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/banh-thuong-daisy"
												title="Bánh thưởng Daisy and Buddy 100g cho chó - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1621568561910"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/banh-thuong-daisy-and-buddy-100g-cho-cho5.jpg?v=1592834679000"
													alt="Bánh thưởng Daisy and Buddy 100g cho chó - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18324681" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="33639830" />
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/banh-thuong-daisy'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/banh-thuong-daisy" data-handle="banh-thuong-daisy"
															class="button_wh_40 btn_view right-to quick-view">
															<i class="fa fa-eye"></i>
															<span class="style-tooltip">Xem nhanh</span>
														</a>



													</div>
												</form>
											</div>
										</div>
										<div class="product-info effect a-left">

											<div class="info_hhh">
												<h3 class="product-name product-name-hover"><a href="/banh-thuong-daisy"
														title="Bánh thưởng Daisy and Buddy 100g cho chó - CutePets">Bánh thưởng Daisy and Buddy
														100g cho chó - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18324681"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">30.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>



							<div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
								<div class="owl_item_product product-col">






























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/dog-classic-hat-hat-han-quoc"
												title="Thức ăn Dograng Classic hạt hàn quốc dành cho chó - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1621568561910"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/thuc-an-dograng-classic-hat-han-quoc-danh-cho-cho-cutepets3.jpg?v=1588012382000"
													alt="Thức ăn Dograng Classic hạt hàn quốc dành cho chó - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-17719873" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="32274993" />
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/dog-classic-hat-hat-han-quoc'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/dog-classic-hat-hat-han-quoc"
															data-handle="dog-classic-hat-hat-han-quoc"
															class="button_wh_40 btn_view right-to quick-view">
															<i class="fa fa-eye"></i>
															<span class="style-tooltip">Xem nhanh</span>
														</a>



													</div>
												</form>
											</div>
										</div>
										<div class="product-info effect a-left">

											<div class="info_hhh">
												<h3 class="product-name product-name-hover"><a href="/dog-classic-hat-hat-han-quoc"
														title="Thức ăn Dograng Classic hạt hàn quốc dành cho chó - CutePets">Thức ăn Dograng
														Classic hạt hàn quốc dành cho chó - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="17719873"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">75.000₫</span>
												</div>



											</div>

										</div>

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
<script>
	$('.see-detail').click(function (e) {
		e.preventDefault();
		$('html,body').animate({
			scrollTop: $("#block-tab-infor").offset().top,
		}, 700);
		return false;
	});
	var ww = $(window).width();

	function validate(evt) {
		var theEvent = evt || window.event;
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode(key);
		var regex = /[0-9]|\./;
		if (!regex.test(key)) {
			theEvent.returnValue = false;
			if (theEvent.preventDefault) theEvent.preventDefault();
		}
	}


	var selectCallback = function (variant, selector) {
		if (variant) {

			var form = jQuery('#' + selector.domIdPrefix).closest('form');

			for (var i = 0, length = variant.options.length; i < length; i++) {

				var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
				if (radioButton.size()) {
					radioButton.get(0).checked = true;
				}
			}
		}
		var addToCart = jQuery('.form-product .btn-cart'),
			form = jQuery('.form-product .form_hai'),
			productPrice = jQuery('.details-pro .special-price .product-price'),
			qty = jQuery('.group-status .first_status .availabel'),
			sale = jQuery('.details-pro .old-price .product-price-old'),
			comparePrice = jQuery('.details-pro .old-price .product-price-old');
		/*** VAT ***/

		/*begin variant image*/
		if (variant && variant.image) {
			var originalImage = jQuery(".large-image img");
			var newImage = variant.image;
			var element = originalImage[0];
			Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
				jQuery(element).parents('a').attr('href', newImageSizedSrc);
				jQuery(element).attr('src', newImageSizedSrc);
				if (ww >= 1200) {

					$("#img_01").data('zoom-image', newImageSizedSrc).elevateZoom({
						responsive: true,
						gallery: 'gallery_02',
						cursor: 'pointer',
						galleryActiveClass: "active"
					});
					$("#img_01").bind("click", function (e) {
						var ez = $('#img_02').data('elevateZoom');
					});

				}
			});

			setTimeout(function () {
				$('.checkurl').attr('href', $(this).attr('src'));
				if (ww >= 1200) {

					$('.zoomContainer').remove();
					$("#img_01").elevateZoom({
						responsive: true,
						gallery: 'gallery_02',
						cursor: 'pointer',
						galleryActiveClass: "active"
					});

				}
			}, 200);

		}
	};
	jQuery(function ($) {


		// Add label if only one product option and it isn't 'Title'. Could be 'Size'.


		// Hide selectors if we only have 1 variant and its title contains 'Default'.

		$('.selector-wrapper').hide();

		$('.selector-wrapper').css({
			'text-align': 'left',
			'margin-bottom': '15px'
		});
	});

	jQuery('.swatch :radio').change(function () {
		var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
		var optionValue = jQuery(this).val();
		jQuery(this)
			.closest('form')
			.find('.single-option-selector')
			.eq(optionIndex)
			.val(optionValue)
			.trigger('change');
	});
	if (ww >= 1200) {

		$(document).ready(function () {
			if ($(window).width() > 1200) {
				$('#img_01').elevateZoom({
					gallery: 'gallery_02',
					zoomWindowWidth: 420,
					zoomWindowHeight: 500,
					zoomWindowOffetx: 10,
					easing: true,
					scrollZoom: true,
					cursor: 'pointer',
					galleryActiveClass: 'active',
					imageCrossfade: true
				});
			}
		});

	}
	$("#img_02").click(function (e) {
		e.preventDefault();
		var hr = $(this).attr('src');
		$('#img_01').attr('src', hr);
		$('.large_image_url').attr('href', hr);
		$('#img_01').attr('data-zoom-image', hr);
	});

	$(".not-dqtab").each(function (e) {
		$(this).find('.tabs-title li:first-child').addClass('current');
		$(this).find('.tab-content').first().addClass('current');

		$(this).find('.tabs-title li').click(function () {
			if ($(window).width() > 315) {
				if ($(this).hasClass('current')) {
					$(this).removeClass('current');
				} else {
					var tab_id = $(this).attr('data-tab');
					var url = $(this).attr('data-url');
					$(this).closest('.e-tabs').find('.tab-viewall').attr('href', url);

					$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
					$(this).closest('.e-tabs').find('.tab-content').removeClass('current');

					$(this).addClass('current');
					$(this).closest('.e-tabs').find("#" + tab_id).addClass('current');
				}
			} else {
				var tab_id = $(this).attr('data-tab');
				var url = $(this).attr('data-url');
				$(this).closest('.e-tabs').find('.tab-viewall').attr('href', url);

				$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
				$(this).closest('.e-tabs').find('.tab-content').removeClass('current');

				$(this).addClass('current');
				$(this).closest('.e-tabs').find("#" + tab_id).addClass('current');

			}

		});
	});
	function scrollToxx() {
		$('html, body').animate({ scrollTop: $('.product-tab.e-tabs').offset().top }, 'slow');
		$('.product-tab .tab-link').removeClass('current');
		$('.product-tab .tab-link[data-tab=tab-3]').addClass('current');
		$('.product-tab .tab-content').removeClass('current');
		$('.product-tab .tab-content#tab-3').addClass('current');

		return false;
	}
	/*For recent product*/
	var alias = 'thuc-an-cho-lon-ganador-adult-10kg-vi-cuu-va-gao';
	/*end*/
	if (ww >= 1200) {

		$(document).ready(function () {
			$('#img_01').elevateZoom({
				gallery: 'gallery_02',
				zoomWindowWidth: 420,
				zoomWindowHeight: 500,
				zoomWindowOffetx: 10,
				easing: true,
				scrollZoom: true,
				cursor: 'pointer',
				galleryActiveClass: 'active',
				imageCrossfade: true

			});
		});

	}
	$('#gallery_00 img, .swatch-element label').click(function (e) {

		$('.checkurl').attr('href', $(this).attr('src'));
		if (ww >= 1200) {

			setTimeout(function () {
				$('.zoomContainer').remove();
				$('#zoom_01').elevateZoom({
					gallery: 'gallery_02',
					zoomWindowWidth: 420,
					zoomWindowHeight: 500,
					zoomWindowOffetx: 10,
					easing: true,
					scrollZoom: true,
					cursor: 'pointer',
					galleryActiveClass: 'active',
					imageCrossfade: true
				});
			}, 300);

		}
	});

</script>


<script>


	$(document).ready(function (e) {

		var sale_count = $('.details-product .product-detail-left .sale_count .bf_');
		if (sale_count == '-0%') {
			sale_count.text('-1%');
		} else if (sale_count == '-100%') {
			sale_count.text('-99%');
		}

		$("#gallery_02").owlCarousel({
			navigation: true,
			nav: true,
			navigationPage: false,
			navigationText: false,
			slideSpeed: 1000,
			pagination: true,
			dots: false,
			margin: 0,
			autoHeight: true,
			autoplay: false,
			autoplayTimeout: false,
			autoplayHoverPause: true,
			loop: false,
			responsive: {
				0: {
					items: 3
				},
				543: {
					items: 4
				},
				768: {
					items: 4
				},
				991: {
					items: 4
				},
				992: {
					items: 4
				},
				1200: {
					items: 4
				}
			}
		});

		$('#gallery_02 img, .swatch-element label').click(function (e) {
			e.preventDefault();
			var ths = $(this).attr('data-img');
			$('.large-image .checkurl').attr('href', ths);

			$('.large-image .checkurl img').attr('src', ths);

			/*** xử lý active thumb -- ko variant ***/
			var thumbLargeimg = $('.details-product .large-image a').attr('href').split('?')[0];
			var thumMedium = $('#gallery_02 .owl-item .item a').find('img').attr('src');
			var url = [];

			$('#gallery_02 .owl-item .item').each(function () {
				var srcImg = '';
				$(this).find('a img').each(function () {
					var current = $(this);
					if (current.children().size() > 0) { return true; }
					srcImg += $(this).attr('src');
				});
				url.push(srcImg);
				var srcimage = $(this).find('a img').attr('src').split('?')[0];
				if (srcimage == thumbLargeimg) {
					$(this).find('a').addClass('active');
				} else {
					$(this).find('a').removeClass('active');
				}
			});
		})

	});

</script>
@endsection