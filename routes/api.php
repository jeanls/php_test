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

Route::get('incidents', 'IncidentController@index');
Route::get('incident/{id}', 'IncidentController@get');
Route::post('incident/save', 'IncidentController@save');
Route::put('incident/update/{id}', 'IncidentController@update');
Route::delete('incident/delete/{id}', 'IncidentController@delete');
