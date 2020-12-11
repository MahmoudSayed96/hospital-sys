<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        if (Auth::check()) {
            $user = Auth::user();
            // If user not an admin redirect to home.
            if(!$user->hasRole('super_admin') || !$user->hasRole('doctor')) {
                return redirect(RouteServiceProvider::HOME); 
            }
            return $next($request);  
        } else {
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
