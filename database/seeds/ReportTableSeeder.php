<?php

use Illuminate\Database\Seeder;

class ReportTableSeeder extends Seeder
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
			
			DB::table('reports')->insert([
				'subject' => $faker->name,
				'description' => $faker->word,
				'user_id' => rand(1,6),
				'admin_id' => rand(1,6),
				'status' => rand(1,3),
				'answer' => $faker->word,
			]);			
		}
	}
}