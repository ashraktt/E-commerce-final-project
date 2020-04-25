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
Auth::routes();
Route::get('/','pagecontroller@main');
Route::get('main','pagecontroller@main');
Route::get('show-categories/{category_id}','pagecontroller@show_categories');
Route::get('show-product/{product_id}','pagecontroller@show_product');
Route::get('add-product/{product_id}','pagecontroller@add_product');
Route::get('user-login','pagecontroller@user_login');
Route::get('signup','pagecontroller@signup');
Route::get('cart','pagecontroller@cart');
Route::get('delete-card/{id}','pagecontroller@delete_card');

/////// admin
Route::get('admin','CategoryController@index');

Route::resource('categories','CategoryController');
Route::get('delete-category/{id}','CategoryController@delete');
Route::resource('products','ProductController');
Route::get('delete-product/{id}','ProductController@delete');
