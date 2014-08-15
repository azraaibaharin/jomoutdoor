<?php

class PackagesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Package::truncate();
		
		Package::create([
				'place_id'		=> 1,
				'name'	 		=> 'Kuala Kubu Baru Roxx',
				'description'	=> 'Water Rafting heaven',
				'tentative'		=> 'tbc 2013'
		]);

		Package::create([
				'place_id'		=> 2,
				'name'	 		=> 'Phuket Getaway',
				'description'	=> 'East Miami',
				'tentative'	=> 'tbc 2012'
		]);
	}

}
