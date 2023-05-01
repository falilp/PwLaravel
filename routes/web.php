<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/circuitos', 'App\Http\Controllers\CircuitosController@index')->name('circuitos');

Route::get('/pistas/alquiler/nuevo/{codPista}/{fecha}', 'App\Http\Controllers\AlquilerController@index')->name('alquiler');
Route::post('/pistas/alquiler/nuevo/guardarReserva', 'App\Http\Controllers\AlquilerController@guardar_reserva')->name('alquiler.guardar_reserva');

Route::get('/registro', 'App\Http\Controllers\UserController@showRegister')->name('registro');
Route::post('/registro', [UserController::class,'register'])->name('registro');

Route::get('/login', 'App\Http\Controllers\UserController@showLogin')->name('login');
Route::post('/login', [UserController::class,'login'])->name('login');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
