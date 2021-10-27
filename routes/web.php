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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/' , 'App\Http\Controllers\NotaController@index')->name('Inicio');
Route::post('/agregar' , 'App\Http\Controllers\NotaController@store')->name('store');
Route::get('/editar/{id}' , 'App\Http\Controllers\NotaController@edit')->name('editar');
Route::put('/update/{id}' , 'App\Http\Controllers\NotaController@update')->name('update');
Route::delete('/eliminar/{id}' , 'App\Http\Controllers\NotaController@destroy')->name('eliminar');