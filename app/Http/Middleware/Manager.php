<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Manager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::check()) {
            
            return redirect('/manager/login');

        } else {

            if(Auth::user()->role == 1)

            {
                return $next($request);

            } else {
                
                return redirect('/manager/login');
            }
        }
    }
}