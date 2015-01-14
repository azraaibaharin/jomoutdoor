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
				'name'	 		=> 'Indonesia',
				'overview'		=> 'Indonesia, officially the Republic of Indonesia, is a sovereign state in Southeast Asia and Oceania. Indonesia is an archipelago comprising 13,466 islands. ',
				'flag_name'		=> 'flag_indonesia_rd.png',
				'image_name'	=> 'banner_indonesia.png',
				'status'		=> 'active',
		]);

		Country::create([
				'name'	 		=> 'Thailand',
				'overview'		=> 'Thailand (/ˈtaɪlænd/ ty-land or /ˈtaɪlənd/ ty-lənd;[11] Thai: ประเทศไทย, RTGS: Prathet Thai), officially the Kingdom of Thailand (Thai: ราชอาณาจักรไทย, RTGS: Ratcha Anachak Thai; IPA: [râːt.tɕʰā ʔāːnāːtɕàk tʰāj] ( listen)), formerly known as Siam (Thai: สยาม; RTGS: Sayam), is a country at the centre of the Indochina peninsula in Southeast Asia.',
				'flag_name'		=> 'flag_thailand_rd.png',
				'image_name'	=> 'banner_thailand.png',
				'status'		=> 'active',
		]);
	}

}
