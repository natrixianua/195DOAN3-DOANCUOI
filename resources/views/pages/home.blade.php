@extends('layout')
@section('content')
<style>
  .product-image-wrapper{
  height: 45vh;
   border: 1px dotted black;
   position: relative;
   
   width: 100%;
   text-align: center;
 }   
 .single-products{
    height: 100%;
    position: absolute;
    top: 5%;
   }
   .single-products a{
    height: 100%;
    width: 100%;
   }
    .productinfo.text-center{
        height: 100%; 
         background-size: cover;  
    }
     .product-image-wrapper img{
        width: 80%;
        height: 80%;
        transition: 0.5s ease-out;
     }
    .product-image-wrapper:hover img{
      transform: translate(0, -5%);

    }
    

    .features_items{
     
        width: 100%;
    }
  .pagination.pagination-sm.m-t-none.m-b-none{
    margin-left: 30%;
  }
  
  .page-item a:hover{
border-radius: 10px;
background-color: #26a69a;
}   
.btn.btn-default.add-to-cart{
    position: absolute;
    left: 20%;
}

.title.text-center{
    color: black;
    font-size: 150%;
}
.single-products img{
  background-size: cover;
}
 .single-products img :hover{
  background-color: transparent;
 }

</style>
<div class="features_items"><!--features_items-->
       
                        <h2 class="title text-center">SẢN PHẨM MỚI NHẤT</h2>
                        
                        @foreach($all_product as $key => $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                           
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <form>
                                                @csrf
                                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                          
                                            <input type="hidden" value="{{$product->product_quantity}}" class="cart_product_quantity_{{$product->product_id}}">
                                            
                                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                                            <a class="image" href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                                <p style="color:red;font-weight: 700;">{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</p>
                                                <h6 style="color:black;">{{$product->product_name}}</h6>

                                             
                                             </a>
                                            
                                            </form>

                                        </div>
                                      
                                </div>
                           
                              
                            </div>
                        </div>
                        @endforeach
                    </div><!--features_items-->
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$all_product->links()!!}
                      </ul>
        <!--/recommended_items-->
@endsection