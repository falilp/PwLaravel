<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\usuarios;

class UserController extends Controller{

    public function showRegister(){
        return view('auth.register');
    }
    public function register(RegisterRequest $request){
        $user = usuarios::create($request->validated());
        return redirect('/home');
    }

    public function showLogin(){
        return view('auth.login');
    }

    public function login(){
        
    }

    public function logout(){
        return view();
    }
}
