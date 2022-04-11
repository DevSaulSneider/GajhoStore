<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProvinceSeeder extends Seeder
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
                'name' => 'CHACHAPOYAS',
                'department_id' => '01',
            ],
            [
                'name' => 'BAGUA',
                'department_id' => '01',
            ],
            [
                'name' => 'BONGARA',
                'department_id' => '01',
            ],
            [
                'name' => 'LUYA',
                'department_id' => '01',
            ],
            [
                'name' => 'RODRIGUEZ DE MENDOZA',
                'department_id' => '01',
            ],
            [
                'name' => 'CONDORCANQUI',
                'department_id' => '01',
            ],
            [
                'name' => 'UTCUBAMBA',
                'department_id' => '01',
            ],
            [
                'name' => 'HUARAZ',
                'department_id' => '02',
            ],
            [
                'name' => 'AIJA',
                'department_id' => '02',
            ],
            [
                'name' => 'BOLOGNESI',
                'department_id' => '02',
            ],
            [
                'name' => 'CARHUAZ',
                'department_id' => '02',
            ],
            [
                'name' => 'CASMA',
                'department_id' => '02',
            ],
            [
                'name' => 'CORONGO',
                'department_id' => '02',
            ],
            [
                'name' => 'HUAYLAS',
                'department_id' => '02',
            ],
            [
                'name' => 'HUARI',
                'department_id' => '02',
            ],
            [
                'name' => 'MARISCAL LUZURIAGA',
                'department_id' => '02',
            ],
            [
                'name' => 'PALLASCA',
                'department_id' => '02',
            ],
            [
                'name' => 'POMABAMBA',
                'department_id' => '02',
            ],
            [
                'name' => 'RECUAY',
                'department_id' => '02',
            ],
            [
                'name' => 'SANTA',
                'department_id' => '02',
            ],
            [
                'name' => 'SIHUAS',
                'department_id' => '02',
            ],
            [
                'name' => 'YUNGAY',
                'department_id' => '02',
            ],
            [
                'name' => 'ANTONIO RAIMONDI',
                'department_id' => '02',
            ],
            [
                'name' => 'CARLOS FERMIN FITZCARRALD',
                'department_id' => '02',
            ],
            [
                'name' => 'ASUNCION',
                'department_id' => '02',
            ],
            [
                'name' => 'HUARMEY',
                'department_id' => '02',
            ],
            [
                'name' => 'OCROS',
                'department_id' => '02',
            ],
            [
                'name' => 'ABANCAY',
                'department_id' => '03',
            ],
            [
                'name' => 'AYMARAES',
                'department_id' => '03',
            ],
            [
                'name' => 'ANDAHUAYLAS',
                'department_id' => '03',
            ],
            [
                'name' => 'ANTABAMBA',
                'department_id' => '03',
            ],
            [
                'name' => 'COTABAMBAS',
                'department_id' => '03',
            ],
            [
                'name' => 'GRAU',
                'department_id' => '03',
            ],
            [
                'name' => 'CHINCHEROS',
                'department_id' => '03',
            ],
            [
                'name' => 'AREQUIPA',
                'department_id' => '04',
            ],
            [
                'name' => 'CAYLLOMA',
                'department_id' => '04',
            ],
            [
                'name' => 'CAMANA',
                'department_id' => '04',
            ],
            [
                'name' => 'CARAVELI',
                'department_id' => '04',
            ],
            [
                'name' => 'CASTILLA',
                'department_id' => '04',
            ],
            [
                'name' => 'CONDESUYOS',
                'department_id' => '04',
            ],
            [
                'name' => 'ISLAY',
                'department_id' => '04',
            ],
            [
                'name' => 'LA UNION',
                'department_id' => '04',
            ],
            [
                'name' => 'HUAMANGA',
                'department_id' => '05',
            ],
            [
                'name' => 'CANGALLO',
                'department_id' => '05',
            ],
            [
                'name' => 'HUANTA',
                'department_id' => '05',
            ],
            [
                'name' => 'LA MAR',
                'department_id' => '05',
            ],
            [
                'name' => 'LUCANAS',
                'department_id' => '05',
            ],
            [
                'name' => 'PARINACOCHAS',
                'department_id' => '05',
            ],
            [
                'name' => 'VICTOR FAJARDO',
                'department_id' => '05',
            ],
            [
                'name' => 'HUANCA SANCOS',
                'department_id' => '05',
            ],
            [
                'name' => 'VILCAS HUAMAN',
                'department_id' => '05',
            ],
            [
                'name' => 'PAUCAR DEL SARA SARA',
                'department_id' => '05',
            ],
            [
                'name' => 'SUCRE',
                'department_id' => '05',
            ],
            [
                'name' => 'CAJAMARCA',
                'department_id' => '06',
            ],
            [
                'name' => 'CAJABAMBA',
                'department_id' => '06',
            ],
            [
                'name' => 'CELENDIN',
                'department_id' => '06',
            ],
            [
                'name' => 'CONTUMAZA',
                'department_id' => '06',
            ],
            [
                'name' => 'CUTERVO',
                'department_id' => '06',
            ],
            [
                'name' => 'CHOTA',
                'department_id' => '06',
            ],
            [
                'name' => 'HUALGAYOC',
                'department_id' => '06',
            ],
            [
                'name' => 'JAEN',
                'department_id' => '06',
            ],
            [
                'name' => 'SANTA CRUZ',
                'department_id' => '06',
            ],
            [
                'name' => 'SAN MIGUEL',
                'department_id' => '06',
            ],
            [
                'name' => 'SAN IGNACIO',
                'department_id' => '06',
            ],
            [
                'name' => 'SAN MARCOS',
                'department_id' => '06',
            ],
            [
                'name' => 'SAN PABLO',
                'department_id' => '06',
            ],
            [
                'name' => 'CUSCO',
                'department_id' => '07',
            ],
            [
                'name' => 'ACOMAYO',
                'department_id' => '07',
            ],
            [
                'name' => 'ANTA',
                'department_id' => '07',
            ],
            [
                'name' => 'CALCA',
                'department_id' => '07',
            ],
            [
                'name' => 'CANAS',
                'department_id' => '07',
            ],
            [
                'name' => 'CANCHIS',
                'department_id' => '07',
            ],
            [
                'name' => 'CHUMBIVILCAS',
                'department_id' => '07',
            ],
            [
                'name' => 'ESPINAR',
                'department_id' => '07',
            ],
            [
                'name' => 'LA CONVENCION',
                'department_id' => '07',
            ],
            [
                'name' => 'PARURO',
                'department_id' => '07',
            ],
            [
                'name' => 'PAUCARTAMBO',
                'department_id' => '07',
            ],
            [
                'name' => 'QUISPICANCHIS',
                'department_id' => '07',
            ],
            [
                'name' => 'URUBAMBA',
                'department_id' => '07',
            ],
            [
                'name' => 'HUANCAVELICA',
                'department_id' => '08',
            ],
            [
                'name' => 'ACOBAMBA',
                'department_id' => '08',
            ],
            [
                'name' => 'ANGARAES',
                'department_id' => '08',
            ],
            [
                'name' => 'CASTROVIRREYNA',
                'department_id' => '08',
            ],
            [
                'name' => 'TAYACAJA',
                'department_id' => '08',
            ],
            [
                'name' => 'HUAYTARA',
                'department_id' => '08',
            ],
            [
                'name' => 'CHURCAMPA',
                'department_id' => '08',
            ],
            [
                'name' => 'HUANUCO',
                'department_id' => '09',
            ],
            [
                'name' => 'AMBO',
                'department_id' => '09',
            ],
            [
                'name' => 'DOS DE MAYO',
                'department_id' => '09',
            ],
            [
                'name' => 'HUAMALIES',
                'department_id' => '09',
            ],
            [
                'name' => 'MARANON',
                'department_id' => '09',
            ],
            [
                'name' => 'LEONCIO PRADO',
                'department_id' => '09',
            ],
            [
                'name' => 'PACHITEA',
                'department_id' => '09',
            ],
            [
                'name' => 'PUERTO INCA',
                'department_id' => '09',
            ],
            [
                'name' => 'HUACAYBAMBA',
                'department_id' => '09',
            ],
            [
                'name' => 'LAURICOCHA',
                'department_id' => '09',
            ],
            [
                'name' => 'YAROWILCA',
                'department_id' => '09',
            ],
            [
                'name' => 'ICA',
                'department_id' => '10',
            ],
            [
                'name' => 'CHINCHA',
                'department_id' => '10',
            ],
            [
                'name' => 'NAZCA',
                'department_id' => '10',
            ],
            [
                'name' => 'PISCO',
                'department_id' => '10',
            ],
            [
                'name' => 'PALPA',
                'department_id' => '10',
            ],
            [
                'name' => 'HUANCAYO',
                'department_id' => '11',
            ],
            [
                'name' => 'CONCEPCION',
                'department_id' => '11',
            ],
            [
                'name' => 'JAUJA',
                'department_id' => '11',
            ],
            [
                'name' => 'JUNIN',
                'department_id' => '11',
            ],
            [
                'name' => 'TARMA',
                'department_id' => '11',
            ],
            [
                'name' => 'YAULI',
                'department_id' => '11',
            ],
            [
                'name' => 'SATIPO',
                'department_id' => '11',
            ],
            [
                'name' => 'CHANCHAMAYO',
                'department_id' => '11',
            ],
            [
                'name' => 'CHUPACA',
                'department_id' => '11',
            ],
            [
                'name' => 'TRUJILLO',
                'department_id' => '12',
            ],
            [
                'name' => 'BOLIVAR',
                'department_id' => '12',
            ],
            [
                'name' => 'SANCHEZ CARRION',
                'department_id' => '12',
            ],
            [
                'name' => 'OTUZCO',
                'department_id' => '12',
            ],
            [
                'name' => 'PACASMAYO',
                'department_id' => '12',
            ],
            [
                'name' => 'PATAZ',
                'department_id' => '12',
            ],
            [
                'name' => 'SANTIAGO DE CHUCO',
                'department_id' => '12',
            ],
            [
                'name' => 'ASCOPE',
                'department_id' => '12',
            ],
            [
                'name' => 'CHEPEN',
                'department_id' => '12',
            ],
            [
                'name' => 'JULCAN',
                'department_id' => '12',
            ],
            [
                'name' => 'GRAN CHIMU',
                'department_id' => '12',
            ],
            [
                'name' => 'VIRU',
                'department_id' => '12',
            ],
            [
                'name' => 'CHICLAYO',
                'department_id' => '13',
            ],
            [
                'name' => 'FERRENAFE',
                'department_id' => '13',
            ],
            [
                'name' => 'LAMBAYEQUE',
                'department_id' => '13',
            ],
            [
                'name' => 'LIMA',
                'department_id' => '14',
            ],
            [
                'name' => 'CAJATAMBO',
                'department_id' => '14',
            ],
            [
                'name' => 'CANTA',
                'department_id' => '14',
            ],
            [
                'name' => 'CANETE',
                'department_id' => '14',
            ],
            [
                'name' => 'HUAURA',
                'department_id' => '14',
            ],
            [
                'name' => 'HUAROCHIRI',
                'department_id' => '14',
            ],
            [
                'name' => 'YAUYOS',
                'department_id' => '14',
            ],
            [
                'name' => 'HUARAL',
                'department_id' => '14',
            ],
            [
                'name' => 'BARRANCA',
                'department_id' => '14',
            ],
            [
                'name' => 'OYON',
                'department_id' => '14',
            ],
            [
                'name' => 'MAYNAS',
                'department_id' => '15',
            ],
            [
                'name' => 'ALTO AMAZONAS',
                'department_id' => '15',
            ],
            [
                'name' => 'LORETO',
                'department_id' => '15',
            ],
            [
                'name' => 'REQUENA',
                'department_id' => '15',
            ],
            [
                'name' => 'UCAYALI',
                'department_id' => '15',
            ],
            [
                'name' => 'MARISCAL RAMON CASTILLA',
                'department_id' => '15',
            ],
            [
                'name' => 'DATEM DEL MARAÑON',
                'department_id' => '15',
            ],
            [
                'name' => 'TAMBOPATA',
                'department_id' => '16',
            ],
            [
                'name' => 'MANU',
                'department_id' => '16',
            ],
            [
                'name' => 'TAHUAMANU',
                'department_id' => '16',
            ],
            [
                'name' => 'MARISCAL NIETO',
                'department_id' => '17',
            ],
            [
                'name' => 'GENERAL SANCHEZ CERRO',
                'department_id' => '17',
            ],
            [
                'name' => 'ILO',
                'department_id' => '17',
            ],
            [
                'name' => 'PASCO',
                'department_id' => '18',
            ],
            [
                'name' => 'DANIEL ALCIDES CARRION',
                'department_id' => '18',
            ],
            [
                'name' => 'OXAPAMPA',
                'department_id' => '18',
            ],
            [
                'name' => 'PIURA',
                'department_id' => '19',
            ],
            [
                'name' => 'AYABACA',
                'department_id' => '19',
            ],
            [
                'name' => 'HUANCABAMBA',
                'department_id' => '19',
            ],
            [
                'name' => 'MORROPON',
                'department_id' => '19',
            ],
            [
                'name' => 'PAITA',
                'department_id' => '19',
            ],
            [
                'name' => 'SULLANA',
                'department_id' => '19',
            ],
            [
                'name' => 'TALARA',
                'department_id' => '19',
            ],
            [
                'name' => 'SECHURA',
                'department_id' => '19',
            ],
            [
                'name' => 'PUNO',
                'department_id' => '20',
            ],
            [
                'name' => 'AZANGARO',
                'department_id' => '20',
            ],
            [
                'name' => 'CARABAYA',
                'department_id' => '20',
            ],
            [
                'name' => 'CHUCUITO',
                'department_id' => '20',
            ],
            [
                'name' => 'HUANCANE',
                'department_id' => '20',
            ],
            [
                'name' => 'LAMPA',
                'department_id' => '20',
            ],
            [
                'name' => 'MELGAR',
                'department_id' => '20',
            ],
            [
                'name' => 'SANDIA',
                'department_id' => '20',
            ],
            [
                'name' => 'SAN ROMAN',
                'department_id' => '20',
            ],
            [
                'name' => 'YUNGUYO',
                'department_id' => '20',
            ],
            [
                'name' => 'SAN ANTONIO DE PUTINA',
                'department_id' => '20',
            ],
            [
                'name' => 'EL COLLAO',
                'department_id' => '20',
            ],
            [
                'name' => 'MOHO',
                'department_id' => '20',
            ],
            [
                'name' => 'MOYOBAMBA',
                'department_id' => '21',
            ],
            [
                'name' => 'HUALLAGA',
                'department_id' => '21',
            ],
            [
                'name' => 'LAMAS',
                'department_id' => '21',
            ],
            [
                'name' => 'MARISCAL CACERES',
                'department_id' => '21',
            ],
            [
                'name' => 'RIOJA',
                'department_id' => '21',
            ],
            [
                'name' => 'SAN MARTIN',
                'department_id' => '21',
            ],
            [
                'name' => 'BELLAVISTA',
                'department_id' => '21',
            ],
            [
                'name' => 'TOCACHE',
                'department_id' => '21',
            ],
            [
                'name' => 'PICOTA',
                'department_id' => '21',
            ],
            [
                'name' => 'EL DORADO',
                'department_id' => '21',
            ],
            [
                'name' => 'TACNA',
                'department_id' => '22',
            ],
            [
                'name' => 'TARATA',
                'department_id' => '22',
            ],
            [
                'name' => 'JORGE BASADRE',
                'department_id' => '22',
            ],
            [
                'name' => 'CANDARAVE',
                'department_id' => '22',
            ],
            [
                'name' => 'TUMBES',
                'department_id' => '23',
            ],
            [
                'name' => 'CONTRALMIRANTE VILLAR',
                'department_id' => '23',
            ],
            [
                'name' => 'ZARUMILLA',
                'department_id' => '23',
            ],
            [
                'name' => 'CALLAO',
                'department_id' => '24',
            ],
            [
                'name' => 'CORONEL PORTILLO',
                'department_id' => '25',
            ],
            [
                'name' => 'PADRE ABAD',
                'department_id' => '25',
            ],
            [
                'name' => 'ATALAYA',
                'department_id' => '25',
            ],
            [
                'name' => 'PURUS',
                'department_id' => '25',
            ],
        ];

        DB::table('provinces')->insert($data);
    }
}
