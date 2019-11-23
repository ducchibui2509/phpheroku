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

Route::namespace('User')->group(function () {
    Route::get('/dashboard', 'UserDashboardController@index')->name('user.dashboard');
    Route::get('/public-post', 'MyPostController@publicPost')->name('user.public-post');
    Route::get('/pending-post', 'MyPostController@pendingPost')->name('user.pending-post');
    Route::get('/closed-post', 'MyPostController@closedPost')->name('user.closed-post');
    Route::get('/draft-post', 'MyPostController@draftPost')->name('user.draft-post');
    Route::get('/favorite-post', 'MyPostController@favoritePost')->name('user.favorite-post');
    Route::view('/messages', 'user.messages')->name('user.messages');
    Route::view('/profile', 'user.profile')->name('user.profile');
});

