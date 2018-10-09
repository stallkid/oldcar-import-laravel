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

Route::group(['prefix' => 'clients', 'middleware' => 'usersession'], function () {
    Route::get('', 'ClienteController@index')->name('clients.index');
    Route::get('create', 'ClienteController@create')->name('clients.create');
    Route::post('store', 'ClienteController@store')->name('clients.store');
    Route::get('edit/{id}', 'ClienteController@edit')->name('clients.edit');
    Route::put('update/{id}', 'ClienteController@update')->name('clients.update');
    Route::get('delete/{id}', 'ClienteController@destroy')->name('clients.delete');
});

Route::group(['prefix' => 'colaboradores', 'middleware' => 'usersession'], function () {
    Route::get('', 'ColaboradorController@index')->name('colaboradores.index');
    Route::get('create', 'ColaboradorController@create')->name('colaboradores.create');
    Route::post('store', 'ColaboradorController@store')->name('colaboradores.store');
    Route::get('edit/{id}', 'ColaboradorController@edit')->name('colaboradores.edit');
    Route::put('update/{id}', 'ColaboradorController@update')->name('colaboradores.update');
    Route::get('delete/{id}', 'ColaboradorController@destroy')->name('colaboradores.delete');
});

Route::group(['prefix' => 'veiculos', 'middleware' => 'usersession'], function () {
    Route::get('', 'VeiculoController@index')->name('veiculos.index');
    Route::get('create', 'VeiculoController@create')->name('veiculos.create');
    Route::post('store', 'VeiculoController@store')->name('veiculos.store');
    Route::get('edit/{id}', 'VeiculoController@edit')->name('veiculos.edit');
    Route::put('update/{id}', 'VeiculoController@update')->name('veiculos.update');
    Route::get('delete/{id}', 'VeiculoController@destroy')->name('veiculos.delete');
});

Route::group(['prefix' => 'vendas', 'middleware' => 'usersession'], function () {
    Route::get('', 'VendaController@index')->name('vendas.index');
    Route::get('create', 'VendaController@create')->name('vendas.create');
    Route::post('store', 'VendaController@store')->name('vendas.store');
    Route::get('edit/{id}', 'VendaController@edit')->name('vendas.edit');
    Route::put('update/{id}', 'VendaController@update')->name('vendas.update');
    Route::get('delete/{id}', 'VendaController@destroy')->name('vendas.delete');
});
