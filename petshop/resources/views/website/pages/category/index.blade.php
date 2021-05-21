@extends('website.layouts.master')
@section('title')
Siêu thị thú cưng Pet shop Hà Nội
@endsection
@section('content')
@include('website.blocks.breadcumb', ['name'=>'Dành Cho Chó 1'])
<div class="container">
	<div class="row">
		<!--<div class="image-category">
				<img class="img-responsive" alt="Dành Cho Chó" src="https://bizweb.dktcdn.net/100/307/433/collections/cho.png?v=1524757590190" />
				</div>-->
		<div class="main-category-page col-md-12 col-sm-12 col-xs-12 no-padding">
			<section
				class="section-main-products padding-small main_container collection margin-bottom-30 col-md-9 col-lg-9 pull-right col-sm-12 col-xs-12">
				<div class="text-sm-left">
					<div class="tt">
						<h1 class="title-head margin-top-0">Dành Cho Chó</h1>
					</div>
				</div>
				<div class="category-products products">
					<div class="sortPagiBar">
						<div class="srt">
							<div class="wr_sort col-sm-12 col-xs-12">
								<div class="text-sm-right">
									<div id="sort-by" class="sorby_xxx">
										<label class="left">Sắp xếp: </label>
										<ul>
											<li class="toggle-sort">
												<div class="transparent-background"></div>
												<span>Thứ tự</span>
												<ul class="content-sort off">
													<li><a href="javascript:;" onclick="sortby('default')">Mặc định</a></li>
													<li><a href="javascript:;" onclick="sortby('alpha-asc')">A → Z</a></li>
													<li><a href="javascript:;" onclick="sortby('alpha-desc')">Z → A</a></li>
													<li><a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
													<li><a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
													<li><a href="javascript:;" onclick="sortby('created-desc')">Hàng mới nhất</a></li>
													<li><a href="javascript:;" onclick="sortby('created-asc')">Hàng cũ nhất</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<script>
						$('.toggle-sort').click(function () {
							if ($('.content-sort').hasClass('on')) {
								$('.content-sort').removeClass('on');
								$('.content-sort').addClass('off');
								$('.transparent-background').removeClass('fix');
							}
							else {
								$('.content-sort').removeClass('off');
								$('.content-sort').addClass('on');
								$('.transparent-background').addClass('fix');
							}
						});
						$('.transparent-background').click(function () {
							if ($(this).hasClass('fix')) {
								$(this).closet('.content-sort').removeClass('on');
								$(this).closet('.content-sort').addClass('off');
								$(this).removeClass('fix');
							}
						});
					</script>



					<section class="products-view products-view-grid collection_reponsive">
						<div class="row-small row">











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">





























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/ao-ba-lo-dong-phuc-grab-danh-cho-cho-meo"
												title="Áo đồng phục giao hàng Grab dành cho chó mèo - CutePets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/ao-dong-phuc-giao-hang-grab-danh-cho-cho-meo-cutepets4.jpg?v=1621274074000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/ao-dong-phuc-giao-hang-grab-danh-cho-cho-meo-cutepets4.jpg?v=1621274074000"
													alt="Áo đồng phục giao hàng Grab dành cho chó mèo - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-21622797" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="45627942">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/ao-ba-lo-dong-phuc-grab-danh-cho-cho-meo'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/ao-ba-lo-dong-phuc-grab-danh-cho-cho-meo"
															data-handle="ao-ba-lo-dong-phuc-grab-danh-cho-cho-meo"
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
												<h3 class="product-name product-name-hover"><a href="/ao-ba-lo-dong-phuc-grab-danh-cho-cho-meo"
														title="Áo đồng phục giao hàng Grab dành cho chó mèo - CutePets">Áo đồng phục giao hàng Grab
														dành cho chó mèo - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="21622797"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">60.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">




























































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												11%
											</span>







											<a class="image_link display_flex" href="/thuc-an-cho-lon-ganador-adult-10kg-vi-cuu-va-gao"
												title="Thức ăn chó lớn Ganador Adult 10Kg - Vị Cừu và Gạo">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/thuc-an-cho-lon-ganador-adult-tai-10kg-vi-cuu-va-gao.jpg?v=1621265866000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/thuc-an-cho-lon-ganador-adult-tai-10kg-vi-cuu-va-gao.jpg?v=1621265866000"
													alt="Thức ăn chó lớn Ganador Adult 10Kg - Vị Cừu và Gạo">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-21622445" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="45627188">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/thuc-an-cho-lon-ganador-adult-10kg-vi-cuu-va-gao"
															data-handle="thuc-an-cho-lon-ganador-adult-10kg-vi-cuu-va-gao"
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
														href="/thuc-an-cho-lon-ganador-adult-10kg-vi-cuu-va-gao"
														title="Thức ăn chó lớn Ganador Adult 10Kg - Vị Cừu và Gạo">Thức ăn chó lớn Ganador Adult
														10Kg - Vị Cừu và Gạo</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="21622445"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">425.000₫</span>

													<span class="price product-price-old">
														480.000₫
													</span>


												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">

































































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												14%
											</span>







											<a class="image_link display_flex" href="/gan-bo-say-tellme-75g-cho-cho-meo"
												title="Gan bò sấy Tellme 75g cho chó mèo - Cutepets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/gan-bo-say-tellme-75g-cho-cho-meo-cutepets1.jpg?v=1621262244000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/gan-bo-say-tellme-75g-cho-cho-meo-cutepets1.jpg?v=1621262244000"
													alt="Gan bò sấy Tellme 75g cho chó mèo - Cutepets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-21620634" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="45623899">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/gan-bo-say-tellme-75g-cho-cho-meo"
															data-handle="gan-bo-say-tellme-75g-cho-cho-meo"
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
												<h3 class="product-name product-name-hover"><a href="/gan-bo-say-tellme-75g-cho-cho-meo"
														title="Gan bò sấy Tellme 75g cho chó mèo - Cutepets">Gan bò sấy Tellme 75g cho chó mèo -
														Cutepets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="21620634"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">30.000₫</span>

													<span class="price product-price-old">
														35.000₫
													</span>


												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">































































































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												9%
											</span>







											<a class="image_link display_flex" href="/sua-tam-dac-tri-nam-ghe-alkin-dermatic-200ml"
												title="Sữa tắm Alkin Dermatic 200ml đặc trị ghẻ viên da vảy gầu có mủ - CutePets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/sua-tam-dac-tri-nam-ghe-alkin-dermatic-200ml-cutepets-2.jpg?v=1618211702000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/sua-tam-dac-tri-nam-ghe-alkin-dermatic-200ml-cutepets-2.jpg?v=1618211702000"
													alt="Sữa tắm Alkin Dermatic 200ml đặc trị ghẻ viên da vảy gầu có mủ - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-21218859" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="43915531">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/sua-tam-dac-tri-nam-ghe-alkin-dermatic-200ml"
															data-handle="sua-tam-dac-tri-nam-ghe-alkin-dermatic-200ml"
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
														href="/sua-tam-dac-tri-nam-ghe-alkin-dermatic-200ml"
														title="Sữa tắm Alkin Dermatic 200ml đặc trị ghẻ viên da vảy gầu có mủ - CutePets">Sữa tắm
														Alkin Dermatic 200ml đặc trị ghẻ viên da vảy gầu có mủ - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="21218859"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">200.000₫</span>

													<span class="price product-price-old">
														220.000₫
													</span>


												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">














































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/smart-heart-power-pack-puppy-20kg"
												title="Smart Heart Power Pack puppy 20kg phát triển cơ bắp dành cho cho con - CutePets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/smart-heart-power-pack-puppy-20kg.jpg?v=1612325911000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/smart-heart-power-pack-puppy-20kg.jpg?v=1612325911000"
													alt="Smart Heart Power Pack puppy 20kg phát triển cơ bắp dành cho cho con - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20557867" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="41430195">
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
													<span class="price product-price">1.100.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>















							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">






























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/luoc-cao-cap-show-teck-danh-bong-go-roi-long"
												title="Lược cao cấp Show Tech đánh bông gỡ rối lông chuyên dùng SPA - CutePets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/luoc-chai-long-show-teck-bong-long-go-roi-cao-cap-chuyen-dung-cho-spa-cutepets.jpg?v=1611716993000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/luoc-chai-long-show-teck-bong-long-go-roi-cao-cap-chuyen-dung-cho-spa-cutepets.jpg?v=1611716993000"
													alt="Lược cao cấp Show Tech đánh bông gỡ rối lông chuyên dùng SPA - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20542542" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="41403637">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/luoc-cao-cap-show-teck-danh-bong-go-roi-long'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/luoc-cao-cap-show-teck-danh-bong-go-roi-long"
															data-handle="luoc-cao-cap-show-teck-danh-bong-go-roi-long"
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
														href="/luoc-cao-cap-show-teck-danh-bong-go-roi-long"
														title="Lược cao cấp Show Tech đánh bông gỡ rối lông chuyên dùng SPA - CutePets">Lược cao cấp
														Show Tech đánh bông gỡ rối lông chuyên dùng SPA - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="20542542"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">320.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">

























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/ao-tet-cho-cho-meo"
												title="Áo tết cho chó mèo - CutePets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/ao-tet-meo-than-tai-cho-cho-meo2.jpg?v=1609431296000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/ao-tet-meo-than-tai-cho-cho-meo2.jpg?v=1609431296000"
													alt="Áo tết cho chó mèo - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20308955" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="40272754">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/ao-tet-cho-cho-meo'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/ao-tet-cho-cho-meo" data-handle="ao-tet-cho-cho-meo"
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
												<h3 class="product-name product-name-hover"><a href="/ao-tet-cho-cho-meo"
														title="Áo tết cho chó mèo - CutePets">Áo tết cho chó mèo - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="20308955"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">60.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">
































































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												33%
											</span>







											<a class="image_link display_flex" href="/thit-bo-vun-bo-uc-goi-500g"
												title="Thịt bò vụn - Bò Mỹ Gói 500g - Cutepets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/thit-bo-vun-bo-my-goi-500g-cutepets.jpg?v=1608698254000"
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
														title="Thịt bò vụn - Bò Mỹ Gói 500g - Cutepets">Thịt bò vụn - Bò Mỹ Gói 500g - Cutepets</a>
												</h3>

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









							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">


















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/giay-ve-sinh-viet-nhat-2-lop-khong-loi-bich-10-cuon"
												title="Giấy Vệ sinh Việt Nhật 2 lớp không lõi bịch 10 cuộn - CutePets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/giay-ve-sinh-viet-nhat-2-lop-khong-loi-bich-10-cuon-cutepets3.jpg?v=1608478966000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/giay-ve-sinh-viet-nhat-2-lop-khong-loi-bich-10-cuon-cutepets3.jpg?v=1608478966000"
													alt="Giấy Vệ sinh Việt Nhật 2 lớp không lõi bịch 10 cuộn - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20170977" enctype="multipart/form-data">
													<div>

														<!--<button disabled="disabled" class="btn-cart button_wh_40  left-to" title="Hết hàng"><i class="icon-settings icons"></i></button>-->


														<a title="Xem nhanh" href="/giay-ve-sinh-viet-nhat-2-lop-khong-loi-bich-10-cuon"
															data-handle="giay-ve-sinh-viet-nhat-2-lop-khong-loi-bich-10-cuon"
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
														href="/giay-ve-sinh-viet-nhat-2-lop-khong-loi-bich-10-cuon"
														title="Giấy Vệ sinh Việt Nhật 2 lớp không lõi bịch 10 cuộn - CutePets">Giấy Vệ sinh Việt
														Nhật 2 lớp không lõi bịch 10 cuộn - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="20170977"></div> <!-- Đánh Giá -->


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











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">



















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/dem-tron-long-min-018"
												title="Đệm tròn cao cấp lông mịn 2 lớp Dành cho chó mèo - Cutepets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/dem-tron-cao-cap-long-min-2-lop-018-danh-cho-cho-meo-cutepets6.jpg?v=1608483542000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/dem-tron-cao-cap-long-min-2-lop-018-danh-cho-cho-meo-cutepets6.jpg?v=1608483542000"
													alt="Đệm tròn cao cấp lông mịn 2 lớp Dành cho chó mèo - Cutepets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20170970" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="39741138">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/dem-tron-long-min-018" data-handle="dem-tron-long-min-018"
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
												<h3 class="product-name product-name-hover"><a href="/dem-tron-long-min-018"
														title="Đệm tròn cao cấp lông mịn 2 lớp Dành cho chó mèo - Cutepets">Đệm tròn cao cấp lông
														mịn 2 lớp Dành cho chó mèo - Cutepets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="20170970"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">160.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">



















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/giay-ve-sinh-ha-noi-3-lop-khong-loi-bich-1-7kg-10-cuon"
												title="Giấy vệ sinh Hà Nội 3 lớp không lõi bịch 1.7kg 10 cuộn - Cutepets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/giay-ve-sinh-ha-noi-3-lop-khong-loi-bich-1-7kg-10-cuon-cutepets2.jpg?v=1608385415000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/giay-ve-sinh-ha-noi-3-lop-khong-loi-bich-1-7kg-10-cuon-cutepets2.jpg?v=1608385415000"
													alt="Giấy vệ sinh Hà Nội 3 lớp không lõi bịch 1.7kg 10 cuộn - Cutepets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20170916" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="39740883">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/giay-ve-sinh-ha-noi-3-lop-khong-loi-bich-1-7kg-10-cuon"
															data-handle="giay-ve-sinh-ha-noi-3-lop-khong-loi-bich-1-7kg-10-cuon"
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
														href="/giay-ve-sinh-ha-noi-3-lop-khong-loi-bich-1-7kg-10-cuon"
														title="Giấy vệ sinh Hà Nội 3 lớp không lõi bịch 1.7kg 10 cuộn - Cutepets">Giấy vệ sinh Hà
														Nội 3 lớp không lõi bịch 1.7kg 10 cuộn - Cutepets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="20170916"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">65.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">






































































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												12%
											</span>







											<a class="image_link display_flex" href="/balo-phi-hanh-gia-trong-hinh-dau-meo"
												title="Balo phi hành gia trong hình Mặt mèo - CutePets">
												<img
													src="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/balo-phi-hanh-gia-trong-hinh-mat-meo-cutepets12.jpg?v=1608307745000"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/balo-phi-hanh-gia-trong-hinh-mat-meo-cutepets12.jpg?v=1608307745000"
													alt="Balo phi hành gia trong hình Mặt mèo - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20161044" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="39705021">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/balo-phi-hanh-gia-trong-hinh-dau-meo"
															data-handle="balo-phi-hanh-gia-trong-hinh-dau-meo"
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
												<h3 class="product-name product-name-hover"><a href="/balo-phi-hanh-gia-trong-hinh-dau-meo"
														title="Balo phi hành gia trong hình Mặt mèo - CutePets">Balo phi hành gia trong hình Mặt mèo
														- CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="20161044"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">265.000₫</span>

													<span class="price product-price-old">
														300.000₫
													</span>


												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">


































































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/dac-tri-tieu-chay-spectinomycin-5-10ml-dang-siro-ngot"
												title="Đặc trị tiêu chảy Spectinomycin 5% 10ml dạng siro ngọt - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/dac-tri-tieu-chay-spectinomycin-5-percentage-10ml-dang-siro-ngot-cutepets-4.jpg?v=1608038448000"
													alt="Đặc trị tiêu chảy Spectinomycin 5% 10ml dạng siro ngọt - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20062832" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="39524895">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/dac-tri-tieu-chay-spectinomycin-5-10ml-dang-siro-ngot"
															data-handle="dac-tri-tieu-chay-spectinomycin-5-10ml-dang-siro-ngot"
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
														href="/dac-tri-tieu-chay-spectinomycin-5-10ml-dang-siro-ngot"
														title="Đặc trị tiêu chảy Spectinomycin 5% 10ml dạng siro ngọt - CutePets">Đặc trị tiêu chảy
														Spectinomycin 5% 10ml dạng siro ngọt - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="20062832"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">10.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">













































































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex"
												href="/sua-tam-tri-nam-viem-da-dermcare-malaseb-100ml-cho-cho-meo"
												title="Sữa tắm trị nấm, viêm da DermCare Malaseb 100ml cho chó mèo - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/sua-tam-tri-nam-viem-da-dermcare-malaseb-100ml-cho-cho-meo-cutepets.jpg?v=1607746957000"
													alt="Sữa tắm trị nấm, viêm da DermCare Malaseb 100ml cho chó mèo - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-20022540" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="39426129">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/sua-tam-tri-nam-viem-da-dermcare-malaseb-100ml-cho-cho-meo'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/sua-tam-tri-nam-viem-da-dermcare-malaseb-100ml-cho-cho-meo"
															data-handle="sua-tam-tri-nam-viem-da-dermcare-malaseb-100ml-cho-cho-meo"
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
														href="/sua-tam-tri-nam-viem-da-dermcare-malaseb-100ml-cho-cho-meo"
														title="Sữa tắm trị nấm, viêm da DermCare Malaseb 100ml cho chó mèo - CutePets">Sữa tắm trị
														nấm, viêm da DermCare Malaseb 100ml cho chó mèo - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="20022540"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">250.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>









							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">


















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/dem-cham-bi-40x30cm"
												title="Đệm chấm bi 40x30cm dành cho thú cưng nhỏ - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/dem-cham-bi-40x30cm-danh-cho-thu-cung-nho-cutepets3.jpg?v=1607228300000"
													alt="Đệm chấm bi 40x30cm dành cho thú cưng nhỏ - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19960901" enctype="multipart/form-data">
													<div>

														<!--<button disabled="disabled" class="btn-cart button_wh_40  left-to" title="Hết hàng"><i class="icon-settings icons"></i></button>-->


														<a title="Xem nhanh" href="/dem-cham-bi-40x30cm" data-handle="dem-cham-bi-40x30cm"
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
												<h3 class="product-name product-name-hover"><a href="/dem-cham-bi-40x30cm"
														title="Đệm chấm bi 40x30cm dành cho thú cưng nhỏ - CutePets">Đệm chấm bi 40x30cm dành cho
														thú cưng nhỏ - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19960901"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">85.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>









							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">













































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/do-choi-xuong-vang-dai"
												title="Đồ chơi xương vàng dài chút chít dành cho chó - Cutepets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/do-choi-xuong-vang-dai-chut-chit-danh-cho-cho-cutepets.jpg?v=1607317006880"
													alt="Đồ chơi xương vàng dài chút chít dành cho chó - Cutepets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19899123" enctype="multipart/form-data">
													<div>

														<!--<button disabled="disabled" class="btn-cart button_wh_40  left-to" title="Hết hàng"><i class="icon-settings icons"></i></button>-->


														<a title="Xem nhanh" href="/do-choi-xuong-vang-dai" data-handle="do-choi-xuong-vang-dai"
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
												<h3 class="product-name "><a href="/do-choi-xuong-vang-dai"
														title="Đồ chơi xương vàng dài chút chít dành cho chó - Cutepets">Đồ chơi xương vàng dài chút
														chít dành cho chó - Cutepets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19899123"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">20.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>









							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">




























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/luoc-chai-long-rung-deshedding-tool-danh-cho-long-ngan"
												title="Lược chải lông rụng deShedding Tool dành cho lông ngắn - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/luoc-chai-long-rung-deshedding-tool-danh-cho-long-ngan2.jpg?v=1607222641000"
													alt="Lược chải lông rụng deShedding Tool dành cho lông ngắn - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19842604" enctype="multipart/form-data">
													<div>

														<!--<button disabled="disabled" class="btn-cart button_wh_40  left-to" title="Hết hàng"><i class="icon-settings icons"></i></button>-->


														<a title="Xem nhanh" href="/luoc-chai-long-rung-deshedding-tool-danh-cho-long-ngan"
															data-handle="luoc-chai-long-rung-deshedding-tool-danh-cho-long-ngan"
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
														href="/luoc-chai-long-rung-deshedding-tool-danh-cho-long-ngan"
														title="Lược chải lông rụng deShedding Tool dành cho lông ngắn - CutePets">Lược chải lông
														rụng deShedding Tool dành cho lông ngắn - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19842604"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">100.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">





























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/vong-chong-liem-dem-vai-bong-xau-ho-cho-cho-meo-nho"
												title="Vòng chống liếm đệm vải bông xấu hổ cho chó mèo nhỏ - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/vong-chong-liem-dem-vai-bong-xau-ho-cho-cho-meo-nho1.jpg?v=1607221882000"
													alt="Vòng chống liếm đệm vải bông xấu hổ cho chó mèo nhỏ - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19842107" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="38656661">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/vong-chong-liem-dem-vai-bong-xau-ho-cho-cho-meo-nho"
															data-handle="vong-chong-liem-dem-vai-bong-xau-ho-cho-cho-meo-nho"
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
														href="/vong-chong-liem-dem-vai-bong-xau-ho-cho-cho-meo-nho"
														title="Vòng chống liếm đệm vải bông xấu hổ cho chó mèo nhỏ - CutePets">Vòng chống liếm đệm
														vải bông xấu hổ cho chó mèo nhỏ - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19842107"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">65.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">

























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/ao-noel-vai-long"
												title="[HOT] Áo noel vải lông dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/ao-noel-vai-long-danh-cho-thu-cung-cutepets-2.jpg?v=1604154369000"
													alt="[HOT] Áo noel vải lông dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19586513" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="37739856">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/ao-noel-vai-long'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/ao-noel-vai-long" data-handle="ao-noel-vai-long"
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
												<h3 class="product-name product-name-hover"><a href="/ao-noel-vai-long"
														title="[HOT] Áo noel vải lông dành cho thú cưng - CutePets">[HOT] Áo noel vải lông dành cho
														thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19586513"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">99.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">




































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex"
												href="/tam-lot-san-cao-su-chong-lot-chan-lien-tam-kho-90-x-50cm"
												title="Thảm lót sàn cao su chống lọt chân liền tấm khổ 90 x 50cm - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/tam-lot-san-cao-su-chong-lot-chan-lien-tam-kho-90-x-50cm-cutepets2-2.jpg?v=1604136012000"
													alt="Thảm lót sàn cao su chống lọt chân liền tấm khổ 90 x 50cm - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19583848" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="37731732">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/tam-lot-san-cao-su-chong-lot-chan-lien-tam-kho-90-x-50cm"
															data-handle="tam-lot-san-cao-su-chong-lot-chan-lien-tam-kho-90-x-50cm"
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
														href="/tam-lot-san-cao-su-chong-lot-chan-lien-tam-kho-90-x-50cm"
														title="Thảm lót sàn cao su chống lọt chân liền tấm khổ 90 x 50cm - CutePets">Thảm lót sàn
														cao su chống lọt chân liền tấm khổ 90 x 50cm - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19583848"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">60.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">




















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/white-dogs-thuc-an-vi-cuu-cho-cho-long-trang-400g"
												title="Thức ăn cho chó lông trắng Superior Care Adult Thịt Cừu - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/thuc-an-cho-cho-long-trang-superior-care-adult-400g-vi-cuu-cutepets-3.jpg?v=1612327585000"
													alt="Thức ăn cho chó lông trắng Superior Care Adult Thịt Cừu - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19455933" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="37262883">
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











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">

























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/ao-thun-3-lo-co-mu-han-quoc-urban"
												title="Áo thun 3 lỗ có mũ Hàn Quốc Urban dành cho chó mèo - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/ao-thun-hinh-urban-hang-xuat-han-cutepets6.jpg?v=1603358974000"
													alt="Áo thun 3 lỗ có mũ Hàn Quốc Urban dành cho chó mèo - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19454325" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="37256264">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/ao-thun-3-lo-co-mu-han-quoc-urban'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/ao-thun-3-lo-co-mu-han-quoc-urban"
															data-handle="ao-thun-3-lo-co-mu-han-quoc-urban"
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
												<h3 class="product-name product-name-hover"><a href="/ao-thun-3-lo-co-mu-han-quoc-urban"
														title="Áo thun 3 lỗ có mũ Hàn Quốc Urban dành cho chó mèo - CutePets">Áo thun 3 lỗ có mũ Hàn
														Quốc Urban dành cho chó mèo - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19454325"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">55.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">

























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/ao-thun-3-lo-han-quoc-urban"
												title="Áo thun 3 lỗ hàn quốc Urban dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/ao-thun-hinh-urban-hang-xuat-han-cutepets1.jpg?v=1603359436000"
													alt="Áo thun 3 lỗ hàn quốc Urban dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19454235" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="37256104">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/ao-thun-3-lo-han-quoc-urban'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/ao-thun-3-lo-han-quoc-urban"
															data-handle="ao-thun-3-lo-han-quoc-urban"
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
												<h3 class="product-name product-name-hover"><a href="/ao-thun-3-lo-han-quoc-urban"
														title="Áo thun 3 lỗ hàn quốc Urban dành cho thú cưng - CutePets">Áo thun 3 lỗ hàn quốc Urban
														dành cho thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19454235"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">50.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">

























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/ao-thun-cao-co-han-quoc-urban"
												title="Áo thun cao cổ Hàn Quốc Urban Dành cho thú cưng - Cutepets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/ao-thun-cao-co-han-quoc-urban-3.jpg?v=1604137067000"
													alt="Áo thun cao cổ Hàn Quốc Urban Dành cho thú cưng - Cutepets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19453585" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="37254855">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/ao-thun-cao-co-han-quoc-urban'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/ao-thun-cao-co-han-quoc-urban"
															data-handle="ao-thun-cao-co-han-quoc-urban"
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
												<h3 class="product-name product-name-hover"><a href="/ao-thun-cao-co-han-quoc-urban"
														title="Áo thun cao cổ Hàn Quốc Urban Dành cho thú cưng - Cutepets">Áo thun cao cổ Hàn Quốc
														Urban Dành cho thú cưng - Cutepets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19453585"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">55.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">
















































































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												20%
											</span>







											<a class="image_link display_flex" href="/tay-giun-nuoc-kiwof-puppy-15ml-vi-ngot-danh-cho-cho"
												title="Siro Tẩy giun Kiwof Puppy 15ml vị ngọt dành cho chó - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/tay-giun-nuoc-kiwof-puppy-15ml-vi-ngot-danh-cho-cho-cutepets.jpg?v=1601305663000"
													alt="Siro Tẩy giun Kiwof Puppy 15ml vị ngọt dành cho chó - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19253031" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="36680316">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/tay-giun-nuoc-kiwof-puppy-15ml-vi-ngot-danh-cho-cho"
															data-handle="tay-giun-nuoc-kiwof-puppy-15ml-vi-ngot-danh-cho-cho"
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
														href="/tay-giun-nuoc-kiwof-puppy-15ml-vi-ngot-danh-cho-cho"
														title="Siro Tẩy giun Kiwof Puppy 15ml vị ngọt dành cho chó - CutePets">Siro Tẩy giun Kiwof
														Puppy 15ml vị ngọt dành cho chó - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19253031"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">60.000₫</span>

													<span class="price product-price-old">
														75.000₫
													</span>


												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">














































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/bang-dinh-cuon-dung-tai-neoplast-hang-thai"
												title="[1 Cuộn] Băng dính cuốn dựng tai Neoplast hàng Thái dành cho chó - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/bang-dinh-cuon-dung-tai-neoplast-hang-thai-cutepets7.jpg?v=1601031813000"
													alt="[1 Cuộn] Băng dính cuốn dựng tai Neoplast hàng Thái dành cho chó - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19238409" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="36634583">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/bang-dinh-cuon-dung-tai-neoplast-hang-thai"
															data-handle="bang-dinh-cuon-dung-tai-neoplast-hang-thai"
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
														href="/bang-dinh-cuon-dung-tai-neoplast-hang-thai"
														title="[1 Cuộn] Băng dính cuốn dựng tai Neoplast hàng Thái dành cho chó - CutePets">[1 Cuộn]
														Băng dính cuốn dựng tai Neoplast hàng Thái dành cho chó - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19238409"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">85.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">

































































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												10%
											</span>







											<a class="image_link display_flex" href="/xit-khu-mui-thu-cung-nano-silver-pet-deodorant-100ml"
												title="Xịt khử mùi thú cưng Nano Silver Pet Deodorant 100ml BeonCare - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/xit-khu-mui-thu-cung-nano-silver-pet-deodorant-100ml-cutepets2.jpg?v=1601033104000"
													alt="Xịt khử mùi thú cưng Nano Silver Pet Deodorant 100ml BeonCare - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19215359" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="36549110">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/xit-khu-mui-thu-cung-nano-silver-pet-deodorant-100ml"
															data-handle="xit-khu-mui-thu-cung-nano-silver-pet-deodorant-100ml"
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
														href="/xit-khu-mui-thu-cung-nano-silver-pet-deodorant-100ml"
														title="Xịt khử mùi thú cưng Nano Silver Pet Deodorant 100ml BeonCare - CutePets">Xịt khử mùi
														thú cưng Nano Silver Pet Deodorant 100ml BeonCare - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19215359"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">135.000₫</span>

													<span class="price product-price-old">
														150.000₫
													</span>


												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">
































































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												9%
											</span>







											<a class="image_link display_flex"
												href="/pho-mai-vien-cheddar-cheese-ball-100g-banh-thuong-bow-wow-cho-cho"
												title="Phô mai viên Cheddar Cheese Ball 100g Bánh thưởng Bow Wow cho chó - Cutepets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
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
														title="Phô mai viên Cheddar Cheese Ball 100g Bánh thưởng Bow Wow cho chó - Cutepets">Phô mai
														viên Cheddar Cheese Ball 100g Bánh thưởng Bow Wow cho chó - Cutepets</a></h3>

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









							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">













































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/may-cho-an-tu-dong-petkit-5-9l-dieu-khien-qua-app"
												title="Máy Cho Ăn Tự Động Petkit 5.9L Điều khiển qua APP dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/may-cho-an-tu-dong-petkit-5-9l-dieu-khien-qua-app-danh-cho-thu-cung-cutepets3.jpg?v=1599033595753"
													alt="Máy Cho Ăn Tự Động Petkit 5.9L Điều khiển qua APP dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19021366" enctype="multipart/form-data">
													<div>

														<!--<button disabled="disabled" class="btn-cart button_wh_40  left-to" title="Hết hàng"><i class="icon-settings icons"></i></button>-->


														<a title="Xem nhanh" href="/may-cho-an-tu-dong-petkit-5-9l-dieu-khien-qua-app"
															data-handle="may-cho-an-tu-dong-petkit-5-9l-dieu-khien-qua-app"
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
														href="/may-cho-an-tu-dong-petkit-5-9l-dieu-khien-qua-app"
														title="Máy Cho Ăn Tự Động Petkit 5.9L Điều khiển qua APP dành cho thú cưng - CutePets">Máy
														Cho Ăn Tự Động Petkit 5.9L Điều khiển qua APP dành cho thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19021366"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">4.300.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">



















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/may-loc-nuoc-petkit-eversweet-solo-1-85l"
												title="Máy lọc nước Petkit EverSweet Solo 1.85L dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/may-loc-nuoc-petkit-eversweet-solo-1-85l-danh-cho-thu-cung-cutepets5.jpg?v=1599032744000"
													alt="Máy lọc nước Petkit EverSweet Solo 1.85L dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19021340" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="35912414">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/may-loc-nuoc-petkit-eversweet-solo-1-85l"
															data-handle="may-loc-nuoc-petkit-eversweet-solo-1-85l"
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
												<h3 class="product-name product-name-hover"><a href="/may-loc-nuoc-petkit-eversweet-solo-1-85l"
														title="Máy lọc nước Petkit EverSweet Solo 1.85L dành cho thú cưng - CutePets">Máy lọc nước
														Petkit EverSweet Solo 1.85L dành cho thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19021340"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">715.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">






























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/balo-cao-cap-petkit-co-den-va-quat-thong-khi"
												title="Balo cao cấp PETKIT Cat Carrier Backpack có đèn và quạt thông khí dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/balo-cao-cap-petkit-co-den-va-quat-thong-khi-danh-cho-thu-cung-cutepets7.jpg?v=1599054210000"
													alt="Balo cao cấp PETKIT Cat Carrier Backpack có đèn và quạt thông khí dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-19021294" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="35912346">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/balo-cao-cap-petkit-co-den-va-quat-thong-khi'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/balo-cao-cap-petkit-co-den-va-quat-thong-khi"
															data-handle="balo-cao-cap-petkit-co-den-va-quat-thong-khi"
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
														href="/balo-cao-cap-petkit-co-den-va-quat-thong-khi"
														title="Balo cao cấp PETKIT Cat Carrier Backpack có đèn và quạt thông khí dành cho thú cưng - CutePets">Balo
														cao cấp PETKIT Cat Carrier Backpack có đèn và quạt thông khí dành cho thú cưng -
														CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="19021294"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">1.090.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">




















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/xuong-sua-de-bo-sung-canxi"
												title="Xương thưởng sữa dê Goat's milk formula bổ sung canxi dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/banh-thuong-goat-milk-formula-500g-danh-cho-cho-cutepets1.jpg?v=1598783593000"
													alt="Xương thưởng sữa dê Goat's milk formula bổ sung canxi dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18994837" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="35858032">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/xuong-sua-de-bo-sung-canxi'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/xuong-sua-de-bo-sung-canxi"
															data-handle="xuong-sua-de-bo-sung-canxi"
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
												<h3 class="product-name product-name-hover"><a href="/xuong-sua-de-bo-sung-canxi"
														title="Xương thưởng sữa dê Goat's milk formula bổ sung canxi dành cho thú cưng - CutePets">Xương
														thưởng sữa dê Goat's milk formula bổ sung canxi dành cho thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18994837"></div> <!-- Đánh Giá -->


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











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">














































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex"
												href="/bot-sat-trung-hanmid-50g-cloramin-t-danh-cho-thu-cung-cutepets"
												title="Bột sát trùng Hanmid 50g Cloramin-T Dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/bot-sat-trung-hanmid-50g-cloramin-t-danh-cho-thu-cung-cutepets2.jpg?v=1598155105000"
													alt="Bột sát trùng Hanmid 50g Cloramin-T Dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18887281" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="35470365">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/bot-sat-trung-hanmid-50g-cloramin-t-danh-cho-thu-cung-cutepets"
															data-handle="bot-sat-trung-hanmid-50g-cloramin-t-danh-cho-thu-cung-cutepets"
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
														href="/bot-sat-trung-hanmid-50g-cloramin-t-danh-cho-thu-cung-cutepets"
														title="Bột sát trùng Hanmid 50g Cloramin-T Dành cho thú cưng - CutePets">Bột sát trùng
														Hanmid 50g Cloramin-T Dành cho thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18887281"></div> <!-- Đánh Giá -->


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











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">




















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/kem-sup-smart-heart-creamy-dog-treats-15gx4"
												title="Kem súp Smart Heart Creamy Dog Treats 15gx4 dành cho chó - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/kem-sup-smart-heart-creamy-dog-treats-15gx4-danh-cho-cho-cutepets7.jpg?v=1595770724000"
													alt="Kem súp Smart Heart Creamy Dog Treats 15gx4 dành cho chó - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18675914" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="34536675">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/kem-sup-smart-heart-creamy-dog-treats-15gx4'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/kem-sup-smart-heart-creamy-dog-treats-15gx4"
															data-handle="kem-sup-smart-heart-creamy-dog-treats-15gx4"
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
														href="/kem-sup-smart-heart-creamy-dog-treats-15gx4"
														title="Kem súp Smart Heart Creamy Dog Treats 15gx4 dành cho chó - CutePets">Kem súp Smart
														Heart Creamy Dog Treats 15gx4 dành cho chó - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18675914"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">40.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>









							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">




























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/bong-gai-chut-chit-phat-sang-day-vo-7cm"
												title="Bóng Gai chút chít phát sáng  dày vỏ 7.5cm dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/bong-gai-chut-chit-phat-sang-day-vo-7-5cm-danh-cho-thu-cung-cutepets.jpg?v=1594719828637"
													alt="Bóng Gai chút chít phát sáng  dày vỏ 7.5cm dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18578375" enctype="multipart/form-data">
													<div>

														<!--<button disabled="disabled" class="btn-cart button_wh_40  left-to" title="Hết hàng"><i class="icon-settings icons"></i></button>-->


														<a title="Xem nhanh" href="/bong-gai-chut-chit-phat-sang-day-vo-7cm"
															data-handle="bong-gai-chut-chit-phat-sang-day-vo-7cm"
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
												<h3 class="product-name product-name-hover"><a href="/bong-gai-chut-chit-phat-sang-day-vo-7cm"
														title="Bóng Gai chút chít phát sáng  dày vỏ 7.5cm dành cho thú cưng - CutePets">Bóng Gai
														chút chít phát sáng dày vỏ 7.5cm dành cho thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18578375"></div> <!-- Đánh Giá -->


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









							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/xit-khu-mui-innopet-500ml"
												title="Xịt khử mùi InnoPet Deodorant Spray 500ml Dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/xit-khu-mui-innopet-deodorant-spray-500ml-danh-cho-thu-cung-cutepets3.jpg?v=1594020680533"
													alt="Xịt khử mùi InnoPet Deodorant Spray 500ml Dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18511707" enctype="multipart/form-data">
													<div>

														<!--<button disabled="disabled" class="btn-cart button_wh_40  left-to" title="Hết hàng"><i class="icon-settings icons"></i></button>-->


														<a title="Xem nhanh" href="/xit-khu-mui-innopet-500ml"
															data-handle="xit-khu-mui-innopet-500ml" class="button_wh_40 btn_view right-to quick-view">
															<i class="fa fa-eye"></i>
															<span class="style-tooltip">Xem nhanh</span>
														</a>



													</div>
												</form>
											</div>
										</div>
										<div class="product-info effect a-left">

											<div class="info_hhh">
												<h3 class="product-name product-name-hover"><a href="/xit-khu-mui-innopet-500ml"
														title="Xịt khử mùi InnoPet Deodorant Spray 500ml Dành cho thú cưng - CutePets">Xịt khử mùi
														InnoPet Deodorant Spray 500ml Dành cho thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18511707"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">90.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">

























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/sua-tam-huong-hoa-joyce-dolls"
												title="Sữa tắm hương hoa Joyce&amp;dolls Mẫu cũ Dành cho thú cưng - Cutepets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/sua-tam-huong-hoa-cho-cho-meo-joyce-dolls-4l-cutepets.jpg?v=1592982182000"
													alt="Sữa tắm hương hoa Joyce&amp;dolls Mẫu cũ Dành cho thú cưng - Cutepets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18340572" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="33707760">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/sua-tam-huong-hoa-joyce-dolls'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/sua-tam-huong-hoa-joyce-dolls"
															data-handle="sua-tam-huong-hoa-joyce-dolls"
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
												<h3 class="product-name product-name-hover"><a href="/sua-tam-huong-hoa-joyce-dolls"
														title="Sữa tắm hương hoa Joyce&amp;dolls Mẫu cũ Dành cho thú cưng - Cutepets">Sữa tắm hương
														hoa Joyce&amp;dolls Mẫu cũ Dành cho thú cưng - Cutepets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18340572"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">180.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>









							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">


















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/banh-thuong-palmer-quy-bo-tron-100g"
												title="Bánh thưởng PALMER 100g quy bơ tròn dành cho chó - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
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
														title="Bánh thưởng PALMER 100g quy bơ tròn dành cho chó - CutePets">Bánh thưởng PALMER 100g
														quy bơ tròn dành cho chó - CutePets</a></h3>

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













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">



































































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/banh-thuong-daisy"
												title="Bánh thưởng Daisy and Buddy 100g cho chó - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/banh-thuong-daisy-and-buddy-100g-cho-cho5.jpg?v=1592834679000"
													alt="Bánh thưởng Daisy and Buddy 100g cho chó - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18324681" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="33639830">
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
														title="Bánh thưởng Daisy and Buddy 100g cho chó - CutePets">Bánh thưởng Daisy and Buddy 100g
														cho chó - CutePets</a></h3>

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











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">









































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/banh-thuong-cho-cho-yaho-100g-banh-quy-vi-sua-va-bo"
												title="Bánh thưởng cho chó Yaho 100g Bánh quy vị sữa - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/banh-thuong-cho-cho-yaho-100g-banh-quy-vi-sua-cutepets2.jpg?v=1592025935000"
													alt="Bánh thưởng cho chó Yaho 100g Bánh quy vị sữa - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18250811" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="33449530">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/banh-thuong-cho-cho-yaho-100g-banh-quy-vi-sua-va-bo"
															data-handle="banh-thuong-cho-cho-yaho-100g-banh-quy-vi-sua-va-bo"
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
														href="/banh-thuong-cho-cho-yaho-100g-banh-quy-vi-sua-va-bo"
														title="Bánh thưởng cho chó Yaho 100g Bánh quy vị sữa - CutePets">Bánh thưởng cho chó Yaho
														100g Bánh quy vị sữa - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18250811"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">40.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/banh-thuong-cho-cho-yaho-200g-vi-bo"
												title="Bánh thưởng cho chó Yaho 200g - Cutepets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/banh-thuong-cho-cho-yaho-200g-vi-thit-bo-cutepets-4.jpg?v=1592026026000"
													alt="Bánh thưởng cho chó Yaho 200g - Cutepets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18250795" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="33449500">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/banh-thuong-cho-cho-yaho-200g-vi-bo'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/banh-thuong-cho-cho-yaho-200g-vi-bo"
															data-handle="banh-thuong-cho-cho-yaho-200g-vi-bo"
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
												<h3 class="product-name product-name-hover"><a href="/banh-thuong-cho-cho-yaho-200g-vi-bo"
														title="Bánh thưởng cho chó Yaho 200g - Cutepets">Bánh thưởng cho chó Yaho 200g -
														Cutepets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18250795"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">65.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">








































































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/the-ten-thu-cung-pet-tab-khac-chu-theo-yeu-cau"
												title="Thẻ tên thú cưng Pet Name Tag khắc chữ theo yêu cầu - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/the-ten-thu-cung-pet-name-tag-khac-chu-theo-yeu-cau-cutepets.jpg?v=1591765041567"
													alt="Thẻ tên thú cưng Pet Name Tag khắc chữ theo yêu cầu - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18215555" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="33344349">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/the-ten-thu-cung-pet-tab-khac-chu-theo-yeu-cau'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/the-ten-thu-cung-pet-tab-khac-chu-theo-yeu-cau"
															data-handle="the-ten-thu-cung-pet-tab-khac-chu-theo-yeu-cau"
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
														href="/the-ten-thu-cung-pet-tab-khac-chu-theo-yeu-cau"
														title="Thẻ tên thú cưng Pet Name Tag khắc chữ theo yêu cầu - CutePets">Thẻ tên thú cưng Pet
														Name Tag khắc chữ theo yêu cầu - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18215555"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">70.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">

























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/ao-luoi-ba-lo-in-hinh-cute"
												title="Áo lưới mùa hè in hình cute dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/ao-luoi-mua-he-in-hinh-cute-danh-cho-thu-cung-cutepets-5.jpg?v=1591193455000"
													alt="Áo lưới mùa hè in hình cute dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18156928" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="33190845">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/ao-luoi-ba-lo-in-hinh-cute'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/ao-luoi-ba-lo-in-hinh-cute"
															data-handle="ao-luoi-ba-lo-in-hinh-cute"
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
												<h3 class="product-name product-name-hover"><a href="/ao-luoi-ba-lo-in-hinh-cute"
														title="Áo lưới mùa hè in hình cute dành cho thú cưng - CutePets">Áo lưới mùa hè in hình cute
														dành cho thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18156928"></div> <!-- Đánh Giá -->


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













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">













































































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/vong-co-cao-su-gan-chuong"
												title="Vòng cổ cao su gắn chuông dành cho chó mèo - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/vong-co-cao-su-gan-chuong-danh-cho-cho-meo-cutepets.jpg?v=1591193271000"
													alt="Vòng cổ cao su gắn chuông dành cho chó mèo - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18156506" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="33190201">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/vong-co-cao-su-gan-chuong'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/vong-co-cao-su-gan-chuong"
															data-handle="vong-co-cao-su-gan-chuong" class="button_wh_40 btn_view right-to quick-view">
															<i class="fa fa-eye"></i>
															<span class="style-tooltip">Xem nhanh</span>
														</a>



													</div>
												</form>
											</div>
										</div>
										<div class="product-info effect a-left">

											<div class="info_hhh">
												<h3 class="product-name product-name-hover"><a href="/vong-co-cao-su-gan-chuong"
														title="Vòng cổ cao su gắn chuông dành cho chó mèo - CutePets">Vòng cổ cao su gắn chuông dành
														cho chó mèo - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18156506"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">20.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">








































































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/thuoc-tay-giun-tim-heartworm-shield-s-cho-cho-meo"
												title="Viên nén trị giun tim Heartworm Shield S cho chó mèo - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/thuoc-tay-giun-tim-heartworm-shield-s-cho-cho-meo-cutepets5.jpg?v=1590504986000"
													alt="Viên nén trị giun tim Heartworm Shield S cho chó mèo - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18087913" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="33045830">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/thuoc-tay-giun-tim-heartworm-shield-s-cho-cho-meo'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/thuoc-tay-giun-tim-heartworm-shield-s-cho-cho-meo"
															data-handle="thuoc-tay-giun-tim-heartworm-shield-s-cho-cho-meo"
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
														href="/thuoc-tay-giun-tim-heartworm-shield-s-cho-cho-meo"
														title="Viên nén trị giun tim Heartworm Shield S cho chó mèo - CutePets">Viên nén trị giun
														tim Heartworm Shield S cho chó mèo - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18087913"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">8.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>













							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">




























































































									<div class="product-box">
										<div class="product-thumbnail">


											<span class="sale-off">-
												17%
											</span>







											<a class="image_link display_flex" href="/day-dat-doi-2-dau-dat-2-cun"
												title="Dây dắt đôi 1cm 2 đầu dắt dành cho 2 cún - Cutepets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/day-dat-doi-1cm-2-dau-dat-danh-cho-2-cun-cutepets.jpg?v=1590481001000"
													alt="Dây dắt đôi 1cm 2 đầu dắt dành cho 2 cún - Cutepets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18080856" enctype="multipart/form-data">
													<div>

														<input type="hidden" name="variantId" value="33034438">
														<button class="button_wh_40 btn-cart left-to add_to_cart" title="Đặt mua">
															Mua hàng
														</button>


														<a title="Xem nhanh" href="/day-dat-doi-2-dau-dat-2-cun"
															data-handle="day-dat-doi-2-dau-dat-2-cun"
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
												<h3 class="product-name product-name-hover"><a href="/day-dat-doi-2-dau-dat-2-cun"
														title="Dây dắt đôi 1cm 2 đầu dắt dành cho 2 cún - Cutepets">Dây dắt đôi 1cm 2 đầu dắt dành
														cho 2 cún - Cutepets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18080856"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">100.000₫</span>

													<span class="price product-price-old">
														120.000₫
													</span>


												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">





























































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/tui-van-chuyen-icon-mat-cam-xuc"
												title="Túi vận chuyển icon mặt cảm xúc dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/tui-van-chuyen-icon-mat-cam-xuc-danh-cho-thu-cung-cutepets3.jpg?v=1590476396307"
													alt="Túi vận chuyển icon mặt cảm xúc dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18080821" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="33034393">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/tui-van-chuyen-icon-mat-cam-xuc'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/tui-van-chuyen-icon-mat-cam-xuc"
															data-handle="tui-van-chuyen-icon-mat-cam-xuc"
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
												<h3 class="product-name product-name-hover"><a href="/tui-van-chuyen-icon-mat-cam-xuc"
														title="Túi vận chuyển icon mặt cảm xúc dành cho thú cưng - CutePets">Túi vận chuyển icon mặt
														cảm xúc dành cho thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18080821"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">120.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>











							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
								<div class="product-col">




















































































									<div class="product-box">
										<div class="product-thumbnail">






											<a class="image_link display_flex" href="/nhuom-long-petesthe-vivid-color-140g"
												title="Nhuộm lông cao cấp Petesthe Vivid Color 140g Dành cho thú cưng - CutePets">
												<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/product-1.png?1620452211114"
													data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/307/433/products/nhuom-long-petesthe-vivid-color-140g-danh-cho-thu-cung-cutepets3.jpg?v=1590468156000"
													alt="Nhuộm lông cao cấp Petesthe Vivid Color 140g Dành cho thú cưng - CutePets">
											</a>


											<div class="product-action-grid clearfix">
												<form action="/cart/add" method="post" class="variants form-nut-grid"
													data-id="product-actions-18079106" enctype="multipart/form-data">
													<div>

														<input class="hidden" type="hidden" name="variantId" value="33028611">
														<button class="btn-cart button_wh_40 left-to" title="Tùy chọn" type="button"
															onclick="window.location.href='/nhuom-long-petesthe-vivid-color-140g'">
															Tùy chọn
														</button>


														<a title="Xem nhanh" href="/nhuom-long-petesthe-vivid-color-140g"
															data-handle="nhuom-long-petesthe-vivid-color-140g"
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
												<h3 class="product-name product-name-hover"><a href="/nhuom-long-petesthe-vivid-color-140g"
														title="Nhuộm lông cao cấp Petesthe Vivid Color 140g Dành cho thú cưng - CutePets">Nhuộm lông
														cao cấp Petesthe Vivid Color 140g Dành cho thú cưng - CutePets</a></h3>

												<div class="bizweb-product-reviews-badge" data-id="18079106"></div> <!-- Đánh Giá -->


												<div class="reviews-product-grid">
												</div>


												<div class="price-box clearfix">
													<span class="price product-price">400.000₫</span>
												</div>



											</div>

										</div>

									</div>
								</div>
							</div>

						</div>
						<div class="text-right">

							<nav class="clearfix">
								<ul class="pagination clearfix">

									<li class="page-item disabled"><a class="page-link" href="#">«</a></li>





									<li class="active page-item disabled"><a class="page-link" href="javascript:;">1</a></li>




									<li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;">2</a></li>



									<li class="page-item"><a class="page-link" onclick="doSearch(3)" href="javascript:;">3</a></li>




									<li class="page-item"><a class="page-link" href="javascript:;">...</a></li>




									<li class="page-item"><a class="page-link" onclick="doSearch(10)" href="javascript:;">10</a></li>




									<li class="page-item hidden-xs"><a class="page-link" onclick="doSearch(2)" href="javascript:;"><i
												class="fa fa-angle-right" aria-hidden="true"></i>
										</a></li>

								</ul>
							</nav>

						</div>
					</section>


				</div>
			</section>

			<div class="section-main-sidebar padding-small col-lg-3 col-md-3 margin-bottom-50 pull-left">
				<div class="image-category">
					<img class="img-responsive" alt="Dành Cho Chó"
						src="https://bizweb.dktcdn.net/100/307/433/collections/cho.png?v=1524757590190">
				</div>
				<aside class="dqdt-sidebar sidebar left-content">

					<aside class="aside-item sidebar-category collection-category">
						<div class="aside-title">
							<h2 class="title-head margin-top-0"><span>Danh mục sản phẩm</span></h2>
						</div>
						<div class="aside-content">
							<nav class="nav-category navbar-toggleable-md">
								<ul class="nav navbar-pills">
































































									<li class="nav-item lv1">
										<a class="nav-link" href="/san-pham-moi">Sản Phẩm Mới</a>

































































									</li>
									<li class="nav-item lv1">
										<a href="/danh-cho-cho" class="nav-link">Dành cho chó </a>
										<i class="fa fa-angle-down"></i>
										<ul class="dropdown-menu dropdown-menulv2">












































											<li class="dropdown-submenu nav-item lv2">
												<a class="nav-link" href="/thuc-an-danh-cho-cho">Thức Ăn Chó </a>
												<i class="fa fa-angle-down"></i>
												<ul class="dropdown-menu dropdown-menulv3">












































													<li class="nav-item lv3">
														<a class="nav-link" href="/thuc-an-cho-con">Thức ăn chó con</a>
													</li>













































													<li class="nav-item lv3">
														<a class="nav-link" href="/thuc-an-cho-lon">Thức ăn chó lớn</a>
													</li>













































													<li class="nav-item lv3">
														<a class="nav-link" href="/xuong-banh-thuong-do-an-vat">Xương gặm</a>
													</li>













































													<li class="nav-item lv3">
														<a class="nav-link" href="/banh-thuong-an-vat">Bánh thưởng, Ăn vặt</a>
													</li>


												</ul>
											</li>













































											<li class="dropdown-submenu nav-item lv2">
												<a class="nav-link" href="/bo-xung-dinh-duong">Bổ xung dinh dưỡng </a>
												<i class="fa fa-angle-down"></i>
												<ul class="dropdown-menu dropdown-menulv3">















































													<li class="nav-item lv3">
														<a class="nav-link" href="/bo-xung-canxi">Canxi</a>
													</li>
















































													<li class="nav-item lv3">
														<a class="nav-link" href="/bo-xung-vitamin">Vitamin</a>
													</li>
















































													<li class="nav-item lv3">
														<a class="nav-link" href="/khoang-chat">Khoáng chất</a>
													</li>
















































													<li class="nav-item lv3">
														<a class="nav-link" href="/duong-muot-long">Dưỡng Lông</a>
													</li>


												</ul>
											</li>













































											<li class="dropdown-submenu nav-item lv2">
												<a class="nav-link" href="/do-choi-huan-luyen-cho-cho">Đồ chơi, Huấn luyện </a>
												<i class="fa fa-angle-down"></i>
												<ul class="dropdown-menu dropdown-menulv3">












































													<li class="nav-item lv3">
														<a class="nav-link" href="/do-choi-huan-luyen-cho-cho">Đồ chơi cho chó</a>
													</li>













































													<li class="nav-item lv3">
														<a class="nav-link" href="/do-choi-tap-can">Đồ chơi tập cắn (Bền)</a>
													</li>













































													<li class="nav-item lv3">
														<a class="nav-link" href="/do-huan-luyen">Đồ huấn luyện</a>
													</li>


												</ul>
											</li>
















































											<li class="dropdown-submenu nav-item lv2">
												<a class="nav-link" href="/do-dung-cho-cho-1">Đồ dùng cho chó </a>
												<i class="fa fa-angle-down"></i>
												<ul class="dropdown-menu dropdown-menulv3">















































													<li class="nav-item lv3">
														<a class="nav-link" href="/phu-kien-cho-cho">Phụ kiện cho chó</a>
													</li>













































													<li class="nav-item lv3">
														<a class="nav-link" href="/do-dung-cho-cho">Đồ sinh hoạt</a>
													</li>













































													<li class="nav-item lv3">
														<a class="nav-link" href="/do-dung-cho-cho">Đồ vệ sinh</a>
													</li>


												</ul>
											</li>



										</ul>
									</li>

































































									<li class="nav-item lv1">
										<a href="/danh-cho-meo" class="nav-link">Dành cho mèo </a>
										<i class="fa fa-angle-down"></i>
										<ul class="dropdown-menu dropdown-menulv2">












































											<li class="dropdown-submenu nav-item lv2">
												<a class="nav-link" href="/thuc-an-cho-meo">Thức ăn mèo </a>
												<i class="fa fa-angle-down"></i>
												<ul class="dropdown-menu dropdown-menulv3">















































													<li class="nav-item lv3">
														<a class="nav-link" href="/do-an-meo-con">Thức ăn mèo con</a>
													</li>
















































													<li class="nav-item lv3">
														<a class="nav-link" href="/do-an-meo-lon">Thức ăn mèo lớn</a>
													</li>
















































													<li class="nav-item lv3">
														<a class="nav-link" href="/banh-thuong-co-catnip-cho-meo">Bánh thưởng, cỏ mèo</a>
													</li>


												</ul>
											</li>













































											<li class="dropdown-submenu nav-item lv2">
												<a class="nav-link" href="/do-choi-cho-meo">Đồ chơi mèo </a>
												<i class="fa fa-angle-down"></i>
												<ul class="dropdown-menu dropdown-menulv3">












































													<li class="nav-item lv3">
														<a class="nav-link" href="/do-choi-cho-meo">Bóng, chuột, cần cầu</a>
													</li>
















































													<li class="nav-item lv3">
														<a class="nav-link" href="/tru-cao-mong-cat-tree">Trụ cào móng, cat tree</a>
													</li>


												</ul>
											</li>
















































											<li class="dropdown-submenu nav-item lv2">
												<a class="nav-link" href="/do-dung-cho-meo">Đồ dùng cho mèo </a>
												<i class="fa fa-angle-down"></i>
												<ul class="dropdown-menu dropdown-menulv3">












































													<li class="nav-item lv3">
														<a class="nav-link" href="/cat-cho-meo">Cát vệ sinh</a>
													</li>
















































													<li class="nav-item lv3">
														<a class="nav-link" href="/khay-nha-ve-sinh-meo">Khay, xẻng, nhà vệ sinh</a>
													</li>
















































													<li class="nav-item lv3">
														<a class="nav-link" href="/do-sinh-hoat-cho-meo">Đồ sinh hoạt cho mèo</a>
													</li>


												</ul>
											</li>



										</ul>
									</li>

































































									<li class="nav-item lv1">
										<a href="/phu-kien-day-dat-vong-co" class="nav-link">Dây dắt, phụ kiện </a>
										<i class="fa fa-angle-down"></i>
										<ul class="dropdown-menu dropdown-menulv2">















































											<li class="nav-item lv2">
												<a class="nav-link" href="/day-dat-cho-cho-meo">Dây dắt</a>
											</li>
















































											<li class="nav-item lv2">
												<a class="nav-link" href="/vong-co-cho-cho-meo">Vòng cổ</a>
											</li>
















































											<li class="nav-item lv2">
												<a class="nav-link" href="/phu-kien-khac-cho-cho-meo">Phụ kiện khác</a>
											</li>



										</ul>
									</li>

































































									<li class="nav-item lv1">
										<a class="nav-link" href="/quan-ao-danh-cho-cho-meo">Quần áo</a>

































































									</li>
									<li class="nav-item lv1">
										<a class="nav-link" href="/bat-an-uong-binh-sua">Bát bình chứa đựng</a>

































































									</li>
									<li class="nav-item lv1">
										<a class="nav-link" href="/chuong-long-quay-nuoi">Đồ vận chuyển, nuôi nhốt</a>

































































									</li>
									<li class="nav-item lv1">
										<a class="nav-link" href="/sua-tam-cho-meo">Sữa tắm, Khử mùi</a>

































































									</li>
									<li class="nav-item lv1">
										<a href="/ho-tro-cham-soc" class="nav-link">Hỗ trợ chăm sóc </a>
										<i class="fa fa-angle-down"></i>
										<ul class="dropdown-menu dropdown-menulv2">


										</ul>
									</li>

































































									<li class="nav-item lv1">
										<a href="/bo-xung-dinh-duong" class="nav-link">Bổ xung dinh dưỡng </a>
										<i class="fa fa-angle-down"></i>
										<ul class="dropdown-menu dropdown-menulv2">















































											<li class="nav-item lv2">
												<a class="nav-link" href="/bo-xung-canxi">Canxi</a>
											</li>
















































											<li class="nav-item lv2">
												<a class="nav-link" href="/bo-xung-vitamin">Vitamin</a>
											</li>
















































											<li class="nav-item lv2">
												<a class="nav-link" href="/khoang-chat">Khoáng chất</a>
											</li>
















































											<li class="nav-item lv2">
												<a class="nav-link" href="/duong-muot-long">Dưỡng Lông</a>
											</li>



										</ul>
									</li>

































































									<li class="nav-item lv1">
										<a href="/thuoc-thu-y" class="nav-link">Thú Y </a>
										<i class="fa fa-angle-down"></i>
										<ul class="dropdown-menu dropdown-menulv2">















































											<li class="nav-item lv2">
												<a class="nav-link" href="/thuoc-tri-ve-ran-bo-tret">Thuốc trị ve bọ</a>
											</li>
















































											<li class="nav-item lv2">
												<a class="nav-link" href="/tri-nam-ghe-vien-da">Thuốc trị nấm ghẻ</a>
											</li>













































											<li class="nav-item lv2">
												<a class="nav-link" href="/chua-benh-duong-ruot">Thuốc chữa bện đường ruột</a>
											</li>













































											<li class="nav-item lv2">
												<a class="nav-link" href="/thuoc-thu-y">Thuốc thú y khác</a>
											</li>



										</ul>
									</li>


								</ul>
							</nav>
						</div>
					</aside>


					<script src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/search_filter.js?1620452211114"
						type="text/javascript"></script>
					<div class="aside-filter">
						<div class="filter-container">
							<div class="filter-container__selected-filter" style="display: none;">
								<div class="filter-container__selected-filter-header clearfix">
									<span class="filter-container__selected-filter-header-title"><i
											class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
									<a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết
										<i class="fa fa-angle-right"></i></a>
								</div>
								<div class="filter-container__selected-filter-list">
									<ul></ul>
								</div>
							</div>
						</div>


						<aside class="aside-item filter-price">
							<div class="aside-title">
								<h2 class="title-head title_price margin-top-0"><span>Giá sản phẩm</span></h2>
							</div>
							<div class="aside-content filter-group">
								<ul>





									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-duoi-50-000d-100-000d">
												<input type="checkbox" id="filter-duoi-50-000d-100-000d" onchange="toggleFilter(this);"
													data-group="Khoảng giá" data-field="price_min" data-text="Dưới 50.000đ:100.000đ"
													value="(<50000:100000)" data-operator="OR">
												<i class="fa"></i>
												Giá dưới 50.000đ:100.000đ
											</label>
										</span>
									</li>






									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-50-000d-100-000d-200-000d">
												<input type="checkbox" id="filter-50-000d-100-000d-200-000d" onchange="toggleFilter(this)"
													data-group="Khoảng giá" data-field="price_min" data-text="50.000đ:100.000đ - 200.000đ"
													value="(>=50000:100000 AND <200000)" data-operator="OR">
												<i class="fa"></i>
												50.000đ:100.000đ - 200.000đ
											</label>
										</span>
									</li>






									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-200-000d-300-000d">
												<input type="checkbox" id="filter-200-000d-300-000d" onchange="toggleFilter(this)"
													data-group="Khoảng giá" data-field="price_min" data-text="200.000đ - 300.000đ"
													value="(>=200000 AND <300000)" data-operator="OR">
												<i class="fa"></i>
												200.000đ - 300.000đ
											</label>
										</span>
									</li>






									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-300-000d-500-000d">
												<input type="checkbox" id="filter-300-000d-500-000d" onchange="toggleFilter(this)"
													data-group="Khoảng giá" data-field="price_min" data-text="300.000đ - 500.000đ"
													value="(>=300000 AND <500000)" data-operator="OR">
												<i class="fa"></i>
												300.000đ - 500.000đ
											</label>
										</span>
									</li>






									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-500-000d-1-000-000d">
												<input type="checkbox" id="filter-500-000d-1-000-000d" onchange="toggleFilter(this)"
													data-group="Khoảng giá" data-field="price_min" data-text="500.000đ - 1.000.000đ"
													value="(>500000 AND <1000000)" data-operator="OR">
												<i class="fa"></i>
												500.000đ - 1.000.000đ
											</label>
										</span>
									</li>
									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-tren1-000-000d">
												<input type="checkbox" id="filter-tren1-000-000d" onchange="toggleFilter(this)"
													data-group="Khoảng giá" data-field="price_min" data-text="Trên 1.000.000đ" value="(>1000000)"
													data-operator="OR">
												<i class="fa"></i>
												Giá trên 1.000.000đ
											</label>
										</span>
									</li>



								</ul>
							</div>
						</aside>



						<aside class="aside-item filter-type">
							<div class="aside-title">
								<h2 class="title-head margin-top-0"><span>Loại</span></h2>
							</div>
							<div class="aside-content filter-group">
								<ul>


									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-ao">
												<input type="checkbox" id="filter-ao" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Áo" value="(Áo)" data-operator="OR">
												<i class="fa"></i>
												Áo
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-ao-vay">
												<input type="checkbox" id="filter-ao-vay" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Áo,váy" value="(Áo,váy)" data-operator="OR">
												<i class="fa"></i>
												Áo,váy
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-banh-thuong-cho-meo">
												<input type="checkbox" id="filter-banh-thuong-cho-meo" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Bánh Thưởng cho mèo"
													value="(Bánh Thưởng cho mèo)" data-operator="OR">
												<i class="fa"></i>
												Bánh Thưởng cho mèo
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-bat-an-uong">
												<input type="checkbox" id="filter-bat-an-uong" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Bát Ăn Uống" value="(Bát Ăn Uống)" data-operator="OR">
												<i class="fa"></i>
												Bát Ăn Uống
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-bo-xung-dinh-duong">
												<input type="checkbox" id="filter-bo-xung-dinh-duong" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Bổ xung Dinh Dưỡng"
													value="(Bổ xung Dinh Dưỡng)" data-operator="OR">
												<i class="fa"></i>
												Bổ xung Dinh Dưỡng
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-day-dat-vong-co-chuong">
												<input type="checkbox" id="filter-day-dat-vong-co-chuong" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Dây dắt, vòng cổ, chuông"
													value="(Dây dắt, vòng cổ, chuông)" data-operator="OR">
												<i class="fa"></i>
												Dây dắt, vòng cổ, chuông
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-dem-nha-thu-cung">
												<input type="checkbox" id="filter-dem-nha-thu-cung" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Đệm, nhà thú cưng"
													value="(Đệm, nhà thú cưng)" data-operator="OR">
												<i class="fa"></i>
												Đệm, nhà thú cưng
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-dich-vu">
												<input type="checkbox" id="filter-dich-vu" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Dịch Vụ" value="(Dịch Vụ)" data-operator="OR">
												<i class="fa"></i>
												Dịch Vụ
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-do-choi">
												<input type="checkbox" id="filter-do-choi" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Đồ Chơi" value="(Đồ Chơi)" data-operator="OR">
												<i class="fa"></i>
												Đồ Chơi
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-do-choi-cho-cho">
												<input type="checkbox" id="filter-do-choi-cho-cho" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Đồ Chơi cho chó"
													value="(Đồ Chơi cho chó)" data-operator="OR">
												<i class="fa"></i>
												Đồ Chơi cho chó
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-do-choi-cho-meo">
												<input type="checkbox" id="filter-do-choi-cho-meo" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Đồ chơi cho mèo"
													value="(Đồ chơi cho mèo)" data-operator="OR">
												<i class="fa"></i>
												Đồ chơi cho mèo
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-ho-tro-cham-soc">
												<input type="checkbox" id="filter-ho-tro-cham-soc" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Hỗ Trợ Chăm Sóc"
													value="(Hỗ Trợ Chăm Sóc)" data-operator="OR">
												<i class="fa"></i>
												Hỗ Trợ Chăm Sóc
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-huan-luyen">
												<input type="checkbox" id="filter-huan-luyen" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Huấn luyện" value="(Huấn luyện)" data-operator="OR">
												<i class="fa"></i>
												Huấn luyện
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-khu-mui">
												<input type="checkbox" id="filter-khu-mui" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Khử mùi" value="(Khử mùi)" data-operator="OR">
												<i class="fa"></i>
												Khử mùi
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-long-tui-van-chuyen">
												<input type="checkbox" id="filter-long-tui-van-chuyen" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Lồng, túi vận chuyển"
													value="(Lồng, túi vận chuyển)" data-operator="OR">
												<i class="fa"></i>
												Lồng, túi vận chuyển
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-pate-sup-cho-cho">
												<input type="checkbox" id="filter-pate-sup-cho-cho" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Pate,súp cho chó"
													value="(Pate,súp cho chó)" data-operator="OR">
												<i class="fa"></i>
												Pate,súp cho chó
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-phu-kien">
												<input type="checkbox" id="filter-phu-kien" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Phụ kiện" value="(Phụ kiện)" data-operator="OR">
												<i class="fa"></i>
												Phụ kiện
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-sua-tam">
												<input type="checkbox" id="filter-sua-tam" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Sữa Tắm" value="(Sữa Tắm)" data-operator="OR">
												<i class="fa"></i>
												Sữa Tắm
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-sua-tam-khu-mui">
												<input type="checkbox" id="filter-sua-tam-khu-mui" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Sữa Tắm, Khử mùi"
													value="(Sữa Tắm, Khử mùi)" data-operator="OR">
												<i class="fa"></i>
												Sữa Tắm, Khử mùi
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-tay-giun">
												<input type="checkbox" id="filter-tay-giun" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Tẩy giun" value="(Tẩy giun)" data-operator="OR">
												<i class="fa"></i>
												Tẩy giun
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-thuc-an-cho">
												<input type="checkbox" id="filter-thuc-an-cho" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="thức ăn chó" value="(thức ăn chó)" data-operator="OR">
												<i class="fa"></i>
												thức ăn chó
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-thuc-an-cho-cho">
												<input type="checkbox" id="filter-thuc-an-cho-cho" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Thức ăn Cho Chó"
													value="(Thức ăn Cho Chó)" data-operator="OR">
												<i class="fa"></i>
												Thức ăn Cho Chó
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-thuoc-thu-y">
												<input type="checkbox" id="filter-thuoc-thu-y" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Thuốc Thú Y" value="(Thuốc Thú Y)" data-operator="OR">
												<i class="fa"></i>
												Thuốc Thú Y
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-ve-sinh-cho-cho">
												<input type="checkbox" id="filter-ve-sinh-cho-cho" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Vệ sinh cho chó"
													value="(Vệ sinh cho chó)" data-operator="OR">
												<i class="fa"></i>
												Vệ sinh cho chó
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-ve-sinh-cho-meo">
												<input type="checkbox" id="filter-ve-sinh-cho-meo" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Vệ sinh cho Mèo"
													value="(Vệ sinh cho Mèo)" data-operator="OR">
												<i class="fa"></i>
												Vệ sinh cho Mèo
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-ve-sinh-meo">
												<input type="checkbox" id="filter-ve-sinh-meo" onchange="toggleFilter(this)" data-group="Loại"
													data-field="product_type" data-text="Vệ sinh mèo" value="(Vệ sinh mèo)" data-operator="OR">
												<i class="fa"></i>
												Vệ sinh mèo
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-xuong-banh-thuong">
												<input type="checkbox" id="filter-xuong-banh-thuong" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Xương, bánh thưởng"
													value="(Xương, bánh thưởng)" data-operator="OR">
												<i class="fa"></i>
												Xương, bánh thưởng
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green">
										<span>
											<label for="filter-xuong-banh-thuong-cho-cho">
												<input type="checkbox" id="filter-xuong-banh-thuong-cho-cho" onchange="toggleFilter(this)"
													data-group="Loại" data-field="product_type" data-text="Xương, bánh thưởng cho chó"
													value="(Xương, bánh thưởng cho chó)" data-operator="OR">
												<i class="fa"></i>
												Xương, bánh thưởng cho chó
											</label>
										</span>
									</li>


								</ul>
							</div>
						</aside>



						<aside class="aside-item filter-vendor">
							<div class="aside-title">
								<h2 class="title-head title_price margin-top-0"><span>Thương hiệu</span></h2>
							</div>
							<div class="aside-content filter-group aside_vendor">
								<ul>


									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-ag">
												<input type="checkbox" id="filter-ag" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Ag" value="(Ag)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Ag</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-alkin">
												<input type="checkbox" id="filter-alkin" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Alkin" value="(Alkin)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Alkin</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-anf">
												<input type="checkbox" id="filter-anf" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="ANF" value="(ANF)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">ANF</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-ankin">
												<input type="checkbox" id="filter-ankin" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="ankin" value="(ankin)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">ankin</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-baorun">
												<input type="checkbox" id="filter-baorun" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Baorun" value="(Baorun)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Baorun</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-bavieco">
												<input type="checkbox" id="filter-bavieco" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Bavieco" value="(Bavieco)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Bavieco</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-bayer">
												<input type="checkbox" id="filter-bayer" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Bayer" value="(Bayer)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Bayer</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-beoncare">
												<input type="checkbox" id="filter-beoncare" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="BeonCare" value="(BeonCare)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">BeonCare</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-best-milk">
												<input type="checkbox" id="filter-best-milk" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Best milk" value="(Best milk)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Best milk</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-bio">
												<input type="checkbox" id="filter-bio" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Bio" value="(Bio)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Bio</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-bioline">
												<input type="checkbox" id="filter-bioline" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="bioline" value="(bioline)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">bioline</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-biowish">
												<input type="checkbox" id="filter-biowish" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="BioWish" value="(BioWish)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">BioWish</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-bobo">
												<input type="checkbox" id="filter-bobo" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="BoBo" value="(BoBo)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">BoBo</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-bowbow">
												<input type="checkbox" id="filter-bowbow" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="bowbow" value="(bowbow)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">bowbow</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-brooklyn">
												<input type="checkbox" id="filter-brooklyn" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Brooklyn" value="(Brooklyn)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Brooklyn</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-budle-budle">
												<input type="checkbox" id="filter-budle-budle" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Budle Budle" value="(Budle Budle)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Budle Budle</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-carno">
												<input type="checkbox" id="filter-carno" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Carno" value="(Carno)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Carno</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-charcoal">
												<input type="checkbox" id="filter-charcoal" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Charcoal" value="(Charcoal)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Charcoal</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-chunzhou">
												<input type="checkbox" id="filter-chunzhou" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="chunzhou" value="(chunzhou)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">chunzhou</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-classic">
												<input type="checkbox" id="filter-classic" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Classic" value="(Classic)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Classic</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-cocoyo">
												<input type="checkbox" id="filter-cocoyo" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Cocoyo" value="(Cocoyo)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Cocoyo</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-codos">
												<input type="checkbox" id="filter-codos" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Codos" value="(Codos)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Codos</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-cutepets">
												<input type="checkbox" id="filter-cutepets" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="CutePets" value="(CutePets)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">CutePets</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-dae-joo">
												<input type="checkbox" id="filter-dae-joo" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="DAE JOO" value="(DAE JOO)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">DAE JOO</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-daisy-and-buddy">
												<input type="checkbox" id="filter-daisy-and-buddy" onchange="toggleFilter(this)"
													data-group="Hãng" data-field="vendor" data-text="Daisy and Buddy" value="(Daisy and Buddy)"
													data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Daisy and Buddy</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-dcvet">
												<input type="checkbox" id="filter-dcvet" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="DCVET" value="(DCVET)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">DCVET</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-dele">
												<input type="checkbox" id="filter-dele" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="DELE" value="(DELE)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">DELE</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-deshedding">
												<input type="checkbox" id="filter-deshedding" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="deShedding" value="(deShedding)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">deShedding</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-dill">
												<input type="checkbox" id="filter-dill" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Dill" value="(Dill)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Dill</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-dograng">
												<input type="checkbox" id="filter-dograng" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="dograng" value="(dograng)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">dograng</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-dono">
												<input type="checkbox" id="filter-dono" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Dono" value="(Dono)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Dono</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-dr-kyan">
												<input type="checkbox" id="filter-dr-kyan" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Dr.Kyan" value="(Dr.Kyan)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Dr.Kyan</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-drontal">
												<input type="checkbox" id="filter-drontal" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Drontal" value="(Drontal)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Drontal</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-fay">
												<input type="checkbox" id="filter-fay" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Fay" value="(Fay)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Fay</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-fendona">
												<input type="checkbox" id="filter-fendona" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="FENDONA" value="(FENDONA)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">FENDONA</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-fiprofort">
												<input type="checkbox" id="filter-fiprofort" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Fiprofort" value="(Fiprofort)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Fiprofort</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-fresh">
												<input type="checkbox" id="filter-fresh" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Fresh" value="(Fresh)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Fresh</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-friend-baby">
												<input type="checkbox" id="filter-friend-baby" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Friend Baby" value="(Friend Baby)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Friend Baby</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-fronil-spot">
												<input type="checkbox" id="filter-fronil-spot" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="FRONIL SPOT" value="(FRONIL SPOT)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">FRONIL SPOT</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-frontline">
												<input type="checkbox" id="filter-frontline" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Frontline" value="(Frontline)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Frontline</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-ganador">
												<input type="checkbox" id="filter-ganador" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Ganador" value="(Ganador)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Ganador</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-gmp-who">
												<input type="checkbox" id="filter-gmp-who" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="GMP-WHO" value="(GMP-WHO)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">GMP-WHO</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-grab">
												<input type="checkbox" id="filter-grab" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Grab" value="(Grab)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Grab</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-hahale">
												<input type="checkbox" id="filter-hahale" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="hahale" value="(hahale)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">hahale</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-han-quoc">
												<input type="checkbox" id="filter-han-quoc" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Hàn Quốc" value="(Hàn Quốc)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Hàn Quốc</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-hanviet">
												<input type="checkbox" id="filter-hanviet" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Hanviet" value="(Hanviet)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Hanviet</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-harley-baby">
												<input type="checkbox" id="filter-harley-baby" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Harley Baby" value="(Harley Baby)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Harley Baby</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-hipidog">
												<input type="checkbox" id="filter-hipidog" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Hipidog" value="(Hipidog)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Hipidog</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-icare">
												<input type="checkbox" id="filter-icare" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="ICare" value="(ICare)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">ICare</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-innopet">
												<input type="checkbox" id="filter-innopet" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="innopet" value="(innopet)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">innopet</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-joyce-dolls">
												<input type="checkbox" id="filter-joyce-dolls" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Joyce &amp; dolls" value="(Joyce &amp; dolls)"
													data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Joyce &amp; dolls</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-kramar">
												<input type="checkbox" id="filter-kramar" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Kramar" value="(Kramar)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Kramar</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-malaseb">
												<input type="checkbox" id="filter-malaseb" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Malaseb" value="(Malaseb)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Malaseb</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-modern">
												<input type="checkbox" id="filter-modern" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Modern" value="(Modern)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Modern</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-nature-protection">
												<input type="checkbox" id="filter-nature-protection" onchange="toggleFilter(this)"
													data-group="Hãng" data-field="vendor" data-text="Nature Protection"
													value="(Nature Protection)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Nature Protection</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-neoplast">
												<input type="checkbox" id="filter-neoplast" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Neoplast" value="(Neoplast)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Neoplast</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-neovia">
												<input type="checkbox" id="filter-neovia" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="NeoVia" value="(NeoVia)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">NeoVia</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-nhap">
												<input type="checkbox" id="filter-nhap" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="nhập" value="(nhập)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">nhập</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-nhap-khau">
												<input type="checkbox" id="filter-nhap-khau" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Nhập khẩu" value="(Nhập khẩu)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Nhập khẩu</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-nk">
												<input type="checkbox" id="filter-nk" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="NK" value="(NK)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">NK</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-olive">
												<input type="checkbox" id="filter-olive" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="olive" value="(olive)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">olive</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-orgo">
												<input type="checkbox" id="filter-orgo" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="orgo" value="(orgo)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">orgo</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-oxyd">
												<input type="checkbox" id="filter-oxyd" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Oxyd" value="(Oxyd)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Oxyd</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-panda">
												<input type="checkbox" id="filter-panda" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Panda" value="(Panda)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Panda</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-pedigree">
												<input type="checkbox" id="filter-pedigree" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Pedigree" value="(Pedigree)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Pedigree</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-pet-tag">
												<input type="checkbox" id="filter-pet-tag" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Pet Tag" value="(Pet Tag)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Pet Tag</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-petesthe">
												<input type="checkbox" id="filter-petesthe" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Petesthe" value="(Petesthe)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Petesthe</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-petis">
												<input type="checkbox" id="filter-petis" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Petis" value="(Petis)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Petis</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-petkit">
												<input type="checkbox" id="filter-petkit" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Petkit" value="(Petkit)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Petkit</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-petstyle">
												<input type="checkbox" id="filter-petstyle" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Petstyle" value="(Petstyle)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Petstyle</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-randolph">
												<input type="checkbox" id="filter-randolph" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Randolph" value="(Randolph)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Randolph</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-royal-canin">
												<input type="checkbox" id="filter-royal-canin" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Royal Canin" value="(Royal Canin)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Royal Canin</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-sanpet">
												<input type="checkbox" id="filter-sanpet" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Sanpet" value="(Sanpet)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Sanpet</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-savavet">
												<input type="checkbox" id="filter-savavet" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Savavet" value="(Savavet)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Savavet</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-science">
												<input type="checkbox" id="filter-science" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="SCIENCE" value="(SCIENCE)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">SCIENCE</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-shernbao">
												<input type="checkbox" id="filter-shernbao" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="shernbao" value="(shernbao)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">shernbao</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-shiny">
												<input type="checkbox" id="filter-shiny" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Shiny" value="(Shiny)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Shiny</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-show-queen">
												<input type="checkbox" id="filter-show-queen" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Show Queen" value="(Show Queen)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Show Queen</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-show-tech">
												<input type="checkbox" id="filter-show-tech" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Show Tech" value="(Show Tech)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Show Tech</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-sleeky">
												<input type="checkbox" id="filter-sleeky" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="SLeeky" value="(SLeeky)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">SLeeky</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-smart-heart">
												<input type="checkbox" id="filter-smart-heart" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Smart Heart" value="(Smart Heart)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Smart Heart</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-sos">
												<input type="checkbox" id="filter-sos" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="SOS" value="(SOS)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">SOS</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-taotaopets">
												<input type="checkbox" id="filter-taotaopets" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="TaoTaoPets" value="(TaoTaoPets)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">TaoTaoPets</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-tellme">
												<input type="checkbox" id="filter-tellme" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Tellme" value="(Tellme)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Tellme</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-urban">
												<input type="checkbox" id="filter-urban" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Urban" value="(Urban)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Urban</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-vegebrand">
												<input type="checkbox" id="filter-vegebrand" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="vegebrand" value="(vegebrand)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">vegebrand</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-vemedim">
												<input type="checkbox" id="filter-vemedim" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Vemedim" value="(Vemedim)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Vemedim</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-viet-duc-pets">
												<input type="checkbox" id="filter-viet-duc-pets" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Viet Duc Pets" value="(Viet Duc Pets)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Viet Duc Pets</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-virbac">
												<input type="checkbox" id="filter-virbac" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Virbac" value="(Virbac)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Virbac</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-vn">
												<input type="checkbox" id="filter-vn" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="VN" value="(VN)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">VN</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-yaho">
												<input type="checkbox" id="filter-yaho" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Yaho" value="(Yaho)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Yaho</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-zenith">
												<input type="checkbox" id="filter-zenith" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="Zenith" value="(Zenith)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">Zenith</span>
											</label>
										</span>
									</li>



									<li class="filter-item filter-item--check-box filter-item--green ">
										<span>
											<label class="label_relative" for="filter-zichen">
												<input type="checkbox" id="filter-zichen" onchange="toggleFilter(this)" data-group="Hãng"
													data-field="vendor" data-text="zichen" value="(zichen)" data-operator="OR">
												<i class="fa"></i>
												<span class="filter_tt">zichen</span>
											</label>
										</span>
									</li>


								</ul>
							</div>
						</aside>



						<aside class="aside-item filter-tag-style-1 filter_kt">
							<div class="aside-title">
								<h2 class="title-head margin-top-0"><span>Kích thước</span></h2>
							</div>
							<div class="aside-content filter-group sizes-list">
								<ul class="size_xx">




									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-xs">
												<input type="checkbox" id="filter-xs" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="XS" value="(XS)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">XS</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-s">
												<input type="checkbox" id="filter-s" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="S" value="(S)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">S</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-m">
												<input type="checkbox" id="filter-m" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="M" value="(M)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">M</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-l">
												<input type="checkbox" id="filter-l" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="L" value="(L)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">L</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-xl">
												<input type="checkbox" id="filter-xl" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="XL" value="(XL)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">XL</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-xxl">
												<input type="checkbox" id="filter-xxl" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="XXL" value="(XXL)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">XXL</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-3xl">
												<input type="checkbox" id="filter-3xl" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="3XL" value="(3XL)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">3XL</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-4xl">
												<input type="checkbox" id="filter-4xl" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="4XL" value="(4XL)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">4XL</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-5xl">
												<input type="checkbox" id="filter-5xl" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="5XL" value="(5XL)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">5XL</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-6xl">
												<input type="checkbox" id="filter-6xl" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="6XL" value="(6XL)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">6XL</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-7xl">
												<input type="checkbox" id="filter-7xl" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="7XL" value="(7XL)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">7XL</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-8xl">
												<input type="checkbox" id="filter-8xl" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="8XL" value="(8XL)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">8XL</span>
											</label>
										</span>
									</li>



									<li class="filter-item size filter-item--green filter-size">
										<span>
											<label for="filter-9xl">
												<input type="checkbox" id="filter-9xl" onchange="toggleFilter(this)" data-group="tag2"
													data-field="variants.title" data-text="9XL" value="(9XL)" data-operator="OR">
												<i class="fa"></i>
												<span class="tags_size">9XL</span>
											</label>
										</span>
									</li>

								</ul>
							</div>
						</aside>



						<aside class="aside-item filter-tag-style-1">
							<div class="aside-title">
								<h2 class="title-head margin-top-0"><span>Màu sắc</span></h2>
							</div>
							<div class="aside-content filter-group filter-group-color clearfix">
								<ul style="overflow: visible;">























									<li class="filter-item color filter-item--check-box ">
										<span>
											<label for="filter-vang">
												<input type="checkbox" id="filter-vang" onchange="toggleFilter(this)" data-group="tag1"
													data-field="tags" data-text="Vàng" value="(Vàng)" data-operator="OR">
												<i class="fa vang" style="background-color:#F1C40F;"></i>
												Vàng
											</label>
										</span>
									</li>





















									<li class="filter-item color filter-item--check-box ">
										<span>
											<label for="filter-tim">
												<input type="checkbox" id="filter-tim" onchange="toggleFilter(this)" data-group="tag1"
													data-field="tags" data-text="Tím" value="(Tím)" data-operator="OR">
												<i class="fa tim" style="background-color:#9B59B6;"></i>
												Tím
											</label>
										</span>
									</li>





















									<li class="filter-item color filter-item--check-box ">
										<span>
											<label for="filter-do">
												<input type="checkbox" id="filter-do" onchange="toggleFilter(this)" data-group="tag1"
													data-field="tags" data-text="Đỏ" value="(Đỏ)" data-operator="OR">
												<i class="fa do" style="background-color:#E74C3C;"></i>
												Đỏ
											</label>
										</span>
									</li>





















									<li class="filter-item color filter-item--check-box ">
										<span>
											<label for="filter-xanh">
												<input type="checkbox" id="filter-xanh" onchange="toggleFilter(this)" data-group="tag1"
													data-field="tags" data-text="Xanh" value="(Xanh)" data-operator="OR">
												<i class="fa xanh" style="background-color:#2ECC71;"></i>
												Xanh
											</label>
										</span>
									</li>





















									<li class="filter-item color filter-item--check-box ">
										<span>
											<label for="filter-hong">
												<input type="checkbox" id="filter-hong" onchange="toggleFilter(this)" data-group="tag1"
													data-field="tags" data-text="Hồng" value="(Hồng)" data-operator="OR">
												<i class="fa hong" style="background-color:#FF00CC;"></i>
												Hồng
											</label>
										</span>
									</li>





















									<li class="filter-item color filter-item--check-box ">
										<span>
											<label for="filter-cam">
												<input type="checkbox" id="filter-cam" onchange="toggleFilter(this)" data-group="tag1"
													data-field="tags" data-text="Cam" value="(Cam)" data-operator="OR">
												<i class="fa cam" style="background-color:#E67E22;"></i>
												Cam
											</label>
										</span>
									</li>





















									<li class="filter-item color filter-item--check-box ">
										<span>
											<label for="filter-den">
												<input type="checkbox" id="filter-den" onchange="toggleFilter(this)" data-group="tag1"
													data-field="tags" data-text="Đen" value="(Đen)" data-operator="OR">
												<i class="fa den" style="background-color:#000000;"></i>
												Đen
											</label>
										</span>
									</li>

								</ul>
							</div>
						</aside>


					</div>
					<script>
						var selectedSortby;
						var tt = 'Thứ tự';
						var selectedViewData = "data";
						var filter = new Bizweb.SearchFilter()

						filter.addValue("collection", "collections", "1547451", "AND");

						function toggleFilter(e) {
							_toggleFilter(e);
							renderFilterdItems();
							doSearch(1);
						}
						function _toggleFilterdqdt(e) {
							var $element = $(e);
							var group = 'Khoảng giá';
							var field = 'price_min';
							var operator = 'OR';
							var value = $element.attr("data-value");
							filter.deleteValuedqdt(group, field, value, operator);
							filter.addValue(group, field, value, operator);
							renderFilterdItems();
							doSearch(1);
						}
						function _toggleFilter(e) {
							var $element = $(e);
							var group = $element.attr("data-group");
							var field = $element.attr("data-field");
							var text = $element.attr("data-text");
							var value = $element.attr("value");
							var operator = $element.attr("data-operator");
							var filterItemId = $element.attr("id");
							if (!$element.is(':checked')) {
								filter.deleteValue(group, field, value, operator);
							}
							else {
								filter.addValue(group, field, value, operator);
							}
							$(".catalog_filters li[data-handle='" + filterItemId + "']").toggleClass("active");
						}
						function renderFilterdItems() {
							var $container = $(".filter-container__selected-filter-list ul");
							$container.html("");
							$(".filter-container input[type=checkbox]").each(function (index) {
								if ($(this).is(':checked')) {
									var id = $(this).attr("id");
									var name = $(this).closest("label").text();
									addFilteredItem(name, id);
								}
							});
							if ($(".filter-container input[type=checkbox]:checked").length > 0)
								$(".filter-container__selected-filter").show();
							else
								$(".filter-container__selected-filter").hide();
						}
						function addFilteredItem(name, id) {
							var filteredItemTemplate = "<li class='filter-container__selected-filter-item' for='{3}'><a href='javascript:void(0)' onclick=\"{0}\"><i class='fa fa-close'></i> {1}</a></li>";
							filteredItemTemplate = filteredItemTemplate.replace("{0}", "removeFilteredItem('" + id + "')");
							filteredItemTemplate = filteredItemTemplate.replace("{1}", name);
							filteredItemTemplate = filteredItemTemplate.replace("{3}", id);
							var $container = $(".filter-container__selected-filter-list ul");
							$container.append(filteredItemTemplate);
						}
						function removeFilteredItem(id) {
							$(".filter-container #" + id).trigger("click");
						}
						function clearAllFiltered() {
							filter = new Bizweb.SearchFilter();

							filter.addValue("collection", "collections", "1547451", "AND");

							$(".filter-container__selected-filter-list ul").html("");
							$(".filter-container input[type=checkbox]").attr('checked', false);
							$(".filter-container__selected-filter").hide();
							doSearch(1);
						}
						function doSearch(page, options) {
							if (!options) options = {};
							//NProgress.start();
							$('.aside.aside-mini-products-list.filter').removeClass('active');
							awe_showPopup('.loading');
							filter.search({
								view: selectedViewData,
								page: page,
								sortby: selectedSortby,
								success: function (html) {
									var $html = $(html);
									// Muốn thay thẻ DIV nào khi filter thì viết như này

									var $categoryProducts = $($html[0]);
									var xxx = $categoryProducts.find('.call-count');

									$('.tt span').text(xxx.text());
									$(".category-products").html($categoryProducts.html());
									pushCurrentFilterState({ sortby: selectedSortby, page: page });
									awe_hidePopup('.loading');

									initQuickView();

									awe_lazyloadImage();
									$('.add_to_cart').click(function (e) {
										e.preventDefault();
										var $this = $(this);
										var form = $this.parents('form');
										$.ajax({
											type: 'POST',
											url: '/cart/add.js',
											async: false,
											data: form.serialize(),
											dataType: 'json',
											error: addToCartFail,
											beforeSend: function () {
												if (window.theme_load == "icon") {
													awe_showLoading('.btn-addToCart');
												} else {
													awe_showPopup('.loading');
												}
											},
											success: addToCartSuccess,
											cache: false
										});
									});
									$('html, body').animate({
										scrollTop: $('.category-products').offset().top
									}, 0);
									setTimeout(function () {
										owl_thumb_image();
										hover_thumb_image();
									}, 200);

									resortby(selectedSortby);
									$('.open-filters').removeClass('open');
									$('.dqdt-sidebar').removeClass('open');
									$('.tt span').text(xxx.text());
									return window.BPR.initDomEls(), window.BPR.loadBadges();

								}
							});
						}
						function sortby(sort) {
							switch (sort) {
								case "price-asc":
									selectedSortby = "price_min:asc";
									break;
								case "price-desc":
									selectedSortby = "price_min:desc";
									break;
								case "alpha-asc":
									selectedSortby = "name:asc";
									break;
								case "alpha-desc":
									selectedSortby = "name:desc";
									break;
								case "created-desc":
									selectedSortby = "created_on:desc";
									break;
								case "created-asc":
									selectedSortby = "created_on:asc";
									break;
								default:
									selectedSortby = "";
									break;
							}
							doSearch(1);
						}
						function resortby(sort) {
							switch (sort) {
								case "price_min:asc":
									tt = "Giá tăng dần";
									break;
								case "price_min:desc":
									tt = "Giá giảm dần";
									break;
								case "name:asc":
									tt = "Tên A → Z";
									break;
								case "name:desc":
									tt = "Tên Z → A";
									break;
								case "created_on:desc":
									tt = "Hàng mới nhất";
									break;
								case "created_on:asc":
									tt = "Hàng cũ nhất";
									break;
								default:
									tt = "Mặc định";
									break;
							}
							$('#sort-by > ul > li > span').html(tt);
						}
						function _selectSortby(sort) {
							resortby(sort);
							switch (sort) {
								case "price-asc":
									selectedSortby = "price_min:asc";
									break;
								case "price-desc":
									selectedSortby = "price_min:desc";
									break;
								case "alpha-asc":
									selectedSortby = "name:asc";
									break;
								case "alpha-desc":
									selectedSortby = "name:desc";
									break;
								case "created-desc":
									selectedSortby = "created_on:desc";
									break;
								case "created-asc":
									selectedSortby = "created_on:asc";
									break;
								default:
									selectedSortby = sort;
									break;
							}
						}
						function toggleCheckbox(id) {
							$(id).click();
						}
						function pushCurrentFilterState(options) {
							if (!options) options = {};
							var url = filter.buildSearchUrl(options);
							var queryString = url.slice(url.indexOf('?'));
							if (selectedViewData == 'data_list') {
								queryString = queryString + '&view=list';
							}
							else {
								queryString = queryString + '&view=grid';
							}
							pushState(queryString);
						}
						function pushState(url) {
							window.history.pushState({
								turbolinks: true,
								url: url
							}, null, url)
						}
						function switchView(view) {
							switch (view) {
								case "list":
									selectedViewData = "data_list";
									break;
								default:
									selectedViewData = "data";
									break;
							}
							doSearch(1);
						}
						function selectFilterByCurrentQuery() {
							var isFilter = false;
							var url = window.location.href;
							var queryString = decodeURI(window.location.search);
							var filters = queryString.match(/\(.*?\)/g);
							var page = 0;
							if (queryString) {
								isFilter = true;
								$.urlParam = function (name) {
									var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
									return results[1] || 0;
								}
								page = $.urlParam('page');
							}
							if (filters && filters.length > 0) {
								filters.forEach(function (item) {
									item = item.replace(/\(\(/g, "(");
									var element = $(".aside-content input[value='" + item + "']");
									element.attr("checked", "checked");
									_toggleFilter(element);
								});

								isFilter = true;
							}
							var sortOrder = getParameter(url, "sortby");
							if (sortOrder) {
								_selectSortby(sortOrder);
							}
							if (isFilter) {
								doSearch(page);
							}
						}
						function getParameter(url, name) {
							name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
							var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
								results = regex.exec(url);
							return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
						}
						$(document).ready(function () {

							selectFilterByCurrentQuery();
							$('.filter-group .filter-group-title').click(function (e) {
								$(this).parent().toggleClass('active');
							});
							$('.filter-mobile').click(function (e) {
								$('.aside.aside-mini-products-list.filter').toggleClass('active');
							});
							$('#show-admin-bar').click(function (e) {
								$('.aside.aside-mini-products-list.filter').toggleClass('active');
							});
							$('.filter-container__selected-filter-header-title').click(function (e) {
								$('.aside.aside-mini-products-list.filter').toggleClass('active');
							});
						});
					</script>


					<div class="banner-right margin-top-10">
						<a href="#" title="Banner sidebar">
							<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/banner_sidebar.jpg?1620452211114"
								class="img-responsive" alt="Banner sidebar">
						</a>
					</div>

				</aside>

			</div>

		</div>

		<div id="open-filters" class="open-filters hidden-lg hidden-md">
			<i class="fa fa-align-right"></i>
			<span>Lọc</span>
		</div>
	</div>
</div>
@endsection