<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class roleClientMiddlewere
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('LoginCreate');
        }

        if (Auth::user()->role === 'client') {
        
            return Redirect()->route('dachbordClient');
        }
        return $next($request);
    }
}
