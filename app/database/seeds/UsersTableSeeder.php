<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 200) as $index)
		{
			User::create([
				'username' => $faker->userName,
				'firstname' => $faker->firstName,
				'lastname' => $faker->lastName,
				'email' => $faker->email,
				'password' => $faker->word
			]);
		}
	}

}