<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurnSeeder extends Seeder
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
                'turn' => 'Mañana',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'turn' => 'Tarde',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'turn' => 'Noche',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('turns')->insert($data);
    }
}
