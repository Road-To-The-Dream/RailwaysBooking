<?php

use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
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
                'name' => 'Харьков Западная',
                'city_id' => '1',
            ],
            [
                'name' => 'Харьков Восточная',
                'city_id' => '1',
            ],
            [
                'name' => 'Киев Южная',
                'city_id' => '2',
            ],
            [
                'name' => 'Киев Северная',
                'city_id' => '2',
            ],
            [
                'name' => 'Кривой Рог Западная',
                'city_id' => '3',
            ],
            [
                'name' => 'Кривой Рог Северная',
                'city_id' => '3',
            ],
            [
                'name' => 'Львов Южная',
                'city_id' => '4',
            ],
            [
                'name' => 'Львов Западная',
                'city_id' => '4',
            ],
            [
                'name' => 'Днепропетровск Восточная',
                'city_id' => '5',
            ],
            [
                'name' => 'Днепропетровск Северная',
                'city_id' => '5',
            ],
            [
                'name' => 'Херсон Восточная',
                'city_id' => '6',
            ],
            [
                'name' => 'Херсон Северная',
                'city_id' => '6',
            ],
            [
                'name' => 'Кировоград Южная',
                'city_id' => '7',
            ],
            [
                'name' => 'Кировоград Западная',
                'city_id' => '7',
            ],
            [
                'name' => 'Донецк Восточная',
                'city_id' => '8',
            ],
            [
                'name' => 'Донецк Южная',
                'city_id' => '8',
            ]
        ];

        DB::table('stations')->insert($data);
    }
}
