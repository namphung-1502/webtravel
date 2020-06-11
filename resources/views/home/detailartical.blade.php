<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <LINK REL="SHORTCUT ICON"  HREF="http://localhost/webtravel/public/image/leaf.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <LINK REL="SHORTCUT ICON"  HREF="http://localhost/webtravel/public/image/leaf.png">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>Chi tiết</title>
    <style>
   .breadcrumb{
       
       font-size: 16px;
       font-family: Arial, sans-serif;
   }
   .navigation {
  width: 100%;
}
.mainmenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
 
}

.mainmenu a {
  display: block;
  background-color: white;
  text-decoration: none;
  padding: 10px;
  font-size: 15px;
  color: #000;
  font-family: 'Lato', Arial, sans-serif;
}
.mainmenu li ul li{
    margin-left: 10px;
}
.mainmenu a:hover {
  background-color: #56aaff;
    color:white;
    text-decoration: none;
}
.mainmenu li:hover .submenu {
  display: block;
  max-height: 200px;
}
.submenu a:hover {
  color:black;
}
.submenu {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
}

.avatar{
  vertical-align: middle;
  width: 50px;
  height: 50px;
  margin-right: 20px;
}
#table {
  margin-top: 20px;
  margin-bottom: 20px;
}
.add{
    background-color: #e5e5e5;
    border-radius: 5px;
    padding:10px 10px 10px 20px;
    font-size: 15px;
    font-family: 'Roboto', Arial, Helvetica, sans-serif;
    margin-bottom: 20px;
}
.add a{
    color:black;
    text-decoration: none;
    cursor: pointer;
   margin: 10px 0;
}
.add a:hover{
    color:blue;
    text-decoration: none;
}
    </style>
</head>
<body>
    @include('home.menubar2');
    <div class="col-xs-12 a-left" style="padding:0;">
        <ul class="breadcrumb" style="padding:15px 26px 15px 26px;">					
            <li class="home">
            <a itemprop="url" href="{{route('homepage')}}" style="color:black;text-decoration: none"><span>Trang chủ</span></a>						
            <span ><i class="fa fa-angle-double-right"></i></span> <span> Cẩm nang du lịch</span> <span><i class="fa fa-angle-double-right"></i></span><span style="color:blue"> {{$artical[0]['NameArticle']}}</span>
            </li> 
          </ul>
    </div>
    <div class="container">
        <div class="row" style="padding:20px 0;">
            <div class="col-sm-3">
                <p style="font-size: 17px;font-weight: bold">DANH MỤC</p>
                <hr>
                 <nav class="navigation">
                         <ul class="mainmenu">
                         <li><a href="{{route('homepage')}}">Trang chủ</a></li>
                           <li><a href="{{route('aboutus')}}">Giới thiệu</a></li>
                           <li><a href="{{route('domestic')}}">Tour trong nước <span class="glyphicon glyphicon-menu-down" style="float:right"></span></a>
                             <ul class="submenu">
                               <li><a href="">Miền Bắc</a></li>
                               <li><a href="">Miền Trung</a></li>
                               <li><a href="">Miền Nam</a></li>
                             </ul>
                           </li>
                           <li><a href="{{route('foreign')}}">Tour nước ngoài<span class="glyphicon glyphicon-menu-down" style="float:right"></a>
                             <ul class="submenu">
                               <li><a href="">Châu Á</a></li>
                               <li><a href="">Châu Âu</a></li>
                               <li><a href="">Châu Mỹ</a></li>
                               <li><a href="">Châu Úc</a></li>
                             </ul>
                           </li>
                           <li><a href="{{route('totalartical')}}">Cẩm nang du lịch</a></li>
                           <li><a href="{{route('contact')}}">Liên hệ</a></li>
                         </ul>
                       </nav>
               </div>
               <div class="col-sm-9">
               <p style="font-size: 25px;font-weight: 600;font-family: 'Lato', Arial, sans-serif"">{{$artical[0]['NameArticle']}}</p>
               <p style="color:#ccc;font-size: 15px;font-family: 'Lato', Arial, sans-serif"">Đăng bởi: <span style="color:#7f7f7f;font-weight: bold">{{$artical[0]['Writer']}}</span> vào lúc {{$artical[0]['Date']}}</p>
                <p style="font-size: 20px;font-family: Arial, Helvetica, sans-serif;">{!!$artical[0]['Content']!!}</p>
                 <div class="add">
                     <h2><b>Bài viết liên quan</b></h2>
                 <p><a href="http://localhost/webtravel/public/detailartical/2"><span class="glyphicon glyphicon-menu-right"></span> Tràng An cổ – điểm đến đang hot ở Ninh Bình </a></p>
                     <p><a href="http://localhost/webtravel/public/detailartical/3"><span class="glyphicon glyphicon-menu-right"></span> Mùa hoa phấn phủ hồng trời Bảo Lộc </a></p>
                     <p><a href="http://localhost/webtravel/public/detailartical/4"><span class="glyphicon glyphicon-menu-right"></span> Ai bảo Đà Lạt chỉ hợp style mơ mộng? Cool ngầu như đôi bạn thân này vẫn có cả rổ ảnh thần thái! </a></p>
                     <p><a href="http://localhost/webtravel/public/detailartical/5')}}"><span class="glyphicon glyphicon-menu-right"></span> Nét bình dị Việt Nam qua ảnh của tay máy Hà Lan </a></p>
                 </div>    
                <h3>Bình luận</h3>
                    <table id="table">
                       @foreach ($comment as $value)
                       <tr>
                          <td>
                             <div class="col-sm-3"><img src='http://localhost/NKTravel/public/image/avatar.jpg' class='avatar'></div>
                          <div class="col-sm-9"><span style="font-size: 16px;font-weight: bold">{{$value->Who}}</span>
                               <p style='color:#999;font-size:12px;'>{{$value->Date}}</p>
                              <p style="font-size: 15px;">{{$value->Content}}</p>
                             </div>
                          </td>
                     </tr>   
                       @endforeach        
                    </table>
                    <form>
                      <h3 style="margin-top: 20px;">Viết bình luận của bạn</h3>
                        <input type="text" id="name" name="name" style="padding: 8px 0px 8px 10px;border-radius: 7px;outline: none;border: 0.3mm solid #ccc;font-size: 15px;width: 100%" placeholder="Họ tên" required>
                        <input type="text" id="email" name="email" style="padding: 8px 0px 8px 10px;border-radius: 7px;outline: none;border: 0.3mm solid #ccc;font-size: 15px;width: 100%;margin-top: 1%" placeholder="Email" required>
                        <textarea name="comment" id="comment" rows="5" style="width:100%; padding: 8px 0px 8px 10px;border-radius: 7px;outline: none;font-size: 15px;margin-top: 1%" placeholder="Nội dung" required></textarea>
                        <input type="submit" id="submit" value="Gửi bình luận" class="btn btn-primary" style="padding:9px;font-size: 17px;border-radius: 5px;" id="submit">
                    </form> 
            </div>
        </div>
    </div>
</body>
<script>
  $(document).ready(function()
	{
		 $.ajaxSetup({
             headers:{
             	'X-CSRF-TOKEN':$('[name=csrf_token]').attr('content')
             }
		 });
         $('#submit').click(function()
         {  var trong = ' ';
         	var name = $('#name').val();
            var email=$('#email').val();
            var content=$('#comment').val();
            var currentdate = new Date(); 
            var datetime =currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " at "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();

            event.preventDefault()

         $.ajax({
          url:'{{route('xulicomment')}}',
          type:'post',
          data: {ten: name,email1:email, nd:content,id:<?php echo $artical[0]['IDArticle'] ?>,date:datetime},
          success:function(kq){
              $('#name').val(trong);
              $('#email').val(trong);
              $('#comment').val(trong);
              <?php $mydate=getdate(date("U")) ?>
              $('#table').append("<tr><td><div class='col-sm-3'><img src='http://localhost/NKTravel/public/image/avatar.jpg' class='avatar'></div><div class='col-sm-9'><span style='font-size: 16px;font-weight: bold'>"+name+"</span><p style='color:#999;font-size:12px;'>"+datetime+"</p><p style='font-size: 15px;'>"+content+"</p></div></td></tr>");
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