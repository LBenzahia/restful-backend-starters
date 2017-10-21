<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'private/v1'], function()
{
    // Matches The "/private/api/v1/" URL
    // items crud api
    Route::get('/todos/{id}', 'TodoController@show');
    Route::get('/todos', 'TodoController@showAll');

});
