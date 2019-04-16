<?php

use Illuminate\Database\Seeder;

class StationsGridTableSeeder extends Seeder
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
                'stationOfDeparture' => '1',
                'stationOfArrival' => '2',
                'distance' => '20',
            ],
            [
                'stationOfDeparture' => '1',
                'stationOfArrival' => '3',
                'distance' => '300',
            ],
            [
                'stationOfDeparture' => '2',
                'stationOfArrival' => '3',
                'distance' => '200',
            ],
            [
                'stationOfDeparture' => '2',
                'stationOfArrival' => '4',
                'distance' => '350',
            ],
            [
                'stationOfDeparture' => '3',
                'stationOfArrival' => '4',
                'distance' => '30',
            ],
            [
                'stationOfDeparture' => '4',
                'stationOfArrival' => '5',
                'distance' => '380',
            ],
            [
                'stationOfDeparture' => '5',
                'stationOfArrival' => '6',
                'distance' => '290',
            ],
            [
                'stationOfDeparture' => '6',
                'stationOfArrival' => '7',
                'distance' => '420',
            ],
            [
                'stationOfDeparture' => '7',
                'stationOfArrival' => '8',
                'distance' => '50',
            ],
            [
                'stationOfDeparture' => '8',
                'stationOfArrival' => '9',
                'distance' => '190',
            ],
            [
                'stationOfDeparture' => '9',
                'stationOfArrival' => '10',
                'distance' => '275',
            ],
            [
                'stationOfDeparture' => '10',
                'stationOfArrival' => '11',
                'distance' => '180',
            ],
            [
                'stationOfDeparture' => '11',
                'stationOfArrival' => '12',
                'distance' => '25',
            ],
            [
                'stationOfDeparture' => '12',
                'stationOfArrival' => '13',
                'distance' => '450',
            ]
        ];

        DB::table('stations_grid')->insert($data);
    }
}
