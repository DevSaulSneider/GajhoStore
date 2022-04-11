<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartamentoSeeder extends Seeder
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
                'nombre' => 'AMAZONAS',
            ],
            [
                'nombre' => 'ANCASH',
            ],
            [
                'nombre' => 'APURIMAC',
            ],
            [
                'nombre' => 'AREQUIPA',
            ],
            [
                'nombre' => 'AYACUCHO',
            ],
            [
                'nombre' => 'CAJAMARCA',
            ],
            [
                'nombre' => 'CUSCO',
            ],
            [
                'nombre' => 'HUANCAVELICA',
            ],
            [
                'nombre' => 'HUANUCO',
            ],
            [
                'nombre' => 'ICA',
            ],
            [
                'nombre' => 'JUNIN',
            ],
            [
                'nombre' => 'LA LIBERTAD',
            ],
            [
                'nombre' => 'LAMBAYEQUE',
            ],
            [
                'nombre' => 'LIMA',
            ],
            [
                'nombre' => 'LORETO',
            ],
            [
                'nombre' => 'MADRE DE DIOS',
            ],
            [
                'nombre' => 'MOQUEGUA',
            ],
            [
                'nombre' => 'PASCO',
            ],
            [
                'nombre' => 'PIURA',
            ],
            [
                'nombre' => 'PUNO',
            ],
            [
                'nombre' => 'SAN MARTIN',
            ],
            [
                'nombre' => 'TACNA',
            ],
            [
                'nombre' => 'TUMBES',
            ],
            [
                'nombre' => 'PROV. CONST. DEL CALLAO',
            ],
            [
                'nombre' => 'UCAYALI',
            ],
        ];

        DB::table('departamentos')->insert($data);
    }
}
