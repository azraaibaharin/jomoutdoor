<?php

class PagesController extends BaseController {

	public function home() 
	{
		$countries = Country::all();
		return View::make('home')->withCountries($countries);
	}

	public function about() 
	{
		return View::make('about');
	}
}