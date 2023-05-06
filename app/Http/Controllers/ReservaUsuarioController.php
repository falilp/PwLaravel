<?php

namespace App\Http\Controllers;
use App\Models\Alquiler;
use App\Models\Pista;

use Illuminate\Http\Request;

class ReservaUsuarioController extends Controller
{
    //
    public function index(){
        return view('ReservaUsuario');
    }

    public function eliminar_reserva($id){

        $reserva = Alquiler::wgere('codPista',$id)->get();
        $reserva->delete();

        $alquiler = Pista::where('codPista', $id)->first();
        $alquiler->update(["disponible" => 0]);

        return redirect()->route('ReservaUsuario');
    }
}

