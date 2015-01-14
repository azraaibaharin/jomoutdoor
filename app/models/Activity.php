<?php

class Activity extends Eloquent {

	protected $fillable = ['name'];

	public $errors;

	/**
	 * Form Validation rules.
	 */
	public static $rules = [
		'name' 	=> 'required',
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'activities';

	public function country()
	{
		return $this->belongsTo('Country');
	}

	public function locations()
	{
		return $this->hasMany('Location');
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
	