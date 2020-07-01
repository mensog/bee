<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'MainController@index')->name('main');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/orders', 'OrderController@index')->name('admin_orders');
    Route::get('/products', 'ProductController@index')->name('admin_products');
});
Route::get('/catalog', 'CategoryController@index')->name('catalog');
Route::get('/category/{name}', 'CategoryController@show')->name('category');
Route::get('/product/{name}', 'ProductController@show')->name('product');
Route::get('/cart', 'CartController@show')->name('cart');
Route::get('/addtocart', 'CartController@addProduct')->name('add_to_cart');
Route::get('/removefromcart', 'CartController@removeProduct')->name('remove_from_cart');
Route::get('/checkout', 'CartController@showCheckout')->middleware('auth')->name('checkout_page');
Route::post('/order', 'OrderController@create')->middleware('auth')->name('place_order');

Route::post('/api/cart', 'CartController@api')->name('api_cart');

Auth::routes();
Route::get('/personal-data-agreement', 'StaticPageController@personalDataAgreement')->name('personal-data-agreement');

Route::get('/home', 'HomeController@index')->name('home');
