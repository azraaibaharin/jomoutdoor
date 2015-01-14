<?php

class PagesController extends BaseController {

	public function splash() 
	{
		return View::make('pages.splash');
	}

	public function home() 
	{
		$countries = Country::all();
		return View::make('pages.home')->withCountries($countries);
	}

	public function about() 
	{
		return View::make('pages.about');
	}

	public function login() 
	{
		return View::make('pages.login');
	}

	public function admin() 
	{
		$countries = Country::all();
		$users = User::all();
		return View::make('pages.admin')->withCountries($countries)
										->withUsers($users);
	}
}