<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cẩm nang du lịch</title>
    <LINK REL="SHORTCUT ICON"  HREF="http://localhost/webtravel/public/image/leaf.png">
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
        <link rel="stylesheet" href="http://localhost/webtravel/public/css/themify-icons.css">
        <link rel="stylesheet" href="http://localhost/webtravel/public/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
       <style>
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
.row1 > .column1 {
  padding: 0px;

}
/*đây*/
.column1 {
  float: left;
  width: 31%;
  margin-left: 2%;
/*  border: 1px solid;*/
}
.row1:after {
  content: "";
  display: table;
  clear: both;
}
.content {
  background-color: white;
  font-size: 15px;
  border-radius: 2px;
  margin-bottom: 20px;

}

@media screen and (max-width: 900px) {
  .column1 {
    width: 50%;
    margin-left: 0px;
  }
}
@media screen and (max-width: 600px) {
  .column1{
    width: 100%;
  }
}
.image1 {
  display: inline-block;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%;
  transition-duration: 0.2s;
  height: 180px;
  border-radius: 5px;
}
.p1{
    overflow: hidden; /* Ẩn số text bị thừa*/
    text-overflow: ellipsis;/*Cắt một đoạn text và thay thế bằng dấu ...*/
    line-height: 25px;
    -webkit-line-clamp: 1; /*Số dòng text hiển thị.*/
    height: 25px;
    font-size: 15px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    font-weight: bold;
 }
 .p2{
  overflow: hidden; /* Ẩn số text bị thừa*/
    text-overflow: ellipsis;/*Cắt một đoạn text và thay thế bằng dấu ...*/
    line-height: 28px;
    -webkit-line-clamp: 2; /*Số dòng text hiển thị.*/
    height: 60px;
    font-size: 15px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
 }
.p1:hover{
  color:#005fbf;
}
.pagination li{             
              font-size: 15px;
            }
            .pagination {
             justify-content: center;
             }
             .img-hover-zoom img {
  transition: transform .5s ease;
}
.img-hover-zoom {
  height: auto; 
  overflow: hidden; 
  width: 100%;
}
.img-hover-zoom:hover img {
  transform: scale(1.5);
}
./* Slow-motion Zoom Container */
.img-hover-zoom--slowmo img {
  transform-origin: 50% 65%;
  transition: transform 8s, filter 3s ease-in-out;
  filter: brightness(150%);
}

/* The Transformation */
.img-hover-zoom--slowmo:hover img {
  filter: brightness(100%);
  transform: scale(1.5);
}
       </style> 
</head>
<body>
@include('home.menubar')
<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading" style="font-family: 'Lato'">
            <h2>Cẩm nang du lịch</h2>
            <p>Cẩm nang thông tin về du lịch, văn hóa, ẩm thực, các sự kiện và lễ hội tại các điểm đến Việt nam, Đông Nam Á và Thế Giới.</p>
        </div>
    </div>
    <div class="row">
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
            <div class="row" style="margin-top: 5%">
                <div class="row1">
                     @foreach ($artical as $values)
                     <div class="column1">
                      <div class="content">
                        <div class="img-hover-zoom img-hover-zoom--slowmo">
                        <a href="http://localhost/webtravel/public/detailartical/{{$values->IDArticle}}" style="text-decoration: none;color:black">
                        <img src="{{$values->Image}}" class="image1">
                        </div>
                       <div style="padding:5px;">
                        <p class="p1">{{$values->NameArticle}}</p>
                        <p class="p2">{{$values->Review}}</p>
                        </a>
                       </div>
                      </div>
                   </div>
                     @endforeach      
                </div>
            </div>
            <div class="row" align="center">
              {!!$artical->links()!!}
            </div>
        </div>
   </div>
</div>
@include('home.footer')
</body>
</html>