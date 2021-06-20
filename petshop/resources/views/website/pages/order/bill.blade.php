<html class="thankyou-page">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Cutepets - Pet shop &amp; Grooming Spa Thú cưng Hà Nội - Cảm ơn">
	<title>Cutepets - Pet shop &amp; Grooming Spa Thú cưng Hà Nội - Cảm ơn</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://petshophanoi.com/dist/css/checkout.min.css?v=bc5f183">




	<link rel="stylesheet" type="text/css" href="https://newproductreviews.sapoapps.vn/assets/css/bpr.min.css?v=1.0"
		media="all">
	<link rel="stylesheet" type="text/css"
		href="https://newproductreviews.sapoapps.vn/assets/css/productReviews.min.css?v=1.0" media="all">
	<script type="text/javascript" src="https://newproductreviews.sapoapps.vn/assets/js/lang/vi.min.js"></script>
</head>

<body data-no-turbolink="">
	<header class="banner">
		<div class="wrap">
			<div class="logo logo--left ">

				<a href="/">
					<img class="logo__image  logo__image--small " alt="Cutepets - Pet shop &amp; Grooming Spa Thú cưng Hà Nội"
						src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/logo.png?1623469001138">
				</a>

			</div>
		</div>
	</header>
	<div class="content">
		<form>
			<div class="wrap wrap--mobile-fluid">
				<main class="main main--nosidebar">
					<header class="main__header">
						<div class="logo logo--left ">

							<a href="/">
								<img class="logo__image  logo__image--small "
									alt="Cutepets - Pet shop &amp; Grooming Spa Thú cưng Hà Nội"
									src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/logo.png?1623469001138">
							</a>

						</div>
					</header>
					<div class="main__content">
						<article class="row">
							<div class="col col--primary">
								<section class="section section--icon-heading">
									<div class="section__icon unprintable">
										<svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
											<g fill="none" stroke="#8EC343" stroke-width="2">
												<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;">
												</circle>
												<path d="M17.417,37.778l9.93,9.909l25.444-25.393"
													style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
											</g>
										</svg>
									</div>
									<div class="thankyou-message-container">
										<h2 class="section__title">Cảm ơn bạn đã đặt hàng</h2>

										<p class="section__text">
											Một email xác nhận đã được gửi tới minh@gmail.com. <br>
											Xin vui lòng kiểm tra email của bạn
										</p>

									</div>
								</section>
							</div>
							<div class="col col--secondary">
								<aside class="order-summary order-summary--bordered order-summary--is-collapsed" id="order-summary">
									<div class="order-summary__header">
										<div class="order-summary__title">
											Đơn hàng #{{$order[0]->order_id}}
											<span class="unprintable">(1)</span>
										</div>
										<div class="order-summary__action hide-on-desktop unprintable">
											<a data-toggle="#order-summary" data-toggle-class="order-summary--is-collapsed"
												class="expandable">
												Xem chi tiết
											</a>
										</div>
									</div>
									<div class="order-summary__sections">
										<div
											class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
											<table class="product-table">
												<tbody>
												@php
													$fee = 0;
													$total = 0;
													$item_quantity = 0;
												@endphp
												@foreach($order[0]->orderDetails as $item)
													@php
														$item_quantity += $item->quantity;
														$total += $item->price * $item->quantity;
													@endphp
													<tr class="product">
														<td class="product__image">
															<div class="product-thumbnail">
																<div class="product-thumbnail__wrapper">

																	<img
																		src="{{asset('/uploads/products/'.$item->product->product_feature_image)}}"
																		alt="Thức ăn chó lớn Ganador Adult 10Kg - Vị Cừu và Gạo Default Title"
																		class="product-thumbnail__image">

																</div>
																<span class="product-thumbnail__quantity unprintable">{{$item->quantity}}</span>
															</div>
														</td>
														<th class="product__description">
															<span class="product__description__name">{{$item->product->product_name}}</span>
														</th>
														<td class="product__quantity printable-only">
															x 1000
														</td>
														<td class="product__price">
															{{number_format($item->price * $item->quantity, 0, ',', '.')}}₫
														</td>
													</tr>
												@endforeach	
												</tbody>
											</table>
										</div>
										<div class="order-summary__section">
											<table class="total-line-table">
												<tbody class="total-line-table__tbody">

													<tr class="total-line total-line--subtotal">
														<th class="total-line__name">Tạm tính</th>
														<td class="total-line__price">{{number_format($total, 0,',','.')}}₫</td>
													</tr>


													<tr class="total-line total-line--shipping-fee">
														<th class="total-line__name">Phí vận chuyển</th>
														<td class="total-line__price">
                            <?php if($order[0]->orderDetails[0]->shippingMethod == "Shop liên hệ báo phí ship sau: 1₫"){
															$fee = 1;
															echo "1đ";
														}	else if($order[0]->orderDetails[0]->shippingMethod == "Giao Hàng Tiết Kiệm (Tạm tính): 30.000₫"){
															$fee = 30000;
															echo "30.000đ";
														} else if($order[0]->orderDetails[0]->shippingMethod == "Giao Hàng Nhanh (Tạm tính) - Đường hàng không: 100.000₫"){
															$fee = 100000;
															echo "100.000đ"; 
														}
														else{
															$fee = 60000;
															echo "60.000đ"; 
														}
														?>
														</td>
													</tr>

												</tbody>
											</table>
										</div>
										<div class="order-summary__section">
											<table class="total-line-table">
												<tbody class="total-line-table__tbody">
													<tr class="total-line payment-due">
														<th class="total-line__name">
															<span class="payment-due__label-total">Tổng cộng</span>
														</th>
														<td class="total-line__price">
															<span class="payment-due__price">{{number_format($total + $fee, 0,',','.')}}₫</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<script>
										var hide = document.getElementById("order-summary");
										hide.onclick = () => {
											hide.classList.toggle("order-summary--is-collapsed");
										}
									</script>
								</aside>
							</div>
							<div class="col col--primary">
								<section class="section">
									<div class="section__content section__content--bordered">

										<div class="row">

											<div class="col col--md-two">
												<h2>Thông tin mua hàng</h2>
												<p>{{$order[0]->customer->customer_name}}</p>
												@if(session()->has('auth'))
												<p>{{$order[0]->customer->customer_email}}</p>
												@else
												<p>Chưa có email</p>
												@endif
												<p>{{$order[0]->customer->customer_phone}}</p>
											</div>

											<div class="col col--md-two">
												<h2>Địa chỉ nhận hàng</h2>
												<p>{{$order[0]->customer->customer_name}}</p>
												<p>{{$order[0]->customer->customer_address}}</p>
												<p>{{$order[0]->customer->customer_ward}}, {{$order[0]->customer->customer_district}}, {{$order[0]->customer->customer_city}}
												</p>
												<p>{{$order[0]->customer->customer_phone}}</p>
											</div>
										</div>
										<div class="row">
											<div class="col col--md-two">
												<h2>Phương thức thanh toán</h2>
												<p>{{$order[0]->orderDetails[0]->paymentMethod}}</p>
											</div>
											<div class="col col--md-two">
												<h2>Phương thức vận chuyển</h2>
												<p>{{$order[0]->orderDetails[0]->shippingMethod}}</p>
											</div>
										</div>

									</div>
								</section>
								<section class="section unprintable">
									<div class="field__input-btn-wrapper field__input-btn-wrapper--floating">
										<a href="/" class="btn btn--large">Tiếp tục mua hàng</a>
										<span class="text-icon-group text-icon-group--large icon-print" onclick="window.print()">
											<i class="fa fa-print"></i>
											<span>In </span>
										</span>
									</div>
								</section>
							</div>
						</article>
					</div>

					<div class="main__footer unprintable">
						<ul class="main__policy">
							<li>

								<a data-toggle="#refund_term" data-toggle-class="hide">Chính sách hoàn trả</a>

							</li>
							<li>

								<a data-toggle="#privacy_term" data-toggle-class="hide">Chính sách bảo mật</a>

							</li>
							<li>

								<a data-toggle="#service_term" data-toggle-class="hide">Điều khoản sử dụng</a>

							</li>
						</ul>
						<p>Cảm ơn bạn đã đặt hàng tại Petshophanoi.com . Chúng tôi sẽ gọi xác nhận đơn hàng sớm nhất cho bạn!
							- Bạn cần tư vấn thêm về sản phẩm và cách thức đặt hàng. Vui lòng liên hệ số Hotline: 0949111520 (Thành)
							Xin cảm ơn!</p>
						<div class="modal-wrapper hide" id="refund_term">
							<div class="modal" style="display: inline-block;">
								<div class="modal-header">
									<h2 class="modal-title">Chính sách hoàn trả</h2>
									<span class="close" data-toggle="#refund_term" data-toggle-class="hide">×</span>
								</div>
								<div class="modal-body">
									<pre class="term-preview">
										CHÍNH SÁCH ĐỔI TRẢ HÀNG
											1. Đổi trả theo nhu cầu khách hàng (đổi trả hàng vì không ưng ý)
											Tất cả mặt hàng đã mua đều có thể hoàn trả trong vòng 5 ngày kể từ ngày nhận hàng (trừ khi có quy định gì khác). Chúng tôi chỉ chấp nhận đổi trả cho các sản phẩm còn nguyên điều kiện ban đầu, còn hóa đơn mua hàng &amp; sản phẩm chưa qua sử dụng, bao gồm:
											- Còn nguyên đóng gói và bao bì không bị móp rách.
											- Đầy đủ các chi tiết, phụ kiện.
											- Tem/ phiếu bảo hành, tem thương hiệu, hướng dẫn kỹ thuật  và các quà tặng kèm theo (nếu có) v.v… phải còn đầy đủ và nguyên vẹn
											- Không bị dơ bẩn, trầy xước, hư hỏng, có mùi lạ hoặc có dấu hiệu đã qua qua sử dụng
											2. Đổi trả không vì lý do chủ quan từ khách hàng
											2.1. Hàng giao không mới, không nguyên vẹn, sai nội dung hoặc bị thiếu:
											Chúng tôi khuyến khích quý khách hàng phải kiểm tra tình trạng bên ngoài của thùng hàng và sản phẩm trước khi thanh toán để đảm bảo rằng hàng hóa được giao đúng chủng loại, số lượng, màu sắc theo đơn đặt hàng và tình trạng bên ngoài không bị tác động.
											Nếu gặp trường hợp này, Quý khách vui lòng từ chối nhận hàng và/hoặc báo ngay cho bộ phận hỗ trợ khách hàng để chúng tôi có phương án xử lí kịp thời. (Xin lưu ý những bước kiểm tra sâu hơn như dùng thử sản phẩm chỉ có thể được chấp nhận sau khi đơn hàng được thanh toán đầy đủ).
											Trong trường hợp khách hàng đã thanh toán, nhận hàng và sau đó phát hiện hàng hóa không còn mới nguyên vẹn, sai nội dung hoặc thiếu hàng, xin vui lòng chụp ảnh sản phẩm gửi về hộp thư của chúng tôi để được chúng tôi hỗ trợ các bước tiếp theo như đổi/trả hàng hoặc gửi sản phẩm còn thiếu đến quý khách…
											Sau 48h kể từ ngày quý khách nhận hàng, chúng tôi có quyền từ chối hỗ trợ cho những khiếu nại theo nội dung như trên.
											2.2. Hàng giao bị lỗi
											Khi quý khách gặp trục trặc với sản phẩm đặt mua của chúng tôi, vui lòng thực hiện các bước sau đây:
											- Bước 1: Kiểm tra lại sự nguyên vẹn của sản phẩm, chụp lại ảnh sản phẩm xuất hiện lỗi.
											- Bước 2: Quý khách liên hệ với trung tâm chăm sóc khách hàng của chúng tôi để được xác nhận.
											- Bước 3:Trong vòng 30 ngày kể từ ngày nhận hàng, nếu quý khách được xác nhận từ trung tâm chăm sóc khách hàng rằng sản phẩm bị lỗi kỹ thuật, quý khách vui lòng truy cập ngay Hướng dẫn đổi trả hàng để bắt đầu quy trình đổi trả hàng.
											3. Phương thức hoàn tiền
											Tùy theo lí do hoàn trả sản phẩm kết quả đánh giá chất lượng tại kho, chúng tôi sẽ có những phương thức hoàn tiền với chi tiết như sau:
											- Hoàn tiền bằng mã tiền điện tử dùng để mua sản phẩm mới
											- Đổi sản phẩm mới cùng loại
											- Chuyển khoản qua ngân hàng theo thông tin của quý khách cung cấp
											- Riêng đối với các đơn hàng thanh toán qua thẻ tín dụng quốc tế, chúng tôi sẽ áp dụng hình thức hoàn tiền vào tài khoản thanh toán của chủ thẻ.
											- Hoàn tiền mặt trực tiếp tại văn phòng
											Mọi chi tiết hoặc thắc mắc quý khách vui lòng liên hệ với chúng tôi qua số điện thoại hỗ trợ hoặc để lại lời nhắn tại website. Xin chân thành cảm ơn.
									</pre>
								</div>
							</div>
						</div>
						<div class="modal-wrapper hide" id="privacy_term">
							<div class="modal" style="display: inline-block;">
								<div class="modal-header">
									<h2 class="modal-title">Chính sách bảo mật</h2>
									<span class="close" data-toggle="#privacy_term" data-toggle-class="hide">×</span>
								</div>
								<div class="modal-body">
									<pre
										class="term-preview">CHÍNH SÁCH BẢO MẬT
Cám ơn quý khách đã quan tâm và truy cập vào website. Chúng tôi tôn trọng và cam kết sẽ bảo mật những thông tin mang tính riêng tư của Quý khách.
Chính sách bảo mật sẽ giải thích cách chúng tôi tiếp nhận, sử dụng và (trong trường hợp nào đó) tiết lộ thông tin cá nhân của Quý khách.
Bảo vệ dữ liệu cá nhân và gây dựng được niềm tin cho quý khách là vấn đề rất quan trọng với chúng tôi. Vì vậy, chúng tôi sẽ dùng tên và các thông tin khác liên quan đến quý khách tuân thủ theo nội dung của Chính sách bảo mật. Chúng tôi chỉ thu thập những thông tin cần thiết liên quan đến giao dịch mua bán.
Chúng tôi sẽ giữ thông tin của khách hàng trong thời gian luật pháp quy định hoặc cho mục đích nào đó. Quý khách có thể truy cập vào website và trình duyệt mà không cần phải cung cấp chi tiết cá nhân. Lúc đó, Quý khách đang ẩn danh và chúng tôi không thể biết bạn là ai nếu Quý khách không đăng nhập vào tài khoản của mình.
1. Thu thập thông tin cá nhân
- Chúng tôi thu thập, lưu trữ và xử lý thông tin của bạn cho quá trình mua hàng và cho những thông báo sau này liên quan đến đơn hàng, và để cung cấp dịch vụ, bao gồm một số thông tin cá nhân: danh hiệu, tên, giới tính, ngày sinh, email, địa chỉ, địa chỉ giao hàng, số điện thoại, fax, chi tiết thanh toán, chi tiết thanh toán bằng thẻ hoặc chi tiết tài khoản ngân hàng.
- Chúng tôi sẽ dùng thông tin quý khách đã cung cấp để xử lý đơn đặt hàng, cung cấp các dịch vụ và thông tin yêu cầu thông qua website và theo yêu cầu của bạn.
- Hơn nữa, chúng tôi sẽ sử dụng các thông tin đó để quản lý tài khoản của bạn; xác minh và thực hiện giao dịch trực tuyến, nhận diện khách vào web, nghiên cứu nhân khẩu học, gửi thông tin bao gồm thông tin sản phẩm và dịch vụ. Nếu quý khách không muốn nhận bất cứ thông tin tiếp thị của chúng tôi thì có thể từ chối bất cứ lúc nào.
- Chúng tôi có thể chuyển tên và địa chỉ cho bên thứ ba để họ giao hàng cho bạn (ví dụ cho bên chuyển phát nhanh hoặc nhà cung cấp).
- Chi tiết đơn đặt hàng của bạn được chúng tôi lưu giữ nhưng vì lí do bảo mật nên chúng tôi không công khai trực tiếp được. Tuy nhiên, quý khách có thể tiếp cận thông tin bằng cách đăng nhập tài khoản trên web. Tại đây, quý khách sẽ thấy chi tiết đơn đặt hàng của mình, những sản phẩm đã nhận và những sản phẩm đã gửi và chi tiết email, ngân hàng và bản tin mà bạn đặt theo dõi dài hạn.
- Quý khách cam kết bảo mật dữ liệu cá nhân và không được phép tiết lộ cho bên thứ ba. Chúng tôi không chịu bất kỳ trách nhiệm nào cho việc dùng sai mật khẩu nếu đây không phải lỗi của chúng tôi.
- Chúng tôi có thể dùng thông tin cá nhân của bạn để nghiên cứu thị trường. mọi thông tin chi tiết sẽ được ẩn và chỉ được dùng để thống kê. Quý khách có thể từ chối không tham gia bất cứ lúc nào.
2. Bảo mật
- Chúng tôi có biện pháp thích hợp về kỹ thuật và an ninh để ngăn chặn truy cập trái phép hoặc trái pháp luật hoặc mất mát hoặc tiêu hủy hoặc thiệt hại cho thông tin của bạn.
- Chúng tôi khuyên quý khách không nên đưa thông tin chi tiết về việc thanh toán với bất kỳ ai bằng e-mail, chúng tôi không chịu trách nhiệm về những mất mát quý khách có thể gánh chịu trong việc trao đổi thông tin của quý khách qua internet hoặc email.
- Quý khách tuyệt đối không sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống website. Mọi vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.
- Mọi thông tin giao dịch sẽ được bảo mật nhưng trong trường hợp cơ quan pháp luật yêu cầu, chúng tôi sẽ buộc phải cung cấp những thông tin này cho các cơ quan pháp luật.
Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh bởi luật pháp Việt Nam và tòa án Việt Nam có thẩm quyền xem xét.
3. Quyền lợi khách hàng
-Quý khách có quyền yêu cầu truy cập vào dữ liệu cá nhân của mình, có quyền yêu cầu chúng tôi sửa lại những sai sót trong dữ liệu của bạn mà không mất phí. Bất cứ lúc nào bạn cũng có quyền yêu cầu chúng tôi ngưng sử dụng dữ liệu cá nhân của bạn cho mục đích tiếp thị.</pre>
								</div>
							</div>
						</div>
						<div class="modal-wrapper hide" id="service_term">
							<div class="modal" style="display: inline-block;">
								<div class="modal-header">
									<h2 class="modal-title">Điều khoản sử dụng</h2>
									<span class="close" data-toggle="#service_term" data-toggle-class="hide">×</span>
								</div>
								<div class="modal-body">
									<pre class="term-preview">HƯỚNG DẪN MUA HÀNG
Bước 1: Truy cập website và lựa chọn sản phẩm cần mua để mua hàng
Bước 2:  Click và sản phẩm muốn mua, màn hình hiển thị ra pop up với các lựa chọn sau:
Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn thêm sản phẩm vào giỏ hàng
Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng
Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào: Đặt hàng và thanh toán
Bước 3: Lựa chọn thông tin tài khoản thanh toán
Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và mật khẩu vào mục đã có tài khoản trên hệ thống
Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng theo dõi được đơn hàng của mình
Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục đặt hàng không cần tài khoản
Bước 4: Điền các thông tin của bạn để nhận đơn hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình
Bước 5: Xem lại thông tin đặt hàng, điền chú thích và gửi đơn hàng
Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.
Trân trọng cảm ơn.</pre>
								</div>
							</div>
						</div>
					</div>

				</main>
			</div>
		</form>
	</div>

</body>

</html>