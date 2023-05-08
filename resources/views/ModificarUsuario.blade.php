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
                    <form method="POST" action="{{ route('actualizarUser', ['id' => $usuario->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 font-weight-bold">Datos del Usuario</span>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="NombreUsuario"> Nombre:</label>
                            <input type="text" id="NombreUsuario" name="NombreUsuario" class="form-control form-control-lg" value= <?php echo $usuario->nombre; ?> >
                        </div>
                        
                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="ApellidosUsuario">Apellidos:</label>
                            <input type="text" id="ApellidosUsuario" name="ApellidosUsuario" class="form-control form-control-lg" value= <?php echo $usuario->apellidos; ?>>
                        </div>
                        
                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="EmailUsuario">Email:</label>
                            <input type="email" id="EmailUsuario" name="EmailUsuario" class="form-control form-control-lg" value= <?php echo $usuario->email; ?>>
                        </div> 

                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="TelefonoUsuario">Telefono:</label>
                            <input type="number" id="TelefonoUsuario" name="TelefonoUsuario" class="form-control form-control-lg" value= <?php echo $usuario->telefono; ?>>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="PermisosUsuario">Permisos:</label>
                            <select class="form-select form-select-lg" id="PermisosUsuario" name="PermisosUsuario">
                                <option value="0" {{ $usuario->Permisos == 0 ? 'selected' : '' }}>0</option>
                                <option value="1" {{ $usuario->Permisos == 1 ? 'selected' : '' }}>1</option>
                            </select>
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