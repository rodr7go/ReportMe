<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(BuildingTableSeeder::class);
        $this->call(ReportTableSeeder::class);
        $this->call(RoleTableSeeder::class);


        Model::reguard();
    }
}
