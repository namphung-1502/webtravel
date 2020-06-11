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

class homepagecontroller extends Controller
{
    public function homepage()
    {
        $tour=tour::where('Classify','!=','0')->orderBy('IDTour','desc')->take(6)->get();
        $article=articlepage::where('IDArticle','!=',0)->orderBy('IDArticle','desc')->take(6)->get();
        return view('home.homepage',['tour'=>$tour,'article'=>$article]);
    }
    public function login(Request $request)
    {
        $user = $request['user'];
      $pass = $request['pass'];
      if(Auth::attempt(['name'=>$user,'password'=>$pass]))
      {  
         $customer=customer::where('name','=',$user)->get()->toArray();
         Session::put('user_name',$customer);
         return redirect()->route('homepage');
      }
      else if($user=='admin' && $pass=='admin'){
           Session::put('admin_name','admin');
       return  redirect()->route('admin');}
      else{
          return view('home.login',['error'=>'Tài khoản hoặc mật khẩu không chính xác']);
    
      }
    }
    public function register(Request $request)
    {  
      $name=$request['name'];
      $email=$request['email'];
      $phone=$request['phone'];
      $add=$request['address'];
      $username=$request['user'];
      $pass=$request['pass'];
      $repass=$request['repass'];
      $checkuser=customer::where('IDcustomer','!=','0')->get();
      for($i=0;$i<count($checkuser);$i++)
      {
         if($checkuser[$i]['name']==$username)
         {
             return view('home.register',['error'=>'Tên đăng nhập đã có người sử dụng. Vui lòng sử dụng tên tài khoản khác']);
         }
      }
      if($pass != $repass)
      return view('home.register',['error'=>'Mật khẩu nhập lại không đúng']);
      else{ 
         $user=new customer();
         $user->Namecustomer=$name;
         $user->Email=$email;
         $user->Phone=$phone;
         $user->Address=$add;
         $user->name=$username;
         $user->password=bcrypt($pass);
         $user->save();
         return redirect()->route('homepage');
      }
        
   }
   public function domestic()
   {    
       $tour=tour::where('Classify','=','1')->paginate(12);;
       return view('home.domestic',['tour'=>$tour]);
   }
   public function foreign()
   {    
       $tour=tour::where('Classify','=','2')->paginate(12);;
       return view('home.foreign',['tour'=>$tour]);
   }
   public function totalartical()
   {    
       $artical=articlepage::where('IDArticle','!=','0')->paginate(9);
       return view('home.totalartical',['artical'=>$artical]);
   }
   public function detailartical($id)
   {   $artical=articlepage::where('IDArticle','=',$id)->get();
    $comment=comment::where('IDArticle','=',$id)->get();
       return view('home.detailartical',['artical'=>$artical,'comment'=>$comment]);
   }
   public function detailtour($id)
   {
       $tour=tour::where('IDTour','=',$id)->get();
       $introtour=tour::where('IDTour','!=',$id)->where('Classify','=',$tour[0]['Classify'])->get();
       return view('home.detailtour',['tour'=>$tour,'introtour'=>$introtour]);
   }
   public function resultlink($cate,$place)
   {
       if($cate=='1')
       {
          $tour=tour::where('Area','=',$place)->paginate(12);
          return view('home.resultlink',['tour'=>$tour,'place'=>$place,'cate'=>$cate]);
       }
       else{
        $tour=tour::where('continents','=',$place)->paginate(12);
        return view('home.resultlink',['tour'=>$tour,'place'=>$place,'cate'=>$cate]);
       }
   }
   public function logout3()
   {
        session()->forget('user');
        return redirect()->route('homepage');
   }
}
