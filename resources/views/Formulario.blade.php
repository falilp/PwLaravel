<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Formulario</title>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/formulario.css') }}"> 
</head>

<!-- Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection

<body>
    <img src="..\public\img\fondoBlanco.png">
    <div class="header_pistas">

    <div class="container py-5">
    <h2 class="h3 font-weight-bold">Formulario Reserva Pistas: {{ $nomPista }}</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted"><strong>Rellena el formulario para completar la reserva</strong></p>
            <div class="col-lg-8">
            <a href="{{ route('alquiler', ['codPista' => $codPista, 'fecha' => Carbon\Carbon::parse($fecha)->addDay()->format('Y-m-d')]) }}"><button type="button" class="btn btn-dark">Anvanzar: {{ Carbon\Carbon::parse($fecha)->addDay()->format('Y-m-d') }}</button></a>

            <p class="font-italic text-muted">Reserva ahora:</p>

    <form action="{{ route('alquiler.guardar_reserva') }}" method="POST">
    @csrf
    <div class="container">        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="h5 font-weight-bold">Huecos Disponibles</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Fecha Disponible</th>
                                    <th scope="col">Hora Inicio</th>
                                    <th scope="col">Hora Fin</th>
                                    <th scope="col">Marcar para Reservar</th>
                                </tr>
                            </thead>
                            <tbody class="customtable">
                                @foreach ($huecos_disponibles as $fila)
                                    <tr>
                                            <td>{{  date('Y-m-d', strtotime($fila['HoraDisponible'])) }}</td>
                                            <td>{{ date('H:i:s', strtotime($fila['HoraDisponible'])) }}</td>
                                            <td>{{ date('H:i:s', strtotime($fila['HoraDisponible'] . '+30 minutes')) }}</td>
                                            <td>
                                            <label class="customcheckbox" name="reservas" value="$fila">
                                                <input type="checkbox" class="listCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="boton-enviar">
            <button type="submmit" class="btn btn-dark" name="enviar">Reservar</button>
        </div>
    </form>
</div>

</div>
</body>

<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>