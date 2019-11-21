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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'UserDashboardContoller@index')->name('user.dashboard');
Route::view('/profile', 'user.profile')->name('user.profile');
Route::view('/public-post', 'user.public-post')->name('user.public-post');
Route::view('/pending-post', 'user.pending-post')->name('user.pending-post');
Route::view('/closed-post', 'user.closed-post')->name('user.closed-post');
Route::view('/favorite-post', 'user.favorite-post')->name('user.favorite-post');
Route::view('/recent-view-post', 'user.recent-view-post')->name('user.recent-view-post');
Route::view('/messages', 'user.messages')->name('user.messages');
