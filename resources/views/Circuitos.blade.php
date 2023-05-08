<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Circuitos</title>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/circuitos.css') }}"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<!-- Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection

<body>
<!-- Bootstrap Static Header -->
<div style="background: url(https://www.solvetic.com/uploads/monthly_12_2020/tutorials-7463-0-90036300-1606988329.png)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">Circuitos Karting KMB</h1>
        <p class="font-italic mb-0">¡No te pierdas la oportunidad de sentir la adrenalina y la emoción mientras conduces en nuestro circuito de Karting! ¡Inscríbete ahora y vive una experiencia que nunca olvidarás!</p>
    </div>
</div>

<!-- For Demo Purpose -->
<div class="container py-5">
    <h2 class="h3 font-weight-bold">¡Bienvenidos a nuestro circuito de Karting lleno de adrenalina y rapidez!</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted"> Si eres un amante de las emociones fuertes, entonces este es el lugar perfecto para ti. Nuestra pista está diseñada para desafiar tus habilidades de conducción y hacerte sentir la emoción de la velocidad mientras te deslizas por las curvas.</p>
            <p class="font-italic text-muted">Ya sea que estés buscando una forma emocionante de pasar el tiempo con tus amigos o una actividad divertida para una despedida de soltero/a o una fiesta de cumpleaños, nuestro circuito de Karting es la elección perfecta. Ven y disfruta de la emoción y la rapidez en nuestra pista de Karting.</p>
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted"></p>
        </div>
    </div>
</div>

@if (!Auth::check())
        <div class="boton-reserva">
            <a href="{{ route('login') }}"><button type="button" class="btn btn-dark">Inicia Sesion</button></a>
        </div>
        <div class="container my-5">
                    <div class="alert alert-danger">
                        Debe haber iniciado sesión en la página para acceder al registro de eventos.
                    </div>
                </div>
    @endif


<div class="container py-5">
    <h2 class="h3 font-weight-bold">Nuestros Karts</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted"> Si eres un amante de las emociones fuertes, entonces este es el lugar perfecto para ti. Nuestra pista está diseñada para desafiar tus habilidades de conducción y hacerte sentir la emoción de la velocidad mientras te deslizas por las curvas.</p>
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted"></p>
        </div>
    </div>
</div>
<div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/2mTDjaZEp_g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<div class="container py-5">
    <h2 class="h3 font-weight-bold">WindyCurveKarting</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted">Nuestra <strong>WindyCurveKarting</strong>, pista de kart abierta, está diseñada para ofrecer una experiencia de carreras emocionante y segura para todos los niveles de habilidad. Dispone de:</p>
            <ul class="font-italic text-muted">
                <li>Curvas desafiantes</li>
                <li>Rectas de alta velocidad</li>
                <li>Sistemas de iluminación y cronometraje</li>
                <li>Barreras de seguridad, </li>
            </ul>
            <p class="font-italic text-muted">KMB es el lugar perfecto para disfrutar de la emoción de las carreras de karts en un ambiente divertido y acogedor. <strong>¡Únete a nosotros hoy y vive la adrenalina de la velocidad en KMB!</strong></p>
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted"></p>
        </div>
    </div>
    @if (Auth::check())
    <div class="video-container">
        <a href="{{ route('alquiler', ['tipoPista' => '7', 'fecha' => now()->format('Y-m-d')]) }}" role="button" class="btn btn-dark">Reserva ahora</a>
    </div>
    @endif
</div>

<div style="text-align: center;" class="container-img">
    <img src="https://s1.eestatic.com/2021/12/24/malaga/vivir/637196374_218596164_1706x960.jpg">
</div>


<div class="container py-5">
    <h2 class="h3 font-weight-bold">SpeedFactory Indoor Karting</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted"><strong>¡Bienvenidos a SpeedFactory Indoor Karting, la pista de karting cubierta más emocionante de la ciudad!</strong>Nuestra instalación de última generación cuenta con:</p>
            <ul class="font-italic text-muted">
                <li>Una pista de carreras de alta velocidad</li>
                <li>Diseño único que ofrece una experiencia emocionante y desafiante para los conductores de todos los niveles.</li>
                <li>sistema de cronometraje y puntuación en vivo</li>
                <li>Barreras de seguridad</li>
            </ul>
            <p class="font-italic text-muted">Tú y tus amigos pueden competir por los mejores tiempos y la gloria de ser los campeones de SpeedFactory. </p>
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted"></p>
        </div>
    </div>
    @if (Auth::check())
    <div class="video-container">
        <a href="{{ route('alquiler', ['tipoPista' => '8', 'fecha' => now()->format('Y-m-d')]) }}" role="button" class="btn btn-dark">Reserva ahora</a>
    </div>
    @endif
</div>
<div style="text-align: center;" class="container-img">
    <img src="https://pland-architects.com/wp-content/uploads/2019/11/City-Mall-Karting-Track.jpg">
</div>
</body> 

<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>