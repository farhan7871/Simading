<?php

namespace App\Http\Middleware;

// use Illuminate\Auth\Middleware\Authenticate as Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return redirect()->route('login_view');
    //     }
        
    // }

    public function handle($request, Closure $next)
    {
        if (Auth::user()) {
            return $next($request);
        }
        return redirect()->route('login_view');
    }
}
