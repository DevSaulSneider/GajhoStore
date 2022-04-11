<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProvinciaSeeder extends Seeder
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
                'nombre' => 'CHACHAPOYAS',
                'id_departamento' => '01',
            ],
            [
                'nombre' => 'BAGUA',
                'id_departamento' => '01',
            ],
            [
                'nombre' => 'BONGARA',
                'id_departamento' => '01',
            ],
            [
                'nombre' => 'LUYA',
                'id_departamento' => '01',
            ],
            [
                'nombre' => 'RODRIGUEZ DE MENDOZA',
                'id_departamento' => '01',
            ],
            [
                'nombre' => 'CONDORCANQUI',
                'id_departamento' => '01',
            ],
            [
                'nombre' => 'UTCUBAMBA',
                'id_departamento' => '01',
            ],
            [
                'nombre' => 'HUARAZ',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'AIJA',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'BOLOGNESI',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'CARHUAZ',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'CASMA',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'CORONGO',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'HUAYLAS',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'HUARI',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'MARISCAL LUZURIAGA',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'PALLASCA',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'POMABAMBA',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'RECUAY',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'SANTA',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'SIHUAS',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'YUNGAY',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'ANTONIO RAIMONDI',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'CARLOS FERMIN FITZCARRALD',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'ASUNCION',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'HUARMEY',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'OCROS',
                'id_departamento' => '02',
            ],
            [
                'nombre' => 'ABANCAY',
                'id_departamento' => '03',
            ],
            [
                'nombre' => 'AYMARAES',
                'id_departamento' => '03',
            ],
            [
                'nombre' => 'ANDAHUAYLAS',
                'id_departamento' => '03',
            ],
            [
                'nombre' => 'ANTABAMBA',
                'id_departamento' => '03',
            ],
            [
                'nombre' => 'COTABAMBAS',
                'id_departamento' => '03',
            ],
            [
                'nombre' => 'GRAU',
                'id_departamento' => '03',
            ],
            [
                'nombre' => 'CHINCHEROS',
                'id_departamento' => '03',
            ],
            [
                'nombre' => 'AREQUIPA',
                'id_departamento' => '04',
            ],
            [
                'nombre' => 'CAYLLOMA',
                'id_departamento' => '04',
            ],
            [
                'nombre' => 'CAMANA',
                'id_departamento' => '04',
            ],
            [
                'nombre' => 'CARAVELI',
                'id_departamento' => '04',
            ],
            [
                'nombre' => 'CASTILLA',
                'id_departamento' => '04',
            ],
            [
                'nombre' => 'CONDESUYOS',
                'id_departamento' => '04',
            ],
            [
                'nombre' => 'ISLAY',
                'id_departamento' => '04',
            ],
            [
                'nombre' => 'LA UNION',
                'id_departamento' => '04',
            ],
            [
                'nombre' => 'HUAMANGA',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'CANGALLO',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'HUANTA',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'LA MAR',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'LUCANAS',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'PARINACOCHAS',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'VICTOR FAJARDO',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'HUANCA SANCOS',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'VILCAS HUAMAN',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'PAUCAR DEL SARA SARA',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'SUCRE',
                'id_departamento' => '05',
            ],
            [
                'nombre' => 'CAJAMARCA',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'CAJABAMBA',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'CELENDIN',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'CONTUMAZA',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'CUTERVO',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'CHOTA',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'HUALGAYOC',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'JAEN',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'SANTA CRUZ',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'SAN MIGUEL',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'SAN IGNACIO',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'SAN MARCOS',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'SAN PABLO',
                'id_departamento' => '06',
            ],
            [
                'nombre' => 'CUSCO',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'ACOMAYO',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'ANTA',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'CALCA',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'CANAS',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'CANCHIS',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'CHUMBIVILCAS',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'ESPINAR',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'LA CONVENCION',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'PARURO',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'PAUCARTAMBO',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'QUISPICANCHIS',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'URUBAMBA',
                'id_departamento' => '07',
            ],
            [
                'nombre' => 'HUANCAVELICA',
                'id_departamento' => '08',
            ],
            [
                'nombre' => 'ACOBAMBA',
                'id_departamento' => '08',
            ],
            [
                'nombre' => 'ANGARAES',
                'id_departamento' => '08',
            ],
            [
                'nombre' => 'CASTROVIRREYNA',
                'id_departamento' => '08',
            ],
            [
                'nombre' => 'TAYACAJA',
                'id_departamento' => '08',
            ],
            [
                'nombre' => 'HUAYTARA',
                'id_departamento' => '08',
            ],
            [
                'nombre' => 'CHURCAMPA',
                'id_departamento' => '08',
            ],
            [
                'nombre' => 'HUANUCO',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'AMBO',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'DOS DE MAYO',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'HUAMALIES',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'MARANON',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'LEONCIO PRADO',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'PACHITEA',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'PUERTO INCA',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'HUACAYBAMBA',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'LAURICOCHA',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'YAROWILCA',
                'id_departamento' => '09',
            ],
            [
                'nombre' => 'ICA',
                'id_departamento' => '10',
            ],
            [
                'nombre' => 'CHINCHA',
                'id_departamento' => '10',
            ],
            [
                'nombre' => 'NAZCA',
                'id_departamento' => '10',
            ],
            [
                'nombre' => 'PISCO',
                'id_departamento' => '10',
            ],
            [
                'nombre' => 'PALPA',
                'id_departamento' => '10',
            ],
            [
                'nombre' => 'HUANCAYO',
                'id_departamento' => '11',
            ],
            [
                'nombre' => 'CONCEPCION',
                'id_departamento' => '11',
            ],
            [
                'nombre' => 'JAUJA',
                'id_departamento' => '11',
            ],
            [
                'nombre' => 'JUNIN',
                'id_departamento' => '11',
            ],
            [
                'nombre' => 'TARMA',
                'id_departamento' => '11',
            ],
            [
                'nombre' => 'YAULI',
                'id_departamento' => '11',
            ],
            [
                'nombre' => 'SATIPO',
                'id_departamento' => '11',
            ],
            [
                'nombre' => 'CHANCHAMAYO',
                'id_departamento' => '11',
            ],
            [
                'nombre' => 'CHUPACA',
                'id_departamento' => '11',
            ],
            [
                'nombre' => 'TRUJILLO',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'BOLIVAR',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'SANCHEZ CARRION',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'OTUZCO',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'PACASMAYO',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'PATAZ',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'SANTIAGO DE CHUCO',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'ASCOPE',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'CHEPEN',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'JULCAN',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'GRAN CHIMU',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'VIRU',
                'id_departamento' => '12',
            ],
            [
                'nombre' => 'CHICLAYO',
                'id_departamento' => '13',
            ],
            [
                'nombre' => 'FERRENAFE',
                'id_departamento' => '13',
            ],
            [
                'nombre' => 'LAMBAYEQUE',
                'id_departamento' => '13',
            ],
            [
                'nombre' => 'LIMA',
                'id_departamento' => '14',
            ],
            [
                'nombre' => 'CAJATAMBO',
                'id_departamento' => '14',
            ],
            [
                'nombre' => 'CANTA',
                'id_departamento' => '14',
            ],
            [
                'nombre' => 'CANETE',
                'id_departamento' => '14',
            ],
            [
                'nombre' => 'HUAURA',
                'id_departamento' => '14',
            ],
            [
                'nombre' => 'HUAROCHIRI',
                'id_departamento' => '14',
            ],
            [
                'nombre' => 'YAUYOS',
                'id_departamento' => '14',
            ],
            [
                'nombre' => 'HUARAL',
                'id_departamento' => '14',
            ],
            [
                'nombre' => 'BARRANCA',
                'id_departamento' => '14',
            ],
            [
                'nombre' => 'OYON',
                'id_departamento' => '14',
            ],
            [
                'nombre' => 'MAYNAS',
                'id_departamento' => '15',
            ],
            [
                'nombre' => 'ALTO AMAZONAS',
                'id_departamento' => '15',
            ],
            [
                'nombre' => 'LORETO',
                'id_departamento' => '15',
            ],
            [
                'nombre' => 'REQUENA',
                'id_departamento' => '15',
            ],
            [
                'nombre' => 'UCAYALI',
                'id_departamento' => '15',
            ],
            [
                'nombre' => 'MARISCAL RAMON CASTILLA',
                'id_departamento' => '15',
            ],
            [
                'nombre' => 'DATEM DEL MARAÑON',
                'id_departamento' => '15',
            ],
            [
                'nombre' => 'TAMBOPATA',
                'id_departamento' => '16',
            ],
            [
                'nombre' => 'MANU',
                'id_departamento' => '16',
            ],
            [
                'nombre' => 'TAHUAMANU',
                'id_departamento' => '16',
            ],
            [
                'nombre' => 'MARISCAL NIETO',
                'id_departamento' => '17',
            ],
            [
                'nombre' => 'GENERAL SANCHEZ CERRO',
                'id_departamento' => '17',
            ],
            [
                'nombre' => 'ILO',
                'id_departamento' => '17',
            ],
            [
                'nombre' => 'PASCO',
                'id_departamento' => '18',
            ],
            [
                'nombre' => 'DANIEL ALCIDES CARRION',
                'id_departamento' => '18',
            ],
            [
                'nombre' => 'OXAPAMPA',
                'id_departamento' => '18',
            ],
            [
                'nombre' => 'PIURA',
                'id_departamento' => '19',
            ],
            [
                'nombre' => 'AYABACA',
                'id_departamento' => '19',
            ],
            [
                'nombre' => 'HUANCABAMBA',
                'id_departamento' => '19',
            ],
            [
                'nombre' => 'MORROPON',
                'id_departamento' => '19',
            ],
            [
                'nombre' => 'PAITA',
                'id_departamento' => '19',
            ],
            [
                'nombre' => 'SULLANA',
                'id_departamento' => '19',
            ],
            [
                'nombre' => 'TALARA',
                'id_departamento' => '19',
            ],
            [
                'nombre' => 'SECHURA',
                'id_departamento' => '19',
            ],
            [
                'nombre' => 'PUNO',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'AZANGARO',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'CARABAYA',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'CHUCUITO',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'HUANCANE',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'LAMPA',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'MELGAR',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'SANDIA',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'SAN ROMAN',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'YUNGUYO',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'SAN ANTONIO DE PUTINA',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'EL COLLAO',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'MOHO',
                'id_departamento' => '20',
            ],
            [
                'nombre' => 'MOYOBAMBA',
                'id_departamento' => '21',
            ],
            [
                'nombre' => 'HUALLAGA',
                'id_departamento' => '21',
            ],
            [
                'nombre' => 'LAMAS',
                'id_departamento' => '21',
            ],
            [
                'nombre' => 'MARISCAL CACERES',
                'id_departamento' => '21',
            ],
            [
                'nombre' => 'RIOJA',
                'id_departamento' => '21',
            ],
            [
                'nombre' => 'SAN MARTIN',
                'id_departamento' => '21',
            ],
            [
                'nombre' => 'BELLAVISTA',
                'id_departamento' => '21',
            ],
            [
                'nombre' => 'TOCACHE',
                'id_departamento' => '21',
            ],
            [
                'nombre' => 'PICOTA',
                'id_departamento' => '21',
            ],
            [
                'nombre' => 'EL DORADO',
                'id_departamento' => '21',
            ],
            [
                'nombre' => 'TACNA',
                'id_departamento' => '22',
            ],
            [
                'nombre' => 'TARATA',
                'id_departamento' => '22',
            ],
            [
                'nombre' => 'JORGE BASADRE',
                'id_departamento' => '22',
            ],
            [
                'nombre' => 'CANDARAVE',
                'id_departamento' => '22',
            ],
            [
                'nombre' => 'TUMBES',
                'id_departamento' => '23',
            ],
            [
                'nombre' => 'CONTRALMIRANTE VILLAR',
                'id_departamento' => '23',
            ],
            [
                'nombre' => 'ZARUMILLA',
                'id_departamento' => '23',
            ],
            [
                'nombre' => 'CALLAO',
                'id_departamento' => '24',
            ],
            [
                'nombre' => 'CORONEL PORTILLO',
                'id_departamento' => '25',
            ],
            [
                'nombre' => 'PADRE ABAD',
                'id_departamento' => '25',
            ],
            [
                'nombre' => 'ATALAYA',
                'id_departamento' => '25',
            ],
            [
                'nombre' => 'PURUS',
                'id_departamento' => '25',
            ],
        ];

        DB::table('provincias')->insert($data);
    }
}
