<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models\Pistas;

class PistasController extends Controller
{
    public function index(){
        return view('pistas');
    }

}
