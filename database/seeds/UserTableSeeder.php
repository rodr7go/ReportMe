<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'name' => 'rodrigo',
			'email' => 'rodrigo@controlmas.mx',
			'password' => bcrypt('rodrigo'),
		]);

		for ($i = 0; $i <6; $i++)
		{
			$faker = Faker\Factory::create('es_ES');

			
			DB::table('users')->insert([
				'name' => $faker->name,
				'email' => $faker->email,
				'apt_number' => rand(1,10),
				'password' => bcrypt('secret'),
			]);	
		}
	}
}
