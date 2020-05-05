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

Route::get('/', 'PagesController@index');
Route::get('search', 'PostsController@search');

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/login', 'PagesController@login');

Route::resource('posts', 'PostsController');
Route::get('/clothing', 'PostsController@clothing');
Route::get('/food', 'PostsController@food');
Route::get('/technology', 'PostsController@technology');
Route::get('/others', 'PostsController@others');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});



