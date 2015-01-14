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
		$country->overview = Input::get('overview');
		$country->flag_name = $this->getFilename('flag', '/img/flags');
		$country->image_name = $this->getFilename('image', '/img/countries');
		$country->status = 'active';
		$country->save();

		if ($country) 
		{
			return Redirect::route('admin')->withMessage('Successfully added <b><i>'.$country->name.'</b></i> country.');;
		} 
		else
		{
			return Redirect::back()->withInput()->withError('Unable to add <b><i>'.$country->name.'<b></i> country.');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  String  $country_name
	 * @return Response
	 */
	public function show($country_name)
	{
		$country = $this->country->whereName($country_name)->firstOrFail();
		$countries = $this->country->all();

		return View::make('countries.show')->withCountry($country)
										   ->withCountries($countries);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  String  $country_id
	 * @return Response
	 */
	public function edit($country_id)
	{
		$country = $this->country->whereId($country_id)->firstOrFail();

		return View::make('countries.edit')->withCountry($country);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $country_id
	 * @return Response
	 */
	public function update($country_id)
	{
		if (!$this->country->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->country->errors);
		}

		$country = $this->country->findOrFail($country_id);
		$this->country = $country;
		$country->name = Input::get('name');
		$country->overview = Input::get('overview');
		$country->flag_name = $this->getUpdatedFilename($country->flag_name, 'flag', '/img/flags');
		$country->image_name = $this->getUpdatedFilename($country->image_name, 'image', '/img/countries');
		$country->save();

		return Redirect::route('country.show', $country->name)->withMessage('Successfully updated <b><i>'.$country->name.'</b></i> country.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $country_id
	 * @return Response
	 */
	public function destroy($country_id)
	{
		$country = $this->country->findOrFail($country_id);
		$countryName = $country->name;
		$country->delete();

		return Redirect::route('admin')->withMessage('Successfully deleted <i><b>'.$countryName.'</b></i> country.');
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
	        $filename        = $this->country->name.'-'.mt_rand(10000,99999).'.png';
	        $uploadSuccess   = $file->move($destinationPath, $filename);
	        return $filename;
	    }
	    return $filename;
	}
}
