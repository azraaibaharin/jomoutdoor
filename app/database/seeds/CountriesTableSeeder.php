<?php

class CountriesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Country::truncate();
		
		Country::create([
				'name'	 		=> 'Malaysia',
				'description'	=> 'Truly Asia',
				'flag_name'		=> 'flag_malaysia_rd.png'
		]);

		Country::create([
				'name'	 		=> 'Thailand',
				'description'	=> 'Land of people',
				'flag_name'		=> 'flag_thailand_rd.png'
		]);

		Country::create([
				'name'	 		=> 'Nepal',
				'description'	=> 'Heaven on earth',
				'flag_name'		=> 'flag_nepal_rd.png'
		]);
	}

}
