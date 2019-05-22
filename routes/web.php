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


/** INDEX ROUTE */
Route::get('/', function () {
    return view('welcome');
});

/**AUTHENTICATION ROUTES */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**RESOURCE ROUTES (AUTHENTICATION REQUIRED) */
Route::resource('/products', 'ProductController')->middleware('auth');
