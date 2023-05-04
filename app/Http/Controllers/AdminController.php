<?php

namespace App\Http\Controllers;
use App\Models\Pista;
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
            $dicc = array(1=>"Pista de fútbol 11",2=>"Pista de fútbol 7",3=>"Pista de fútbol sala",4=>"Pista de tenis",5=>"Pista de baloncesto",6=>"Pista de voleibol",7=>"Pista de pádel",8=>"Circuito Kart");
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
        
    }
}
