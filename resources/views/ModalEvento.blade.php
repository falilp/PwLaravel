<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Eventos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/ModalEvento.css') }}">
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
        <h2 class="h1 font-weight-bold" style="margin-top=4rem; text-align: center;">Bienvenidos a la sección de Eventos de KMB</h2>
        <div class="row">
            <div class="col-lg-10 mb-4">
                <p class="font-italic text-muted">Organiza tus propios eventos y diviértete en compañía con familiares y amigos.</p>
                <p class="font-italic text-muted">En nuestras instalaciones se pueden organizar todo tipo de eventos.</p>
            </div>
        </div>
    </div>

    <a href="#openModal">Lanzar el modal</a>

    <div id="openModal" class="modalDialog">
        <div>
            <a href="{{ route('eventos') }}" title="Close" class="close">X</a>
            <h2 class="h2 font-weight-bold" style="margin-top=4rem; text-align: center;">Ya está registrado en este Evento</h2>
            <p class="font-italic text-muted">Puede inscribirse en otros Eventos</p>
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
<section class="light">
	<div class="container py-2">
		<div class="h1 font-weight-bold" id="pageHeaderTitle">Los eventos que tenemos disponibles son:</div>

		<article class="postcard light blue">
            <img class="postcard__img" src="https://celebreak.com/wp-content/uploads/2022/03/futbol-11.jpg" alt="Image Title" />
			<div class="postcard__text t-dark">
				<h1 class="h1 font-weight-bold">Copa Gallo</h1>
				<div class="postcard__subtitle small">
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
                                <form action="{{ route('Eventos.registro_indv', ['codEvento' => 1, 'tipoPista' => 0, 'descripcion' => 'Copa Gallo', 'fechaEvento' => '2023-05-14 10:00:00']) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-dark">Darse de Alta Individual</button>
                                </form>
                                <br>
                                <form action="{{ route('FormularioEquipo', ['codEvento' => 1, 'tipoPista' => 0, 'descripcion' => 'Copa Gallo', 'fechaEvento' => '2023-05-14 10:00:00']) }}" method="post">
                                </form>
			</div>
		</article>
		<article class="postcard light red">
            <img class="postcard__img" src="https://media.smartbox.com/pim/1760507.jpg?thumbor=640x480" alt="Image Title" />
			<div class="postcard__text t-dark">
				<h1 div class="h1 font-weight-bold">Gran Premio de Conil</h1>
				<div class="postcard__subtitle small">
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
                                <form action="{{ route('Eventos.registro_indv', ['codEvento' => 2, 'tipoPista' => 3, 'descripcion' => 'Gran Premio Conil', 'fechaEvento' => '2023-05-13 10:00:00']) }}" method="post">
                                                @csrf
                                    <button type="submit" class="btn btn-dark">Darse de Alta Individual</button>
                                </form>
			</div>
		</article>
		<article class="postcard light green">
				<img class="postcard__img" src="https://cloudfront-eu-central-1.images.arcpublishing.com/prisaradio/DIEW37FGTRDR3DTZIJDYNRV4ZY.jpg" alt="Image Title" />
			<div class="postcard__text t-dark">
                <div class="h1 font-weight-bold">Hoops Frenzy</div>
				<div class="postcard__subtitle small">
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
                                <form action="{{ route('Eventos.registro_indv', ['codEvento' => 3, 'tipoPista' => 6, 'descripcion' => 'Hoops Frenzy', 'fechaEvento' => '2023-05-12 10:00:00']) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-dark">Darse de Alta Individual</button>
                                </form>
                                <br>
                                <form action="{{ route('FormularioEquipo', ['codEvento' => 3, 'tipoPista' => 6, 'descripcion' => 'Hoops Frenzy', 'fechaEvento' => '2023-05-12 10:00:00']) }}" method="post">                  
                                </form>
			</div>
		</article>
	</div>
</section>
    <br>
    <br>
    <h2 class="h1 font-weight-bold" style="margin-top=4rem; text-align: center;">Crea tu Propio Evento</h2>
        <div class="container">
            <form action="" method="POST">
                @csrf <!-- Token CSRF para protección de ataques -->
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>
                <div class="form-group">
                    <label for="pista">Tipo de pista:</label>
                    <select class="form-control" id="pista" name="pista" required>
                        Seleccione una opción
                        <option value="0">Fútbol 11</option>
                        <option value="1">Fútbol 7</option>
                        <option value="2">Fútbol Sala</option>
                        <option value="3">Baloncesto</option>
                        <option value="4">Tenis</option>
                        <option value="5">Pádel</option>
                        <option value="6">Pista WindyCurveKarting</option>
                        <option value="7">Pista SpeedFactory Indoor Karting</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="horario">Horario:</label>
                    <select class="form-control" id="horario" name="horario" required>
                        <option value="">Seleccione una opción</option>
                        <option value="0">10:00 a 14:00</option>
                        <option value="1">17:00 a 21:00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Registrar evento</button>
                </div>
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    @endauth


<!--footer-->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
</html>

