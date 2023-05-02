<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('transactions')->insert([

            [
                'user_id' => 1,
                'coffee_id' => 5,
                'date' => '2023-03-21',
            ],
            [
                'user_id' => 1,
                'coffee_id' => 10,
                'date' => '2023-03-20',
            ],
            [
                'user_id' => 1,
                'coffee_id' => 12,
                'date' => '2023-03-19',
            ],
            [
                'user_id' => 2,
                'coffee_id' => 4,
                'date' => '2023-03-21',
            ],
            [
                'user_id' => 2,
                'coffee_id' => 8,
                'date' => '2023-03-19',
            ],
            [
                'user_id' => 2,
                'coffee_id' => 1,
                'date' => '2023-03-18',
            ],

        ]);

    }
}
