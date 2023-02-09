<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaifuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('waifus')->insert([
            'name' => 'Mikasa Ackerman',
            'anime' => 'Shingeki no Kyojin',
            'picture' => 'https://cdn.myanimelist.net/images/characters/9/215563.jpg',
            'grade' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('waifus')->insert([
            'name' => 'Nezuko Kamado',
            'anime' => 'Kimetsu no Yaiba',
            'picture' => 'https://cdn.myanimelist.net/images/characters/15/381711.jpg',
            'grade' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        
        DB::table('waifus')->insert([
            'name' => 'Mayuri Shiina',
            'anime' => 'Steins;Gate',
            'picture' => 'https://cdn.myanimelist.net/images/characters/4/131329.jpg',
            'grade' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
