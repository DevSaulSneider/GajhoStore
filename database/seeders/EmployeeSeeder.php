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
            'name' => 'Juan',
            'lastName' => 'Perez',
            'phone' => '984843546',
            'email' => 'juan@gmail.com',
            'username' => 'juan',
            'password' => 'juan',
            'turn_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ];

        DB::table('employees')->insert($data);
    }
}
