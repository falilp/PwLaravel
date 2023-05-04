<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" version="XHTML+RDFa 1.0" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="responsejs  forzar-scroll">
<!--Head-->
<head> 
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/login.css') }}">
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
    <!--<img src="https://media.tenor.com/hgBwZv6uX-MAAAAd/que-miras-bobo.gif">-->
<!-- TIPS: 
1. The carousel shouldn't be in any other div, like for example div with class container. 
2. You can align image position in classes bg1, bg2, bg3 using css background-position.
http://arturssmirnovs.com/blog/bootstrap-carousel-100-height-and-width/
-->
<!-- style="background-image: url('https://media.tenor.com/hgBwZv6uX-MAAAAd/que-miras-bobo.gif');" MESSI-->
    <br />
    <br />
    <br />
    <!--section class="vh-100" style="background-image: url('https://media.tenor.com/hgBwZv6uX-MAAAAd/que-miras-bobo.gif'); background-size: 95%; align-items: center;"-->
    <div class="form_login">
    <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="d-flex align-items-center mb-3 pb-1">
                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                <span class="h1 font-weight-bold">Iniciar sesi&oacuten</span>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="font-italic text-muted" for="nombre">Nombre/Email</label>
                                <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="font-italic text-muted" for="password">Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-dark btn-lg btn-block">{{ __('Iniciar sesión') }}</button>
                            </div>

                            <!--<a class="small text-muted" href="#!">Forgot password?</a>-->
                            <p class="font-italic text-muted" style="color: #393f81;"><a href="{{ route('registro') }}"
                                style="color: #393f81;">¿No estas registrado? Registrate</a></p>
                            <a href="#!" class="small text-muted">Terms of use.</a>
                            <a href="#!" class="small text-muted">Privacy policy</a>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>
</body>

<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection

<!-- Cargar Scripts Iniciales -->
</html>