<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CountriesTableSeeder');
		$this->call('ActivitiesTableSeeder');
		$this->call('LocationsTableSeeder');
		$this->call('PackagesTableSeeder');
		$this->call('UsersTableSeeder');
	}

}
