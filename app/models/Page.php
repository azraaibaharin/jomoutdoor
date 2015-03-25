<?php

class Page extends Eloquent {

	protected $fillable = ['name', 'content', 'status'];

	public $errors;

	/**
	 * Form Validation rules.
	 */
	public static $rules = [
		'name' => 'required',
		'content' => 'required'
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pages';

	/**
	 * Validate data based on set of Page model rules.
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