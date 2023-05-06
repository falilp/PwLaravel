<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReservaUsuarioRequest;
use App\Models\Alquiler;
use App\Models\Pista;

use Illuminate\Http\Request;

class ReservaUsuarioController extends Controller
{
    //
    public function index(){
        return view('ReservaUsuario');
    }

    public function eliminar_reserva(){
        $id = $_POST['id'];
        
        $reserva = Alquiler::where('codPista',$id)->get();
        Alquiler::destroy($reserva);

        $alquiler = Pista::where('codPista', $id)->first();
        $alquiler->update(["disponible" => 0]);

        return redirect()->route('/Profile/ReservaUsuario');
    }
}

