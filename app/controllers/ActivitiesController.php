<?php

class ActivitiesController extends \BaseController {

	protected $activity;

	/*
	 * Constructor.
	 * 
	 * @param activity instance of Activity
	 */
	public function __construct(Activity $activity)
	{
		$this->activity = $activity;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /activity/create/{country_id}
	 *
	 * @return Response
	 */
	public function create($country_id)
	{
		$country = Country::whereId($country_id)->firstOrFail();
		return View::make('activities.create')->withCountry($country);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /activity
	 *
	 * @return Response
	 */
	public function store()
	{
		if (!$this->activity->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->activity->errors);
		}

		$activity = $this->activity;
		$activity->country_id = Input::get('countryId');
		$activity->name = Input::get('name');
		$activity->status = 'active';
		$activity->save();

		if ($activity)
		{
			$country = $this->activity->country;
			return Redirect::route('country.show', $country->name)->withMessage('Successfully added <i><b>'.$activity->name.'</i></b> activity.');
		} else
		{
			return Redirect::back()->withInput()->withErrors('Unable to add <i><b>'.$activity->name.'</i></b> activity.');
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /activity/{activity_id}/edit
	 *
	 * @param  int  $activity_id
	 * @return Response
	 */
	public function edit($activity_id)
	{
		$activity = $this->activity->findOrFail($activity_id);
		return View::make('activities.edit')->withActivity($activity);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /activity/{activity_id}
	 *
	 * @param  int  $activity_id
	 * @return Response
	 */
	public function update($activity_id)
	{
		if (!$this->activity->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->activity->errors);
		}

		$activity = $this->activity->findOrFail($activity_id);
		$activity->name = Input::get('name');
		$activity->save();

		if ($activity)
		{
			$countryName = $activity->country->name;
			return Redirect::route('country.show', $countryName)->withMessage('Successfully updated <i><b>'.$activity->name.'</i></b> activity');
		} else
		{
			return Redirect::back()->withInput()->withErrors('Unable to update <i><b>'.$activity->name.'</i></b> activity.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /activities/{activity_id}
	 *
	 * @param  int  $activity_id
	 * @return Response
	 */
	public function destroy($activity_id)
	{
		$activity = $this->activity->findOrFail($activity_id);
		$activityName = $activity->name;
		$activity->delete();

		return Redirect::back()->withMessage('Successfully deleted <i><b>'.$activityName.'</b></i> activity.');
	}

}