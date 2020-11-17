<?php

use Illuminate\Database\Seeder;

// Import DB and Faker services
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	foreach (range(1,500) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'dob' => $faker->date($format = 'D-m-y', $max = '2020',$min = '1990')
            ]);
        }
    }
}