<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Eventos;
use App\Models\Pista;
use DateTime;
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

        if($existe != null){
            $evento = new Eventos;
            $evento->codEvento = $codEvento;
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
    //Rescatamos el codigo de usuario
        $usuario = Auth::user();
        $codUsuario = $usuario->getAuthIdentifier();

    //Recibimos los valores del formulario de eventos
        $fecha = $_POST['fecha'];
        $tipoPista = $_POST['pista'];
        $horario = $_POST['horario'];
        $descripcion = $_POST['descripcion'];
    
        //Filtramos la tabla de pista por el tipoPista
    $pistas = Pista::all()->where('tipoPista', $tipoPista);
    
    //Consultar disponiblidad en Horario de Mañana
    //Filtramos la fecha en la tabla de pistas por la que el usuario nos ha indicado
    //Ahora iteramos sobre $horas_disponibles desde las 10:00 hasta las 14:00
    //En caso de que alguna ya este ocupada marcamos como false y cancelamos el proceso de registro de evento
    if ($horario == 0) {
        $inicio_horario = '10:00:00';
        $fin_horario = '14:00:00';
    } else {
        $inicio_horario = '17:00:00';
        $fin_horario = '21:00:00';
    }
    
    $fecha_inicio = DateTime::createFromFormat('Y-m-d H:i:s', $fecha . ' ' . $inicio_horario);
    $fecha_fin = DateTime::createFromFormat('Y-m-d H:i:s', $fecha . ' ' . $fin_horario);

    
    $pistas = Pista::where('tipoPista', $tipoPista)
        ->whereBetween('HoraDisponible', [$fecha_inicio, $fecha_fin])
        ->get();
    
    $reserva = true;
    
    //Verificamos que todas las pistas estén disponibles
    foreach ($pistas as $pista) {
        if ($pista->disponible == 1) {
            $reserva = false;
            break;
        }
    }
    
    //Si están todas disponibles creamos la reserva
    if ($reserva) {
        //Creamos registro en la tabla de Eventos
        $evento = new Eventos;
        $evento->tipoPista = $tipoPista;
        $evento->FechaEvento = $fecha;
        $evento->Descripcion = $descripcion;
        if ($horario == 0) {
            $evento->categoria = 'Mannana';
        } else {
            $evento->categoria = 'Tarde';
        }
        $evento->codUsuario = $codUsuario;
        $evento->save();
    
        //Reservamos todas las pistas
        foreach ($pistas as $pista) {
            $pista->disponible = 1;
            $pista->save();
        }
    
        // Redirigir al usuario a la página de lista de eventos con un mensaje de confirmación
        return redirect()->route('home')->with('success', 'Reserva creada exitosamente.');

        }else{
            //Indicamos al usuario que no hay hueco para la reserva
            return redirect()->route('eventos');
        }
    }
}
