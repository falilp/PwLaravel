<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<!--Head-->
@extends('layouts.head')
@section('head_content')
@endsection
<head>
<link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/circuitos.css') }}"> 
</head>

<!-- Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection

<body>
    <div class="header_circuitos">
        <img src="..\public\img\fondoCircuitos.jpeg">
        <h1>Circuitos</h1>
        <h2>¡Bienvenidos a KMB! Si eres un entusiasta del automovilismo o simplemente buscas una experiencia emocionante y única, has llegado al lugar correcto.</h2>
        </div>    
    
</body>

<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>