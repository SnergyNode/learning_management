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
Route::post('admin/login', 'AuthController@authenticateAdmin')->name('admin.sign_in');
Route::post('register', 'AuthController@register')->name('sign_up');
Route::post('forgot_password', 'AuthController@send_pass_reset_link')->name('forgot_password');
Route::get('u/account/{token}', 'AuthController@activate_me')->name('activate.account');
Route::get('portal.admin', 'HomeController@admin')->name('admin.login');

/**
 * USER AUTH ROUTES BELOW
 */
Route::group(['middleware'=>'access'], function () {
    Route::prefix('console')->group(function () {
        Route::get('dashboard', 'UserController@dashboard')->name('client.dashboard');
        Route::get('my-courses', 'UserController@mycourses')->name('my-courses');
        Route::get('courses', 'UserController@showcourses')->name('courses');
        Route::get('re_activate/mail', 'AuthController@resend_code')->name('re.activate.mail');
        Route::get('my-course/course_title', 'UserController@curriculum')->name('take.course');

        Route::get('assessments', 'UserController@assessments')->name('assessments');
        Route::get('take-assessment/{unid}', 'UserController@take_assess')->name('take.assessment');

        Route::get('logout', 'AuthController@logout')->name('logout');
    });
});


/**
 * ADMIN AUTH ROUTES BELOW
 */
Route::group(['middleware'=>'admin'], function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('courses', 'AdminController@showcourses')->name('courses');
        Route::resource('assess', 'AssessmentController');
        Route::resource('user', 'UserController');
        Route::resource('quest', 'QuestionController');

        Route::get('assessment/manage/{unid}', 'AssessmentController@manage')->name('manage.assessment');

        Route::get('logout', 'AuthController@logoutAdmin')->name('admin.logout');

    });
});

Route::get('seed_admin/{email}', 'MyController@seeder');

