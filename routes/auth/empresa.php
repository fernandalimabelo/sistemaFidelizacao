<?php
Route::prefix('empresa')->name('empresa.')->namespace('Empresa')->group(function () {
    Auth::routes();
    Route::get('empresa/home', 'HomeController@indexEmpresa')->name('db_empresa');
    Route::middleware('auth:empresa')->group(function () {
        Route::get('another', 'AnotherController@index')->name('another');
    });
});
