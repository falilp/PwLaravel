<?php

namespace App\Http\Controllers;
use App\Models\Alquiler;
use App\Models\Eventos;
use App\Models\Pista;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class AdminController extends Controller{
    public function Home(){
        if(Auth::user()->Permisos == 1){return view("adminHome");}
    }

    public function GenerarPistas(){
        if(Auth::user()->Permisos == 1){
            //$pista = new Pista();
            $date = new DateTime();
            $date->modify('+1 day');
            $dicc = array(1=>"Pista de fútbol 11",2=>"Pista de fútbol 7",3=>"Pista de fútbol sala",4=>"Pista de baloncesto",5=>"Pista de Tenis", 6=>"Pista de Padel",7=>"WindyCurveKarting",8=>"SpeedFactory Indoor Karting");
            $horas = array(1=>"10" , 2=>"11" ,3=>"12" , 4=>"13" , 5=>"15" , 6=>"16" , 7=>"17" , 8=>"18" , 9=>"19" , 10=>"20" , 11=>"21");
            $precio = array(1=>"22",2=>"17",3=>"15",4=>"12",5=>"20",6=>"20",7=>"12",8=>"25");

                //Dias de la semana.7
                for($dia=1;$dia<=7;$dia++){
                    $date2 = clone $date;
                    //Tipos de pistas ofertadas(Numeradas).8
                    for($index = 1; $index <= 8; $index++){
                        //Horas a las que estan disponibles las pistas.
                        for($index2 = 1; $index2 <= 11; $index2++){
                        
                            $date2->setTime($horas[$index2],0,0);
                            $date_formatted = $date2->format('Y-m-d H:i:s');
                            //$insert = "INSERT INTO pista (tipoPista,precioHora,disponible,mensaje,HoraDisponible) VALUES ('$index','$precio[$index]','0','$dicc[$index]','$date_formatted')";
                            $pista = new Pista();
                            $pista->tipoPista = $index;
                            $pista->precioHora = $precio[$index];
                            $pista->disponible = 0;
                            $pista->mensaje = $dicc[$index];
                            $pista->HoraDisponible = $date_formatted;
                            $pista->save();

                        }
                    }
                    $date2->modify('+1 day');
                    $date = $date2;
                }
            return redirect('/admin');
        }/*Se debe incluir vista de error por no ser admin
        else{

        }*/
    }
    public function EliminarPistas(){
        if(Auth::user()->Permisos == 1){
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');

            $pistas = Pista::all()->where('HoraDisponible', '<', $date);
            Pista::destroy($pistas);

            return redirect('/admin');
        }
    }

    public function ListaPistas(){
        if(Auth::user()->Permisos == 1){
            return view("PistaLista");
        }
    }

    static function devolverListaPistas(){
        if(Auth::user()->Permisos == 1){
            return Pista::all();
        }
    }

    public function ModificarPista(Pista $pista){
        if(Auth::user()->Permisos == 1){
            if(Auth::user()->Permisos == 1){
                return view("ModificarPista", ['pista' => $pista]);
            }
        }
    }

    public function actualizarPista(Request $request,$pista){
        if(Auth::user()->Permisos == 1){
            $pista = Pista::find($pista);
            $pista->nombre = $request->input('NombreUsuario');
            $pista->apellidos = $request->input('ApellidosUsuario');
            $pista->email = $request->input('EmailUsuario');
            $pista->telefono = $request->input('TelefonoUsuario');
            $pista->Permisos = $request->input('PermisosUsuario');
            $pista->save();

            return redirect('/ListaPistas');
        }
    }

    public function ListaUsuarios(){
        if(Auth::user()->Permisos == 1){
            return view("UsuariosLista");
        }
    }

    static function devolverListaUsuarios(){
        if(Auth::user()->Permisos == 1){
            return User::all();
        }
    }

    public function ModificarUsuario(User $usuario){
        if(Auth::user()->Permisos == 1){
            return view("ModificarUsuario", ['usuario' => $usuario]);
        }
    }

    public function actualizarUser(Request $request,$id){
        if(Auth::user()->Permisos == 1){
            $usuario = User::find($id);
            $usuario->nombre = $request->input('NombreUsuario');
            $usuario->apellidos = $request->input('ApellidosUsuario');
            $usuario->email = $request->input('EmailUsuario');
            $usuario->telefono = $request->input('TelefonoUsuario');
            $usuario->Permisos = $request->input('PermisosUsuario');
            $usuario->save();

            return redirect('/ListaUsuarios');
        }
    }

    public function ListaAlquiler(){
        if(Auth::user()->Permisos == 1){
            return view("AlquilerLista");
        }
    }

    static function devolverListaAlquiler(){
        if(Auth::user()->Permisos == 1){
            return Alquiler::all();
        }
    }

    public function ModificarAlquiler(Alquiler $alquiler){
        if(Auth::user()->Permisos == 1){
            return view("ModificarUsuario", ['alquiler' => $alquiler]);
        }
    }

    public function actualizarAlquiler(Request $request,$id){
        if(Auth::user()->Permisos == 1){
            $alquiler = Alquiler::find($id);
            $alquiler->nombre = $request->input('NombreUsuario');
            $alquiler->apellidos = $request->input('ApellidosUsuario');
            $alquiler->email = $request->input('EmailUsuario');
            $alquiler->telefono = $request->input('TelefonoUsuario');
            $alquiler->Permisos = $request->input('PermisosUsuario');
            $alquiler->save();

            return redirect('/ListaAlquiler');
        }
    }

    public function ListaEventos(){
        if(Auth::user()->Permisos == 1){
            return view("EventosLista");
        }
    }

    static function devolverListaEventos(){
        if(Auth::user()->Permisos == 1){
            return Eventos::all();
        }
    }

    public function ModificarEveno(Eventos $evento){
        if(Auth::user()->Permisos == 1){
            return view("ModificarUsuario", ['evento' => $evento]);
        }
    }

    public function actualizarEvento(Request $request,$id){
        if(Auth::user()->Permisos == 1){
            $evento = Alquiler::find($id);
            $evento->nombre = $request->input('NombreUsuario');
            $evento->apellidos = $request->input('ApellidosUsuario');
            $evento->email = $request->input('EmailUsuario');
            $evento->telefono = $request->input('TelefonoUsuario');
            $evento->Permisos = $request->input('PermisosUsuario');
            $evento->save();

            return redirect('/ListaEventos');
        }
    }
}
