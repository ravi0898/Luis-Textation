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
Route::get('/', 'PassportController@index');
Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');
Route::get('logout', 'PassportController@logout')->middleware('auth:api');
Route::post('suspend', 'ProductController@suspend')->middleware('auth:api');

 
Route::middleware('auth:api')->group(function () {
    Route::get('user', 'PassportController@details');
 
    Route::resource('addusers', 'ProductController');
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
