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
				'overview'		=> 'Malaysia is a federal constitutional monarchy located in Southeast Asia.',
				'flag_name'		=> 'Malaysia.png',
				'image_name'	=> 'Malaysia.png',
				'index'			=> '0',
				'status'		=> 'active',
		]);

		Country::create([
				'name'	 		=> 'Indonesia',
				'overview'		=> 'Indonesia, officially the Republic of Indonesia, is a sovereign state in Southeast Asia and Oceania. Indonesia is an archipelago comprising 13,466 islands. ',
				'flag_name'		=> 'Indonesia.png',
				'image_name'	=> 'Indonesia.png',
				'index'			=> '1',
				'status'		=> 'active',
		]);

		Country::create([
				'name'	 		=> 'Thailand',
				'overview'		=> 'Thailand (/ˈtaɪlænd/ ty-land or /ˈtaɪlənd/ ty-lənd;[11] Thai: ประเทศไทย, RTGS: Prathet Thai), officially the Kingdom of Thailand (Thai: ราชอาณาจักรไทย, RTGS: Ratcha Anachak Thai; IPA: [râːt.tɕʰā ʔāːnāːtɕàk tʰāj] ( listen)), formerly known as Siam (Thai: สยาม; RTGS: Sayam), is a country at the centre of the Indochina peninsula in Southeast Asia.',
				'flag_name'		=> 'Thailand.png',
				'image_name'	=> 'Thailand.png',
				'index'			=> '2',
				'status'		=> 'active',
		]);

		Country::create([
				'name'	 		=> 'Nepal',
				'overview'		=> 'Nepal, officially the Federal Democratic Republic of Nepal, is a landlocked country located in South Asia.',
				'flag_name'		=> 'Nepal.png',
				'image_name'	=> 'Nepal.png',
				'index'			=> '3',
				'status'		=> 'active',
		]);
	}

}
