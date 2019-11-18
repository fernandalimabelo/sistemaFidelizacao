<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//rota para Home Page   ==============================================================================================================
Route::get('/home', 'HomeController@index')->name('home');

//rota para Empresa   ==============================================================================================================
Route::get('empresa/home', 'HomeController@indexEmpresa')->name('db_empresa');
Route::get('empresa/login', 'Empresa\Auth\LoginController@showLoginForm')->name('loginEmpresa');
Route::get('empresa/cadastrar', 'Empresa\Auth\RegisterController@showRegistrationForm')->name('registerEmpresa');
Route::post('empresa/logout', 'Empresa\Auth\LoginController@logout')->name('logoutEmpresa');

Route::post('empresa/produto', 'ProdutoController@store')->name('addProduto');


//rota para Usuário/Cliente   ==============================================================================================================
Route::get('user/home', 'HomeController@indexUser')->name('db_user');
Route::get('user/login', 'User\Auth\LoginController@showLoginForm')->name('loginUser');
Route::get('user/cadastrar', 'User\Auth\RegisterController@showRegistrationForm')->name('registerUser');
Route::post('user/logout', 'User\Auth\LoginController@logout')->name('logoutUser');