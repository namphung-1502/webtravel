<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;
use App\User;
use Socialite;
use App\Othercustomer;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        // echo $user->token;
        // echo $user->getId();
        // echo $user->getNickname();
        // echo $user->getName();
        // echo $user->getEmail();
        // echo $user->getAvatar(); 
        Session::put('user',$user);
        $check=Othercustomer::all();
        for($i=0;$i<=count($check)-1;$i++)
        {
            if($check[$i]['IDCustomer']==$user->id)
            {
                return redirect()->route('homepage');
            }
        }
        $newcustomer = new Othercustomer();
        $newcustomer->IDCustomer=$user->id;
        $newcustomer->Name=$user->name;
        $newcustomer->Email=$user->email;
        $newcustomer->Avatar=$user->avatar;
        $newcustomer->save();   
        return redirect()->route('homepage');

    }
}
