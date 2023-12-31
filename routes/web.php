<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use  App\Http\Controllers\AdministradorController;
use  App\Http\Controllers\UsuarioController;
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::controller(loginController::class)->group(function(){
    Route::get('/','inicioLogin')->name('inicio');
    Route::post('/login','validar')->name('validarLogin');
});

Route::controller(AdministradorController::class)->group(function(){
    Route::get('/dashboard','getDatos')->name('getDato');
});

Route::controller(UsuarioController::class)->group(function(){
    Route::get('/Usuarios','index')->name('indexUsuarios');
    Route::get('/Usuarios/create','create')->name('createUsuarios');
    Route::post('/Usuarios','store')->name('storeUsuario'); // Cambié la URL a POST para crear usuarios
    Route::get('/Usuarios/{id}','show')->name('showUsuario');
    Route::get('/Usuarios/{id}/edit','edit')->name('editUsuario'); // Cambié la URL a GET para editar usuarios
    Route::put('/Usuarios/{id}','update')->name('updateUsuario'); // Cambié la URL a PUT para actualizar usuarios
    Route::delete('/Usuarios/{id}','destroy')->name('destroyUsuario'); // Ruta para eliminar usuarios
});
Route::get('dashboard/user', function () {
    return view('user');
});
Route::get('dashboard/pacientes', function () {
    return view('pacientes');
});

Route::post('/guardar_paciente', 'PacienteController@store')->name('guardar_paciente');
