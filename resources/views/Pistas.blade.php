<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Pistas</title>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/pistas.css') }}"> 
</head>

<!-- Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection

<body>
    <br />
    <br />
    <div class="header_pistas">

    <div class="container py-5">
    <h2 class="h3 font-weight-bold">Instalaciones Deportivas KMB</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted"><strong>¡Alquila nuestras instalaciones deportivas y vive una experiencia única!</strong> En KMB, contamos con una amplia variedad de espacios deportivos de alta calidad para que puedas disfrutar de tus deportes favoritos con tus amigos, familiares o compañeros de equipo. Además, nuestros precios son muy competitivos y ofrecemos flexibilidad en horarios y opciones de alquiler. ¡No te pierdas la oportunidad de reservar tu espacio y vivir una experiencia deportiva inolvidable en KMB!</p>
            @if (Auth::check())
                <div class="col-lg-8">
                    <p class="font-italic text-muted">Reserva ahora:</p>
                </div>
            @else
                <div class="container my-5">
                    <div class="alert alert-danger">
                        Debe haber iniciado sesión en la página para acceder al registro de eventos.
                    </div>
                </div>
                <a href="{{ route('login') }}"><button type="button" class="btn btn-dark">Inicia Sesion</button></a>
            @endif
    </div>
</div>

    <ul class="cards">
    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--f11"></div>
        <div class="card__content">
            <div class="h5 font-weight-bold">Pistas Fútbol 11</div>
            <p class="font-italic text-muted">Nuestras pistas de fútbol 11 cuentan con las medidas reglamentarias y están diseñadas para brindarte una experiencia de juego excepcional. El césped artificial de alta calidad permite un buen control del balón y una mejor amortiguación en los impactos, lo que te permitirá jugar cómodamente durante horas. Además, nuestras instalaciones incluyen vestuarios y zonas de descanso para que puedas prepararte y recuperarte después de los partidos.</p>
            @if (Auth::check())
                <a href="{{ route('alquiler', ['tipoPista' => '0', 'fecha' => now()->format('Y-m-d')]) }}"><button type="button" class="btn btn-dark">Reserva</button></a>
            @endif
            </div>
        </div>
    </li>
    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--f7"></div>
        <div class="card__content">
            <div class="h5 font-weight-bold">Pistas Fútbol 7</div>
            <p class="font-italic text-muted">En KMB, también contamos con pistas de fútbol 7 para que puedas disfrutar de este deporte con tus amigos o compañeros de equipo. Al igual que nuestras pistas de fútbol 11, nuestras pistas de fútbol 7 cuentan con césped artificial de alta calidad y medidas reglamentarias. Las pistas están diseñadas para que puedas disfrutar de partidos emocionantes y divertidos en un ambiente seguro y controlado.</p>
            @if (Auth::check())            
                <a href="{{ route('alquiler', ['tipoPista' => '1', 'fecha' => now()->format('Y-m-d')]) }}"><button type="button" class="btn btn-dark">Reserva</button></a>
            @endif
        </div>
        </div>
    </li>

    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--fs"></div>
        <div class="card__content">
            <div class="h5 font-weight-bold">Pistas Fútbol sala</div>
            <p class="font-italic text-muted">Para los amantes del fútbol sala, en KMB tenemos pistas especialmente diseñadas para este deporte. Nuestras pistas cuentan con una superficie de parqué y las medidas reglamentarias para que puedas jugar como un profesional. Además, nuestras instalaciones incluyen vestuarios y zonas de descanso para que puedas prepararte y recuperarte después de los partidos.</p>
            @if (Auth::check())
                <a href="{{ route('alquiler', ['tipoPista' => '2', 'fecha' => now()->format('Y-m-d')]) }}"><button type="button" class="btn btn-dark">Reserva</button></a>
            @endif
        </div>
        </div>
    </li>

    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--bal"></div>
        <div class="card__content">
            <div class="h5 font-weight-bold">Pista Baloncesto</div>
            <p class="font-italic text-muted">En KMB, también contamos con pistas de baloncesto para que puedas practicar este deporte con tus amigos o compañeros de equipo. Nuestras pistas cuentan con una superficie de parqué y las medidas reglamentarias para que puedas disfrutar de partidos emocionantes y divertidos. Además, nuestras instalaciones incluyen vestuarios y zonas de descanso para que puedas prepararte y recuperarte después de los partidos. </p>
            @if (Auth::check())
                <a href="{{ route('alquiler', ['tipoPista' => '3', 'fecha' => now()->format('Y-m-d')]) }}"><button type="button" class="btn btn-dark">Reserva</button></a>
            @endif
        </div>
        </div>
    </li>
    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--padel"></div>
        <div class="card__content">
            <div class="h5 font-weight-bold">Pista Pádel</div>
            <p class="font-italic text-muted">Si prefieres el pádel, en KMB también contamos con pistas especialmente diseñadas para este deporte. Nuestras pistas cuentan con superficie de césped artificial de alta calidad y las medidas reglamentarias. Además, nuestras instalaciones incluyen vestuarios y zonas de descanso para que puedas prepararte y recuperarte después de los partidos.</p>
            @if (Auth::check())
                <a href="{{ route('alquiler', ['tipoPista' => '5', 'fecha' => now()->format('Y-m-d')]) }}"><button type="button" class="btn btn-dark">Reserva</button></a>
            @endif
        </div>
        </div>
    </li>
    
    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--tenis"></div>
        <div class="card__content">
            <div class="h5 font-weight-bold">Pista Tenis</div>
            <p class="font-italic text-muted">En KMB, ofrecemos pistas de tenis para que puedas disfrutar de este deporte en un ambiente cómodo y seguro. Nuestras pistas cuentan con superficie de césped artificial de alta calidad y las medidas reglamentarias. Además, nuestras instalaciones incluyen vestuarios y zonas de descanso para que puedas prepararte y recuperarte después de los partidos.</p>
            @if (Auth::check())
                <a href="{{ route('alquiler', ['tipoPista' => '4', 'fecha' => now()->format('Y-m-d')]) }}"><button type="button" class="btn btn-dark">Reserva</button></a>
            @endif
        </div>
        </div>
    </li>
    
    </ul>
    </div>
</body>
<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
</html>