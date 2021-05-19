@extends('brach_product')

@section('content')
<style>
 	#cart_items{
 		width: 100%;
 	}
 	.table.table-condensed{
 		max-width: 100%;
 	}
 	.table.table-condensed {
 		width: 100%;
 	}
 	.table-responsive.cart_info{
 		width: 55vw;
 	}
 	.a{
 		color: white;
 	}

</style>
	<section id="cart_items">
		<div class="container">
			
			  @if(session()->has('message'))
                    <div class="alert alert-success" >
                        {!! session()->get('message') !!}
                    </div>
                @elseif(session()->has('error'))
                     <div class="alert alert-danger">
                        {!! session()->get('error') !!}
                    </div>
                @endif
			<div class="table-responsive cart_info">

				<form  class="form-check-out"action="{{url('/update-cart')}}" method="POST">
					@csrf
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu" style="background-color: #26a69a">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sản phẩm</td>
							<td class="description">S/L còn</td>
							<td class="price">Giá sản phẩm</td>
							<td class="quantity">S/L dặt</td>
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
								<p class="a" style="color:white">{{$cart['product_name']}}</p>
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4>
								<p class="a" style="color:white">{{$cart['product_quantity']}}</p>
							</td>
							<td class="cart_price">
								<p class="a" style="color:white">{{number_format($cart['product_price'],0,',','.')}}đ</p>
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
							<td><input type="submit" value="Cập nhật số lượng" name="update_qty" class="check_out btn btn-default btn-sm"></td>
							<td><a class="btn btn-default check_out" href="{{url('/del-all-product')}}">Xóa tất cả</a></td>
							<td>
								@if(Session::get('coupon'))
	                          	<a class="btn btn-default check_out" href="{{url('/unset-coupon')}}">Xóa mã khuyến mãi</a>
								@endif
							</td>

							<td>
								@if(Session::get('customer_id'))
	                          	<a class="btn btn-default check_out" href="{{url('/checkout')}}">Đặt hàng</a>
	                          	@else 
	                          	<a class="btn btn-default check_out" href="{{url('/login-checkout')}}">Đặt hàng</a>
								@endif
							</td>

							
							<td colspan="2">
							<li style="color:white;font-size: 120%;">Tổng tiền :<span style="color:white">{{number_format($total,0,',','.')}}đ</span></li>
							
						{{-- 	<li>Thuế <span></span></li>
							<li>Phí vận chuyển <span>Free</span></li> --}}
							
							
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
			

				</table>

			</div>
		</div>

	</section> <!--/#cart_items-->

<section id="slider" style="width: 95%;margin-left:10%;height: 50vh;">
		<div class="slider" style="height: 100%">
  <div class="slides">
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">
    
    <div class="slide first">
      <img src={{('https://cdn.tgdd.vn/2021/05/banner/hotsale-tt-830-300-830x300.png')}}>
    </div>
    <div class="slide">
      <img src={{('https://cdn.tgdd.vn/2021/05/banner/reno5-830-300-830x300-1.png')}}>
    </div>
    <div class="slide">
      <img src={{('https://cdn.tgdd.vn/2021/05/banner/830-300-830x300-15.png')}}>
    </div>
    <div class="slide">
      <img src={{('https://cdn.tgdd.vn/2021/05/banner/hotsale-sm-830-300-830x300.png')}}>
    </div>
    
    <div class="navigation-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
      <div class="auto-btn4"></div>

    </div>
    <div class="navigation-manual" >
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>

    </div>
  </div>
</div>
</section>	

@endsection