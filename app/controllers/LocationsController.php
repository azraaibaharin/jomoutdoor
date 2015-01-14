<?php

class LocationsController extends \BaseController {

	protected $location;

	/*
	 * Constructor.
	 * 
	 * @param location instance of Location
	 */
	public function __construct(Location $location)
	{
		$this->location = $location;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($activity_id)
	{	
		$activity = Activity::whereId($activity_id)->firstOrFail();
		return View::make('locations.create')->withActivity($activity);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (!$this->location->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->location->errors);
		}

		$location = $this->location;
		$location->activity_id = Input::get('activityId');
		$location->name = Input::get('name');
		$location->overview = Input::get('overview');
		$location->image_name = $this->getFilename('image', '/img/locations');
		$location->status = 'active';
		$location->save();

		if ($location)
		{
			$country = $this->location->activity->country;
			return Redirect::route('country.show', $country->name)->withMessage('Successfully added <i><b>'.$location->name.'</i></b> location.');
		} else
		{
			return Redirect::back()->withInput()->withErrors('Unable to add <i><b>'.$location->name.'</i></b> location.');
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $location_id
	 * @return Response
	 */
	public function edit($location_id)
	{
		$location = $this->location->findOrFail($location_id);
		$activity = $location->activity;
		return View::make('locations.edit')->withLocation($location)
										   ->withActivity($activity);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $location_id
	 * @return Response
	 */
	public function update($location_id)
	{	
		if (!$this->location->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->location->errors);
		}

		$location = $this->location->findOrFail($location_id);
		$this->location = $location;
		$location->name = Input::get('name');
		$location->overview = Input::get('overview');
		$location->image_name = $this->getUpdatedFilename($location->image_name, 'image', '/img/locations');
		$location->status = 'active';
		$location->save();

		if ($location)
		{
			$countryName = $location->activity->country->name;
			return Redirect::route('country.show', $countryName)->withMessage('Successfully updated <i><b>'.$location->name.'</i></b>.');
		} else
		{
			return Redirect::back()->withInput()->withErrors('Unable to update location, <i><b>'.$location->name.'</i></b>.');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $location_id
	 * @return Response
	 */
	public function destroy($location_id)
	{
		$location = $this->location->findOrFail($location_id);
		$locationName = $location->name;
		$location->delete();

		return Redirect::back()->withMessage('Successfully deleted <i><b>'.$locationName.'</b></i>.');
	}

	/**
	 * Retrieve the updated image file name.
	 *
	 * @return updated image file name. if no updated file name, return the previous image file name.
	 */
	private function getUpdatedFilename($oldFilename, $name, $filepath)
	{
		$filename = $this->getFilename($name, $filepath);
		if ($filename == '')
		{
			$filename = $oldFilename;
		} else {
			if ($oldFilename != '' && $oldFilename != $filename)
			{
				$this->removeFile($oldFilename, $filepath);
			}
		}
		return $filename;
	}

	/**
	 * Remove file based on the file name and path provided.
	 *
	 */
	private function removeFile($filename, $filepath)
	{
		$toRemoveFilePath = public_path().$filepath.'/'.$filename;
		if (file_exists($toRemoveFilePath))
		{
			unlink($toRemoveFilePath);
		}
	}

	/**
	 * Retrieve image file name from the form input.
	 *
	 * @return image filename
	 */
	private function getFilename($name, $filepath)
	{
		$filename = '';
		if (Input::hasFile($name))
		{
	        $file            = Input::file($name);
	        $destinationPath = public_path().$filepath;
	        $filename        = $this->location->name.'-'.mt_rand(10000,99999).'.png';
	        $uploadSuccess   = $file->move($destinationPath, $filename);
	        return $filename;
	    }
	    return $filename;
	}
}
