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

// Route::get('/', function () {
//     return view('welcome');
// });




Auth::routes();
Route::get('/','SiteController@index')->name('index');
Route::get('/product','SiteController@product')->name('product');

Route::get('/dashboard','HomeController@index')->name('home');

//brand add
Route::get('/brand/add-brand','BrandController@addBrand')->name('add-brand');
Route::post('/brand/save-brand','BrandController@saveBrand')->name('save-brand');
Route::get('/brand/manage-brand','BrandController@manageBrand')->name('manage-brand');
Route::get('/brand/inactive/{test}','BrandController@inactive')->name('inactive-brand');
Route::get('/brand/active/{id}','BrandController@active')->name('active-brand');
Route::get('/brand/delete{id}','BrandController@delete')->name('delete-brand');
Route::get('/brand/edit/{id}','BrandController@edit')->name('edit-brand');
// Route::post('/brand/update/{id}','BrandController@updateBrand')->name('update-brand');
Route::post('/brand/update-brand','BrandController@updateBrand')->name('update-brand');

Route::get('/brand/brandStatus/{id}/{s}','BrandController@brandStatus')->name('brandStatus');

//category

Route::get('/category/manage-category','CategoryController@manageCategory')->name('manage-category');

Route::get('/category/add-category','CategoryController@addCategory')->name('add-category');
Route::post('/category/save-category','CategoryController@saveCategory')->name('save-category');

Route::get('/category/manage-sub-category','SubcategoryController@manageSubCategory')->name('manage-subcategory');
Route::get('/category/manage-sub-sub-category','SubcategoryController@manageSubsubCategory')->name('manage-subsubcategory');
Route::get('/category/categoryStatus/{id}/{s}','CategoryController@categoryStatus')->name('categoryStatus');
Route::get('/category/edit/{id}','CategoryController@edit')->name('edit-category');
Route::get('/category/delete/{id}','CategoryController@delete')->name('delete-category');
Route::post('/category/update-category','CategoryController@updateCategory')->name('update-category');


// Route::get('/brand/delete{id}','BrandController@delete')->name('delete-brand');
// Route::get('/brand/edit/{id}','BrandController@edit')->name('edit-brand');


