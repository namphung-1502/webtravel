<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour trong nước</title>
    <LINK REL="SHORTCUT ICON"  HREF="http://localhost/webtravel/public/image/leaf.png">
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
        <link rel="stylesheet" href="http://localhost/webtravel/public/css/themify-icons.css">
        <link rel="stylesheet" href="http://localhost/webtravel/public/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://localhost/webtravel/public/css/themify-icons.css">
        <link rel="stylesheet" href="http://localhost/webtravel/public/css/style.css">  
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <style>
            .pagination li{             
              font-size: 15px;
            }
            .pagination {
             justify-content: center;
}
#sl select{
  padding:12px 15px 12px 10px;
  width: 100%;
  border-radius: 0px;
  font-size: 15px;
  display: none;
}
#sl option{
  font-size: 15px;
  color:#7f7f7f;
}
        </style>
</head>
<body>
    @include('home.menubar')
    <div class="container">
        <div class="gtco-section">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading" style="font-family: 'Lato'">
                        <h2>Tour Trong Nước</h2>
                        <p>Tour du lịch trong nước tại NKTravel. Hành hương đầu xuân - Tận hưởng bản sắc Việt</p>
                    </div>
                </div>
                <div class="row" id="sl">
                    <button class="btn btn-primary;border:none;" style="font-size: 15px" id="filter">Tìm kiếm <img src="http://localhost/webtravel/public/image/filter.png"></button>
                    <div class="col-sm-3" id="">
                        <select name="area" id="area">
                           <option value="0" selected>Danh mục tour</option>
                           <option value="Miền Bắc">Miền Bắc</option>
                           <option value="Miền Trung">Miền Trung</option>
                           <option value="Miền Nam">Miền Nam</option>
                        </select>
                      </div>
                      <div class="col-sm-3">
                        <select name="money" id="money">
                          <option value="0" selected>Theo giá</option>
                          <option value="1"> Dưới 500.000 VNĐ</option>
                          <option value="2"> Từ 500.000 - 2.000.000 VNĐ</option>
                          <option value="3"> Từ 2.000.000 - 5.000.000 VNĐ</option>
                          <option value="4"> Từ 5.000.000 - 10.000.000 VNĐ</option>
                          <option value="5"> Trên 10.000.000 VNĐ</option>
                        </select>
                      </div>
                      <div class="col-sm-3">
                          <button class="btn btn-basic" style="font-size: 15px;display:none;padding:10px 15px 10px 10px;" id="remove"><span class="glyphicon glyphicon-remove"></span> Đóng</button>
                      </div>
                      <div class="col-sm-3"></div>
                      <hr>
                </div>
                <div class="row" style="font-family: 'Lato';margin-top: 20px;" id="domestic">
                    @foreach($tour as $value)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="http://localhost/webtravel/public/detailtour/{{$value->IDTour}}" class="fh5co-card-item">
                            <figure>
                                <div class="overlay"></div>
                            <img src="{{$value->Image}}" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>{{$value->NameTour}}</h2>
                                <p></p>
                                <p style="text-align: left"><span style="color: #ffaaaa;font-size: 20px;">{{number_format($value->Money)}}đ</span><span style="float: right;"><img src="http://localhost/NKTravel/public/image/icon.png"> <img src="http://localhost/NKTravel/public/image/plane2.png"></span></p>
                                <p style="text-align: left;font-size: 16px;"><img src="http://localhost/NKTravel/public/image/appointment.png" style="width: 8%"> Khởi hành: {{$value->DepartureDay}}</p>
                                <p style="text-align: left;font-size: 16px;"><img src="http://localhost/NKTravel/public/image/calendar.png" style="width: 8%"> Thời gian
                                 : <?php echo $value->Howlong?></p>
                                <p><span class="btn btn-primary">Xem chi tiết</span></p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div> 
            {!!$tour->links()!!}
    </div>
    @include('home.footer')
</body>
<script>
    $(document).ready(function()
    {
      $('#filter').on('click',function()
      {
         $('#area').fadeIn();
         $('#money').fadeIn();
         $('#remove').fadeIn();
         $('#filter').css({'display':'none'});
      });
      $('#remove').on('click',function()
      {
         $('#area').fadeOut();
         $('#money').fadeOut();
         $('#remove').fadeOut();
         $('#filter').fadeIn();
         $.ajax({
          url:'{{route('filterdomestic')}}',
          type:'post',
          data: {tien:0,khuvuc:0},
          success:function(kq){
             $('#domestic').html(kq)
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
      });
      $.ajaxSetup({
             headers:{
             	'X-CSRF-TOKEN':$('[name=csrf_token]').attr('content')
             }
		 });
         $('#area').on('change',function()
    {
         var area=$('#area').val();
         var money=$('#money').val();
         $.ajax({
          url:'{{route('filterdomestic')}}',
          type:'post',
          data: {tien:money,khuvuc:area},
          success:function(kq){
             $('#domestic').html(kq)
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

    });
    $('#money').on('change',function(){
      var area=$('#area').val();
         var money=$('#money').val();
         $.ajax({
          url:'{{route('filterdomestic')}}',
          type:'post',
          data: {tien:money,khuvuc:area},
          success:function(kq){
             $('#domestic').html(kq)
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

    });
    });
</script>
</html>