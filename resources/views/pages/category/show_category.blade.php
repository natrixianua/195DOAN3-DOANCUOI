@extends('brach_product')
@section('product')
  <div class="swiper-container">
      <div class="swiper-wrapper">
        <div id="id1" class="swiper-slide">Slide 1</div>
        <div id="id2"class="swiper-slide">Slide 2</div>
        <div id="id3"class="swiper-slide">Slide 3</div>
        <div id="id4" class="swiper-slide">Slide 4</div>

      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div id="id5" class="swiper-slide">Slide 1</div>
        <div id="id6"class="swiper-slide">Slide 2</div>
        <div id="id7"class="swiper-slide">Slide 3</div>
        <div id="id8" class="swiper-slide">Slide 4</div>

      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
@endsection
@section('content')
<style>
    .title.text-center{
        color: black;
        border-bottom:  2px solid black;
        font-style: italic;
    }
.btn.btn-default.add-to-cart:hover{
    background-color: #26a69a;
}

.chitiet:hover{
   background-color: transparent;
}
.product-image-wrapper{
    height: 60vh;
    border:1px dotted white;
}
.product-image-wrapper img{
    transition: 0.5s;
    height: 60%;
}
.product-image-wrapper:hover img{
    transform: translate(0, -5%)
}.product-image-wrapper:hover .btn.btn-default.add-to-cart{
    transform: scale(0, 150%;)
}
.pagination.pagination-sm.m-t-none.m-b-none{
    margin-left: 45%;
  }
  
</style>
<div><!--features_items-->
                       
                        @foreach($category_name as $key => $name)
                       
                        <h2 class="title text-center">{{$name->category_name}}</h2>

                        @endforeach
                        @foreach($category_by_id as $key => $product)
                        <a  href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                        <div class="col-sm-4">
                             <div class="product-image-wrapper" >
                           
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <form>
                                                @csrf
                                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_quantity}}" class="cart_product_quantity_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                                            <a class="chitiet" href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                                <h2 style="color:white;">{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h2>
                                                <h6 style="color:black; ">{{$product->product_name}}</h6>

                                             
                                             </a>
                                            <input style="border-radius: 10px" type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">
                                            </form>

                                        </div>
                                      
                                </div>
                           
                              
                            </div>
                        </div>
                        </a>
                        @endforeach
                           <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$category_by_id->links()!!}
                    </ul>
                    </div><!--features_items-->
                

        <!--/recommended_items-->
@endsection