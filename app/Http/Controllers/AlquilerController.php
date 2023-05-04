<?php

namespace App\Http\Controllers;
use App\Models\Pista;
use App\Models\Alquiler;
use App\Http\Requests\guardarArticulo;
use Illuminate\Support\Facades\Auth;

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
    public function index($tipoPista, $fechaActual){
        $nomPista = 'null';

        if($tipoPista >= 0 && $tipoPista <= 7){
            switch($tipoPista){
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

            $huecos_pista = Pista::all()->where('tipoPista', $tipoPista);
            $disponibles = $huecos_pista->where('disponible', '1');
            $disponiblesHoy = $disponibles->filter(function ($item) use ($fechaActual) {
                return substr($item->HoraDisponible, 0, 10) == $fechaActual;
            });
            return view('formulario')->with(['tipoPista' => $tipoPista, 'nomPista' => $nomPista, 'huecos_disponibles' => $disponiblesHoy, 'fecha' => $fechaActual]);
        }else{
            return view('home');
        }
    }
    public function guardar_reserva()
    {
        $usuario = Auth::user();
        $codUsuario = $usuario->getAuthIdentifier();

        $reservas = $_POST['reservas'];
        /*$reservas = $request->input('reservas');*/
        
        foreach ($reservas as $codPista) {
            // buscar alquiler por codPista
            $alquiler = Pista::where('codPista', $codPista)->first();
            
            if ($alquiler) {
                // actualizar disponible a false
                $alquiler->update(["disponible" => 0]);
                
                //Almacenamos la instancia en la tabla de Alquiler
                $nuevoAlquiler = new Alquiler();
                $nuevoAlquiler->codPista = $codPista;
                $nuevoAlquiler->codUsuario = $codUsuario;
                $nuevoAlquiler->fecha_alquiler = $alquiler->HoraDisponible;
                $nuevoAlquiler->precio = $alquiler->precioHora;
                $nuevoAlquiler->descuento = 0;
                $nuevoAlquiler->save();
            }
        }
        
        return redirect()->route('home');
    }
}

