<?php

Auth::routes();

Route::resource('/', 'AdminController');
// Route::post('/', 'AdminController@save')->name('admin');
