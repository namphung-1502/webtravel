<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
  <LINK REL="SHORTCUT ICON"  HREF="http://localhost/webtravel/public/image/leaf.png">
  <style type="text/css">
  .navbar .nav-item:not(:last-child) {
  margin-right: 35px;
}

.dropdown-toggle::after {
   transition: transform 0.15s linear; 
}

.show.dropdown .dropdown-toggle::after {
  transform: translateY(3px);
}

.dropdown-menu {
  margin-top: 0;
}
.dropdown-menu a{
  padding:9px 12px 9px 12px;
  font-size: 15px;
}
.navbar{
      margin-bottom: 0 !important;
       border: 0;
        font-size: 16px !important;
        color: white !important; 
        width: 100%;
        padding-bottom: 0px !important;
        padding-top: 0px !important;
     }
  
   .navbar li a, .navbar .navbar-brand { 
    padding-left: 10px;
    color:black !important;

  }
 .navbar .navbar-brand{
     padding-left: 120px;
     margin-right:130px;
  }
  .dropdown-menu  a:hover {
    background-color: #56aaff !important;
    font-weight: bold;
  } 
  .navbar li a{
      margin:0;
      font-family: 'Lato', Arial, sans-serif;
      font-size: 16px;
  }
  .dropdown-menu li a{
    background-color: white !important;
    color: black!important;
   }
   .nav-item a:hover{
     background-color: inherit !important;
   }

  @media screen and (max-width :768px)
  {
       #row1{
        display: none;
       }
       .navbar .navbar-brand{
     padding-left: 0px;
     margin-right:0px;
  }
  }
#row1 {
  font-size: 16px;
}

  </style>
</head>
<body>

      <div class="container-fluid">
        <div class="row" id="row1" style="background-color:#aad4ff;display: block;text-align: right;padding:10px 30px 10px 10px; ">
          @if(Session::get('user_name')!=null)
          <?php
          $user=Session::get('user_name');
         //  echo $user[0]['Name Customer'];
          ?>
          <span style="margin-right:10px;"><a href="{{route('cart')}}" style="color:#333333;text-decoration: none;"><img src="http://localhost/NKTravel/public/image/manager.png" style="width:16px;"> {{$user[0]['NameCustomer']}}</a></span>
          <span><a href="{{route('logout')}}" style="color:#333333;text-decoration: none;"><img src="http://localhost/NKTravel/public/image/login.png"> Đăng xuất</a></span>
          @elseif(Session::get('user')!=null)
          <span style="margin-right:10px;"><a href="{{route('cart')}}" style="color:#333333;text-decoration: none;"><img src="{{Session::get('user')->avatar}}" style="width:18px;border-radius: 50%"> {{Session::get('user')->name}}</a></span>
          <span><a href="{{route('logout3')}}" style="color:#333333;text-decoration: none;"><img src="http://localhost/NKTravel/public/image/login.png"> Đăng xuất</a></span>
          @else
          <a href="{{route('logincustomer')}}" style="color: #333333"><img src="http://localhost/NKTravel/public/image/manager.png" style="width:16px;">  Đăng nhập</a>  <a href="{{route('register')}}" style="color:#333333"><img src="http://localhost/NKTravel/public/image/login.png"> Đăng ký</a> 
          @endif
      
       </div>
     <div class="row">
      <nav class="navbar navbar-expand-md navbar-light bg-lignt" style="background-color: inherit !important">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="margin-bottom: 20px !important;">
        <p style="font-family: 'Rock Salt';font-size: 30px;font-weight: bold">NKTravel</p>
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
        <span class="navbar-toggler-icon black"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav navbar">
          <li class="nav-item">
          <a class="nav-link" href="{{route('homepage')}}" style="color:white">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('aboutus')}}"  style="color:white">Giới thiệu</a>
          </li>
  
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{route('domestic')}}" id="navbarDropdown2" role="button" data-toggle="dropdown"  style="color:white">Tour trong nước</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="http://localhost/webtravel/public/resultlink/1/Miền Bắc">Miền Bắc</a>
              <a class="dropdown-item" href="http://localhost/webtravel/public/resultlink/1/Miền Trung">Miền Trung</a>
              <a class="dropdown-item" href="http://localhost/webtravel/public/resultlink/1/Miền Nam">Miền Nam</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{url()->route('foreign')}}" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color:white">Tour nước ngoài</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
              <a class="dropdown-item" href="http://localhost/webtravel/public/resultlink/2/Châu Á">Châu Á</a>
              <a class="dropdown-item" href="http://localhost/webtravel/public/resultlink/2/Châu Âu">Châu Âu</a>
              <a class="dropdown-item" href="http://localhost/webtravel/public/resultlink/2/Châu Mỹ">Châu Mỹ</a>
              <a class="dropdown-item" href="http://localhost/webtravel/public/resultlink/2/Châu Phi">Châu Phi</a>
              <a class="dropdown-item" href="http://localhost/webtravel/public/resultlink/2/Châu Đại Dương">Châu Đại Dương</a>
            </div>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('totalartical')}}"  style="color:white">Cẩm nang du lịch</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}"  style="color:white">Liên hệ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
</div>
  <script type="text/javascript">
    const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";
  
  $(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
      $dropdown.hover(
        function() {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "true");
          $this.find($dropdownMenu).addClass(showClass);
        },
        function() {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "false");
          $this.find($dropdownMenu).removeClass(showClass);
        }
      );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });
  </script>
  <script>
    $(document).ready(function () {
      $("#type").change(function () {
          var val = $(this).val();
          if (val == "0") {
              $("#places").html("<option>Chọn địa điểm</option>");
          } else if (val == "1") {
              $("#places").html("<option>Miền Bắc</option><option>Miền Trung</option><option>Miền Nam</option>");
          } else if (val == "2") {
              $("#places").html("<option>Châu Á</option><option>Châu Âu</option><option>Châu Mĩ</option><option>Châu Đại Dương</option><option>Châu Úc</option>");
          }
      });
  });
  </script>
  <script>
    $(document).ready(function () {
$('.navbar .dropdown').hover(function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
    });
});
  </script>
</body>
</html>