<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'purchase_id' => 1,
            'employee_id' => 1,
            'description' => 'El playstation 5 solo tenia juegos de nintendo',
            'image' => 'asfdsfs',
            'date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ];

        DB::table('incidents')->insert($data);
    }
}
