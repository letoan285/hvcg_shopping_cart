<?php

Route::get('/', 'ClientController@getAllProducts')->name('client.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
