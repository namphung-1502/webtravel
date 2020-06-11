<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\tour;
use App\customer;
use App\articlepage;
use App\contact;
use App\comment;
use Session;


class ajaxcontroller extends Controller
{
    public function xulilienhe(Request $request)
    {
       $newcontact = new contact();
       $newcontact->Name=$request->ten;
       $newcontact->Email=$request->email1;
       $newcontact->Content=$request->nd;
       $newcontact->save();
       echo "Cảm ơn bạn chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất !!!";
    }
    public function xulicomment(Request $request)
    {
        $newcomment =new comment();
        $newcomment->IDArticle=$request->id;
        $newcomment->Who=$request->ten;
        $newcomment->Email=$request->email1;
        $newcomment->Content=$request->nd;
        $newcomment->Date=$request->date;
         $newcomment->save();
    }
    public function filterforeign(Request $request)
    {
        $money=$request['tien'];
        $chau=$request['chau'];
        if($chau=='0' && $money=='0')
        {
           $tour=tour::where('Classify','=','2')->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
           }
        }
        else if($money=='0' && $chau !='0')
        {
           $tour=tour::where('continents','=',$chau)->get();
           for($i=0;$i<=count($tour)-1;$i++)
           { 
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
           }
        }
        else if($money!='0' && $chau =='0')
        {
        if($money==1)
        {
           $tour=tour::where('Money','<','500000')->where('Classify','=','2')->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
           }
        }
        else if($money==2)
        {
           $tour=tour::whereBetween('Money',['500000','2000000'])->where('Classify','=','2')->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {
              echo "<div class='col-lg-4 col-md-4 col-sm-6'>
              <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                      <figure>
                          <div class='overlay'></div>
                      <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                      </figure>
                      <div class='fh5co-text'>
                          <h2>".$tour[$i]['NameTour']."</h2>
                          <p></p>
                          <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                          <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                          <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                           : ".$tour[$i]['Howlong']."</p>
                          <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                      </div>
                  </a>
              </div>";
           }
        }
        else if($money==3)
        {
           $tour=tour::whereBetween('Money',['2000000','5000000'])->where('Classify','=','2')->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {
              echo "<div class='col-lg-4 col-md-4 col-sm-6'>
              <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                      <figure>
                          <div class='overlay'></div>
                      <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                      </figure>
                      <div class='fh5co-text'>
                          <h2>".$tour[$i]['NameTour']."</h2>
                          <p></p>
                          <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                          <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                          <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                           : ".$tour[$i]['Howlong']."</p>
                          <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                      </div>
                  </a>
              </div>";
           }
        }
        else if($money==4)
        {
           $tour=tour::whereBetween('Money',['5000000','10000000'])->where('Classify','=','2')->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
           }
        }
        else if($money==5)
        {
           $tour=tour::where('Money','>','10000000')->where('Classify','=','2')->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
           }
        }
     }
     else if($money!='0' && $chau !='0')
     {
        if($money==1)
        {
           $tour=tour::where('Money','<','500000')->where('Classify','=','2')->where('continents','=',$chau)->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
           }
        }
        else if($money==2)
        {
           $tour=tour::whereBetween('Money',['500000','2000000'])->where('Classify','=','2')->where('continents','=',$chau)->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
           }
        }
        else if($money==3)
        {
           $tour=tour::whereBetween('Money',['2000000','5000000'])->where('Classify','=','2')->where('continents','=',$chau)->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
           }
        }
        else if($money==4)
        {
           $tour=tour::whereBetween('Money',['5000000','10000000'])->where('Classify','=','2')->where('continents','=',$chau)->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
           }
        }
        else if($money==5)
        {
           $tour=tour::where('Money','>','10000000')->where('Classify','=','2')->where('continents','=',$chau)->get();
           for($i=0;$i<=count($tour)-1;$i++)
           {echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
           }
        }
        
     } 
    }
    public function filterdomestic(Request $request)
    {
        $money=$request['tien'];
        $area=$request['khuvuc'];
        if($money=='0' && $area=='0')
        {
         $tour=tour::where('Classify','=','1')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
         }
        }
        else if($money=='0' && $area !='0')
        {
           $tour=tour::where('Classify','=','1')->where('Area','=',$area)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
         }
        } 
        else if($money!='0' && $area=='0')
        {
           if($money==1)
           {
        $tour=tour::where('Money','<','500000')->where('Classify','=','1')->get();
        for($i=0;$i<=count($tour)-1;$i++)
        {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
        }
     }
     else if($money==2)
     {
        $tour=tour::whereBetween('Money',['500000','2000000'])->where('Classify','=','1')->get();
        for($i=0;$i<=count($tour)-1;$i++)
        {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
        }
     }
     else if($money==3)
     {
        $tour=tour::whereBetween('Money',['2000000','5000000'])->where('Classify','=','1')->get();
        for($i=0;$i<=count($tour)-1;$i++)
        {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
        }
     }
     else if($money==4)
     {
        $tour=tour::whereBetween('Money',['5000000','10000000'])->where('Classify','=','1')->get();
        for($i=0;$i<=count($tour)-1;$i++)
        {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
        }
     }
     else if($money==5)
     {
        $tour=tour::where('Money','>','10000000')->where('Classify','=','1')->get();
        for($i=0;$i<=count($tour)-1;$i++)
        {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
        }
          }
        }

        else if($money!='0' && $area !='0')
        {
           if($money==1)
           {
        $tour=tour::where('Money','<','500000')->where('Classify','=','1')->where('Area','=',$area)->get();
        for($i=0;$i<=count($tour)-1;$i++)
        {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
        }
     }
     else if($money==2)
     {
        $tour=tour::whereBetween('Money',['500000','2000000'])->where('Classify','=','1')->where('Area','=',$area)->get();
        for($i=0;$i<=count($tour)-1;$i++)
        {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
        }
     }
     else if($money==3)
     {
        $tour=tour::whereBetween('Money',['2000000','5000000'])->where('Classify','=','1')->where('Area','=',$area)->get();
        for($i=0;$i<=count($tour)-1;$i++)
        {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
        }
     }
     else if($money==4)
     {
        $tour=tour::whereBetween('Money',['5000000','10000000'])->where('Classify','=','1')->where('Area','=',$area)->get();
        for($i=0;$i<=count($tour)-1;$i++)
        {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
        }
     }
     else if($money==5)
     {
        $tour=tour::where('Money','>','10000000')->where('Classify','=','1')->where('Area','=',$area)->get();
        for($i=0;$i<=count($tour)-1;$i++)
        {
            echo "<div class='col-lg-4 col-md-4 col-sm-6'>
            <a href='http://localhost/webtravel/public/detailtour/".$tour[$i]['IDTour']."' class='fh5co-card-item image-popup'>
                    <figure>
                        <div class='overlay'></div>
                    <img src='".$tour[$i]['Image']."' alt='Image' class='img-responsive'>
                    </figure>
                    <div class='fh5co-text'>
                        <h2>".$tour[$i]['NameTour']."</h2>
                        <p></p>
                        <p style='text-align: left'><span style='color: #ffaaaa;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 8%'> Khởi hành: ".$tour[$i]['DepartureDay']."</p>
                        <p style='text-align: left;font-size: 16px;'><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 8%'> Thời gian
                         : ".$tour[$i]['Howlong']."</p>
                        <p><span class='btn btn-primary'>Xem chi tiết</span></p>
                    </div>
                </a>
            </div>";
        }
          }   
        }        
    }
}
