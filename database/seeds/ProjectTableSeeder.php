<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
    	for ($i = 0; $i < 50; $i++) {
            DB::table('project')->insert([ //,
            	'title' => $faker->text($maxNbChars = 100),
                'thumbnail' => $faker->imageUrl($width = 640, $height = 480),
                'description' => $faker->text($maxNbChars = 500),
        		'content' => $faker->text($maxNbChars = 10000),
            ]);
        }
    }
}
