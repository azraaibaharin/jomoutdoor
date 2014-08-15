<?php

class CountriesController extends \BaseController {

	protected $country;

	/*
	 * Constructor.
	 * 
	 * @param Country instance of country
	 */
	public function __construct(Country $country)
	{
		$this->country = $country;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$countries = $this->country->all();

		return View::make('countries.index')->withCountries($countries);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('countries.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (!$this->country->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->country->errors);
		}

		$country = $this->country;
		$country->name = Input::get('name');
		$country->description = Input::get('description');
		$country->flag_name = $this->getFlagFilename();
		$country->save();

		if ($country) 
		{
			return Redirect::route('countries.show', $country->name)->withMessage('Success!');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  String  $name
	 * @return Response
	 */
	public function show($name)
	{
		$country = $this->country->whereName($name)->firstOrFail();

		return View::make('countries.show')->withCountry($country);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  String  $name
	 * @return Response
	 */
	public function edit($name)
	{
		$country = $this->country->whereName($name)->firstOrFail();

		return View::make('countries.edit')->withCountry($country);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$country = $this->country->findOrFail($id);
		$country->name = Input::get('name');
		$country->description = Input::get('description');
		$country->flag_name = $this->getFlagFilename();
		$country->save();

		return Redirect::route('countries.show', $country->name)->withMessage('Updated!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$country = $this->country->findOrFail($id);
		$country->delete();

		return Redirect::route('admin');
	}


	/**
	 * Retrieve flag file name from the form input.
	 *
	 * @return flag filename
	 */
	private function getFlagFilename() {
		$filename = '';

		if (Input::hasFile('flag'))
		{
	        $file            = Input::file('flag');
	        $destinationPath = public_path() . '/img/';
	        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	        $uploadSuccess   = $file->move($destinationPath, $filename);
	    }

	    return $filename;
	}
}
