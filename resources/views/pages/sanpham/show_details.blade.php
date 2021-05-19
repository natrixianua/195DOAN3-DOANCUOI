@extends('brach_product')
@section('content')
@foreach($product_details as $key => $value)
<style>
		.title.text-center	{
		font-size: 140%;
	}
	.product-information{
		border-radius: 10px;
	}
	.btn.btn-primary.btn-sm.add-to-cart:hover{
		background-color: #26a69a;
	}
	.breadcrumb{
		background-color: transparent;
		position: absolute;


	}
	.product-image-wrapper{
		border: 2px dotted white;
	}
	.breadcrumb li{
		font-size: 80%;

	}
	.breadcrumb:hover li a{
		background-color: transparent;
		
	}
	.category-tab ul{
		background-color: white;
	}
	.product-image-wrapper img{
		transition: 0.3s ease-out;
	}
	.product-image-wrapper:hover img{
		transform: translate(0, -5%);
	}
	#details{
		background-color: white;
		height: 15vh;
	}
	#cart_items.cart_info.cart_menu{
		background-color: black;
	}
	.image:hover{
		background-color: transparent;
	}
	
</style>
@foreach($product_details as $key => $value)
<div class="product-details"><!--product-details-->
<nav  aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
				<li class="breadcrumb-item"><a href="{{URL::to('/danh-muc/'.$cate_slug)}}">{{$product_cate}}</a></li>
				<li style="color:white"class="breadcrumb-item active" aria-current="page">{{$meta_title}}</li>
			</ol>
		</nav>
	<div class="col-sm-5">

		<div class="view-product">
			<img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt="" />

		</div>

	</div>
	<div class="col-sm-7">
		
		<div class="product-information"><!--/product-information-->
			<img src="images/product-details/new.jpg" class="newarrival" alt="" />
			<h2 style="color:white">{{$value->product_name}}</h2>
			<p style="color:black">Mã ID: {{$value->product_id}}</p>
			<img src="images/product-details/rating.png" alt="" />

			<form action="{{URL::to('/save-cart')}}" method="POST">
				@csrf
				<input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">

				<input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">

				<input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">

				<input type="hidden" value="{{$value->product_quantity}}" class="cart_product_quantity_{{$value->product_id}}">

				<input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">

				<span>
					<span>{{number_format($value->product_price,0,',','.').'VNĐ'}}</span>

					<label style="color:white; margin-top: 3%;">SỐ LƯỢNG</label>
					<input style="color:#fff" name="qty" type="number" min="1" class="cart_product_qty_{{$value->product_id}}"  value="1" />
					<input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
				</span>
				<input type="button" value="Thêm giỏ hàng" class="btn btn-primary btn-sm add-to-cart" data-id_product="{{$value->product_id}}" name="add-to-cart">
			</form>

			<p style="color:white"><b>Tình trạng:</b> Còn hàng</p>
			<p style="color:white"><b>Điều kiện:</b> Mơi 100%</p>
			<p style="color:white"><b>Số lượng kho còn:</b> {{$value->product_quantity}}</p>
			<p style="color:white"><b>Thương hiệu:</b> {{$value->brand_name}}</p>
			<p style="color:white"><b>Danh mục:</b> {{$value->category_name}}</p>
			<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
		</div><!--/product-information-->
	</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
			<li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>

			<li ><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane fade active in" id="details" >
			<p>{!!$value->product_desc!!}</p>

		</div>

		<div class="tab-pane fade" id="companyprofile" >
			<p>{!!$value->product_content!!}</p>


		</div>

		<div class="tab-pane fade" id="reviews" >
			<div class="col-sm-12">
				<ul>
					<li><a href=""><i class="fa fa-user"></i>Admin</a></li>
					<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
					<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
				</ul>
				<style type="text/css">
					.row.style-comment {
					    border: 1px solid #ddd;
					    border-radius: 10px;
					    background: aliceblue;
					}

				</style>
				<form>
					@csrf
					<input type="hidden" name="comment_product_id" class="comment_product_id" value="{{$value ->product_id}}">
					<div id="comment_show"></div>
				</form>

				<p><b>Viết đánh giá của bạn</b></p>

				<form action="#">
					<span>
						<input style="margin-left: 0;" type="text" class=" comment_name" placeholder="Your Name"/>
						
					</span>
					<textarea name="comment" class="comment_content" placeholder="Comment" ></textarea>
					<div id="notify_comment"></div>
					<b>Đánh giá sao: </b> <img src="images/product-details/rating.png" alt="" />
					<button type="button" class="btn btn-default pull-right send-comment">
						Gửi bình luận
					</button>
					
				</form>
			</div>
		</div>

	</div>
</div><!--/category-tab-->
@endforeach
<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">SẢN PHẨM LIÊN QUAN</h2>

 
	@foreach($relate as $key => $lienquan)
	<div class="col-sm-4">
		<div class="product-image-wrapper" >
			<div class="single-products" style="height: 55vh">
				<div class="productinfo text-center product-related">
					<a class="image" href="{{URL::to('/chi-tiet/'.$lienquan->product_slug)}}">
					<img src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}" alt="" />
					<p  style="color:black;">{{$lienquan->product_name}}</p>
					<h2 style="color:white; ">{{number_format($lienquan->product_price,0,',','.').' '.'VNĐ'}}</h2>
					
	</a>
				</div>

			</div>
		</div>
	</div>
	@endforeach		


</div><!--/recommended_items-->
{{--   <ul class="pagination pagination-sm m-t-none m-b-none">
	{!!$relate->links()!!}
</ul> --}}
@endforeach
@endsection
