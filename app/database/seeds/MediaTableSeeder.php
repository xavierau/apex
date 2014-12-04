<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MediaTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{

			$height = rand(3, 8) * 100;
			$width = rand(3, 8) * 100;

			Media::create([
				'filename' => $faker->name,
				'filetype' => $faker->fileExtension,
				'filesize' => $faker->randomDigitNotNull,
				'width' => $width,
				'height' => $height,
				'uri' => $faker->imageUrl($width, $height),
			]);
		}
	}

}