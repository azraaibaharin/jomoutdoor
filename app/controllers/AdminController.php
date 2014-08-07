<?php

class AdminController extends BaseController {

	public function index() 
	{
		$countries = Country::all();
		return View::make('admin.index')->withCountries($countries);
	}

	public function countries($countries) 
	{
		$country = Country::whereName($countries)->firstOrFail();
		return View::make('admin.countries.show')->withCountry($country);
	}

	public function countries_create() {
		return View::make('admin.countries.create');
	}

	public function countries_store() {
		$country = new Country;
		$country->name = Input::get('name');
		$country->flag_image_name = Input::get('flag_image_name');
		$country->save();

		return Redirect::route('admin.index');
	}

	public function countries_edit() {
		return "View::make('admin.countries.edit');";
	}

	public function countries_update() {
		return "View::make('admin.countries.update');";
	}

	public function countries_destroy() {
		return "View::make('admin.countries.destroy');";
	}
}