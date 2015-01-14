<?php

class UsersController extends \BaseController {

	protected $user;

	/*
	 * Constructor.
	 * 
	 * @param User instance of user
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		if (!$this->user->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}

		$user = $this->user;
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$user->permission = Input::get('permission');
		$user->save();

		if ($user) 
		{
			return Redirect::route('user.show', $user->name)->withMessage('Success!');
		} else
		{
			return Redirect::back()->withInput()->withErrors('Unable to add user, '. $user->username . '.');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /users/{username}
	 *
	 * @param  String  $username
	 * @return Response
	 */
	public function show($username)
	{
		$user = $this->user->whereUsername($username)->firstOrFail();

		return View::make('users.show')->withUser($user);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}