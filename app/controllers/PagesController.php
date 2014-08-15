<?php

class PagesController extends BaseController {

	public function home() 
	{
		$countries = Country::all();
		return View::make('pages.home')->withCountries($countries);
	}

	public function about() 
	{
		return View::make('pages.about');
	}

	public function admin() 
	{
		$countries = Country::all();
		return View::make('pages.admin')->withCountries($countries);
	}
}