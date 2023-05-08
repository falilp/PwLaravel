<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Modificar Alquiler</title>
<!--Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection
    
    <body>
        
        <div style="Display: flex;width: 70%; margin:0 auto;">
                <div class="card-body p-4 p-lg-5 text-black">
                    <br>
                    <form method="POST" action="{{ route('actualizarEvento', ['codEvento' => $evento->codEvento]) }}">
                        @csrf
                        @method('PUT')
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 font-weight-bold">Datos del Evento</span>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="codPis"> Codigo Pista:</label>
                            <input type="text" id="codPis" name="codPis" class="form-control form-control-lg" value= <?php echo $evento->codPista; ?> >
                        </div>
                        
                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="fechEven">Fecha evento:</label>
                            <input type="text" id="fechEven" name="fechEven" class="form-control form-control-lg" value= "<?php echo $evento->FechaEvento; ?>">
                        </div>
                        
                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="desc">Descripcion:</label>
                            <input type="text" id="desc" name="desc" class="form-control form-control-lg" value= "<?php echo $evento->Descripcion; ?>">
                        </div> 

                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="cat">Categoria:</label>
                            <input type="text" id="cat" name="cat" class="form-control form-control-lg" value= <?php echo $evento->categoria; ?>>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="codUsu">Codigo de Usuario:</label>
                            <input type="text" id="codUsu" name="codUsu" class="form-control form-control-lg" value= <?php echo $evento->codUsuario; ?>>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block">{{ __('Modificar') }}</button>
                        </div>
                    </form>
                </div>
        </div>
    </body>

<!--Footer -->
@extends('layouts.footer')
@section('footer_content')
@endsection
    
</html>