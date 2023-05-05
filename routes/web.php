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
Route::get('/eventos/torneo', 'App\Http\Controllers\EventosController@index')->name('crear_torneo');
Route::get('/eventos/cumple', 'App\Http\Controllers\EventosController@index')->name('crear_cumple');

Route::get('/circuitos', 'App\Http\Controllers\CircuitosController@index')->name('circuitos');

Route::get('/pistas/alquiler/nuevo/{tipoPista}/{fecha}', 'App\Http\Controllers\AlquilerController@index')->name('alquiler');
Route::post('/pistas/alquiler/nuevo/guardarReserva', 'App\Http\Controllers\AlquilerController@guardar_reserva')->name('alquiler.guardar_reserva');

Route::get('/registro', 'App\Http\Controllers\UserController@showRegister')->name('registro');
Route::post('/registro', [UserController::class,'register'])->name('registro');

Route::get('/login', 'App\Http\Controllers\UserController@showLogin')->name('login');
Route::post('/login', [UserController::class,'login'])->name('login');
//Route::post('/login',function(){return request('nombre');});

Route::get('/Profile/ReservaUsuario', 'App\Http\Controllers\ReservaUsuarioController@index')->name('ReservaUsuario');

Route::get('/admin', [AdminController::class, 'Home'])->name('adminHome');
Route::get('/GenerarPistas', [AdminController::class, 'GenerarPistas'])->name('GenerarPistas');
Route::get('/EliminarPistas', [AdminController::class, 'EliminarPistas'])->name('EliminarPistas');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
