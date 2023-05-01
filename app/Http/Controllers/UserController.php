<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\usuarios;
use Illuminate\Support\Facades\Auth;

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

    public function login(LoginRequest $request){
        $credenciales = $request->getCredentials();

        if(!Auth::validate($credenciales)){
            return redirect()->to('/login')->withErrors('auth.failed');
        }

        $usuario = Auth::getProvider()->retrieveByCredentials($credenciales);
        
        Auth::login($usuario);

        return redirect('/home');
    }

    public function logout(){
        return view();
    }
}
