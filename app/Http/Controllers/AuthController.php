<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function regist()
    {
        return view('auth/regist');
    }

    public function store_regist(Request $request)
    {
        $this->validator();
    }

    public function login()
    {
        return view('auth/login');
    }

    public function store_login(Request $request)
    {
        $this->validator();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function validator()
    {
        return tap(
            request()->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|confirmed',
                'password' => 'password_confirmation',
            ]), 
            function(){
            },
        );
    }
}
