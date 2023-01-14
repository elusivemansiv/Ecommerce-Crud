<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use session;
class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $path= $request ->path();
        if(($path== "login" || $path== "register") && (session::get('email'))){
            return redirect('/dashboard');
        }
        else if($path!="login" && session::get('email') && $path!="registration" && session::get('email')){
            return redirect('/login');
        }
        return $next($request);
    }
}
