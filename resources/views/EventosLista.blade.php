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
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Codigo Evento</th>
                    <th scope="col">Codigo pista</th>
                    <th scope="col">Fecha evento</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Codigo usuario</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Modificar</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        use App\Http\Controllers\AdminController;
                        $eventos = AdminController::devolverListaEventos();
                        $contador = 0;
                    @endphp
                    @foreach($eventos as $evento)
                        @php $contador++ @endphp
                        <tr>
                            <th scope="row">{{$contador}}</th>
                            <td>{{$evento->codEvento}}</td>
                            <td>{{$evento->codPista}}</td>
                            <td>{{$evento->FechaEvento}}</td>
                            <td>{{$evento->Descripcion}}</td>                                
                            <td>{{$evento->categoria}}</td>
                            <td>{{$evento->codUsuario}}</td>
                            <td><button class="btn btn-danger">Eliminar</button></td>
                            <td><a href="{{ route('ModificarEvento', $evento) }}" class="btn btn-primary">Modificar</a></td>
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
