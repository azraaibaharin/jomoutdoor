<?php

class Country extends Eloquent {


	protected $fillable = ['name', 'description', 'flag'];

	public $errors;

	/**
	 * Form Validation rules.
	 */
	public static $rules = [
		'name' => 'required'
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'countries';
	
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

	public function places() 
	{
		return $this->hasMany('Place');
	}

}
