<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    function index()
    {
        $data = Auth::user();

        return view('dashboard',compact('data'));
    }
}
