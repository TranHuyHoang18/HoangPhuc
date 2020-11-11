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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    // Login Logout Tai khoan
    Route::get('/', 'Admin\AdminController@index')->name('admin');

    Route::get('/register', 'Admin\AdminController@create')->name('admin.register');
    Route::post('/register', 'Admin\AdminController@store')->name('admin.register.store');

    Route::get('/login', 'Admin\AdminLoginController@showLoginForm')->name('admin.auth.login');
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout/', 'Admin\AdminLoginController@logout')->name('admin.logout');
    Route::post('/logout', 'Admin\AdminLoginController@logout')->name('admin.auth.logout');

});
