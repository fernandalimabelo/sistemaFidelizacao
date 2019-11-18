<?php

require 'auth/user.php';
require 'auth/empresa.php';

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('empresa/home', 'HomeController@indexEmpresa')->name('db_empresa');

Route::get('user/home', 'HomeController@indexUser')->name('db_user');

//rota de produtos
Route::resource('product', 'ProdutoController');
