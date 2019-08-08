<?php

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

Route::group(['namespace' => 'Api', 'middleware' => 'api'], function () {

    Route::group(['prefix' => 'boards'], function () {
        Route::get('/{board}', 'Board\BoardController@get');
    });;
});
