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
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm')->name('adminlogin');
Route::post('admin/login', 'AdminAuth\LoginController@login');
Route::post('admin/logout', 'AdminAuth\LoginController@logout')->name('adminlogout');

Route::get('admin/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('adminregister');
Route::post('admin/register', 'AdminAuth\RegisterController@register');

