<?php

use Illuminate\Http\Request;

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

Route::post('actions/login',  'AuthController@login');
Route::post('actions/logout', 'AuthController@logout');

Route::get('events',                    'EventController@index');
Route::get('events/{id}',               'EventController@show');
Route::post('events',                   'EventController@store');
Route::post('events/{id}/actions/edit', 'EventController@update');

Route::get('reports/events/{id}/sales', 'ReportController@export');
Route::get('reports/sales',             'ReportController@exportAll');
