@extends('brach_product')
@section('content')
<style>
	.table-responsive.cart_info{
		width: 55vw;
	}	
	#cart_items.cart_info.cart_menu{
		background-color: black;
	}

</style>
<section id="cart_items">
	<div class="container">
		
		<div class="register-req">
			<p>Làm ơn đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
		</div><!--/register-req-->

		<div class="shopper-informations">
			<div class="row">
				
				<div class="col-sm-12 clearfix">
					<div class="bill-to">
						<p style="color:white">ĐIỀN THÔNG TIN ĐƠN HÀNG</p>
						<div class="form-one" style="border:1px solid white">
							<form method="POST" action="{{URL::to('/save-checkout-customer')}}" >
								@csrf
								<input type="text" name="shipping_email" class="shipping_email" placeholder="Điền email">
								<input type="text" name="shipping_name" class="shipping_name" placeholder="Họ và tên người gửi">
								<input type="text" name="shipping_address" class="shipping_address" placeholder="Địa chỉ gửi hàng">
								<input type="text" name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại">
								<textarea name="shipping_notes" class="shipping_notes" placeholder="Ghi chú đơn hàng của bạn" rows="5"></textarea>
								
								@if(Session::get('fee'))
								<input type="hidden" name="order_fee" class="order_fee" value="{{Session::get('fee')}}">
								@else 
								<input type="hidden" name="order_fee" class="order_fee" value="25000">
								@endif

								@if(Session::get('coupon'))
								@foreach(Session::get('coupon') as $key => $cou)
								<input type="hidden" name="order_coupon" class="order_coupon" value="{{$cou['coupon_code']}}">
								@endforeach
								@else 
								<input type="hidden" name="order_coupon" class="order_coupon" value="no">
								@endif
								
								
								
								<div class="">
									<div class="form-group">
										<label for="exampleInputPassword1">Chọn hình thức thanh toán</label>
										<select name="payment_select"  class="form-control input-sm m-bot15 payment_select">
											<option value="0">Qua chuyển khoản</option>
											<option value="1">Tiền mặt</option>   
										</select>
									</div>
								</div>
								<input style="height: 7vh; background-color: #26a69a; color:white; font-weight: 700;" type="button" value="Xác nhận đơn hàng" name="send_order" class="btn btn-primary btn-sm send_order">
							</form>
							<form >
								@csrf 
								
								<div class="form-group">
									<label for="exampleInputPassword1">Chọn thành phố</label>
									<select name="city" id="city" class="form-control input-sm m-bot15 choose city">
										
										<option value="">--Chọn tỉnh thành phố--</option>
										@foreach($city as $key => $ci)
										<option value="{{$ci->matp}}">{{$ci->name_city}}</option>
										@endforeach
										
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Chọn quận huyện</label>
									<select name="province" id="province" class="form-control input-sm m-bot15 province choose">
										<option value="">--Chọn quận huyện--</option>
										
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Chọn xã phường</label>
									<select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
										<option value="">--Chọn xã phường--</option>   
									</select>
								</div>
								
								
								<input style="height: 7vh; background-color:#26a69a; color:white;font-weight: 700;"  type="button" value="Tính phí vận chuyển" name="calculate_order" class="btn btn-primary btn-sm calculate_delivery">


							</form>

						</div>
						
					</div>
				</div>
				<div class="col-sm-12 clearfix">
					@if(session()->has('message'))
					<div class="alert alert-success">
						{!! session()->get('message') !!}
					</div>
					@elseif(session()->has('error'))
					<div class="alert alert-danger">
						{!! session()->get('error') !!}
					</div>
					@endif
					<div class="table-responsive cart_info">

						<form action="{{url('/update-cart')}}" method="POST">
							@csrf
							<table class="table table-condensed">
								<thead>
									<tr class="cart_menu" style="background-color: #26a69a;">
										<td class="image">Hình ảnh</td>
										<td class="description">Tên sản phẩm</td>
										<td class="price">Giá sản phẩm</td>
										<td class="quantity">Số lượng</td>
										<td class="total">Thành tiền</td>
										<td></td>
									</tr>
								</thead>
								<tbody>
									@if(Session::get('cart')==true)
									@php
									$total = 0;
									@endphp
									@foreach(Session::get('cart') as $key => $cart)
									@php
									$subtotal = $cart['product_price']*$cart['product_qty'];
									$total+=$subtotal;
									@endphp

									<tr>
										<td class="cart_product">
											<img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" width="90" alt="{{$cart['product_name']}}" />
										</td>
										<td class="cart_description">
											<h4><a href=""></a></h4>
											<p style="color:white">{{$cart['product_name']}}</p>
										</td>
										<td class="cart_price">
											<p style="color:white">{{number_format($cart['product_price'],0,',','.')}}đ</p>
										</td>
										<td class="cart_quantity">
											<div class="cart_quantity_button">
												
												
												<input style="color:white" class="cart_quantity" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}"  >
												
												
											</div>
										</td>
										<td class="cart_total">
											<p class="cart_total_price" style="color:white">
												{{number_format($subtotal,0,',','.')}}đ
												
											</p>
										</td>
										<td class="cart_delete">
											<a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
										</td>
									</tr>
									
									@endforeach
									<tr>
										<td><input  type="submit" value="Cập nhật số lượng" name="update_qty" class="check_out btn btn-default btn-sm"></td>
										<td><a class="btn btn-default check_out" href="{{url('/del-all-product')}}">Xóa tất cả</a></td>
										<td>
											@if(Session::get('coupon'))
											<a class="btn btn-default check_out" href="{{url('/unset-coupon')}}">Xóa mã khuyến mãi</a>
											@endif
										</td>

										
										<td colspan="2">
											<li >Tổng tiền :<span >{{number_format($total,0,',','.')}}đ</span></li>
											@if(Session::get('coupon'))
											<li>
												
												@foreach(Session::get('coupon') as $key => $cou)
												@if($cou['coupon_condition']==1)
												Mã giảm : {{$cou['coupon_number']}} %
												<p style="color:white">
													@php 
													$total_coupon = ($total*$cou['coupon_number'])/100;
													
													@endphp
												</p>
												<p style="color:white">
													@php 
													$total_after_coupon = $total-$total_coupon;
													@endphp
												</p>
												@elseif($cou['coupon_condition']==2)
												Mã giảm : {{number_format($cou['coupon_number'],0,',','.')}} k
												<p style="color:white">
													@php 
													$total_coupon = $total - $cou['coupon_number'];
													
													@endphp
												</p>
												@php 
												$total_after_coupon = $total_coupon;
												@endphp
												@endif
												@endforeach
												
												

											</li>
											@endif

											@if(Session::get('fee'))
											<li>	
												<a class="cart_quantity_delete" href="{{url('/del-fee')}}"><i class="fa fa-times"></i></a>

												Phí vận chuyển <span style="color:white">{{number_format(Session::get('fee'),0,',','.')}}đ</span></li> 
												<?php $total_after_fee = $total + Session::get('fee'); ?>
												@endif 
												<li>Tổng còn:
													@php 
													if(Session::get('fee') && !Session::get('coupon')){
													$total_after = $total_after_fee;
													echo number_format($total_after,0,',','.').'đ';
												}elseif(!Session::get('fee') && Session::get('coupon')){
												$total_after = $total_after_coupon;
												echo number_format($total_after,0,',','.').'đ';
											}elseif(Session::get('fee') && Session::get('coupon')){
											$total_after = $total_after_coupon;
											$total_after = $total_after + Session::get('fee');
											echo number_format($total_after,0,',','.').'đ';
										}elseif(!Session::get('fee') && !Session::get('coupon')){
										$total_after = $total;
										echo number_format($total_after,0,',','.').'đ';
									}

									@endphp
								</li>
								
							</td>
						</tr>
						@else 
						<tr>
							<td colspan="5"><center>
								@php 
								echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
								@endphp
							</center></td>
						</tr>
						@endif
					</tbody>

					

				</form>
				@if(Session::get('cart'))
				<tr><td>

					<form method="POST" action="{{url('/check-coupon')}}">
						@csrf
						<input type="text" class="form-control" name="coupon" placeholder="Nhập mã giảm giá"><br>
						<input type="submit" class="btn btn-default check_coupon" name="check_coupon" value="Tính mã giảm giá">
						
					</form>
				</td>
			</tr>
			@endif

		</table>

	</div>
</div>

</div>
</div>




</div>
</section> <!--/#cart_items-->
<script>
	<script type="text/javascript">

	$(document).ready(function(){
		$('.send_order').click(function(){
			swal({
				title: "Xác nhận đơn hàng",
				text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Cảm ơn, Mua hàng",

				cancelButtonText: "Đóng,chưa mua",
				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm){
				if (isConfirm) {
					var shipping_email = $('.shipping_email').val();
					var shipping_name = $('.shipping_name').val();
					var shipping_address = $('.shipping_address').val();
					var shipping_phone = $('.shipping_phone').val();
					var shipping_notes = $('.shipping_notes').val();
					var shipping_method = $('.payment_select').val();
					var order_fee = $('.order_fee').val();
					var order_coupon = $('.order_coupon').val();
					var _token = $('input[name="_token"]').val();

					$.ajax({
						url: '{{url('/confirm-order')}}',
						method: 'POST',
						data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
						success:function(){
							swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
						}
					});

					window.setTimeout(function(){ 
						location.reload();
					} ,3000);

				} else {
					swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

				}

			});


		});
	});


</script>
</script>

@endsection