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
    Route::get('items', function()
    {
        // Matches The "/private/api/v1/" URL
        return response()->json([
          ['item_id' => 1,
          'item_content' => 'item content'],
          ['item_id' => 2,
          'item_content' => 'item content'],
          ['item_id' => 3,
          'item_content' => 'item content'],
        ]);
    });
});
