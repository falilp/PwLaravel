<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" version="XHTML+RDFa 1.0" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="responsejs  forzar-scroll">
<!--Head-->
<head> 
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <title>Admin</title>
    <link rel="icon" href="\public\img\favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<!-- Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection

<body>
    <div style="text-align: center;" class="img-fluid jumbotron bg-cover text-black" >
        </br>
        <div class="card-columns" style="margin-left:200px">
            <div class="card bg" style="width:400px">
                <div class="card-body text-center">
                    <h4 class="h3 font-weight-bold">Usuarios</h4>
                    <p class="font-italic text-muted" >Lista con todos los usuario.</p>
                    <a href="{{ route('ListaUsuarios') }}"  class="btn btn-primary">IR</a>
                </div>
            </div>
            <div class="card bg" style="width:400px">
                <div class="card-body text-center">
                    <h4 class="h3 font-weight-bold">Alquileres</h4>
                    <p class="font-italic text-muted">Lista con todos los alquileres.</p>
                    <a href="{{ route('ListaAlquiler') }}"class="btn btn-primary">IR</a>
                </div>
            </div>
            <div class="card bg" style="width:400px">
                <div class="card-body text-center">
                    <h4 class="h3 font-weight-bold">Eventos</h4>
                    <p class="font-italic text-muted">Lista con todos los eventos.</p>
                    <a href="{{ route('ListaEventos') }}" class="btn btn-primary">IR</a>
                </div>
            </div>
            <div class="card bg" style="width:400px">
                <div class="card-body text-center">
                    <h4 class="h3 font-weight-bold">Generar Pistas</h4>
                    <p class="font-italic text-muted">Realizar los Domingos</p>
                    <a href="{{ route('GenerarPistas') }}" class="btn btn-primary">IR</a>
                </div>
            </div>
            <div class="card bg" style="width:400px">
                <div class="card-body text-center">
                    <h4 class="h3 font-weight-bold">Eliminar Pistas</h4>
                    <p class="font-italic text-muted">Eliminara las pistas previas a hoy.</p>
                    <a href="{{ route('EliminarPistas') }}" class="btn btn-primary">IR</a>
                </div>
            </div>
            <div class="card bg" style="width:400px">
                <div class="card-body text-center">
                    <h4 class="h3 font-weight-bold">Listas Pistas</h4>
                    <p class="font-italic text-muted">Lista de todos las pistas.</p>
                    <a href="{{ route('ListaPistas') }}" class="btn btn-primary">IR</a>
                </div>
            </div>
        </div>
    </div>
</body>
<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
</html>