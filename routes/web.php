<?php

Route::get('/', function()
    {return view('home');
});

Auth::routes();

//rota para Home Page   ==============================================================================================================
Route::get('/home', 'HomeController@index')->name('home');


//rota para Empresa   ==============================================================================================================
Route::get('empresa/home', 'HomeController@indexEmpresa')->middleware("auth:empresa")->name('db_empresa'); //dashboard empresa
Route::get('empresa/login', 'Empresa\Auth\LoginController@showLoginForm')->name('viewempresa.login');//retorna a view
Route::post('empresa/login', 'Empresa\Auth\LoginController@login')->name('empresa.login');// envia o form


Route::get('empresa/cadastrar', 'Empresa\Auth\RegisterController@showRegistrationForm')->name('viewRegisterEmpresa');//retorna a view
Route::post('empresa/cadastrar', 'Empresa\Auth\RegisterController@register')->name('registerEmpresa');// envia o form

Route::post('empresa/logout', 'Empresa\Auth\LoginController@logout')->name('logoutEmpresa'); // logout empresa

Route::post('empresa/produto', 'ProdutoController@store')->middleware("auth:empresa")->name('addProduto'); // adiciona produto

//rota para Usuário/Cliente   ==============================================================================================================
Route::get('user/home', 'HomeController@indexUser')->middleware("auth:user")->name('db_user'); //dashboard cliente*/

Route::get('user/home/promocoes', 'HomeController@showPrint')->middleware("auth:user")->name('db_user_print'); //print bilhete cliente*/

Route::get('user/login', 'User\Auth\LoginController@showLoginForm')->name('viewLoginUser'); //retorna a view
Route::post('user/login', 'User\Auth\LoginController@login')->name('loginUser'); //envia o form

Route::get('user/cadastrar', 'User\Auth\RegisterController@showRegistrationForm')->name('viewRegisterUser'); //retorna a view
Route::post('user/cadastrar', 'User\Auth\RegisterController@register')->name('registerUser'); //envia o form

Route::post('user/logout', 'User\Auth\LoginController@logout')->name('logoutUser'); //logout cliente