<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrationController extends Controller
{   
    //open registration screen
    function index()
    {
        return view('auth.registration');
    }
    
    //store data in user table
    function store(Request $req)
    {
        $data = $req->all();
        $data['password'] = Hash::make($req->get('password'));
        User::create($data);

        return redirect("/login");
    }
}
