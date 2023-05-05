<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Eventos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/eventos.css') }}">
</head>

<!-- Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection

<body>
    <br />
    <br />
    <!-- Espacio informativo -->
        <div class="container py-5">
        <h2 class="h3 font-weight-bold" style="margin-top=4rem;">Bienvenidos a la sección de Eventos de KMB</h2>
        <div class="row">
            <div class="col-lg-10 mb-4">
                <p class="font-italic text-muted">Organiza tus propios eventos y diviértete en compañía con familiares y amigos.</p>
                <p class="font-italic text-muted">En nuestras instalaciones se pueden organizar dos clases de eventos: torneos y cumpleaños.</p>
            </div>
        </div>
    </div>
    <!-- Advertencia para usuarios no registrados/logueados -->
    @guest
        <div class="container my-5">
            <div class="alert alert-danger">
                Debe estar registrado en la página para acceder al registro de eventos.
            </div>
        </div>
    @endguest

    <!-- Botones para registrar eventos -->
    @auth
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://fondosmil.com/fondo/5803.jpg" class="card-img-top" alt="Imagen de torneo">
                        <div class="card-body">
                            <div class="h5 font-weight-bold">Torneos</div>
                            <p class="font-italic text-muted">Los torneos son una competición en la que los participantes compiten por conseguir el mejor tiempo. Se dividen en diferentes categorías en función de la edad y la experiencia de los participantes. ¡Atrévete a competir con tus amigos!</p>
                            <a href="{{ route('crear_torneo') }}" class="btn btn-dark">Registrar torneo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://www.etapainfantil.com/wp-content/uploads/2019/04/celebrar-cumpleanos-ninos.jpg" class="card-img-top" alt="Imagen de cumpleaños">
                        <div class="card-body">
                            <div class="h5 font-weight-bold">Cumpleaños</div>
                            <p class="font-italic text-muted">Los cumpleaños son la oportunidad perfecta para celebrar tu cumpleaños con tus amigos mientras disfrutas de una experiencia única en nuestro circuito. Ofrecemos paquetes especiales para cumpleaños que incluyen comida, bebida y una experiencia de conducción que nunca olvidarás.</p>
                            <a href="{{ route('crear_cumple') }}" class="btn btn-dark">Registrar cumpleaños</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    @endauth



<!--footer-->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
</html>

