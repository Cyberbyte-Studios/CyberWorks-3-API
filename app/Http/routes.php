<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'api/v1/core'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::resource('user', Auth\UserController::class);
    
    Route::group(['prefix' => 'module'], function () {
        Route::get('all', 'Module\ModuleController@all');
        Route::get('all/enabled', 'Module\ModuleController@enabled');
        Route::get('all/disabled', 'Module\ModuleController@disabled');
        Route::post('enable/{slug}', 'Module\ModuleController@enable');
        Route::get('enabled/{slug}', 'Module\ModuleController@isEnabled');
        Route::post('disable/{slug}', 'Module\ModuleController@disable');
        Route::get('disabled/{slug}', 'Module\ModuleController@isDisabled');
        Route::get('exists/{slug}', 'Module\ModuleController@exists');
    });    
});