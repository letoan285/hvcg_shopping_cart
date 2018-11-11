<?php

Route::get('/', function () {
    //return 'hello world';
    return view('web.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
