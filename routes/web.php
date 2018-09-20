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

Route::get('/', function () {
    return view('usuario.login');
});

Route::group(['prefix' => 'users'], function() {
    Route::get('login', 'UsuarioController@index')->name('users.get.login');
    Route::post('login', 'UsuarioController@login')->name('users.post.login');
});
