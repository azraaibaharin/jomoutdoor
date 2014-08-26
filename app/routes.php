<?php

Route::get('', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);

Route::get('admin', ['as' => 'admin', 'uses' => 'PagesController@admin']);

Route::post('places', ['as' => 'places.store', 'uses' => 'PlacesController@store']);
Route::get('{country_name}/places/create/', ['as' => 'places.create', 'uses' => 'PlacesController@create']);
Route::get('places/{place_id}/edit', ['as' => 'places.edit', 'uses' => 'PlacesController@edit']);
Route::put('places/{place_id}', ['as' => 'places.update', 'uses' => 'PlacesController@update']);
Route::delete('places/{place_id}', ['as' => 'places.destroy', 'uses' => 'PlacesController@destroy']);

Route::post('groups', ['as' => 'packages.store', 'uses' => 'PackagesController@store']);
Route::get('{place_id}/groups/create/', ['as' => 'packages.create', 'uses' => 'PackagesController@create']);
Route::get('groups/{package_id}/edit', ['as' => 'packages.edit', 'uses' => 'PackagesController@edit']);
Route::put('groups/{package_id}', ['as' => 'packages.update', 'uses' => 'PackagesController@update']);
Route::delete('groups/{package_id}', ['as' => 'packages.destroy', 'uses' => 'PackagesController@destroy']);

Route::post('countries', ['as' => 'countries.store', 'uses' => 'CountriesController@store']);
Route::get('create', ['as' => 'countries.create', 'uses' => 'CountriesController@create']);
Route::get('{country_name}', ['as' => 'countries.show', 'uses' => 'CountriesController@show']);
Route::get('{country_name}/edit', ['as' => 'countries.edit', 'uses' => 'CountriesController@edit']);
Route::put('{country_id}', ['as' => 'countries.update', 'uses' => 'CountriesController@update']);
Route::delete('{country_id}', ['as' => 'countries.destroy', 'uses' => 'CountriesController@destroy']);
