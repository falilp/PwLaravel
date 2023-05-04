<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" version="XHTML+RDFa 1.0" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="responsejs  forzar-scroll">
<!--Head-->
<head> 
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <title>KMB</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<!--Menu de Navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection

<body>
<!-- TIPS: 
1. The carousel shouldn't be in any other div, like for example div with class container. 
2. You can align image position in classes bg1, bg2, bg3 using css background-position.
http://arturssmirnovs.com/blog/bootstrap-carousel-100-height-and-width/
-->

<!-- Carousel 100% Fullscreen -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <div style="background: url(https://fondosmil.com/fondo/5819.jpg); height: 100vh; background-size: cover;" class="img-fluid jumbotron bg-cover text-white">
            <div class="container py-5 text-center">
                <h1 class="display-4 font-weight-bold">Instalaciones deportivas KMB</h1>
                <p class="font-italic mb-0">¡Prepárate para la aventura deportiva definitiva con KMB! Nuestras pistas deportivas están diseñadas para desafiar tus habilidades y mantenerte en movimiento. Ya seas un profesional o un principiante, ¡tenemos todo lo que necesitas para disfrutar de una experiencia deportiva inolvidable! ¡Únete a nosotros y comienza la acción hoy mismo!</p>
                <a href="{{ route('pistas') }}" role="button" class="btn btn-primary px-5">Reserva ahora</a>
            </div>
    </div>
        </div>
        <div class="carousel-item">
            <div style="background: url(https://pland-architects.com/wp-content/uploads/2019/11/City-Mall-Karting-Track.jpg); height: 100vh; background-size: cover;" class="img-fluid jumbotron bg-cover text-white">
                <div class="container py-5 text-center">
                    <h1 class="display-4 font-weight-bold">Ahora Circuitos Karting KMB</h1>
                    <p class="font-italic mb-0">¡No te pierdas la oportunidad de sentir la adrenalina y la emoción mientras conduces en nuestro circuito de Karting! ¡Inscríbete ahora y vive una experiencia que nunca olvidarás!</p>
                    <a href="{{ route('circuitos') }}" role="button" class="btn btn-primary px-5">Reserva ahora</a>
                </div>
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
    <!-- /end Carousel 100% Fullscreen -->
    <div class="container py-5">
    <h2 class="h3 font-weight-bold">¿Quienes somos?</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted">Bienvenido/a a KMB, un portal especializado en el alquiler de instalaciones deportivas. En nuestra página, encontrarás una amplia variedad de instalaciones deportivas disponibles para alquilar en diferentes zonas de la ciudad.</p>
            <p class="font-italic text-muted">Nuestro objetivo es ofrecer una plataforma fácil de usar y accesible para que cualquier persona pueda encontrar y reservar rápidamente la instalación deportiva que necesita para su actividad física o deportiva. Entre las instalaciones que ofrecemos se encuentran canchas de fútbol, baloncesto, tenis, pádel, así como gimnasios, piscinas, pistas de atletismo y mucho más.</p>
            <p class="font-italic text-muted">En KMB, nos aseguramos de que las instalaciones deportivas estén en excelentes condiciones, limpias y seguras para que nuestros usuarios puedan disfrutar de su actividad deportiva sin preocupaciones. Además, ofrecemos precios competitivos y opciones flexibles de reserva para adaptarnos a las necesidades de nuestros clientes.</p>
            <p class="font-italic text-muted">Si estás buscando una instalación deportiva de calidad para practicar tu deporte favorito, no dudes en visitar nuestro portal KMB. Estamos seguros de que encontrarás lo que necesitas y disfrutarás de una experiencia deportiva única.</p>
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted"></p>
        </div>
    </div>
    <div class="container py-5">
    <h2 class="h3 font-weight-bold">Nos encontramos en:</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted"></p>
        </div>
    </div>
    <div class="video-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51268.463559981545!2d-6.218797338378909!3d36.57149459917553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0dd011d731c25b%3A0x929c66b8e1876e00!2sEl%20Puerto%20de%20Sta%20Mar%C3%ADa%2C%20C%C3%A1diz!5e0!3m2!1ses!2ses!4v1682624525583!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
</body>

<!--Footer -->
@extends('layouts.footer')
@section('footer_content')
@endsection
<!-- Cargar Scripts Iniciales -->
</html>