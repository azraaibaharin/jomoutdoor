<?php

class PlacesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Place::truncate();
		
		Place::create([
				'country_id'	=> 1,
				'name'	 		=> 'Kuala Kubu Baru',
				'description'	=> 'Water Rafting heaven',
				'image_name'	=> 'kkb.png'
		]);

		Place::create([
				'country_id'	=> 2,
				'name'	 		=> 'Phuket',
				'description'	=> 'East Miami',
				'image_name'	=> 'phuket.png'
		]);
	}

}
