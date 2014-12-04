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

		// $this->call('UsersTableSeeder');
		// $this->call('CataloguesTableSeeder');
		// $this->call('ProductsTableSeeder');
		// $this->call('MediaTableSeeder');
		$this->call('PagesTableSeeder');
	}

}
