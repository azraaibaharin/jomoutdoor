<?php

// Session
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('session', 'SessionsController');

// Page
Route::get('', 'PagesController@splash');
Route::get('home', ['as' => 'home', 'uses' => 'PagesController@home'])->before('auth');
Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about'])->before('auth');
Route::get('admin', ['as' => 'admin', 'uses' => 'PagesController@admin'])->before('auth');

// Activity
Route::post('activity', ['as' => 'activity.store', 'uses' => 'ActivitiesController@store']);
Route::get('activity/create/{country_id}', ['as' => 'activity.create', 'uses' => 'ActivitiesController@create']);
Route::get('activity/{activity_id}/edit', ['as' => 'activity.edit', 'uses' => 'ActivitiesController@edit']);
Route::put('activity/{activity_id}', ['as' => 'activity.update', 'uses' => 'ActivitiesController@update']);
Route::delete('activity/{activity_id}', ['as' => 'activity.destroy', 'uses' => 'ActivitiesController@destroy']);
Route::when('activity/*', 'auth');

// Location
Route::post('location', ['as' => 'location.store', 'uses' => 'LocationsController@store']);
Route::get('location/create/{activity_id}', ['as' => 'location.create', 'uses' => 'LocationsController@create']);
Route::get('location/{location_id}/edit', ['as' => 'location.edit', 'uses' => 'LocationsController@edit']);
Route::put('location/{location_id}', ['as' => 'location.update', 'uses' => 'LocationsController@update']);
Route::delete('location/{location_id}', ['as' => 'location.destroy', 'uses' => 'LocationsController@destroy']);
Route::when('location/*', 'auth');

// Package
Route::post('package', ['as' => 'package.store', 'uses' => 'PackagesController@store']);
Route::get('package/create/{location_id}', ['as' => 'package.create', 'uses' => 'PackagesController@create']);
Route::get('package/{package_id}/edit', ['as' => 'package.edit', 'uses' => 'PackagesController@edit']);
Route::put('package/{package_id}', ['as' => 'package.update', 'uses' => 'PackagesController@update']);
Route::delete('package/{package_id}', ['as' => 'package.destroy', 'uses' => 'PackagesController@destroy']);
Route::when('package/*', 'auth');

// Country
Route::post('country', ['as' => 'country.store', 'uses' => 'CountriesController@store']);
Route::get('country/create', ['as' => 'country.create', 'uses' => 'CountriesController@create']);
Route::get('country/{country_name}', ['as' => 'country.show', 'uses' => 'CountriesController@show']);
Route::get('country/{country_id}/edit', ['as' => 'country.edit', 'uses' => 'CountriesController@edit']);
Route::put('country/{country_id}', ['as' => 'country.update', 'uses' => 'CountriesController@update']);
Route::delete('country/{country_id}', ['as' => 'country.destroy', 'uses' => 'CountriesController@destroy']);
Route::when('country/*', 'auth');

// User
Route::resource('user', 'UsersController');
Route::when('user/*', 'auth');

// API
Route::post('api/package/store', ['as' => 'package.store.api', 'uses' => 'PackagesController@storeAPI']);
Route::post('api/package/update', ['as' => 'package.update.api', 'uses' => 'PackagesController@updateAPI']);
Route::when('api/*', 'auth');
