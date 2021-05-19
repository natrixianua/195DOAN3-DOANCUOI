@extends('brach_product')
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
    transform: translate(0, -5%);
   
}
.product-image-wrapper:hover a{
     background-color: transparent;
}
.pagination.pagination-sm.m-t-none.m-b-none{
    margin-left: 45%;
  }
     .btn.btn-default.add-to-cart{
        border-radius: 10px;
     }
</style>
<div class="features_items"><!--features_items-->

                        @foreach($brand_name as $key => $name)
                       
                        <h2 class="title text-center">{{$name->brand_name}}</h2>

                        @endforeach
                        @foreach($brand_by_id as $key => $product)
                        <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                           
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <form>
                                                @csrf
                                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                                            <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                                <h2>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h2>
                                                <h6 style="color:black">{{$product->product_name}}</h6>

                                             
                                             </a>
                                            <input type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">
                                            </form>

                                        </div>
                                      
                                </div>
                           
                               
                            </div>
                    
                        </div>
                        </a>
                        @endforeach
                    </div><!--features_items-->
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$brand_by_id->links()!!}
                      </ul>

        <!--/recommended_items-->
@endsection