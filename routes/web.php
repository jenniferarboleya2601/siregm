<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

//Colaboradores
Route::prefix('reportes/')->group(function () {
    Route::get('', 'ReporteController@index')->name('reportes_home');
    Route::post('listar', 'ReporteController@listar');
    Route::post('agregar', 'ReporteController@agregar');
    Route::post('cargarDatos', 'ReporteController@cargarDatos');
    Route::post('actualizar', 'ReporteController@actualizar');
    Route::post('eliminar', 'ReporteController@eliminar');
});

//Nomencladores
Route::prefix('nomencladores/')->group(function () {
    //Provincias
    Route::get('provincia', 'ProvinciaController@index')->name('provincia_home');
    Route::post('provincia/listar', 'ProvinciaController@listar');
    Route::post('provincia/agregar', 'ProvinciaController@agregar');
    Route::post('provincia/cargarDatos', 'ProvinciaController@cargarDatos');
    Route::post('provincia/actualizar', 'ProvinciaController@actualizar');
    Route::post('provincia/eliminar', 'ProvinciaController@eliminar');
    //Municipios
    Route::get('municipio', 'MunicipioController@index')->name('municipio_home');
    Route::post('municipio/listar', 'MunicipioController@listar');
    Route::post('municipio/agregar', 'MunicipioController@agregar');
    Route::post('municipio/cargarDatos', 'MunicipioController@cargarDatos');
    Route::post('municipio/actualizar', 'MunicipioController@actualizar');
    Route::post('municipio/eliminar', 'MunicipioController@eliminar');
});

Route::prefix('administrador/')->group(function () {
    Route::get('usuarios', 'UsuarioController@index')->name('usuarios_home');
    Route::post('usuarios/listar', 'UsuarioController@listar');
    Route::post('usuarios/agregar', 'UsuarioController@agregar');
    Route::post('usuarios/cargarDatos', 'UsuarioController@cargarDatos');
    Route::post('usuarios/actualizar', 'UsuarioController@actualizar');
    Route::post('usuarios/eliminar', 'UsuarioController@eliminar');
    Route::post('usuarios/deshabilitar', 'UsuarioController@deshabilitar');
    Route::post('usuarios/habilitar', 'UsuarioController@habilitar');
});
