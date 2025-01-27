<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm(){
        return view('user.login');
    }
    public function registerForm(){
        return view('user.register');
    }
    public function register(StoreRegisterRequest $request){
        $status=User::create($request->validated());
        if($status){
            return to_route('index');
        }else{
            return to_route('register.form');
        }
    }
}
