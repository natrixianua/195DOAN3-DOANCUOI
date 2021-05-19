<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!---------Seo--------->
  <meta name="description" content="{{$meta_desc}}">
  <meta name="keywords" content="{{$meta_keywords}}"/>
  <meta name="robots" content="INDEX,FOLLOW"/>
  <link  rel="canonical" href="{{$url_canonical}}" />
  <meta name="author" content="">
  <link  rel="icon" type="image/x-icon" href="" />

  {{--   <meta property="og:image" content="{{$image_og}}" />  
  <meta property="og:site_name" content="http://localhost/tutorial_youtube/shopbanhanglaravel" />
  <meta property="og:description" content="{{$meta_desc}}" />
  <meta property="og:title" content="{{$meta_title}}" />
  <meta property="og:url" content="{{$url_canonical}}" />
  <meta property="og:type" content="website" /> --}}
  <!--//-------Seo--------->
  <title>{{$meta_title}}</title>

  <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">


  <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
  <!--     <link href="header.css" rel="stylesheet"> -->
  <link href="{{asset('full.css')}}" rel="stylesheet">
  <link href="{{asset('section2.css')}}" rel="stylesheet">
  <link href="{{('responsivefrontend.css')}}" rel="stylesheet"> 
    <link href="{{asset('layout.css')}}" rel="stylesheet">
  <!--      -->
  <link href="{{asset('public/frontend/css/jquery.convform.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->       
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="shortcut icon" href="{{('public/frontend/images/favicon.ico')}}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

  <header id="header" > 

    <div class="auto" >
     <h5>CHÀO MỪNG BẠN ĐẾN SHOP CAM KẾT 
      <span
      class="text"
      data-period="4000"
      data-rotate='[ "UY TÍN.", "CHẤT LƯỢNG.", "NHIỆT HUYẾT.", "HỖ TRỢ 24/7." ]'></span>

    </h4>
  </div><!--header-->
  <!-- <span  class="close"><i class="fa fa-minus-circle"></i></span>
  <div class="chaticon">
   <i  class="fa fa-comments" ></i>
 </div>
 <div class="chatbot">
  <div id="chat" class="conv-form-wrapper">
   <form action="" method="GET" class="hidden">
    <select name="programmer" data-conv-question="Hello! Tôi là chat bot của ADMIN PHÚC NGUYỄN! Bạn muốn hỗ trợ về?" name="first-question">
      <option value="yes">Sản phẩm</option>
      <option value="no">Chi Phí</option>
    </select>
    <input type="text" name="name" data-conv-question="Vui lòng nhập tên của bạn">
    <input type="text" data-conv-question="Chào {name}:0! Rất vui được gặp bạn" data-no-answer="true">


    <div data-conv-fork="programmer">
      <div data-conv-case="yes">

        <input type="text" data-conv-question="Vui long chọn thương hiệu bạn muốn hỗ trợ!" data-no-answer="true">

        <select name="sanpham" data-conv-question="Khi bạn Click sẽ được chuyển đến các sản phẩm hiện có!">
          <option value="apple" >Apple</option>
          <option value="dior" data-callback="dior">Dior</option>
          <option value="chanel" data-callback="chanel">Chanel</option>
          <option value="samsung" data-callback="samsung">Samsung</option>
        </select>
        <div data-conv-fork="sanpham">
          <div data-conv-case="apple">
           <input type="text" data-conv-question="Đây là tất cả sảm phẩm Apple hiện có bên shop" data-no-answer="true">
           @foreach($category as $key => $thuonghieu)
           <input type="text" data-conv-question="{{$thuonghieu->category_name}}" data-no-answer="true">
           @endforeach
         </div>

       </div>

     </div>
     <div data-conv-case="no">
      <select name="thought" data-conv-question="Vui lòng chọn hình thức thanh toán">
        <option value="Online">Online</option>
        <option value="Offline">Trực Tiếp</option>
      </select>
      <div data-conv-fork="thought">
        <div data-conv-case="Online">
          <input type="text" data-conv-question="Miễn phí vận chuyển" data-no-answer="true">

        </div>
        <div data-conv-case="Offline">
         <input type="text" data-conv-question="25000vnd" data-no-answer="true">
       </div>
     </div>
   </div>
 </div>
 <input data-conv-question="Nhập số điện thoại để bộ phận sẽ liên hệ hỗ trợ {name}:0" data-pattern="^\d{3}[-\s]?\d{3}[-\s]?\d{4}$" id="email" type="email" name="email" required placeholder="What's your e-mail?">

 <input data-conv-question="Tôi sẽ sớm liên lạc!!" data-no-answer="true">

 <select data-conv-question="Nếu có bất kì liên hệ nào bạn có thể liên lạc qua số điện thoại : 0774525140" id="">
  <option   value="">Kết thúc</option>
</select>
</form>


</div>
</div> -->





<div class="header-bottom"><!--header-bottom-->
  <div class="container">
    <div class="row">
     <div class="col-sm-10">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="mainmenu pull-left">
        <ul class="nav navbar-nav collapse navbar-collapse">
          <li><a href="{{URL::to('/trang-chu')}}" class="active"><i class="fa fa-home"></i>TRANG CHỦ</a></li>
          <li class="dropdown"><a href="#">SẢN PHẨM<i class="fa fa-angle-down"></i></a>
            <ul role="menu" class="sub-menu">
              @foreach($category as $key => $danhmuc)
              <li><a href="{{URL::to('/danh-muc/'.$danhmuc->slug_category_product)}}">{{$danhmuc->category_name}}</a></li>
              @endforeach
            </ul>
          </li> 



          <?php
          $customer_id = Session::get('customer_id');
          $shipping_id = Session::get('shipping_id');
          if($customer_id!=NULL && $shipping_id==NULL){ 
           ?>
           <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>THANH TOÁN</a></li>

           <?php
         }elseif($customer_id!=NULL && $shipping_id!=NULL){
           ?>
           <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i>THANH TOÁN</a></li>
           <?php 
         }else{
          ?>
          <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i>THANH TOÁN</a></li>
          <?php
        }
        ?>


        <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> GIỎ HÀNG</a></li>
        <!--  -->

        @php
        $customer_id = Session::get('customer_id');
        if($customer_id!=NULL){ 
        @endphp

        <li>
          <a href="{{URL::to('history')}}"><i class="fa fa-bell"></i> LỊCH SỬ ĐƠN HÀNG </a>

        </li>


        @php
      }
      @endphp
      <!--  -->
      <?php
      $customer_id = Session::get('customer_id');
      if($customer_id!=NULL){ 
       ?>
       <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> ĐĂNG XUẤT</a></li>

       <?php
     }else{
       ?>
       <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> ĐĂNG NHẬP</a></li>
       <?php 
     }
     ?>
   </ul>
 </div>
</div>
<div class="col-sm-2">
  <form action="{{URL::to('/tim-kiem')}}" autocomplete="off" method="POST">
    {{csrf_field()}}
    <div class="search_box">

      <input type="text" style="width: 100%" name="keywords_submit" id="keywords" placeholder="Tìm kiếm sản phẩm"/>
      <div id="search_ajax"></div>
      <span class="microphone"><i class="fa fa-microphone"></i></span>
      <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">

    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="welcome" >
  <div class="w"> <h2 >W</h2></div>
  <div class="e"> <h2 >E</h2></div>
  <div class="l"> <h2 >L</h2></div>
  <div class="c"> <h2 >C</h2></div>
  <div class="o"> <h2 >O</h2></div>
  <div class="m"> <h2 >M</h2></div>
  <div class="e1">    <h2 >E</h2></div>

  <div class="t"> <h2 >t</h2></div>
  <div class="o1">    <h2 >o</h2></div>


  <div class="f"> <h2 >S</h2></div>
  <div class="u"> <h2 >H</h2></div>
  <div class="c1"><h2 >O</h2></div>
  <div class="k"> <h2 >P</h2></div>

</div><!--/header-bottom-->
<div id="clock">
  <div id="time">
    <div><span id="hour">00</span><span>HOURS</span></div>
    <div><span id="minutes">00</span><span>Minutes</span></div>
    <div><span id="seconds">00</span><span>Seconds</span></div>
  </div>
</div>

</header><!--/header-->

<section id="slider" style="width: 100vw"><!--slider-->
 <div class="slider">
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
</section><!--/slider-->

<section class="container">
  <div class="container">

   <div class="navside" >

    <ul  id="slide-out" class="sidenav " style="background-color: transparent">
      <li><i class="fa fa-user" style="font-size: 150%;color:white;margin-left: 5%;"></i> 
        <?php
        $customer_name=Session::get('customer_name');

        if($customer_name){
          echo '<span style="color:white; margin-left:15%;transform:uppercase;">'.$customer_name.'</span>';
        }
        
        ?>

      </li>


      <div class="panel-group category-products" id="accordian">
        <h6 style="text-align: center; margin-bottom: 5vh; color:#FE980F;font-weight: 700;">DANH MỤC SẢN PHẨM</h6><!--category-productsr-->
        @foreach($category as $key => $cate)

        <ul class="panel panel-default">

          <li style=" background-color: transparent;"  class="panel-title"><a style="color:white" href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></li>

        </ul>
        @endforeach
      </div>


      <li><div class="divider"></div></li>
      <div class="panel-group category-products" >
        <h6 style="text-align: center; margin-bottom: 5vh; color:#FE980F;font-weight: 700;">THƯƠNG HIỆU SẢN PHẨM</h6><!--category-productsr-->
        @foreach($brand as $key => $brand)

        <ul class="panel panel-default">

          <li style=" background-color: transparent;"  class="panel-title"><a style="color:white" href="{{URL::to('/thuong-hieu/'.$brand->brand_slug)}}">{{$brand->brand_name}}</a></li>

        </ul>
        @endforeach
      </div>
    </ul>
  </div>


  <button  type="button" href="#" data-target="slide-out" class="sidenav-trigger confirm btn btn-lg btn-success" style="position:fixed;top:0;left:0;">DANH MỤC</button> 
  <div class="row">

   <div class="col-sm-12" >
     @yield('content')
   </div>
   <div class="producthome" >
     <h5>Đồng hồ nổi bật nhất</h5>
     <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">


       @foreach($showproduct as $key => $show)

       <div class="swiper-slide" style="border:1px dotted black; border-radius: 10px;">    
        <div class="single-products" style="position: relative">
          <div class="productinfo text-center">

            <a class="image" href="{{URL::to('/chi-tiet/'.$show->product_slug)}}">
              <img src="{{URL::to('public/uploads/product/'.$show->product_image)}}" alt="" />
              <p style="color:red;font-weight: 700;">{{number_format($show->product_price,0,',','.').' '.'VNĐ'}}</p>
              <h6>{{$show->product_name}}</h6>
            </a>
        <!--   <input style="display: block; border-radius: 10px; position: absolute; left:17%;" type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$show->product_id}}" name="add-to-cart">

        -->
      </div>

    </div>
  </div>

  @endforeach

</div>
<div  class="swiper-button-next" ></div>
<div class="swiper-button-prev"></div>

</div>
</div>

<div class="producthome" >
 <h5>LAPTOP nổi bật nhất</h5>
 <div class="swiper-container mySwiper">
  <div class="swiper-wrapper">


   @foreach($quan as $key => $show)

   <div class="swiper-slide" style="border:1px dotted black; border-radius: 10px;">    
    <div class="single-products" style="position: relative">
      <div class="productinfo text-center">

        <a class="image" href="{{URL::to('/chi-tiet/'.$show->product_slug)}}">
          <img src="{{URL::to('public/uploads/product/'.$show->product_image)}}" alt="" />
          <p style="color:red;font-weight: 700;">{{number_format($show->product_price,0,',','.').' '.'VNĐ'}}</p>
          <h6>{{$show->product_name}}</h6>
        </a>
        <!--  <input style="display: block; border-radius: 10px; position: absolute; left:17%;" type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$show->product_id}}" name="add-to-cart"> -->


      </div>

    </div>
  </div>

  @endforeach

</div>
<div  class="swiper-button-next" ></div>
<div class="swiper-button-prev"></div>

</div>
</div>
<div class="producthome" >
 <h5>ĐIỆN THOẠI nổi bật nhất</h5>
 <div class="swiper-container mySwiper">
  <div class="swiper-wrapper">


   @foreach($dongho as $key => $show)

   <div class="swiper-slide" style="border:1px dotted black; border-radius: 10px;">    
    <div class="single-products" style="position: relative">
      <div class="productinfo text-center">

        <a class="image" href="{{URL::to('/chi-tiet/'.$show->product_slug)}}">
          <img src="{{URL::to('public/uploads/product/'.$show->product_image)}}" alt="" />
          <p style="color:red;font-weight: 700;">{{number_format($show->product_price,0,',','.').' '.'VNĐ'}}</p>
          <h6>{{$show->product_name}}</h6>
        </a>
        <!--   <input style="display: block; border-radius: 10px; position: absolute; left:17%;" type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$show->product_id}}" name="add-to-cart"> -->


      </div>

    </div>
  </div>

  @endforeach

</div>
<div  class="swiper-button-next" ></div>
<div class="swiper-button-prev"></div>

</div>
</div>
<div class="producthome" >
 <h5>phụ kiện nổi bật nhất</h5>
 <div class="swiper-container mySwiper">
  <div class="swiper-wrapper">


   @foreach($ao as $key => $show)

   <div class="swiper-slide" style="border:1px dotted black; border-radius: 10px;">    
    <div class="single-products" style="position: relative">
      <div class="productinfo text-center">

        <a class="image" href="{{URL::to('/chi-tiet/'.$show->product_slug)}}">
          <img src="{{URL::to('public/uploads/product/'.$show->product_image)}}" alt="" />
          <p style="color:red;font-weight: 700;">{{number_format($show->product_price,0,',','.').' '.'VNĐ'}}</p>
          <h6>{{$show->product_name}}</h6>
        </a>
        <!-- <input style="display: block; border-radius: 10px; position: absolute; left:17%;" type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$show->product_id}}" name="add-to-cart">
        -->

      </div>

    </div>
  </div>

  @endforeach

</div>
<div  class="swiper-button-next" ></div>
<div class="swiper-button-prev"></div>

</div>
</div>



</div>
</section>


<footer>
 <div class="row">
  <div class="col-sm-4">
   <ul class="social">
     <li><a href="https://www.facebook.com/profile.php?id=100022865804555"><i class="fa fa-instagram"></i></a></li>



     <li><a href="https://www.facebook.com/profile.php?id=100022865804555"><i class="fa fa-youtube"></i></a></li>
   </ul>
   <h1 style="font-size: 120%; color:#26a69a;font-weight: 700;">VỀ CHÚNG TÔI:</h1>
   <p style="font-weight: 700;">We and our partners store and/or access information on a device, such as unique IDs in cookies to process personal data. You may accept or manage your choices by clicking below, including your right to object where legitimate interest is used, or at any time in the privacy policy page. These choices will be signaled to our partners and will not affect browsing data.</p>

 </div>
 <div class="col-sm-4">
   <ul class="menu-footer" >
     <li ><a href="#">Trang Chủ</a></li>

     <li><a href="{{url('lien-lac')}}">Thông Tin Liên Lạc</a></li>
     <li><a href="#">Dịch Vụ</a></li>
     <li><a href="#">Điều Kiện Chính Sách</a></li>
   </ul>
 </div>
 <div class="col-sm-4">
  <ul class="info">
   <li>
     <span><i class="fa fa-map-marker"></i></span>
     <span>193 Nguyễn Lương Bằng<br />
       Hòa khánh bắc, Thành Phố Đà Nẵng<br />
     Việt Nam</span>
   </li>
   <li>
     <span><i class="fa fa-phone"></i></span>
     <p><a href="#">+84 967855754</a>
       <br />
       <a href="#">+84 999999999</a></p>
     </li>
     <li>
       <span><i class="fa fa-envelope"></i></span>
       <p><a href="#">dnd.hoang@gmail.com</a></p>
     </li>
     <li>
       <form class="form">
         <input type="email" class="form__field" placeholder="Đăng Ký Subscribe Email" />
         <button type="button" class="btn btn--primary  uppercase">Gửi</button>
       </form>
     </li>
   </ul>
 </div>


</div>
</footer><!--/Footer-->




<script src="{{asset('public/frontend/js/jquery.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('public/frontend/js/main.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.convform.js')}}"></script> 
<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1"></script>

<script type="text/javascript">
  $('#keywords').keyup(function(){
    var query = $(this).val();

    if(query != '')
    {
     var _token = $('input[name="_token"]').val();

     $.ajax({
      url:"{{url('/autocomplete-ajax')}}",
      method:"POST",
      data:{query:query, _token:_token},
      success:function(data){
       $('#search_ajax').fadeIn();  
       $('#search_ajax').html(data);
     }
   });

   }else{

    $('#search_ajax').fadeOut();  
  }
});

  $(document).on('click', '.li_search_ajax', function(){  
    $('#keywords').val($(this).text());  
    $('#search_ajax').fadeOut();  
  }); 
</script>

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
<script type="text/javascript">
  $(document).ready(function(){
    $('.add-to-cart').click(function(){

      var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                  alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
                }else{

                  $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                    success:function(){

                      swal({
                        title: "Đã thêm sản phẩm vào giỏ hàng",
                        text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                        showCancelButton: true,
                        cancelButtonText: "Xem tiếp",
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "Đi đến giỏ hàng",
                        closeOnConfirm: false
                      },
                      function() {
                        window.location.href = "{{url('/gio-hang')}}";
                      });

                    }

                  });
                }

                
              });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.choose').on('change',function(){
      var action = $(this).attr('id');
      var ma_id = $(this).val();
      var _token = $('input[name="_token"]').val();
      var result = '';

      if(action=='city'){
        result = 'province';
      }else{
        result = 'wards';
      }
      $.ajax({
        url : '{{url('/select-delivery-home')}}',
        method: 'POST',
        data:{action:action,ma_id:ma_id,_token:_token},
        success:function(data){
         $('#'+result).html(data);     
       }
     });
    });
  });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.calculate_delivery').click(function(){
      var matp = $('.city').val();
      var maqh = $('.province').val();
      var xaid = $('.wards').val();
      var _token = $('input[name="_token"]').val();
      if(matp == '' && maqh =='' && xaid ==''){
        alert('Làm ơn chọn để tính phí vận chuyển');
      }else{
        $.ajax({
          url : '{{url('/calculate-fee')}}',
          method: 'POST',
          data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
          success:function(){
           location.reload(); 
         }
       });
      } 
    });
  });
</script>

<script>

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<script type="text/javascript">
  var counter = 1;
  setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4){
      counter =1 ;
    }
  },5000);
</script>
<script>
 function restore(stateWrapper, ready) {
  window.open("http://localhost/DOAN3/trang-chu");
  ready();
}
        // function apple(stateWrapper, ready) {
        //     window.open("http://localhost/DOAN3/thuong-hieu/apple");
        //     ready();
        // }
        // function dior(stateWrapper, ready) {
        //     window.open("http://localhost/shopbanhanglaravel/thuong-hieu/dior");
        //     ready();
        // }
        // function chanel(stateWrapper, ready) {
        //     window.open("http://localhost/shopbanhanglaravel/thuong-hieu/chanel");
        //     ready();
        // }
        // function samsung(stateWrapper, ready) {
        //     window.open("http://localhost/shopbanhanglaravel/thuong-hieu/samsung");
        //     ready();
        // }
        var rollbackTo = false;
        var originalState = false;
        function storeState(stateWrapper, ready) {
          rollbackTo = stateWrapper.current;
          console.log("storeState called: ",rollbackTo);
          ready();
        }
        function rollback(stateWrapper, ready) {
          console.log("rollback called: ", rollbackTo, originalState);
          console.log("answers at the time of user input: ", stateWrapper.answers);
          if(rollbackTo!=false) {
            if(originalState==false) {
              originalState = stateWrapper.current.next;
              console.log('stored original state');
            }
            stateWrapper.current.next = rollbackTo;
            console.log('changed current.next to rollbackTo');
          }
          ready();
        }
        function restore(stateWrapper, ready) {
          if(originalState != false) {
            stateWrapper.current.next = originalState;
            console.log('changed current.next to originalState');
          }
          ready();
        }
      </script>
      <script>
        $(document).ready(function(){
          $('.chaticon').click(function(event){
            $('.chatbot').toggleClass('active');
            $('.close').toggleClass('show')
            $('.close').toggleClass('animate__backInUp ')

          });


          $('.conv-form-wrapper').convform({selectInputStyle: 'disable'});
        })
      </script>
      <script>
        $(document).ready(function(){
          $('.close').click(function(event){
            $('.chatbot').removeClass('active');
            $('.close').removeClass('show');        })
        })
      </script>

      <script >
        var TxtRotate = function(el, toRotate, period) {
          this.toRotate = toRotate;
          this.el = el;
          this.loopNum = 0;
          this.period = parseInt(period, 10) || 4000;
          this.txt = '';
          this.tick();
          this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
          var i = this.loopNum % this.toRotate.length;
          var fullTxt = this.toRotate[i];

          if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
          }

          this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

          var that = this;
          var delta = 300 - Math.random() * 100;

          if (this.isDeleting) { delta /= 2; }

          if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
          }

          setTimeout(function() {
            that.tick();
          }, delta);
        };

        window.onload = function() {
          var elements = document.getElementsByClassName('text');
          for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtRotate(elements[i], JSON.parse(toRotate), period);
            }
          }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
  };
</script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
</script>

<script>
  const searchInput=document.querySelector('#keywords');
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
  const recognition = new SpeechRecognition();
  recognition.lang='vi-VI';
  recognition.continuous = false;
  const microphone=document.querySelector('.microphone');
  const handleVoice = (text)=>{
   console.log('text', text);
   const handledText = text.toLowerCase();
   searchInput.value =handledText;
 }
 microphone.addEventListener('click',(e)=>{
  e.preventDefault();
  recognition.start();
});
 recognition.onspeechend=()=>{
  recognition.stop();
}
recognition.onerror =(err)=>{
  console.error(err);

}
recognition.onresult=(e)=>{
  console.log('onresult',e);
  const text= e.result[0][0].transcript;
  handleVoice(text);
}
</script>
<script>
  function clock(){
   var hours=document.getElementById('hour');
   var minutes=document.getElementById('minutes');
   var seconds=document.getElementById('seconds');
   var h= new Date().getHours();
   var m= new Date().getMinutes();
   var s = new Date().getSeconds();
   hours.innerHTML = h;
   minutes.innerHTML = m;
   seconds.innerHTML = s;
 }
 var interval=setInterval(clock,1000);
</script>
<!-- Messenger Chat Plugin Code -->
<!-- Messenger Chat Plugin Code -->
<div id="fb-root" style="position: fixed;"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v10.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
attribution="biz_inbox"
page_id="100816745219589">
</div>
</body>
</html>