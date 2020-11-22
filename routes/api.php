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

Route::get('/fruits', 'FruitController@index');
Route::get('/fruits/{id}', 'FruitController@show');
Route::post('/fruits', 'FruitController@store');
Route::delete('/fruits/{id}', 'FruitController@delete');
Route::patch('/fruits/{id}', 'FruitController@update');
