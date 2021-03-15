<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function regist()
    {
        return view('auth/regist');
    }

    public function store_regist(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|regex:/^[\pL\s\-]+$/u|min:6',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|alpha_num|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi akun berhasil !');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function store_login(Request $request)
    {
        $inputVal = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|',
        ]);
   
        if(auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))){
            if (auth()->user()->role_id == 2) {
                return redirect()->route('home');
            }else{
                return redirect()->route('dashboard');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email & Password are incorrect.');
        }
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
