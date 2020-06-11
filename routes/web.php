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
    return view('pages/main');
})->name('home');
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
Route::post('/checkout', 'OrderController@create')->name('checkout');

