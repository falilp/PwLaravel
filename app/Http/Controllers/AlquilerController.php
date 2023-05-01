<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\usuarios;
use App\Models\Alquiler;
use App\Http\Requests\guardarArticulo;

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
    public function index($codPista, $fechaActual){
        $nomPista = 'null';

        if($codPista >= 0 && $codPista <= 7){
            switch($codPista){
                case 0:{
                    $nomPista = "Futbol 11";
                }break;
                case 1:{
                    $nomPista = "Futbol 7";
                }break;
                case 2:{
                    $nomPista = "Futbol Sala";
                }break;
                case 3:{
                    $nomPista = "Baloncesto";
                }break;
                case 4:{
                    $nomPista = "Tenis";
                }break;
                case 5:{
                    $nomPista = "Pádel";
                }break;
                case 6:{
                    $nomPista = "WindyCurveKarting";
                }break;
                case 7:{
                    $nomPista = "SpeedFactory Indoor Karting";
                }break;
            }

            $huecos_pista = Alquiler::all()->where('tipoPista', $codPista);
            $disponibles = $huecos_pista->where('disponible', '1');
            $disponiblesHoy = $disponibles->filter(function ($item) use ($fechaActual) {
                return substr($item->HoraDisponible, 0, 10) == $fechaActual;
            });
            return view('formulario')->with(['codPista' => $codPista, 'nomPista' => $nomPista, 'huecos_disponibles' => $disponiblesHoy, 'fecha' => $fechaActual]);
        }else{
            return view('home');
        }
    }

    public function guardar_reserva(guardarArticulo $request){
        $reservas = $_POST['reservas'];
        $pistas = Alquiler::all();
        foreach($reservas as $reserva){
            $pistas->where('codPista', $reserva['codPista'])->update(['disponible' => '0']);
        }
    }
}
