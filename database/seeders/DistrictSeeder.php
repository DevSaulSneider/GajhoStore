<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DistrictSeeder extends Seeder
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
                'province_id' => '01',
            ],
            [
                'name' => 'ASUNCION',
                'province_id' => '01',
            ],
            [
                'name' => 'BALSAS',
                'province_id' => '01',
            ],
            [
                'name' => 'CHETO',
                'province_id' => '01',
            ],
            [
                'name' => 'CHILIQUIN',
                'province_id' => '01',
            ],
            [
                'name' => 'CHUQUIBAMBA',
                'province_id' => '01',
            ],
            [
                'name' => 'GRANADA',
                'province_id' => '01',
            ],
            [
                'name' => 'HUANCAS',
                'province_id' => '01',
            ],
            [
                'name' => 'LA JALCA',
                'province_id' => '01',
            ],
            [
                'name' => 'LEIMEBAMBA',
                'province_id' => '01',
            ],
            [
                'name' => 'LEVANTO',
                'province_id' => '01',
            ],
            [
                'name' => 'MAGDALENA',
                'province_id' => '01',
            ],
            [
                'name' => 'MARISCAL CASTILLA',
                'province_id' => '01',
            ],
            [
                'name' => 'MOLINOPAMPA',
                'province_id' => '01',
            ],
            [
                'name' => 'MONTEVIDEO',
                'province_id' => '01',
            ],
            [
                'name' => 'OLLEROS',
                'province_id' => '01',
            ],
            [
                'name' => 'QUINJALCA',
                'province_id' => '01',
            ],
            [
                'name' => 'SAN FCO DE DAGUAS',
                'province_id' => '01',
            ],
            [
                'name' => 'SAN ISIDRO DE MAINO',
                'province_id' => '01',
            ],
            [
                'name' => 'SOLOCO',
                'province_id' => '01',
            ],
            [
                'name' => 'SONCHE',
                'province_id' => '01',
            ],
            [
                'name' => 'LA PECA',
                'province_id' => '02',
            ],
            [
                'name' => 'ARAMANGO',
                'province_id' => '02',
            ],
            [
                'name' => 'COPALLIN',
                'province_id' => '02',
            ],
            [
                'name' => 'EL PARCO',
                'province_id' => '02',
            ],
            [
                'name' => 'BAGUA',
                'province_id' => '02',
            ],
            [
                'name' => 'IMAZA',
                'province_id' => '02',
            ],
            [
                'name' => 'JUMBILLA',
                'province_id' => '03',
            ],
            [
                'name' => 'COROSHA',
                'province_id' => '03',
            ],
            [
                'name' => 'CUISPES',
                'province_id' => '03',
            ],
            [
                'name' => 'CHISQUILLA',
                'province_id' => '03',
            ],
            [
                'name' => 'CHURUJA',
                'province_id' => '03',
            ],
            [
                'name' => 'FLORIDA',
                'province_id' => '03',
            ],
            [
                'name' => 'RECTA',
                'province_id' => '03',
            ],
            [
                'name' => 'SAN CARLOS',
                'province_id' => '03',
            ],
            [
                'name' => 'SHIPASBAMBA',
                'province_id' => '03',
            ],
            [
                'name' => 'VALERA',
                'province_id' => '03',
            ],
            [
                'name' => 'YAMBRASBAMBA',
                'province_id' => '03',
            ],
            [
                'name' => 'JAZAN',
                'province_id' => '03',
            ],
            [
                'name' => 'LAMUD',
                'province_id' => '04',
            ],
            [
                'name' => 'CAMPORREDONDO',
                'province_id' => '04',
            ],
            [
                'name' => 'COCABAMBA',
                'province_id' => '04',
            ],
            [
                'name' => 'COLCAMAR',
                'province_id' => '04',
            ],
            [
                'name' => 'CONILA',
                'province_id' => '04',
            ],
            [
                'name' => 'INGUILPATA',
                'province_id' => '04',
            ],
            [
                'name' => 'LONGUITA',
                'province_id' => '04',
            ],
            [
                'name' => 'LONYA CHICO',
                'province_id' => '04',
            ],
            [
                'name' => 'LUYA',
                'province_id' => '04',
            ],
            [
                'name' => 'LUYA VIEJO',
                'province_id' => '04',
            ],
            [
                'name' => 'MARIA',
                'province_id' => '04',
            ],
            [
                'name' => 'OCALLI',
                'province_id' => '04',
            ],
            [
                'name' => 'OCUMAL',
                'province_id' => '04',
            ],
            [
                'name' => 'PISUQUIA',
                'province_id' => '04',
            ],
            [
                'name' => 'SAN CRISTOBAL',
                'province_id' => '04',
            ],
            [
                'name' => 'SAN FRANCISCO DE YESO',
                'province_id' => '04',
            ],
            [
                'name' => 'SAN JERONIMO',
                'province_id' => '04',
            ],
            [
                'name' => 'SAN JUAN DE LOPECANCHA',
                'province_id' => '04',
            ],
            [
                'name' => 'SANTA CATALINA',
                'province_id' => '04',
            ],
            [
                'name' => 'SANTO TOMAS',
                'province_id' => '04',
            ],
            [
                'name' => 'TINGO',
                'province_id' => '04',
            ],
            [
                'name' => 'TRITA',
                'province_id' => '04',
            ],
            [
                'name' => 'PROVIDENCIA',
                'province_id' => '04',
            ],
            [
                'name' => 'SAN NICOLAS',
                'province_id' => '05',
            ],
            [
                'name' => 'COCHAMAL',
                'province_id' => '05',
            ],
            [
                'name' => 'CHIRIMOTO',
                'province_id' => '05',
            ],
            [
                'name' => 'HUAMBO',
                'province_id' => '05',
            ],
            [
                'name' => 'LIMABAMBA',
                'province_id' => '05',
            ],
            [
                'name' => 'LONGAR',
                'province_id' => '05',
            ],
            [
                'name' => 'MILPUC',
                'province_id' => '05',
            ],
            [
                'name' => 'MCAL BENAVIDES',
                'province_id' => '05',
            ],
            [
                'name' => 'OMIA',
                'province_id' => '05',
            ],
            [
                'name' => 'SANTA ROSA',
                'province_id' => '05',
            ],
            [
                'name' => 'TOTORA',
                'province_id' => '05',
            ],
            [
                'name' => 'VISTA ALEGRE',
                'province_id' => '05',
            ],
            [
                'name' => 'NIEVA',
                'province_id' => '06',
            ],
            [
                'name' => 'RIO SANTIAGO',
                'province_id' => '06',
            ],
            [
                'name' => 'EL CENEPA',
                'province_id' => '06',
            ],
            [
                'name' => 'BAGUA GRANDE',
                'province_id' => '07',
            ],
            [
                'name' => 'CAJARURO',
                'province_id' => '07',
            ],
            [
                'name' => 'CUMBA',
                'province_id' => '07',
            ],
            [
                'name' => 'EL MILAGRO',
                'province_id' => '07',
            ],
            [
                'name' => 'JAMALCA',
                'province_id' => '07',
            ],
            [
                'name' => 'LONYA GRANDE',
                'province_id' => '07',
            ],
            [
                'name' => 'YAMON',
                'province_id' => '07',
            ],
            [
                'name' => 'HUARAZ',
                'province_id' => '08',
            ],
            [
                'name' => 'INDEPENDENCIA',
                'province_id' => '08',
            ],
            [
                'name' => 'COCHABAMBA',
                'province_id' => '08',
            ],
            [
                'name' => 'COLCABAMBA',
                'province_id' => '08',
            ],
            [
                'name' => 'HUANCHAY',
                'province_id' => '08',
            ],
            [
                'name' => 'JANGAS',
                'province_id' => '08',
            ],
            [
                'name' => 'LA LIBERTAD',
                'province_id' => '08',
            ],
            [
                'name' => 'OLLEROS',
                'province_id' => '08',
            ],
            [
                'name' => 'PAMPAS',
                'province_id' => '08',
            ],
            [
                'name' => 'PARIACOTO',
                'province_id' => '08',
            ],
            [
                'name' => 'PIRA',
                'province_id' => '08',
            ],
            [
                'name' => 'TARICA',
                'province_id' => '08',
            ],
            [
                'name' => 'AIJA',
                'province_id' => '09',
            ],
            [
                'name' => 'CORIS',
                'province_id' => '09',
            ],
            [
                'name' => 'HUACLLAN',
                'province_id' => '09',
            ],
            [
                'name' => 'LA MERCED',
                'province_id' => '09',
            ],
            [
                'name' => 'SUCCHA',
                'province_id' => '09',
            ],
            [
                'name' => 'CHIQUIAN',
                'province_id' => '10',
            ],
            [
                'name' => 'A PARDO LEZAMETA',
                'province_id' => '10',
            ],
            [
                'name' => 'AQUIA',
                'province_id' => '10',
            ],
            [
                'name' => 'CAJACAY',
                'province_id' => '10',
            ],
            [
                'name' => 'HUAYLLACAYAN',
                'province_id' => '10',
            ],
            [
                'name' => 'HUASTA',
                'province_id' => '10',
            ],
            [
                'name' => 'MANGAS',
                'province_id' => '10',
            ],
            [
                'name' => 'PACLLON',
                'province_id' => '10',
            ],
            [
                'name' => 'SAN MIGUEL DE CORPANQUI',
                'province_id' => '10',
            ],
            [
                'name' => 'TICLLOS',
                'province_id' => '10',
            ],
            [
                'name' => 'ANTONIO RAIMONDI',
                'province_id' => '10',
            ],
            [
                'name' => 'CANIS',
                'province_id' => '10',
            ],
            [
                'name' => 'COLQUIOC',
                'province_id' => '10',
            ],
            [
                'name' => 'LA PRIMAVERA',
                'province_id' => '10',
            ],
            [
                'name' => 'HUALLANCA',
                'province_id' => '10',
            ],
            [
                'name' => 'CARHUAZ',
                'province_id' => '11',
            ],
            [
                'name' => 'ACOPAMPA',
                'province_id' => '11',
            ],
            [
                'name' => 'AMASHCA',
                'province_id' => '11',
            ],
            [
                'name' => 'ANTA',
                'province_id' => '11',
            ],
            [
                'name' => 'ATAQUERO',
                'province_id' => '11',
            ],
            [
                'name' => 'MARCARA',
                'province_id' => '11',
            ],
            [
                'name' => 'PARIAHUANCA',
                'province_id' => '11',
            ],
            [
                'name' => 'SAN MIGUEL DE ACO',
                'province_id' => '11',
            ],
            [
                'name' => 'SHILLA',
                'province_id' => '11',
            ],
            [
                'name' => 'TINCO',
                'province_id' => '11',
            ],
            [
                'name' => 'YUNGAR',
                'province_id' => '11',
            ],
            [
                'name' => 'CASMA',
                'province_id' => '12',
            ],
            [
                'name' => 'BUENA VISTA ALTA',
                'province_id' => '12',
            ],
            [
                'name' => 'COMANDANTE NOEL',
                'province_id' => '12',
            ],
            [
                'name' => 'YAUTAN',
                'province_id' => '12',
            ],
            [
                'name' => 'CORONGO',
                'province_id' => '13',
            ],
            [
                'name' => 'ACO',
                'province_id' => '13',
            ],
            [
                'name' => 'BAMBAS',
                'province_id' => '13',
            ],
            [
                'name' => 'CUSCA',
                'province_id' => '13',
            ],
            [
                'name' => 'LA PAMPA',
                'province_id' => '13',
            ],
            [
                'name' => 'YANAC',
                'province_id' => '13',
            ],
            [
                'name' => 'YUPAN',
                'province_id' => '13',
            ],
            [
                'name' => 'CARAZ',
                'province_id' => '14',
            ],
            [
                'name' => 'HUALLANCA',
                'province_id' => '14',
            ],
            [
                'name' => 'HUATA',
                'province_id' => '14',
            ],
            [
                'name' => 'HUAYLAS',
                'province_id' => '14',
            ],
            [
                'name' => 'MATO',
                'province_id' => '14',
            ],
            [
                'name' => 'PAMPAROMAS',
                'province_id' => '14',
            ],
            [
                'name' => 'PUEBLO LIBRE',
                'province_id' => '14',
            ],
            [
                'name' => 'SANTA CRUZ',
                'province_id' => '14',
            ],
            [
                'name' => 'YURACMARCA',
                'province_id' => '14',
            ],
            [
                'name' => 'SANTO TORIBIO',
                'province_id' => '14',
            ],
            [
                'name' => 'HUARI',
                'province_id' => '15',
            ],
            [
                'name' => 'CAJAY',
                'province_id' => '15',
            ],
            [
                'name' => 'CHAVIN DE HUANTAR',
                'province_id' => '15',
            ],
            [
                'name' => 'HUACACHI',
                'province_id' => '15',
            ],
            [
                'name' => 'HUACHIS',
                'province_id' => '15',
            ],
            [
                'name' => 'HUACCHIS',
                'province_id' => '15',
            ],
            [
                'name' => 'HUANTAR',
                'province_id' => '15',
            ],
            [
                'name' => 'MASIN',
                'province_id' => '15',
            ],
            [
                'name' => 'PAUCAS',
                'province_id' => '15',
            ],
            [
                'name' => 'PONTO',
                'province_id' => '15',
            ],
            [
                'name' => 'RAHUAPAMPA',
                'province_id' => '15',
            ],
            [
                'name' => 'RAPAYAN',
                'province_id' => '15',
            ],
            [
                'name' => 'SAN MARCOS',
                'province_id' => '15',
            ],
            [
                'name' => 'SAN PEDRO DE CHANA',
                'province_id' => '15',
            ],
            [
                'name' => 'UCO',
                'province_id' => '15',
            ],
            [
                'name' => 'ANRA',
                'province_id' => '15',
            ],
            [
                'name' => 'PISCOBAMBA',
                'province_id' => '16',
            ],
            [
                'name' => 'CASCA',
                'province_id' => '16',
            ],
            [
                'name' => 'LUCMA',
                'province_id' => '16',
            ],
            [
                'name' => 'FIDEL OLIVAS ESCUDERO',
                'province_id' => '16',
            ],
            [
                'name' => 'LLAMA',
                'province_id' => '16',
            ],
            [
                'name' => 'LLUMPA',
                'province_id' => '16',
            ],
            [
                'name' => 'MUSGA',
                'province_id' => '16',
            ],
            [
                'name' => 'ELEAZAR GUZMAN BARRON',
                'province_id' => '16',
            ],
            [
                'name' => 'CABANA',
                'province_id' => '17',
            ],
            [
                'name' => 'BOLOGNESI',
                'province_id' => '17',
            ],
            [
                'name' => 'CONCHUCOS',
                'province_id' => '17',
            ],
            [
                'name' => 'HUACASCHUQUE',
                'province_id' => '17',
            ],
            [
                'name' => 'HUANDOVAL',
                'province_id' => '17',
            ],
            [
                'name' => 'LACABAMBA',
                'province_id' => '17',
            ],
            [
                'name' => 'LLAPO',
                'province_id' => '17',
            ],
            [
                'name' => 'PALLASCA',
                'province_id' => '17',
            ],
            [
                'name' => 'PAMPAS',
                'province_id' => '17',
            ],
            [
                'name' => 'SANTA ROSA',
                'province_id' => '17',
            ],
            [
                'name' => 'TAUCA',
                'province_id' => '17',
            ],
            [
                'name' => 'POMABAMBA',
                'province_id' => '18',
            ],
            [
                'name' => 'HUAYLLAN',
                'province_id' => '18',
            ],
            [
                'name' => 'PAROBAMBA',
                'province_id' => '18',
            ],
            [
                'name' => 'QUINUABAMBA',
                'province_id' => '18',
            ],
            [
                'name' => 'RECUAY',
                'province_id' => '19',
            ],
            [
                'name' => 'COTAPARACO',
                'province_id' => '19',
            ],
            [
                'name' => 'HUAYLLAPAMPA',
                'province_id' => '19',
            ],
            [
                'name' => 'MARCA',
                'province_id' => '19',
            ],
            [
                'name' => 'PAMPAS CHICO',
                'province_id' => '19',
            ],
            [
                'name' => 'PARARIN',
                'province_id' => '19',
            ],
            [
                'name' => 'TAPACOCHA',
                'province_id' => '19',
            ],
            [
                'name' => 'TICAPAMPA',
                'province_id' => '19',
            ],
            [
                'name' => 'LLACLLIN',
                'province_id' => '19',
            ],
            [
                'name' => 'CATAC',
                'province_id' => '19',
            ],
            [
                'name' => 'CHIMBOTE',
                'province_id' => '20',
            ],
            [
                'name' => 'CACERES DEL PERU',
                'province_id' => '20',
            ],
            [
                'name' => 'MACATE',
                'province_id' => '20',
            ],
            [
                'name' => 'MORO',
                'province_id' => '20',
            ],
            [
                'name' => 'NEPENA',
                'province_id' => '20',
            ],
            [
                'name' => 'SAMANCO',
                'province_id' => '20',
            ],
            [
                'name' => 'SANTA',
                'province_id' => '20',
            ],
            [
                'name' => 'COISHCO',
                'province_id' => '20',
            ],
            [
                'name' => 'NUEVO CHIMBOTE',
                'province_id' => '20',
            ],
            [
                'name' => 'SIHUAS',
                'province_id' => '21',
            ],
            [
                'name' => 'ALFONSO UGARTE',
                'province_id' => '21',
            ],
            [
                'name' => 'CHINGALPO',
                'province_id' => '21',
            ],
            [
                'name' => 'HUAYLLABAMBA',
                'province_id' => '21',
            ],
            [
                'name' => 'QUICHES',
                'province_id' => '21',
            ],
            [
                'name' => 'SICSIBAMBA',
                'province_id' => '21',
            ],
            [
                'name' => 'ACOBAMBA',
                'province_id' => '21',
            ],
            [
                'name' => 'CASHAPAMPA',
                'province_id' => '21',
            ],
            [
                'name' => 'RAGASH',
                'province_id' => '21',
            ],
            [
                'name' => 'SAN JUAN',
                'province_id' => '21',
            ],
            [
                'name' => 'YUNGAY',
                'province_id' => '22',
            ],
            [
                'name' => 'CASCAPARA',
                'province_id' => '22',
            ],
            [
                'name' => 'MANCOS',
                'province_id' => '22',
            ],
            [
                'name' => 'MATACOTO',
                'province_id' => '22',
            ],
            [
                'name' => 'QUILLO',
                'province_id' => '22',
            ],
            [
                'name' => 'RANRAHIRCA',
                'province_id' => '22',
            ],
            [
                'name' => 'SHUPLUY',
                'province_id' => '22',
            ],
            [
                'name' => 'YANAMA',
                'province_id' => '22',
            ],
            [
                'name' => 'LLAMELLIN',
                'province_id' => '23',
            ],
            [
                'name' => 'ACZO',
                'province_id' => '23',
            ],
            [
                'name' => 'CHACCHO',
                'province_id' => '23',
            ],
            [
                'name' => 'CHINGAS',
                'province_id' => '23',
            ],
            [
                'name' => 'MIRGAS',
                'province_id' => '23',
            ],
            [
                'name' => 'SAN JUAN DE RONTOY',
                'province_id' => '23',
            ],
            [
                'name' => 'SAN LUIS',
                'province_id' => '24',
            ],
            [
                'name' => 'YAUYA',
                'province_id' => '24',
            ],
            [
                'name' => 'SAN NICOLAS',
                'province_id' => '24',
            ],
            [
                'name' => 'CHACAS',
                'province_id' => '25',
            ],
            [
                'name' => 'ACOCHACA',
                'province_id' => '25',
            ],
            [
                'name' => 'HUARMEY',
                'province_id' => '26',
            ],
            [
                'name' => 'COCHAPETI',
                'province_id' => '26',
            ],
            [
                'name' => 'HUAYAN',
                'province_id' => '26',
            ],
            [
                'name' => 'MALVAS',
                'province_id' => '26',
            ],
            [
                'name' => 'CULEBRAS',
                'province_id' => '26',
            ],
            [
                'name' => 'ACAS',
                'province_id' => '27',
            ],
            [
                'name' => 'CAJAMARQUILLA',
                'province_id' => '27',
            ],
            [
                'name' => 'CARHUAPAMPA',
                'province_id' => '27',
            ],
            [
                'name' => 'COCHAS',
                'province_id' => '27',
            ],
            [
                'name' => 'CONGAS',
                'province_id' => '27',
            ],
            [
                'name' => 'LLIPA',
                'province_id' => '27',
            ],
            [
                'name' => 'OCROS',
                'province_id' => '27',
            ],
            [
                'name' => 'SAN CRISTOBAL DE RAJAN',
                'province_id' => '27',
            ],
            [
                'name' => 'SAN PEDRO',
                'province_id' => '27',
            ],
            [
                'name' => 'SANTIAGO DE CHILCAS',
                'province_id' => '27',
            ],
            [
                'name' => 'ABANCAY',
                'province_id' => '28',
            ],
            [
                'name' => 'CIRCA',
                'province_id' => '28',
            ],
            [
                'name' => 'CURAHUASI',
                'province_id' => '28',
            ],
            [
                'name' => 'CHACOCHE',
                'province_id' => '28',
            ],
            [
                'name' => 'HUANIPACA',
                'province_id' => '28',
            ],
            [
                'name' => 'LAMBRAMA',
                'province_id' => '28',
            ],
            [
                'name' => 'PICHIRHUA',
                'province_id' => '28',
            ],
            [
                'name' => 'SAN PEDRO DE CACHORA',
                'province_id' => '28',
            ],
            [
                'name' => 'TAMBURCO',
                'province_id' => '28',
            ],
            [
                'name' => 'CHALHUANCA',
                'province_id' => '29',
            ],
            [
                'name' => 'CAPAYA',
                'province_id' => '29',
            ],
            [
                'name' => 'CARAYBAMBA',
                'province_id' => '29',
            ],
            [
                'name' => 'COLCABAMBA',
                'province_id' => '29',
            ],
            [
                'name' => 'COTARUSE',
                'province_id' => '29',
            ],
            [
                'name' => 'CHAPIMARCA',
                'province_id' => '29',
            ],
            [
                'name' => 'IHUAYLLO',
                'province_id' => '29',
            ],
            [
                'name' => 'LUCRE',
                'province_id' => '29',
            ],
            [
                'name' => 'POCOHUANCA',
                'province_id' => '29',
            ],
            [
                'name' => 'SANAICA',
                'province_id' => '29',
            ],
            [
                'name' => 'SORAYA',
                'province_id' => '29',
            ],
            [
                'name' => 'TAPAIRIHUA',
                'province_id' => '29',
            ],
            [
                'name' => 'TINTAY',
                'province_id' => '29',
            ],
            [
                'name' => 'TORAYA',
                'province_id' => '29',
            ],
            [
                'name' => 'YANACA',
                'province_id' => '29',
            ],
            [
                'name' => 'SAN JUAN DE CHACNA',
                'province_id' => '29',
            ],
            [
                'name' => 'JUSTO APU SAHUARAURA',
                'province_id' => '29',
            ],
            [
                'name' => 'ANDAHUAYLAS',
                'province_id' => '30',
            ],
            [
                'name' => 'ANDARAPA',
                'province_id' => '30',
            ],
            [
                'name' => 'CHIARA',
                'province_id' => '30',
            ],
            [
                'name' => 'HUANCARAMA',
                'province_id' => '30',
            ],
            [
                'name' => 'HUANCARAY',
                'province_id' => '30',
            ],
            [
                'name' => 'KISHUARA',
                'province_id' => '30',
            ],
            [
                'name' => 'PACOBAMBA',
                'province_id' => '30',
            ],
            [
                'name' => 'PAMPACHIRI',
                'province_id' => '30',
            ],
            [
                'name' => 'SAN ANTONIO DE CACHI',
                'province_id' => '30',
            ],
            [
                'name' => 'SAN JERONIMO',
                'province_id' => '30',
            ],
            [
                'name' => 'TALAVERA',
                'province_id' => '30',
            ],
            [
                'name' => 'TURPO',
                'province_id' => '30',
            ],
            [
                'name' => 'PACUCHA',
                'province_id' => '30',
            ],
            [
                'name' => 'POMACOCHA',
                'province_id' => '30',
            ],
            [
                'name' => 'STA MARIA DE CHICMO',
                'province_id' => '30',
            ],
            [
                'name' => 'TUMAY HUARACA',
                'province_id' => '30',
            ],
            [
                'name' => 'HUAYANA',
                'province_id' => '30',
            ],
            [
                'name' => 'SAN MIGUEL DE CHACCRAMPA',
                'province_id' => '30',
            ],
            [
                'name' => 'KAQUIABAMBA',
                'province_id' => '30',
            ],
            [
                'name' => 'ANTABAMBA',
                'province_id' => '31',
            ],
            [
                'name' => 'EL ORO',
                'province_id' => '31',
            ],
            [
                'name' => 'HUAQUIRCA',
                'province_id' => '31',
            ],
            [
                'name' => 'JUAN ESPINOZA MEDRANO',
                'province_id' => '31',
            ],
            [
                'name' => 'OROPESA',
                'province_id' => '31',
            ],
            [
                'name' => 'PACHACONAS',
                'province_id' => '31',
            ],
            [
                'name' => 'SABAINO',
                'province_id' => '31',
            ],
            [
                'name' => 'TAMBOBAMBA',
                'province_id' => '32',
            ],
            [
                'name' => 'COYLLURQUI',
                'province_id' => '32',
            ],
            [
                'name' => 'COTABAMBAS',
                'province_id' => '32',
            ],
            [
                'name' => 'HAQUIRA',
                'province_id' => '32',
            ],
            [
                'name' => 'MARA',
                'province_id' => '32',
            ],
            [
                'name' => 'CHALLHUAHUACHO',
                'province_id' => '32',
            ],
            [
                'name' => 'CHUQUIBAMBILLA',
                'province_id' => '33',
            ],
            [
                'name' => 'CURPAHUASI',
                'province_id' => '33',
            ],
            [
                'name' => 'HUAILLATI',
                'province_id' => '33',
            ],
            [
                'name' => 'MAMARA',
                'province_id' => '33',
            ],
            [
                'name' => 'MARISCAL GAMARRA',
                'province_id' => '33',
            ],
            [
                'name' => 'MICAELA BASTIDAS',
                'province_id' => '33',
            ],
            [
                'name' => 'PROGRESO',
                'province_id' => '33',
            ],
            [
                'name' => 'PATAYPAMPA',
                'province_id' => '33',
            ],
            [
                'name' => 'SAN ANTONIO',
                'province_id' => '33',
            ],
            [
                'name' => 'TURPAY',
                'province_id' => '33',
            ],
            [
                'name' => 'VILCABAMBA',
                'province_id' => '33',
            ],
            [
                'name' => 'VIRUNDO',
                'province_id' => '33',
            ],
            [
                'name' => 'SANTA ROSA',
                'province_id' => '33',
            ],
            [
                'name' => 'CURASCO',
                'province_id' => '33',
            ],
            [
                'name' => 'CHINCHEROS',
                'province_id' => '34',
            ],
            [
                'name' => 'ONGOY',
                'province_id' => '34',
            ],
            [
                'name' => 'OCOBAMBA',
                'province_id' => '34',
            ],
            [
                'name' => 'COCHARCAS',
                'province_id' => '34',
            ],
            [
                'name' => 'ANCO HUALLO',
                'province_id' => '34',
            ],
            [
                'name' => 'HUACCANA',
                'province_id' => '34',
            ],
            [
                'name' => 'URANMARCA',
                'province_id' => '34',
            ],
            [
                'name' => 'RANRACANCHA',
                'province_id' => '34',
            ],
            [
                'name' => 'AREQUIPA',
                'province_id' => '35',
            ],
            [
                'name' => 'CAYMA',
                'province_id' => '35',
            ],
            [
                'name' => 'CERRO COLORADO',
                'province_id' => '35',
            ],
            [
                'name' => 'CHARACATO',
                'province_id' => '35',
            ],
            [
                'name' => 'CHIGUATA',
                'province_id' => '35',
            ],
            [
                'name' => 'LA JOYA',
                'province_id' => '35',
            ],
            [
                'name' => 'MIRAFLORES',
                'province_id' => '35',
            ],
            [
                'name' => 'MOLLEBAYA',
                'province_id' => '35',
            ],
            [
                'name' => 'PAUCARPATA',
                'province_id' => '35',
            ],
            [
                'name' => 'POCSI',
                'province_id' => '35',
            ],
            [
                'name' => 'POLOBAYA',
                'province_id' => '35',
            ],
            [
                'name' => 'QUEQUENA',
                'province_id' => '35',
            ],
            [
                'name' => 'SABANDIA',
                'province_id' => '35',
            ],
            [
                'name' => 'SACHACA',
                'province_id' => '35',
            ],
            [
                'name' => 'SAN JUAN DE SIGUAS',
                'province_id' => '35',
            ],
            [
                'name' => 'SAN JUAN DE TARUCANI',
                'province_id' => '35',
            ],
            [
                'name' => 'SANTA ISABEL DE SIGUAS',
                'province_id' => '35',
            ],
            [
                'name' => 'STA RITA DE SIGUAS',
                'province_id' => '35',
            ],
            [
                'name' => 'SOCABAYA',
                'province_id' => '35',
            ],
            [
                'name' => 'TIABAYA',
                'province_id' => '35',
            ],
            [
                'name' => 'UCHUMAYO',
                'province_id' => '35',
            ],
            [
                'name' => 'VITOR',
                'province_id' => '35',
            ],
            [
                'name' => 'YANAHUARA',
                'province_id' => '35',
            ],
            [
                'name' => 'YARABAMBA',
                'province_id' => '35',
            ],
            [
                'name' => 'YURA',
                'province_id' => '35',
            ],
            [
                'name' => 'MARIANO MELGAR',
                'province_id' => '35',
            ],
            [
                'name' => 'JACOBO HUNTER',
                'province_id' => '35',
            ],
            [
                'name' => 'ALTO SELVA ALEGRE',
                'province_id' => '35',
            ],
            [
                'name' => 'JOSE LUIS BUSTAMANTE Y RIVERO',
                'province_id' => '35',
            ],
            [
                'name' => 'CHIVAY',
                'province_id' => '36',
            ],
            [
                'name' => 'ACHOMA',
                'province_id' => '36',
            ],
            [
                'name' => 'CABANACONDE',
                'province_id' => '36',
            ],
            [
                'name' => 'CAYLLOMA',
                'province_id' => '36',
            ],
            [
                'name' => 'CALLALLI',
                'province_id' => '36',
            ],
            [
                'name' => 'COPORAQUE',
                'province_id' => '36',
            ],
            [
                'name' => 'HUAMBO',
                'province_id' => '36',
            ],
            [
                'name' => 'HUANCA',
                'province_id' => '36',
            ],
            [
                'name' => 'ICHUPAMPA',
                'province_id' => '36',
            ],
            [
                'name' => 'LARI',
                'province_id' => '36',
            ],
            [
                'name' => 'LLUTA',
                'province_id' => '36',
            ],
            [
                'name' => 'MACA',
                'province_id' => '36',
            ],
            [
                'name' => 'MADRIGAL',
                'province_id' => '36',
            ],
            [
                'name' => 'SAN ANTONIO DE CHUCA',
                'province_id' => '36',
            ],
            [
                'name' => 'SIBAYO',
                'province_id' => '36',
            ],
            [
                'name' => 'TAPAY',
                'province_id' => '36',
            ],
            [
                'name' => 'TISCO',
                'province_id' => '36',
            ],
            [
                'name' => 'TUTI',
                'province_id' => '36',
            ],
            [
                'name' => 'YANQUE',
                'province_id' => '36',
            ],
            [
                'name' => 'MAJES',
                'province_id' => '36',
            ],
            [
                'name' => 'CAMANA',
                'province_id' => '37',
            ],
            [
                'name' => 'JOSE MARIA QUIMPER',
                'province_id' => '37',
            ],
            [
                'name' => 'MARIANO N VALCARCEL',
                'province_id' => '37',
            ],
            [
                'name' => 'MARISCAL CACERES',
                'province_id' => '37',
            ],
            [
                'name' => 'NICOLAS DE PIEROLA',
                'province_id' => '37',
            ],
            [
                'name' => 'OCONA',
                'province_id' => '37',
            ],
            [
                'name' => 'QUILCA',
                'province_id' => '37',
            ],
            [
                'name' => 'SAMUEL PASTOR',
                'province_id' => '37',
            ],
            [
                'name' => 'CARAVELI',
                'province_id' => '38',
            ],
            [
                'name' => 'ACARI',
                'province_id' => '38',
            ],
            [
                'name' => 'ATICO',
                'province_id' => '38',
            ],
            [
                'name' => 'ATIQUIPA',
                'province_id' => '38',
            ],
            [
                'name' => 'BELLA UNION',
                'province_id' => '38',
            ],
            [
                'name' => 'CAHUACHO',
                'province_id' => '38',
            ],
            [
                'name' => 'CHALA',
                'province_id' => '38',
            ],
            [
                'name' => 'CHAPARRA',
                'province_id' => '38',
            ],
            [
                'name' => 'HUANUHUANU',
                'province_id' => '38',
            ],
            [
                'name' => 'JAQUI',
                'province_id' => '38',
            ],
            [
                'name' => 'LOMAS',
                'province_id' => '38',
            ],
            [
                'name' => 'QUICACHA',
                'province_id' => '38',
            ],
            [
                'name' => 'YAUCA',
                'province_id' => '38',
            ],
            [
                'name' => 'APLAO',
                'province_id' => '39',
            ],
            [
                'name' => 'ANDAGUA',
                'province_id' => '39',
            ],
            [
                'name' => 'AYO',
                'province_id' => '39',
            ],
            [
                'name' => 'CHACHAS',
                'province_id' => '39',
            ],
            [
                'name' => 'CHILCAYMARCA',
                'province_id' => '39',
            ],
            [
                'name' => 'CHOCO',
                'province_id' => '39',
            ],
            [
                'name' => 'HUANCARQUI',
                'province_id' => '39',
            ],
            [
                'name' => 'MACHAGUAY',
                'province_id' => '39',
            ],
            [
                'name' => 'ORCOPAMPA',
                'province_id' => '39',
            ],
            [
                'name' => 'PAMPACOLCA',
                'province_id' => '39',
            ],
            [
                'name' => 'TIPAN',
                'province_id' => '39',
            ],
            [
                'name' => 'URACA',
                'province_id' => '39',
            ],
            [
                'name' => 'UNON',
                'province_id' => '39',
            ],
            [
                'name' => 'VIRACO',
                'province_id' => '39',
            ],
            [
                'name' => 'CHUQUIBAMBA',
                'province_id' => '40',
            ],
            [
                'name' => 'ANDARAY',
                'province_id' => '40',
            ],
            [
                'name' => 'CAYARANI',
                'province_id' => '40',
            ],
            [
                'name' => 'CHICHAS',
                'province_id' => '40',
            ],
            [
                'name' => 'IRAY',
                'province_id' => '40',
            ],
            [
                'name' => 'SALAMANCA',
                'province_id' => '40',
            ],
            [
                'name' => 'YANAQUIHUA',
                'province_id' => '40',
            ],
            [
                'name' => 'RIO GRANDE',
                'province_id' => '40',
            ],
            [
                'name' => 'MOLLENDO',
                'province_id' => '41',
            ],
            [
                'name' => 'COCACHACRA',
                'province_id' => '41',
            ],
            [
                'name' => 'DEAN VALDIVIA',
                'province_id' => '41',
            ],
            [
                'name' => 'ISLAY',
                'province_id' => '41',
            ],
            [
                'name' => 'MEJIA',
                'province_id' => '41',
            ],
            [
                'name' => 'PUNTA DE BOMBON',
                'province_id' => '41',
            ],
            [
                'name' => 'COTAHUASI',
                'province_id' => '42',
            ],
            [
                'name' => 'ALCA',
                'province_id' => '42',
            ],
            [
                'name' => 'CHARCANA',
                'province_id' => '42',
            ],
            [
                'name' => 'HUAYNACOTAS',
                'province_id' => '42',
            ],
            [
                'name' => 'PAMPAMARCA',
                'province_id' => '42',
            ],
            [
                'name' => 'PUYCA',
                'province_id' => '42',
            ],
            [
                'name' => 'QUECHUALLA',
                'province_id' => '42',
            ],
            [
                'name' => 'SAYLA',
                'province_id' => '42',
            ],
            [
                'name' => 'TAURIA',
                'province_id' => '42',
            ],
            [
                'name' => 'TOMEPAMPA',
                'province_id' => '42',
            ],
            [
                'name' => 'TORO',
                'province_id' => '42',
            ],
            [
                'name' => 'AYACUCHO',
                'province_id' => '43',
            ],
            [
                'name' => 'ACOS VINCHOS',
                'province_id' => '43',
            ],
            [
                'name' => 'CARMEN ALTO',
                'province_id' => '43',
            ],
            [
                'name' => 'CHIARA',
                'province_id' => '43',
            ],
            [
                'name' => 'QUINUA',
                'province_id' => '43',
            ],
            [
                'name' => 'SAN JOSE DE TICLLAS',
                'province_id' => '43',
            ],
            [
                'name' => 'SAN JUAN BAUTISTA',
                'province_id' => '43',
            ],
            [
                'name' => 'SANTIAGO DE PISCHA',
                'province_id' => '43',
            ],
            [
                'name' => 'VINCHOS',
                'province_id' => '43',
            ],
            [
                'name' => 'TAMBILLO',
                'province_id' => '43',
            ],
            [
                'name' => 'ACOCRO',
                'province_id' => '43',
            ],
            [
                'name' => 'SOCOS',
                'province_id' => '43',
            ],
            [
                'name' => 'OCROS',
                'province_id' => '43',
            ],
            [
                'name' => 'PACAYCASA',
                'province_id' => '43',
            ],
            [
                'name' => 'JESUS NAZARENO',
                'province_id' => '43',
            ],
            [
                'name' => 'CANGALLO',
                'province_id' => '44',
            ],
            [
                'name' => 'CHUSCHI',
                'province_id' => '44',
            ],
            [
                'name' => 'LOS MOROCHUCOS',
                'province_id' => '44',
            ],
            [
                'name' => 'PARAS',
                'province_id' => '44',
            ],
            [
                'name' => 'TOTOS',
                'province_id' => '44',
            ],
            [
                'name' => 'MARIA PARADO DE BELLIDO',
                'province_id' => '44',
            ],
            [
                'name' => 'HUANTA',
                'province_id' => '45',
            ],
            [
                'name' => 'AYAHUANCO',
                'province_id' => '45',
            ],
            [
                'name' => 'HUAMANGUILLA',
                'province_id' => '45',
            ],
            [
                'name' => 'IGUAIN',
                'province_id' => '45',
            ],
            [
                'name' => 'LURICOCHA',
                'province_id' => '45',
            ],
            [
                'name' => 'SANTILLANA',
                'province_id' => '45',
            ],
            [
                'name' => 'SIVIA',
                'province_id' => '45',
            ],
            [
                'name' => 'LLOCHEGUA',
                'province_id' => '45',
            ],
            [
                'name' => 'SAN MIGUEL',
                'province_id' => '46',
            ],
            [
                'name' => 'ANCO',
                'province_id' => '46',
            ],
            [
                'name' => 'AYNA',
                'province_id' => '46',
            ],
            [
                'name' => 'CHILCAS',
                'province_id' => '46',
            ],
            [
                'name' => 'CHUNGUI',
                'province_id' => '46',
            ],
            [
                'name' => 'TAMBO',
                'province_id' => '46',
            ],
            [
                'name' => 'LUIS CARRANZA',
                'province_id' => '46',
            ],
            [
                'name' => 'SANTA ROSA',
                'province_id' => '46',
            ],
            [
                'name' => 'PUQUIO',
                'province_id' => '47',
            ],
            [
                'name' => 'AUCARA',
                'province_id' => '47',
            ],
            [
                'name' => 'CABANA',
                'province_id' => '47',
            ],
            [
                'name' => 'CARMEN SALCEDO',
                'province_id' => '47',
            ],
            [
                'name' => 'CHAVINA',
                'province_id' => '47',
            ],
            [
                'name' => 'CHIPAO',
                'province_id' => '47',
            ],
            [
                'name' => 'HUAC-HUAS',
                'province_id' => '47',
            ],
            [
                'name' => 'LARAMATE',
                'province_id' => '47',
            ],
            [
                'name' => 'LEONCIO PRADO',
                'province_id' => '47',
            ],
            [
                'name' => 'LUCANAS',
                'province_id' => '47',
            ],
            [
                'name' => 'LLAUTA',
                'province_id' => '47',
            ],
            [
                'name' => 'OCANA',
                'province_id' => '47',
            ],
            [
                'name' => 'OTOCA',
                'province_id' => '47',
            ],
            [
                'name' => 'SANCOS',
                'province_id' => '47',
            ],
            [
                'name' => 'SAN JUAN',
                'province_id' => '47',
            ],
            [
                'name' => 'SAN PEDRO',
                'province_id' => '47',
            ],
            [
                'name' => 'STA ANA DE HUAYCAHUACHO',
                'province_id' => '47',
            ],
            [
                'name' => 'SANTA LUCIA',
                'province_id' => '47',
            ],
            [
                'name' => 'SAISA',
                'province_id' => '47',
            ],
            [
                'name' => 'SAN PEDRO DE PALCO',
                'province_id' => '47',
            ],
            [
                'name' => 'SAN CRISTOBAL',
                'province_id' => '47',
            ],
            [
                'name' => 'CORACORA',
                'province_id' => '48',
            ],
            [
                'name' => 'CORONEL CASTANEDA',
                'province_id' => '48',
            ],
            [
                'name' => 'CHUMPI',
                'province_id' => '48',
            ],
            [
                'name' => 'PACAPAUSA',
                'province_id' => '48',
            ],
            [
                'name' => 'PULLO',
                'province_id' => '48',
            ],
            [
                'name' => 'PUYUSCA',
                'province_id' => '48',
            ],
            [
                'name' => 'SAN FCO DE RAVACAYCO',
                'province_id' => '48',
            ],
            [
                'name' => 'UPAHUACHO',
                'province_id' => '48',
            ],
            [
                'name' => 'HUANCAPI',
                'province_id' => '49',
            ],
            [
                'name' => 'ALCAMENCA',
                'province_id' => '49',
            ],
            [
                'name' => 'APONGO',
                'province_id' => '49',
            ],
            [
                'name' => 'CANARIA',
                'province_id' => '49',
            ],
            [
                'name' => 'CAYARA',
                'province_id' => '49',
            ],
            [
                'name' => 'COLCA',
                'province_id' => '49',
            ],
            [
                'name' => 'HUAYA',
                'province_id' => '49',
            ],
            [
                'name' => 'HUAMANQUIQUIA',
                'province_id' => '49',
            ],
            [
                'name' => 'HUANCARAYLLA',
                'province_id' => '49',
            ],
            [
                'name' => 'SARHUA',
                'province_id' => '49',
            ],
            [
                'name' => 'VILCANCHOS',
                'province_id' => '49',
            ],
            [
                'name' => 'ASQUIPATA',
                'province_id' => '49',
            ],
            [
                'name' => 'SANCOS',
                'province_id' => '50',
            ],
            [
                'name' => 'SACSAMARCA',
                'province_id' => '50',
            ],
            [
                'name' => 'SANTIAGO DE LUCANAMARCA',
                'province_id' => '50',
            ],
            [
                'name' => 'CARAPO',
                'province_id' => '50',
            ],
            [
                'name' => 'VILCAS HUAMAN',
                'province_id' => '51',
            ],
            [
                'name' => 'VISCHONGO',
                'province_id' => '51',
            ],
            [
                'name' => 'ACCOMARCA',
                'province_id' => '51',
            ],
            [
                'name' => 'CARHUANCA',
                'province_id' => '51',
            ],
            [
                'name' => 'CONCEPCION',
                'province_id' => '51',
            ],
            [
                'name' => 'HUAMBALPA',
                'province_id' => '51',
            ],
            [
                'name' => 'SAURAMA',
                'province_id' => '51',
            ],
            [
                'name' => 'INDEPENDENCIA',
                'province_id' => '51',
            ],
            [
                'name' => 'PAUSA',
                'province_id' => '52',
            ],
            [
                'name' => 'COLTA',
                'province_id' => '52',
            ],
            [
                'name' => 'CORCULLA',
                'province_id' => '52',
            ],
            [
                'name' => 'LAMPA',
                'province_id' => '52',
            ],
            [
                'name' => 'MARCABAMBA',
                'province_id' => '52',
            ],
            [
                'name' => 'OYOLO',
                'province_id' => '52',
            ],
            [
                'name' => 'PARARCA',
                'province_id' => '52',
            ],
            [
                'name' => 'SAN JAVIER DE ALPABAMBA',
                'province_id' => '52',
            ],
            [
                'name' => 'SAN JOSE DE USHUA',
                'province_id' => '52',
            ],
            [
                'name' => 'SARA SARA',
                'province_id' => '52',
            ],
            [
                'name' => 'QUEROBAMBA',
                'province_id' => '53',
            ],
            [
                'name' => 'BELEN',
                'province_id' => '53',
            ],
            [
                'name' => 'CHALCOS',
                'province_id' => '53',
            ],
            [
                'name' => 'SAN SALVADOR DE QUIJE',
                'province_id' => '53',
            ],
            [
                'name' => 'PAICO',
                'province_id' => '53',
            ],
            [
                'name' => 'SANTIAGO DE PAUCARAY',
                'province_id' => '53',
            ],
            [
                'name' => 'SAN PEDRO DE LARCAY',
                'province_id' => '53',
            ],
            [
                'name' => 'SORAS',
                'province_id' => '53',
            ],
            [
                'name' => 'HUACANA',
                'province_id' => '53',
            ],
            [
                'name' => 'CHILCAYOC',
                'province_id' => '53',
            ],
            [
                'name' => 'MORCOLLA',
                'province_id' => '53',
            ],
            [
                'name' => 'CAJAMARCA',
                'province_id' => '54',
            ],
            [
                'name' => 'ASUNCION',
                'province_id' => '54',
            ],
            [
                'name' => 'COSPAN',
                'province_id' => '54',
            ],
            [
                'name' => 'CHETILLA',
                'province_id' => '54',
            ],
            [
                'name' => 'ENCANADA',
                'province_id' => '54',
            ],
            [
                'name' => 'JESUS',
                'province_id' => '54',
            ],
            [
                'name' => 'LOS BANOS DEL INCA',
                'province_id' => '54',
            ],
            [
                'name' => 'LLACANORA',
                'province_id' => '54',
            ],
            [
                'name' => 'MAGDALENA',
                'province_id' => '54',
            ],
            [
                'name' => 'MATARA',
                'province_id' => '54',
            ],
            [
                'name' => 'NAMORA',
                'province_id' => '54',
            ],
            [
                'name' => 'SAN JUAN',
                'province_id' => '54',
            ],
            [
                'name' => 'CAJABAMBA',
                'province_id' => '55',
            ],
            [
                'name' => 'CACHACHI',
                'province_id' => '55',
            ],
            [
                'name' => 'CONDEBAMBA',
                'province_id' => '55',
            ],
            [
                'name' => 'SITACOCHA',
                'province_id' => '55',
            ],
            [
                'name' => 'CELENDIN',
                'province_id' => '56',
            ],
            [
                'name' => 'CORTEGANA',
                'province_id' => '56',
            ],
            [
                'name' => 'CHUMUCH',
                'province_id' => '56',
            ],
            [
                'name' => 'HUASMIN',
                'province_id' => '56',
            ],
            [
                'name' => 'JORGE CHAVEZ',
                'province_id' => '56',
            ],
            [
                'name' => 'JOSE GALVEZ',
                'province_id' => '56',
            ],
            [
                'name' => 'MIGUEL IGLESIAS',
                'province_id' => '56',
            ],
            [
                'name' => 'OXAMARCA',
                'province_id' => '56',
            ],
            [
                'name' => 'SOROCHUCO',
                'province_id' => '56',
            ],
            [
                'name' => 'SUCRE',
                'province_id' => '56',
            ],
            [
                'name' => 'UTCO',
                'province_id' => '56',
            ],
            [
                'name' => 'LA LIBERTAD DE PALLAN',
                'province_id' => '56',
            ],
            [
                'name' => 'CONTUMAZA',
                'province_id' => '57',
            ],
            [
                'name' => 'CHILETE',
                'province_id' => '57',
            ],
            [
                'name' => 'GUZMANGO',
                'province_id' => '57',
            ],
            [
                'name' => 'SAN BENITO',
                'province_id' => '57',
            ],
            [
                'name' => 'CUPISNIQUE',
                'province_id' => '57',
            ],
            [
                'name' => 'TANTARICA',
                'province_id' => '57',
            ],
            [
                'name' => 'YONAN',
                'province_id' => '57',
            ],
            [
                'name' => 'STA CRUZ DE TOLEDO',
                'province_id' => '57',
            ],
            [
                'name' => 'CUTERVO',
                'province_id' => '58',
            ],
            [
                'name' => 'CALLAYUC',
                'province_id' => '58',
            ],
            [
                'name' => 'CUJILLO',
                'province_id' => '58',
            ],
            [
                'name' => 'CHOROS',
                'province_id' => '58',
            ],
            [
                'name' => 'LA RAMADA',
                'province_id' => '58',
            ],
            [
                'name' => 'PIMPINGOS',
                'province_id' => '58',
            ],
            [
                'name' => 'QUEROCOTILLO',
                'province_id' => '58',
            ],
            [
                'name' => 'SAN ANDRES DE CUTERVO',
                'province_id' => '58',
            ],
            [
                'name' => 'SAN JUAN DE CUTERVO',
                'province_id' => '58',
            ],
            [
                'name' => 'SAN LUIS DE LUCMA',
                'province_id' => '58',
            ],
            [
                'name' => 'SANTA CRUZ',
                'province_id' => '58',
            ],
            [
                'name' => 'SANTO DOMINGO DE LA CAPILLA',
                'province_id' => '58',
            ],
            [
                'name' => 'SANTO TOMAS',
                'province_id' => '58',
            ],
            [
                'name' => 'SOCOTA',
                'province_id' => '58',
            ],
            [
                'name' => 'TORIBIO CASANOVA',
                'province_id' => '58',
            ],
            [
                'name' => 'CHOTA',
                'province_id' => '59',
            ],
            [
                'name' => 'ANGUIA',
                'province_id' => '59',
            ],
            [
                'name' => 'COCHABAMBA',
                'province_id' => '59',
            ],
            [
                'name' => 'CONCHAN',
                'province_id' => '59',
            ],
            [
                'name' => 'CHADIN',
                'province_id' => '59',
            ],
            [
                'name' => 'CHIGUIRIP',
                'province_id' => '59',
            ],
            [
                'name' => 'CHIMBAN',
                'province_id' => '59',
            ],
            [
                'name' => 'HUAMBOS',
                'province_id' => '59',
            ],
            [
                'name' => 'LAJAS',
                'province_id' => '59',
            ],
            [
                'name' => 'LLAMA',
                'province_id' => '59',
            ],
            [
                'name' => 'MIRACOSTA',
                'province_id' => '59',
            ],
            [
                'name' => 'PACCHA',
                'province_id' => '59',
            ],
            [
                'name' => 'PION',
                'province_id' => '59',
            ],
            [
                'name' => 'QUEROCOTO',
                'province_id' => '59',
            ],
            [
                'name' => 'TACABAMBA',
                'province_id' => '59',
            ],
            [
                'name' => 'TOCMOCHE',
                'province_id' => '59',
            ],
            [
                'name' => 'SAN JUAN DE LICUPIS',
                'province_id' => '59',
            ],
            [
                'name' => 'CHOROPAMPA',
                'province_id' => '59',
            ],
            [
                'name' => 'CHALAMARCA',
                'province_id' => '59',
            ],
            [
                'name' => 'BAMBAMARCA',
                'province_id' => '60',
            ],
            [
                'name' => 'CHUGUR',
                'province_id' => '60',
            ],
            [
                'name' => 'HUALGAYOC',
                'province_id' => '60',
            ],
            [
                'name' => 'JAEN',
                'province_id' => '61',
            ],
            [
                'name' => 'BELLAVISTA',
                'province_id' => '61',
            ],
            [
                'name' => 'COLASAY',
                'province_id' => '61',
            ],
            [
                'name' => 'CHONTALI',
                'province_id' => '61',
            ],
            [
                'name' => 'POMAHUACA',
                'province_id' => '61',
            ],
            [
                'name' => 'PUCARA',
                'province_id' => '61',
            ],
            [
                'name' => 'SALLIQUE',
                'province_id' => '61',
            ],
            [
                'name' => 'SAN FELIPE',
                'province_id' => '61',
            ],
            [
                'name' => 'SAN JOSE DEL ALTO',
                'province_id' => '61',
            ],
            [
                'name' => 'SANTA ROSA',
                'province_id' => '61',
            ],
            [
                'name' => 'LAS PIRIAS',
                'province_id' => '61',
            ],
            [
                'name' => 'HUABAL',
                'province_id' => '61',
            ],
            [
                'name' => 'SANTA CRUZ',
                'province_id' => '62',
            ],
            [
                'name' => 'CATACHE',
                'province_id' => '62',
            ],
            [
                'name' => 'CHANCAIBANOS',
                'province_id' => '62',
            ],
            [
                'name' => 'LA ESPERANZA',
                'province_id' => '62',
            ],
            [
                'name' => 'NINABAMBA',
                'province_id' => '62',
            ],
            [
                'name' => 'PULAN',
                'province_id' => '62',
            ],
            [
                'name' => 'SEXI',
                'province_id' => '62',
            ],
            [
                'name' => 'UTICYACU',
                'province_id' => '62',
            ],
            [
                'name' => 'YAUYUCAN',
                'province_id' => '62',
            ],
            [
                'name' => 'ANDABAMBA',
                'province_id' => '62',
            ],
            [
                'name' => 'SAUCEPAMPA',
                'province_id' => '62',
            ],
            [
                'name' => 'SAN MIGUEL',
                'province_id' => '63',
            ],
            [
                'name' => 'CALQUIS',
                'province_id' => '63',
            ],
            [
                'name' => 'LA FLORIDA',
                'province_id' => '63',
            ],
            [
                'name' => 'LLAPA',
                'province_id' => '63',
            ],
            [
                'name' => 'NANCHOC',
                'province_id' => '63',
            ],
            [
                'name' => 'NIEPOS',
                'province_id' => '63',
            ],
            [
                'name' => 'SAN GREGORIO',
                'province_id' => '63',
            ],
            [
                'name' => 'SAN SILVESTRE DE COCHAN',
                'province_id' => '63',
            ],
            [
                'name' => 'EL PRADO',
                'province_id' => '63',
            ],
            [
                'name' => 'UNION AGUA BLANCA',
                'province_id' => '63',
            ],
            [
                'name' => 'TONGOD',
                'province_id' => '63',
            ],
            [
                'name' => 'CATILLUC',
                'province_id' => '63',
            ],
            [
                'name' => 'BOLIVAR',
                'province_id' => '63',
            ],
            [
                'name' => 'SAN IGNACIO',
                'province_id' => '64',
            ],
            [
                'name' => 'CHIRINOS',
                'province_id' => '64',
            ],
            [
                'name' => 'HUARANGO',
                'province_id' => '64',
            ],
            [
                'name' => 'NAMBALLE',
                'province_id' => '64',
            ],
            [
                'name' => 'LA COIPA',
                'province_id' => '64',
            ],
            [
                'name' => 'SAN JOSE DE LOURDES',
                'province_id' => '64',
            ],
            [
                'name' => 'TABACONAS',
                'province_id' => '64',
            ],
            [
                'name' => 'PEDRO GALVEZ',
                'province_id' => '65',
            ],
            [
                'name' => 'ICHOCAN',
                'province_id' => '65',
            ],
            [
                'name' => 'GREGORIO PITA',
                'province_id' => '65',
            ],
            [
                'name' => 'JOSE MANUEL QUIROZ',
                'province_id' => '65',
            ],
            [
                'name' => 'EDUARDO VILLANUEVA',
                'province_id' => '65',
            ],
            [
                'name' => 'JOSE SABOGAL',
                'province_id' => '65',
            ],
            [
                'name' => 'CHANCAY',
                'province_id' => '65',
            ],
            [
                'name' => 'SAN PABLO',
                'province_id' => '66',
            ],
            [
                'name' => 'SAN BERNARDINO',
                'province_id' => '66',
            ],
            [
                'name' => 'SAN LUIS',
                'province_id' => '66',
            ],
            [
                'name' => 'TUMBADEN',
                'province_id' => '66',
            ],
            [
                'name' => 'CUSCO',
                'province_id' => '67',
            ],
            [
                'name' => 'CCORCA',
                'province_id' => '67',
            ],
            [
                'name' => 'POROY',
                'province_id' => '67',
            ],
            [
                'name' => 'SAN JERONIMO',
                'province_id' => '67',
            ],
            [
                'name' => 'SAN SEBASTIAN',
                'province_id' => '67',
            ],
            [
                'name' => 'SANTIAGO',
                'province_id' => '67',
            ],
            [
                'name' => 'SAYLLA',
                'province_id' => '67',
            ],
            [
                'name' => 'WANCHAQ',
                'province_id' => '67',
            ],
            [
                'name' => 'ACOMAYO',
                'province_id' => '68',
            ],
            [
                'name' => 'ACOPIA',
                'province_id' => '68',
            ],
            [
                'name' => 'ACOS',
                'province_id' => '68',
            ],
            [
                'name' => 'POMACANCHI',
                'province_id' => '68',
            ],
            [
                'name' => 'RONDOCAN',
                'province_id' => '68',
            ],
            [
                'name' => 'SANGARARA',
                'province_id' => '68',
            ],
            [
                'name' => 'MOSOC LLACTA',
                'province_id' => '68',
            ],
            [
                'name' => 'ANTA',
                'province_id' => '69',
            ],
            [
                'name' => 'CHINCHAYPUJIO',
                'province_id' => '69',
            ],
            [
                'name' => 'HUAROCONDO',
                'province_id' => '69',
            ],
            [
                'name' => 'LIMATAMBO',
                'province_id' => '69',
            ],
            [
                'name' => 'MOLLEPATA',
                'province_id' => '69',
            ],
            [
                'name' => 'PUCYURA',
                'province_id' => '69',
            ],
            [
                'name' => 'ZURITE',
                'province_id' => '69',
            ],
            [
                'name' => 'CACHIMAYO',
                'province_id' => '69',
            ],
            [
                'name' => 'ANCAHUASI',
                'province_id' => '69',
            ],
            [
                'name' => 'CALCA',
                'province_id' => '70',
            ],
            [
                'name' => 'COYA',
                'province_id' => '70',
            ],
            [
                'name' => 'LAMAY',
                'province_id' => '70',
            ],
            [
                'name' => 'LARES',
                'province_id' => '70',
            ],
            [
                'name' => 'PISAC',
                'province_id' => '70',
            ],
            [
                'name' => 'SAN SALVADOR',
                'province_id' => '70',
            ],
            [
                'name' => 'TARAY',
                'province_id' => '70',
            ],
            [
                'name' => 'YANATILE',
                'province_id' => '70',
            ],
            [
                'name' => 'YANAOCA',
                'province_id' => '71',
            ],
            [
                'name' => 'CHECCA',
                'province_id' => '71',
            ],
            [
                'name' => 'KUNTURKANKI',
                'province_id' => '71',
            ],
            [
                'name' => 'LANGUI',
                'province_id' => '71',
            ],
            [
                'name' => 'LAYO',
                'province_id' => '71',
            ],
            [
                'name' => 'PAMPAMARCA',
                'province_id' => '71',
            ],
            [
                'name' => 'QUEHUE',
                'province_id' => '71',
            ],
            [
                'name' => 'TUPAC AMARU',
                'province_id' => '71',
            ],
            [
                'name' => 'SICUANI',
                'province_id' => '72',
            ],
            [
                'name' => 'COMBAPATA',
                'province_id' => '72',
            ],
            [
                'name' => 'CHECACUPE',
                'province_id' => '72',
            ],
            [
                'name' => 'MARANGANI',
                'province_id' => '72',
            ],
            [
                'name' => 'PITUMARCA',
                'province_id' => '72',
            ],
            [
                'name' => 'SAN PABLO',
                'province_id' => '72',
            ],
            [
                'name' => 'SAN PEDRO',
                'province_id' => '72',
            ],
            [
                'name' => 'TINTA',
                'province_id' => '72',
            ],
            [
                'name' => 'SANTO TOMAS',
                'province_id' => '73',
            ],
            [
                'name' => 'CAPACMARCA',
                'province_id' => '73',
            ],
            [
                'name' => 'COLQUEMARCA',
                'province_id' => '73',
            ],
            [
                'name' => 'CHAMACA',
                'province_id' => '73',
            ],
            [
                'name' => 'LIVITACA',
                'province_id' => '73',
            ],
            [
                'name' => 'LLUSCO',
                'province_id' => '73',
            ],
            [
                'name' => 'QUINOTA',
                'province_id' => '73',
            ],
            [
                'name' => 'VELILLE',
                'province_id' => '73',
            ],
            [
                'name' => 'ESPINAR',
                'province_id' => '74',
            ],
            [
                'name' => 'CONDOROMA',
                'province_id' => '74',
            ],
            [
                'name' => 'COPORAQUE',
                'province_id' => '74',
            ],
            [
                'name' => 'OCORURO',
                'province_id' => '74',
            ],
            [
                'name' => 'PALLPATA',
                'province_id' => '74',
            ],
            [
                'name' => 'PICHIGUA',
                'province_id' => '74',
            ],
            [
                'name' => 'SUYKUTAMBO',
                'province_id' => '74',
            ],
            [
                'name' => 'ALTO PICHIGUA',
                'province_id' => '74',
            ],
            [
                'name' => 'SANTA ANA',
                'province_id' => '75',
            ],
            [
                'name' => 'ECHARATE',
                'province_id' => '75',
            ],
            [
                'name' => 'HUAYOPATA',
                'province_id' => '75',
            ],
            [
                'name' => 'MARANURA',
                'province_id' => '75',
            ],
            [
                'name' => 'OCOBAMBA',
                'province_id' => '75',
            ],
            [
                'name' => 'SANTA TERESA',
                'province_id' => '75',
            ],
            [
                'name' => 'VILCABAMBA',
                'province_id' => '75',
            ],
            [
                'name' => 'QUELLOUNO',
                'province_id' => '75',
            ],
            [
                'name' => 'KIMBIRI',
                'province_id' => '75',
            ],
            [
                'name' => 'PICHARI',
                'province_id' => '75',
            ],
            [
                'name' => 'PARURO',
                'province_id' => '76',
            ],
            [
                'name' => 'ACCHA',
                'province_id' => '76',
            ],
            [
                'name' => 'CCAPI',
                'province_id' => '76',
            ],
            [
                'name' => 'COLCHA',
                'province_id' => '76',
            ],
            [
                'name' => 'HUANOQUITE',
                'province_id' => '76',
            ],
            [
                'name' => 'OMACHA',
                'province_id' => '76',
            ],
            [
                'name' => 'YAURISQUE',
                'province_id' => '76',
            ],
            [
                'name' => 'PACCARITAMBO',
                'province_id' => '76',
            ],
            [
                'name' => 'PILLPINTO',
                'province_id' => '76',
            ],
            [
                'name' => 'PAUCARTAMBO',
                'province_id' => '77',
            ],
            [
                'name' => 'CAICAY',
                'province_id' => '77',
            ],
            [
                'name' => 'COLQUEPATA',
                'province_id' => '77',
            ],
            [
                'name' => 'CHALLABAMBA',
                'province_id' => '77',
            ],
            [
                'name' => 'COSNIPATA',
                'province_id' => '77',
            ],
            [
                'name' => 'HUANCARANI',
                'province_id' => '77',
            ],
            [
                'name' => 'URCOS',
                'province_id' => '78',
            ],
            [
                'name' => 'ANDAHUAYLILLAS',
                'province_id' => '78',
            ],
            [
                'name' => 'CAMANTI',
                'province_id' => '78',
            ],
            [
                'name' => 'CCARHUAYO',
                'province_id' => '78',
            ],
            [
                'name' => 'CCATCA',
                'province_id' => '78',
            ],
            [
                'name' => 'CUSIPATA',
                'province_id' => '78',
            ],
            [
                'name' => 'HUARO',
                'province_id' => '78',
            ],
            [
                'name' => 'LUCRE',
                'province_id' => '78',
            ],
            [
                'name' => 'MARCAPATA',
                'province_id' => '78',
            ],
            [
                'name' => 'OCONGATE',
                'province_id' => '78',
            ],
            [
                'name' => 'OROPESA',
                'province_id' => '78',
            ],
            [
                'name' => 'QUIQUIJANA',
                'province_id' => '78',
            ],
            [
                'name' => 'URUBAMBA',
                'province_id' => '79',
            ],
            [
                'name' => 'CHINCHERO',
                'province_id' => '79',
            ],
            [
                'name' => 'HUAYLLABAMBA',
                'province_id' => '79',
            ],
            [
                'name' => 'MACHUPICCHU',
                'province_id' => '79',
            ],
            [
                'name' => 'MARAS',
                'province_id' => '79',
            ],
            [
                'name' => 'OLLANTAYTAMBO',
                'province_id' => '79',
            ],
            [
                'name' => 'YUCAY',
                'province_id' => '79',
            ],
            [
                'name' => 'HUANCAVELICA',
                'province_id' => '80',
            ],
            [
                'name' => 'ACOBAMBILLA',
                'province_id' => '80',
            ],
            [
                'name' => 'ACORIA',
                'province_id' => '80',
            ],
            [
                'name' => 'CONAYCA',
                'province_id' => '80',
            ],
            [
                'name' => 'CUENCA',
                'province_id' => '80',
            ],
            [
                'name' => 'HUACHOCOLPA',
                'province_id' => '80',
            ],
            [
                'name' => 'HUAYLLAHUARA',
                'province_id' => '80',
            ],
            [
                'name' => 'IZCUCHACA',
                'province_id' => '80',
            ],
            [
                'name' => 'LARIA',
                'province_id' => '80',
            ],
            [
                'name' => 'MANTA',
                'province_id' => '80',
            ],
            [
                'name' => 'MARISCAL CACERES',
                'province_id' => '80',
            ],
            [
                'name' => 'MOYA',
                'province_id' => '80',
            ],
            [
                'name' => 'NUEVO OCCORO',
                'province_id' => '80',
            ],
            [
                'name' => 'PALCA',
                'province_id' => '80',
            ],
            [
                'name' => 'PILCHACA',
                'province_id' => '80',
            ],
            [
                'name' => 'VILCA',
                'province_id' => '80',
            ],
            [
                'name' => 'YAULI',
                'province_id' => '80',
            ],
            [
                'name' => 'ASCENCION',
                'province_id' => '80',
            ],
            [
                'name' => 'HUANDO',
                'province_id' => '80',
            ],
            [
                'name' => 'ACOBAMBA',
                'province_id' => '81',
            ],
            [
                'name' => 'ANTA',
                'province_id' => '81',
            ],
            [
                'name' => 'ANDABAMBA',
                'province_id' => '81',
            ],
            [
                'name' => 'CAJA',
                'province_id' => '81',
            ],
            [
                'name' => 'MARCAS',
                'province_id' => '81',
            ],
            [
                'name' => 'PAUCARA',
                'province_id' => '81',
            ],
            [
                'name' => 'POMACOCHA',
                'province_id' => '81',
            ],
            [
                'name' => 'ROSARIO',
                'province_id' => '81',
            ],
            [
                'name' => 'LIRCAY',
                'province_id' => '82',
            ],
            [
                'name' => 'ANCHONGA',
                'province_id' => '82',
            ],
            [
                'name' => 'CALLANMARCA',
                'province_id' => '82',
            ],
            [
                'name' => 'CONGALLA',
                'province_id' => '82',
            ],
            [
                'name' => 'CHINCHO',
                'province_id' => '82',
            ],
            [
                'name' => 'HUAYLLAY GRANDE',
                'province_id' => '82',
            ],
            [
                'name' => 'HUANCA HUANCA',
                'province_id' => '82',
            ],
            [
                'name' => 'JULCAMARCA',
                'province_id' => '82',
            ],
            [
                'name' => 'SAN ANTONIO DE ANTAPARCO',
                'province_id' => '82',
            ],
            [
                'name' => 'STO TOMAS DE PATA',
                'province_id' => '82',
            ],
            [
                'name' => 'SECCLLA',
                'province_id' => '82',
            ],
            [
                'name' => 'CCOCHACCASA',
                'province_id' => '82',
            ],
            [
                'name' => 'CASTROVIRREYNA',
                'province_id' => '83',
            ],
            [
                'name' => 'ARMA',
                'province_id' => '83',
            ],
            [
                'name' => 'AURAHUA',
                'province_id' => '83',
            ],
            [
                'name' => 'CAPILLAS',
                'province_id' => '83',
            ],
            [
                'name' => 'COCAS',
                'province_id' => '83',
            ],
            [
                'name' => 'CHUPAMARCA',
                'province_id' => '83',
            ],
            [
                'name' => 'HUACHOS',
                'province_id' => '83',
            ],
            [
                'name' => 'HUAMATAMBO',
                'province_id' => '83',
            ],
            [
                'name' => 'MOLLEPAMPA',
                'province_id' => '83',
            ],
            [
                'name' => 'SAN JUAN',
                'province_id' => '83',
            ],
            [
                'name' => 'TANTARA',
                'province_id' => '83',
            ],
            [
                'name' => 'TICRAPO',
                'province_id' => '83',
            ],
            [
                'name' => 'SANTA ANA',
                'province_id' => '83',
            ],
            [
                'name' => 'PAMPAS',
                'province_id' => '84',
            ],
            [
                'name' => 'ACOSTAMBO',
                'province_id' => '84',
            ],
            [
                'name' => 'ACRAQUIA',
                'province_id' => '84',
            ],
            [
                'name' => 'AHUAYCHA',
                'province_id' => '84',
            ],
            [
                'name' => 'COLCABAMBA',
                'province_id' => '84',
            ],
            [
                'name' => 'DANIEL HERNANDEZ',
                'province_id' => '84',
            ],
            [
                'name' => 'HUACHOCOLPA',
                'province_id' => '84',
            ],
            [
                'name' => 'HUARIBAMBA',
                'province_id' => '84',
            ],
            [
                'name' => 'NAHUIMPUQUIO',
                'province_id' => '84',
            ],
            [
                'name' => 'PAZOS',
                'province_id' => '84',
            ],
            [
                'name' => 'QUISHUAR',
                'province_id' => '84',
            ],
            [
                'name' => 'SALCABAMBA',
                'province_id' => '84',
            ],
            [
                'name' => 'SAN MARCOS DE ROCCHAC',
                'province_id' => '84',
            ],
            [
                'name' => 'SURCUBAMBA',
                'province_id' => '84',
            ],
            [
                'name' => 'TINTAY PUNCU',
                'province_id' => '84',
            ],
            [
                'name' => 'SALCAHUASI',
                'province_id' => '84',
            ],
            [
                'name' => 'AYAVI',
                'province_id' => '85',
            ],
            [
                'name' => 'CORDOVA',
                'province_id' => '85',
            ],
            [
                'name' => 'HUAYACUNDO ARMA',
                'province_id' => '85',
            ],
            [
                'name' => 'HUAYTARA',
                'province_id' => '85',
            ],
            [
                'name' => 'LARAMARCA',
                'province_id' => '85',
            ],
            [
                'name' => 'OCOYO',
                'province_id' => '85',
            ],
            [
                'name' => 'PILPICHACA',
                'province_id' => '85',
            ],
            [
                'name' => 'QUERCO',
                'province_id' => '85',
            ],
            [
                'name' => 'QUITO ARMA',
                'province_id' => '85',
            ],
            [
                'name' => 'SAN ANTONIO DE CUSICANCHA',
                'province_id' => '85',
            ],
            [
                'name' => 'SAN FRANCISCO DE SANGAYAICO',
                'province_id' => '85',
            ],
            [
                'name' => 'SAN ISIDRO',
                'province_id' => '85',
            ],
            [
                'name' => 'SANTIAGO DE CHOCORVOS',
                'province_id' => '85',
            ],
            [
                'name' => 'SANTIAGO DE QUIRAHUARA',
                'province_id' => '85',
            ],
            [
                'name' => 'SANTO DOMINGO DE CAPILLA',
                'province_id' => '85',
            ],
            [
                'name' => 'TAMBO',
                'province_id' => '85',
            ],
            [
                'name' => 'CHURCAMPA',
                'province_id' => '86',
            ],
            [
                'name' => 'ANCO',
                'province_id' => '86',
            ],
            [
                'name' => 'CHINCHIHUASI',
                'province_id' => '86',
            ],
            [
                'name' => 'EL CARMEN',
                'province_id' => '86',
            ],
            [
                'name' => 'LA MERCED',
                'province_id' => '86',
            ],
            [
                'name' => 'LOCROJA',
                'province_id' => '86',
            ],
            [
                'name' => 'PAUCARBAMBA',
                'province_id' => '86',
            ],
            [
                'name' => 'SAN MIGUEL DE MAYOC',
                'province_id' => '86',
            ],
            [
                'name' => 'SAN PEDRO DE CORIS',
                'province_id' => '86',
            ],
            [
                'name' => 'PACHAMARCA',
                'province_id' => '86',
            ],
            [
                'name' => 'HUANUCO',
                'province_id' => '87',
            ],
            [
                'name' => 'CHINCHAO',
                'province_id' => '87',
            ],
            [
                'name' => 'CHURUBAMBA',
                'province_id' => '87',
            ],
            [
                'name' => 'MARGOS',
                'province_id' => '87',
            ],
            [
                'name' => 'QUISQUI',
                'province_id' => '87',
            ],
            [
                'name' => 'SAN FCO DE CAYRAN',
                'province_id' => '87',
            ],
            [
                'name' => 'SAN PEDRO DE CHAULAN',
                'province_id' => '87',
            ],
            [
                'name' => 'STA MARIA DEL VALLE',
                'province_id' => '87',
            ],
            [
                'name' => 'YARUMAYO',
                'province_id' => '87',
            ],
            [
                'name' => 'AMARILIS',
                'province_id' => '87',
            ],
            [
                'name' => 'PILLCO MARCA',
                'province_id' => '87',
            ],
            [
                'name' => 'AMBO',
                'province_id' => '88',
            ],
            [
                'name' => 'CAYNA',
                'province_id' => '88',
            ],
            [
                'name' => 'COLPAS',
                'province_id' => '88',
            ],
            [
                'name' => 'CONCHAMARCA',
                'province_id' => '88',
            ],
            [
                'name' => 'HUACAR',
                'province_id' => '88',
            ],
            [
                'name' => 'SAN FRANCISCO',
                'province_id' => '88',
            ],
            [
                'name' => 'SAN RAFAEL',
                'province_id' => '88',
            ],
            [
                'name' => 'TOMAY KICHWA',
                'province_id' => '88',
            ],
            [
                'name' => 'LA UNION',
                'province_id' => '89',
            ],
            [
                'name' => 'CHUQUIS',
                'province_id' => '89',
            ],
            [
                'name' => 'MARIAS',
                'province_id' => '89',
            ],
            [
                'name' => 'PACHAS',
                'province_id' => '89',
            ],
            [
                'name' => 'QUIVILLA',
                'province_id' => '89',
            ],
            [
                'name' => 'RIPAN',
                'province_id' => '89',
            ],
            [
                'name' => 'SHUNQUI',
                'province_id' => '89',
            ],
            [
                'name' => 'SILLAPATA',
                'province_id' => '89',
            ],
            [
                'name' => 'YANAS',
                'province_id' => '89',
            ],
            [
                'name' => 'LLATA',
                'province_id' => '90',
            ],
            [
                'name' => 'ARANCAY',
                'province_id' => '90',
            ],
            [
                'name' => 'CHAVIN DE PARIARCA',
                'province_id' => '90',
            ],
            [
                'name' => 'JACAS GRANDE',
                'province_id' => '90',
            ],
            [
                'name' => 'JIRCAN',
                'province_id' => '90',
            ],
            [
                'name' => 'MIRAFLORES',
                'province_id' => '90',
            ],
            [
                'name' => 'MONZON',
                'province_id' => '90',
            ],
            [
                'name' => 'PUNCHAO',
                'province_id' => '90',
            ],
            [
                'name' => 'PUNOS',
                'province_id' => '90',
            ],
            [
                'name' => 'SINGA',
                'province_id' => '90',
            ],
            [
                'name' => 'TANTAMAYO',
                'province_id' => '90',
            ],
            [
                'name' => 'HUACRACHUCO',
                'province_id' => '91',
            ],
            [
                'name' => 'CHOLON',
                'province_id' => '91',
            ],
            [
                'name' => 'SAN BUENAVENTURA',
                'province_id' => '91',
            ],
            [
                'name' => 'RUPA RUPA',
                'province_id' => '92',
            ],
            [
                'name' => 'DANIEL ALOMIA ROBLES',
                'province_id' => '92',
            ],
            [
                'name' => 'HERMILIO VALDIZAN',
                'province_id' => '92',
            ],
            [
                'name' => 'LUYANDO',
                'province_id' => '92',
            ],
            [
                'name' => 'MARIANO DAMASO BERAUN',
                'province_id' => '92',
            ],
            [
                'name' => 'JOSE CRESPO Y CASTILLO',
                'province_id' => '92',
            ],
            [
                'name' => 'PANAO',
                'province_id' => '93',
            ],
            [
                'name' => 'CHAGLLA',
                'province_id' => '93',
            ],
            [
                'name' => 'MOLINO',
                'province_id' => '93',
            ],
            [
                'name' => 'UMARI',
                'province_id' => '93',
            ],
            [
                'name' => 'HONORIA',
                'province_id' => '94',
            ],
            [
                'name' => 'PUERTO INCA',
                'province_id' => '94',
            ],
            [
                'name' => 'CODO DEL POZUZO',
                'province_id' => '94',
            ],
            [
                'name' => 'TOURNAVISTA',
                'province_id' => '94',
            ],
            [
                'name' => 'YUYAPICHIS',
                'province_id' => '94',
            ],
            [
                'name' => 'HUACAYBAMBA',
                'province_id' => '95',
            ],
            [
                'name' => 'PINRA',
                'province_id' => '95',
            ],
            [
                'name' => 'CANCHABAMBA',
                'province_id' => '95',
            ],
            [
                'name' => 'COCHABAMBA',
                'province_id' => '95',
            ],
            [
                'name' => 'JESUS',
                'province_id' => '96',
            ],
            [
                'name' => 'BANOS',
                'province_id' => '96',
            ],
            [
                'name' => 'SAN FRANCISCO DE ASIS',
                'province_id' => '96',
            ],
            [
                'name' => 'QUEROPALCA',
                'province_id' => '96',
            ],
            [
                'name' => 'SAN MIGUEL DE CAURI',
                'province_id' => '96',
            ],
            [
                'name' => 'RONDOS',
                'province_id' => '96',
            ],
            [
                'name' => 'JIVIA',
                'province_id' => '96',
            ],
            [
                'name' => 'CHAVINILLO',
                'province_id' => '97',
            ],
            [
                'name' => 'APARICIO POMARES (CHUPAN)',
                'province_id' => '97',
            ],
            [
                'name' => 'CAHUAC',
                'province_id' => '97',
            ],
            [
                'name' => 'CHACABAMBA',
                'province_id' => '97',
            ],
            [
                'name' => 'JACAS CHICO',
                'province_id' => '97',
            ],
            [
                'name' => 'OBAS',
                'province_id' => '97',
            ],
            [
                'name' => 'PAMPAMARCA',
                'province_id' => '97',
            ],
            [
                'name' => 'CHORAS ',
                'province_id' => '97',
            ],
            [
                'name' => 'ICA',
                'province_id' => '98',
            ],
            [
                'name' => 'LA TINGUINA',
                'province_id' => '98',
            ],
            [
                'name' => 'LOS AQUIJES',
                'province_id' => '98',
            ],
            [
                'name' => 'PARCONA',
                'province_id' => '98',
            ],
            [
                'name' => 'PUEBLO NUEVO',
                'province_id' => '98',
            ],
            [
                'name' => 'SALAS',
                'province_id' => '98',
            ],
            [
                'name' => 'SAN JOSE DE LOS MOLINOS',
                'province_id' => '98',
            ],
            [
                'name' => 'SAN JUAN BAUTISTA',
                'province_id' => '98',
            ],
            [
                'name' => 'SANTIAGO',
                'province_id' => '98',
            ],
            [
                'name' => 'SUBTANJALLA',
                'province_id' => '98',
            ],
            [
                'name' => 'YAUCA DEL ROSARIO',
                'province_id' => '98',
            ],
            [
                'name' => 'TATE',
                'province_id' => '98',
            ],
            [
                'name' => 'PACHACUTEC',
                'province_id' => '98',
            ],
            [
                'name' => 'OCUCAJE',
                'province_id' => '98',
            ],
            [
                'name' => 'CHINCHA ALTA',
                'province_id' => '99',
            ],
            [
                'name' => 'CHAVIN',
                'province_id' => '99',
            ],
            [
                'name' => 'CHINCHA BAJA',
                'province_id' => '99',
            ],
            [
                'name' => 'EL CARMEN',
                'province_id' => '99',
            ],
            [
                'name' => 'GROCIO PRADO',
                'province_id' => '99',
            ],
            [
                'name' => 'SAN PEDRO DE HUACARPANA',
                'province_id' => '99',
            ],
            [
                'name' => 'SUNAMPE',
                'province_id' => '99',
            ],
            [
                'name' => 'TAMBO DE MORA',
                'province_id' => '99',
            ],
            [
                'name' => 'ALTO LARAN',
                'province_id' => '99',
            ],
            [
                'name' => 'PUEBLO NUEVO',
                'province_id' => '99',
            ],
            [
                'name' => 'SAN JUAN DE YANAC',
                'province_id' => '99',
            ],
            [
                'name' => 'NAZCA',
                'province_id' => '100',
            ],
            [
                'name' => 'CHANGUILLO',
                'province_id' => '100',
            ],
            [
                'name' => 'EL INGENIO',
                'province_id' => '100',
            ],
            [
                'name' => 'MARCONA',
                'province_id' => '100',
            ],
            [
                'name' => 'VISTA ALEGRE',
                'province_id' => '100',
            ],
            [
                'name' => 'PISCO',
                'province_id' => '101',
            ],
            [
                'name' => 'HUANCANO',
                'province_id' => '101',
            ],
            [
                'name' => 'HUMAY',
                'province_id' => '101',
            ],
            [
                'name' => 'INDEPENDENCIA',
                'province_id' => '101',
            ],
            [
                'name' => 'PARACAS',
                'province_id' => '101',
            ],
            [
                'name' => 'SAN ANDRES',
                'province_id' => '101',
            ],
            [
                'name' => 'SAN CLEMENTE',
                'province_id' => '101',
            ],
            [
                'name' => 'TUPAC AMARU INCA',
                'province_id' => '101',
            ],
            [
                'name' => 'PALPA',
                'province_id' => '102',
            ],
            [
                'name' => 'LLIPATA',
                'province_id' => '102',
            ],
            [
                'name' => 'RIO GRANDE',
                'province_id' => '102',
            ],
            [
                'name' => 'SANTA CRUZ',
                'province_id' => '102',
            ],
            [
                'name' => 'TIBILLO',
                'province_id' => '102',
            ],
            [
                'name' => 'HUANCAYO',
                'province_id' => '103',
            ],
            [
                'name' => 'CARHUACALLANGA',
                'province_id' => '103',
            ],
            [
                'name' => 'COLCA',
                'province_id' => '103',
            ],
            [
                'name' => 'CULLHUAS',
                'province_id' => '103',
            ],
            [
                'name' => 'CHACAPAMPA',
                'province_id' => '103',
            ],
            [
                'name' => 'CHICCHE',
                'province_id' => '103',
            ],
            [
                'name' => 'CHILCA',
                'province_id' => '103',
            ],
            [
                'name' => 'CHONGOS ALTO',
                'province_id' => '103',
            ],
            [
                'name' => 'CHUPURO',
                'province_id' => '103',
            ],
            [
                'name' => 'EL TAMBO',
                'province_id' => '103',
            ],
            [
                'name' => 'HUACRAPUQUIO',
                'province_id' => '103',
            ],
            [
                'name' => 'HUALHUAS',
                'province_id' => '103',
            ],
            [
                'name' => 'HUANCAN',
                'province_id' => '103',
            ],
            [
                'name' => 'HUASICANCHA',
                'province_id' => '103',
            ],
            [
                'name' => 'HUAYUCACHI',
                'province_id' => '103',
            ],
            [
                'name' => 'INGENIO',
                'province_id' => '103',
            ],
            [
                'name' => 'PARIAHUANCA',
                'province_id' => '103',
            ],
            [
                'name' => 'PILCOMAYO',
                'province_id' => '103',
            ],
            [
                'name' => 'PUCARA',
                'province_id' => '103',
            ],
            [
                'name' => 'QUICHUAY',
                'province_id' => '103',
            ],
            [
                'name' => 'QUILCAS',
                'province_id' => '103',
            ],
            [
                'name' => 'SAN AGUSTIN',
                'province_id' => '103',
            ],
            [
                'name' => 'SAN JERONIMO DE TUNAN',
                'province_id' => '103',
            ],
            [
                'name' => 'STO DOMINGO DE ACOBAMBA',
                'province_id' => '103',
            ],
            [
                'name' => 'SANO',
                'province_id' => '103',
            ],
            [
                'name' => 'SAPALLANGA',
                'province_id' => '103',
            ],
            [
                'name' => 'SICAYA',
                'province_id' => '103',
            ],
            [
                'name' => 'VIQUES',
                'province_id' => '103',
            ],
            [
                'name' => 'CONCEPCION',
                'province_id' => '104',
            ],
            [
                'name' => 'ACO',
                'province_id' => '104',
            ],
            [
                'name' => 'ANDAMARCA',
                'province_id' => '104',
            ],
            [
                'name' => 'COMAS',
                'province_id' => '104',
            ],
            [
                'name' => 'COCHAS',
                'province_id' => '104',
            ],
            [
                'name' => 'CHAMBARA',
                'province_id' => '104',
            ],
            [
                'name' => 'HEROINAS TOLEDO',
                'province_id' => '104',
            ],
            [
                'name' => 'MANZANARES',
                'province_id' => '104',
            ],
            [
                'name' => 'MCAL CASTILLA',
                'province_id' => '104',
            ],
            [
                'name' => 'MATAHUASI',
                'province_id' => '104',
            ],
            [
                'name' => 'MITO',
                'province_id' => '104',
            ],
            [
                'name' => 'NUEVE DE JULIO',
                'province_id' => '104',
            ],
            [
                'name' => 'ORCOTUNA',
                'province_id' => '104',
            ],
            [
                'name' => 'STA ROSA DE OCOPA',
                'province_id' => '104',
            ],
            [
                'name' => 'SAN JOSE DE QUERO',
                'province_id' => '104',
            ],
            [
                'name' => 'JAUJA',
                'province_id' => '105',
            ],
            [
                'name' => 'ACOLLA',
                'province_id' => '105',
            ],
            [
                'name' => 'APATA',
                'province_id' => '105',
            ],
            [
                'name' => 'ATAURA',
                'province_id' => '105',
            ],
            [
                'name' => 'CANCHAILLO',
                'province_id' => '105',
            ],
            [
                'name' => 'EL MANTARO',
                'province_id' => '105',
            ],
            [
                'name' => 'HUAMALI',
                'province_id' => '105',
            ],
            [
                'name' => 'HUARIPAMPA',
                'province_id' => '105',
            ],
            [
                'name' => 'HUERTAS',
                'province_id' => '105',
            ],
            [
                'name' => 'JANJAILLO',
                'province_id' => '105',
            ],
            [
                'name' => 'JULCAN',
                'province_id' => '105',
            ],
            [
                'name' => 'LEONOR ORDONEZ',
                'province_id' => '105',
            ],
            [
                'name' => 'LLOCLLAPAMPA',
                'province_id' => '105',
            ],
            [
                'name' => 'MARCO',
                'province_id' => '105',
            ],
            [
                'name' => 'MASMA',
                'province_id' => '105',
            ],
            [
                'name' => 'MOLINOS',
                'province_id' => '105',
            ],
            [
                'name' => 'MONOBAMBA',
                'province_id' => '105',
            ],
            [
                'name' => 'MUQUI',
                'province_id' => '105',
            ],
            [
                'name' => 'MUQUIYAUYO',
                'province_id' => '105',
            ],
            [
                'name' => 'PACA',
                'province_id' => '105',
            ],
            [
                'name' => 'PACCHA',
                'province_id' => '105',
            ],
            [
                'name' => 'PANCAN',
                'province_id' => '105',
            ],
            [
                'name' => 'PARCO',
                'province_id' => '105',
            ],
            [
                'name' => 'POMACANCHA',
                'province_id' => '105',
            ],
            [
                'name' => 'RICRAN',
                'province_id' => '105',
            ],
            [
                'name' => 'SAN LORENZO',
                'province_id' => '105',
            ],
            [
                'name' => 'SAN PEDRO DE CHUNAN',
                'province_id' => '105',
            ],
            [
                'name' => 'SINCOS',
                'province_id' => '105',
            ],
            [
                'name' => 'TUNAN MARCA',
                'province_id' => '105',
            ],
            [
                'name' => 'YAULI',
                'province_id' => '105',
            ],
            [
                'name' => 'CURICACA',
                'province_id' => '105',
            ],
            [
                'name' => 'MASMA CHICCHE',
                'province_id' => '105',
            ],
            [
                'name' => 'SAUSA',
                'province_id' => '105',
            ],
            [
                'name' => 'YAUYOS',
                'province_id' => '105',
            ],
            [
                'name' => 'JUNIN',
                'province_id' => '106',
            ],
            [
                'name' => 'CARHUAMAYO',
                'province_id' => '106',
            ],
            [
                'name' => 'ONDORES',
                'province_id' => '106',
            ],
            [
                'name' => 'ULCUMAYO',
                'province_id' => '106',
            ],
            [
                'name' => 'TARMA',
                'province_id' => '107',
            ],
            [
                'name' => 'ACOBAMBA',
                'province_id' => '107',
            ],
            [
                'name' => 'HUARICOLCA',
                'province_id' => '107',
            ],
            [
                'name' => 'HUASAHUASI',
                'province_id' => '107',
            ],
            [
                'name' => 'LA UNION',
                'province_id' => '107',
            ],
            [
                'name' => 'PALCA',
                'province_id' => '107',
            ],
            [
                'name' => 'PALCAMAYO',
                'province_id' => '107',
            ],
            [
                'name' => 'SAN PEDRO DE CAJAS',
                'province_id' => '107',
            ],
            [
                'name' => 'TAPO',
                'province_id' => '107',
            ],
            [
                'name' => 'LA OROYA',
                'province_id' => '108',
            ],
            [
                'name' => 'CHACAPALPA',
                'province_id' => '108',
            ],
            [
                'name' => 'HUAY HUAY',
                'province_id' => '108',
            ],
            [
                'name' => 'MARCAPOMACOCHA',
                'province_id' => '108',
            ],
            [
                'name' => 'MOROCOCHA',
                'province_id' => '108',
            ],
            [
                'name' => 'PACCHA',
                'province_id' => '108',
            ],
            [
                'name' => 'STA BARBARA DE CARHUACAYAN',
                'province_id' => '108',
            ],
            [
                'name' => 'SUITUCANCHA',
                'province_id' => '108',
            ],
            [
                'name' => 'YAULI',
                'province_id' => '108',
            ],
            [
                'name' => 'STA ROSA DE SACCO',
                'province_id' => '108',
            ],
            [
                'name' => 'SATIPO',
                'province_id' => '109',
            ],
            [
                'name' => 'COVIRIALI',
                'province_id' => '109',
            ],
            [
                'name' => 'LLAYLLA',
                'province_id' => '109',
            ],
            [
                'name' => 'MAZAMARI',
                'province_id' => '109',
            ],
            [
                'name' => 'PAMPA HERMOSA',
                'province_id' => '109',
            ],
            [
                'name' => 'PANGOA',
                'province_id' => '109',
            ],
            [
                'name' => 'RIO NEGRO',
                'province_id' => '109',
            ],
            [
                'name' => 'RIO TAMBO',
                'province_id' => '109',
            ],
            [
                'name' => 'CHANCHAMAYO',
                'province_id' => '110',
            ],
            [
                'name' => 'SAN RAMON',
                'province_id' => '110',
            ],
            [
                'name' => 'VITOC',
                'province_id' => '110',
            ],
            [
                'name' => 'SAN LUIS DE SHUARO',
                'province_id' => '110',
            ],
            [
                'name' => 'PICHANAQUI',
                'province_id' => '110',
            ],
            [
                'name' => 'PERENE',
                'province_id' => '110',
            ],
            [
                'name' => 'CHUPACA',
                'province_id' => '111',
            ],
            [
                'name' => 'AHUAC',
                'province_id' => '111',
            ],
            [
                'name' => 'CHONGOS BAJO',
                'province_id' => '111',
            ],
            [
                'name' => 'HUACHAC',
                'province_id' => '111',
            ],
            [
                'name' => 'HUAMANCACA CHICO',
                'province_id' => '111',
            ],
            [
                'name' => 'SAN JUAN DE ISCOS',
                'province_id' => '111',
            ],
            [
                'name' => 'SAN JUAN DE JARPA',
                'province_id' => '111',
            ],
            [
                'name' => 'TRES DE DICIEMBRE',
                'province_id' => '111',
            ],
            [
                'name' => 'YANACANCHA',
                'province_id' => '111',
            ],
            [
                'name' => 'TRUJILLO',
                'province_id' => '112',
            ],
            [
                'name' => 'HUANCHACO',
                'province_id' => '112',
            ],
            [
                'name' => 'LAREDO',
                'province_id' => '112',
            ],
            [
                'name' => 'MOCHE',
                'province_id' => '112',
            ],
            [
                'name' => 'SALAVERRY',
                'province_id' => '112',
            ],
            [
                'name' => 'SIMBAL',
                'province_id' => '112',
            ],
            [
                'name' => 'VICTOR LARCO HERRERA',
                'province_id' => '112',
            ],
            [
                'name' => 'POROTO',
                'province_id' => '112',
            ],
            [
                'name' => 'EL PORVENIR',
                'province_id' => '112',
            ],
            [
                'name' => 'LA ESPERANZA',
                'province_id' => '112',
            ],
            [
                'name' => 'FLORENCIA DE MORA',
                'province_id' => '112',
            ],
            [
                'name' => 'BOLIVAR',
                'province_id' => '113',
            ],
            [
                'name' => 'BAMBAMARCA',
                'province_id' => '113',
            ],
            [
                'name' => 'CONDORMARCA',
                'province_id' => '113',
            ],
            [
                'name' => 'LONGOTEA',
                'province_id' => '113',
            ],
            [
                'name' => 'UCUNCHA',
                'province_id' => '113',
            ],
            [
                'name' => 'UCHUMARCA',
                'province_id' => '113',
            ],
            [
                'name' => 'HUAMACHUCO',
                'province_id' => '114',
            ],
            [
                'name' => 'COCHORCO',
                'province_id' => '114',
            ],
            [
                'name' => 'CURGOS',
                'province_id' => '114',
            ],
            [
                'name' => 'CHUGAY',
                'province_id' => '114',
            ],
            [
                'name' => 'MARCABAL',
                'province_id' => '114',
            ],
            [
                'name' => 'SANAGORAN',
                'province_id' => '114',
            ],
            [
                'name' => 'SARIN',
                'province_id' => '114',
            ],
            [
                'name' => 'SARTIMBAMBA',
                'province_id' => '114',
            ],
            [
                'name' => 'OTUZCO',
                'province_id' => '115',
            ],
            [
                'name' => 'AGALLPAMPA',
                'province_id' => '115',
            ],
            [
                'name' => 'CHARAT',
                'province_id' => '115',
            ],
            [
                'name' => 'HUARANCHAL',
                'province_id' => '115',
            ],
            [
                'name' => 'LA CUESTA',
                'province_id' => '115',
            ],
            [
                'name' => 'PARANDAY',
                'province_id' => '115',
            ],
            [
                'name' => 'SALPO',
                'province_id' => '115',
            ],
            [
                'name' => 'SINSICAP',
                'province_id' => '115',
            ],
            [
                'name' => 'USQUIL',
                'province_id' => '115',
            ],
            [
                'name' => 'MACHE',
                'province_id' => '115',
            ],
            [
                'name' => 'SAN PEDRO DE LLOC',
                'province_id' => '116',
            ],
            [
                'name' => 'GUADALUPE',
                'province_id' => '116',
            ],
            [
                'name' => 'JEQUETEPEQUE',
                'province_id' => '116',
            ],
            [
                'name' => 'PACASMAYO',
                'province_id' => '116',
            ],
            [
                'name' => 'SAN JOSE',
                'province_id' => '116',
            ],
            [
                'name' => 'TAYABAMBA',
                'province_id' => '117',
            ],
            [
                'name' => 'BULDIBUYO',
                'province_id' => '117',
            ],
            [
                'name' => 'CHILLIA',
                'province_id' => '117',
            ],
            [
                'name' => 'HUAYLILLAS',
                'province_id' => '117',
            ],
            [
                'name' => 'HUANCASPATA',
                'province_id' => '117',
            ],
            [
                'name' => 'HUAYO',
                'province_id' => '117',
            ],
            [
                'name' => 'ONGON',
                'province_id' => '117',
            ],
            [
                'name' => 'PARCOY',
                'province_id' => '117',
            ],
            [
                'name' => 'PATAZ',
                'province_id' => '117',
            ],
            [
                'name' => 'PIAS',
                'province_id' => '117',
            ],
            [
                'name' => 'TAURIJA',
                'province_id' => '117',
            ],
            [
                'name' => 'URPAY',
                'province_id' => '117',
            ],
            [
                'name' => 'SANTIAGO DE CHALLAS',
                'province_id' => '117',
            ],
            [
                'name' => 'SANTIAGO DE CHUCO',
                'province_id' => '118',
            ],
            [
                'name' => 'CACHICADAN',
                'province_id' => '118',
            ],
            [
                'name' => 'MOLLEBAMBA',
                'province_id' => '118',
            ],
            [
                'name' => 'MOLLEPATA',
                'province_id' => '118',
            ],
            [
                'name' => 'QUIRUVILCA',
                'province_id' => '118',
            ],
            [
                'name' => 'SANTA CRUZ DE CHUCA',
                'province_id' => '118',
            ],
            [
                'name' => 'SITABAMBA',
                'province_id' => '118',
            ],
            [
                'name' => 'ANGASMARCA',
                'province_id' => '118',
            ],
            [
                'name' => 'ASCOPE',
                'province_id' => '119',
            ],
            [
                'name' => 'CHICAMA',
                'province_id' => '119',
            ],
            [
                'name' => 'CHOCOPE',
                'province_id' => '119',
            ],
            [
                'name' => 'SANTIAGO DE CAO',
                'province_id' => '119',
            ],
            [
                'name' => 'MAGDALENA DE CAO',
                'province_id' => '119',
            ],
            [
                'name' => 'PAIJAN',
                'province_id' => '119',
            ],
            [
                'name' => 'RAZURI',
                'province_id' => '119',
            ],
            [
                'name' => 'CASA GRANDE',
                'province_id' => '119',
            ],
            [
                'name' => 'CHEPEN',
                'province_id' => '120',
            ],
            [
                'name' => 'PACANGA',
                'province_id' => '120',
            ],
            [
                'name' => 'PUEBLO NUEVO',
                'province_id' => '120',
            ],
            [
                'name' => 'JULCAN',
                'province_id' => '121',
            ],
            [
                'name' => 'CARABAMBA',
                'province_id' => '121',
            ],
            [
                'name' => 'CALAMARCA',
                'province_id' => '121',
            ],
            [
                'name' => 'HUASO',
                'province_id' => '121',
            ],
            [
                'name' => 'CASCAS',
                'province_id' => '122',
            ],
            [
                'name' => 'LUCMA',
                'province_id' => '122',
            ],
            [
                'name' => 'MARMOT',
                'province_id' => '122',
            ],
            [
                'name' => 'SAYAPULLO',
                'province_id' => '122',
            ],
            [
                'name' => 'VIRU',
                'province_id' => '123',
            ],
            [
                'name' => 'CHAO',
                'province_id' => '123',
            ],
            [
                'name' => 'GUADALUPITO',
                'province_id' => '123',
            ],
            [
                'name' => 'CHICLAYO',
                'province_id' => '124',
            ],
            [
                'name' => 'CHONGOYAPE',
                'province_id' => '124',
            ],
            [
                'name' => 'ETEN',
                'province_id' => '124',
            ],
            [
                'name' => 'ETEN PUERTO',
                'province_id' => '124',
            ],
            [
                'name' => 'LAGUNAS',
                'province_id' => '124',
            ],
            [
                'name' => 'MONSEFU',
                'province_id' => '124',
            ],
            [
                'name' => 'NUEVA ARICA',
                'province_id' => '124',
            ],
            [
                'name' => 'OYOTUN',
                'province_id' => '124',
            ],
            [
                'name' => 'PICSI',
                'province_id' => '124',
            ],
            [
                'name' => 'PIMENTEL',
                'province_id' => '124',
            ],
            [
                'name' => 'REQUE',
                'province_id' => '124',
            ],
            [
                'name' => 'JOSE LEONARDO ORTIZ',
                'province_id' => '124',
            ],
            [
                'name' => 'SANTA ROSA',
                'province_id' => '124',
            ],
            [
                'name' => 'SANA',
                'province_id' => '124',
            ],
            [
                'name' => 'LA VICTORIA',
                'province_id' => '124',
            ],
            [
                'name' => 'CAYALTI',
                'province_id' => '124',
            ],
            [
                'name' => 'PATAPO',
                'province_id' => '124',
            ],
            [
                'name' => 'POMALCA',
                'province_id' => '124',
            ],
            [
                'name' => 'PUCALA',
                'province_id' => '124',
            ],
            [
                'name' => 'TUMAN',
                'province_id' => '124',
            ],
            [
                'name' => 'FERRENAFE',
                'province_id' => '125',
            ],
            [
                'name' => 'INCAHUASI',
                'province_id' => '125',
            ],
            [
                'name' => 'CANARIS',
                'province_id' => '125',
            ],
            [
                'name' => 'PITIPO',
                'province_id' => '125',
            ],
            [
                'name' => 'PUEBLO NUEVO',
                'province_id' => '125',
            ],
            [
                'name' => 'MANUEL ANTONIO MESONES MURO',
                'province_id' => '125',
            ],
            [
                'name' => 'LAMBAYEQUE',
                'province_id' => '126',
            ],
            [
                'name' => 'CHOCHOPE',
                'province_id' => '126',
            ],
            [
                'name' => 'ILLIMO',
                'province_id' => '126',
            ],
            [
                'name' => 'JAYANCA',
                'province_id' => '126',
            ],
            [
                'name' => 'MOCHUMI',
                'province_id' => '126',
            ],
            [
                'name' => 'MORROPE',
                'province_id' => '126',
            ],
            [
                'name' => 'MOTUPE',
                'province_id' => '126',
            ],
            [
                'name' => 'OLMOS',
                'province_id' => '126',
            ],
            [
                'name' => 'PACORA',
                'province_id' => '126',
            ],
            [
                'name' => 'SALAS',
                'province_id' => '126',
            ],
            [
                'name' => 'SAN JOSE',
                'province_id' => '126',
            ],
            [
                'name' => 'TUCUME',
                'province_id' => '126',
            ],
            [
                'name' => 'LIMA',
                'province_id' => '127',
            ],
            [
                'name' => 'ANCON',
                'province_id' => '127',
            ],
            [
                'name' => 'ATE',
                'province_id' => '127',
            ],
            [
                'name' => 'BRENA',
                'province_id' => '127',
            ],
            [
                'name' => 'CARABAYLLO',
                'province_id' => '127',
            ],
            [
                'name' => 'COMAS',
                'province_id' => '127',
            ],
            [
                'name' => 'CHACLACAYO',
                'province_id' => '127',
            ],
            [
                'name' => 'CHORRILLOS',
                'province_id' => '127',
            ],
            [
                'name' => 'LA VICTORIA',
                'province_id' => '127',
            ],
            [
                'name' => 'LA MOLINA',
                'province_id' => '127',
            ],
            [
                'name' => 'LINCE',
                'province_id' => '127',
            ],
            [
                'name' => 'LURIGANCHO',
                'province_id' => '127',
            ],
            [
                'name' => 'LURIN',
                'province_id' => '127',
            ],
            [
                'name' => 'MAGDALENA DEL MAR',
                'province_id' => '127',
            ],
            [
                'name' => 'MIRAFLORES',
                'province_id' => '127',
            ],
            [
                'name' => 'PACHACAMAC',
                'province_id' => '127',
            ],
            [
                'name' => 'PUEBLO LIBRE',
                'province_id' => '127',
            ],
            [
                'name' => 'PUCUSANA',
                'province_id' => '127',
            ],
            [
                'name' => 'PUENTE PIEDRA',
                'province_id' => '127',
            ],
            [
                'name' => 'PUNTA HERMOSA',
                'province_id' => '127',
            ],
            [
                'name' => 'PUNTA NEGRA',
                'province_id' => '127',
            ],
            [
                'name' => 'RIMAC',
                'province_id' => '127',
            ],
            [
                'name' => 'SAN BARTOLO',
                'province_id' => '127',
            ],
            [
                'name' => 'SAN ISIDRO',
                'province_id' => '127',
            ],
            [
                'name' => 'BARRANCO',
                'province_id' => '127',
            ],
            [
                'name' => 'SAN MARTIN DE PORRES',
                'province_id' => '127',
            ],
            [
                'name' => 'SAN MIGUEL',
                'province_id' => '127',
            ],
            [
                'name' => 'STA MARIA DEL MAR',
                'province_id' => '127',
            ],
            [
                'name' => 'SANTA ROSA',
                'province_id' => '127',
            ],
            [
                'name' => 'SANTIAGO DE SURCO',
                'province_id' => '127',
            ],
            [
                'name' => 'SURQUILLO',
                'province_id' => '127',
            ],
            [
                'name' => 'VILLA MARIA DEL TRIUNFO',
                'province_id' => '127',
            ],
            [
                'name' => 'JESUS MARIA',
                'province_id' => '127',
            ],
            [
                'name' => 'INDEPENDENCIA',
                'province_id' => '127',
            ],
            [
                'name' => 'EL AGUSTINO',
                'province_id' => '127',
            ],
            [
                'name' => 'SAN JUAN DE MIRAFLORES',
                'province_id' => '127',
            ],
            [
                'name' => 'SAN JUAN DE LURIGANCHO',
                'province_id' => '127',
            ],
            [
                'name' => 'SAN LUIS',
                'province_id' => '127',
            ],
            [
                'name' => 'CIENEGUILLA',
                'province_id' => '127',
            ],
            [
                'name' => 'SAN BORJA',
                'province_id' => '127',
            ],
            [
                'name' => 'VILLA EL SALVADOR',
                'province_id' => '127',
            ],
            [
                'name' => 'LOS OLIVOS',
                'province_id' => '127',
            ],
            [
                'name' => 'SANTA ANITA',
                'province_id' => '127',
            ],
            [
                'name' => 'CAJATAMBO',
                'province_id' => '128',
            ],
            [
                'name' => 'COPA',
                'province_id' => '128',
            ],
            [
                'name' => 'GORGOR',
                'province_id' => '128',
            ],
            [
                'name' => 'HUANCAPON',
                'province_id' => '128',
            ],
            [
                'name' => 'MANAS',
                'province_id' => '128',
            ],
            [
                'name' => 'CANTA',
                'province_id' => '129',
            ],
            [
                'name' => 'ARAHUAY',
                'province_id' => '129',
            ],
            [
                'name' => 'HUAMANTANGA',
                'province_id' => '129',
            ],
            [
                'name' => 'HUAROS',
                'province_id' => '129',
            ],
            [
                'name' => 'LACHAQUI',
                'province_id' => '129',
            ],
            [
                'name' => 'SAN BUENAVENTURA',
                'province_id' => '129',
            ],
            [
                'name' => 'SANTA ROSA DE QUIVES',
                'province_id' => '129',
            ],
            [
                'name' => 'SAN VICENTE DE CANETE',
                'province_id' => '130',
            ],
            [
                'name' => 'CALANGO',
                'province_id' => '130',
            ],
            [
                'name' => 'CERRO AZUL',
                'province_id' => '130',
            ],
            [
                'name' => 'COAYLLO',
                'province_id' => '130',
            ],
            [
                'name' => 'CHILCA',
                'province_id' => '130',
            ],
            [
                'name' => 'IMPERIAL',
                'province_id' => '130',
            ],
            [
                'name' => 'LUNAHUANA',
                'province_id' => '130',
            ],
            [
                'name' => 'MALA',
                'province_id' => '130',
            ],
            [
                'name' => 'NUEVO IMPERIAL',
                'province_id' => '130',
            ],
            [
                'name' => 'PACARAN',
                'province_id' => '130',
            ],
            [
                'name' => 'QUILMANA',
                'province_id' => '130',
            ],
            [
                'name' => 'SAN ANTONIO',
                'province_id' => '130',
            ],
            [
                'name' => 'SAN LUIS',
                'province_id' => '130',
            ],
            [
                'name' => 'SANTA CRUZ DE FLORES',
                'province_id' => '130',
            ],
            [
                'name' => 'ZUNIGA',
                'province_id' => '130',
            ],
            [
                'name' => 'ASIA',
                'province_id' => '130',
            ],
            [
                'name' => 'HUACHO',
                'province_id' => '131',
            ],
            [
                'name' => 'AMBAR',
                'province_id' => '131',
            ],
            [
                'name' => 'CALETA DE CARQUIN',
                'province_id' => '131',
            ],
            [
                'name' => 'CHECRAS',
                'province_id' => '131',
            ],
            [
                'name' => 'HUALMAY',
                'province_id' => '131',
            ],
            [
                'name' => 'HUAURA',
                'province_id' => '131',
            ],
            [
                'name' => 'LEONCIO PRADO',
                'province_id' => '131',
            ],
            [
                'name' => 'PACCHO',
                'province_id' => '131',
            ],
            [
                'name' => 'SANTA LEONOR',
                'province_id' => '131',
            ],
            [
                'name' => 'SANTA MARIA',
                'province_id' => '131',
            ],
            [
                'name' => 'SAYAN',
                'province_id' => '131',
            ],
            [
                'name' => 'VEGUETA',
                'province_id' => '131',
            ],
            [
                'name' => 'MATUCANA',
                'province_id' => '132',
            ],
            [
                'name' => 'ANTIOQUIA',
                'province_id' => '132',
            ],
            [
                'name' => 'CALLAHUANCA',
                'province_id' => '132',
            ],
            [
                'name' => 'CARAMPOMA',
                'province_id' => '132',
            ],
            [
                'name' => 'CASTA',
                'province_id' => '132',
            ],
            [
                'name' => 'CUENCA',
                'province_id' => '132',
            ],
            [
                'name' => 'CHICLA',
                'province_id' => '132',
            ],
            [
                'name' => 'HUANZA',
                'province_id' => '132',
            ],
            [
                'name' => 'HUAROCHIRI',
                'province_id' => '132',
            ],
            [
                'name' => 'LAHUAYTAMBO',
                'province_id' => '132',
            ],
            [
                'name' => 'LANGA',
                'province_id' => '132',
            ],
            [
                'name' => 'MARIATANA',
                'province_id' => '132',
            ],
            [
                'name' => 'RICARDO PALMA',
                'province_id' => '132',
            ],
            [
                'name' => 'SAN ANDRES DE TUPICOCHA',
                'province_id' => '132',
            ],
            [
                'name' => 'SAN ANTONIO',
                'province_id' => '132',
            ],
            [
                'name' => 'SAN BARTOLOME',
                'province_id' => '132',
            ],
            [
                'name' => 'SAN DAMIAN',
                'province_id' => '132',
            ],
            [
                'name' => 'SANGALLAYA',
                'province_id' => '132',
            ],
            [
                'name' => 'SAN JUAN DE TANTARANCHE',
                'province_id' => '132',
            ],
            [
                'name' => 'SAN LORENZO DE QUINTI',
                'province_id' => '132',
            ],
            [
                'name' => 'SAN MATEO',
                'province_id' => '132',
            ],
            [
                'name' => 'SAN MATEO DE OTAO',
                'province_id' => '132',
            ],
            [
                'name' => 'SAN PEDRO DE HUANCAYRE',
                'province_id' => '132',
            ],
            [
                'name' => 'SANTA CRUZ DE COCACHACRA',
                'province_id' => '132',
            ],
            [
                'name' => 'SANTA EULALIA',
                'province_id' => '132',
            ],
            [
                'name' => 'SANTIAGO DE ANCHUCAYA',
                'province_id' => '132',
            ],
            [
                'name' => 'SANTIAGO DE TUNA',
                'province_id' => '132',
            ],
            [
                'name' => 'SANTO DOMINGO DE LOS OLLEROS',
                'province_id' => '132',
            ],
            [
                'name' => 'SURCO',
                'province_id' => '132',
            ],
            [
                'name' => 'HUACHUPAMPA',
                'province_id' => '132',
            ],
            [
                'name' => 'LARAOS',
                'province_id' => '132',
            ],
            [
                'name' => 'SAN JUAN DE IRIS',
                'province_id' => '132',
            ],
            [
                'name' => 'YAUYOS',
                'province_id' => '133',
            ],
            [
                'name' => 'ALIS',
                'province_id' => '133',
            ],
            [
                'name' => 'AYAUCA',
                'province_id' => '133',
            ],
            [
                'name' => 'AYAVIRI',
                'province_id' => '133',
            ],
            [
                'name' => 'AZANGARO',
                'province_id' => '133',
            ],
            [
                'name' => 'CACRA',
                'province_id' => '133',
            ],
            [
                'name' => 'CARANIA',
                'province_id' => '133',
            ],
            [
                'name' => 'COCHAS',
                'province_id' => '133',
            ],
            [
                'name' => 'COLONIA',
                'province_id' => '133',
            ],
            [
                'name' => 'CHOCOS',
                'province_id' => '133',
            ],
            [
                'name' => 'HUAMPARA',
                'province_id' => '133',
            ],
            [
                'name' => 'HUANCAYA',
                'province_id' => '133',
            ],
            [
                'name' => 'HUANGASCAR',
                'province_id' => '133',
            ],
            [
                'name' => 'HUANTAN',
                'province_id' => '133',
            ],
            [
                'name' => 'HUANEC',
                'province_id' => '133',
            ],
            [
                'name' => 'LARAOS',
                'province_id' => '133',
            ],
            [
                'name' => 'LINCHA',
                'province_id' => '133',
            ],
            [
                'name' => 'MIRAFLORES',
                'province_id' => '133',
            ],
            [
                'name' => 'OMAS',
                'province_id' => '133',
            ],
            [
                'name' => 'QUINCHES',
                'province_id' => '133',
            ],
            [
                'name' => 'QUINOCAY',
                'province_id' => '133',
            ],
            [
                'name' => 'SAN JOAQUIN',
                'province_id' => '133',
            ],
            [
                'name' => 'SAN PEDRO DE PILAS',
                'province_id' => '133',
            ],
            [
                'name' => 'TANTA',
                'province_id' => '133',
            ],
            [
                'name' => 'TAURIPAMPA',
                'province_id' => '133',
            ],
            [
                'name' => 'TUPE',
                'province_id' => '133',
            ],
            [
                'name' => 'TOMAS',
                'province_id' => '133',
            ],
            [
                'name' => 'VINAC',
                'province_id' => '133',
            ],
            [
                'name' => 'VITIS',
                'province_id' => '133',
            ],
            [
                'name' => 'HONGOS',
                'province_id' => '133',
            ],
            [
                'name' => 'MADEAN',
                'province_id' => '133',
            ],
            [
                'name' => 'PUTINZA',
                'province_id' => '133',
            ],
            [
                'name' => 'CATAHUASI',
                'province_id' => '133',
            ],
            [
                'name' => 'HUARAL',
                'province_id' => '134',
            ],
            [
                'name' => 'ATAVILLOS ALTO',
                'province_id' => '134',
            ],
            [
                'name' => 'ATAVILLOS BAJO',
                'province_id' => '134',
            ],
            [
                'name' => 'AUCALLAMA',
                'province_id' => '134',
            ],
            [
                'name' => 'CHANCAY',
                'province_id' => '134',
            ],
            [
                'name' => 'IHUARI',
                'province_id' => '134',
            ],
            [
                'name' => 'LAMPIAN',
                'province_id' => '134',
            ],
            [
                'name' => 'PACARAOS',
                'province_id' => '134',
            ],
            [
                'name' => 'SAN MIGUEL DE ACOS',
                'province_id' => '134',
            ],
            [
                'name' => 'VEINTISIETE DE NOVIEMBRE',
                'province_id' => '134',
            ],
            [
                'name' => 'STA CRUZ DE ANDAMARCA',
                'province_id' => '134',
            ],
            [
                'name' => 'SUMBILCA',
                'province_id' => '134',
            ],
            [
                'name' => 'BARRANCA',
                'province_id' => '135',
            ],
            [
                'name' => 'PARAMONGA',
                'province_id' => '135',
            ],
            [
                'name' => 'PATIVILCA',
                'province_id' => '135',
            ],
            [
                'name' => 'SUPE',
                'province_id' => '135',
            ],
            [
                'name' => 'SUPE PUERTO',
                'province_id' => '135',
            ],
            [
                'name' => 'OYON',
                'province_id' => '136',
            ],
            [
                'name' => 'NAVAN',
                'province_id' => '136',
            ],
            [
                'name' => 'CAUJUL',
                'province_id' => '136',
            ],
            [
                'name' => 'ANDAJES',
                'province_id' => '136',
            ],
            [
                'name' => 'PACHANGARA',
                'province_id' => '136',
            ],
            [
                'name' => 'COCHAMARCA',
                'province_id' => '136',
            ],
            [
                'name' => 'IQUITOS',
                'province_id' => '137',
            ],
            [
                'name' => 'ALTO NANAY',
                'province_id' => '137',
            ],
            [
                'name' => 'FERNANDO LORES',
                'province_id' => '137',
            ],
            [
                'name' => 'LAS AMAZONAS',
                'province_id' => '137',
            ],
            [
                'name' => 'MAZAN',
                'province_id' => '137',
            ],
            [
                'name' => 'NAPO',
                'province_id' => '137',
            ],
            [
                'name' => 'PUTUMAYO',
                'province_id' => '137',
            ],
            [
                'name' => 'TORRES CAUSANA',
                'province_id' => '137',
            ],
            [
                'name' => 'INDIANA',
                'province_id' => '137',
            ],
            [
                'name' => 'PUNCHANA',
                'province_id' => '137',
            ],
            [
                'name' => 'BELEN',
                'province_id' => '137',
            ],
            [
                'name' => 'SAN JUAN BAUTISTA',
                'province_id' => '137',
            ],
            [
                'name' => 'TNTE MANUEL CLAVERO',
                'province_id' => '137',
            ],
            [
                'name' => 'YURIMAGUAS',
                'province_id' => '138',
            ],
            [
                'name' => 'BALSAPUERTO',
                'province_id' => '138',
            ],
            [
                'name' => 'JEBEROS',
                'province_id' => '138',
            ],
            [
                'name' => 'LAGUNAS',
                'province_id' => '138',
            ],
            [
                'name' => 'SANTA CRUZ',
                'province_id' => '138',
            ],
            [
                'name' => 'TNTE CESAR LOPEZ ROJAS',
                'province_id' => '138',
            ],
            [
                'name' => 'NAUTA',
                'province_id' => '139',
            ],
            [
                'name' => 'PARINARI',
                'province_id' => '139',
            ],
            [
                'name' => 'TIGRE',
                'province_id' => '139',
            ],
            [
                'name' => 'URARINAS',
                'province_id' => '139',
            ],
            [
                'name' => 'TROMPETEROS',
                'province_id' => '139',
            ],
            [
                'name' => 'REQUENA',
                'province_id' => '140',
            ],
            [
                'name' => 'ALTO TAPICHE',
                'province_id' => '140',
            ],
            [
                'name' => 'CAPELO',
                'province_id' => '140',
            ],
            [
                'name' => 'EMILIO SAN MARTIN',
                'province_id' => '140',
            ],
            [
                'name' => 'MAQUIA',
                'province_id' => '140',
            ],
            [
                'name' => 'PUINAHUA',
                'province_id' => '140',
            ],
            [
                'name' => 'SAQUENA',
                'province_id' => '140',
            ],
            [
                'name' => 'SOPLIN',
                'province_id' => '140',
            ],
            [
                'name' => 'TAPICHE',
                'province_id' => '140',
            ],
            [
                'name' => 'JENARO HERRERA',
                'province_id' => '140',
            ],
            [
                'name' => 'YAQUERANA',
                'province_id' => '140',
            ],
            [
                'name' => 'CONTAMANA',
                'province_id' => '141',
            ],
            [
                'name' => 'VARGAS GUERRA',
                'province_id' => '141',
            ],
            [
                'name' => 'PADRE MARQUEZ',
                'province_id' => '141',
            ],
            [
                'name' => 'PAMPA HERMOZA',
                'province_id' => '141',
            ],
            [
                'name' => 'SARAYACU',
                'province_id' => '141',
            ],
            [
                'name' => 'INAHUAYA',
                'province_id' => '141',
            ],
            [
                'name' => 'MARISCAL RAMON CASTILLA',
                'province_id' => '142',
            ],
            [
                'name' => 'PEBAS',
                'province_id' => '142',
            ],
            [
                'name' => 'YAVARI',
                'province_id' => '142',
            ],
            [
                'name' => 'SAN PABLO',
                'province_id' => '142',
            ],
            [
                'name' => 'BARRANCA',
                'province_id' => '143',
            ],
            [
                'name' => 'ANDOAS',
                'province_id' => '143',
            ],
            [
                'name' => 'CAHUAPANAS',
                'province_id' => '143',
            ],
            [
                'name' => 'MANSERICHE',
                'province_id' => '143',
            ],
            [
                'name' => 'MORONA',
                'province_id' => '143',
            ],
            [
                'name' => 'PASTAZA',
                'province_id' => '143',
            ],
            [
                'name' => 'TAMBOPATA',
                'province_id' => '144',
            ],
            [
                'name' => 'INAMBARI',
                'province_id' => '144',
            ],
            [
                'name' => 'LAS PIEDRAS',
                'province_id' => '144',
            ],
            [
                'name' => 'LABERINTO',
                'province_id' => '144',
            ],
            [
                'name' => 'MANU',
                'province_id' => '145',
            ],
            [
                'name' => 'FITZCARRALD',
                'province_id' => '145',
            ],
            [
                'name' => 'MADRE DE DIOS',
                'province_id' => '145',
            ],
            [
                'name' => 'HUEPETUHE',
                'province_id' => '145',
            ],
            [
                'name' => 'INAPARI',
                'province_id' => '146',
            ],
            [
                'name' => 'IBERIA',
                'province_id' => '146',
            ],
            [
                'name' => 'TAHUAMANU',
                'province_id' => '146',
            ],
            [
                'name' => 'MOQUEGUA',
                'province_id' => '147',
            ],
            [
                'name' => 'CARUMAS',
                'province_id' => '147',
            ],
            [
                'name' => 'CUCHUMBAYA',
                'province_id' => '147',
            ],
            [
                'name' => 'SAN CRISTOBAL',
                'province_id' => '147',
            ],
            [
                'name' => 'TORATA',
                'province_id' => '147',
            ],
            [
                'name' => 'SAMEGUA',
                'province_id' => '147',
            ],
            [
                'name' => 'OMATE',
                'province_id' => '148',
            ],
            [
                'name' => 'COALAQUE',
                'province_id' => '148',
            ],
            [
                'name' => 'CHOJATA',
                'province_id' => '148',
            ],
            [
                'name' => 'ICHUNA',
                'province_id' => '148',
            ],
            [
                'name' => 'LA CAPILLA',
                'province_id' => '148',
            ],
            [
                'name' => 'LLOQUE',
                'province_id' => '148',
            ],
            [
                'name' => 'MATALAQUE',
                'province_id' => '148',
            ],
            [
                'name' => 'PUQUINA',
                'province_id' => '148',
            ],
            [
                'name' => 'QUINISTAQUILLAS',
                'province_id' => '148',
            ],
            [
                'name' => 'UBINAS',
                'province_id' => '148',
            ],
            [
                'name' => 'YUNGA',
                'province_id' => '148',
            ],
            [
                'name' => 'ILO',
                'province_id' => '149',
            ],
            [
                'name' => 'EL ALGARROBAL',
                'province_id' => '149',
            ],
            [
                'name' => 'PACOCHA',
                'province_id' => '149',
            ],
            [
                'name' => 'CHAUPIMARCA',
                'province_id' => '150',
            ],
            [
                'name' => 'HUACHON',
                'province_id' => '150',
            ],
            [
                'name' => 'HUARIACA',
                'province_id' => '150',
            ],
            [
                'name' => 'HUAYLLAY',
                'province_id' => '150',
            ],
            [
                'name' => 'NINACACA',
                'province_id' => '150',
            ],
            [
                'name' => 'PALLANCHACRA',
                'province_id' => '150',
            ],
            [
                'name' => 'PAUCARTAMBO',
                'province_id' => '150',
            ],
            [
                'name' => 'SAN FCO DE ASIS DE YARUSYACAN',
                'province_id' => '150',
            ],
            [
                'name' => 'SIMON BOLIVAR',
                'province_id' => '150',
            ],
            [
                'name' => 'TICLACAYAN',
                'province_id' => '150',
            ],
            [
                'name' => 'TINYAHUARCO',
                'province_id' => '150',
            ],
            [
                'name' => 'VICCO',
                'province_id' => '150',
            ],
            [
                'name' => 'YANACANCHA',
                'province_id' => '150',
            ],
            [
                'name' => 'YANAHUANCA',
                'province_id' => '151',
            ],
            [
                'name' => 'CHACAYAN',
                'province_id' => '151',
            ],
            [
                'name' => 'GOYLLARISQUIZGA',
                'province_id' => '151',
            ],
            [
                'name' => 'PAUCAR',
                'province_id' => '151',
            ],
            [
                'name' => 'SAN PEDRO DE PILLAO',
                'province_id' => '151',
            ],
            [
                'name' => 'SANTA ANA DE TUSI',
                'province_id' => '151',
            ],
            [
                'name' => 'TAPUC',
                'province_id' => '151',
            ],
            [
                'name' => 'VILCABAMBA',
                'province_id' => '151',
            ],
            [
                'name' => 'OXAPAMPA',
                'province_id' => '152',
            ],
            [
                'name' => 'CHONTABAMBA',
                'province_id' => '152',
            ],
            [
                'name' => 'HUANCABAMBA',
                'province_id' => '152',
            ],
            [
                'name' => 'PUERTO BERMUDEZ',
                'province_id' => '152',
            ],
            [
                'name' => 'VILLA RICA',
                'province_id' => '152',
            ],
            [
                'name' => 'POZUZO',
                'province_id' => '152',
            ],
            [
                'name' => 'PALCAZU',
                'province_id' => '152',
            ],
            [
                'name' => 'PIURA',
                'province_id' => '153',
            ],
            [
                'name' => 'CASTILLA',
                'province_id' => '153',
            ],
            [
                'name' => 'CATACAOS',
                'province_id' => '153',
            ],
            [
                'name' => 'LA ARENA',
                'province_id' => '153',
            ],
            [
                'name' => 'LA UNION',
                'province_id' => '153',
            ],
            [
                'name' => 'LAS LOMAS',
                'province_id' => '153',
            ],
            [
                'name' => 'TAMBO GRANDE',
                'province_id' => '153',
            ],
            [
                'name' => 'CURA MORI',
                'province_id' => '153',
            ],
            [
                'name' => 'EL TALLAN',
                'province_id' => '153',
            ],
            [
                'name' => 'AYABACA',
                'province_id' => '154',
            ],
            [
                'name' => 'FRIAS',
                'province_id' => '154',
            ],
            [
                'name' => 'LAGUNAS',
                'province_id' => '154',
            ],
            [
                'name' => 'MONTERO',
                'province_id' => '154',
            ],
            [
                'name' => 'PACAIPAMPA',
                'province_id' => '154',
            ],
            [
                'name' => 'SAPILLICA',
                'province_id' => '154',
            ],
            [
                'name' => 'SICCHEZ',
                'province_id' => '154',
            ],
            [
                'name' => 'SUYO',
                'province_id' => '154',
            ],
            [
                'name' => 'JILILI',
                'province_id' => '154',
            ],
            [
                'name' => 'PAIMAS',
                'province_id' => '154',
            ],
            [
                'name' => 'HUANCABAMBA',
                'province_id' => '155',
            ],
            [
                'name' => 'CANCHAQUE',
                'province_id' => '155',
            ],
            [
                'name' => 'HUARMACA',
                'province_id' => '155',
            ],
            [
                'name' => 'SONDOR',
                'province_id' => '155',
            ],
            [
                'name' => 'SONDORILLO',
                'province_id' => '155',
            ],
            [
                'name' => 'EL CARMEN DE LA FRONTERA',
                'province_id' => '155',
            ],
            [
                'name' => 'SAN MIGUEL DE EL FAIQUE',
                'province_id' => '155',
            ],
            [
                'name' => 'LALAQUIZ',
                'province_id' => '155',
            ],
            [
                'name' => 'CHULUCANAS',
                'province_id' => '156',
            ],
            [
                'name' => 'BUENOS AIRES',
                'province_id' => '156',
            ],
            [
                'name' => 'CHALACO',
                'province_id' => '156',
            ],
            [
                'name' => 'MORROPON',
                'province_id' => '156',
            ],
            [
                'name' => 'SALITRAL',
                'province_id' => '156',
            ],
            [
                'name' => 'SANTA CATALINA DE MOSSA',
                'province_id' => '156',
            ],
            [
                'name' => 'SANTO DOMINGO',
                'province_id' => '156',
            ],
            [
                'name' => 'LA MATANZA',
                'province_id' => '156',
            ],
            [
                'name' => 'YAMANGO',
                'province_id' => '156',
            ],
            [
                'name' => 'SAN JUAN DE BIGOTE',
                'province_id' => '156',
            ],
            [
                'name' => 'PAITA',
                'province_id' => '157',
            ],
            [
                'name' => 'AMOTAPE',
                'province_id' => '157',
            ],
            [
                'name' => 'ARENAL',
                'province_id' => '157',
            ],
            [
                'name' => 'LA HUACA',
                'province_id' => '157',
            ],
            [
                'name' => 'PUEBLO NUEVO DE COLAN',
                'province_id' => '157',
            ],
            [
                'name' => 'TAMARINDO',
                'province_id' => '157',
            ],
            [
                'name' => 'VICHAYAL',
                'province_id' => '157',
            ],
            [
                'name' => 'SULLANA',
                'province_id' => '158',
            ],
            [
                'name' => 'BELLAVISTA',
                'province_id' => '158',
            ],
            [
                'name' => 'LANCONES',
                'province_id' => '158',
            ],
            [
                'name' => 'MARCAVELICA',
                'province_id' => '158',
            ],
            [
                'name' => 'MIGUEL CHECA',
                'province_id' => '158',
            ],
            [
                'name' => 'QUERECOTILLO',
                'province_id' => '158',
            ],
            [
                'name' => 'SALITRAL',
                'province_id' => '158',
            ],
            [
                'name' => 'IGNACIO ESCUDERO',
                'province_id' => '158',
            ],
            [
                'name' => 'PARINAS',
                'province_id' => '159',
            ],
            [
                'name' => 'EL ALTO',
                'province_id' => '159',
            ],
            [
                'name' => 'LA BREA',
                'province_id' => '159',
            ],
            [
                'name' => 'LOBITOS',
                'province_id' => '159',
            ],
            [
                'name' => 'MANCORA',
                'province_id' => '159',
            ],
            [
                'name' => 'LOS ORGANOS',
                'province_id' => '159',
            ],
            [
                'name' => 'SECHURA',
                'province_id' => '160',
            ],
            [
                'name' => 'VICE',
                'province_id' => '160',
            ],
            [
                'name' => 'BERNAL',
                'province_id' => '160',
            ],
            [
                'name' => 'BELLAVISTA DE LA UNION',
                'province_id' => '160',
            ],
            [
                'name' => 'CRISTO NOS VALGA',
                'province_id' => '160',
            ],
            [
                'name' => 'RINCONADA LLICUAR',
                'province_id' => '160',
            ],
            [
                'name' => 'PUNO',
                'province_id' => '161',
            ],
            [
                'name' => 'ACORA',
                'province_id' => '161',
            ],
            [
                'name' => 'ATUNCOLLA',
                'province_id' => '161',
            ],
            [
                'name' => 'CAPACHICA',
                'province_id' => '161',
            ],
            [
                'name' => 'COATA',
                'province_id' => '161',
            ],
            [
                'name' => 'CHUCUITO',
                'province_id' => '161',
            ],
            [
                'name' => 'HUATA',
                'province_id' => '161',
            ],
            [
                'name' => 'MANAZO',
                'province_id' => '161',
            ],
            [
                'name' => 'PAUCARCOLLA',
                'province_id' => '161',
            ],
            [
                'name' => 'PICHACANI',
                'province_id' => '161',
            ],
            [
                'name' => 'SAN ANTONIO',
                'province_id' => '161',
            ],
            [
                'name' => 'TIQUILLACA',
                'province_id' => '161',
            ],
            [
                'name' => 'VILQUE',
                'province_id' => '161',
            ],
            [
                'name' => 'PLATERIA',
                'province_id' => '161',
            ],
            [
                'name' => 'AMANTANI',
                'province_id' => '161',
            ],
            [
                'name' => 'AZANGARO',
                'province_id' => '162',
            ],
            [
                'name' => 'ACHAYA',
                'province_id' => '162',
            ],
            [
                'name' => 'ARAPA',
                'province_id' => '162',
            ],
            [
                'name' => 'ASILLO',
                'province_id' => '162',
            ],
            [
                'name' => 'CAMINACA',
                'province_id' => '162',
            ],
            [
                'name' => 'CHUPA',
                'province_id' => '162',
            ],
            [
                'name' => 'JOSE DOMINGO CHOQUEHUANCA',
                'province_id' => '162',
            ],
            [
                'name' => 'MUNANI',
                'province_id' => '162',
            ],
            [
                'name' => 'POTONI',
                'province_id' => '162',
            ],
            [
                'name' => 'SAMAN',
                'province_id' => '162',
            ],
            [
                'name' => 'SAN ANTON',
                'province_id' => '162',
            ],
            [
                'name' => 'SAN JOSE',
                'province_id' => '162',
            ],
            [
                'name' => 'SAN JUAN DE SALINAS',
                'province_id' => '162',
            ],
            [
                'name' => 'STGO DE PUPUJA',
                'province_id' => '162',
            ],
            [
                'name' => 'TIRAPATA',
                'province_id' => '162',
            ],
            [
                'name' => 'MACUSANI',
                'province_id' => '163',
            ],
            [
                'name' => 'AJOYANI',
                'province_id' => '163',
            ],
            [
                'name' => 'AYAPATA',
                'province_id' => '163',
            ],
            [
                'name' => 'COASA',
                'province_id' => '163',
            ],
            [
                'name' => 'CORANI',
                'province_id' => '163',
            ],
            [
                'name' => 'CRUCERO',
                'province_id' => '163',
            ],
            [
                'name' => 'ITUATA',
                'province_id' => '163',
            ],
            [
                'name' => 'OLLACHEA',
                'province_id' => '163',
            ],
            [
                'name' => 'SAN GABAN',
                'province_id' => '163',
            ],
            [
                'name' => 'USICAYOS',
                'province_id' => '163',
            ],
            [
                'name' => 'JULI',
                'province_id' => '164',
            ],
            [
                'name' => 'DESAGUADERO',
                'province_id' => '164',
            ],
            [
                'name' => 'HUACULLANI',
                'province_id' => '164',
            ],
            [
                'name' => 'PISACOMA',
                'province_id' => '164',
            ],
            [
                'name' => 'POMATA',
                'province_id' => '164',
            ],
            [
                'name' => 'ZEPITA',
                'province_id' => '164',
            ],
            [
                'name' => 'KELLUYO',
                'province_id' => '164',
            ],
            [
                'name' => 'HUANCANE',
                'province_id' => '165',
            ],
            [
                'name' => 'COJATA',
                'province_id' => '165',
            ],
            [
                'name' => 'INCHUPALLA',
                'province_id' => '165',
            ],
            [
                'name' => 'PUSI',
                'province_id' => '165',
            ],
            [
                'name' => 'ROSASPATA',
                'province_id' => '165',
            ],
            [
                'name' => 'TARACO',
                'province_id' => '165',
            ],
            [
                'name' => 'VILQUE CHICO',
                'province_id' => '165',
            ],
            [
                'name' => 'HUATASANI',
                'province_id' => '165',
            ],
            [
                'name' => 'LAMPA',
                'province_id' => '166',
            ],
            [
                'name' => 'CABANILLA',
                'province_id' => '166',
            ],
            [
                'name' => 'CALAPUJA',
                'province_id' => '166',
            ],
            [
                'name' => 'NICASIO',
                'province_id' => '166',
            ],
            [
                'name' => 'OCUVIRI',
                'province_id' => '166',
            ],
            [
                'name' => 'PALCA',
                'province_id' => '166',
            ],
            [
                'name' => 'PARATIA',
                'province_id' => '166',
            ],
            [
                'name' => 'PUCARA',
                'province_id' => '166',
            ],
            [
                'name' => 'SANTA LUCIA',
                'province_id' => '166',
            ],
            [
                'name' => 'VILAVILA',
                'province_id' => '166',
            ],
            [
                'name' => 'AYAVIRI',
                'province_id' => '167',
            ],
            [
                'name' => 'ANTAUTA',
                'province_id' => '167',
            ],
            [
                'name' => 'CUPI',
                'province_id' => '167',
            ],
            [
                'name' => 'LLALLI',
                'province_id' => '167',
            ],
            [
                'name' => 'MACARI',
                'province_id' => '167',
            ],
            [
                'name' => 'NUNOA',
                'province_id' => '167',
            ],
            [
                'name' => 'ORURILLO',
                'province_id' => '167',
            ],
            [
                'name' => 'SANTA ROSA',
                'province_id' => '167',
            ],
            [
                'name' => 'UMACHIRI',
                'province_id' => '167',
            ],
            [
                'name' => 'SANDIA',
                'province_id' => '168',
            ],
            [
                'name' => 'CUYOCUYO',
                'province_id' => '168',
            ],
            [
                'name' => 'LIMBANI',
                'province_id' => '168',
            ],
            [
                'name' => 'PHARA',
                'province_id' => '168',
            ],
            [
                'name' => 'PATAMBUCO',
                'province_id' => '168',
            ],
            [
                'name' => 'QUIACA',
                'province_id' => '168',
            ],
            [
                'name' => 'SAN JUAN DEL ORO',
                'province_id' => '168',
            ],
            [
                'name' => 'YANAHUAYA',
                'province_id' => '168',
            ],
            [
                'name' => 'ALTO INAMBARI',
                'province_id' => '168',
            ],
            [
                'name' => 'SAN PEDRO DE PUTINA PUNCO',
                'province_id' => '168',
            ],
            [
                'name' => 'JULIACA',
                'province_id' => '169',
            ],
            [
                'name' => 'CABANA',
                'province_id' => '169',
            ],
            [
                'name' => 'CABANILLAS',
                'province_id' => '169',
            ],
            [
                'name' => 'CARACOTO',
                'province_id' => '169',
            ],
            [
                'name' => 'YUNGUYO',
                'province_id' => '170',
            ],
            [
                'name' => 'UNICACHI',
                'province_id' => '170',
            ],
            [
                'name' => 'ANAPIA',
                'province_id' => '170',
            ],
            [
                'name' => 'COPANI',
                'province_id' => '170',
            ],
            [
                'name' => 'CUTURAPI',
                'province_id' => '170',
            ],
            [
                'name' => 'OLLARAYA',
                'province_id' => '170',
            ],
            [
                'name' => 'TINICACHI',
                'province_id' => '170',
            ],
            [
                'name' => 'PUTINA',
                'province_id' => '171',
            ],
            [
                'name' => 'PEDRO VILCA APAZA',
                'province_id' => '171',
            ],
            [
                'name' => 'QUILCA PUNCU',
                'province_id' => '171',
            ],
            [
                'name' => 'ANANEA',
                'province_id' => '171',
            ],
            [
                'name' => 'SINA',
                'province_id' => '171',
            ],
            [
                'name' => 'ILAVE',
                'province_id' => '172',
            ],
            [
                'name' => 'PILCUYO',
                'province_id' => '172',
            ],
            [
                'name' => 'SANTA ROSA',
                'province_id' => '172',
            ],
            [
                'name' => 'CAPASO',
                'province_id' => '172',
            ],
            [
                'name' => 'CONDURIRI',
                'province_id' => '172',
            ],
            [
                'name' => 'MOHO',
                'province_id' => '173',
            ],
            [
                'name' => 'CONIMA',
                'province_id' => '173',
            ],
            [
                'name' => 'TILALI',
                'province_id' => '173',
            ],
            [
                'name' => 'HUAYRAPATA',
                'province_id' => '173',
            ],
            [
                'name' => 'MOYOBAMBA',
                'province_id' => '174',
            ],
            [
                'name' => 'CALZADA',
                'province_id' => '174',
            ],
            [
                'name' => 'HABANA',
                'province_id' => '174',
            ],
            [
                'name' => 'JEPELACIO',
                'province_id' => '174',
            ],
            [
                'name' => 'SORITOR',
                'province_id' => '174',
            ],
            [
                'name' => 'YANTALO',
                'province_id' => '174',
            ],
            [
                'name' => 'SAPOSOA',
                'province_id' => '175',
            ],
            [
                'name' => 'PISCOYACU',
                'province_id' => '175',
            ],
            [
                'name' => 'SACANCHE',
                'province_id' => '175',
            ],
            [
                'name' => 'TINGO DE SAPOSOA',
                'province_id' => '175',
            ],
            [
                'name' => 'ALTO SAPOSOA',
                'province_id' => '175',
            ],
            [
                'name' => 'EL ESLABON',
                'province_id' => '175',
            ],
            [
                'name' => 'LAMAS',
                'province_id' => '176',
            ],
            [
                'name' => 'BARRANQUITA',
                'province_id' => '176',
            ],
            [
                'name' => 'CAYNARACHI',
                'province_id' => '176',
            ],
            [
                'name' => 'CUNUMBUQUI',
                'province_id' => '176',
            ],
            [
                'name' => 'PINTO RECODO',
                'province_id' => '176',
            ],
            [
                'name' => 'RUMISAPA',
                'province_id' => '176',
            ],
            [
                'name' => 'SHANAO',
                'province_id' => '176',
            ],
            [
                'name' => 'TABALOSOS',
                'province_id' => '176',
            ],
            [
                'name' => 'ZAPATERO',
                'province_id' => '176',
            ],
            [
                'name' => 'ALONSO DE ALVARADO',
                'province_id' => '176',
            ],
            [
                'name' => 'SAN ROQUE DE CUMBAZA',
                'province_id' => '176',
            ],
            [
                'name' => 'JUANJUI',
                'province_id' => '177',
            ],
            [
                'name' => 'CAMPANILLA',
                'province_id' => '177',
            ],
            [
                'name' => 'HUICUNGO',
                'province_id' => '177',
            ],
            [
                'name' => 'PACHIZA',
                'province_id' => '177',
            ],
            [
                'name' => 'PAJARILLO',
                'province_id' => '177',
            ],
            [
                'name' => 'RIOJA',
                'province_id' => '178',
            ],
            [
                'name' => 'POSIC',
                'province_id' => '178',
            ],
            [
                'name' => 'YORONGOS',
                'province_id' => '178',
            ],
            [
                'name' => 'YURACYACU',
                'province_id' => '178',
            ],
            [
                'name' => 'NUEVA CAJAMARCA',
                'province_id' => '178',
            ],
            [
                'name' => 'ELIAS SOPLIN',
                'province_id' => '178',
            ],
            [
                'name' => 'SAN FERNANDO',
                'province_id' => '178',
            ],
            [
                'name' => 'PARDO MIGUEL',
                'province_id' => '178',
            ],
            [
                'name' => 'AWAJUN',
                'province_id' => '178',
            ],
            [
                'name' => 'TARAPOTO',
                'province_id' => '179',
            ],
            [
                'name' => 'ALBERTO LEVEAU',
                'province_id' => '179',
            ],
            [
                'name' => 'CACATACHI',
                'province_id' => '179',
            ],
            [
                'name' => 'CHAZUTA',
                'province_id' => '179',
            ],
            [
                'name' => 'CHIPURANA',
                'province_id' => '179',
            ],
            [
                'name' => 'EL PORVENIR',
                'province_id' => '179',
            ],
            [
                'name' => 'HUIMBAYOC',
                'province_id' => '179',
            ],
            [
                'name' => 'JUAN GUERRA',
                'province_id' => '179',
            ],
            [
                'name' => 'MORALES',
                'province_id' => '179',
            ],
            [
                'name' => 'PAPAPLAYA',
                'province_id' => '179',
            ],
            [
                'name' => 'SAN ANTONIO',
                'province_id' => '179',
            ],
            [
                'name' => 'SAUCE',
                'province_id' => '179',
            ],
            [
                'name' => 'SHAPAJA',
                'province_id' => '179',
            ],
            [
                'name' => 'LA BANDA DE SHILCAYO',
                'province_id' => '179',
            ],
            [
                'name' => 'BELLAVISTA',
                'province_id' => '180',
            ],
            [
                'name' => 'SAN RAFAEL',
                'province_id' => '180',
            ],
            [
                'name' => 'SAN PABLO',
                'province_id' => '180',
            ],
            [
                'name' => 'ALTO BIAVO',
                'province_id' => '180',
            ],
            [
                'name' => 'HUALLAGA',
                'province_id' => '180',
            ],
            [
                'name' => 'BAJO BIAVO',
                'province_id' => '180',
            ],
            [
                'name' => 'TOCACHE',
                'province_id' => '181',
            ],
            [
                'name' => 'NUEVO PROGRESO',
                'province_id' => '181',
            ],
            [
                'name' => 'POLVORA',
                'province_id' => '181',
            ],
            [
                'name' => 'SHUNTE',
                'province_id' => '181',
            ],
            [
                'name' => 'UCHIZA',
                'province_id' => '181',
            ],
            [
                'name' => 'PICOTA',
                'province_id' => '182',
            ],
            [
                'name' => 'BUENOS AIRES',
                'province_id' => '182',
            ],
            [
                'name' => 'CASPIZAPA',
                'province_id' => '182',
            ],
            [
                'name' => 'PILLUANA',
                'province_id' => '182',
            ],
            [
                'name' => 'PUCACACA',
                'province_id' => '182',
            ],
            [
                'name' => 'SAN CRISTOBAL',
                'province_id' => '182',
            ],
            [
                'name' => 'SAN HILARION',
                'province_id' => '182',
            ],
            [
                'name' => 'TINGO DE PONASA',
                'province_id' => '182',
            ],
            [
                'name' => 'TRES UNIDOS',
                'province_id' => '182',
            ],
            [
                'name' => 'SHAMBOYACU',
                'province_id' => '182',
            ],
            [
                'name' => 'SAN JOSE DE SISA',
                'province_id' => '183',
            ],
            [
                'name' => 'AGUA BLANCA',
                'province_id' => '183',
            ],
            [
                'name' => 'SHATOJA',
                'province_id' => '183',
            ],
            [
                'name' => 'SAN MARTIN',
                'province_id' => '183',
            ],
            [
                'name' => 'SANTA ROSA',
                'province_id' => '183',
            ],
            [
                'name' => 'TACNA',
                'province_id' => '184',
            ],
            [
                'name' => 'CALANA',
                'province_id' => '184',
            ],
            [
                'name' => 'INCLAN',
                'province_id' => '184',
            ],
            [
                'name' => 'PACHIA',
                'province_id' => '184',
            ],
            [
                'name' => 'PALCA',
                'province_id' => '184',
            ],
            [
                'name' => 'POCOLLAY',
                'province_id' => '184',
            ],
            [
                'name' => 'SAMA',
                'province_id' => '184',
            ],
            [
                'name' => 'ALTO DE LA ALIANZA',
                'province_id' => '184',
            ],
            [
                'name' => 'CIUDAD NUEVA',
                'province_id' => '184',
            ],
            [
                'name' => 'CORONEL GREGORIO ALBARRACIN L.ALFONSO UGARTE',
                'province_id' => '184',
            ],
            [
                'name' => 'TARATA',
                'province_id' => '185',
            ],
            [
                'name' => 'CHUCATAMANI',
                'province_id' => '185',
            ],
            [
                'name' => 'ESTIQUE',
                'province_id' => '185',
            ],
            [
                'name' => 'ESTIQUE PAMPA',
                'province_id' => '185',
            ],
            [
                'name' => 'SITAJARA',
                'province_id' => '185',
            ],
            [
                'name' => 'SUSAPAYA',
                'province_id' => '185',
            ],
            [
                'name' => 'TARUCACHI',
                'province_id' => '185',
            ],
            [
                'name' => 'TICACO',
                'province_id' => '185',
            ],
            [
                'name' => 'LOCUMBA',
                'province_id' => '186',
            ],
            [
                'name' => 'ITE',
                'province_id' => '186',
            ],
            [
                'name' => 'ILABAYA',
                'province_id' => '186',
            ],
            [
                'name' => 'CANDARAVE',
                'province_id' => '187',
            ],
            [
                'name' => 'CAIRANI',
                'province_id' => '187',
            ],
            [
                'name' => 'CURIBAYA',
                'province_id' => '187',
            ],
            [
                'name' => 'HUANUARA',
                'province_id' => '187',
            ],
            [
                'name' => 'QUILAHUANI',
                'province_id' => '187',
            ],
            [
                'name' => 'CAMILACA',
                'province_id' => '187',
            ],
            [
                'name' => 'TUMBES',
                'province_id' => '188',
            ],
            [
                'name' => 'CORRALES',
                'province_id' => '188',
            ],
            [
                'name' => 'LA CRUZ',
                'province_id' => '188',
            ],
            [
                'name' => 'PAMPAS DE HOSPITAL',
                'province_id' => '188',
            ],
            [
                'name' => 'SAN JACINTO',
                'province_id' => '188',
            ],
            [
                'name' => 'SAN JUAN DE LA VIRGEN',
                'province_id' => '188',
            ],
            [
                'name' => 'ZORRITOS',
                'province_id' => '189',
            ],
            [
                'name' => 'CASITAS',
                'province_id' => '189',
            ],
            [
                'name' => 'CANOAS DE PUNTA SAL',
                'province_id' => '189',
            ],
            [
                'name' => 'ZARUMILLA',
                'province_id' => '190',
            ],
            [
                'name' => 'MATAPALO',
                'province_id' => '190',
            ],
            [
                'name' => 'PAPAYAL',
                'province_id' => '190',
            ],
            [
                'name' => 'AGUAS VERDES',
                'province_id' => '190',
            ],
            [
                'name' => 'CALLAO',
                'province_id' => '191',
            ],
            [
                'name' => 'BELLAVISTA',
                'province_id' => '191',
            ],
            [
                'name' => 'LA PUNTA',
                'province_id' => '191',
            ],
            [
                'name' => 'CARMEN DE LA LEGUA-REYNOSO',
                'province_id' => '191',
            ],
            [
                'name' => 'LA PERLA',
                'province_id' => '191',
            ],
            [
                'name' => 'VENTANILLA',
                'province_id' => '191',
            ],
            [
                'name' => 'CALLERIA',
                'province_id' => '192',
            ],
            [
                'name' => 'YARINACOCHA',
                'province_id' => '192',
            ],
            [
                'name' => 'MASISEA',
                'province_id' => '192',
            ],
            [
                'name' => 'CAMPOVERDE',
                'province_id' => '192',
            ],
            [
                'name' => 'IPARIA',
                'province_id' => '192',
            ],
            [
                'name' => 'NUEVA REQUENA',
                'province_id' => '192',
            ],
            [
                'name' => 'MANANTAY',
                'province_id' => '192',
            ],
            [
                'name' => 'PADRE ABAD',
                'province_id' => '193',
            ],
            [
                'name' => 'YRAZOLA',
                'province_id' => '193',
            ],
            [
                'name' => 'CURIMANA',
                'province_id' => '193',
            ],
            [
                'name' => 'RAIMONDI',
                'province_id' => '194',
            ],
            [
                'name' => 'TAHUANIA',
                'province_id' => '194',
            ],
            [
                'name' => 'YURUA',
                'province_id' => '194',
            ],
            [
                'name' => 'SEPAHUA',
                'province_id' => '194',
            ],
            [
                'name' => 'PURUS',
                'province_id' => '195',
            ]
        ];

        DB::table('districts')->insert($data);
    }
}
