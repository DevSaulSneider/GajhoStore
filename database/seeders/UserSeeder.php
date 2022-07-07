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
                'password' => bcrypt('12345678'),
                'district_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 1
            ],
            [
                'name' => 'Marcos',
                'lastName' => 'Salvador',
                'phone' => '997332746',
                'address' => 'Jr. Los Admins 123',
                'reference' => 'No se',
                'username' => 'marcos',
                'email' => 'marcos@gmail.com',
                'password' => bcrypt('12345678'),
                'district_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 0
            ],
            [
                'name' => 'Gael',
                'lastName' => 'Gonzales',
                'phone' => '943874365',
                'address' => 'Jr. Los Admins 123',
                'reference' => 'No se',
                'username' => 'gael',
                'email' => 'gael@gmail.com',
                'password' => bcrypt('12345678'),
                'district_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 0
            ],
            [
                'name' => 'Ricardo',
                'lastName' => 'Gutierrez',
                'phone' => '943757843',
                'address' => 'Jr. Los Rubies 123',
                'reference' => 'No se',
                'username' => 'ricardo',
                'email' => 'ricardo@gmail.com',
                'password' => bcrypt('12345678'),
                'district_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 0
            ],



            [
                'name' => 'Pablo',
                'lastName' => 'Lopez',
                'phone' => '943757843',
                'address' => 'Jr. canada 123',
                'reference' => 'metropolitano',
                'username' => 'pablo123',
                'email' => 'pablo@gmail.com',
                'password' => bcrypt('12345678'),
                'district_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 0
            ],
            [
                'name' => 'Fiorella',
                'lastName' => 'Diaz',
                'phone' => '943757843',
                'address' => 'Jr. bolivia 123',
                'reference' => 'metropolitano',
                'username' => 'fiorella',
                'email' => 'fiorella@gmail.com',
                'password' => bcrypt('12345678'),
                'district_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 0
            ],
            [
                'name' => 'Nicole',
                'lastName' => 'Gutierrez',
                'phone' => '920394859',
                'address' => 'Jr. bolognesi 123',
                'reference' => 'metropolitano',
                'username' => 'nicole',
                'email' => 'nicole@gmail.com',
                'password' => bcrypt('12345678'),
                'district_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 0
            ],
            [
                'name' => 'Gerardo',
                'lastName' => 'Lopez',
                'phone' => '928394827',
                'address' => 'Jr. proceres 123',
                'reference' => 'metropolitano',
                'username' => 'gerardo',
                'email' => 'gerardo@gmail.com',
                'password' => bcrypt('12345678'),
                'district_id' => '16',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 0
            ],
            [
                'name' => 'Gregorio',
                'lastName' => 'Jimenez',
                'phone' => '992837493',
                'address' => 'Jr. gamarra 123',
                'reference' => 'metropolitano',
                'username' => 'gregorio',
                'email' => 'gregorio@gmail.com',
                'password' => bcrypt('12345678'),
                'district_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 0
            ],
            [
                'name' => 'Raul',
                'lastName' => 'Perez',
                'phone' => '928374859',
                'address' => 'Jr. los jazmines 123',
                'reference' => 'metropolitano',
                'username' => 'raul',
                'email' => 'raul@gmail.com',
                'password' => bcrypt('12345678'),
                'district_id' => '24',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 0
            ],
            [
                'name' => 'Jhordan',
                'lastName' => 'Alarcon',
                'phone' => '928205295',
                'address' => 'Jr. los jazmines 123',
                'reference' => 'metropolitano',
                'username' => 'jhordan',
                'email' => 'jhordan@gmail.com',
                'password' => bcrypt('12345678'),
                'district_id' => '25',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'role_id' => 0
            ],
        ];

        DB::table('users')->insert($data);
    }
}
