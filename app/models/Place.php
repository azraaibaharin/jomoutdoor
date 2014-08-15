<?php

class Place extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'places';


	public function country()
	{
		return $this->belongsTo('Country');
	}
}
