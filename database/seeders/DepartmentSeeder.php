<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartmentSeeder extends Seeder
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
                'name' => 'AMAZONAS',
            ],
            [
                'name' => 'ANCASH',
            ],
            [
                'name' => 'APURIMAC',
            ],
            [
                'name' => 'AREQUIPA',
            ],
            [
                'name' => 'AYACUCHO',
            ],
            [
                'name' => 'CAJAMARCA',
            ],
            [
                'name' => 'CUSCO',
            ],
            [
                'name' => 'HUANCAVELICA',
            ],
            [
                'name' => 'HUANUCO',
            ],
            [
                'name' => 'ICA',
            ],
            [
                'name' => 'JUNIN',
            ],
            [
                'name' => 'LA LIBERTAD',
            ],
            [
                'name' => 'LAMBAYEQUE',
            ],
            [
                'name' => 'LIMA',
            ],
            [
                'name' => 'LORETO',
            ],
            [
                'name' => 'MADRE DE DIOS',
            ],
            [
                'name' => 'MOQUEGUA',
            ],
            [
                'name' => 'PASCO',
            ],
            [
                'name' => 'PIURA',
            ],
            [
                'name' => 'PUNO',
            ],
            [
                'name' => 'SAN MARTIN',
            ],
            [
                'name' => 'TACNA',
            ],
            [
                'name' => 'TUMBES',
            ],
            [
                'name' => 'PROV. CONST. DEL CALLAO',
            ],
            [
                'name' => 'UCAYALI',
            ],
        ];

        DB::table('departments')->insert($data);
    }
}
