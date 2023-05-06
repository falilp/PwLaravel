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
                    <th scope="col">Codigo pista</th>
                    <th scope="col">Codigo usuario</th>
                    <th scope="col">Fecha alquiler</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descuento</th>
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
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                                
                            <td></td>
                            <td><button class="btn btn-danger">Eliminar</button></td>
                            <td><button class="btn btn-primary">Modificar</button></td>
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
