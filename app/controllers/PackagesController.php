<?php

class PackagesController extends \BaseController {

	protected $package;
	protected $defaultStatus = 'active', $defaultImageUrl = '';

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
	public function create($location_id)
	{
		$location = Location::findOrFail($location_id);
		return View::make('packages.create')->withLocation($location);
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
		$package->location_id = Input::get('locationId');
		$package->name = Input::get('name');
		$package->content = Input::get('content');
		$package->image_url = Input::get('imageUrl');
		$package->status = $defaultStatus;
		$package->save();

		if ($package)
		{
			$country = $this->package->location->activity->country;
			return Redirect::route('country.show', $country->name)->withMessage('Successfully added <b><i>'.$package->name.'</b></i> package.');
		} else
		{
			return Redirect::back()->withInput()->withErrors('Unable to add <b><i>'.$package->name.'</b></i> package.');
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
		$package = $this->package->findOrFail($package_id);
		return View::make('packages.edit')->withPackage($package);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $package_id
	 * @return Response
	 */
	public function update($package_id)
	{
		if (!$this->package->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->package->errors);
		}

		$package = $this->package->findOrFail($package_id);
		$package->name = Input::get('name');
		$package->content = Input::get('content');
		$package->image_url = Input::get('imageUrl');
		$package->save();

		if ($package)
		{
			$country = $package->location->activity->country;
			return Redirect::route('country.show', $country->name)->withMessage('Successfully updated <b><i>'.$package->name.'</b></i> package.');
		} else
		{
			return Redirect::back()->withInput()->withErrors('Unable to update <b><i>'.$package->name.'</b></i> package.');
		}	
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($package_id)
	{
		$package = $this->package->findOrFail($package_id);
		$packageName = $package->name;
		$package->delete();

		return Redirect::back()->withMessage('Successfully deleted <i><b>'.$packageName.'</b></i> package.');
	}

	/**
	 * Store Package API handler.
	 *
	 * @return store operation status
	 */
	public function storeAPI() 
	{
		$return_arr = [];

		// add country name info for redirect
		$return_arr['countryName'] = Input::get('countryName');
		$return_arr['status'] = 'authentication_failed';
		$return_arr['errors'] = [];

		if (Auth::check())
		{
			// add user id info if authentication passed
			$return_arr['user_id'] = Auth::id();
			$return_arr['status'] = 'create_failed';

			if ($this->package->isValid(Input::all()))
			{
				// TODO: add authentication and parse content for security
				$package = $this->package;
				$package->location_id = Input::get('locationId');			
				$package->name = Input::get('name');
				$package->content = Input::get('content');
				$package->image_url = $this->defaultImageUrl;
				$package->status = $this->defaultStatus;
				$package->save();

				if ($package)
				{
					$return_arr['status'] = 'save_success';
				}
			} else 
			{
				$return_arr['status'] = 'validation_failed';
				$return_arr['errors'] = ($this->package->errors);				
			}
		}

		return json_encode($return_arr, JSON_FORCE_OBJECT);
	}


	/**
	 * Update Package API handler.
	 *
	 * @return update operation status
	 */
	public function updateAPI()
	{
		$return_arr = [];
		$return_arr['countryName'] = Input::get('countryName');
		$return_arr['status'] = 'authentication_failed';
		$return_arr['errors'] = [];

		if (Auth::check())
		{	
			// add user id info if authentication passed
			$return_arr['user_id'] = Auth::id();
			$return_arr['status'] = 'edit_failed';

			if ($this->package->isValid(Input::all()))
			{
				$package = $this->package->findOrFail(Input::get('packageId'));
				$package->name = Input::get('name');
				$package->content = Input::get('content');
				$package->save();

				if ($package)
				{
					$return_arr['status'] = 'edit_success';
				}
			} else 
			{
				$return_arr['status'] = 'validation_failed';
				$return_arr['errors'] = ($this->package->errors);
			}
		}

		return json_encode($return_arr, JSON_FORCE_OBJECT);
	}
}
