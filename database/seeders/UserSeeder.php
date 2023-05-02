<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Mr. Vico Lomar',
                'loyalty' => 'Gold',
                'colorCode' => 'goldLevel',
                'point' => 151,
                'code' => '#C6A961',
            ],
            [
                'name' => 'Ms. Fei Fei Li',
                'loyalty' => 'Green',
                'colorCode' => 'greenLevel',
                'point' => 0,
                'code' => '#006F42'
            ],
        ]);

    }
}
