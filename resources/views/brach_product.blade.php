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
  <link href="{{asset('fullll.css')}}" rel="stylesheet">

  <link href="{{asset('section2.css')}}" rel="stylesheet">
  <link href="{{('responsivefrontend.css')}}" rel="stylesheet"> 
  <link href="{{('brach_product.css')}}" rel="stylesheet">
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
 <header>
  <div id="clock">
  <div id="time">
    <div><span id="hour">00</span><span>HOURS</span></div>
    <div><span id="minutes">00</span><span>Minutes</span></div>
    <div><span id="seconds">00</span><span>Seconds</span></div>
  </div>
</div>

   <!-- /header -->
   <div class="header-bottom" style="overflow: hidden"><!--header-bottom-->
    <div class="container">

      <div class="row" >

        <div class="col-sm-1">
          <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>


        </div>

        <div class="col-sm-8">
          <div class="shop-menu pull-right">
            <ul id="navmenu"class="nav navbar-nav navbar-collapse">

             <li><a href="{{URL::to('/trang-chu')}}" class="active"><i class="fa fa-home"></i>TRANG CHỦ</a></li>

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
       <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> THANH TOÁN</a></li>
       <?php
     }
     ?>


     <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> GIỎ HÀNG</a></li>

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
     <?php
     $customer_id = Session::get('customer_id');
     if($customer_id!=NULL){ 
     ?>
     <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>ĐĂNG XUẤT</a></li>

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
<div class="col-sm-3">
  <form action="{{URL::to('/tim-kiem')}}" autocomplete="off" method="POST">
    {{csrf_field()}}
    <div class="search_box">

      <input type="text" style="width: 100%" name="keywords_submit" id="keywords" placeholder="Tìm kiếm sản phẩm"/>
      <div id="search_ajax"></div>

      <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm ">

    </div>
  </form>
</div>

</div>
</div>
</div>
<!-- swiper -->

<!-- Add Pagination -->


<!--  -->
<div class="navside" >
 
  <ul  id="slide-out" class="sidenav sidenav-fixed" style="background-color: transparent; width: 18vw">

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





<!-- slide -->
   <!--  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://images.search.yahoo.com/images/view;_ylt=Awr9Hr6BI4RgUjAAb76JzbkF;_ylu=c2VjA3NyBHNsawNpbWcEb2lkAzY3MTBhMzA3N2ZkNGI5NzZhZTFlYTlmMDJmOGUxY2E5BGdwb3MDMwRpdANiaW5n?back=https%3A%2F%2Fimages.search.yahoo.com%2Fsearch%2Fimages%3Fp%3D%25E1%25BA%25A3nh%2Bgame%26fr%3Dmcafee%26fr2%3Dpiv-web%26tab%3Dorganic%26ri%3D3&w=1920&h=1280&imgurl=wall.vn%2Fwp-content%2Fuploads%2F2020%2F04%2Fhinh-nen-game-dep-6.jpg&rurl=https%3A%2F%2Fwall.vn%2Fhinh-nen-game-full-hd-dep-sieu-net.html&size=533.0KB&p=%E1%BA%A3nh+game&oid=6710a3077fd4b976ae1ea9f02f8e1ca9&fr2=piv-web&fr=mcafee&tt=Chia+s%E1%BA%BB+100+h%C3%ACnh+n%E1%BB%81n+game+Full+HD+%C4%91%E1%BA%B9p+si%C3%AAu+n%C3%A9t+cho+game+th%E1%BB%A7&b=0&ni=21&no=3&ts=&tab=organic&sigr=_ew7ZpOTLf7X&sigb=Dey4DC1hqrBQ&sigi=cDY9cSsLHtsG&sigt=iZXAsuKSKqZi&.crumb=eDNy1GN/WZz&fr=mcafee&fr2=piv-web" alt=""></a>
    <a class="carousel-item" href="#two!"></a>
    <a class="carousel-item" href="#three!"></a>
    <a class="carousel-item" href="#four!"></a>
    <a class="carousel-item" href="#five!"></a>
  </div> -->
  <div class="features_items"><!--features_items-->

    <div class="row">
     <div class="col-sm-2"></div>
     <div class="col-sm-8" >
      @yield('content')
    </div><!--features_items-->
    <div class="col-sm-2" >
   @yield('product')
  </div>
</div>
</div>
</header>
<footer style="background-color: #808080">
    <div  class="col-sm-12" style="background-color: #808080" >
             <ul class="info" style="display: flex;text-align: center; margin-left: 18%;">
                 <li>
                     <span><i style="color:white;"class="fa fa-map-marker"></i></span>
                     <span style="color:white;">193 Nguyễn Lương Bằng 
                         Hòa khánh bắc, Thành Phố Đà Nẵng
                         Việt Nam</span>
                 </li>
                 <li>
                     <span><i style="color:white;" class="fa fa-phone"></i></span>
                     <p><a  style="color:white;" href="#">+84 967855754</a>
                   
                 </li>
                 <li>
                     <span><i  style="color:white;"class="fa fa-envelope"></i></span>
                     <p><a style="color:white;" href="#">dnd.hoang@gmail.com</a></p>
                </li>
              </ul>
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
  $(document).ready(function(){  

    load_comment();

        function load_comment(){
              var product_id = $('.comment_product_id').val();
              var _token = $('input[name="_token"]').val();
              $.ajax({
              url:'{{url('/load-comment')}}',
              method:"POST",
              data:{product_id:product_id, _token:_token},
              success:function(data){
               
                $('#comment_show').html(data);
              }
             });
        }    
        $('.send-comment').click(function(){
            var product_id = $('.comment_product_id').val();
            var comment_name = $('.comment_name').val();
            var comment_content = $('.comment_content').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:'{{url('/send-comment')}}',
              method:"POST",
              data:{product_id:product_id,comment_name:comment_name,comment_content:comment_content, _token:_token},
              success:function(data){
                $('#notify_comment').html('<span style="color:white;font-size:150%;" class="text text-success" >Thêm bình luận thành công , bình đang chờ kiểm duyệt</span>');
                load_comment();
                $('#notify_comment').fadeOut(7000);
                $('.comment_name').val('');
                $('.comment_content').val('');
              }
             });

        });
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
  var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    slidesPerView: 1,
    spaceBetween: 30,
    mousewheel: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
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
</body>
</html>