<?php

namespace App\Http\Controllers;

use App\Models\Address;
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

Route::apiResource('users', UserController::class);

Route::get('/address', 'App\\Http\\Controllers\\AddressController@index');
Route::get('/address/{id}', 'App\\Http\\Controllers\\AddressController@show');

Route::get('/cidade', 'App\\Http\\Controllers\\CidadeController@index');
Route::get('/cidade/{id}', 'App\\Http\\Controllers\\CidadeController@show');

Route::get('/estado', 'App\\Http\\Controllers\\EstadoController@index');
Route::get('/estado/{id}', 'App\\Http\\Controllers\\EstadoController@show');

Route::get('usersPorCidade', 'App\\Http\\Controllers\\UserController@usersPorCidade');
Route::get('usersPorEstado', 'App\\Http\\Controllers\\UserController@usersPorEstado');
