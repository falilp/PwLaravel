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
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Permisos</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Modificar</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        use App\Http\Controllers\AdminController;
                        $usuarios = AdminController::devolverListaUsuarios();
                        $contador = 0;
                    @endphp
                    @foreach($usuarios as $usuario)
                        @php $contador++ @endphp
                        <tr class="text-center">
                            <th scope="row">{{$contador}}</th>
                            <td>{{$usuario->nombre}}</td>
                            <td>{{$usuario->apellidos}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->telefono}}</td>                                
                            <td>{{$usuario->Permisos}}</td>
                            <td><button class="btn btn-danger">Eliminar</button></td>
                            <td><a href="{{ route('ModificarPista', $usuario) }}" class="btn btn-primary">Modificar</a></td>
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
