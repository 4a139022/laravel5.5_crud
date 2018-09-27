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

Route::resource('news','BackendNewsController');
Route::resource('pages','BackendPagesController');
Route::resource('members','BackendMembersController');
Route::resource('product_categories','BackendProduct_categoriesController');

// Route::resource('products/','BackendProductsController');

Route::get('products/{product_categories_id}','BackendProductsController@index');

Route::get('products/{product_categories_id}/create','BackendProductsController@create');

Route::post('products/{product_categories_id}/store','BackendProductsController@store');

Route::delete('products/{product_categories_id}/{products_id}','BackendProductsController@destroy');

Route::get('products/{product_categories_id}/{products_id}/edit','BackendProductsController@edit');

Route::patch('products/{product_categories_id}/{products_id}/update','BackendProductsController@update');



