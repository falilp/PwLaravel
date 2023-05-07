<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Eventos;
use App\Models\Pista;

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

    public function guardar_evento() {

    $fecha = $_POST['fecha'];
    $pista = $_POST['pista'];
    $horario = $_POST['horario'];
    $descripcion = $_POST['descripcion'];

    $fechasDisponible = Pista::all()->where('tipoPista', $pista);
    if ($horario == 0) {
        $fechasDisponible = $fechasDisponible->where('disponible', 0);
        $fechasDisponible = $fechasDisponible->filter(function ($item) use ($fecha) {
            return substr($item->HoraDisponible, 0, 10) == $fecha;
        });
        $fecha_datetime = new DateTime($fecha . " 10:00:00"); // combina la fecha con la hora específica
        $bool = true;
        foreach ($fechasDisponible as $i) {
            $actual = $i->where('HoraDisponible', $fecha);
            if ($actual->where('disponible', 1) && $bool == true) {
                $bool = false;
            }
            date('H:i:s', strtotime($fecha. '+60 minutes'));
        }
        if ($bool == true) {
            $evento = new Eventos;
            $evento->tipoPista = $pista;
            $evento->FechaEvento = $fecha;
            $evento->Descripcion = $descripcion;
            $evento->categoria = 'Torneo';
            $evento->codUsuario = $codUsuario;
            $evento->save();
        }

    } else {

    }

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
