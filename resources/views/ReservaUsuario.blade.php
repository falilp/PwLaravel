<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Perfil</title>
<!--Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection
    
    <body>
        <div style="display: flex; margin: 10% auto;  width:80%;">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pista</th>
                    <th scope="col">Fecha Alquiler</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Jose</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td> <button class="btn btn-outline-dark">Eliminar</button></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jose</td>
                    <td>Jacob</td>
                    <td colspan="2">Thornton</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="4">Larry the Bird</td>
                    </tr>

                    <?php 
                        use Illuminate\Support\Facades\Auth;
                        use App\Models\User; 
                        $usuario = Auth::user();
                        $codUsuario = $usuario->getAuthIdentifier();
                        $usuario = User::where('id', $codUsuario)->first();
                    ?>
                </tbody>
            </table>
        </div>
    </body>

<!--Footer -->
@extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>
