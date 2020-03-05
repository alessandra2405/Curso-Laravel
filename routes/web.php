<?php

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

use Illuminate\Support\Facades\Route;


//Route::get('permiso', 'PermisoController@index');
//Route::view('permiso', 'permiso');
//Route::get('permiso/{nombre}/{slug}', 'PermisoController@index'); //parametro nombre obligatorio
//Route::get('admin/sistema/permiso','PermisoController@index')->name('permiso');
/*Route::get('permiso/{nombre}', function ($nombre) {
    return $nombre;
})->where('nombre','[A-Za-z]+')->name('permiso');*/
Route::get('/', 'InicioController@index');
