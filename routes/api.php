<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('signup', 'App\Http\Controllers\AuthController@signUp');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'App\Http\Controllers\AuthController@logout');
        Route::get('user', 'App\Http\Controllers\AuthController@user');
        Route::post('userUpdate', 'App\Http\Controllers\AuthController@update');


        Route::post('createGlass', 'App\Http\Controllers\GlassController@create');
        Route::get('destroyGlass', 'App\Http\Controllers\GlassController@destroy');
        Route::get('glass', 'App\Http\Controllers\GlassController@glass');

    });
});
