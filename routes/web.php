<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
});

Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return view('Home');
});

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile');

Route::get('/pistas', 'App\Http\Controllers\PistasController@index')->name('pistas');

Route::get('/eventos', 'App\Http\Controllers\EventosController@index')->name('eventos');
Route::post('/eventos/torneo/{codEvento}/{tipoPista}/{descripcion}/{fechaEvento}', 'App\Http\Controllers\EventosController@alta_individual')->name('Eventos.registro_indv');
Route::get('/eventos/torneo/Registro/Equipo/{codEvento}/{tipoPista}/{descripcion}/{fechaEvento}', 'App\Http\Controllers\FormularioEquipoController@index')->name('FormularioEquipo');


Route::get('/circuitos', 'App\Http\Controllers\CircuitosController@index')->name('circuitos');

Route::get('/pistas/alquiler/nuevo/{tipoPista}/{fecha}', 'App\Http\Controllers\AlquilerController@index')->name('alquiler');
Route::post('/pistas/alquiler/nuevo/guardarReserva', 'App\Http\Controllers\AlquilerController@guardar_reserva')->name('alquiler.guardar_reserva');

Route::get('/registro', 'App\Http\Controllers\UserController@showRegister')->name('registro');
Route::post('/registro', [UserController::class,'register'])->name('registro');

Route::get('/login', 'App\Http\Controllers\UserController@showLogin')->name('login');
Route::post('/login', [UserController::class,'login'])->name('login');
//Route::post('/login',function(){return request('nombre');});

Route::get('/Profile/ReservaUsuario', 'App\Http\Controllers\ReservaUsuarioController@index')->name('ReservaUsuario');
Route::get('/Profile/EventosUsuario', 'App\Http\Controllers\EventosUsuarioController@index')->name('EventosUsuario');
Route::put('/Profile/actualizar', 'App\Http\Controllers\ProfileController@actualizarUsuario')->name('ActualizarUsuario');


Route::post('/Profile/ReservaUsuario/EliminarReserva/{codPista}', 'App\Http\Controllers\ReservaUsuarioController@eliminar_reserva')->name('ReservaUsuario.eliminar_reserva');
Route::post('/eventos', 'App\Http\Controllers\EventosController@guardar_evento')->name('eventos.guardar');

Route::get('/admin', [AdminController::class, 'Home'])->name('adminHome');

Route::get('/GenerarPistas', [AdminController::class, 'GenerarPistas'])->name('GenerarPistas');
Route::get('/EliminarPistas', [AdminController::class, 'EliminarPistas'])->name('EliminarPistas');
Route::get('/ListaPistas', [AdminController::class, 'ListaPistas'])->name('ListaPistas');
Route::get('/ModificarPista/{pista}', [AdminController::class, 'ModificarPista'])->name('ModificarPista');
Route::put('/actualizarPista/{codPista}', [AdminController::class, 'actualizarPista'])->name('actualizarPista');

Route::get('/ListaUsuarios', [AdminController::class, 'ListaUsuarios'])->name('ListaUsuarios');
Route::get('/ModificarUsuario/{usuario}', [AdminController::class, 'ModificarUsuario'])->name('ModificarUsuario');
Route::put('/actualizarUser/{id}', [AdminController::class, 'actualizarUser'])->name('actualizarUser');

Route::get('/ListaEventos', [AdminController::class, 'ListaEventos'])->name('ListaEventos');
Route::get('/ModificarEvento/{evento}', [AdminController::class, 'ModificarEvento'])->name('ModificarEvento');
Route::put('/actualizarEvento/{codEvento}', [AdminController::class, 'actualizarEvento'])->name('actualizarEvento');

Route::get('/ListaAlquiler', [AdminController::class, 'ListaAlquiler'])->name('ListaAlquiler');
Route::get('/ModificarAlquiler/{alquiler}', [AdminController::class, 'ModificarAlquiler'])->name('ModificarAlquiler');
Route::put('/actualizarAlquiler/{codPista}', [AdminController::class, 'actualizarAlquiler'])->name('actualizarAlquiler');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
