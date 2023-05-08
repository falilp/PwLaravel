<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Lista alquileres</title>
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
                        $alquiler = AdminController::devolverListaAlquiler();
                        $contador = 0;
                    @endphp
                    @foreach($alquiler as $alq)
                        @php $contador++ @endphp
                        <tr>
                            <td scope="row">{{$contador}}</td>
                            <td>{{$alq->codPista}}</td>
                            <td>{{$alq->codUsuario}}</td>
                            <td>{{$alq->fecha_alquiler}}</td>
                            <td>{{$alq->precio}}</td>                                
                            <td>{{$alq->descuento}}</td>
                            <form action="{{ route('EliminarAlquiler', $alq->codPista) }}" method="post">
                                @csrf
                                <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                            </form>
                            <td><a href="{{ route('ModificarAlquiler', $alq) }}" class="btn btn-primary">Modificar</a></td>
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
