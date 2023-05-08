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
        $usuario = $eventos->where('codUsuario', $codUsuario);
        if($usuario != null){
            $existe = $usuario->where('Descripcion', $descripcion)->first();
        }else{
            $existe = null;
        }

        if($existe == null){
            $evento = new Eventos;
            $evento->tipoPista = $tipoPista;
            $evento->FechaEvento = $fechaEvento;
            $evento->Descripcion = $descripcion;
            $evento->categoria = 'Torneo';
            $evento->codUsuario = $codUsuario;
            $evento->save();
            
            return redirect()->route('EventosUsuario');
        }else{
            return redirect('http://localhost/PwLaravel/public/eventos/modal#openModal');
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
        $pistas = Eventos::all()->where('tipoPista', $tipoPista);
        $reserva = $pistas->filter(function ($item) use ($fecha) {
            return substr($item->HoraDisponible, 0, 10) == $fecha;
        });
        
          //Consultar disponiblidad en Horario de Mañana
            //Filtramos la fecha en la tabla de pistas por la que el usuario nos ha indicado
            //Ahora iteramos sobre $horas_disponibles desde las 10:00 hasta las 14:00
            //En caso de que alguna ya este ocupada marcamos como false y cancelamos el proceso de registro de evento
        if($horario == 0){
            $horario = 'Mannana';
        }else{
            $horario = 'Tarde';
        }
        $reserva = $reserva->where('categoria', $horario);
    
    //Si están todas disponibles creamos la reserva
    if ($reserva == null) {
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
    
        // Redirigir al usuario a la página de lista de eventos con un mensaje de confirmación
        return redirect()->route('EventosUsuario');

        }else{
            //Indicamos al usuario que no hay hueco para la reserva
            return redirect('http://localhost/PwLaravel/public/eventos/modal/personalizado#openModal');
        }
    }

    public function lanzar_modal(){
        return view('ModalEvento');
    }
    public function lanzar_modal_personalizado(){
        return view('ModalEventoPersonalizado');
    }
}
