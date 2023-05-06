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
                    <?php 
                        use Illuminate\Support\Facades\Auth;
                        use App\Models\Alquiler;
                        use App\Models\User; 
                        $usuario = Auth::user();
                        $codUsuario = $usuario->getAuthIdentifier();
                        $pistas = Alquiler::where('codUsuario', $codUsuario)->get();
                        $pistas = Alquiler::orderby('fecha_alquiler', 'desc')->get();
                        $contador = 0;
                        foreach($pistas as $pista): $contador++;?>
                            <tr>
                                <th scope="row"><?php echo $contador ?></th>
                                <td><?php echo $pista->codPista; ?></td>
                                <td><?php echo $pista->fecha_alquiler;?></td>
                                
                                <?php 
                                    if($pista->fecha_alquiler > date('Y-m-d') )
                                    {
                                        ?>
                                        <td><?php echo $pista->precio; ?></td>
                                        <td> 
                                            <form action="{{ route('ReservaUsuario.eliminar_reserva') }}" method="POST">
                                            @csrf
                                                <input type="text" id="id" name="id" value=" <?php echo $pista->codPista; ?>" hidden>
                                                <button class="btn btn-outline-dark btn-block">Eliminar</button>
                                            </form>
                                        </td><?php
                                    }
                                    else{
                                        ?> <td colspan="2"><?php echo $pista->precio; ?></td> <?php
                                    }
                                ?>
                                
                            </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>

<!--Footer -->
@extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>
