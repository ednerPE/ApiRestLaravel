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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoria', 'App\Http\Controllers\categoriaController@getCategoria');
Route::get('categoria/{id}', 'App\Http\Controllers\categoriaController@getCategoriaId');
Route::post('createcategoria', 'App\Http\Controllers\categoriaController@createCategoria');
Route::post('updatecategoria/{id}', 'App\Http\Controllers\categoriaController@updateCategoria');
Route::delete('deletecategoria/{id}', 'App\Http\Controllers\categoriaController@deleteCategoria');
