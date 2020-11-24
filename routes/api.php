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

Route::get('/fruits', 'FruitController@index')->middleware('auth:api-fruits');
Route::get('/fruits/{id}', 'FruitController@show')->middleware('auth:api-fruits');
Route::post('/fruits', 'FruitController@store')->middleware('auth:api-fruits');
Route::delete('/fruits/{id}', 'FruitController@delete')->middleware('auth:api-fruits');
Route::patch('/fruits/{id}', 'FruitController@update')->middleware('auth:api-fruits');
