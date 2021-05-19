@extends('brach_product')
@section('content')
<style>
 .features_items{
    height: 40%;
    width: 100%;
  
 }  

 #item{
    border: 1px solid black;
    height: 100%;
 }
 #item img{
    width: 80%;
    height: 80% ;
    margin-top: 5%;
    transition: 0.5s;
 } 
 #item {
text-align: center;
 }
  #item input{
    margin-left: 30%;
    margin-top: 5%;
  }
  #item:hover img{
    transform: translate(0, -5%);
  }
</style>
<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Kết quả tìm kiếm</h2>
                       @foreach($search_product as $key => $product)
                        <div class="col-sm-4" id="item">
                               <form>
                                                @csrf
                                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                          
                                            <input type="hidden" value="{{$product->product_quantity}}" class="cart_product_quantity_{{$product->product_id}}">
                                            
                                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                                            <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                                <p style="color:red;font-weight: 700;">{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</p>
                                                <strong style="color:white;">{{$product->product_name}}</strong>

                                             
                                             </a>
                                            <input style="display: block; border-radius: 10px; " type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">
                                            </form>
                        </div>
                        @endforeach
                    </div><!--features_items--> 
        <!--/recommended_items-->
@endsection