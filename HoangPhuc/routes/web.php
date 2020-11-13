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
Route::group(['prefix' => 'filemanager', 'middleware' => ['auth:admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::prefix('admin')->group(function() {
    // Login Logout Tai khoan
    Route::get('/', 'Admin\AdminController@index')->name('admin');

    Route::get('/register', 'Admin\AdminController@create')->name('admin.register');
    Route::post('/register', 'Admin\AdminController@store')->name('admin.register.store');

    Route::get('/login', 'Admin\AdminLoginController@showLoginForm')->name('admin.auth.login');
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout/', 'Admin\AdminLoginController@logout')->name('admin.logout');
    Route::post('/logout', 'Admin\AdminLoginController@logout')->name('admin.auth.logout');

    // quan tri danh muc
    Route::prefix('danh-muc')->group(function() {
        Route::get('/', 'Admin\CategoryController@index')->name('admin.category.index');
        Route::post('/store', 'Admin\CategoryController@store')->name('admin.category.store');
        Route::get('/edit/{id}', 'Admin\CategoryController@edit')->name('admin.danhmuc.edit');
        Route::post('/edit/{id}', 'Admin\CategoryController@update')->name('admin.danhmuc..update');
        Route::get('/delete/{id}', 'Admin\CategoryController@destroy')->name('admin.danhmuc.delete');
    });

    // quan tri media
    Route::group(['prefix'=>'media'],function() {
        Route::get('/', 'Admin\MediaController@index')->name('admin.media.index');
    });

    // quan tri danh muc
    Route::prefix('san-pham')->group(function() {
        Route::get('/', 'Admin\ProductController@index')->name('admin.product.index');
        Route::post('/store', 'Admin\ProductController@store')->name('admin.product.store');
        Route::get('/edit/{id}', 'Admin\ProductController@edit')->name('admin.product.edit');
        Route::post('/edit/{id}', 'Admin\ProductController@update')->name('admin.product.update');
        Route::get('/delete/{id}', 'Admin\ProductController@destroy')->name('admin.product.delete');
    });
});
