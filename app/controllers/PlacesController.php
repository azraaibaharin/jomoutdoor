<?php

class PlacesController extends \BaseController {

	protected $place;

	/*
	 * Constructor.
	 * 
	 * @param Place instance of Place
	 */
	public function __construct(Place $place)
	{
		$this->place = $place;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($countryName)
	{	
		$country = Country::whereName($countryName)->firstOrFail();
		return View::make('places.create')->withCountry($country);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (!$this->place->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->place->errors);
		}

		$place = $this->place;
		$place->country_id = Input::get('countryId');
		$place->name = Input::get('name');
		$place->description = Input::get('description');
		$place->image_name = 'place.jpg';
		$place->save();

		if ($place)
		{
			$country = $this->place->country;
			return Redirect::route('countries.show', $country->name)->withMessage('Successfully added ' . $place->name . '.');
		} else
		{
			return Redirect::back()->withInput()->withErrors('Unable to add place, ' .  $place->name . '.');
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $place_id
	 * @return Response
	 */
	public function edit($place_id)
	{
		$place = $this->place->findOrFail($place_id);
		$country = Country::findOrFail($place->country_id);
		return View::make('places.edit')->withPlace($place)->withCountry($country);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($place_id)
	{
		if (!$this->place->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->place->errors);
		}

		$place = $this->place->findOrFail($place_id);
		$place->name = Input::get('name');
		$place->description = Input::get('description');
		$place->save();

		if ($place)
		{
			$country = Country::findOrFail($place->country_id);
			return Redirect::route('countries.show', $country->name)->withMessage('Successfully updated ' . $place->name . '.');
		} else
		{
			return Redirect::back()->withInput()->withErrors('Unable to update place, ' .  $place->name . '.');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
