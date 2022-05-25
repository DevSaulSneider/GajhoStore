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
                'description' => 'Playstation 5',
                'quantity' => 1,
                'state' => 'S',
                'price' => 2000.0,
                'discount_price' => 1900.0,
                'image' => 'upload/jwgoNfuJlXMDJ5SibyJFTC7BtwaI1GtkxwTwWbUh.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '4',
                'user_id' => '3',
                'name' => 'Celular',
                'description' => 'Samsung Galaxy S20',
                'quantity' => 1,
                'state' => 'S',
                'price' => 1500.0,
                'discount_price' => 1400.0,
                'image' => 'upload/3Oeisd4iRGZKBdGSmNonWzrEOK9LYG08RrKsFYcp.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '1',
                'user_id' => '3',
                'name' => 'Monitor',
                'description' => "Monitor Curvo 28'",
                'quantity' => 1,
                'state' => 'S',
                'price' => 800.0,
                'discount_price' => 799.0,
                'image' => 'upload/QAmd4AKyshhp65jzpDuMJofSaHs6GNxrWB0X6eQd.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('products')->insert($data);
    }
}
