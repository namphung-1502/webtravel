<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết tour</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
</head>
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
.content1{
margin: 15px;
padding:20px 15px 20px 15px;
border-radius: 5px;
color:black;
border-top: 0.1mm solid #ccc;
background-color:#ccc;
}
.content1 table{
padding:5px;
width:100%;
}
.content1 td{
padding:10px;
}
.content1 tr{
border-top: 0.3mm solid #e5e5e5;
padding:10px; 
}
.content1 input[type=text]
{
padding:5px;
width:100%;
}
.tab {
overflow: hidden;
border-bottom: 1px solid #ccc;
background-color: inherit;

}

/* Style the buttons inside the tab */
.tab button {
background-color:  #999;
float: left;
border: none;
outline: none;
cursor: pointer;
padding: 14px 16px;
transition: 0.3s;
font-size: 17px;
margin-right: 5px;
border-radius: 5px;
}

/* Change background color of buttons on hover */
.tab button:hover {
background-color: #ccc;
}

/* Create an active/current tablink class */
.tab button.active {
background-color: #ccc;
border-bottom: none;
}

/* Style the tab content */
.tabcontent {
display: none;
padding: 6px 12px;
border: 1px solid #ccc;
border-top: none;
background-color: #ccc;
}
.avatar{
vertical-align: middle;
width: 70px;
height: 70px;
float: right;
}
.table1 select{
padding:5px;
}
</style>
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
            <li><a href="{{route('message')}}"><i class="fa fa-comments"></i><span>23</span></a></li>
            <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
            <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn" style="margin-top: 7px;"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="content1">
      <div class="row">
          
        <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'description')" id="defaultOpen"><b>Thông tin chung</b></button>
    <button class="tablinks" onclick="openCity(event, 'guide')"><b>Chi tiết</b></button>
       </div>
    <form action="{{url()->route('updatetouradmin')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
     <div id="description" class="tabcontent">
        <table class="table1">
            <tr>
                <th style="width:20%">Tên</th>
                <td>
                <input type="text" name="name" size="50" value="{{$tour[0]['NameTour']}}">
                </td>
            </tr>
            <tr>
                <th>Ngày khởi hành</th>
                <td>
                    <input type="date" name="departureday" size="50" value="{{$tour[0]['DepartureDay']}}">
                </td>
            </tr>
            <tr>
                <th>Kế hoạch</th>
                <td>
                    <textarea name="editor1" >{{$tour[0]['Plan']}}</textarea>
                </td>
            </tr>
            <tr>
                <th>Thời gian</th>
                <td>
                    <input type="text" name="time" size="50" value="{{$tour[0]['Howlong']}}">
                </td>
            </tr>
            <tr>
                <th>Chỗ còn trống</th>
                <td>
                    <input type="text" name="empty" size="50" value="{{$tour[0]['Empty']}}">
                </td>
            </tr>
            <tr>
                <th>Giá</th>
                <td>
                    <input type="text" name="price" size="50" value="{{$tour[0]['Money']}}">
                </td>
            </tr>
            <?php
              function check($a,$b)
              {
                  if($a==$b)
                   $result="checked='checked'";
                   else $result=' ';
               return $result;
              }
              function select($a,$b)
              {
                  if($a==$b)
                   $result="selected='selected'";
                   else $result=' ';
               return $result;
              }
            ?>
            <tr>
                <th>Loại</th>
                <td>
                    <input type="radio" name="where" id="where" value="Trong nước" <?php echo check($tour[0]['Classify'],'1')?>> Trong nước
                    <input type="radio" name="where" id="where" value="Nước ngoài" <?php echo check($tour[0]['Classify'],'2')?>> Nước ngoài
                </td>
            </tr>
            <input type="text" name="id" id="id" value="{{$tour[0]['IDTour']}}" style="display:none">
            <tr>
                <th>Địa điểm</th>
                <td><select name="place" id="place">
                    <option value="0">Chọn địa điểm</option>
                    @if($tour[0]['Classify']=='1')
                     <option value="Miền Bắc" <?php echo select($tour[0]['Area'],'Miền Bắc')?>>Miền Bắc</option>
                     <option value="Miền Trung" <?php echo select($tour[0]['Area'],'Miền Trung')?>>Miền Trung</option>
                     <option value="Miền Nam" <?php echo select($tour[0]['Area'],'Miền Nam')?>>Miền Nam</option>
                    @else
                    <option value="Châu Á" <?php echo select($tour[0]['continents'],'Châu Á')?>>Châu Á</option>
                     <option value="Châu Mỹ" <?php echo select($tour[0]['continents'],'Châu Mỹ')?>>Châu Mỹ</option>
                     <option value="Châu Âu" <?php echo select($tour[0]['continents'],'Châu Âu')?>>Châu Âu</option>
                     <option value="Châu Phi" <?php echo select($tour[0]['continents'],'Châu Phi')?>>Châu Phi</option>
                     <option value="Châu Đại Dương" <?php echo select($tour[0]['continents'],'Châu Đại Dương')?>>Châu Đại Dương</option>
                    @endif
                    </select></td>
            </tr>
            <tr>
                <td colspan="2">  <div class="row" style="margin:auto;padding:0" align="center">  <a href="{{route('totaltouradmin')}}"><button type="button" class="btn btn-primary">Thoát</button></a>              
                    <button type="submit" class="btn btn-primary">Sửa</button>
          </div></td>
            </tr>         
         </table>  
     </div>
    </form>
<form action="{{url()->route('updatetouradmin2')}}" method="post" enctype="multipart/form-data">
    <div id="guide" class="tabcontent">
        {{csrf_field()}}
        <div class="col-sm-6">
         <p><h3><b>Ảnh (4 ảnh)</b></h3></p>
          @if(session('error'))
               <p style="color:red;">{{session('error')}}</p>
          @endif
         @if(count($image)==0)
         <table>
            <tr>
            <td><img id="place1" src="#" style="margin-top: 5px;" class="avatar"></td>
                <td><input type="file" name="image1" size="50" onchange="readURL(this,'place1')"></td>
            </tr>
            <tr>
               <td><img id="place2" src="#" style="margin-top: 5px;" class="avatar"></td>
               <td> <input type="file" name="image2" size="50" required onchange="readURL(this,'place2')"></td>
            </tr>
            <tr>
               <td><img id="place3" src="#" style="margin-top: 5px;" class="avatar"> </td>
               <td> <input type="file" name="image3" size="50" required onchange="readURL(this,'place3')"></td>
            </tr>
            <tr>
               <td><img id="place4" src="#" style="margin-top: 5px;" class="avatar">  </td>
               <td><input type="file" name="image4" size="50" required onchange="readURL(this,'place4')"></td>
            </tr>
        </table>
        @else
        
         <table>
             <tr>
                 <td><img id="place1" src="{{ $tour[0]->detailimage()->first()->Img1}}" style="margin-top: 5px;" class="avatar"></td>
                 <td><input type="file" name="image1" size="50"  onchange="readURL(this,'place1')"></td>
             </tr>
             <tr>
                <td><img id="place2" src="{{ $tour[0]->detailimage()->first()->Img2}}" style="margin-top: 5px;" class="avatar"></td>
                <td> <input type="file" name="image2" size="50"  onchange="readURL(this,'place2')"></td>
             </tr>
             <tr>
                <td><img id="place3" src="{{ $tour[0]->detailimage()->first()->Img3}}" style="margin-top: 5px;" class="avatar"> </td>
                <td> <input type="file" name="image3" size="50"  onchange="readURL(this,'place3')"></td>
             </tr>
             <tr>
                <td><img id="place4" src="{{ $tour[0]->detailimage()->first()->Img4}}" style="margin-top: 5px;" class="avatar">  </td>
                <td><input type="file" name="image4" size="50"  onchange="readURL(this,'place4')"></td>
             </tr>
         </table>
         @endif
        </div>         
        <div class="col-sm-6">
            <p><h3><b>Giá</b></h3></p>
            @if(count($money)==0)
            <table>
                <tr>
                    <th>Người lớn</th>
                    <td><input type="text" name="a" id="a" required></td>
                </tr>
                <tr>
                    <th>Trẻ em</th>
                    <td><input type="text" name="b" id="b" required></td>
                </tr>
                <tr>
                    <th>Em bé</th>
                    <td><input type="text" name="c" id="c" required></td>
                </tr>
            </table>
            @else
            <table>
                <tr>
                    <th>Người lớn</th>
                    <td><input type="text" name="a" id="a" value="{{ $tour[0]->money()->first()->Adult}}"></td>
                </tr>
                <tr>
                    <th>Trẻ em</th>
                    <td><input type="text" name="b" id="b" value="{{ $tour[0]->money()->first()->Child}}"></td>
                </tr>
                <tr>
                    <th>Em bé</th>
                    <td><input type="text" name="c" id="c" value="{{ $tour[0]->money()->first()->Baby}}"></td>
                </tr>
            </table>
            @endif
            
        </div>
    <input type="text" name="id" id="id" value="{{$tour[0]['IDTour']}}" style="display:none">
    <div class="row" style="margin:auto;padding:0" align="center">  <a href="{{route('totaltouradmin')}}"><button type="button" class="btn btn-primary">Thoát</button></a>              
               <button type="submit" class="btn btn-primary">Sửa</button>
     </div>

  </div>
</form>
    </div>
</section>
</body>
<script>
    $(document).ready(function()
    {
        $('input[type="radio"]').click(function(){ 
             var where=$(this).val();
             if(where=='Trong nước')
             {
                 $('#place').html("<option value='Miền Bắc'>Miền Bắc</option><option value='Miền Trung'>Miền Trung</option><option value='Miền Nam'>Miền Nam</option>")
             }
             if(where=='Nước ngoài')
             {
                 $('#place').html("<option value='Châu Á'>Châu Á</option><option value='Châu Mỹ'>Châu Mỹ</option><option value='Châu Âu'>Châu Âu</option><option value='Châu Phi'>Châu Phi</option><option value='Châu Đại Dương'>Châu Đại Dương</option>")
             }
        });
    });
</script>
<script>
    	function readURL(input,place) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#'+place)
                    .attr('src', e.target.result)
                    .width(70)
                    .height(70);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
<script>
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