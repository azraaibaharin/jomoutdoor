<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{	
		User::truncate();
	    $user = User::create(array(
	    	'username'		=> 'azraaibaharin',
	        'email'     	=> 'azraai@example.com',
	        'password'  	=> Hash::make('test'),
	        'permission'	=> 0 // admin
	    ));

	    $user = User::create(array(
	    	'username'		=> 'azmilzainal',
	        'email'     	=> 'azmilzainal@jomoutdoor.com',
	        'password'  	=> Hash::make('test'),
	        'permission'	=> 0 // admin
	    ));

	    $user = User::create(array(
	    	'username'		=> 'marissa',
	        'email'     	=> 'marissa@example.com',
	        'password'  	=> Hash::make('test'),
	        'permission'	=> 1 // member
	    ));

	    $faker = Faker::create();
		foreach(range(1, 1) as $index)
		{
			$fakeUser = User::create(array(
		        'username'		=> $faker->userName,
		        'email'     	=> $faker->email,
		        'password'  	=> Hash::make($faker->word),
		        'permission'	=> $faker->numberBetween(0,1)
		    ));
		}
	}

}