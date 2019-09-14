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
/*
Route::any('login','LoginController@index')->name('login');
Route::get('registration','RegistrationController@index')->name('registration');
Route::get('reports','ReportsController@index')->name('reports');
Route::get('crud','CrudController@create')->name('crud');
Route::post('store','CrudController@store')->name('store');
Route::any('user-list','CrudController@user_list')->name('user-list');
Route::any('edit','CrudController@edit')->name('edit');
Route::post('update','CrudController@update')->name('update');
Route::post('delete','CrudController@delete')->name('delete');
Route::get('test',[
    'middleware' => 'Test:this is middleware',
    'uses' => 'TestController@index',
]);
Route::post('test','CrudController@delete')->name('delete');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
