<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'private/api/v1'], function()
{
    // Matches The "/private/api/v1/" URL
    // items crud api
    Route::get('items', 'ItemController@getItems');
    Route::get('item/{id}', 'ItemController@getItem');
    Route::post('item', 'ItemController@createItem');
    Route::post('item', 'ItemController@updateItem');
    Route::delete('item', 'ItemController@deleteItem');
});
