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
@endsection
@section('content')
<style>
 .active.styling-edit{
  background-color: transparent;
  color: black;
  font-weight: 700;
 } 
</style>  
    <div class="table-agile-info" style="width: 80%;margin-left: 10%;">
  <div class="panel panel-default" >
    <div class="panel-heading" style="text-align: center;padding-top: 6%;font-weight: 700;">
      Liệt kê đơn hàng
    </div>
    <div class="row w3-res-tb">
     
     
    
    </div>
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
            <th>Thứ tự</th>
            <th>Mã đơn hàng</th>
            <th>Ngày tháng đặt hàng</th>
            <th>Tình trạng đơn hàng</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @php 
          $i = 0;
          @endphp
          @foreach($gethis as $key => $ord)
            @php 
            $i++;
            @endphp
          <tr>
            <td><i>{{$i}}</i></label></td>
            <td>{{ $ord->order_code }}</td>
            <td>{{ $ord->created_at }}</td>
            <td>@if($ord->order_status==1)
                    Đơn hàng mới
                @else 
                    Đã xử lý
                @endif
            </td>
           
           
            <td>
              <a href="{{URL::to('/view-history-order/'.$ord->order_code)}}" class="active styling-edit" ui-toggle-class="">
                Xem đơn hàng</a>

            
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
      <div class="row">
        
     
        <div class="col-sm-12 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {!!$gethis->links()!!}
          </ul>
        </div>
      </div>

   
  </div>
</div>

@endsection