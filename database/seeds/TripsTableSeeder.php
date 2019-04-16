<?php

use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * @throws Exception
     */
    public function run()
    {
        $data = [
            [
                'time_start' => date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." + 1 days +30 minutes")),
                'time_finish' => date('Y-m-d H:i:s', strtotime(date("Y-m-d H:i:s"). ' + 2 days')),
                'duration_in_minutes' => 400,
                'rate' => 0.75,
                'train_id' => 1,
                'route_id' => 1
            ],
            [
                'time_start' => date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." + 2 days +300 minutes")),
                'time_finish' => date('Y-m-d H:i:s', strtotime(date("Y-m-d H:i:s"). ' + 4 days')),
                'duration_in_minutes' => 400,
                'rate' => 0.75,
                'train_id' => 2,
                'route_id' => 2
            ],
            [
                'time_start' => date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." + 4 days +500 minutes")),
                'time_finish' => date('Y-m-d H:i:s', strtotime(date("Y-m-d H:i:s"). ' + 6 days')),
                'duration_in_minutes' => 400,
                'rate' => 0.75,
                'train_id' => 3,
                'route_id' => 3
            ],
            [
                'time_start' => date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." + 1 days +800 minutes")),
                'time_finish' => date('Y-m-d H:i:s', strtotime(date("Y-m-d H:i:s"). ' + 3 days')),
                'duration_in_minutes' => 400,
                'rate' => 0.75,
                'train_id' => 4,
                'route_id' => 4
            ],
            [
                'time_start' => date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." + 3 days +120 minutes")),
                'time_finish' => date('Y-m-d H:i:s', strtotime(date("Y-m-d H:i:s"). ' + 5 days')),
                'duration_in_minutes' => 400,
                'rate' => 0.75,
                'train_id' => 5,
                'route_id' => 5
            ]
        ];

        DB::table('trips')->insert($data);
    }
}
