<?php

use Illuminate\Database\Seeder;

class BuildingTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for ($i = 0; $i <6; $i++)
		{
			$faker = Faker\Factory::create('es_ES');
			
			DB::table('buildings')->insert([
				'name' => $faker->name,
				'street' => $faker->streetName,
				'number' => $faker->buildingNumber,
				'neighborhood' => $faker->city,
				'city' => $faker->city,
				'state' => $faker->state,
				'zip_code' => $faker->postcode,
			]);			
		}
	}
}
