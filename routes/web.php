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

Route::get('/requestpassword', function () {
    return view('requestPassword');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/user', 'UserController' );
Route::resource('users', 'UserController' );
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
  });



Route::get('/editProfile', function () {
    return view('editProfile');
});

/*Route::get('/viewprofile', function () {
    return view('viewProfile');
});


Route::get('/createresearch', function () {
    return view('createResearch');
});

Route::get('/researchdetails', function () {
    return view('researchDetails');
});

Route::get('/listresearch', function () {
    return view('viewResearch');
});

Route::get('/editresearch', function () {
    return view('editResearch');
});

Route::get('/login', function () {
    return view('login');
}); */