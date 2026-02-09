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
    public function create(LoginRequest $request)
    {
        $data = $request->validated();
        $check = Auth::attempt($data);
        // Auth::user()->role = 'Admin';
        if ($check) {
        if (Auth::user()->role==='Client') {
            return view('dachbordClient');
        }
        if (Auth::user()->role==='Admin') {
            return view('dachbord');
        }
        }
        else{
             return redirect()->route('LoginCreate');
        }
        
        }
    
        
    public function loginCreate()
    {
        return view('Login');
    }
}
