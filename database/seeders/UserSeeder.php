<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => 1,
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Abu',
                'email' => 'abu@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => NULL,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Ali',
                'email' => 'ali@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => NULL,
                'created_at' => now()
            ]
            ]);
    }
}
