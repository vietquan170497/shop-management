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

//Backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@showDashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

//Category Stock
Route::get('/add-category-stock','CategoryProduct@addCategoryProduct');
Route::get('/all-category-stock','CategoryProduct@allCategoryProduct');


//Category Product
Route::get('/add-category-product','CategoryProduct@addCategoryProduct');
Route::get('/all-category-product','CategoryProduct@allCategoryProduct');
Route::post('/save-category-product','CategoryProduct@saveCategoryProduct');
Route::get('/edit-category-product/{categoryId}','CategoryProduct@editCategoryProduct');
Route::get('/delete-category-product/{categoryId}','CategoryProduct@deleteCategoryProduct');
Route::post('/update-category-product/{categoryId}','CategoryProduct@updateCategoryProduct');
//Route::post('/update-category-product/{productId}','CategoryProduct@updateCategoryProduct');











