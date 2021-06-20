<header class="header">
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<ul class="list-inline topbar_left hidden-sm hidden-xs">
						<li>
							<span class="welcome_text">Chào mừng bạn đến với Siêu thị thú cưng CutePets</span>
						</li>
						<li class="topbar-email">
							<a href="mailto:CutePets.CSKH@gmail.com">
								Email: CutePets.CSKH@gmail.com
							</a>
						</li>
					</ul>
				</div>

				<div class="col-md-6 col-sm-6 d-list col-xs-12 a-right topbar_right">
				<div class="list-inline a-center f-right">
					<ul>
	
						<li>
							<i class="fa fa-user"></i>
							@if(session()->has('auth'))
							<a href="{{route('profile')}}" title="{{session()->get('auth')}}" class="account_a">
								<span>{{session()->get('auth')}}</span>
							</a>
							@else
								<a href="{{route('register')}}" title="Đăng ký" class="account_a">
									<span>Đăng kí</span>	
								</a>
							@endif
						</li>
						<li>
							<i class="fa fa-lock"></i>
							@if(session()->has('auth'))
							<a href="{{route('logout')}}" title="Thoát" class="account_a">
								<span>Thoát</span>
							</a>
							@else
							<a href="{{route('login')}}" title="Đăng nhập" class="account_a">
									<span>Đăng nhập</span>	
								</a>
							@endif
						</li>
						
						<li>
							<i class="fa fa-map-marker"></i>
							<a href="/lien-he" title="Liên hệ" class="account_a">
								Hệ thống Shop
							</a>
						</li>
				
					</ul>
				</div>


			</div>
			</div>
		</div>
	</div>
	<div class="mid-header">
		<div class="container">
			<div class="row">
				<div class="content_header">
					<div class="header-main">
						<div class="menu-bar-h nav-mobile-button hidden-md hidden-lg">
							<a href="#nav-mobile"><img
									src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/icon-mobile-menu.png?1620452211114"
									alt="menu bar" /></a>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="logo">


								<a href="/" class="logo-wrapper ">
									<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/logo.png?1620452211114" alt="logo ">
								</a>

							</div>
						</div>
						<div class="col-lg-6 col-md-6 no-padding col-sm-12 col-xs-12">
							<div class="header-left">
								<div class="header_search header_searchs">
									<form class="input-group search-bar" action="/search" method="get" role="search">
										<div class="collection-selector">
											<div class="search_text">

												Tất cả
											</div>
											<div id="search_info" class="list_search" style="display: none;">

												<div class="search_item " data-coll-id="2217280">Dịch Vụ Grooming, Spa,...</div>

												<div class="search_item " data-coll-id="1699071">Trụ cào móng, Cat tree...</div>

												<div class="search_item " data-coll-id="1699065">Chăm sóc Lông, móng ch...</div>

												<div class="search_item " data-coll-id="1699053">Phụ kiện khác cho chó mèo</div>

												<div class="search_item " data-coll-id="1699044">Vòng cổ cho chó mèo</div>

												<div class="search_item " data-coll-id="1699039">dây dắt cho chó mèo</div>

												<div class="search_item " data-coll-id="1699034">Bánh thưởng, cỏ catnip...</div>

												<div class="search_item " data-coll-id="1699005">Thức ăn mèo lớn</div>

												<div class="search_item " data-coll-id="1698999">Đồ ăn mèo con</div>

												<div class="search_item " data-coll-id="1681948">Dưỡng mượt Lông</div>

												<div class="search_item " data-coll-id="1681947">Khoáng chất vi lượng</div>

												<div class="search_item " data-coll-id="1681946">Bổ xung Vitamin</div>

												<div class="search_item " data-coll-id="1681945">Bổ xung canxi</div>

												<div class="search_item " data-coll-id="1681938">Trị nấm, ghẻ, viên da</div>

												<div class="search_item " data-coll-id="1681936">Thuốc trị ve, rận, bọ ...</div>

												<div class="search_item " data-coll-id="1681935">Đồ sinh hoạt cho mèo</div>

												<div class="search_item " data-coll-id="1681934">Đồ dùng cho mèo</div>

												<div class="search_item " data-coll-id="1681931">Khay, nhà vệ sinh mèo</div>

												<div class="search_item " data-coll-id="1681926">Đồ dùng cho chó</div>

												<div class="search_item " data-coll-id="1681925">Phụ kiện cho chó</div>

												<div class="liner_search"></div>
												<div class="search_item active" data-coll-id="0">Tất cả</div>
											</div>
										</div>
										<input type="search" name="query" value="" placeholder="Tìm kiếm sản phẩm... "
											class="input-group-field st-default-search-input search-text" autocomplete="off">
										<span class="input-group-btn">
											<button class="btn icon-fallback-text">
												<span class="fa fa-search"></span>
											</button>
										</span>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="header-right">
								<div class="header-acount hidden-lg-down">
									<div class="wishlist_header hidden-xs hidden-sm">


										<div class="img_hotline"><i class="fa fa-phone"></i></div>
										<span class="text_hotline">Gọi đặt hàng:</span> <a class="phone-order" href="tel:0949 111 520">0949
											111 520</a>


									</div>
									<div class="top-cart-contain f-right hidden-xs hidden-sm visible-md visible-lg">
										<div class="mini-cart text-xs-center">
											<div class="heading-cart">
												<a class="bg_cart" href="{{route('cart')}}" title="Giỏ hàng">
													<span class="absolute count_item count_item_pr">{{session()->get('quantity_cart')}}</span>

													<i class="fa fa-shopping-bag"></i>
													<span class="block-small-cart">
														<span class="text-giohang hidden-xs">Giỏ hàng</span>
														<span class="block-count-pr">
															(<span class="count_item count_item_pr">{{session()->get('quantity_cart')}}</span>) sản
															phẩm
														</span>

													</span>
												</a>
											</div>
											@if(session()->get('cart') != null)
											<div class="top-cart-content top-cart-content-hover cart-content"
												data-url="{{route('cart.delete')}}">
												@include('website.pages.home.component.cartMini')
											</div>
											@else
											<div class="top-cart-content top-cart-content-hover cart-content">
                      </div>
											@endif
										</div>
									</div>
									<div class="top-cart-contain f-right hidden-lg hidden-md visible-xs visible-sm">
										<div class="mini-cart text-xs-center">
											<div class="heading-cart">
												<a class="bg_cart" href="/cart" title="Giỏ hàng">
													<span class="absolute count_item count_item_pr"></span>
													<img alt="Giỏ hàng"
														src="//bizweb.dktcdn.net/thumb/icon/100/307/433/themes/751183/assets/icon-bag.png?1620452211114" />

												</a>
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

	<div class="header-nav">
		<div class="container ">
			<div class="row">

				<div class="col-md-3 col-sm-12 col-xs-12 vertical-menu-home padding-small">
					<div id="section-verticalmenu"
						class=" active-desk block block-verticalmenu float-vertical float-vertical-left">
						<div class="bg-vertical"></div>

						<h4 class="block-title float-vertical-button">
							<span class="verticalMenu-toggle"></span>
							<span class="verticalMenu-text">Danh mục sản phẩm</span>

						</h4>

						<div class="block_content">
							<div id="verticalmenu" class="verticalmenu" role="navigation">
								<ul class="nav navbar-nav nav-verticalmenu">

									<li class="vermenu-option-1 ">

										<a class="link-lv1" href="/san-pham-moi" title="Sản Phẩm Mới">


											<i class="fa fa-fire"></i>


											<span class="menu-icon">
												<span class="menu-title">Sản Phẩm Mới</span>
											</span>

										</a>
									</li>
									@foreach($categories as $category)
									<li class="vermenu-option-2">

										<a class="link-lv1" href="/danh-cho-cho">


											<i class="fa fa-paw"></i>


											<span class="menu-icon">
												<span class="menu-title">{{$category->category_name}}</span>
											</span>

										</a>
						
									</li>
									@endforeach
						    
								</ul>
								<div class="btnviewmore "><a href="javascript:void(0);"><i class="fa fa-plus"></i></a></div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-md-9 padding-small bg-header-nav hidden-xs hidden-sm">
					<div class="relative">
						<div class="row row-noGutter-2">
							<nav class="header-nav">
								<ul class="item_big">













































									<li class="nav-item ">










































































										<a class="a-img menu-lv1" href="/dich-vu-cat-tia-spa"><span>Dịch Vụ</span></a>
										<i class="fa fa-caret-down open-lv1"></i>
										<ul class="item_small hidden-sm hidden-xs">

											<li>
												<a href="/dich-vu-tam-say-grooming" title="">Tắm Sấy Grooming </a>


											</li>

											<li>
												<a href="/dich-vu-cat-tia-spa" title="">Cắt Tỉa Spa </a>


											</li>

											<li>
												<a href="/dich-vu-trong-giu-hotel" title="">Trông Giữ Hotel </a>


											</li>

										</ul>
									</li>















































									<li class="nav-item ">










































































										<a class="a-img menu-lv1" href="https://shp.ee/wup3u5z"><span>Shopee</span></a>

									</li>














































									<li class="nav-item ">










































































										<a class="a-img menu-lv1" href="https://lzd.co/cutepets"><span>Lazada</span></a>

									</li>














































									<li class="nav-item ">










































































										<a class="a-img menu-lv1" href="https://www.sendo.vn/shop/cute-pets"><span>Sendo</span></a>

									</li>














































									<li class="nav-item ">












										<a class="a-img menu-lv1" href="https://www.facebook.com/cutepetsHN"><span>Facebook</span></a>

									</li>

									<li class="nav-item ">


										<a class="a-img menu-lv1" href="/lien-he"><span>Liên Hệ</span></a>

									</li>

									<li class="nav-item ">


										<a class="a-img menu-lv1" href="https://petshophanoi.com/apps/kiem-tra-don-hang"><span>CHECK
												Đơn</span></a>

									</li>



									<li class="nav-item ">


										<a class="a-img menu-lv1" href="https://petshophanoi.com/apps/iwish"><span>Yêu Thích</span></a>

									</li>


								</ul>
							</nav>
						</div>
					</div>
				</div>

				<div class="section-ss-banner col-md-9 col-sm-12 col-xs-12 no-padding">
					<div class="section-ss col-md-qư col-sm-qư col-xs-12 padding-small">
						<div class="home-slider owl-carousel owl-theme not-aweowl">

							<div class="item">
								<a href="#" class="clearfix" title="Slider 1">
									<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/slider_1.png?1620452211114"
										alt="Slider 1">
								</a>
							</div>


							<div class="item">
								<a href="#" class="clearfix" title="Slider 2">
									<img src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/slider_2.png?1620452211114"
										alt="Slider 2">
								</a>
							</div>

						</div><!-- /.products -->
						<div class="col-md-12 no-padding col-sm-12 hidden">
							<div class="banner-item banner-right col-md-6 col-sm-6 col-xs-12 padding-right-small">
								<a href="" title="">
									<img class="img-responsive"
										src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/ss_banner_img_2.jpg?1620452211114"
										alt="Cutepets - Siêu thị thú cưng Pet shop Hà Nội">
									<div class="hover_collection"></div>
								</a>
							</div>
							<div class="banner-item banner-right col-md-6 col-sm-6 hidden-xs padding-left-small">
								<a href="#" title="Banner 3">
									<img class="img-responsive"
										src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/ss_banner_img_3.jpg?1620452211114"
										alt="Banner 3">
									<div class="hover_collection"></div>
								</a>
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>
</header>