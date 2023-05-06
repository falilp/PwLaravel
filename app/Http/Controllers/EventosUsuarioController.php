<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReservaUsuarioRequest;
use App\Models\Alquiler;
use App\Models\Pista;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class ReservaUsuarioController extends Controller
{
    //
    public function index(){
        $usuario = Auth::user();
        $codUsuario = $usuario->getAuthIdentifier();
        $pistas = Alquiler::where('codUsuario', $codUsuario)->get();
        $pistas = Alquiler::orderby('fecha_alquiler', 'desc')->get();
        return view('ReservaUsuario')->with(['pistas' => $pistas, 'contador' => 1]);
    }

    public function eliminar_reserva($codPista){
        /*
        1- Borrar alquiler
        2- Actualizar pista a disponible
        */
        
        $alquiler = Alquiler::where('codPista', $codPista)->first();
        if($alquiler)
        {
            Alquiler::destroy($codPista);
            $alquiler->save();

            $pistas = Pista::where('codPista', $codPista)->first();
            if($pistas)
            {
                $pistas->disponible = 0;
                $pistas->save();
            }
        }
        

        return redirect()->route('ReservaUsuario');

    }
}
