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
                'loyalty' => 'gold',
                'colorCode' => '#C6A961',
                'point' => 151,
            ],
            [
                'name' => 'Ms. Fei Li',
                'loyalty' => 'green',
                'colorCode' => '#006F42',
                'point' => 0,
            ],
        ]);

    }
}
