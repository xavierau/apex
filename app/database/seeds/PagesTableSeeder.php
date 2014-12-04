<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PagesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$id = rand(1,3);
			Page::create([
				'url' => $faker->url,
				'title' => $faker->name,
				'parent_id' => $id,
				'order' => $id,
			]);
		}
	}

}