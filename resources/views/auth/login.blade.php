<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" version="XHTML+RDFa 1.0" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="responsejs  forzar-scroll">
<!--Head-->
<head> 
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <title>Login</title>
    <link rel="icon" href="\public\img\favicon.png">
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
    <img src="..\public\img\fondoBlanco.png">
<!-- TIPS: 
1. The carousel shouldn't be in any other div, like for example div with class container. 
2. You can align image position in classes bg1, bg2, bg3 using css background-position.
http://arturssmirnovs.com/blog/bootstrap-carousel-100-height-and-width/
-->

<x-authentication-card>
    <x-slot name="logo">
    </x-slot>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    </br></br>
    <form method="POST" action="{{ route('login') }}">
        <h3>Inicia sesi&oacuten</h3>
        @csrf

        <div>
            <br>
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"/>
            <br>
        </div>

        <div class="mt-4">
            <x-label for="password" value="{{ __('Contraseña') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"/>
        </div>

        <!--<div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>-->

        <div class="flex items-center justify-end mt-4">
            <!--@if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif-->

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('registro') }}">
                {{ __('registro') }}
            </a>

            <button class="btn btn-primary px-5">
                {{ __('Iniciar sesión') }}
            </button>
        </div>
        
    </form>
</x-authentication-card>
</body>

<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection

<!-- Cargar Scripts Iniciales -->
</html>