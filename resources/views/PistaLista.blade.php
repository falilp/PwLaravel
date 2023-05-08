<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Lista usuarios</title>
<!--Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection
    
<body>
        <div style="display: flex; margin: 10% auto;  width:80%;">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Codigo pista</th>
                    <th scope="col">Tipo pista</th>
                    <th scope="col">Precio hora</th>
                    <th scope="col">Disponible</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Hora disponible</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Modificar</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        use App\Http\Controllers\AdminController;
                        $pistas = AdminController::devolverListaPistas();
                        $contador = 0;
                    @endphp
                    @foreach($pistas as $pista)
                        @php $contador++ @endphp
                        <tr class="text-center">
                            <th scope="row">{{$contador}}</th>
                            <td>{{$pista->codPista}}</td>
                            <td>{{$pista->tipoPista}}</td>
                            <td>{{$pista->precioHora}}</td>
                            <td>{{$pista->disponible}}</td>                                
                            <td>{{$pista->mensaje}}</td>
                            <td>{{$pista->HoraDisponible}}</td>
                            <form action="{{ route('EliminarPista', $pista->codPista) }}" method="post">
                                @csrf
                                <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                            </form>
                            <td><a href="{{ route('ModificarPista', $pista) }}" class="btn btn-primary">Modificar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
<footer>
<!--Footer -->
@extends('layouts.footer')
@section('footer_content')
@endsection
</footer>
</html>
