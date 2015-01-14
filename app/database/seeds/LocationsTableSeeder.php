<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder {

	public function run()
	{
		Location::truncate();
		
		// Indonesia, Hiking, Rinjani
		$indonesiaId = Country::whereName('Indonesia')->firstOrFail()->id;
		$indonesiaHikingId = Activity::whereName('Hiking')->whereCountryId($indonesiaId)->firstOrFail()->id;
		Location::create([
			'activity_id'	=> $indonesiaHikingId,
			'name'	 		=> 'Mt. Rinjani',
			'overview'		=> 'Mount Rinjani or Gunung Rinjani is an active volcano in Indonesia on the island of Lombok. Administratively the mountain is in the Regency of North Lombok, West Nusa Tenggara.',
			'image_name'	=> 'rinjani.png',
			'status'		=> 'active',
		]);
		Location::create([
			'activity_id'	=> $indonesiaHikingId,
			'name'	 		=> 'Mt. Bromo',
			'overview'		=> 'Mount Bromo, is an active volcano and part of the Tengger massif, in East Java, Indonesia. At 2,329 metres it is not the highest peak of the massif, but is the most well known.',
			'image_name'	=> 'bromo.png',
			'status'		=> 'active',
		]);
		Location::create([
			'activity_id'	=> $indonesiaHikingId,
			'name'	 		=> 'Mt. Merapi',
			'overview'		=> 'Mount Merapi, Gunung Merapi, is an active stratovolcano located on the border between Central Java and Yogyakarta, Indonesia. It is the most active volcano in Indonesia and has erupted regularly since 1548.',
			'image_name'	=> 'merapi.png',
			'status'		=> 'active',
		]);
		Location::create([
			'activity_id'	=> $indonesiaHikingId,
			'name'	 		=> 'Mt. Merbabu',
			'overview'		=> 'Mount Merbabu is a dormant stratovolcano in Central Java province on the Indonesian island of Java. The name Merbabu could be loosely translated as "Mountain of Ash" from the Javanese combined words; Meru means "mountain" and awu or abu means "ash".',
			'image_name'	=> 'merbabu.png',
			'status'		=> 'active',
		]);
		Location::create([
			'activity_id'	=> $indonesiaHikingId,
			'name'	 		=> 'Mt. Sindoro',
			'overview'		=> 'Mount Sindara, Mount Sindoro or Mount Sundoro is an active stratovolcano in Central Java, Indonesia. Parasitic craters and cones are found in the northwest-southern flanks; the largest is called Kembang.',
			'image_name'	=> 'sindoro.png',
			'status'		=> 'active',
		]);

		$indonesiaWaterRaftingId = Activity::whereName('Water Rafting')->whereCountryId($indonesiaId)->firstOrFail()->id;
		Location::create([
			'activity_id'	=> $indonesiaWaterRaftingId,
			'name'	 		=> 'Bali',
			'overview'		=> 'The most high-profile operations are in Bali, where several rivers - the Ayung, Unda, Ubaya, Balian and Telaga - are commercially rafted. White-water rafting here is usually more of an environmental and cultural experience than an adrenaline-charged adventure. A trip down the Ayung, for example, takes you through deep valleys, terraced rice fields and finally into thick, tropical rainforest. On the way you can observe how rural Balinese life revolves around the river. With water channeled off to irrigate rice crops, and villagers gathering at the banks to bath and wash clothes. Graded 2-3 the Ayung River is frisky enough to be fun but not so much as to be dangerous.',
			'image_name'	=> 'raftingbali.png',
			'status'		=> 'active',
		]);

		$indonesiaIslandsId = Activity::whereName('Islands')->whereCountryId($indonesiaId)->firstOrFail()->id;
		Location::create([
			'activity_id'	=> $indonesiaIslandsId,
			'name'	 		=> 'Bali',
			'overview'		=> 'Bali is an island and province of Indonesia. The province includes the island of Bali and a few smaller neighbouring islands, notably Nusa Penida.',
			'image_name'	=> 'islandsbali.png',
			'status'		=> 'active',
		]);
		Location::create([
			'activity_id'	=> $indonesiaIslandsId,
			'name'	 		=> 'Lombok',
			'overview'		=> 'Lombok is an island in West Nusa Tenggara province, Indonesia. It forms part of the chain of the Lesser Sunda Islands, with the Lombok Strait separating it from Bali to the west and the Alas Strait between it and Sumbawa to the east.',
			'image_name'	=> 'islandslombok.png',
			'status'		=> 'active',
		]);
		Location::create([
			'activity_id'	=> $indonesiaIslandsId,
			'name'	 		=> 'Komodo',
			'overview'		=> 'Komodo is one of the 17,508 islands that compose the Republic of Indonesia. The island is particularly notable as the habitat of the Komodo dragon, the largest lizard on Earth, which is named for the island.',
			'image_name'	=> 'islandskomodo.png',
			'status'		=> 'active',
		]);
	}

}