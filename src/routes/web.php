<?php

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

Route::get('/initialize', function () {
    exec(database_path('init.sh'));

    return response(null, 204);
});

Route::get('/', function () {
    return view('welcome');
});
