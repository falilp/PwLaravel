<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
    public function register(){
        return view('pistas');
    }

    public function login(){
        return view('auth.login');
    }

    public function logout(){
        return view();
    }
}
