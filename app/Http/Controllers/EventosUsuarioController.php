<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosUsuarioController extends Controller
{
    //
    public function index(){
        return view('EventosUsuario');
    }
}
