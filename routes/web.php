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

Route::get('home', function () {
    return view('home.home');
})->name('home');

Route::group(['prefix' => 'users'], function () {
    Route::get('login', 'UsuarioController@index')->name('users.get.login');
    Route::post('login', 'UsuarioController@login')->name('users.post.login');
    Route::get('logout', 'UsuarioController@logout')->name('users.logout');
    Route::get('register', 'UsuarioController@create')->name('users.create');
    Route::post('store', 'UsuarioController@store')->name('users.store');
});

Route::group(['prefix' => 'clients'], function () {
    Route::get('', 'ClienteController@index')->name('clients.index');
    Route::get('create', 'ClienteController@create')->name('clients.create');
    Route::post('store', 'ClienteController@store')->name('clients.store');
});
