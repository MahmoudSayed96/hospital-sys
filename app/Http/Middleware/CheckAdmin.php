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
        $user = Auth::user();
        // If user an admin redirect to dashboard.
        if($user->hasRole('admin') || $user->hasRole('doctor')) {
            return redirect(RouteServiceProvider::DASHBOARD); 
        }
        return $next($request);  
    }
}
