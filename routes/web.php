<?php

Route::get('/', 'ClientController@getAllProducts')->name('client.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('categories/{id}/products', 'ClientController@getAllProductsByCategory');

Route::get('products/{id}', 'ClientController@showProduct')->name('showProduct');

Route::post('add-to-cart/{id}', 'CartController@addToCart')->name('addToCart');