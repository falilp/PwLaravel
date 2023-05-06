<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Perfil</title>
<!--Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection
    
    <body>
        <div style="display: flex; margin: 10% auto;  width:80%;">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pista</th>
                    <th scope="col">Fecha Alquiler</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($pistas as $pista) 
                            <tr>
                                <td>{{$contador++}}</td>
                                <td>{{ $pista->codPista }}</td>
                                <td>{{ $pista->fecha_alquiler}}</td>
                                
                                    @if($pista->fecha_alquiler > date('Y-m-d') )
                                    
                                        
                                        <td>{{ $pista->precio }}</td>
                                        <td>
                                            <form action="{{ route('ReservaUsuario.eliminar_reserva',['codPista' => $pista->codPista]) }}" method="post">
                                                @csrf
                                                <input type="text" value="" hidden>
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                    @else
                                        <td colspan="2">{{ $pista->precio }}</td> 
                                    
                                    @endif
                                
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </body>

<!--Footer -->
@extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>
