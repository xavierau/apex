<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LanguagesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        Language::create([
            "language"=> "English",
            "iso_code"=> "en",
            "active"=> 1,
            "default"=> 1,
        ]);
	}

}