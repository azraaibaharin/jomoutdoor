<?php

class PackagesController extends \BaseController {

	protected $package;

	/*
	 * Constructor.
	 * 
	 * @param Package instance of Package
	 */
	public function __construct(Package $package)
	{
		$this->package = $package;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($place_id)
	{
		$place = Place::findOrFail($place_id);
		return View::make('packages.create')->withPlace($place);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (!$this->package->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->package->errors);
		}

		$package = $this->package;
		$package->place_id = Input::get('placeId');
		$package->name = Input::get('name');
		$package->description = Input::get('description');
		$package->tentative = Input::get('tentative');
		$package->save();

		if ($package)
		{
			$country = $this->package->place->country;
			return Redirect::route('countries.show', $country->name)->withMessage('Successfully added package ' . $package->name . '.');
		} else
		{
			return Redirect::back()->withInput()->withErrors('Unable to add package, ' .  $package->name . '.');
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $package_id
	 * @return Response
	 */
	public function edit($package_id)
	{
		$package = $this->packages->findOrFail($package_id);
		$place = Place::findOrFail($package->place_id);
		return View::make('packages.edit')->withPackage($package)->withPlace($place);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Delete a package";
	}


}
