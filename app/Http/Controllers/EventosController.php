<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Eventos;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index(){
        return view('Eventos');
    }

    public function alta_individual($codEvento, $tipoPista, $descripcion, $fechaEvento){
        $usuario = Auth::user();
        $codUsuario = $usuario->getAuthIdentifier();
        
        $eventos = Eventos::all();
        $evento_concreto = $eventos->where('codEvento', $codEvento);
        $existe = $evento_concreto->where('codUsuario', $codUsuario);
        $alta = true;
        if(!$existe){
            $evento = new Eventos;
            $evento->tipoPista = $tipoPista;
            $evento->FechaEvento = $fechaEvento;
            $evento->Descripcion = $descripcion;
            $evento->categoria = 'Torneo';
            $evento->codUsuario = $codUsuario;
            $evento->save();
            $alta = false;
            return redirect()->route('home');
        }else{
            return redirect()->route('eventos');
        }
    }

    public function alta_equipo($codEvento, $tipoPista, $descripcion, $fechaEvento){

    }

    public function guardar_evento(Request $request)
{
    // Validar los datos enviados por el formulario
    $validatedData = $request->validate([
        'fecha' => 'required|date',
        'pista' => 'required|string|max:255',
        'horario' => 'required|string|max:255',
        'descripcion' => 'required|string|max:255',
    ]);

    // Crear un nuevo objeto Evento con los datos validados
    $evento = new Eventos([
        'fecha' => $validatedData['fecha'],
        'pista' => $validatedData['pista'],
        'horario' => $validatedData['horario'],
        'descripcion' => $validatedData['descripcion'],
    ]);

    // Guardar el nuevo evento en la base de datos
    $evento->save();

    // Redirigir al usuario a la página de lista de eventos con un mensaje de confirmación
    return redirect()->route('eventos.index')->with('success', 'El evento ha sido registrado correctamente.');
}
}
