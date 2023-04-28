<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/pistas.css') }}"> 
</head>

<!-- Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection

<body>
    <img src="..\public\img\fondoBlanco.png">
    <div class="header_pistas">

    <div class="container py-5">
    <h2 class="h3 font-weight-bold">Formulario Reserva Pistas: @$codPista</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted"><strong>Rellena el formulario para completar la reserva</strong></p>
            <div class="col-lg-8">
            <p class="font-italic text-muted">Reserva ahora:</p>
        </div>
    </div>
</div>
</body>

<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>