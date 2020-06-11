<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Session;

class checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if(Session::get('user_name')!=null || Session::get('user')!=null)
        {
            return $next($request);
        }
        else{
            return redirect()->route('logincustomer');
        }
    }
}
