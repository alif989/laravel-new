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
Route::get('/test_auth', 'HomeController@index')->name('test_auth');
Route::get('add-product', 'product\ProductController@index')->name('add-product');
Route::post('store', 'product\ProductController@store')->name('store');
Route::get('product-list', 'product\ProductController@get_product')->name('product-list');
Route::get('menu', 'product\ProductController@get_menu')->name('menu');
Route::get('menu-view','MenuController@manageMenu')->name('menu-view');
Route::get('palindrome-view','PalindromeController@Palindrome')->name('palindrome-view');
Route::get('reverse','PalindromeController@reverse')->name('reverse');
