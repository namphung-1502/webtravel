<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <LINK REL="SHORTCUT ICON"  HREF="http://localhost/webtravel/public/image/leaf.png">
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
        <link rel="stylesheet" href="http://localhost/webtravel/public/css/themify-icons.css">
        <link rel="stylesheet" href="http://localhost/webtravel/public/css/style.css">
        <style>
             .p1{
    overflow: hidden; /* Ẩn số text bị thừa*/
    text-overflow: ellipsis;/*Cắt một đoạn text và thay thế bằng dấu ...*/
    line-height: 25px;
    -webkit-line-clamp: 4; /*Số dòng text hiển thị.*/
    height: 100px;
    font-size: 15px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
 }
 .p2{
  overflow: hidden; /* Ẩn số text bị thừa*/
    text-overflow: ellipsis;/*Cắt một đoạn text và thay thế bằng dấu ...*/
    line-height: 30px;
    -webkit-line-clamp: 2; /*Số dòng text hiển thị.*/
    height: 60px;
    font-size: 15px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
 }
 .row2,
.row2 > .column2 {
  padding: 0px;

}
/*đây2*/
.column2 {
  float: left;
  width: 20%;
  margin-left: 0%;
  margin-top: 3%;
/*  border: 1px solid;*/
}
.row2:after {
  content: "";
  display: table;
  clear: both;
}
.content1 {
  background-color: white;
  font-size: 15px;
  background-color: #f4f2f2;
  box-shadow:2px 2px 2px lightgrey; 
  border-radius: 5px;
   position: relative;

}

@media screen and (max-width: 900px) {
  .column2 {
    width: 50%;
  }
}
@media screen and (max-width: 600px) {
  .column2{
    width: 100%;
  }
}
.image2 {
  display: inline-block;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%;
  height: 380px;
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0,0,0,0.3);
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}
@media screen and (max-width:768px)
{
     .image{
        width: 100%;
        height: auto;
    }
}
.content1:hover .overlay {
  height: 100%;
  width:100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  bottom: 5%;
  left: 50%;
  -webkit-transform: translate(-40%, -40%);
  -ms-transform: translate(-40%, -40%);
  transform: translate(-40%, -40%);
  text-align: bottom;
}
        </style>
</head>
<body>
    @include('home.menubar')
    <div class="container">
        <div class="gtco-section">
            <div class="gtco-container">
                <div class="row" style="">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading" style="font-family: 'Lato'">
                        <h2>Tour Mới Nhất</h2>
                        <p>Hệ thống đặt tour hàng đầu Việt Nam. Hơn 3000 tour du lịch ở Việt Nam và Quốc Tế</p>
                    </div>
                </div>
                <div class="row" style="font-family: 'Lato'">
                    @foreach($tour as $value)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="http://localhost/webtravel/public/detailtour/{{$value->IDTour}}" class="fh5co-card-item">
                            <figure>
                                <div class="overlay"></div>
                             <img src="{{$value->Image}}" class="img-responsive">
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
    </div>
    <div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h1>Bán tour số 1 Việt Nam</h1>
						<p style="font-size: 16px;">Ứng dụng công nghệ mới nhất</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h1>Thanh toán linh hoạt</h1>
						<p style="font-size: 16px;">Liên kết với các tổ chức tài chính</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h1>Giá tour luôn tốt nhất</h1>
						<p style="font-size: 16px;">Chúng tôi luôn có giá tốt nhất cho bạn</p>
					</div>
				</div>
				

			</div>
		</div>
    </div>
    <div class="container">
    <div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box" style="font-family: 'Lato'">
					<h2 >Cẩm nang du lịch</h2>
					<p>Cẩm nang thông tin về du lịch, văn hóa, ẩm thực, các sự kiện và lễ hội tại các điểm đến Việt nam, Đông Nam Á và Thế Giới.</p>
				</div>
            </div>
            <div class="row" id="artical">
                <div class="col-sm-6 col-md-6 animate-box">
                    <p><img src="{{$article[0]['Image']}}" style="width:100%;height:auto"></p>
                    <a href="http://localhost/webtravel/public/detailartical/{{$article[0]['IDArticle']}}" style="color:black"><p style="font-weight:bold;font-size:18px;text-align: left">{{$article[0]['NameArticle']}}</p></a>
                    <p class="p1">{{$article[0]['Review']}}</p>
                </div>
                <div class="col-sm-6 col-md-6 animate-box">
                     <div class="row">
                        <div class="col-sm-4">
                            <p><img src="{{$article[4]['Image']}}" style="height:150px;width:180px" class="image"></p>
                           </div>
                           <div class="col-sm-8">
                            <a href="http://localhost/webtravel/public/detailartical/{{$article[4]['IDArticle']}}" style="color:black;text-align: left"><p style="font-weight:bold;font-size:16px;color:#666">{{$article[4]['NameArticle']}}</p></a>
                            <p class="p2">{{$article[4]['Review']}}</p>
                            <p style="color: #b2b2b2;font-size: 15px;text-align: left">Đăng ngày: {{$article[4]['Date']}}</p>
                           </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <p><img src="{{$article[3]['Image']}}" style="height:150px;width:180px" class="image"></p>
                           </div>
                           <div class="col-sm-8">
                            <a href="http://localhost/webtravel/public/detailartical/{{$article[3]['IDArticle']}}" style="color:black;text-align: left"><p style="font-weight:bold;font-size:16px;color:#666">{{$article[3]['NameArticle']}}</p></a>
                            <p class="p2">{{$article[3]['Review']}}</p>
                            <p style="color: #b2b2b2;font-size: 15px;text-align: left">Đăng ngày: {{$article[3]['Date']}}</p>
                           </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-4">
                            <p><img src="{{$article[2]['Image']}}" style="height:130px;width:180px" class="image"></p>
                           </div>
                           <div class="col-sm-8">
                            <a href="http://localhost/webtravel/public/detailartical/{{$article[2]['IDArticle']}}" style="color:black;text-align: left"><p style="font-weight:bold;font-size:16px;color:#666">{{$article[2]['NameArticle']}}</p></a>
                            <p class="p2">{{$article[2]['Review']}}</p>
                            <p style="color: #b2b2b2;font-size: 15px;text-align: left">Đăng ngày: {{$article[2]['Date']}}</p>
                           </div>
                     </div>
                </div>
            </div>
		</div>
	</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box" style="font-family: 'Lato'">
            <h2 >Điểm đến ưa thích</h2>
            <p>Những điểm du lịch hot nhất dịp Tết ở Việt Nam. Tham khảo những địa điểm du lịch đặc sắc nhất từ Bắc tới Nam cùng với chúng tôi</p>
        </div>
    </div>
    <div class="row">
        <div class="row2">
                             <div class="column2">
        <div class="content1">
           <img src="http://localhost/NKTravel/public/image/danang.jpg" class="image2">
           <div class="overlay">
            <a href="http://localhost/webtravel/public/resultlink/1/Miền Trung"><div class="text">Đà Nẵng</div></a>
          </div>
        </div>
                   </div>
                  <div class="column2">
        <div class="content1">
           <img src="http://localhost/NKTravel/public/image/asian2.jpg" class="image2">
           <div class="overlay">
            <a href="http://localhost/webtravel/public/resultlink/2/Châu Á"><div class="text">Châu Á</div></a>
          </div>
        </div>
                   </div>
                         <div class="column2">
        <div class="content1">
           <img src="http://localhost/NKTravel/public/image/europe.jpg" class="image2">
           <div class="overlay">
            <a href="http://localhost/webtravel/public/resultlink/2/Châu Âu"><div class="text">Châu Âu</div></a>
          </div>
        </div>
                   </div>
        
                         <div class="column2">
        <div class="content1">
          <img src="http://localhost/NKTravel/public/image/americas.jpg" class="image2">
           <div class="overlay">
             <a href="http://localhost/webtravel/public/resultlink/2/Châu Mỹ"><div class="text">Châu Mỹ</div></a>
          </div>
        </div>
                   </div>
        
                         <div class="column2">
        <div class="content1">
           <img src="http://localhost/NKTravel/public/image/afica.jpg" class="image2">
           <div class="overlay">
            <a href="http://localhost/webtravel/public/resultlink/2/Châu Mỹ"><div class="text">Châu Phi</div></a>
          </div>
        </div>
                   </div>	
              </div>
        </div>  
</div>
@include('home.footer')
</body>
</html>
