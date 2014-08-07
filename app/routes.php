<?php

Route::get('/', array('as' => 'home', 'uses' => 'PagesController@home'));
Route::get('/about', array('as' => 'about', 'uses' => 'PagesController@about'));

Route::get('/admin', array('as' => 'admin.index', 'uses' => 'AdminController@index'));
Route::get('/admin/countries/create', array('as' => 'admin.countries.create', 'uses' => 'AdminController@countries_create'));
Route::post('/admin/countries', array('as' => 'admin.countries.store', 'uses' => 'AdminController@countries_store'));
Route::get('/admin/countries/{countries}', array('as' => 'admin.countries.show', 'uses' => 'AdminController@countries'));
Route::get('/admin/countries/{countries}/edit', array('as' => 'admin.countries.edit', 'uses' => 'AdminController@countries_edit'));
Route::put('/admin/countries/{countries}', array('as' => 'admin.countries.update', 'uses' => 'AdminController@countries_update'));
Route::delete('/admin/countries/{countries}', array('as' => 'admin.countries.destroy', 'uses' => 'AdminController@countries_destroy'));

Route::resource('users', 'UsersController');
