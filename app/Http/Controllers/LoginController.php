<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //index
    public function index()
    {
        return view('auth.login');
    }

    //authenticate
    public function postlogin(Request $request)
    {
        $credentials = $request->only('NIK', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

}
