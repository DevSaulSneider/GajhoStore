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
                'username' => 'gaelinho',
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
                'username' => 'pieroTvT3rr0r',
                'password' => 'piero123',
                'turn_id' => 1,        
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Conor',
                'lastName' => 'Mcgregor',
                'phone' => '123456789',
                'email' => 'conor@conor.com',
                'username' => 'conor',
                'password' => 'conos123',
                'turn_id' => 3,        
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('employees')->insert($data);
    }
}
