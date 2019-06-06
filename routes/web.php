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

Route::get('/inicio', function(){
  return view('inicio');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'ProductsController@allProducts');

Route::get('/agregar', 'CategoriesController@allCategories');

Route::get('/agregar', 'BrandsController@allBrands');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/agregar', function(){
  return view("agregarProducto");
});

Route::post('/agregar', 'ProductsController@agregar');
