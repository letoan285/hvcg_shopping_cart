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
    //return 'hello world';
    $cates = DB::table('categories')->get();
    //dd($cates);
    return view('admin.dashboard');
});

Route::get('/dashboard', function () {
    //return 'hello world';
    $cates = DB::table('categories')->get();
    //dd($cates);
    return view('admin.dashboard');
})->name('dashboard');

Route::get('categories', 'CategoryController@index')->name('categories.index');

Route::get('products', 'ProductController@index')->name('products.index');

Route::get('categories/create', 'CategoryController@create')->name('categories.create');

Route::post('categories', 'CategoryController@store')->name('categories.store');

Route::get('products/create', 'ProductController@create')->name('products.create')->middleware('isAdmin');

Route::post('products', 'ProductController@store')->name('products.store');

Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');

Route::post('products/{id}', 'ProductController@update')->name('products.update');

Route::get('products/{id}', 'ProductController@show')->name('products.show');


Route::get('products/{id}/destroy', 'ProductController@destroy')->name('products.destroy');