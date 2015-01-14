<?php


class ActivitiesTableSeeder extends Seeder {

	public function run()
	{		
		Activity::truncate();
		
		$indonesiaId = Country::whereName('Indonesia')->firstOrFail()->id;
		Activity::create([
				'country_id'	=> $indonesiaId,
				'name'			=> 'Hiking',
				'status'		=> 'active',
		]);
		Activity::create([
				'country_id'	=> $indonesiaId,
				'name'			=> 'Water Rafting',
				'status'		=> 'active',
		]);
		Activity::create([
				'country_id'	=> $indonesiaId,
				'name'			=> 'Islands',
				'status'		=> 'active',
		]);
	}

}