<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReservaUsuarioRequest;
use App\Models\Eventos;
use App\Models\Pista;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class EventosUsuarioController extends Controller
{
    //
    public function index(){
        $usuario = Auth::user();
        $codUsuario = $usuario->getAuthIdentifier();
        $pistas = Eventos::where('codUsuario', $codUsuario)->get();
        $pistas = Eventos::orderby('FechaEvento', 'desc')->get();
        return view('EventosUsuario')->with(['pistas' => $pistas, 'contador' => 1]);
    }

    public function eliminar_reserva($codPista){
        /*
        1- Borrar alquiler
        2- Actualizar pista a disponible
        */
        
        $alquiler = Eventos::where('codEvento', $codPista)->first();
        if($alquiler)
        {
            Eventos::destroy($codPista);
            $alquiler->save();

        }
        

        return redirect()->route('EventosUsuario');

    }
}
