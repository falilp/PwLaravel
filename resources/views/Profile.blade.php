<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--Head-->
    @extends('layouts.head')
    @section('head_content')
    @endsection

    <!--Menu de navegacion-->
    @extends('layouts.nav')
    @section('nav_content')
    @endsection
    
    <body>
        <h1>Perfil</h1>
    </body>

<!--Footer -->
@extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>
