@extends('website.layouts.master2')
@section('title')
Ten san pham
@endsection
@section('content')
@include("website.blocks.breadcumb", ['element' => 'show','name' => 'Tài khoản', 'url' => route('profile'), 'param' => $order->order_id])
<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 class="title-headding order-headding">Đơn hàng</h1>				
				<span class="note order_date"><i>Ngày tạo — {{$order->created_at->format("d/m/Y H:m")}}</i>
					<a class="color_main" href="{{route('profile')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Quay lại trang tài khoản</a>
				</span>

				
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div id="order_payment" class="span6 box-address margin-top-20">
					<div class="box-header">
						<h2 class="title-head">Địa chỉ thanh toán</h2>
						<p>
							Trạng thái thanh toán:
							
							<i class="status_pending">
								
								Chưa thanh toán
								
							</i>
							
						</p>
					</div>
					<div class="address note">
						<p><i class="fa fa-user"></i><a href="tel:{{$order->customer->customer_phone}}">{{$order->customer->customer_name}}</a></p>
						<p><i class="fa fa-map-marker"></i> 
            {{$order->customer->customer_ward}}, {{$order->customer->customer_district}}, {{$order->customer->customer_city}}
            @if($order->customer->customer_country != '')
              , {{$order->customer->customer_country}}
            @endif 
          </p>						
						<p><i class="fa fa-phone"> </i><a href="tel:{{$order->customer->customer_phone}}">{{$order->customer->customer_phone}}</a></p>
						
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				
				<div id="order_shipping" class="span6 box-address margin-top-20">
					<div class="box-header">
						<h2 class="title-head">Địa chỉ giao hàng</h2>
						<p>
							Trạng thái vận chuyển:
							
							<i class="status_">
								
								Chưa giao hàng
								
							</i>
							
						</p>
					</div>
					<div class="address note">
						<p><i class="fa fa-user"></i>{{$order->customer->customer_name}}</p>
						<p><i class="fa fa-map-marker"></i> 
            {{$order->customer->customer_ward}}, {{$order->customer->customer_district}}, {{$order->customer->customer_city}},             {{$order->customer->customer_ward}}, {{$order->customer->customer_district}}
            @if($order->customer->customer_country != '')
              , {{$order->customer->customer_country}}
            @endif  
						</p>						
						<p><i class="fa fa-phone"></i>{{$order->customer->customer_phone}}</p>
					</div>
				</div>
				
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="table-responsive-block margin-top-20">
					<table id="order_details" class="table table-cart">
						<thead class="thead-default">
							<tr>
								<th>Sản phẩm</th>
								<th>Mã sản phẩm</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Tổng</th>
							</tr>
						</thead>
						<tbody>
              @php
                $total = 0;
                $fee = 0;
              @endphp
							@foreach($order->orderDetails as $item)
                @php
                  $total += $item->price * $item->quantity;
                @endphp
							<tr>
								<td data-title="Tên">
									<a href="{{route('product', $item->product->product_slug)}}">{{$item->product->product_name}}</a>								
								</td>
								<td data-title="Mã SKU">---</td>
								<td data-title="Giá" class="numeric">{{number_format($item->price, 0, ',', '.')}}₫</td>
								<td data-title="Số lượng" class="numeric">{{$item->quantity}}</td>
								<td data-title="Tổng" class="numeric">{{number_format($item->price * $item->quantity, 0, ',', '.')}}₫</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>			
			<div class="col-xs-12 col-sm-12 col-md-12">				
				<table class="table totalorders">					
					<tfoot>
						<tr class="order_summary ">
							<td class="fix-width-200">Tạm tính:</td>								
							<td class="total money right">{{number_format($total, 0, ',', '.')}}₫</td>
						</tr>   
						
						
						<tr class="order_summary ">
							<td class="fix-width-200" colspan="">Phí vận chuyển ():</td>
              <?php
                if($order->orderDetails[0]->shippingMethod == "Shop liên hệ báo phí ship sau: 1₫"){
									$fee = 1;
								}	else if($order->orderDetails[0]->shippingMethod == "Giao Hàng Tiết Kiệm (Tạm tính): 30.000₫"){
									$fee = 30000;
								} else if($order->orderDetails[0]->shippingMethod == "Giao Hàng Nhanh (Tạm tính) - Đường hàng không: 100.000₫"){
									$fee = 100000;
								}
								else{
									$fee = 60000;
								}
              ?>
							<td class="total money right">{{number_format($fee, 0, ',', '.')}}₫</td>
						</tr>
						
						<tr class="order_summary order_total">
							<td class="fix-width-200">Tổng tiền:</td>								
							<td class="right"><strong>{{number_format($total + $fee, 0, ',', '.')}}₫ </strong></td>
						</tr>   
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</section>
@endsection