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

Route::get('cart', 'PageController@showCart');

Route::get('products', 'ProductController@showProducts');

Route::get('users', 'PageController@showUsers');

Route::get('admin', 'PageController@showDashboard');

Route::get('adminProducts', 'PageController@showAdminProducts');

Route::get('addNewProduct', 'PageController@showAddNewProduct');

Route::get('create', 'AuthController@showRegisterForm');

Route::get('login', 'AuthController@showLoginForm');

Route::get('logout', 'AuthController@logout');

Route::get('icons', 'PageController@showIcons');

Route::get('cart', 'CartController@showCart');

Route::post('create', 'AuthController@register');

Route::post('login', 'AuthController@login');

Route::post('addNewProduct', 'ProductController@add');

Route::post('products', 'CartController@add');

Route::post('cart', 'CartController@remove');