<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    //open login screen
    function index()
    {
        return view('auth.login');
    }

    // function for log in
    function login(Request $req)
    {
        $data = $req->only(['email','password']);
        // check authentication
        if(Auth::attempt($data))
        { 
            Session::put('user_type',Auth::user()->user_type);

           return redirect()->intended('/dashboard');
        }

        return redirect()->to('/login');
    }
    //function for logout
    function logout()
    {
        Auth::logout();
        return redirect()->to('/login');

    }
}
