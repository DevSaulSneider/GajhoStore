<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseDetailSeeder extends Seeder
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
                'purchase_id'=> 1,
                'product_id'=>1,
                'price'=> 2000.0,
                'quantity'=> 1,
                'discount_price'=> null,
                'subtotal'=> 2000.0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'purchase_id'=> 1,
                'product_id'=>2,
                'price'=> 120.0,
                'quantity'=> 1,
                'discount_price'=> null,
                'subtotal'=> 120.0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('purchase_details')->insert($data);
    }
}
