<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check() != false) {
            return redirect("/");
        }
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }else{
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
       
        return redirect('/login');

    }
}
