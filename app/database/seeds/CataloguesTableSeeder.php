<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CataloguesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Catalogue::create([
				"name" => $faker->word,
				"active" => $faker->boolean(90) ,
				"description" => $faker->paragraph(7),
				"page_title" => $faker->sentence(3),
			]);
		}
	}

}