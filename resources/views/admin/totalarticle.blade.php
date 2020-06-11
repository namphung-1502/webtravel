<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lí bài viết</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <LINK REL="SHORTCUT ICON"  HREF="http://localhost/webtravel/public/image/leaf.png">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <style>
         * {
  padding: 0;
  margin: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: 'Droid Sans', sans-serif;
  outline: none;
}
::-webkit-scrollbar {
  background: transparent;
  width: 5px;
  height: 5px;
}
::-webkit-scrollbar-thumb {
  background-color: #888;
}
::-webkit-scrollbar-thumb:hover {
  background-color: rgba(0, 0, 0, 0.3);
}
body {background-color: #2a2b3d}
#contents {
  position: relative;
  transition: .3s;
  margin-left: 290px;
  background-color: #2a2b3d;
}
.margin {
  margin-left: 0 !important;
}
/* Start side navigation bar  */

.side-nav {
  float: left;
  height: 100%;
  width: 290px;
  background-color: #252636;
  color: #CCC;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  transform: translateX(0);
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  transition: .3s;
  position: fixed;
  top: 0;
  left: 0;
  overflow: auto;
  z-index: 9999999
}
.side-nav .close-aside {
  position: absolute;
  top: 7px;
  right: 7px;
  cursor: pointer;
  color: #EEE;
}
.side-nav .heading {
  background-color: #252636;
  padding: 15px 15px 15px 30px;
  overflow: hidden;
  border-bottom: 1px solid #2a2b3c
}
.side-nav .heading > img {
  border-radius: 50%;
  float: left;
  width: 28%;
}
.side-nav .info {
  float: left;
  width: 69%;
  margin-left: 3%;
}
.side-nav .heading .info > h3 {margin: 0 0 5px}
.side-nav .heading .info > h3 > a {
  color: #EEE;
  font-weight: 100;
  margin-top: 4px;
  display: block;
  text-decoration: none;
  font-size: 18px;
}
.side-nav .heading .info > h3 > a:hover {
  color: #FFF;
}
.side-nav .heading .info > p {
  color: #BBB;
  font-size: 13px;
}
/* End heading */

.side-nav .categories > li {
  padding: 17px 40px 17px 30px;
  overflow: hidden;
  border-bottom: 1px solid rgba(255, 255, 255, 0.02);
  cursor: pointer;
}
.side-nav .categories > li > a {
  color: #AAA;
  text-decoration: none;
}
/* Start num: there are three options primary, danger and success like Bootstrap */
.side-nav .categories > li > a > .num {
  line-height: 0;
  border-radius: 3px;
  font-size: 14px;
  color: #FFF;
  padding: 0px 5px
}
.dang {background-color: #f35959}
.prim {background-color: #0275d8}
.succ {background-color: #5cb85c}
/* End num */
.side-nav .categories > li > a:hover {
  color: #FFF
}
.side-nav .categories > li > i {
  font-size: 18px;
  margin-right: 5px
}
.side-nav .categories > li > a:after {
  content: "\f053";
  font-family: fontAwesome;
  font-size: 11px;
  line-height: 1.8;
  float: right;
  color: #AAA;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.side-nav .categories .opend > a:after {
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
/* End categories */
/* Start dropdown menu */
.side-nav .categories .side-nav-dropdown {
  padding-top: 10px;
  padding-left: 30px;
  list-style: none;
  display: none;
}
.side-nav .categories .side-nav-dropdown > li > a {
  color: #AAA;
  text-decoration: none;
  padding: 7px 0;
  display: block;
}
.side-nav .categories p {
  margin-left: 30px;
  color: #535465;
  margin-top: 10px;
}

/* End dropdown menu */

.show-side-nav {
  -webkit-transform: translateX(-290px);
  -moz-transform: translateX(-290px);
  transform: translateX(-290px);
}


/* Start media query */
@media (max-width: 767px) {
  .side-nav .categories > li {
    padding-top: 12px;
    padding-bottom: 12px;
  }
  .side-nav .search {
    padding: 10px 0 10px 30px
  }
}

/* End side navigation bar  */
/* Start welcome */

.welcome {
  color: #CCC;
}
.welcome .content {
  background-color: #313348;
  padding: 15px;
  margin-top: 25px;
}
.welcome h2 {
  font-family: Calibri;
  font-weight: 100;
  margin-top: 0
}
.welcome p {
  color: #999;
}


/* Start statistics */
.statistics {
  margin-top: 25px;
  color: #CCC;
}
.statistics .box {
  background-color: #313348;
  padding: 15px;
  overflow: hidden;
}
.statistics .box > i {
  float: left;
  color: #FFF;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  line-height: 60px;
  font-size: 22px;
}
.statistics .box .info {
  float: left;
  width: auto;
  margin-left: 10px;
}
.statistics .box .info h3 {
  margin: 5px 0 5px;
  display: inline-block;
}
.statistics .box .info p {color:#BBB}

/* End statistics */
/* Start charts */
.charts {
  margin-top: 25px;
  color: #BBB
}
.charts .chart-container {
  background-color: #313348;
  padding: 15px;
}
.charts .chart-container h3 {
  margin: 0 0 10px;
  font-size: 17px;
}


/* Start statis */

.statis {
  color: #EEE;
  margin-top: 15px;
}
.statis .box {
  position: relative;
  padding: 15px;
  overflow: hidden;
  border-radius: 3px;
  margin-bottom: 25px;
}
.statis .box h3:after {
  content: "";
  height: 2px;
  width: 70%;
  margin: auto;
  background-color: rgba(255, 255, 255, 0.12);
  display: block;
  margin-top: 10px;
}
.statis .box i {
  position: absolute;
  height: 70px;
  width: 70px;
  font-size: 22px;
  padding: 15px;
  top: -25px;
  left: -25px;
  background-color: rgba(255, 255, 255, 0.15);
  line-height: 60px;
  text-align: right;
  border-radius: 50%;
}

/*chart*/
.chrt3 {
  padding-bottom: 50px;
}
.chrt3 .chart-container {
  height: 350px;
  padding: 15px;
  margin-top: 25px;
}
.chrt3 .box {
  padding: 15px;
}
.main-color {
  color: #ffc107
}
.warning {background-color: #f0ad4e}
.danger {background-color: #d9534f}
.success {background-color: #5cb85c}
.inf {background-color: #5bc0de}


.navbar-right .dropdown-menu {
  right: auto !important;
  left: 0 !important;
}
.navbar-default {
  background-color: #6f6486 !important;
  border: none !important;
  border-radius: 0 !important;
  margin: 0 !important
}
.navbar-default .navbar-nav>li>a {
  color: #EEE !important;
  line-height: 55px !important;
  padding: 0 10px !important;
}
.navbar-default .navbar-brand {color:#FFF !important}
.navbar-default .navbar-nav>li>a:focus,
.navbar-default .navbar-nav>li>a:hover {color: #EEE !important}

.navbar-default .navbar-nav>.open>a,
.navbar-default .navbar-nav>.open>a:focus,
.navbar-default .navbar-nav>.open>a:hover {background-color: transparent !important; color: #FFF !important}

.navbar-default .navbar-brand {line-height: 55px !important; padding: 0 !important}
.navbar-default .navbar-brand:focus,
.navbar-default .navbar-brand:hover {color: #FFF !important}
.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {margin: 0 !important}
@media (max-width: 767px) {
  .navbar>.container-fluid .navbar-brand {
    margin-left: 15px !important;
  }
  .navbar-default .navbar-nav>li>a {
    padding-left: 0 !important;
  }
  .navbar-nav {
    margin: 0 !important;
  }
  .navbar-default .navbar-collapse,
  .navbar-default .navbar-form {
    border: none !important;
  }

}

.navbar-default .navbar-nav>li>a {
  float: left !important;
}
.navbar-default .navbar-nav>li>a>span:not(.caret) {
  background-color: #e74c3c !important;
  border-radius: 50% !important;
  height: 25px !important;
  width: 25px !important;
  padding: 2px !important;
  font-size: 11px !important;
  position: relative !important;
  top: -10px !important;
  right: 5px !important
}
.dropdown-menu>li>a {
  padding-top: 5px !important;
  padding-right: 5px !important;
}
.navbar-default .navbar-nav>li>a>i {
  font-size: 18px !important;
}




/* Start media query */

@media (max-width: 767px) {
  #contents {
    margin: 0 !important
  }
  .statistics .box {
    margin-bottom: 25px !important;
  }
  .navbar-default .navbar-nav .open .dropdown-menu>li>a {
    color: #CCC !important
  }
  .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
    color: #FFF !important
  }
  .navbar-default .navbar-toggle{
    border:none !important;
    color: #EEE !important;
    font-size: 18px !important;
  }
  .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {background-color: transparent !important}
}
#p{
	width: 7px;
	height: 7px;
	background: #00ff00;
	-moz-border-radius: 25px;
	-webkit-border-radius: 25px;
	--border-radius: 25px;
	border-radius: 25px;
    color:inherit;
    white-space: nowrap;
    float: left;
    margin-top: 6px;
   margin-right: 5px;
}
.image{
    width: 15px;
    height: 15px;
    margin-right: 10px;
            }
            .content-table{
    padding:15px;
}
.content-table table {
  border-collapse: collapse;
  border-spacing: 0;
  margin-top: 20px;
  color:#ccc;
}

.content-table td {
  text-align: center;
  padding: 5px;
  font-size:13px;
  color:#ccc;
}
.content-table th{
  text-align: center;
  padding: 5px;
  font-size:15px;
  color:#ccc;
}         
    </style>
</head>
<body>
    @include('admin.verticalmenuadmin')
    <section id="contents">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="{{route('message')}}"><i class="fa fa-user-o fw"></i> Tin nhắn</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o fw"></i> Thông báo</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                  </ul>
                </li>
              <li><a href="{{route('message')}}"><i class="fa fa-comments"></i><span>{{count($contact)}}</span></a></li>
                <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
                <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn" style="margin-top: 7px;"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
                              <div class="welcome">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="content">
                            <h2>Bài viết du lịch</h2>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="content-table" style="margin-top:20px;">
                    <input type="text" name="search" id="search" placeholder="Nhập thông tin tìm kiếm" style="background-image: url(http://localhost/Store/Image/search2.png); background-repeat: no-repeat;background-position: 3px;background-size: 20px;padding:5px 50px 5px 27px; border: 1px solid #ccc;font-size:15px;background-color: transparent;color:#b2b2b2">
                    <a href="{{route('addartical')}}" align="center" style="float: right;color:#ccc;"><button style="background-color: inherit;outline: none;border: none;font-size: 16px;" type="button"><img src="http://localhost/NKTravel/public/image/plus-3-24.png" class="image" style="margin-right: 3px;margin-top: -2px;">Thêm bài viết</button></a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên bài viết</th>      
                            <th>Ảnh</th>
                            <th>Người viết</th>
                            <th>Ngày viết</th>
                            <th>Chi tiết</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody id="body">
                            @foreach($article as $values)
                            <tr>
                                 <td>{{$values->IDArticle}}</td>
                                 <td>{{$values->NameArticle}}</td>
                                 <td><img src="{{$values->Image}}" style="width:70px;height:50px;"></td>
                                 <td>{{$values->Writer}}</td>
                                 <td>{{$values->Date}}</td>
                            <td><a href="http://localhost/webtravel/public/detailarticle/{{$values->IDArticle}}"><img src="http://icons.iconarchive.com/icons/icons8/windows-8/32/Data-View-Details-icon.png" alt=""></a></td>
                                 <td><a href="http://localhost/webtravel/public/deletearticleadmin/{{$values->IDArticle}}"><img src="http://icons.iconarchive.com/icons/double-j-design/origami-colored-pencil/32/red-cross-icon.png" alt=""></a></td>
                            </tr>    
                            @endforeach
                    </tbody>
                </table>
            </div>
  </section>
</body>
<script>
    $(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#body tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
        /*global $, console*/
/*
By Mostafa Omar
https://www.facebook.com/MostafaOmarIbrahiem
*/
$(function () {

'use strict';

(function () {

var aside = $('.side-nav'),

  showAsideBtn = $('.show-side-btn'),

  contents = $('#contents');

showAsideBtn.on("click", function () {

$("#" + $(this).data('show')).toggleClass('show-side-nav');

contents.toggleClass('margin');

});

if ($(window).width() <= 767) {

aside.addClass('show-side-nav');

}
$(window).on('resize', function () {

if ($(window).width() > 767) {

  aside.removeClass('show-side-nav');

}

});

// dropdown menu in the side nav
var slideNavDropdown = $('.side-nav-dropdown');

$('.side-nav .categories li').on('click', function () {

$(this).toggleClass('opend').siblings().removeClass('opend');

if ($(this).hasClass('opend')) {

  $(this).find('.side-nav-dropdown').slideToggle('fast');

  $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

} else {

  $(this).find('.side-nav-dropdown').slideUp('fast');

}

});

$('.side-nav .close-aside').on('click', function () {

$('#' + $(this).data('close')).addClass('show-side-nav');

contents.removeClass('margin');

});

}());

});
</script>
</html>