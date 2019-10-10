<?php

Route::get('/', function () {
    return view('admin.dashboard');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
