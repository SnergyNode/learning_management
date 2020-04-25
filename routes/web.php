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

Route::get('/', 'HomeController@index')->name('home');
Route::get('forgot-password', 'HomeController@forgot_password')->name('forgot.password');
Route::get('register', 'HomeController@register')->name('register');
Route::post('login', 'AuthController@authenticate')->name('sign_in');
Route::post('register', 'AuthController@register')->name('sign_up');
Route::post('forgot_password', 'AuthController@send_pass_reset_link')->name('forgot_password');
Route::get('u/account/{token}', 'AuthController@activate_me')->name('activate.account');

Route::group(['middleware'=>'access'], function () {
    Route::prefix('console')->group(function () {
        Route::get('dashboard', 'UserController@dashboard')->name('client.dashboard');
        Route::get('my-courses', 'UserController@mycourses')->name('my-courses');
        Route::get('courses', 'UserController@showcourses')->name('courses');


        Route::get('logout', 'AuthController@logout')->name('logout');
    });
});
