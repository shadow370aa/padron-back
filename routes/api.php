<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//EJEMPLO DE PARA LAS ACCIONES ¡¡¡ NO BORRAR !!
Route::get('/prueba','PruebaController@index');//consultar todo
Route::get('/prueba/{prueba}','PruebaController@show');//consultar por id
Route::get('/prueba_metodo','PruebaController@funcion_custom');
Route::post('/prueba','PruebaController@store');//insertar datoss
Route::put('/prueba/{prueba}','PruebaController@update');//actualizacion
Route::delete('/prueba_eliminar/{prueba}','PruebaController@destroy');//eliminar
/////////////////////////////////////////////////////////////////////////////////////
Route::get('/todo','PruebaController@index');//consultar todo
//Route::get('/consulta/{mas_pda}','MasPdaController@show');//consultar por id
Route::get('/consulta','MasPdaController@show');//consultar por id