<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'email'      => 'usertest1@gmail.com',
                'password'   => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email'      => 'usertest2@gmail.com',
                'password'   => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email'      => 'usertest3@gmail.com',
                'password'   => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
