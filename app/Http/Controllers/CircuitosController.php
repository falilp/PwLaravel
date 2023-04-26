<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CircuitosController extends Controller
{
    public function index(){
        return view('circuitos');
    }
}
