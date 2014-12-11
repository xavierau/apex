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
        ]);

//		foreach(range(1, 10) as $index)
//		{
//			Language::create([
//                "language"=> "US English",
//                "iso_code"=> "en_us",
//            ]);
//		}
	}

}