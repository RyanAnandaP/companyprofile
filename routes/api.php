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


Route::post('/upload/{type}','DownloadController@upload');
Route::get('/download/{type}/{when}','DownloadController@download');

Route::post('/delete/{type}','DownloadController@delete');

// Route::get('/') 