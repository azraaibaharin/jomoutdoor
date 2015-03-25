<?php


class PagesTableSeeder extends Seeder {

	public function run()
	{		
		Page::truncate();
		
		Page::create([
				'name'			=> 'About',
				'content'		=> 'This is the about page',
				'status'		=> 'active',
		]);
		Page::create([
				'name'			=> 'Contact Us',
				'content'		=> 'This is the contact page',
				'status'		=> 'inactive',
		]);
	}

}