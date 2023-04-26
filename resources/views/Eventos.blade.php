<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--Head-->
    @extends('layouts.head')
    @section('head_content')
    @endsection

    <!--Menu de Navegacion-->
    @extends('layouts.nav')
    @section('nav_content')
    @endsection
    
<body>
    <h1>Eventos</h1>
</body>

<!--footer-->
@extends('layouts.footer')
    @section('footer_content')
    @endsection
</html>

