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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

Route::get('/redirect/google', 'SocialAuthController@redirect_google');
Route::get('/callback/google', 'SocialAuthController@callback_google');

Route::get('/redirect/github', 'SocialAuthController@redirect_github');
Route::get('/callback/github', 'SocialAuthController@callback_github');