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

Route::get('/', 'MainController@index')->name('home');
Route::get('/catalog', 'CategoryController@index')->name('catalog');
Route::get('/category/{name}', 'CategoryController@show')->name('category');
Route::get('/product/{name}', 'ProductController@show')->name('product');
Route::get('/cart', 'CartController@show')->name('cart');
Route::get('/addtocart', 'CartController@addProduct')->name('add_to_cart');
Route::get('/removefromcart', 'CartController@removeProduct')->name('remove_from_cart');
Route::post('/checkout', 'OrderController@create')->name('checkout');

