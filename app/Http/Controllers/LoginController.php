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
    public function postlogin(Request $request){
        if(Auth::attempt(['nik' => $request->nik, 'password' => $request->password])){
            return redirect('/home');
        } else {
            return redirect()->route('login');
        }
    }

}
