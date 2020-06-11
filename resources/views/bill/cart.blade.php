<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <LINK REL="SHORTCUT ICON"  HREF="http://localhost/webtravel/public/image/leaf.png">
    <title>Giỏ hàng</title>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alice' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
         .breadcrumb{
       
       font-size: 16px;
       font-family: Arial, sans-serif;
   }
   .image{
     width: 100px;
     height: 80px;
   }
     table tr td{
     text-align: center;
     font-family: 'Lato',Arial, sans-serif;
   }
   table tr th{
     text-align: center;
   }
   table{
     border-bottom: 0.3mm solid #ccc;
   }
    </style>
</head>
<body>
    @include('home.menubar2');
    <div class="col-xs-12 a-left" style="padding:0;">
        <ul class="breadcrumb" style="padding:15px 26px 15px 26px;">					
            <li class="home">
            <a itemprop="url" href="{{route('homepage')}}" style="color:black;text-decoration: none"><span>Trang chủ</span></a>						
            <span ><i class="fa fa-angle-double-right"></i></span> <span> <b>Giỏ hàng</b></span>
            </li> 
          </ul>
    </div>
    <div class="container" style="margin-top: 20px;">
        @if(isset($booked))
          <div class="row">
            <div class="table-responsive">
              <table class="table">
                 <tr>
                   <th>STT</th>
                 <th>Tên tour</th>
                 <th>Ảnh</th>
                 <th>Ngày khởi hành<br><span style="font-size: 13px;font-weight: normal">(YY/MM/DD)</span></th>
                 <th>Người lớn</th>
                 <th>Trẻ em</th>
                 <th>Em bé</th>
                 <th>Tổng tiền</th>
                 <th>Trạng thái</th>
                 </tr>
                 <?php $i=1?>
                 @foreach($booked as $value)
                 <tr>
                 <td>{{$i}}</td>
                 <td>{{$value->bill()->first()->NameTour}}</td>
                   <td><img src="{{$value->bill()->first()->Image}}" class="image"></td>
                   <td>{{$value->bill()->first()->Day}}</td>
                   <td>{{$value->Adult}}</td>
                   <td>{{$value->Young}}</td>
                   <td>{{$value->Baby}}</td>
                   <td>{{$value->TotalMoney}} VNĐ</td>
                    <td>{{$value->Status}}</td>
                 <td><button class="btn btn-danger" style="font-size: 15px;padding:5px 10px 5px 10px;" id="delete{{$i}}" onclick="DeleteTour(this.id,'{{$value->IDBill}}','{{$value->Username}}')">HỦY</button></td>
                   <?php $i++ ?>
                  </tr>
                 @endforeach    
              </table>
             </div>
          </div>
          <p style="font-family: 'Andika';font-size: 20px;color:#007fff;font-weight: bold;vertical-align: bottom">Cảm ơn đã sử dụng dịch vụ của chúng tôi !!</p>
           @else
            <div class="row"><p style="font-size: 20px;font-weight: bold;">Bạn không có tour nào trong giỏ hàng cả  !!!!</p></div> 
          @endif
 
         </div>
     @include('home.footer')
</body>
<script>
    $.ajaxSetup({
             headers:{
             	'X-CSRF-TOKEN':$('[name=csrf_token]').attr('content')
             }
		 });
  function DeleteTour(id,idbill,name)
  {
    $('#'+id).html('Đã hủy');
    event.preventDefault()
         $.ajax({
          url:'{{route('deletetour')}}',
          type:'post',
          data: {id:idbill,ten:name},
          success:function(kq){
              console.log(kq);
          }
         })
         .done(function(){
            console.log('done');
         })
         .fail(function(){
            console.log('fail');
         })     
         .always(function(){
             console.log('alway');
         });
  }
</script>
</script>
</html>