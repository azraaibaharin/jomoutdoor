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
		
		// 1 -- Malaysia
		$malaysiaId = Country::whereName('Malaysia')->firstOrFail()->id;
		Place::create([
			'country_id'	=> $malaysiaId,
			'name'	 		=> 'Selangor',
			'description'	=> 'Darul Ehsan',
			'image_name'	=> 'kkb.png'
		]);
		Place::create([
			'country_id'	=> $malaysiaId,
			'name'	 		=> 'Perak',
			'description'	=> 'Darul Ridzuan',
			'image_name'	=> 'kkb.png'
		]);
		Place::create([
			'country_id'	=> $malaysiaId,
			'name'	 		=> 'Penang',
			'description'	=> 'Pulau Mutiara',
			'image_name'	=> 'kkb.png'
		]);
		Place::create([
			'country_id'	=> $malaysiaId,
			'name'	 		=> 'Johor',
			'description'	=> 'Darul Tadzim',
			'image_name'	=> 'kkb.png'
		]);

		// 2 -- Thailand
		$thailandId = Country::whereName('Thailand')->firstOrFail()->id;
		Place::create([
			'country_id'	=> $thailandId,
			'name'	 		=> 'Phuket',
			'description'	=> 'East Miami',
			'image_name'	=> 'phuket.png'
		]);
		Place::create([
			'country_id'	=> $thailandId,
			'name'	 		=> 'Hat Yai',
			'description'	=> 'Hi hI',
			'image_name'	=> 'phuket.png'
		]);
	}

}
