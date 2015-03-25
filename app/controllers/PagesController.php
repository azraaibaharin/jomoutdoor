<?php

class PagesController extends BaseController {

	protected $page;

	/*
	 * Constructor.
	 * 
	 * @param page instance of Page
	 */
	public function __construct(Page $page)
	{
		$this->page = $page;
	}

	public function splash() 
	{
		return View::make('pages.splash');
	}

	public function home() 
	{
		$countries = Country::all();
		$sortedCountries = array();

		for ($i = 0; $i < count($countries); $i++)
		{
			foreach ($countries as $country) {
				if ($country->index == $i)
				{
					array_push($sortedCountries, $country);
				}
			}
		}

		return View::make('pages.home')->withCountries($sortedCountries);
	}

	public function admin() 
	{
		$countries = Country::all();
		$users = User::all();
		$pages = Page::all();
		return View::make('pages.admin')->withCountries($countries)
										->withUsers($users)
										->withPages($pages);
	}

	public function create()
	{
		return View::make('pages.create');
	}

	public function store()
	{
		if (!$this->page->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->page->errors);
		}

		$page = $this->page;
		$page->name = Input::get('name');
		$page->content = Input::get('content');
		$page->status = Input::get('status');
		$page->save();

		if ($page) 
		{
			return Redirect::route('admin')->withMessage('Successfully added <b><i>'.$page->name.'</b></i> page.');;
		} 
		else
		{
			return Redirect::back()->withInput()->withError('Unable to add <b><i>'.$page->name.'<b></i> page.');
		}
	}

	public function show($page_name)
	{
		$page = $this->page->whereName($page_name)->firstOrFail();
		return View::make('pages.show')->withPage($page);
	}

	public function edit($page_id)
	{
		$page = $this->page->whereId($page_id)->firstOrFail();

		return View::make('pages.edit')->withPage($page);
	}

	public function update($page_id)
	{
		if (!$this->page->isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->page->errors);
		}

		$page = $this->page->findOrFail($page_id);
		$this->page = $page;
		$page->name = Input::get('name');
		$page->content = Input::get('content');
		$page->status = Input::get('status');
		$page->save();

		return Redirect::route('page.show', $page->name)->withMessage('Successfully updated <b><i>'.$page->name.'</b></i> page.');
	}

	public function destroy($page_id)
	{
		$page = $this->page->findOrFail($page_id);
		$pageName = $page->name;
		$page->delete();

		return Redirect::route('admin')->withMessage('Successfully deleted <i><b>'.$pageName.'</b></i> page.');	
	}
}