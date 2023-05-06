<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Perfil</title>
<!--Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection
    
    <body>
        <?php
            use Illuminate\Support\Facades\Auth;
            use App\Models\User; 
            $usuario = Auth::user();
            echo Auth::user()->nombre;
            $codUsuario = $usuario->getAuthIdentifier();
            $usuario = User::where('id', $codUsuario)->first();
        ?>
        <div style="Display: flex;">
                <div class="card-body p-4 p-lg-5 text-black" >
                    <br>
                    <form method="POST" action="" ">
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
                            <label class="form-label font-italic text-muted" for="ContraUsuario">Contraseña:</label>
                            <input type="password" id="ContraUsuario" name="ContraUsuario" class="form-control form-control-lg">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label font-italic text-muted" for="ConfirUsuario">Confirmar Contraseña:</label>
                            <input type="password" id="ConfirUsuario" name="ConfirUsuario" class="form-control form-control-lg">
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block">{{ __('Actualizar') }}</button>
                        </div>
                    </form>
                </div>

                <div class="card-body p-4 p-lg-5 text-black">
                    <br>
                    <br>
                    <br>
                    <div class="pt-1 mb-4">
                        <a href="{{ route('ReservaUsuario') }}" style = "Text-decoration: none;">
                            <button class="btn btn-outline-dark btn-block">{{ __('Consultar Mis Reservas') }}</button>
                        </a>
                    </div>
                    <div class="pt-1 mb-4">
                        <a href="{{ route('EventosUsuario') }}" style = "Text-decoration: none;">
                            <button class="btn btn-outline-dark btn-block">{{ __(' Consultar Mis Eventos') }}</button> 
                        </a>
                    </div>
                </div>
        </div>
    </body>

<!--Footer -->
@extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>
