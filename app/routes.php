<?php

// Session
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('session', 'SessionsController');

// Static Page
Route::get('', ['as' => 'home', 'uses' => 'PagesController@home']);
// Route::get('home', ['as' => 'home', 'uses' => 'PagesController@home'])->before('auth');
Route::get('admin', ['as' => 'admin', 'uses' => 'PagesController@admin'])->before('auth');

// Page
Route::post('page', ['as' => 'page.store', 'uses' => 'PagesController@store']);
Route::get('{page_name}', ['as' => 'page.show', 'uses' => 'PagesController@show']);
Route::get('page/create', ['as' => 'page.create', 'uses' => 'PagesController@create']);
Route::get('page/{page_id}/edit', ['as' => 'page.edit', 'uses' => 'PagesController@edit']);
Route::put('page/{page_id}', ['as' => 'page.update', 'uses' => 'PagesController@update']);
Route::delete('page/{page_id}', ['as' => 'page.destroy', 'uses' => 'PagesController@destroy']);
Route::when('page/*', 'auth');

// Activity
Route::post('activity', ['as' => 'activity.store', 'uses' => 'ActivitiesController@store']);
Route::get('activity/create/{country_id}', ['as' => 'activity.create', 'uses' => 'ActivitiesController@create']);
Route::get('activity/{activity_id}/edit', ['as' => 'activity.edit', 'uses' => 'ActivitiesController@edit']);
Route::put('activity/{activity_id}', ['as' => 'activity.update', 'uses' => 'ActivitiesController@update']);
Route::delete('activity/{activity_id}', ['as' => 'activity.destroy', 'uses' => 'ActivitiesController@destroy']);
Route::when('activity/*/edit', 'auth');

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
Route::when('package/*/edit', 'auth');

// Country
Route::post('country', ['as' => 'country.store', 'uses' => 'CountriesController@store']);
Route::get('country/create', ['as' => 'country.create', 'uses' => 'CountriesController@create']);
Route::get('country/{country_name}', ['as' => 'country.show', 'uses' => 'CountriesController@show']);
Route::get('country/{country_id}/edit', ['as' => 'country.edit', 'uses' => 'CountriesController@edit']);
Route::put('country/{country_id}', ['as' => 'country.update', 'uses' => 'CountriesController@update']);
Route::delete('country/{country_id}', ['as' => 'country.destroy', 'uses' => 'CountriesController@destroy']);
Route::when('country/*/edit', 'auth');

// User
Route::resource('user', 'UsersController');
Route::when('user/*', 'auth');

// API
Route::post('api/package/store', ['as' => 'package.store.api', 'uses' => 'PackagesController@storeAPI']);
Route::post('api/package/update', ['as' => 'package.update.api', 'uses' => 'PackagesController@updateAPI']);
Route::when('api/*', 'auth');

// CATCH ALL ROUTE =============================  
// all routes that are not home or api will be redirected to the frontend 
// this allows angular to route them 
App::error(function(Exception $exception)
{
    Log::error($exception);
    return Redirect::action('PagesController@home');
});
App::missing(function($exception) { 
    return Redirect::action('PagesController@home');
});