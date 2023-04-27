<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
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
