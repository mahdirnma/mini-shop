<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm(){
        return view('user.login');
    }
    public function registerForm(){
        return view('user.register');
    }
}
