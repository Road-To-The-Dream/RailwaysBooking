<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Плацкарт',
                'places_amount' => '54',
                'price' => '170'
            ],
            [
                'name' => 'Люкс',
                'places_amount' => '18',
                'price' => '1000.50'
            ],
            [
                'name' => 'Купе',
                'places_amount' => '40',
                'price' => '455.50'
            ]
        ];

        DB::table('types')->insert($data);
    }
}
