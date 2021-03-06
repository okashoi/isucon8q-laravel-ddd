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

Route::get('users/{id}', 'UserController@show');
Route::post('users',     'UserController@store');

Route::get('events',                       'EventController@index');
Route::get('events/{id}',                  'EventController@show');
Route::post('events/{id}/actions/reserve', 'EventController@reserve');
Route::delete('events/{id}/sheets/{rank}/{num}/reservation',
                                           'EventController@cancelReservation');
