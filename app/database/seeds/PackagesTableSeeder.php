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
		
		// Selangor
		Package::create([
				'place_id'		=> 1,
				'name'	 		=> 'Kuala Kubu Baru Roxx',
				'description'	=> 'Water Rafting heaven',
				'tentative'		=> 'Mauris magna lorem, sollicitudin sit amet sagittis id, pharetra non sapien. Sed pellentesque interdum mauris, quis semper velit tempor vel. Mauris consequat nec lacus id ultricies. Quisque facilisis dolor nec augue lobortis aliquet. Pellentesque nec lacus a justo facilisis tincidunt sit amet in arcu. Donec non nisi quis eros rutrum accumsan vel at enim. Quisque ullamcorper non ligula sit amet rutrum. Aenean facilisis quam eget ligula tristique sagittis. Nulla venenatis, nisl nec ullamcorper pulvinar, orci tellus pharetra lectus, ut placerat urna nulla quis quam. Donec purus justo, cursus et odio vel, euismod ullamcorper massa. Aliquam non neque hendrerit, faucibus arcu eget, auctor leo. Nulla posuere magna ut gravida pharetra. Nulla at tortor ipsum. Pellentesque pretium lobortis eros pretium aliquet. Mauris ultrices urna ac posuere rutrum. Phasellus nulla lorem, facilisis vel porttitor eu, sagittis vel velit. '
		]);
		Package::create([
				'place_id'		=> 1,
				'name'	 		=> 'Sunway Lagoon extreme',
				'description'	=> 'Beginners getaway',
				'tentative'		=> 'Mauris magna lorem, sollicitudin sit amet sagittis id, pharetra non sapien. Sed pellentesque interdum mauris, quis semper velit tempor vel. Mauris consequat nec lacus id ultricies. Quisque facilisis dolor nec augue lobortis aliquet. Pellentesque nec lacus a justo facilisis tincidunt sit amet in arcu. Donec non nisi quis eros rutrum accumsan vel at enim. Quisque ullamcorper non ligula sit amet rutrum. Aenean facilisis quam eget ligula tristique sagittis. Nulla venenatis, nisl nec ullamcorper pulvinar, orci tellus pharetra lectus, ut placerat urna nulla quis quam. Donec purus justo, cursus et odio vel, euismod ullamcorper massa. Aliquam non neque hendrerit, faucibus arcu eget, auctor leo. Nulla posuere magna ut gravida pharetra. Nulla at tortor ipsum. Pellentesque pretium lobortis eros pretium aliquet. Mauris ultrices urna ac posuere rutrum. Phasellus nulla lorem, facilisis vel porttitor eu, sagittis vel velit. '
		]);

		// Perak
		Package::create([
				'place_id'		=> 2,
				'name'	 		=> 'Irau Performance',
				'description'	=> 'For performance junkies',
				'tentative'		=> 'Mauris magna lorem, sollicitudin sit amet sagittis id, pharetra non sapien. Sed pellentesque interdum mauris, quis semper velit tempor vel. Mauris consequat nec lacus id ultricies. Quisque facilisis dolor nec augue lobortis aliquet. Pellentesque nec lacus a justo facilisis tincidunt sit amet in arcu. Donec non nisi quis eros rutrum accumsan vel at enim. Quisque ullamcorper non ligula sit amet rutrum. Aenean facilisis quam eget ligula tristique sagittis. Nulla venenatis, nisl nec ullamcorper pulvinar, orci tellus pharetra lectus, ut placerat urna nulla quis quam. Donec purus justo, cursus et odio vel, euismod ullamcorper massa. Aliquam non neque hendrerit, faucibus arcu eget, auctor leo. Nulla posuere magna ut gravida pharetra. Nulla at tortor ipsum. Pellentesque pretium lobortis eros pretium aliquet. Mauris ultrices urna ac posuere rutrum. Phasellus nulla lorem, facilisis vel porttitor eu, sagittis vel velit.'
		]);
		Package::create([
				'place_id'		=> 2,
				'name'	 		=> 'Liang Pacat',
				'description'	=> 'For performance junkies',
				'tentative'		=> 'Mauris magna lorem, sollicitudin sit amet sagittis id, pharetra non sapien. Sed pellentesque interdum mauris, quis semper velit tempor vel. Mauris consequat nec lacus id ultricies. Quisque facilisis dolor nec augue lobortis aliquet. Pellentesque nec lacus a justo facilisis tincidunt sit amet in arcu. Donec non nisi quis eros rutrum accumsan vel at enim. Quisque ullamcorper non ligula sit amet rutrum. Aenean facilisis quam eget ligula tristique sagittis. Nulla venenatis, nisl nec ullamcorper pulvinar, orci tellus pharetra lectus, ut placerat urna nulla quis quam. Donec purus justo, cursus et odio vel, euismod ullamcorper massa. Aliquam non neque hendrerit, faucibus arcu eget, auctor leo. Nulla posuere magna ut gravida pharetra. Nulla at tortor ipsum. Pellentesque pretium lobortis eros pretium aliquet. Mauris ultrices urna ac posuere rutrum. Phasellus nulla lorem, facilisis vel porttitor eu, sagittis vel velit. '
		]);

		// Phuket
		Package::create([
				'place_id'		=> 5,
				'name'	 		=> 'Phuket Getaway',
				'description'	=> 'East Miami',
				'tentative'		=> 'Mauris magna lorem, sollicitudin sit amet sagittis id, pharetra non sapien. Sed pellentesque interdum mauris, quis semper velit tempor vel. Mauris consequat nec lacus id ultricies. Quisque facilisis dolor nec augue lobortis aliquet. Pellentesque nec lacus a justo facilisis tincidunt sit amet in arcu. Donec non nisi quis eros rutrum accumsan vel at enim. Quisque ullamcorper non ligula sit amet rutrum. Aenean facilisis quam eget ligula tristique sagittis. Nulla venenatis, nisl nec ullamcorper pulvinar, orci tellus pharetra lectus, ut placerat urna nulla quis quam. Donec purus justo, cursus et odio vel, euismod ullamcorper massa. Aliquam non neque hendrerit, faucibus arcu eget, auctor leo. Nulla posuere magna ut gravida pharetra. Nulla at tortor ipsum. Pellentesque pretium lobortis eros pretium aliquet. Mauris ultrices urna ac posuere rutrum. Phasellus nulla lorem, facilisis vel porttitor eu, sagittis vel velit. '
		]);
		Package::create([
				'place_id'		=> 5,
				'name'	 		=> 'Phuket Bunjee',
				'description'	=> 'East Miami',
				'tentative'		=> 'Mauris magna lorem, sollicitudin sit amet sagittis id, pharetra non sapien. Sed pellentesque interdum mauris, quis semper velit tempor vel. Mauris consequat nec lacus id ultricies. Quisque facilisis dolor nec augue lobortis aliquet. Pellentesque nec lacus a justo facilisis tincidunt sit amet in arcu. Donec non nisi quis eros rutrum accumsan vel at enim. Quisque ullamcorper non ligula sit amet rutrum. Aenean facilisis quam eget ligula tristique sagittis. Nulla venenatis, nisl nec ullamcorper pulvinar, orci tellus pharetra lectus, ut placerat urna nulla quis quam. Donec purus justo, cursus et odio vel, euismod ullamcorper massa. Aliquam non neque hendrerit, faucibus arcu eget, auctor leo. Nulla posuere magna ut gravida pharetra. Nulla at tortor ipsum. Pellentesque pretium lobortis eros pretium aliquet. Mauris ultrices urna ac posuere rutrum. Phasellus nulla lorem, facilisis vel porttitor eu, sagittis vel velit. '
		]);

		// Hat Yai
		Package::create([
				'place_id'		=> 6,
				'name'	 		=> 'Hat Yai hunting',
				'description'	=> 'Shop till you drop',
				'tentative'		=> 'Mauris magna lorem, sollicitudin sit amet sagittis id, pharetra non sapien. Sed pellentesque interdum mauris, quis semper velit tempor vel. Mauris consequat nec lacus id ultricies. Quisque facilisis dolor nec augue lobortis aliquet. Pellentesque nec lacus a justo facilisis tincidunt sit amet in arcu. Donec non nisi quis eros rutrum accumsan vel at enim. Quisque ullamcorper non ligula sit amet rutrum. Aenean facilisis quam eget ligula tristique sagittis. Nulla venenatis, nisl nec ullamcorper pulvinar, orci tellus pharetra lectus, ut placerat urna nulla quis quam. Donec purus justo, cursus et odio vel, euismod ullamcorper massa. Aliquam non neque hendrerit, faucibus arcu eget, auctor leo. Nulla posuere magna ut gravida pharetra. Nulla at tortor ipsum. Pellentesque pretium lobortis eros pretium aliquet. Mauris ultrices urna ac posuere rutrum. Phasellus nulla lorem, facilisis vel porttitor eu, sagittis vel velit. '
		]);
		Package::create([
				'place_id'		=> 6,
				'name'	 		=> 'Hat Yai waterfall trip',
				'description'	=> 'Back to nature',
				'tentative'		=> 'Mauris magna lorem, sollicitudin sit amet sagittis id, pharetra non sapien. Sed pellentesque interdum mauris, quis semper velit tempor vel. Mauris consequat nec lacus id ultricies. Quisque facilisis dolor nec augue lobortis aliquet. Pellentesque nec lacus a justo facilisis tincidunt sit amet in arcu. Donec non nisi quis eros rutrum accumsan vel at enim. Quisque ullamcorper non ligula sit amet rutrum. Aenean facilisis quam eget ligula tristique sagittis. Nulla venenatis, nisl nec ullamcorper pulvinar, orci tellus pharetra lectus, ut placerat urna nulla quis quam. Donec purus justo, cursus et odio vel, euismod ullamcorper massa. Aliquam non neque hendrerit, faucibus arcu eget, auctor leo. Nulla posuere magna ut gravida pharetra. Nulla at tortor ipsum. Pellentesque pretium lobortis eros pretium aliquet. Mauris ultrices urna ac posuere rutrum. Phasellus nulla lorem, facilisis vel porttitor eu, sagittis vel velit. '
		]);
	}

}
