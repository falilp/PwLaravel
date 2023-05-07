<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Perfil</title>
<!--Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection
    
    <body>
        
        <div style="Display: flex;width: 70%; margin:0 auto;">
                <div class="card-body p-4 p-lg-5 text-black">
                    <br>
                    <form method="POST" action="{{ route('actualizarPista', ['codPista' => $pista->codPista]) }}">
                        @csrf
                        @method('PUT')
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 font-weight-bold">Datos de la Pista</span>
                        </div>
                        
                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="tipPis"> Tipo pista:</label>
                            <select class="form-control form-control-lg" id="tipPis" name="tipPis" value= <?php echo $pista->tipoPista; ?> required>
                                <option value="1">Fútbol 11</option>
                                <option value="2">Fútbol 7</option>
                                <option value="3">Fútbol Sala</option>
                                <option value="4">Baloncesto</option>
                                <option value="5">Tenis</option>
                                <option value="6">Pádel</option>
                                <option value="7">Pista WindyCurveKarting</option>
                                <option value="8">Pista SpeedFactory Indoor Karting</option>
                            </select>
                        </div>
                        
                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="presio">Precio hora:</label>
                            <input type="text" id="presio" name="presio" class="form-control form-control-lg" value= <?php echo $pista->precioHora; ?>>
                        </div>
                        
                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="dis">Disponible:</label>
                            <select class="form-select form-select-lg" id="dis" name="dis">
                                <option value="0" {{ $pista->disponible == 0 ? 'selected' : '' }}>0</option>
                                <option value="1" {{ $pista->disponible == 1 ? 'selected' : '' }}>1</option>
                            </select>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="Mensaje">Mensaje:</label>
                            <input type="text" id="Mensaje" name="Mensaje" class="form-control form-control-lg" value= "<?php echo $pista->mensaje; ?>">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="Hdisponible">Hora disponible:</label>
                            <input type="datetime" id="Hdisponible" name="Hdisponible" class="form-control form-control-lg" value= "<?php echo $pista->HoraDisponible; ?>">
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