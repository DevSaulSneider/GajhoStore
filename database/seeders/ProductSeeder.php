<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
                'category_id' => '1',
                'user_id' => '2',
                'name' => 'Playstation 5',
                'description' => 'Playstation 5 con lector de discos, 1Tb',
                'quantity' => 1,
                'state' => 'S',
                'price' => 2000.0,
                'discount_price' => 1900.0,
                'image' => 'dsadasdas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '2',
                'user_id' => '3',
                'name' => 'Jean Gucci T/30 rasgado',
                'description' => 'Jean T/30 rasgado',
                'quantity' => 1,
                'state' => 'S',
                'price' => 120.0,
                'discount_price' => 90.0,
                'image' => 'dsadasdas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('products')->insert($data);
    }
}
