<?php
Route::prefix('user')->name('user.')->namespace('User')->group(function () {
    Auth::routes();
    Route::get('user/home', 'HomeController@indexUser')->name('db_user');
    Route::middleware('auth:user')->group(function () {
        Route::get('another', 'AnotherController@index')->name('another');
    });
});