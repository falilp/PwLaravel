<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('Profile');
    }

    public function actualizarUsuario(Request $request){
        if($request->input('NombreUsuario') != null && $request->input('ApellidosUsuario') != null && 
        $request->input('EmailUsuario') != null && $request->input('TelefonoUsuario') != null 
        ){
            $usu = Auth::user();
            $codUsuario = $usu->getAuthIdentifier();
            $usuario = User::find($codUsuario);

            $usuario->nombre = $request->input('NombreUsuario');
            $usuario->apellidos = $request->input('ApellidosUsuario');
            $usuario->email = $request->input('EmailUsuario');
            $usuario->telefono = $request->input('TelefonoUsuario');
            $usuario->save();

        }
        return redirect()->route('profile');
    }
}
