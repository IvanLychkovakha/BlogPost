<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['namespace' => "Auth"], function () {

    Route::group(['middleware' => 'guest'], function () {
        /* LOGIN */
        Route::get('sign-in', 'AccessController@index')->name('auth.signin');
        Route::post('access', 'AccessController@store')->name('auth.access');

        /* REGISTER */
        Route::get('sign-up', 'UserController@index')->name('auth.signup');
        Route::post('access/create', 'UserController@store')->name('auth.create');
    });

    Route::group(['middleware' => 'auth'], function () {

        /* Get profile */
        Route::get('profile', 'UserController@show')->name('user.profile');

        /* Update profile */
        Route::post('profile', 'UserController@update')->name('user.update');

        /* Update logout */
        Route::delete('logout', 'AccessController@destroy')->name('auth.logout'); // logout
    });
});



Route::group(['middleware' => ['auth']], function () {

    Route::get('posts/create', 'PostController@create')->name('post.create');
    Route::post('posts', 'PostController@store')->name('posts.store');

    Route::group(['middleware' => ['userPosts']], function () {
        Route::get('posts/{post}/edit', 'PostController@edit')->name('post.edit');
        Route::post('posts/{post}', 'PostController@update')->name('posts.update');
        Route::delete('posts/{post}', 'PostController@destroy')->name('posts.destroy');

    });

});

Route::get('/', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');

