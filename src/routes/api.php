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
        Route::get('/{board}/all', 'Board\BoardController@getAll');
        Route::post('/{board}', 'Board\BoardController@update');

        Route::post('/{board}/task/new', 'Task\TaskController@addTask');
        Route::post('/{board}/task/delete', 'Task\TaskController@deleteTask');
    });;
});
