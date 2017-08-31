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

Route::get('/', 'PageController@index');

Route::get('admin', 'PageController@showDashboard');

Route::get('cart', 'PageController@showCart');

Route::get('products', 'PageController@showProducts');

Route::get('users', 'PageController@showUsers');

Route::get('orders', 'PageController@showOrders');

Route::get('adminProducts', 'PageController@showAdminProducts');

Route::get('create', 'AuthController@showRegisterForm');
Route::post('create', 'AuthController@register');

Route::get('login', 'AuthController@showLoginForm');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');

Route::get('icons', 'PageController@showIcons');