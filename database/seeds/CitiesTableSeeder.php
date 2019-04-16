<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
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
                'name' => 'Харьков',
            ],
            [
                'name' => 'Киев',
            ],
            [
                'name' => 'Кривой Рог',
            ],
            [
                'name' => 'Львов',
            ],
            [
                'name' => 'Днепропетровск',
            ],
            [
                'name' => 'Херсон',
            ],
            [
                'name' => 'Кировоград',
            ],
            [
                'name' => 'Донецк',
            ]
        ];

        DB::table('cities')->insert($data);
    }
}
