<?php

class Location extends Eloquent {

	protected $fillable = ['name', 'overview'];

	public $errors;

	/**
	 * Form Validation rules.
	 */
	public static $rules = [
		'name'		=> 'required',
		'overview' 	=> 'required',
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';

	public function activity()
	{
		return $this->belongsTo('Activity');
	}

	public function packages() 
	{
		return $this->hasMany('Package');
	}

	/**
	 * Validate data based on set of Country model rules.
	 * 
	 * @param data to be validated
	 * @return whether the data is valid or not
	 */
	public function isValid($data)
	{
		$validation = Validator::make($data, static::$rules);

		if ($validation->passes()) return true;

		$this->errors = $validation->messages();

		return false;
	}
}
