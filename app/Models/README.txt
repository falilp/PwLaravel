Pista Futbol 11 - 0
Pista Futbol 7 - 1
Pista Futbol Sala - 2
Pista Baloncesto - 3
Pista de Tenis - 4
Pista de Padel - 5
WindyCurveKarting - 6 
SpeedFactory Indoor Karting - 7

/*Boton reserva menu de navegacion*/
       <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reserva
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('alquiler', ['tipoPista' => '0', 'fecha' => now()->format('Y-m-d')]) }}">Futbol 11</a></li>
                            <li><a class="dropdown-item" href="{{ route('alquiler', ['tipoPista' => '1', 'fecha' => now()->format('Y-m-d')]) }}">Futbol 7</a></li>
                            <li><a class="dropdown-item" href="{{ route('alquiler', ['tipoPista' => '2', 'fecha' => now()->format('Y-m-d')]) }}">Ftubol sala</a></li>
                            <li><a class="dropdown-item" href="{{ route('alquiler', ['tipoPista' => '3', 'fecha' => now()->format('Y-m-d')]) }}">Baloncesto</a></li>
                            <li><a class="dropdown-item" href="{{ route('alquiler', ['tipoPista' => '4', 'fecha' => now()->format('Y-m-d')]) }}">Tenis</a></li>
                            <li><a class="dropdown-item" href="{{ route('alquiler', ['tipoPista' => '5', 'fecha' => now()->format('Y-m-d')]) }}">Padel</a></li>
                            <li><a class="dropdown-item" href="{{ route('alquiler', ['tipoPista' => '6', 'fecha' => now()->format('Y-m-d')]) }}">WindyCurveKarting</a></li>
                            <li><a class="dropdown-item" href="{{ route('alquiler', ['tipoPista' => '7', 'fecha' => now()->format('Y-m-d')]) }}">SpeedFactory Indoor Karting</a></li>
                        </ul>
                    </a>
                    </li>