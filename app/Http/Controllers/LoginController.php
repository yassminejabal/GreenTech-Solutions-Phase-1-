<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

// use Illuminate\View\View;


class LoginController extends Controller
{
    // Dans ton Controller
    public function authenticate(LoginRequest $request)
    {
        $request->validated();
        if ($request->role ==='Client') {
            return view('dachbordClient');
        }
        if ($request->role ==='Admin') {
            return view('dachbord');
            # code...
        }


        }
        
    
        
    public function loginCreate()
    {
        return view('Login');
    }
}
