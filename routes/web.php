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

Route::get('/', 'MainController@index');
Route::get('/shops', 'MainController@shops');
Route::get('/recent', 'MainController@recent');
Route::get('/popular', 'MainController@popular');
Route::get('/top', 'MainController@top');
Route::get('/search', 'MainController@search');
Route::get('/cart', 'MainController@cart');
Route::get('/product/{id}', 'MainController@product');
Route::get('/order/cek', 'MainController@orderCek');
Route::get('/order/proof', 'MainController@orderProof');
Route::get('/category/{ctr}', 'MainController@category');
Route::get('/tags/{ctr}', 'MainController@tags');
Route::get('/signin', 'MainController@signin');
Route::get('/signup', 'MainController@signup');
