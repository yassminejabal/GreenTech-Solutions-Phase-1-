<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class roleAdminMiddlewere
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('LoginCreate');
        }

        if (Auth::user()->role === 'Admin') {
        
            return Redirect()->route('dachbordAdmin');
        }
        return $next($request);
    }
}
