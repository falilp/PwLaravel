<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioEquipoController extends Controller
{
    public function index($codEvento, $tipoPista, $descripcion, $fechaEvento){
        $nomPista = 'null';

        if($tipoPista >= 1 && $tipoPista <= 8){
            switch($tipoPista){
                case 1:{
                    $nomPista = "Futbol 11";
                }break;
                case 2:{
                    $nomPista = "Futbol 7";
                }break;
                case 3:{
                    $nomPista = "Futbol Sala";
                }break;
                case 4:{
                    $nomPista = "Baloncesto";
                }break;
                case 5:{
                    $nomPista = "Tenis";
                }break;
                case 6:{
                    $nomPista = "Pádel";
                }break;
                case 7:{
                    $nomPista = "WindyCurveKarting";
                }break;
                case 8:{
                    $nomPista = "SpeedFactory Indoor Karting";
                }break;
            }

            return view('FormularioEquipo')->with(['tipoPista' => $tipoPista, 'nomPista' => $nomPista, 'codEvento' => $codEvento, 'descripcion' => $descripcion, 'fechaEvento' => $fechaEvento]);
        }
    }
}
