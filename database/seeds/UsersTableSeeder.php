<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'last_name' => 'Сушко',
                'first_name' => 'Сергей',
                'email' => 'sushko@gmail.com',
                'phone' => str_random(10),
                'password' => bcrypt('password1'),
                'role_id' => 1,
            ],
            [
                'last_name' => 'Троян',
                'first_name' => 'Дмитрий',
                'email' => 'troyan@gmail.com',
                'phone' => str_random(10),
                'password' => bcrypt('password2'),
                'role_id' => 2,
            ]
        ];

        DB::table('users')->insert($data);
    }
}
