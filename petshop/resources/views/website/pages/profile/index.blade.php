@extends('website.layouts.master2')
@section('title')
Ten san pham
@endsection
@section('content')
@include("website.blocks.breadcumb", ['element' => 'hidden','name' => '', 'param' => 'Thông tin cá nhân'])
<section class="signup page_customer_account">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-main-acount">
				<div id="parent" class="row">
					<div id="a" class="col-xs-12 col-sm-12 col-lg-9 col-left-account">
						<div class="page-title m992">
							<h1 class="title-head margin-top-0"><a href="#">Trang khách hàng</a></h1>
						</div>
						<div class="form-signup name-account m992"> 
							<p><strong>Xin chào, <a href="{{route('address')}}" style="color:#f02b2b;">{{session()->get('auth')}}</a>&nbsp;!</strong></p>
						</div>
						<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
							
							<div class="my-account">
								<div class="dashboard">
									
									<div class="recent-orders">
										<div class="table-responsive tab-all" style="overflow-x:auto;">
											<table class="table table-cart" id="my-orders-table">
												<thead class="thead-default">
													<tr>
														<th>Đơn hàng</th>
														<th>Ngày</th>

														<th>Địa chỉ</th>
														<th>Giá trị đơn hàng</th>											
														<th>Trạng thái</th>
													</tr>
												</thead>

												<tbody>
                          @php
                            $total = 0;    
                          @endphp
													@foreach($customer->orders as $order)
                            @foreach($order->orderDetails as $item)
                              @php
                                $total += $item->price * $item->quantity
                              @endphp
                            @endforeach
													<tr class="first odd">
														<td><a href="{{route('order', $order->order_id)}}">#{{$order->order_id}}</a></td>
														<td>{{$order->created_at->format('d/m/Y H:m')}}</td>

														<td>
                              {{$customer->customer_address}}, {{{$customer->customer_city}}}
														</td>

														<td><span class="price">{{number_format($total, 0, ',', '.')}}₫</span></td>
														
														<td>
                              @if($order->order_status == 0)
                                <span>
                                  Bình thường
                                </span> 
                              @elseif($order->order_status == 1)  
                                <span>
                                  Đang giao hàng
                                </span> 
                              @elseif($order->order_status == 2)
                                <span>
                                  Thành công
                                </span>
                              @else
                                <span style="color: red !important">
                                  Đã hủy
                                </span> 
                              @endif
														</td>
													</tr>
													@endforeach
													
												</tbody>


											</table>

										</div>

										<div class="paginate-pages pull-right page-account text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
											
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					<div id="b" class="col-xs-12 col-sm-12 col-lg-3 col-right-account margin-top-20">
						<div class="block-account">
							<div class="block-title-account"><h5>Tài khoản của tôi</h5></div>
							<div class="block-content form-signup">
								<p>Tên tài khoản: <strong style="line-height: 20px;">{{$customer->customer_name}}!</strong></p>
								<p><i class="fa fa-home font-some" aria-hidden="true"></i>  <span>Địa chỉ: {{$customer->customer_address}}</span></p>
								<p><i class="fa fa-mobile font-some" aria-hidden="true"></i> <span>Điện thoại: {{$customer->customer_phone}}</span> </p>
								<p><i class="fa fa-map-marker font-some" aria-hidden="true"></i> <span> Địa chỉ 1: </span></p>
								<p><i class="fa fa-yelp font-some" aria-hidden="true"></i> <span> Công ty: </span></p>
								<p><i class="fa fa-plane font-some" aria-hidden="true"></i> <span> Quốc gia: {{$customer->customer_country}}</span></p> 
								<p><i class="fa fa-code font-some" aria-hidden="true"></i> <span> Zip code: </span></p>
								<p style="margin-top:20px;"><a href="{{route('address')}}" class="btn btn-full btn-primary">Sổ địa chỉ (2)</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection