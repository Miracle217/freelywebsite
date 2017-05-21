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

// Content API
Route::get('/contents', 'ContentController@getAll');
Route::get('/content/{id}', 'ContentController@get');
Route::post('/content', 'ContentController@create');
Route::put('/content/{id}', 'ContentController@update');
Route::delete('/content/{id}', 'ContentController@delete');

// Slide API
Route::get('/slides', 'SlideController@getAll');
Route::get('/slide/{id}', 'SlideController@get');
Route::post('/slide', 'SlideController@create');
Route::put('/slide/{id}', 'SlideController@update');
Route::delete('/slide/{id}', 'SlideController@delete');
