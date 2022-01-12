<?php

use Illuminate\Http\Request;

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
Auth::routes();
Route::get('/', 'PassportController@index');
Route::post('login', 'PassportController@login');
Route::get('dashboard', 'PassportController@dashboard')->name('dashboard');
Route::get('logout', 'PassportController@logout')->middleware('auth:web');

Route::get('new_users', 'ProductController@new_users_form');
Route::get('new_users_list', 'ProductController@new_users_list')->name('new_users_list');
Route::get('left_dashboard', 'PassportController@left_dashboard');
Route::post('userspost', 'ProductController@store');
Route::resource('add_users_list', 'ProductController');

Route::get('/tasks/delete/{id}', 'ProductController@destroy')
     ->name('delete.destroy');

Route::get('listing', 'ProductController@listing');

Route::get('userChangeStatus', 'ProductController@userChangeStatus');
// Route::middleware('auth:web')->group(function () {
//    // Route::get('user', 'PassportController@details');
 
//    // Route::resource('addusers', 'ProductController');
// });