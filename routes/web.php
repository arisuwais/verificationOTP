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
Route::get('/verification', 'UserController@verification')->name('verification');
Route::post('/post/verification', 'UserController@postVerification');

Route::post('/post/resend', 'UserController@postResend');
Route::get('/resend/direct/{otp}', 'UserController@postResendDirect');
