<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Dans ton Controller
    public function authenticate(LoginRequest $request)
    {
        $data = $request->validated();
        if (Auth::attempt($data)) {
            return redirect()->route('dashboard') ;
        }
        return redirect()->route('/inscreption/create');
        }
    public function loginCreate()
    {
        return view('auth');
        }
}
