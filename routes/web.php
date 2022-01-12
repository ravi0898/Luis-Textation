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

Route::get('/', 'PassportController@index')->middleware('access');
Route::group(['middleware'=>'loguser'],function(){
     Auth::routes();
Route::post('login', 'PassportController@login');
Route::get('dashboard', 'PassportController@dashboard')->name('dashboard');
Route::get('logout', 'PassportController@logout');

Route::get('new_users', 'ProductController@new_users_form');
Route::get('new_users_list', 'ProductController@new_users_list')->name('new_users_list');
Route::get('left_dashboard', 'PassportController@left_dashboard');
Route::post('userspost', 'ProductController@store');
Route::resource('add_users_list', 'ProductController');
Route::get('admin_chat', 'ProductController@admin_chat');
Route::get('/admin/chat/{id},{ticket_id}', 'ProductController@chat')->name('admin.chat');
Route::post('/admin/postchat/{id}', 'ProductController@postchat')->name('admin.postchat');

Route::get('/tasks/delete/{id}', 'ProductController@destroy')
     ->name('delete.destroy');

Route::get('listing', 'ProductController@listing');

Route::get('userChangeStatus', 'ProductController@userChangeStatus');

Route::get('admin/newchat', 'ProductController@newchat')->name('admin.newchat');
});

// user panel

Route::get('img_upload', 'UserController@img_upload');
Route::post('image', 'UserController@img_upload_post');   

Route::group(['middleware' =>[ 'web']], function () {
Route::get('login_users', 'UserController@index')->name('login_users');
Route::post('login_users_panel', 'UserController@login');
Route::get('users_dashboard', 'UserController@dashboard')->name('users_dashboard');
Route::get('userlogout', 'UserController@logout');
Route::get('add_ticket', 'UserController@add_ticket');
Route::get('users_profile', 'UserController@users_profile');
Route::post('profile_update', 'UserController@profile_update');


Route::post('save-multiple-files', 'UserController@store');
Route::get('/ticket/chat/{user_id},{id}', 'UserController@chat')->name('ticket.chat');
Route::get('/ticket/reply/{user_id},{id}', 'UserController@reply')->name('ticket.reply');
Route::post('/ticket/msg/{user_id},{id}', 'UserController@msg')->name('ticket.msg');
Route::get('user/newchat', 'UserController@newchat')->name('user.newchat');
});
// Route::middleware('auth:web')->group(function () {
//    // Route::get('user', 'PassportController@details');
 
//    // Route::resource('addusers', 'ProductController');
// Auth::routes();
// Route::get('login_users', 'Auth\LoginController@index')->name('login_users');
// Route::post('login_users_panel', 'Auth\LoginController@login');
// Route::get('users_dashboard', 'Auth\LoginController@dashboard')->name('users_dashboard');