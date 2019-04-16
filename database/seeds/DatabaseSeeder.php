<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(StationsTableSeeder::class);
        $this->call(StationsGridTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(CarriagesTableSeeder::class);
        $this->call(CarriagesTrainsTableSeeder::class);
        $this->call(RoutesStationsTableSeeder::class);
        factory(\App\Models\Train::class, 5)->create();
        $this->call(TripsTableSeeder::class);
    }
}
