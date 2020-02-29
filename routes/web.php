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

//for all
Route::get('/', 'ProductsController@index')->name('home');
Route::get('/category/{id}','ProductsController@category')->name('category');
Route::get('/product/{product}', 'ProductsController@showProduct');
Route::get('/search', 'ProductsController@search')->name('search');

//for guests only
Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');

//for members only
Route::get('/logout', 'AuthController@logout')->name('logout')->middleware('auth.basic');
Route::get('/cart','CartController@index')->name('cart')->middleware('auth.basic');
Route::get('/add/{Product}','CartController@addItem')->name('addItem')->middleware('auth.basic');
Route::get('/subtract/{Product}','CartController@subtractItem')->name('subItem')->middleware('auth.basic');
Route::get('/cancel/{Product}','CartController@cancelItem')->name('cancelItem')->middleware('auth.basic');
Route::get('/co','CartController@checkOut')->name('co')->middleware('auth.basic');
Route::post('/co','CartController@order')->name('order')->middleware('auth.basic');
