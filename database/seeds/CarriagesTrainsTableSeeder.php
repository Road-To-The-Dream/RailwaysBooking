<?php

use Illuminate\Database\Seeder;

class CarriagesTrainsTableSeeder extends Seeder
{
    /**
     * @throws Exception
     */
    public function run()
    {
        for ($i = 0; $i < 8; $i++) {
            $data[$i]['train_id'] = random_int(1, 5);

            $data[$i]['carriage_id'] = random_int(1, 30);
            $data[$i]['created_at'] = date("Y-m-d H:i:s");
        }

        $data = [
            [
                'carriage_id' => 1,
                'train_id' => 1
            ],
            [
                'carriage_id' => 2,
                'train_id' => 1
            ],
            [
                'carriage_id' => 3,
                'train_id' => 1
            ],
            [
                'carriage_id' => 4,
                'train_id' => 1
            ],
            [
                'carriage_id' => 5,
                'train_id' => 1
            ],
            [
                'carriage_id' => 6,
                'train_id' => 1
            ],
            [
                'carriage_id' => 1,
                'train_id' => 2
            ],
            [
                'carriage_id' => 2,
                'train_id' => 2
            ],
            [
                'carriage_id' => 3,
                'train_id' => 2
            ],
            [
                'carriage_id' => 4,
                'train_id' => 2
            ],
            [
                'carriage_id' => 5,
                'train_id' => 2
            ],
            [
                'carriage_id' => 1,
                'train_id' => 3
            ],
            [
                'carriage_id' => 2,
                'train_id' => 3
            ],
            [
                'carriage_id' => 3,
                'train_id' => 3
            ],
            [
                'carriage_id' => 4,
                'train_id' => 3
            ],
            [
                'carriage_id' => 5,
                'train_id' => 3
            ],
            [
                'carriage_id' => 6,
                'train_id' => 3
            ],
            [
                'carriage_id' => 1,
                'train_id' => 4
            ],
            [
                'carriage_id' => 2,
                'train_id' => 4
            ],
            [
                'carriage_id' => 3,
                'train_id' => 4
            ],
            [
                'carriage_id' => 4,
                'train_id' => 4
            ],
            [
                'carriage_id' => 1,
                'train_id' => 5
            ],
            [
                'carriage_id' => 2,
                'train_id' => 5
            ],
            [
                'carriage_id' => 3,
                'train_id' => 5
            ]
        ];

        DB::table('carriages_trains')->insert($data);
    }
}
