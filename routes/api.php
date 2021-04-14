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

Route::get('/get-product','App\Http\Controllers\MainController@getFromBD');

Route::post('/add','App\Http\Controllers\MainController@add');

Route::put('/edit/{id}','App\Http\Controllers\MainController@edit');

Route::delete('/delete/{id}','App\Http\Controllers\MainController@delete');

Route::get('/get-product/{id}','App\Http\Controllers\MainController@porductById');
