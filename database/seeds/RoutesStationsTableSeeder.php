<?php

use Illuminate\Database\Seeder;

class RoutesStationsTableSeeder extends Seeder
{
    /**
     * @throws Exception
     */
    public function run()
    {
        $data = [
            [
                'route_id' => 1,
                'station_id' => 1,
                'order' => 0,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 1,
                'station_id' => 3,
                'order' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 1,
                'station_id' => 7,
                'order' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 2,
                'station_id' => 11,
                'order' => 0,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 2,
                'station_id' => 13,
                'order' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 2,
                'station_id' => 16,
                'order' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 2,
                'station_id' => 2,
                'order' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 3,
                'station_id' => 4,
                'order' => 0,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 3,
                'station_id' => 10,
                'order' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 3,
                'station_id' => 12,
                'order' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 4,
                'station_id' => 6,
                'order' => 0,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 4,
                'station_id' => 9,
                'order' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 4,
                'station_id' => 14,
                'order' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 5,
                'station_id' => 16,
                'order' => 0,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 5,
                'station_id' => 2,
                'order' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 5,
                'station_id' => 4,
                'order' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 5,
                'station_id' => 7,
                'order' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 6,
                'station_id' => 14,
                'order' => 0,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 6,
                'station_id' => 10,
                'order' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 6,
                'station_id' => 15,
                'order' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 7,
                'station_id' => 10,
                'order' => 0,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 7,
                'station_id' => 3,
                'order' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 7,
                'station_id' => 2,
                'order' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'route_id' => 7,
                'station_id' => 15,
                'order' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ]
        ];

        DB::table('routes_stations')->insert($data);
    }
}
