<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PistasController extends Controller
{
    public function index(){
        return view('pistas');
    }
    
}
