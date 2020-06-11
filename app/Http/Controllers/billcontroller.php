<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\tour;
use App\customer;
use App\articlepage;
use App\contact;
use App\comment;
use App\district;
use App\city;
use App\town;
use App\bill;
use App\detailbill;
use Session;
use Mail;
class billcontroller extends Controller
{    var $email;
    public function bill(Request $request)
    {   
        $id=$request['id'];
        $adult=$request['amount1'];
        $young=$request['amount2'];
        $baby=$request['amount3'];
        $tour=tour::where('IDTour','=',$id)->get();
        $province=city::all();
        return view('bill.bill',['city'=>$province,'tour'=>$tour,'adult'=>$adult,'young'=>$young,'baby'=>$baby]);
    }
    public function loadcity(Request $request)
    {
        $code=$request['number'];
        $town=district::where('matp','=',$code)->get();
        echo $town;
    }
    public function savebill(Request $request)
    {    if(Session::get('user')!=null)
        { 
            $check=bill::where('IDTour','=',$request->id)->value('IDBill');
            if($check=='')
            {
              $tour=tour::where('IDTour','=',$request->id)->get();  
            $bill =new bill(); 
            $bill->IDTour=$request->id;
            $bill->Day=$request->date;
            $bill->NameTour=$tour[0]['NameTour'];
            $bill->Image=$tour[0]['Image'];
            $bill->save();
            
            $detailbill= new detailbill();
            $idbill=bill::where('IDTour','=',$request->id)->value('IDBill');
            $name=$request->name;
            $email=$request->email;
            $phone=$request->phone;
            $note=$request->note;
            if($note==null)
            {
                $note=" ";
            }
            $address=$request->address;
            $town=$request->district;
            $city=$request->province;
            $town1=district::where('maqh','=',$town)->value('name');
            $city1=city::where('matp','=',$city)->value('name');
            $dc=$address.",".$town1.",".$city1;
            $adult=$request->a;
            $young=$request->b;
            $baby=$request->c;
            $total=$request->realtotal;
            $detailbill->IDBill=$idbill;
            $detailbill->NameCustomer=$name;
            $detailbill->Email=$email;
            $detailbill->Phone=$phone;
            $detailbill->Address=$dc;
            $detailbill->Adult=$adult;
            $detailbill->Young=$young;
            $detailbill->Baby=$baby;
            $detailbill->Note=$note;
            $detailbill->Username=Session::get('user')->id;
            $detailbill->Status='Đang chuẩn bị';
            $detailbill->TotalMoney=$total;
            $detailbill->save();
            $this->email=$email;
            $nametour=tour::where('IDTour','=',$request->id)->value('NameTour');
            Mail::send('home.layoutmail',array('name'=>$request['name'],'tour'=>$nametour,'Day'=>$request->date,'Adult'=>$request->a,'Young'=>$request->b,'Baby'=>$request->c),function($message){
                $message->to($this->email,'Khách hàng')->subject('ĐẶT TOUR THÀNH CÔNG');
           });
            return redirect()->route('cart');           
        }
        else{
            $detailbill= new detailbill();
            $idbill=bill::where('IDTour','=',$request->id)->value('IDBill');
            $name=$request->name;
            $email=$request->email;
            $phone=$request->phone;
            $note=$request->note;
            if($note==null)
        {
            $note=" ";
        }
            $address=$request->address;
            $town=$request->district;
            $city=$request->province;
            $town1=district::where('maqh','=',$town)->value('name');
            $city1=city::where('matp','=',$city)->value('name');
            $dc=$address.",".$town1.",".$city1;
            $adult=$request->a;
            $young=$request->b;
            $baby=$request->c;
            $total=$request->realtotal;
            $detailbill->IDBill=$idbill;
            $detailbill->NameCustomer=$name;
            $detailbill->Email=$email;
            $detailbill->Phone=$phone;
            $detailbill->Address=$dc;
            $detailbill->Adult=$adult;
            $detailbill->Young=$young;
            $detailbill->Baby=$baby;
            $detailbill->TotalMoney=$total;
            $detailbill->Note=$note;
            $detailbill->Username=Session::get('user')->id;
            $detailbill->Status='Đang chuẩn bị';
            $detailbill->save();
            $Day=$request->date;    
            $this->email=$email;
            $nametour=tour::where('IDTour','=',$request->id)->value('NameTour');
            Mail::send('home.layoutmail',array('name'=>$request['name'],'tour'=>$nametour,'Day'=>$request->date,'Adult'=>$request->a,'Young'=>$request->b,'Baby'=>$request->c),function($message){
            $message->to($this->email,'Khách hàng')->subject('ĐẶT TOUR THÀNH CÔNG');
           });
            return redirect()->route('cart');
        }
      }

        else{
            $user=Session::get('user_name');
        $check=bill::where('IDTour','=',$request->id)->value('IDBill');
        if($check=='')
        {
          $tour=tour::where('IDTour','=',$request->id)->get();  
        $bill =new bill(); 
        $bill->IDTour=$request->id;
        $bill->Day=$request->date;
        $bill->NameTour=$tour[0]['NameTour'];
        $bill->Image=$tour[0]['Image'];
        $bill->save();
        
        $detailbill= new detailbill();
        $idbill=bill::where('IDTour','=',$request->id)->value('IDBill');
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $note=$request->note;
        if($note==null)
        {
            $note=" ";
        }
        $address=$request->address;
        $town=$request->district;
        $city=$request->province;
        $town1=district::where('maqh','=',$town)->value('name');
        $city1=city::where('matp','=',$city)->value('name');
        $dc=$address.",".$town1.",".$city1;
        $adult=$request->a;
        $young=$request->b;
        $baby=$request->c;
        $total=$request->realtotal;
        $detailbill->IDBill=$idbill;
        $detailbill->NameCustomer=$name;
        $detailbill->Email=$email;
        $detailbill->Phone=$phone;
        $detailbill->Address=$dc;
        $detailbill->Adult=$adult;
        $detailbill->Young=$young;
        $detailbill->Baby=$baby;
        $detailbill->Note=$note;
        $detailbill->Username=$user[0]['name'];
        $detailbill->Status='Đang chuẩn bị';
        $detailbill->TotalMoney=$total;
        $detailbill->save();
        $this->email=$email;
        $nametour=tour::where('IDTour','=',$request->id)->value('NameTour');
        Mail::send('home.layoutmail',array('name'=>$request['name'],'tour'=>$nametour,'Day'=>$request->date,'Adult'=>$request->a,'Young'=>$request->b,'Baby'=>$request->c),function($message){
            $message->to($this->email,'Khách hàng')->subject('ĐẶT TOUR THÀNH CÔNG');
       });
        return redirect()->route('cart');       
        }
        else{
            $detailbill= new detailbill();
            $idbill=bill::where('IDTour','=',$request->id)->value('IDBill');
            $name=$request->name;
            $email=$request->email;
            $phone=$request->phone;
            $note=$request->note;
            if($note==null)
        {
            $note=" ";
        }
            $address=$request->address;
            $town=$request->district;
            $city=$request->province;
            $town1=district::where('maqh','=',$town)->value('name');
            $city1=city::where('matp','=',$city)->value('name');
            $dc=$address.",".$town1.",".$city1;
            $adult=$request->a;
            $young=$request->b;
            $baby=$request->c;
            $total=$request->realtotal;
            $detailbill->IDBill=$idbill;
            $detailbill->NameCustomer=$name;
            $detailbill->Email=$email;
            $detailbill->Phone=$phone;
            $detailbill->Address=$dc;
            $detailbill->Adult=$adult;
            $detailbill->Young=$young;
            $detailbill->Baby=$baby;
            $detailbill->TotalMoney=$total;
            $detailbill->Note=$note;
            $detailbill->Username=$user[0]['name'];
            $detailbill->Status='Đang chuẩn bị';
            $detailbill->save();
            $Day=$request->date;    
            $this->email=$email;
            $nametour=tour::where('IDTour','=',$request->id)->value('NameTour');
            Mail::send('home.layoutmail',array('name'=>$request['name'],'tour'=>$nametour,'Day'=>$request->date,'Adult'=>$request->a,'Young'=>$request->b,'Baby'=>$request->c),function($message){
            $message->to($this->email,'Khách hàng')->subject('ĐẶT TOUR THÀNH CÔNG');
           });
            return redirect()->route('cart');
        }
        // echo $nametour."<br>";
        // echo $request->date."<br>";
        // echo $request->a."<br>";
        // echo $request->b."<br>";
        // echo $request->c."<br>";
        // echo $this->email."<br>";
        }
    }
    public function cart()
    {
        if(Session::get('user')!=null)
        {
            $tour_booked=detailbill::where('Username','=',Session::get('user')->id)->get();
            if(count($tour_booked)!=0)
            {
                $detailtour=tour::where('IDTour','=',$tour_booked[0]->bill()->first()->IDTour)->get();
                return view('bill.cart',['booked'=>$tour_booked,'detailtour'=>$detailtour]);
            }
            else{
               return view('bill.cart');
            }
        }  
        else{
        $user=Session::get('user_name');
        $tour_booked=detailbill::where('Username','=',$user[0]['name'])->get();
        if(count($tour_booked)!=0)
        {
            $detailtour=tour::where('IDTour','=',$tour_booked[0]->bill()->first()->IDTour)->get();
            return view('bill.cart',['booked'=>$tour_booked,'detailtour'=>$detailtour]);
        }
        else{
           return view('bill.cart');
        }
        }
    }
    public function deletetour(Request $request)
    {    
        $idbill=$request['id'];
        $name=$request['ten'];
        $bill=detailbill::where('IDBill','=',$idbill)->where('Username','=',$name);
         $bill->delete();
        $checktour=detailbill::where('IDBill','=',$idbill)->get();
        if(count($checktour)==0)
        {
            bill::where('IDBill','=',$idbill)->delete();
        }
       
    }
    public function logout()
    {
        session()->forget('user_name');
        return redirect()->route('homepage');
    }
}
