<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'name' => 'admin',
                'lastName' => 'admin',
                'phone' => '987654321',
                'address' => 'Jr. Los Admins 123',
                'reference' => 'No se',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin',
                'district_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Marcos',
                'lastName' => 'Salvador',
                'phone' => '997332746',
                'address' => 'Jr. Los Admins 123',
                'reference' => 'No se',
                'username' => 'marcos',
                'email' => 'marcos@gmail.com',
                'password' => 'marcos',
                'district_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Gael',
                'lastName' => 'Gonzales',
                'phone' => '943874365',
                'address' => 'Jr. Los Admins 123',
                'reference' => 'No se',
                'username' => 'gael',
                'email' => 'gael@gmail.com',
                'password' => 'gael',
                'district_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Arturo',
                'lastName' => 'Collado',
                'phone' => '943757843',
                'address' => 'Jr. Los Vagos 123',
                'reference' => 'No se',
                'username' => 'arturo',
                'email' => 'arturo@gmail.com',
                'password' => 'arturo',
                'district_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
