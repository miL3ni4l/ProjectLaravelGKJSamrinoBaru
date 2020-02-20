<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    /*
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   //check method admin
        if(Auth::check() && Auth::user()->isAdmin())
        {
        //Jika bukan admin di redirect ke lain
        return redirect('errors.404');
        }
        return $next($request);
        
    }
}
