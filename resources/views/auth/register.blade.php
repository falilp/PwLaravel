<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" version="XHTML+RDFa 1.0" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="responsejs  forzar-scroll">
<!--Head-->
<head> 
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <title>Registro</title>
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
<authentication-card>
        <slot name="logo">
            
        </slot>
        
        <validation-errors class="mb-4" />
        </br></br>
        <form method="POST" action="{{ route('registro') }}">
            <h3>Registro de Usuario</h3>
            @csrf

            <div>
                <label for="nombre" value="{{ __('Nombre') }}">Nombre</label>
                <input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
            </div>

            <div>
                <label for="apellidos" value="{{ __('Apellidos') }}">Apellidos</label>
                <input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="old('apellidos')" required autofocus autocomplete="apellidos" />
            </div>

            <div class="mt-4">
                <label for="telefono" value="{{ __('Teléfono') }}">Teléfono</label>
                <input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required autocomplete="telefono" />
            </div>

            <div class="mt-4">
                <label for="email" value="{{ __('Email') }}">Email</label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            </div>

            <div class="mt-4">
                <input id="Permisos" class="block mt-1 w-full" value=0 type="hidden" name="Permisos" required autocomplete="Permisos"  />
            </div>

            <div class="mt-4">
                <label for="password" value="{{ __('Contraseña') }}">Contraseña</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label for="password_confirm" value="{{ __('Confirmar Contraseña') }}">Confirmar Contraseña</label>
                <input id="password_confirm" class="block mt-1 w-full" type="password" name="password_confirm" required autocomplete="new-password" />
            </div>

            <!--@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif-->

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('¿Estas ya registrado?') }}
                </a>

                <x-button class="ml-4" style="background-color:blue; border-color:black;">
                    {{ __('Registrarse') }}
                </x-button>
            </div>
        </form>
</authentication-card>
</body>

<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection

<!-- Cargar Scripts Iniciales -->
</html>
