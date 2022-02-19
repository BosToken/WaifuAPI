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
            'id' => '1',
            'email' => 'faizdiandra11@gmail.com',
            'username' => 'さユり',
            'password' => 'diandra11',
            'role' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'email' => 'muhammadsalmanalfarisi82@gmail.com',
            'username' => 'alfarise',
            'password' => 'alfarise',
            'role' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => '3',
            'email' => 'marselamargareta90@gmail.com',
            'username' => 'bakacela',
            'password' => 'bakacela',
            'role' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => '4',
            'email' => 'agent@gmail.com',
            'username' => 'agent',
            'password' => 'agent',
            'role' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
