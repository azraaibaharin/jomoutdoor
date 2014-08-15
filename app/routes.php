<?php

Route::get('', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);

Route::get('admin', ['as' => 'admin', 'uses' => 'PagesController@admin']);

Route::post('countries', ['as' => 'countries.store', 'uses' => 'CountriesController@store']);
// Route::get('countries', ['as' => 'countries.create', 'uses' => 'PagesController@home']);
Route::get('create', ['as' => 'countries.create', 'uses' => 'CountriesController@create']);
Route::get('{country_name}', ['as' => 'countries.show', 'uses' => 'CountriesController@show']);
Route::get('{country_name}/edit', ['as' => 'countries.edit', 'uses' => 'CountriesController@edit']);
Route::put('{country_id}', ['as' => 'countries.update', 'uses' => 'CountriesController@update']);
Route::delete('{country_id}', ['as' => 'countries.destroy', 'uses' => 'CountriesController@destroy']);

Route::post('places', ['as' => 'places.store', 'uses' => 'PlacesController@store']);
Route::get('{country_name}/places/create/', ['as' => 'places.create', 'uses' => 'PlacesController@create']);

// Route::resource('users', 'UsersController');
