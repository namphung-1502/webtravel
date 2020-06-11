<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Animate.css -->
  <link rel="stylesheet" href="http://localhost/webtravel/public/css/animate.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="http://localhost/webtravel/public/css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="http://localhost/webtravel/public/css/bootstrap.css">
  <link rel="stylesheet" href="http://localhost/webtravel/public/css/owl.theme.default.min.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="http://localhost/webtravel/public/css/style.css">
<link href='https://fonts.googleapis.com/css?family=Cantata One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<style>
.avatar{
  width: 24px;
  height: 24px;
  border-radius: 50%;  
}
</style>
  </head>
  <body>
  <div id="page">
  <!-- <div class="page-inner"> -->
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      <div class="row">
        <div class="col-sm-3 col-xs-12">
          <div id="gtco-logo"><a href="index.html" style="font-family:'Rock Salt'">NKTravel<em></em></a></div>
        </div>
        <div class="col-xs-9 text-right menu-1">
          <ul>
          <li><a href="{{route('homepage')}}" style="font-family:'Cantata One'">Trang chủ</a></li>
            <li><a href="{{route('aboutus')}}" style="font-family:'Cantata One'">Giới thiệu</a></li>
            <li class="has-dropdown">
            <a href="{{route('domestic')}}" style="font-family:'Cantata One'">Trong nước</a>
              <ul class="dropdown">
                <li><a href="http://localhost/webtravel/public/resultlink/1/Miền Bắc">Miền Bắc</a></li>
                <li><a href="http://localhost/webtravel/public/resultlink/1/Miền Trung">Miền Trung</a></li>
                <li><a href="http://localhost/webtravel/public/resultlink/1/Miền Nam">Miền Nam</a></li>
              </ul>
            </li>
            <li class="has-dropdown">
              <a href="{{route('foreign')}}" style="font-family:'Cantata One'">Nước ngoài</a>
              <ul class="dropdown" style="width:160px;">
                <li><a href="http://localhost/webtravel/public/resultlink/2/Châu Á">Châu Á</a></li>
                <li><a href="http://localhost/webtravel/public/resultlink/2/Châu Âu">Châu Âu</a></li>
                <li><a href="http://localhost/webtravel/public/resultlink/2/Châu Mỹ">Châu Mỹ</a></li>
                <li><a href="http://localhost/webtravel/public/resultlink/2/Châu Phi">Châu Phi</a></li>
                <li><a href="http://localhost/webtravel/public/resultlink/2/Châu Đại Dương">Châu Đại Dương</a></li>
              </ul>
            </li>
            <li><a href="{{route('totalartical')}}" style="font-family:'Cantata One'">Cẩm nang du lịch</a></li>
            <li><a href="{{route('contact')}}" style="font-family:'Cantata One'">Liên hệ</a></li>
            <li class="has-dropdown" style="margin-right:50px;">
                <a href="#" style="font-family:'Cantata One'">Khác</a>
                @if(Session::get('user_name')!=null)
                <ul class="dropdown">
                  <?php $user=Session::get('user_name');?>
                <li><a href="#"><img src="http://localhost/webtravel/public/image/avatar.png"> {{$user[0]['NameCustomer']}}</a></li>
                  <li><a href="{{route('cart')}}"><img src="http://localhost/webtravel/public/image/cart16.png"> Giỏ hàng</a></li>
                  <li><a href="{{route('logout')}}"><img src="http://localhost/webtravel/public/image/logout.png"> Đăng xuất</a></li>
                </ul>
                @elseif(Session::get('user')!=null)
                <ul class="dropdown">
                   <li><a href="#"><img src="{{Session::get('user')->avatar}}" class="avatar"> {{Session::get('user')->name}}</a></li>
                  <li><a href="{{route('cart')}}"><img src="http://localhost/webtravel/public/image/cart16.png"> Giỏ hàng</a></li>
                  <li><a href="{{route('logout3')}}"><img src="http://localhost/webtravel/public/image/logout.png"> Đăng xuất</a></li>
                </ul>
                @else
                <ul class="dropdown">
                  <li><a href="{{route('logincustomer')}}"> Đăng nhập</a></li>
                  <li><a href="{{route('register')}}">Đăng ký</a></li>
                  <li><a href="{{route('cart')}}"> Giỏ hàng</a></li>
                  </ul>
                @endif        
              </li>
              <li>
              </li>
          </ul> 
        </div>
      </div>
    </div>
  </nav>
  <header id="gtco-header"  role="banner">
      @include('home.banner')
  </header> 
  </div>

  
  <!-- jQuery -->
  <script src="http://localhost/webtravel/public/js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="http://localhost/webtravel/public/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="http://localhost/webtravel/public/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="http://localhost/webtravel/public/js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="http://localhost/webtravel/public/js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="http://localhost/webtravel/public/js/jquery.countTo.js"></script>

  <!-- Stellar Parallax -->
  <script src="http://localhost/webtravel/public/js/jquery.stellar.min.js"></script>

  <!-- Magnific Popup -->
  <script src="http://localhost/webtravel/public/js/jquery.magnific-popup.min.js"></script>
  <script src="http://localhost/webtravel/public/js/magnific-popup-options.js"></script>
  
  <!-- Datepicker -->
  <script src="http://localhost/webtravel/public/js/bootstrap-datepicker.min.js"></script>
  

  <!-- Main -->
  <script src="http://localhost/webtravel/public/js/main.js"></script>

  </body>
</html>

