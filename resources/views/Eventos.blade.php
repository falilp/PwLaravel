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
        <h2 class="h1 font-weight-bold" style="margin-top=4rem;">Bienvenidos a la sección de Eventos de KMB</h2>
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
    @auth
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
        <!-- Botones para registrar eventos -->
        <h2 class="h3 font-weight-bold" style="margin-top=4rem;">Los eventos que tenemos disponibles son:</h2>
            <div style="display:flex; ">
            <div class="col-md-4">
                        <div class="card">
                            <img src="https://www.afe-futbol.com/wp-content/uploads/2021/11/784A0873-1920x1080-1-1920x1080.jpg" class="card-img-top" alt="Imagen de cumpleaños">
                            <div class="card-body">
                                <div class="h5 font-weight-bold">Copa Gallo</div>
                                <p class="font-italic text-muted"><strong>Descripción:</strong></p>
                                <ul>
                                    <li><p class="font-italic text-muted">Torneo de Fútbol 11</p></li>
                                    <li><p class="font-italic text-muted">14/05/2023</p></li>
                                    <li><p class="font-italic text-muted">Hora Inicio: 10:00am</p></li>
                                    <li><p class="font-italic text-muted">Hora Fin: Hasta Cierre</p></li>
                                    <li><p class="font-italic text-muted">Premios: 
                                        <ul>
                                            <li><p class="font-italic text-muted"><strong>Primer Premio: </strong>Entradas para todos los miembros partidos Carranza</p></li>
                                            <li><p class="font-italic text-muted"><strong>Segundo Premio: </strong>Camiseta del Cádiz</p></li>
                                            <li><p class="font-italic text-muted"><strong>Tercero Premio: </strong>Balón de Fútbol</p></li>
                                        </ul>
                                    </p></li>
                                </ul>
                                <a href="{{ route('crear_cumple') }}" class="btn btn-dark">Darse de Alta Individual</a>
                                <a href="{{ route('crear_cumple') }}" class="btn btn-dark">Dar de Alta Equipo</a>
                            </div>
                        </div>
                    </div>

                <div class="col-md-4">
                        <div class="card">
                            <img src="https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2020/2/3/a7986oewd072ztxuucwq/play-and-drive-kart-electrico-meura-canto" class="card-img-top" alt="Imagen de cumpleaños">
                            <div class="card-body">
                                <div class="h5 font-weight-bold">Gran Premio de Conil</div>
                                <p class="font-italic text-muted"><strong>Descripción:</strong></p>
                                <ul>
                                    <li><p class="font-italic text-muted">Torneo de Karting</p></li>
                                    <li><p class="font-italic text-muted"><strong>Circuito:</strong> WindyCurveKarting</p></li>
                                    <li><p class="font-italic text-muted">13/05/2023</p></li>
                                    <li><p class="font-italic text-muted">Hora Inicio: 10:00am</p></li>
                                    <li><p class="font-italic text-muted">Hora Fin: Hasta Cierre</p></li>
                                    <li><p class="font-italic text-muted">Premios: 
                                        <ul>
                                            <li><p class="font-italic text-muted"><strong>Primer Premio: </strong>Entrada doble Gran Premio de España</p></li>
                                            <li><p class="font-italic text-muted"><strong>Segundo Premio: </strong>Foto Fernando Alonso Firmada</p></li>
                                            <li><p class="font-italic text-muted"><strong>Tercero Premio: </strong>1 mes de DAZN F1 gratis</p></li>
                                        </ul>
                                    </p></li>
                                </ul>
                                <a href="{{ route('crear_cumple') }}" class="btn btn-dark">Darse de Alta Individual</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                        <div class="card">
                            <img src="https://e00-marca.uecdn.es/assets/multimedia/imagenes/2022/03/08/16467778867887.jpg" class="card-img-top" alt="Imagen de cumpleaños">
                            <div class="card-body">
                                <div class="h5 font-weight-bold">Hoops Frenzy</div>
                                <p class="font-italic text-muted"><strong>Descripción:</strong></p>
                                <ul>
                                    <li><p class="font-italic text-muted">Torneo de Baloncesto 5 vs 5</p></li>
                                    <li><p class="font-italic text-muted">12/05/2023</p></li>
                                    <li><p class="font-italic text-muted">Hora Inicio: 10:00am</p></li>
                                    <li><p class="font-italic text-muted">Hora Fin: Hasta Cierre</p></li>
                                    <li><p class="font-italic text-muted">Premios: 
                                        <ul>
                                            <li><p class="font-italic text-muted"><strong>Primer Premio: </strong>Camisetas NBA Warriors</p></li>
                                            <li><p class="font-italic text-muted"><strong>Segundo Premio: </strong>Balón de Basket Nike</p></li>
                                            <li><p class="font-italic text-muted"><strong>Tercero Premio: </strong>Póster NBA</p></li>
                                        </ul>
                                    </p></li>
                                </ul>
                                <a href="{{ route('crear_cumple') }}" class="btn btn-dark">Darse de Alta Individual</a>
                                <a href="{{ route('crear_cumple') }}" class="btn btn-dark">Darse de Alta Equipo</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <h2 class="h1 font-weight-bold" style="margin-top=4rem;">Crea tu Propio Evento</h2>
    <!--Formulario de Registro de Evento-->
    <!--
        Tiene que marcar primero la fecha, y la pista
        Despues mira los dias disponibles; que este libre o de 10:00 a 14:00 o de 17:00 a 22:00
        Mostrar las disponibles
        Selecciona Una y Se registra en la BD
    -->
    @endauth



<!--footer-->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
</html>

