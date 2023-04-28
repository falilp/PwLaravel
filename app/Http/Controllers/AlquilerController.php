<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlquilerController extends Controller
{
    /*
        Lunes a Domingo
        10:00 - 22:00
    */
    /*
        all(), find(), first(), where(x1, x2), orderBy() -> Vienen por defecto en el Modelo
    */
    /*
        La idea es, el usuario selecciona una de las pistas para alquilar por lo tanto la funcion mostrar_huecos recibe el codigo de pista
        hace una peticion a la base de datos y muestra los huecos disponibles al usuario
    */
    public function index($codPista){
        return view('formulario')->with(['codPista' => $codPista]);
    }
    public function mostrar_huecos($codPista){

    }
}
