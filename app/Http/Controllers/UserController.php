<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
        
        // attemp session create
        // session destroy delete
    }
}
