<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Product::create([
				'name' => $faker->word,
				'description' => $faker->paragraph(3),
				'price' => $faker->randomNumber(3),
			]);
		}
	}

}