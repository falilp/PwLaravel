<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" version="XHTML+RDFa 1.0" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="responsejs  forzar-scroll">
<!--Head-->
<head> 
<link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/home.css') }}">
</head>

<!--Menu de Navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection



<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection

<!-- Cargar Scripts Iniciales -->
</html>