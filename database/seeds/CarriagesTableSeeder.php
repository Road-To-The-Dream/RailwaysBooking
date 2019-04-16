<?php

use Illuminate\Database\Seeder;

class CarriagesTableSeeder extends Seeder
{
    /**
     * @throws Exception
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $data[$i]['status'] = true;
            $data[$i]['type_id'] = random_int(1, 3);
            $data[$i]['created_at'] = date("Y-m-d H:i:s");
        }

        DB::table('carriages')->insert($data);
    }
}
