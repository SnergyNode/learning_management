<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class Admin
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
        if(Auth::guard('admin')->check()){
            $user = Auth::guard('admin')->user();
            View::share('person', $user);
            return $next($request);
        }
        return redirect()->route('admin.login')->withErrors(['User authentication required']);
    }
}
