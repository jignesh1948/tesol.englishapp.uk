<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Redirect;
use Request;

class Trainer
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
        if(!Session::has('token_id')){
            return redirect('/');
        }
        $curruntLogin = strtolower(Session::get('user_type'));
        $preFixRoute = str_replace("/","",$request->route()->getPrefix());
        // dd($curruntLogin."--".$preFixRoute);
            // dd("jignesh");
        if($curruntLogin != $preFixRoute){

            $backUrl = str_replace("trainer",$curruntLogin,Request::fullUrl());
            return redirect($backUrl);
          
        }
        return $next($request);
    }
}
