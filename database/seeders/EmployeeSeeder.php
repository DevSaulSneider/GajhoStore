<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
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
                'name' => 'Gael',
                'lastName' => 'Gonzales',
                'phone' => '987654321',
                'email' => 'gael@gael.com',
                'user_id' => 1,
                'password' => 'gael123',
                'turn_id' => 2,        
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Piero',
                'lastName' => 'Marcos',
                'phone' => '123456789',
                'email' => 'piero@piero.com',
                'user_id' => 2,
                'password' => 'piero123',
                'turn_id' => 1,        
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('employees')->insert($data);
    }
}
