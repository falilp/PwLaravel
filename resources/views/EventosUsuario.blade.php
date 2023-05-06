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
                    <th scope="col">Evento</th>
                    <th scope="col">Pista</th>
                    <th scope="col">Fecha Evento/th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        use Illuminate\Support\Facades\Auth;
                        use App\Models\Eventos;
                        use App\Models\User; 
                        $usuario = Auth::user();
                        $codUsuario = $usuario->getAuthIdentifier();
                        $pistas = Eventos::where('codUsuario', $codUsuario)->get();
                        $pistas = Eventos::orderby('FechaEvento', 'desc')->get();
                        $contador = 0;
                        foreach($pistas as $pista): $contador++;?>
                            <tr>
                                <th scope="row"><?php echo $contador ?></th>
                                <td><?php echo $pista->codEvento; ?></td>
                                <td><?php echo $pista->codPista; ?></td>
                                <td><?php echo $pista->FechaEvento; ?></td>
                                <td><?php echo $pista->Descripcion; ?></td>

                                
                                <?php 
                                    if($pista->fecha_alquiler > date('Y-m-d') )
                                    {
                                        ?>
                                        <td><?php echo $pista->categoria; ?></td>
                                        <td> <button class="btn btn-outline-dark">Eliminar</button></td><?php
                                    }
                                    else{
                                        ?> <td colspan="2"><?php echo $pista->categoria; ?></td> <?php
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
