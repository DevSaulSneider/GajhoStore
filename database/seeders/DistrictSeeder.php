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
                'nombre' => 'CHACHAPOYAS',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'ASUNCION',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'BALSAS',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'CHETO',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'CHILIQUIN',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'CHUQUIBAMBA',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'GRANADA',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'HUANCAS',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'LA JALCA',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'LEIMEBAMBA',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'LEVANTO',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'MAGDALENA',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'MARISCAL CASTILLA',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'MOLINOPAMPA',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'MONTEVIDEO',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'OLLEROS',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'QUINJALCA',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'SAN FCO DE DAGUAS',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'SAN ISIDRO DE MAINO',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'SOLOCO',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'SONCHE',
                'id_provincia' => '01',
            ],
            [
                'nombre' => 'LA PECA',
                'id_provincia' => '02',
            ],
            [
                'nombre' => 'ARAMANGO',
                'id_provincia' => '02',
            ],
            [
                'nombre' => 'COPALLIN',
                'id_provincia' => '02',
            ],
            [
                'nombre' => 'EL PARCO',
                'id_provincia' => '02',
            ],
            [
                'nombre' => 'BAGUA',
                'id_provincia' => '02',
            ],
            [
                'nombre' => 'IMAZA',
                'id_provincia' => '02',
            ],
            [
                'nombre' => 'JUMBILLA',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'COROSHA',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'CUISPES',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'CHISQUILLA',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'CHURUJA',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'FLORIDA',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'RECTA',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'SAN CARLOS',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'SHIPASBAMBA',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'VALERA',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'YAMBRASBAMBA',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'JAZAN',
                'id_provincia' => '03',
            ],
            [
                'nombre' => 'LAMUD',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'CAMPORREDONDO',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'COCABAMBA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'COLCAMAR',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'CONILA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'INGUILPATA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'LONGUITA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'LONYA CHICO',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'LUYA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'LUYA VIEJO',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'MARIA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'OCALLI',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'OCUMAL',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'PISUQUIA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'SAN CRISTOBAL',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'SAN FRANCISCO DE YESO',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'SAN JERONIMO',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'SAN JUAN DE LOPECANCHA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'SANTA CATALINA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'SANTO TOMAS',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'TINGO',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'TRITA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'PROVIDENCIA',
                'id_provincia' => '04',
            ],
            [
                'nombre' => 'SAN NICOLAS',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'COCHAMAL',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'CHIRIMOTO',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'HUAMBO',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'LIMABAMBA',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'LONGAR',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'MILPUC',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'MCAL BENAVIDES',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'OMIA',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'SANTA ROSA',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'TOTORA',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'VISTA ALEGRE',
                'id_provincia' => '05',
            ],
            [
                'nombre' => 'NIEVA',
                'id_provincia' => '06',
            ],
            [
                'nombre' => 'RIO SANTIAGO',
                'id_provincia' => '06',
            ],
            [
                'nombre' => 'EL CENEPA',
                'id_provincia' => '06',
            ],
            [
                'nombre' => 'BAGUA GRANDE',
                'id_provincia' => '07',
            ],
            [
                'nombre' => 'CAJARURO',
                'id_provincia' => '07',
            ],
            [
                'nombre' => 'CUMBA',
                'id_provincia' => '07',
            ],
            [
                'nombre' => 'EL MILAGRO',
                'id_provincia' => '07',
            ],
            [
                'nombre' => 'JAMALCA',
                'id_provincia' => '07',
            ],
            [
                'nombre' => 'LONYA GRANDE',
                'id_provincia' => '07',
            ],
            [
                'nombre' => 'YAMON',
                'id_provincia' => '07',
            ],
            [
                'nombre' => 'HUARAZ',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'INDEPENDENCIA',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'COCHABAMBA',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'COLCABAMBA',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'HUANCHAY',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'JANGAS',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'LA LIBERTAD',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'OLLEROS',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'PAMPAS',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'PARIACOTO',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'PIRA',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'TARICA',
                'id_provincia' => '08',
            ],
            [
                'nombre' => 'AIJA',
                'id_provincia' => '09',
            ],
            [
                'nombre' => 'CORIS',
                'id_provincia' => '09',
            ],
            [
                'nombre' => 'HUACLLAN',
                'id_provincia' => '09',
            ],
            [
                'nombre' => 'LA MERCED',
                'id_provincia' => '09',
            ],
            [
                'nombre' => 'SUCCHA',
                'id_provincia' => '09',
            ],
            [
                'nombre' => 'CHIQUIAN',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'A PARDO LEZAMETA',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'AQUIA',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'CAJACAY',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'HUAYLLACAYAN',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'HUASTA',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'MANGAS',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'PACLLON',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'SAN MIGUEL DE CORPANQUI',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'TICLLOS',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'ANTONIO RAIMONDI',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'CANIS',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'COLQUIOC',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'LA PRIMAVERA',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'HUALLANCA',
                'id_provincia' => '10',
            ],
            [
                'nombre' => 'CARHUAZ',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'ACOPAMPA',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'AMASHCA',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'ANTA',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'ATAQUERO',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'MARCARA',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'PARIAHUANCA',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'SAN MIGUEL DE ACO',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'SHILLA',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'TINCO',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'YUNGAR',
                'id_provincia' => '11',
            ],
            [
                'nombre' => 'CASMA',
                'id_provincia' => '12',
            ],
            [
                'nombre' => 'BUENA VISTA ALTA',
                'id_provincia' => '12',
            ],
            [
                'nombre' => 'COMANDANTE NOEL',
                'id_provincia' => '12',
            ],
            [
                'nombre' => 'YAUTAN',
                'id_provincia' => '12',
            ],
            [
                'nombre' => 'CORONGO',
                'id_provincia' => '13',
            ],
            [
                'nombre' => 'ACO',
                'id_provincia' => '13',
            ],
            [
                'nombre' => 'BAMBAS',
                'id_provincia' => '13',
            ],
            [
                'nombre' => 'CUSCA',
                'id_provincia' => '13',
            ],
            [
                'nombre' => 'LA PAMPA',
                'id_provincia' => '13',
            ],
            [
                'nombre' => 'YANAC',
                'id_provincia' => '13',
            ],
            [
                'nombre' => 'YUPAN',
                'id_provincia' => '13',
            ],
            [
                'nombre' => 'CARAZ',
                'id_provincia' => '14',
            ],
            [
                'nombre' => 'HUALLANCA',
                'id_provincia' => '14',
            ],
            [
                'nombre' => 'HUATA',
                'id_provincia' => '14',
            ],
            [
                'nombre' => 'HUAYLAS',
                'id_provincia' => '14',
            ],
            [
                'nombre' => 'MATO',
                'id_provincia' => '14',
            ],
            [
                'nombre' => 'PAMPAROMAS',
                'id_provincia' => '14',
            ],
            [
                'nombre' => 'PUEBLO LIBRE',
                'id_provincia' => '14',
            ],
            [
                'nombre' => 'SANTA CRUZ',
                'id_provincia' => '14',
            ],
            [
                'nombre' => 'YURACMARCA',
                'id_provincia' => '14',
            ],
            [
                'nombre' => 'SANTO TORIBIO',
                'id_provincia' => '14',
            ],
            [
                'nombre' => 'HUARI',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'CAJAY',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'CHAVIN DE HUANTAR',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'HUACACHI',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'HUACHIS',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'HUACCHIS',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'HUANTAR',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'MASIN',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'PAUCAS',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'PONTO',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'RAHUAPAMPA',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'RAPAYAN',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'SAN MARCOS',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'SAN PEDRO DE CHANA',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'UCO',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'ANRA',
                'id_provincia' => '15',
            ],
            [
                'nombre' => 'PISCOBAMBA',
                'id_provincia' => '16',
            ],
            [
                'nombre' => 'CASCA',
                'id_provincia' => '16',
            ],
            [
                'nombre' => 'LUCMA',
                'id_provincia' => '16',
            ],
            [
                'nombre' => 'FIDEL OLIVAS ESCUDERO',
                'id_provincia' => '16',
            ],
            [
                'nombre' => 'LLAMA',
                'id_provincia' => '16',
            ],
            [
                'nombre' => 'LLUMPA',
                'id_provincia' => '16',
            ],
            [
                'nombre' => 'MUSGA',
                'id_provincia' => '16',
            ],
            [
                'nombre' => 'ELEAZAR GUZMAN BARRON',
                'id_provincia' => '16',
            ],
            [
                'nombre' => 'CABANA',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'BOLOGNESI',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'CONCHUCOS',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'HUACASCHUQUE',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'HUANDOVAL',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'LACABAMBA',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'LLAPO',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'PALLASCA',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'PAMPAS',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'SANTA ROSA',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'TAUCA',
                'id_provincia' => '17',
            ],
            [
                'nombre' => 'POMABAMBA',
                'id_provincia' => '18',
            ],
            [
                'nombre' => 'HUAYLLAN',
                'id_provincia' => '18',
            ],
            [
                'nombre' => 'PAROBAMBA',
                'id_provincia' => '18',
            ],
            [
                'nombre' => 'QUINUABAMBA',
                'id_provincia' => '18',
            ],
            [
                'nombre' => 'RECUAY',
                'id_provincia' => '19',
            ],
            [
                'nombre' => 'COTAPARACO',
                'id_provincia' => '19',
            ],
            [
                'nombre' => 'HUAYLLAPAMPA',
                'id_provincia' => '19',
            ],
            [
                'nombre' => 'MARCA',
                'id_provincia' => '19',
            ],
            [
                'nombre' => 'PAMPAS CHICO',
                'id_provincia' => '19',
            ],
            [
                'nombre' => 'PARARIN',
                'id_provincia' => '19',
            ],
            [
                'nombre' => 'TAPACOCHA',
                'id_provincia' => '19',
            ],
            [
                'nombre' => 'TICAPAMPA',
                'id_provincia' => '19',
            ],
            [
                'nombre' => 'LLACLLIN',
                'id_provincia' => '19',
            ],
            [
                'nombre' => 'CATAC',
                'id_provincia' => '19',
            ],
            [
                'nombre' => 'CHIMBOTE',
                'id_provincia' => '20',
            ],
            [
                'nombre' => 'CACERES DEL PERU',
                'id_provincia' => '20',
            ],
            [
                'nombre' => 'MACATE',
                'id_provincia' => '20',
            ],
            [
                'nombre' => 'MORO',
                'id_provincia' => '20',
            ],
            [
                'nombre' => 'NEPENA',
                'id_provincia' => '20',
            ],
            [
                'nombre' => 'SAMANCO',
                'id_provincia' => '20',
            ],
            [
                'nombre' => 'SANTA',
                'id_provincia' => '20',
            ],
            [
                'nombre' => 'COISHCO',
                'id_provincia' => '20',
            ],
            [
                'nombre' => 'NUEVO CHIMBOTE',
                'id_provincia' => '20',
            ],
            [
                'nombre' => 'SIHUAS',
                'id_provincia' => '21',
            ],
            [
                'nombre' => 'ALFONSO UGARTE',
                'id_provincia' => '21',
            ],
            [
                'nombre' => 'CHINGALPO',
                'id_provincia' => '21',
            ],
            [
                'nombre' => 'HUAYLLABAMBA',
                'id_provincia' => '21',
            ],
            [
                'nombre' => 'QUICHES',
                'id_provincia' => '21',
            ],
            [
                'nombre' => 'SICSIBAMBA',
                'id_provincia' => '21',
            ],
            [
                'nombre' => 'ACOBAMBA',
                'id_provincia' => '21',
            ],
            [
                'nombre' => 'CASHAPAMPA',
                'id_provincia' => '21',
            ],
            [
                'nombre' => 'RAGASH',
                'id_provincia' => '21',
            ],
            [
                'nombre' => 'SAN JUAN',
                'id_provincia' => '21',
            ],
            [
                'nombre' => 'YUNGAY',
                'id_provincia' => '22',
            ],
            [
                'nombre' => 'CASCAPARA',
                'id_provincia' => '22',
            ],
            [
                'nombre' => 'MANCOS',
                'id_provincia' => '22',
            ],
            [
                'nombre' => 'MATACOTO',
                'id_provincia' => '22',
            ],
            [
                'nombre' => 'QUILLO',
                'id_provincia' => '22',
            ],
            [
                'nombre' => 'RANRAHIRCA',
                'id_provincia' => '22',
            ],
            [
                'nombre' => 'SHUPLUY',
                'id_provincia' => '22',
            ],
            [
                'nombre' => 'YANAMA',
                'id_provincia' => '22',
            ],
            [
                'nombre' => 'LLAMELLIN',
                'id_provincia' => '23',
            ],
            [
                'nombre' => 'ACZO',
                'id_provincia' => '23',
            ],
            [
                'nombre' => 'CHACCHO',
                'id_provincia' => '23',
            ],
            [
                'nombre' => 'CHINGAS',
                'id_provincia' => '23',
            ],
            [
                'nombre' => 'MIRGAS',
                'id_provincia' => '23',
            ],
            [
                'nombre' => 'SAN JUAN DE RONTOY',
                'id_provincia' => '23',
            ],
            [
                'nombre' => 'SAN LUIS',
                'id_provincia' => '24',
            ],
            [
                'nombre' => 'YAUYA',
                'id_provincia' => '24',
            ],
            [
                'nombre' => 'SAN NICOLAS',
                'id_provincia' => '24',
            ],
            [
                'nombre' => 'CHACAS',
                'id_provincia' => '25',
            ],
            [
                'nombre' => 'ACOCHACA',
                'id_provincia' => '25',
            ],
            [
                'nombre' => 'HUARMEY',
                'id_provincia' => '26',
            ],
            [
                'nombre' => 'COCHAPETI',
                'id_provincia' => '26',
            ],
            [
                'nombre' => 'HUAYAN',
                'id_provincia' => '26',
            ],
            [
                'nombre' => 'MALVAS',
                'id_provincia' => '26',
            ],
            [
                'nombre' => 'CULEBRAS',
                'id_provincia' => '26',
            ],
            [
                'nombre' => 'ACAS',
                'id_provincia' => '27',
            ],
            [
                'nombre' => 'CAJAMARQUILLA',
                'id_provincia' => '27',
            ],
            [
                'nombre' => 'CARHUAPAMPA',
                'id_provincia' => '27',
            ],
            [
                'nombre' => 'COCHAS',
                'id_provincia' => '27',
            ],
            [
                'nombre' => 'CONGAS',
                'id_provincia' => '27',
            ],
            [
                'nombre' => 'LLIPA',
                'id_provincia' => '27',
            ],
            [
                'nombre' => 'OCROS',
                'id_provincia' => '27',
            ],
            [
                'nombre' => 'SAN CRISTOBAL DE RAJAN',
                'id_provincia' => '27',
            ],
            [
                'nombre' => 'SAN PEDRO',
                'id_provincia' => '27',
            ],
            [
                'nombre' => 'SANTIAGO DE CHILCAS',
                'id_provincia' => '27',
            ],
            [
                'nombre' => 'ABANCAY',
                'id_provincia' => '28',
            ],
            [
                'nombre' => 'CIRCA',
                'id_provincia' => '28',
            ],
            [
                'nombre' => 'CURAHUASI',
                'id_provincia' => '28',
            ],
            [
                'nombre' => 'CHACOCHE',
                'id_provincia' => '28',
            ],
            [
                'nombre' => 'HUANIPACA',
                'id_provincia' => '28',
            ],
            [
                'nombre' => 'LAMBRAMA',
                'id_provincia' => '28',
            ],
            [
                'nombre' => 'PICHIRHUA',
                'id_provincia' => '28',
            ],
            [
                'nombre' => 'SAN PEDRO DE CACHORA',
                'id_provincia' => '28',
            ],
            [
                'nombre' => 'TAMBURCO',
                'id_provincia' => '28',
            ],
            [
                'nombre' => 'CHALHUANCA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'CAPAYA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'CARAYBAMBA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'COLCABAMBA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'COTARUSE',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'CHAPIMARCA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'IHUAYLLO',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'LUCRE',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'POCOHUANCA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'SANAICA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'SORAYA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'TAPAIRIHUA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'TINTAY',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'TORAYA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'YANACA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'SAN JUAN DE CHACNA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'JUSTO APU SAHUARAURA',
                'id_provincia' => '29',
            ],
            [
                'nombre' => 'ANDAHUAYLAS',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'ANDARAPA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'CHIARA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'HUANCARAMA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'HUANCARAY',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'KISHUARA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'PACOBAMBA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'PAMPACHIRI',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'SAN ANTONIO DE CACHI',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'SAN JERONIMO',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'TALAVERA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'TURPO',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'PACUCHA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'POMACOCHA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'STA MARIA DE CHICMO',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'TUMAY HUARACA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'HUAYANA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'SAN MIGUEL DE CHACCRAMPA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'KAQUIABAMBA',
                'id_provincia' => '30',
            ],
            [
                'nombre' => 'ANTABAMBA',
                'id_provincia' => '31',
            ],
            [
                'nombre' => 'EL ORO',
                'id_provincia' => '31',
            ],
            [
                'nombre' => 'HUAQUIRCA',
                'id_provincia' => '31',
            ],
            [
                'nombre' => 'JUAN ESPINOZA MEDRANO',
                'id_provincia' => '31',
            ],
            [
                'nombre' => 'OROPESA',
                'id_provincia' => '31',
            ],
            [
                'nombre' => 'PACHACONAS',
                'id_provincia' => '31',
            ],
            [
                'nombre' => 'SABAINO',
                'id_provincia' => '31',
            ],
            [
                'nombre' => 'TAMBOBAMBA',
                'id_provincia' => '32',
            ],
            [
                'nombre' => 'COYLLURQUI',
                'id_provincia' => '32',
            ],
            [
                'nombre' => 'COTABAMBAS',
                'id_provincia' => '32',
            ],
            [
                'nombre' => 'HAQUIRA',
                'id_provincia' => '32',
            ],
            [
                'nombre' => 'MARA',
                'id_provincia' => '32',
            ],
            [
                'nombre' => 'CHALLHUAHUACHO',
                'id_provincia' => '32',
            ],
            [
                'nombre' => 'CHUQUIBAMBILLA',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'CURPAHUASI',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'HUAILLATI',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'MAMARA',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'MARISCAL GAMARRA',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'MICAELA BASTIDAS',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'PROGRESO',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'PATAYPAMPA',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'SAN ANTONIO',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'TURPAY',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'VILCABAMBA',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'VIRUNDO',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'SANTA ROSA',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'CURASCO',
                'id_provincia' => '33',
            ],
            [
                'nombre' => 'CHINCHEROS',
                'id_provincia' => '34',
            ],
            [
                'nombre' => 'ONGOY',
                'id_provincia' => '34',
            ],
            [
                'nombre' => 'OCOBAMBA',
                'id_provincia' => '34',
            ],
            [
                'nombre' => 'COCHARCAS',
                'id_provincia' => '34',
            ],
            [
                'nombre' => 'ANCO HUALLO',
                'id_provincia' => '34',
            ],
            [
                'nombre' => 'HUACCANA',
                'id_provincia' => '34',
            ],
            [
                'nombre' => 'URANMARCA',
                'id_provincia' => '34',
            ],
            [
                'nombre' => 'RANRACANCHA',
                'id_provincia' => '34',
            ],
            [
                'nombre' => 'AREQUIPA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'CAYMA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'CERRO COLORADO',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'CHARACATO',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'CHIGUATA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'LA JOYA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'MIRAFLORES',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'MOLLEBAYA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'PAUCARPATA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'POCSI',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'POLOBAYA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'QUEQUENA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'SABANDIA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'SACHACA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'SAN JUAN DE SIGUAS',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'SAN JUAN DE TARUCANI',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'SANTA ISABEL DE SIGUAS',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'STA RITA DE SIGUAS',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'SOCABAYA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'TIABAYA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'UCHUMAYO',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'VITOR',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'YANAHUARA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'YARABAMBA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'YURA',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'MARIANO MELGAR',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'JACOBO HUNTER',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'ALTO SELVA ALEGRE',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'JOSE LUIS BUSTAMANTE Y RIVERO',
                'id_provincia' => '35',
            ],
            [
                'nombre' => 'CHIVAY',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'ACHOMA',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'CABANACONDE',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'CAYLLOMA',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'CALLALLI',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'COPORAQUE',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'HUAMBO',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'HUANCA',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'ICHUPAMPA',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'LARI',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'LLUTA',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'MACA',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'MADRIGAL',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'SAN ANTONIO DE CHUCA',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'SIBAYO',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'TAPAY',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'TISCO',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'TUTI',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'YANQUE',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'MAJES',
                'id_provincia' => '36',
            ],
            [
                'nombre' => 'CAMANA',
                'id_provincia' => '37',
            ],
            [
                'nombre' => 'JOSE MARIA QUIMPER',
                'id_provincia' => '37',
            ],
            [
                'nombre' => 'MARIANO N VALCARCEL',
                'id_provincia' => '37',
            ],
            [
                'nombre' => 'MARISCAL CACERES',
                'id_provincia' => '37',
            ],
            [
                'nombre' => 'NICOLAS DE PIEROLA',
                'id_provincia' => '37',
            ],
            [
                'nombre' => 'OCONA',
                'id_provincia' => '37',
            ],
            [
                'nombre' => 'QUILCA',
                'id_provincia' => '37',
            ],
            [
                'nombre' => 'SAMUEL PASTOR',
                'id_provincia' => '37',
            ],
            [
                'nombre' => 'CARAVELI',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'ACARI',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'ATICO',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'ATIQUIPA',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'BELLA UNION',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'CAHUACHO',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'CHALA',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'CHAPARRA',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'HUANUHUANU',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'JAQUI',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'LOMAS',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'QUICACHA',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'YAUCA',
                'id_provincia' => '38',
            ],
            [
                'nombre' => 'APLAO',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'ANDAGUA',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'AYO',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'CHACHAS',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'CHILCAYMARCA',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'CHOCO',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'HUANCARQUI',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'MACHAGUAY',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'ORCOPAMPA',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'PAMPACOLCA',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'TIPAN',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'URACA',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'UNON',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'VIRACO',
                'id_provincia' => '39',
            ],
            [
                'nombre' => 'CHUQUIBAMBA',
                'id_provincia' => '40',
            ],
            [
                'nombre' => 'ANDARAY',
                'id_provincia' => '40',
            ],
            [
                'nombre' => 'CAYARANI',
                'id_provincia' => '40',
            ],
            [
                'nombre' => 'CHICHAS',
                'id_provincia' => '40',
            ],
            [
                'nombre' => 'IRAY',
                'id_provincia' => '40',
            ],
            [
                'nombre' => 'SALAMANCA',
                'id_provincia' => '40',
            ],
            [
                'nombre' => 'YANAQUIHUA',
                'id_provincia' => '40',
            ],
            [
                'nombre' => 'RIO GRANDE',
                'id_provincia' => '40',
            ],
            [
                'nombre' => 'MOLLENDO',
                'id_provincia' => '41',
            ],
            [
                'nombre' => 'COCACHACRA',
                'id_provincia' => '41',
            ],
            [
                'nombre' => 'DEAN VALDIVIA',
                'id_provincia' => '41',
            ],
            [
                'nombre' => 'ISLAY',
                'id_provincia' => '41',
            ],
            [
                'nombre' => 'MEJIA',
                'id_provincia' => '41',
            ],
            [
                'nombre' => 'PUNTA DE BOMBON',
                'id_provincia' => '41',
            ],
            [
                'nombre' => 'COTAHUASI',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'ALCA',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'CHARCANA',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'HUAYNACOTAS',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'PAMPAMARCA',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'PUYCA',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'QUECHUALLA',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'SAYLA',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'TAURIA',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'TOMEPAMPA',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'TORO',
                'id_provincia' => '42',
            ],
            [
                'nombre' => 'AYACUCHO',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'ACOS VINCHOS',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'CARMEN ALTO',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'CHIARA',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'QUINUA',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'SAN JOSE DE TICLLAS',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'SAN JUAN BAUTISTA',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'SANTIAGO DE PISCHA',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'VINCHOS',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'TAMBILLO',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'ACOCRO',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'SOCOS',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'OCROS',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'PACAYCASA',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'JESUS NAZARENO',
                'id_provincia' => '43',
            ],
            [
                'nombre' => 'CANGALLO',
                'id_provincia' => '44',
            ],
            [
                'nombre' => 'CHUSCHI',
                'id_provincia' => '44',
            ],
            [
                'nombre' => 'LOS MOROCHUCOS',
                'id_provincia' => '44',
            ],
            [
                'nombre' => 'PARAS',
                'id_provincia' => '44',
            ],
            [
                'nombre' => 'TOTOS',
                'id_provincia' => '44',
            ],
            [
                'nombre' => 'MARIA PARADO DE BELLIDO',
                'id_provincia' => '44',
            ],
            [
                'nombre' => 'HUANTA',
                'id_provincia' => '45',
            ],
            [
                'nombre' => 'AYAHUANCO',
                'id_provincia' => '45',
            ],
            [
                'nombre' => 'HUAMANGUILLA',
                'id_provincia' => '45',
            ],
            [
                'nombre' => 'IGUAIN',
                'id_provincia' => '45',
            ],
            [
                'nombre' => 'LURICOCHA',
                'id_provincia' => '45',
            ],
            [
                'nombre' => 'SANTILLANA',
                'id_provincia' => '45',
            ],
            [
                'nombre' => 'SIVIA',
                'id_provincia' => '45',
            ],
            [
                'nombre' => 'LLOCHEGUA',
                'id_provincia' => '45',
            ],
            [
                'nombre' => 'SAN MIGUEL',
                'id_provincia' => '46',
            ],
            [
                'nombre' => 'ANCO',
                'id_provincia' => '46',
            ],
            [
                'nombre' => 'AYNA',
                'id_provincia' => '46',
            ],
            [
                'nombre' => 'CHILCAS',
                'id_provincia' => '46',
            ],
            [
                'nombre' => 'CHUNGUI',
                'id_provincia' => '46',
            ],
            [
                'nombre' => 'TAMBO',
                'id_provincia' => '46',
            ],
            [
                'nombre' => 'LUIS CARRANZA',
                'id_provincia' => '46',
            ],
            [
                'nombre' => 'SANTA ROSA',
                'id_provincia' => '46',
            ],
            [
                'nombre' => 'PUQUIO',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'AUCARA',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'CABANA',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'CARMEN SALCEDO',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'CHAVINA',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'CHIPAO',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'HUAC-HUAS',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'LARAMATE',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'LEONCIO PRADO',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'LUCANAS',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'LLAUTA',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'OCANA',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'OTOCA',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'SANCOS',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'SAN JUAN',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'SAN PEDRO',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'STA ANA DE HUAYCAHUACHO',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'SANTA LUCIA',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'SAISA',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'SAN PEDRO DE PALCO',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'SAN CRISTOBAL',
                'id_provincia' => '47',
            ],
            [
                'nombre' => 'CORACORA',
                'id_provincia' => '48',
            ],
            [
                'nombre' => 'CORONEL CASTANEDA',
                'id_provincia' => '48',
            ],
            [
                'nombre' => 'CHUMPI',
                'id_provincia' => '48',
            ],
            [
                'nombre' => 'PACAPAUSA',
                'id_provincia' => '48',
            ],
            [
                'nombre' => 'PULLO',
                'id_provincia' => '48',
            ],
            [
                'nombre' => 'PUYUSCA',
                'id_provincia' => '48',
            ],
            [
                'nombre' => 'SAN FCO DE RAVACAYCO',
                'id_provincia' => '48',
            ],
            [
                'nombre' => 'UPAHUACHO',
                'id_provincia' => '48',
            ],
            [
                'nombre' => 'HUANCAPI',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'ALCAMENCA',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'APONGO',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'CANARIA',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'CAYARA',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'COLCA',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'HUAYA',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'HUAMANQUIQUIA',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'HUANCARAYLLA',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'SARHUA',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'VILCANCHOS',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'ASQUIPATA',
                'id_provincia' => '49',
            ],
            [
                'nombre' => 'SANCOS',
                'id_provincia' => '50',
            ],
            [
                'nombre' => 'SACSAMARCA',
                'id_provincia' => '50',
            ],
            [
                'nombre' => 'SANTIAGO DE LUCANAMARCA',
                'id_provincia' => '50',
            ],
            [
                'nombre' => 'CARAPO',
                'id_provincia' => '50',
            ],
            [
                'nombre' => 'VILCAS HUAMAN',
                'id_provincia' => '51',
            ],
            [
                'nombre' => 'VISCHONGO',
                'id_provincia' => '51',
            ],
            [
                'nombre' => 'ACCOMARCA',
                'id_provincia' => '51',
            ],
            [
                'nombre' => 'CARHUANCA',
                'id_provincia' => '51',
            ],
            [
                'nombre' => 'CONCEPCION',
                'id_provincia' => '51',
            ],
            [
                'nombre' => 'HUAMBALPA',
                'id_provincia' => '51',
            ],
            [
                'nombre' => 'SAURAMA',
                'id_provincia' => '51',
            ],
            [
                'nombre' => 'INDEPENDENCIA',
                'id_provincia' => '51',
            ],
            [
                'nombre' => 'PAUSA',
                'id_provincia' => '52',
            ],
            [
                'nombre' => 'COLTA',
                'id_provincia' => '52',
            ],
            [
                'nombre' => 'CORCULLA',
                'id_provincia' => '52',
            ],
            [
                'nombre' => 'LAMPA',
                'id_provincia' => '52',
            ],
            [
                'nombre' => 'MARCABAMBA',
                'id_provincia' => '52',
            ],
            [
                'nombre' => 'OYOLO',
                'id_provincia' => '52',
            ],
            [
                'nombre' => 'PARARCA',
                'id_provincia' => '52',
            ],
            [
                'nombre' => 'SAN JAVIER DE ALPABAMBA',
                'id_provincia' => '52',
            ],
            [
                'nombre' => 'SAN JOSE DE USHUA',
                'id_provincia' => '52',
            ],
            [
                'nombre' => 'SARA SARA',
                'id_provincia' => '52',
            ],
            [
                'nombre' => 'QUEROBAMBA',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'BELEN',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'CHALCOS',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'SAN SALVADOR DE QUIJE',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'PAICO',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'SANTIAGO DE PAUCARAY',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'SAN PEDRO DE LARCAY',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'SORAS',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'HUACANA',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'CHILCAYOC',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'MORCOLLA',
                'id_provincia' => '53',
            ],
            [
                'nombre' => 'CAJAMARCA',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'ASUNCION',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'COSPAN',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'CHETILLA',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'ENCANADA',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'JESUS',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'LOS BANOS DEL INCA',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'LLACANORA',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'MAGDALENA',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'MATARA',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'NAMORA',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'SAN JUAN',
                'id_provincia' => '54',
            ],
            [
                'nombre' => 'CAJABAMBA',
                'id_provincia' => '55',
            ],
            [
                'nombre' => 'CACHACHI',
                'id_provincia' => '55',
            ],
            [
                'nombre' => 'CONDEBAMBA',
                'id_provincia' => '55',
            ],
            [
                'nombre' => 'SITACOCHA',
                'id_provincia' => '55',
            ],
            [
                'nombre' => 'CELENDIN',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'CORTEGANA',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'CHUMUCH',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'HUASMIN',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'JORGE CHAVEZ',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'JOSE GALVEZ',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'MIGUEL IGLESIAS',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'OXAMARCA',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'SOROCHUCO',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'SUCRE',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'UTCO',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'LA LIBERTAD DE PALLAN',
                'id_provincia' => '56',
            ],
            [
                'nombre' => 'CONTUMAZA',
                'id_provincia' => '57',
            ],
            [
                'nombre' => 'CHILETE',
                'id_provincia' => '57',
            ],
            [
                'nombre' => 'GUZMANGO',
                'id_provincia' => '57',
            ],
            [
                'nombre' => 'SAN BENITO',
                'id_provincia' => '57',
            ],
            [
                'nombre' => 'CUPISNIQUE',
                'id_provincia' => '57',
            ],
            [
                'nombre' => 'TANTARICA',
                'id_provincia' => '57',
            ],
            [
                'nombre' => 'YONAN',
                'id_provincia' => '57',
            ],
            [
                'nombre' => 'STA CRUZ DE TOLEDO',
                'id_provincia' => '57',
            ],
            [
                'nombre' => 'CUTERVO',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'CALLAYUC',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'CUJILLO',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'CHOROS',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'LA RAMADA',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'PIMPINGOS',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'QUEROCOTILLO',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'SAN ANDRES DE CUTERVO',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'SAN JUAN DE CUTERVO',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'SAN LUIS DE LUCMA',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'SANTA CRUZ',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'SANTO DOMINGO DE LA CAPILLA',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'SANTO TOMAS',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'SOCOTA',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'TORIBIO CASANOVA',
                'id_provincia' => '58',
            ],
            [
                'nombre' => 'CHOTA',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'ANGUIA',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'COCHABAMBA',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'CONCHAN',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'CHADIN',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'CHIGUIRIP',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'CHIMBAN',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'HUAMBOS',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'LAJAS',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'LLAMA',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'MIRACOSTA',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'PACCHA',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'PION',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'QUEROCOTO',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'TACABAMBA',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'TOCMOCHE',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'SAN JUAN DE LICUPIS',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'CHOROPAMPA',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'CHALAMARCA',
                'id_provincia' => '59',
            ],
            [
                'nombre' => 'BAMBAMARCA',
                'id_provincia' => '60',
            ],
            [
                'nombre' => 'CHUGUR',
                'id_provincia' => '60',
            ],
            [
                'nombre' => 'HUALGAYOC',
                'id_provincia' => '60',
            ],
            [
                'nombre' => 'JAEN',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'BELLAVISTA',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'COLASAY',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'CHONTALI',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'POMAHUACA',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'PUCARA',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'SALLIQUE',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'SAN FELIPE',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'SAN JOSE DEL ALTO',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'SANTA ROSA',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'LAS PIRIAS',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'HUABAL',
                'id_provincia' => '61',
            ],
            [
                'nombre' => 'SANTA CRUZ',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'CATACHE',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'CHANCAIBANOS',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'LA ESPERANZA',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'NINABAMBA',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'PULAN',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'SEXI',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'UTICYACU',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'YAUYUCAN',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'ANDABAMBA',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'SAUCEPAMPA',
                'id_provincia' => '62',
            ],
            [
                'nombre' => 'SAN MIGUEL',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'CALQUIS',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'LA FLORIDA',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'LLAPA',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'NANCHOC',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'NIEPOS',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'SAN GREGORIO',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'SAN SILVESTRE DE COCHAN',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'EL PRADO',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'UNION AGUA BLANCA',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'TONGOD',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'CATILLUC',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'BOLIVAR',
                'id_provincia' => '63',
            ],
            [
                'nombre' => 'SAN IGNACIO',
                'id_provincia' => '64',
            ],
            [
                'nombre' => 'CHIRINOS',
                'id_provincia' => '64',
            ],
            [
                'nombre' => 'HUARANGO',
                'id_provincia' => '64',
            ],
            [
                'nombre' => 'NAMBALLE',
                'id_provincia' => '64',
            ],
            [
                'nombre' => 'LA COIPA',
                'id_provincia' => '64',
            ],
            [
                'nombre' => 'SAN JOSE DE LOURDES',
                'id_provincia' => '64',
            ],
            [
                'nombre' => 'TABACONAS',
                'id_provincia' => '64',
            ],
            [
                'nombre' => 'PEDRO GALVEZ',
                'id_provincia' => '65',
            ],
            [
                'nombre' => 'ICHOCAN',
                'id_provincia' => '65',
            ],
            [
                'nombre' => 'GREGORIO PITA',
                'id_provincia' => '65',
            ],
            [
                'nombre' => 'JOSE MANUEL QUIROZ',
                'id_provincia' => '65',
            ],
            [
                'nombre' => 'EDUARDO VILLANUEVA',
                'id_provincia' => '65',
            ],
            [
                'nombre' => 'JOSE SABOGAL',
                'id_provincia' => '65',
            ],
            [
                'nombre' => 'CHANCAY',
                'id_provincia' => '65',
            ],
            [
                'nombre' => 'SAN PABLO',
                'id_provincia' => '66',
            ],
            [
                'nombre' => 'SAN BERNARDINO',
                'id_provincia' => '66',
            ],
            [
                'nombre' => 'SAN LUIS',
                'id_provincia' => '66',
            ],
            [
                'nombre' => 'TUMBADEN',
                'id_provincia' => '66',
            ],
            [
                'nombre' => 'CUSCO',
                'id_provincia' => '67',
            ],
            [
                'nombre' => 'CCORCA',
                'id_provincia' => '67',
            ],
            [
                'nombre' => 'POROY',
                'id_provincia' => '67',
            ],
            [
                'nombre' => 'SAN JERONIMO',
                'id_provincia' => '67',
            ],
            [
                'nombre' => 'SAN SEBASTIAN',
                'id_provincia' => '67',
            ],
            [
                'nombre' => 'SANTIAGO',
                'id_provincia' => '67',
            ],
            [
                'nombre' => 'SAYLLA',
                'id_provincia' => '67',
            ],
            [
                'nombre' => 'WANCHAQ',
                'id_provincia' => '67',
            ],
            [
                'nombre' => 'ACOMAYO',
                'id_provincia' => '68',
            ],
            [
                'nombre' => 'ACOPIA',
                'id_provincia' => '68',
            ],
            [
                'nombre' => 'ACOS',
                'id_provincia' => '68',
            ],
            [
                'nombre' => 'POMACANCHI',
                'id_provincia' => '68',
            ],
            [
                'nombre' => 'RONDOCAN',
                'id_provincia' => '68',
            ],
            [
                'nombre' => 'SANGARARA',
                'id_provincia' => '68',
            ],
            [
                'nombre' => 'MOSOC LLACTA',
                'id_provincia' => '68',
            ],
            [
                'nombre' => 'ANTA',
                'id_provincia' => '69',
            ],
            [
                'nombre' => 'CHINCHAYPUJIO',
                'id_provincia' => '69',
            ],
            [
                'nombre' => 'HUAROCONDO',
                'id_provincia' => '69',
            ],
            [
                'nombre' => 'LIMATAMBO',
                'id_provincia' => '69',
            ],
            [
                'nombre' => 'MOLLEPATA',
                'id_provincia' => '69',
            ],
            [
                'nombre' => 'PUCYURA',
                'id_provincia' => '69',
            ],
            [
                'nombre' => 'ZURITE',
                'id_provincia' => '69',
            ],
            [
                'nombre' => 'CACHIMAYO',
                'id_provincia' => '69',
            ],
            [
                'nombre' => 'ANCAHUASI',
                'id_provincia' => '69',
            ],
            [
                'nombre' => 'CALCA',
                'id_provincia' => '70',
            ],
            [
                'nombre' => 'COYA',
                'id_provincia' => '70',
            ],
            [
                'nombre' => 'LAMAY',
                'id_provincia' => '70',
            ],
            [
                'nombre' => 'LARES',
                'id_provincia' => '70',
            ],
            [
                'nombre' => 'PISAC',
                'id_provincia' => '70',
            ],
            [
                'nombre' => 'SAN SALVADOR',
                'id_provincia' => '70',
            ],
            [
                'nombre' => 'TARAY',
                'id_provincia' => '70',
            ],
            [
                'nombre' => 'YANATILE',
                'id_provincia' => '70',
            ],
            [
                'nombre' => 'YANAOCA',
                'id_provincia' => '71',
            ],
            [
                'nombre' => 'CHECCA',
                'id_provincia' => '71',
            ],
            [
                'nombre' => 'KUNTURKANKI',
                'id_provincia' => '71',
            ],
            [
                'nombre' => 'LANGUI',
                'id_provincia' => '71',
            ],
            [
                'nombre' => 'LAYO',
                'id_provincia' => '71',
            ],
            [
                'nombre' => 'PAMPAMARCA',
                'id_provincia' => '71',
            ],
            [
                'nombre' => 'QUEHUE',
                'id_provincia' => '71',
            ],
            [
                'nombre' => 'TUPAC AMARU',
                'id_provincia' => '71',
            ],
            [
                'nombre' => 'SICUANI',
                'id_provincia' => '72',
            ],
            [
                'nombre' => 'COMBAPATA',
                'id_provincia' => '72',
            ],
            [
                'nombre' => 'CHECACUPE',
                'id_provincia' => '72',
            ],
            [
                'nombre' => 'MARANGANI',
                'id_provincia' => '72',
            ],
            [
                'nombre' => 'PITUMARCA',
                'id_provincia' => '72',
            ],
            [
                'nombre' => 'SAN PABLO',
                'id_provincia' => '72',
            ],
            [
                'nombre' => 'SAN PEDRO',
                'id_provincia' => '72',
            ],
            [
                'nombre' => 'TINTA',
                'id_provincia' => '72',
            ],
            [
                'nombre' => 'SANTO TOMAS',
                'id_provincia' => '73',
            ],
            [
                'nombre' => 'CAPACMARCA',
                'id_provincia' => '73',
            ],
            [
                'nombre' => 'COLQUEMARCA',
                'id_provincia' => '73',
            ],
            [
                'nombre' => 'CHAMACA',
                'id_provincia' => '73',
            ],
            [
                'nombre' => 'LIVITACA',
                'id_provincia' => '73',
            ],
            [
                'nombre' => 'LLUSCO',
                'id_provincia' => '73',
            ],
            [
                'nombre' => 'QUINOTA',
                'id_provincia' => '73',
            ],
            [
                'nombre' => 'VELILLE',
                'id_provincia' => '73',
            ],
            [
                'nombre' => 'ESPINAR',
                'id_provincia' => '74',
            ],
            [
                'nombre' => 'CONDOROMA',
                'id_provincia' => '74',
            ],
            [
                'nombre' => 'COPORAQUE',
                'id_provincia' => '74',
            ],
            [
                'nombre' => 'OCORURO',
                'id_provincia' => '74',
            ],
            [
                'nombre' => 'PALLPATA',
                'id_provincia' => '74',
            ],
            [
                'nombre' => 'PICHIGUA',
                'id_provincia' => '74',
            ],
            [
                'nombre' => 'SUYKUTAMBO',
                'id_provincia' => '74',
            ],
            [
                'nombre' => 'ALTO PICHIGUA',
                'id_provincia' => '74',
            ],
            [
                'nombre' => 'SANTA ANA',
                'id_provincia' => '75',
            ],
            [
                'nombre' => 'ECHARATE',
                'id_provincia' => '75',
            ],
            [
                'nombre' => 'HUAYOPATA',
                'id_provincia' => '75',
            ],
            [
                'nombre' => 'MARANURA',
                'id_provincia' => '75',
            ],
            [
                'nombre' => 'OCOBAMBA',
                'id_provincia' => '75',
            ],
            [
                'nombre' => 'SANTA TERESA',
                'id_provincia' => '75',
            ],
            [
                'nombre' => 'VILCABAMBA',
                'id_provincia' => '75',
            ],
            [
                'nombre' => 'QUELLOUNO',
                'id_provincia' => '75',
            ],
            [
                'nombre' => 'KIMBIRI',
                'id_provincia' => '75',
            ],
            [
                'nombre' => 'PICHARI',
                'id_provincia' => '75',
            ],
            [
                'nombre' => 'PARURO',
                'id_provincia' => '76',
            ],
            [
                'nombre' => 'ACCHA',
                'id_provincia' => '76',
            ],
            [
                'nombre' => 'CCAPI',
                'id_provincia' => '76',
            ],
            [
                'nombre' => 'COLCHA',
                'id_provincia' => '76',
            ],
            [
                'nombre' => 'HUANOQUITE',
                'id_provincia' => '76',
            ],
            [
                'nombre' => 'OMACHA',
                'id_provincia' => '76',
            ],
            [
                'nombre' => 'YAURISQUE',
                'id_provincia' => '76',
            ],
            [
                'nombre' => 'PACCARITAMBO',
                'id_provincia' => '76',
            ],
            [
                'nombre' => 'PILLPINTO',
                'id_provincia' => '76',
            ],
            [
                'nombre' => 'PAUCARTAMBO',
                'id_provincia' => '77',
            ],
            [
                'nombre' => 'CAICAY',
                'id_provincia' => '77',
            ],
            [
                'nombre' => 'COLQUEPATA',
                'id_provincia' => '77',
            ],
            [
                'nombre' => 'CHALLABAMBA',
                'id_provincia' => '77',
            ],
            [
                'nombre' => 'COSNIPATA',
                'id_provincia' => '77',
            ],
            [
                'nombre' => 'HUANCARANI',
                'id_provincia' => '77',
            ],
            [
                'nombre' => 'URCOS',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'ANDAHUAYLILLAS',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'CAMANTI',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'CCARHUAYO',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'CCATCA',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'CUSIPATA',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'HUARO',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'LUCRE',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'MARCAPATA',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'OCONGATE',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'OROPESA',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'QUIQUIJANA',
                'id_provincia' => '78',
            ],
            [
                'nombre' => 'URUBAMBA',
                'id_provincia' => '79',
            ],
            [
                'nombre' => 'CHINCHERO',
                'id_provincia' => '79',
            ],
            [
                'nombre' => 'HUAYLLABAMBA',
                'id_provincia' => '79',
            ],
            [
                'nombre' => 'MACHUPICCHU',
                'id_provincia' => '79',
            ],
            [
                'nombre' => 'MARAS',
                'id_provincia' => '79',
            ],
            [
                'nombre' => 'OLLANTAYTAMBO',
                'id_provincia' => '79',
            ],
            [
                'nombre' => 'YUCAY',
                'id_provincia' => '79',
            ],
            [
                'nombre' => 'HUANCAVELICA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'ACOBAMBILLA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'ACORIA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'CONAYCA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'CUENCA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'HUACHOCOLPA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'HUAYLLAHUARA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'IZCUCHACA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'LARIA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'MANTA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'MARISCAL CACERES',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'MOYA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'NUEVO OCCORO',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'PALCA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'PILCHACA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'VILCA',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'YAULI',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'ASCENCION',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'HUANDO',
                'id_provincia' => '80',
            ],
            [
                'nombre' => 'ACOBAMBA',
                'id_provincia' => '81',
            ],
            [
                'nombre' => 'ANTA',
                'id_provincia' => '81',
            ],
            [
                'nombre' => 'ANDABAMBA',
                'id_provincia' => '81',
            ],
            [
                'nombre' => 'CAJA',
                'id_provincia' => '81',
            ],
            [
                'nombre' => 'MARCAS',
                'id_provincia' => '81',
            ],
            [
                'nombre' => 'PAUCARA',
                'id_provincia' => '81',
            ],
            [
                'nombre' => 'POMACOCHA',
                'id_provincia' => '81',
            ],
            [
                'nombre' => 'ROSARIO',
                'id_provincia' => '81',
            ],
            [
                'nombre' => 'LIRCAY',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'ANCHONGA',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'CALLANMARCA',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'CONGALLA',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'CHINCHO',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'HUAYLLAY GRANDE',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'HUANCA HUANCA',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'JULCAMARCA',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'SAN ANTONIO DE ANTAPARCO',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'STO TOMAS DE PATA',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'SECCLLA',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'CCOCHACCASA',
                'id_provincia' => '82',
            ],
            [
                'nombre' => 'CASTROVIRREYNA',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'ARMA',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'AURAHUA',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'CAPILLAS',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'COCAS',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'CHUPAMARCA',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'HUACHOS',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'HUAMATAMBO',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'MOLLEPAMPA',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'SAN JUAN',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'TANTARA',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'TICRAPO',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'SANTA ANA',
                'id_provincia' => '83',
            ],
            [
                'nombre' => 'PAMPAS',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'ACOSTAMBO',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'ACRAQUIA',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'AHUAYCHA',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'COLCABAMBA',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'DANIEL HERNANDEZ',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'HUACHOCOLPA',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'HUARIBAMBA',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'NAHUIMPUQUIO',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'PAZOS',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'QUISHUAR',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'SALCABAMBA',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'SAN MARCOS DE ROCCHAC',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'SURCUBAMBA',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'TINTAY PUNCU',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'SALCAHUASI',
                'id_provincia' => '84',
            ],
            [
                'nombre' => 'AYAVI',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'CORDOVA',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'HUAYACUNDO ARMA',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'HUAYTARA',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'LARAMARCA',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'OCOYO',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'PILPICHACA',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'QUERCO',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'QUITO ARMA',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'SAN ANTONIO DE CUSICANCHA',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'SAN FRANCISCO DE SANGAYAICO',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'SAN ISIDRO',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'SANTIAGO DE CHOCORVOS',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'SANTIAGO DE QUIRAHUARA',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'SANTO DOMINGO DE CAPILLA',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'TAMBO',
                'id_provincia' => '85',
            ],
            [
                'nombre' => 'CHURCAMPA',
                'id_provincia' => '86',
            ],
            [
                'nombre' => 'ANCO',
                'id_provincia' => '86',
            ],
            [
                'nombre' => 'CHINCHIHUASI',
                'id_provincia' => '86',
            ],
            [
                'nombre' => 'EL CARMEN',
                'id_provincia' => '86',
            ],
            [
                'nombre' => 'LA MERCED',
                'id_provincia' => '86',
            ],
            [
                'nombre' => 'LOCROJA',
                'id_provincia' => '86',
            ],
            [
                'nombre' => 'PAUCARBAMBA',
                'id_provincia' => '86',
            ],
            [
                'nombre' => 'SAN MIGUEL DE MAYOC',
                'id_provincia' => '86',
            ],
            [
                'nombre' => 'SAN PEDRO DE CORIS',
                'id_provincia' => '86',
            ],
            [
                'nombre' => 'PACHAMARCA',
                'id_provincia' => '86',
            ],
            [
                'nombre' => 'HUANUCO',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'CHINCHAO',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'CHURUBAMBA',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'MARGOS',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'QUISQUI',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'SAN FCO DE CAYRAN',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'SAN PEDRO DE CHAULAN',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'STA MARIA DEL VALLE',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'YARUMAYO',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'AMARILIS',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'PILLCO MARCA',
                'id_provincia' => '87',
            ],
            [
                'nombre' => 'AMBO',
                'id_provincia' => '88',
            ],
            [
                'nombre' => 'CAYNA',
                'id_provincia' => '88',
            ],
            [
                'nombre' => 'COLPAS',
                'id_provincia' => '88',
            ],
            [
                'nombre' => 'CONCHAMARCA',
                'id_provincia' => '88',
            ],
            [
                'nombre' => 'HUACAR',
                'id_provincia' => '88',
            ],
            [
                'nombre' => 'SAN FRANCISCO',
                'id_provincia' => '88',
            ],
            [
                'nombre' => 'SAN RAFAEL',
                'id_provincia' => '88',
            ],
            [
                'nombre' => 'TOMAY KICHWA',
                'id_provincia' => '88',
            ],
            [
                'nombre' => 'LA UNION',
                'id_provincia' => '89',
            ],
            [
                'nombre' => 'CHUQUIS',
                'id_provincia' => '89',
            ],
            [
                'nombre' => 'MARIAS',
                'id_provincia' => '89',
            ],
            [
                'nombre' => 'PACHAS',
                'id_provincia' => '89',
            ],
            [
                'nombre' => 'QUIVILLA',
                'id_provincia' => '89',
            ],
            [
                'nombre' => 'RIPAN',
                'id_provincia' => '89',
            ],
            [
                'nombre' => 'SHUNQUI',
                'id_provincia' => '89',
            ],
            [
                'nombre' => 'SILLAPATA',
                'id_provincia' => '89',
            ],
            [
                'nombre' => 'YANAS',
                'id_provincia' => '89',
            ],
            [
                'nombre' => 'LLATA',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'ARANCAY',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'CHAVIN DE PARIARCA',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'JACAS GRANDE',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'JIRCAN',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'MIRAFLORES',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'MONZON',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'PUNCHAO',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'PUNOS',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'SINGA',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'TANTAMAYO',
                'id_provincia' => '90',
            ],
            [
                'nombre' => 'HUACRACHUCO',
                'id_provincia' => '91',
            ],
            [
                'nombre' => 'CHOLON',
                'id_provincia' => '91',
            ],
            [
                'nombre' => 'SAN BUENAVENTURA',
                'id_provincia' => '91',
            ],
            [
                'nombre' => 'RUPA RUPA',
                'id_provincia' => '92',
            ],
            [
                'nombre' => 'DANIEL ALOMIA ROBLES',
                'id_provincia' => '92',
            ],
            [
                'nombre' => 'HERMILIO VALDIZAN',
                'id_provincia' => '92',
            ],
            [
                'nombre' => 'LUYANDO',
                'id_provincia' => '92',
            ],
            [
                'nombre' => 'MARIANO DAMASO BERAUN',
                'id_provincia' => '92',
            ],
            [
                'nombre' => 'JOSE CRESPO Y CASTILLO',
                'id_provincia' => '92',
            ],
            [
                'nombre' => 'PANAO',
                'id_provincia' => '93',
            ],
            [
                'nombre' => 'CHAGLLA',
                'id_provincia' => '93',
            ],
            [
                'nombre' => 'MOLINO',
                'id_provincia' => '93',
            ],
            [
                'nombre' => 'UMARI',
                'id_provincia' => '93',
            ],
            [
                'nombre' => 'HONORIA',
                'id_provincia' => '94',
            ],
            [
                'nombre' => 'PUERTO INCA',
                'id_provincia' => '94',
            ],
            [
                'nombre' => 'CODO DEL POZUZO',
                'id_provincia' => '94',
            ],
            [
                'nombre' => 'TOURNAVISTA',
                'id_provincia' => '94',
            ],
            [
                'nombre' => 'YUYAPICHIS',
                'id_provincia' => '94',
            ],
            [
                'nombre' => 'HUACAYBAMBA',
                'id_provincia' => '95',
            ],
            [
                'nombre' => 'PINRA',
                'id_provincia' => '95',
            ],
            [
                'nombre' => 'CANCHABAMBA',
                'id_provincia' => '95',
            ],
            [
                'nombre' => 'COCHABAMBA',
                'id_provincia' => '95',
            ],
            [
                'nombre' => 'JESUS',
                'id_provincia' => '96',
            ],
            [
                'nombre' => 'BANOS',
                'id_provincia' => '96',
            ],
            [
                'nombre' => 'SAN FRANCISCO DE ASIS',
                'id_provincia' => '96',
            ],
            [
                'nombre' => 'QUEROPALCA',
                'id_provincia' => '96',
            ],
            [
                'nombre' => 'SAN MIGUEL DE CAURI',
                'id_provincia' => '96',
            ],
            [
                'nombre' => 'RONDOS',
                'id_provincia' => '96',
            ],
            [
                'nombre' => 'JIVIA',
                'id_provincia' => '96',
            ],
            [
                'nombre' => 'CHAVINILLO',
                'id_provincia' => '97',
            ],
            [
                'nombre' => 'APARICIO POMARES (CHUPAN)',
                'id_provincia' => '97',
            ],
            [
                'nombre' => 'CAHUAC',
                'id_provincia' => '97',
            ],
            [
                'nombre' => 'CHACABAMBA',
                'id_provincia' => '97',
            ],
            [
                'nombre' => 'JACAS CHICO',
                'id_provincia' => '97',
            ],
            [
                'nombre' => 'OBAS',
                'id_provincia' => '97',
            ],
            [
                'nombre' => 'PAMPAMARCA',
                'id_provincia' => '97',
            ],
            [
                'nombre' => 'CHORAS ',
                'id_provincia' => '97',
            ],
            [
                'nombre' => 'ICA',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'LA TINGUINA',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'LOS AQUIJES',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'PARCONA',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'PUEBLO NUEVO',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'SALAS',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'SAN JOSE DE LOS MOLINOS',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'SAN JUAN BAUTISTA',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'SANTIAGO',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'SUBTANJALLA',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'YAUCA DEL ROSARIO',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'TATE',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'PACHACUTEC',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'OCUCAJE',
                'id_provincia' => '98',
            ],
            [
                'nombre' => 'CHINCHA ALTA',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'CHAVIN',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'CHINCHA BAJA',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'EL CARMEN',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'GROCIO PRADO',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'SAN PEDRO DE HUACARPANA',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'SUNAMPE',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'TAMBO DE MORA',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'ALTO LARAN',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'PUEBLO NUEVO',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'SAN JUAN DE YANAC',
                'id_provincia' => '99',
            ],
            [
                'nombre' => 'NAZCA',
                'id_provincia' => '100',
            ],
            [
                'nombre' => 'CHANGUILLO',
                'id_provincia' => '100',
            ],
            [
                'nombre' => 'EL INGENIO',
                'id_provincia' => '100',
            ],
            [
                'nombre' => 'MARCONA',
                'id_provincia' => '100',
            ],
            [
                'nombre' => 'VISTA ALEGRE',
                'id_provincia' => '100',
            ],
            [
                'nombre' => 'PISCO',
                'id_provincia' => '101',
            ],
            [
                'nombre' => 'HUANCANO',
                'id_provincia' => '101',
            ],
            [
                'nombre' => 'HUMAY',
                'id_provincia' => '101',
            ],
            [
                'nombre' => 'INDEPENDENCIA',
                'id_provincia' => '101',
            ],
            [
                'nombre' => 'PARACAS',
                'id_provincia' => '101',
            ],
            [
                'nombre' => 'SAN ANDRES',
                'id_provincia' => '101',
            ],
            [
                'nombre' => 'SAN CLEMENTE',
                'id_provincia' => '101',
            ],
            [
                'nombre' => 'TUPAC AMARU INCA',
                'id_provincia' => '101',
            ],
            [
                'nombre' => 'PALPA',
                'id_provincia' => '102',
            ],
            [
                'nombre' => 'LLIPATA',
                'id_provincia' => '102',
            ],
            [
                'nombre' => 'RIO GRANDE',
                'id_provincia' => '102',
            ],
            [
                'nombre' => 'SANTA CRUZ',
                'id_provincia' => '102',
            ],
            [
                'nombre' => 'TIBILLO',
                'id_provincia' => '102',
            ],
            [
                'nombre' => 'HUANCAYO',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'CARHUACALLANGA',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'COLCA',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'CULLHUAS',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'CHACAPAMPA',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'CHICCHE',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'CHILCA',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'CHONGOS ALTO',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'CHUPURO',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'EL TAMBO',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'HUACRAPUQUIO',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'HUALHUAS',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'HUANCAN',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'HUASICANCHA',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'HUAYUCACHI',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'INGENIO',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'PARIAHUANCA',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'PILCOMAYO',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'PUCARA',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'QUICHUAY',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'QUILCAS',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'SAN AGUSTIN',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'SAN JERONIMO DE TUNAN',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'STO DOMINGO DE ACOBAMBA',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'SANO',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'SAPALLANGA',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'SICAYA',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'VIQUES',
                'id_provincia' => '103',
            ],
            [
                'nombre' => 'CONCEPCION',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'ACO',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'ANDAMARCA',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'COMAS',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'COCHAS',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'CHAMBARA',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'HEROINAS TOLEDO',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'MANZANARES',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'MCAL CASTILLA',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'MATAHUASI',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'MITO',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'NUEVE DE JULIO',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'ORCOTUNA',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'STA ROSA DE OCOPA',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'SAN JOSE DE QUERO',
                'id_provincia' => '104',
            ],
            [
                'nombre' => 'JAUJA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'ACOLLA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'APATA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'ATAURA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'CANCHAILLO',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'EL MANTARO',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'HUAMALI',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'HUARIPAMPA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'HUERTAS',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'JANJAILLO',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'JULCAN',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'LEONOR ORDONEZ',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'LLOCLLAPAMPA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'MARCO',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'MASMA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'MOLINOS',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'MONOBAMBA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'MUQUI',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'MUQUIYAUYO',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'PACA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'PACCHA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'PANCAN',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'PARCO',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'POMACANCHA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'RICRAN',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'SAN LORENZO',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'SAN PEDRO DE CHUNAN',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'SINCOS',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'TUNAN MARCA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'YAULI',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'CURICACA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'MASMA CHICCHE',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'SAUSA',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'YAUYOS',
                'id_provincia' => '105',
            ],
            [
                'nombre' => 'JUNIN',
                'id_provincia' => '106',
            ],
            [
                'nombre' => 'CARHUAMAYO',
                'id_provincia' => '106',
            ],
            [
                'nombre' => 'ONDORES',
                'id_provincia' => '106',
            ],
            [
                'nombre' => 'ULCUMAYO',
                'id_provincia' => '106',
            ],
            [
                'nombre' => 'TARMA',
                'id_provincia' => '107',
            ],
            [
                'nombre' => 'ACOBAMBA',
                'id_provincia' => '107',
            ],
            [
                'nombre' => 'HUARICOLCA',
                'id_provincia' => '107',
            ],
            [
                'nombre' => 'HUASAHUASI',
                'id_provincia' => '107',
            ],
            [
                'nombre' => 'LA UNION',
                'id_provincia' => '107',
            ],
            [
                'nombre' => 'PALCA',
                'id_provincia' => '107',
            ],
            [
                'nombre' => 'PALCAMAYO',
                'id_provincia' => '107',
            ],
            [
                'nombre' => 'SAN PEDRO DE CAJAS',
                'id_provincia' => '107',
            ],
            [
                'nombre' => 'TAPO',
                'id_provincia' => '107',
            ],
            [
                'nombre' => 'LA OROYA',
                'id_provincia' => '108',
            ],
            [
                'nombre' => 'CHACAPALPA',
                'id_provincia' => '108',
            ],
            [
                'nombre' => 'HUAY HUAY',
                'id_provincia' => '108',
            ],
            [
                'nombre' => 'MARCAPOMACOCHA',
                'id_provincia' => '108',
            ],
            [
                'nombre' => 'MOROCOCHA',
                'id_provincia' => '108',
            ],
            [
                'nombre' => 'PACCHA',
                'id_provincia' => '108',
            ],
            [
                'nombre' => 'STA BARBARA DE CARHUACAYAN',
                'id_provincia' => '108',
            ],
            [
                'nombre' => 'SUITUCANCHA',
                'id_provincia' => '108',
            ],
            [
                'nombre' => 'YAULI',
                'id_provincia' => '108',
            ],
            [
                'nombre' => 'STA ROSA DE SACCO',
                'id_provincia' => '108',
            ],
            [
                'nombre' => 'SATIPO',
                'id_provincia' => '109',
            ],
            [
                'nombre' => 'COVIRIALI',
                'id_provincia' => '109',
            ],
            [
                'nombre' => 'LLAYLLA',
                'id_provincia' => '109',
            ],
            [
                'nombre' => 'MAZAMARI',
                'id_provincia' => '109',
            ],
            [
                'nombre' => 'PAMPA HERMOSA',
                'id_provincia' => '109',
            ],
            [
                'nombre' => 'PANGOA',
                'id_provincia' => '109',
            ],
            [
                'nombre' => 'RIO NEGRO',
                'id_provincia' => '109',
            ],
            [
                'nombre' => 'RIO TAMBO',
                'id_provincia' => '109',
            ],
            [
                'nombre' => 'CHANCHAMAYO',
                'id_provincia' => '110',
            ],
            [
                'nombre' => 'SAN RAMON',
                'id_provincia' => '110',
            ],
            [
                'nombre' => 'VITOC',
                'id_provincia' => '110',
            ],
            [
                'nombre' => 'SAN LUIS DE SHUARO',
                'id_provincia' => '110',
            ],
            [
                'nombre' => 'PICHANAQUI',
                'id_provincia' => '110',
            ],
            [
                'nombre' => 'PERENE',
                'id_provincia' => '110',
            ],
            [
                'nombre' => 'CHUPACA',
                'id_provincia' => '111',
            ],
            [
                'nombre' => 'AHUAC',
                'id_provincia' => '111',
            ],
            [
                'nombre' => 'CHONGOS BAJO',
                'id_provincia' => '111',
            ],
            [
                'nombre' => 'HUACHAC',
                'id_provincia' => '111',
            ],
            [
                'nombre' => 'HUAMANCACA CHICO',
                'id_provincia' => '111',
            ],
            [
                'nombre' => 'SAN JUAN DE ISCOS',
                'id_provincia' => '111',
            ],
            [
                'nombre' => 'SAN JUAN DE JARPA',
                'id_provincia' => '111',
            ],
            [
                'nombre' => 'TRES DE DICIEMBRE',
                'id_provincia' => '111',
            ],
            [
                'nombre' => 'YANACANCHA',
                'id_provincia' => '111',
            ],
            [
                'nombre' => 'TRUJILLO',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'HUANCHACO',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'LAREDO',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'MOCHE',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'SALAVERRY',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'SIMBAL',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'VICTOR LARCO HERRERA',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'POROTO',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'EL PORVENIR',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'LA ESPERANZA',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'FLORENCIA DE MORA',
                'id_provincia' => '112',
            ],
            [
                'nombre' => 'BOLIVAR',
                'id_provincia' => '113',
            ],
            [
                'nombre' => 'BAMBAMARCA',
                'id_provincia' => '113',
            ],
            [
                'nombre' => 'CONDORMARCA',
                'id_provincia' => '113',
            ],
            [
                'nombre' => 'LONGOTEA',
                'id_provincia' => '113',
            ],
            [
                'nombre' => 'UCUNCHA',
                'id_provincia' => '113',
            ],
            [
                'nombre' => 'UCHUMARCA',
                'id_provincia' => '113',
            ],
            [
                'nombre' => 'HUAMACHUCO',
                'id_provincia' => '114',
            ],
            [
                'nombre' => 'COCHORCO',
                'id_provincia' => '114',
            ],
            [
                'nombre' => 'CURGOS',
                'id_provincia' => '114',
            ],
            [
                'nombre' => 'CHUGAY',
                'id_provincia' => '114',
            ],
            [
                'nombre' => 'MARCABAL',
                'id_provincia' => '114',
            ],
            [
                'nombre' => 'SANAGORAN',
                'id_provincia' => '114',
            ],
            [
                'nombre' => 'SARIN',
                'id_provincia' => '114',
            ],
            [
                'nombre' => 'SARTIMBAMBA',
                'id_provincia' => '114',
            ],
            [
                'nombre' => 'OTUZCO',
                'id_provincia' => '115',
            ],
            [
                'nombre' => 'AGALLPAMPA',
                'id_provincia' => '115',
            ],
            [
                'nombre' => 'CHARAT',
                'id_provincia' => '115',
            ],
            [
                'nombre' => 'HUARANCHAL',
                'id_provincia' => '115',
            ],
            [
                'nombre' => 'LA CUESTA',
                'id_provincia' => '115',
            ],
            [
                'nombre' => 'PARANDAY',
                'id_provincia' => '115',
            ],
            [
                'nombre' => 'SALPO',
                'id_provincia' => '115',
            ],
            [
                'nombre' => 'SINSICAP',
                'id_provincia' => '115',
            ],
            [
                'nombre' => 'USQUIL',
                'id_provincia' => '115',
            ],
            [
                'nombre' => 'MACHE',
                'id_provincia' => '115',
            ],
            [
                'nombre' => 'SAN PEDRO DE LLOC',
                'id_provincia' => '116',
            ],
            [
                'nombre' => 'GUADALUPE',
                'id_provincia' => '116',
            ],
            [
                'nombre' => 'JEQUETEPEQUE',
                'id_provincia' => '116',
            ],
            [
                'nombre' => 'PACASMAYO',
                'id_provincia' => '116',
            ],
            [
                'nombre' => 'SAN JOSE',
                'id_provincia' => '116',
            ],
            [
                'nombre' => 'TAYABAMBA',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'BULDIBUYO',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'CHILLIA',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'HUAYLILLAS',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'HUANCASPATA',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'HUAYO',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'ONGON',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'PARCOY',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'PATAZ',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'PIAS',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'TAURIJA',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'URPAY',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'SANTIAGO DE CHALLAS',
                'id_provincia' => '117',
            ],
            [
                'nombre' => 'SANTIAGO DE CHUCO',
                'id_provincia' => '118',
            ],
            [
                'nombre' => 'CACHICADAN',
                'id_provincia' => '118',
            ],
            [
                'nombre' => 'MOLLEBAMBA',
                'id_provincia' => '118',
            ],
            [
                'nombre' => 'MOLLEPATA',
                'id_provincia' => '118',
            ],
            [
                'nombre' => 'QUIRUVILCA',
                'id_provincia' => '118',
            ],
            [
                'nombre' => 'SANTA CRUZ DE CHUCA',
                'id_provincia' => '118',
            ],
            [
                'nombre' => 'SITABAMBA',
                'id_provincia' => '118',
            ],
            [
                'nombre' => 'ANGASMARCA',
                'id_provincia' => '118',
            ],
            [
                'nombre' => 'ASCOPE',
                'id_provincia' => '119',
            ],
            [
                'nombre' => 'CHICAMA',
                'id_provincia' => '119',
            ],
            [
                'nombre' => 'CHOCOPE',
                'id_provincia' => '119',
            ],
            [
                'nombre' => 'SANTIAGO DE CAO',
                'id_provincia' => '119',
            ],
            [
                'nombre' => 'MAGDALENA DE CAO',
                'id_provincia' => '119',
            ],
            [
                'nombre' => 'PAIJAN',
                'id_provincia' => '119',
            ],
            [
                'nombre' => 'RAZURI',
                'id_provincia' => '119',
            ],
            [
                'nombre' => 'CASA GRANDE',
                'id_provincia' => '119',
            ],
            [
                'nombre' => 'CHEPEN',
                'id_provincia' => '120',
            ],
            [
                'nombre' => 'PACANGA',
                'id_provincia' => '120',
            ],
            [
                'nombre' => 'PUEBLO NUEVO',
                'id_provincia' => '120',
            ],
            [
                'nombre' => 'JULCAN',
                'id_provincia' => '121',
            ],
            [
                'nombre' => 'CARABAMBA',
                'id_provincia' => '121',
            ],
            [
                'nombre' => 'CALAMARCA',
                'id_provincia' => '121',
            ],
            [
                'nombre' => 'HUASO',
                'id_provincia' => '121',
            ],
            [
                'nombre' => 'CASCAS',
                'id_provincia' => '122',
            ],
            [
                'nombre' => 'LUCMA',
                'id_provincia' => '122',
            ],
            [
                'nombre' => 'MARMOT',
                'id_provincia' => '122',
            ],
            [
                'nombre' => 'SAYAPULLO',
                'id_provincia' => '122',
            ],
            [
                'nombre' => 'VIRU',
                'id_provincia' => '123',
            ],
            [
                'nombre' => 'CHAO',
                'id_provincia' => '123',
            ],
            [
                'nombre' => 'GUADALUPITO',
                'id_provincia' => '123',
            ],
            [
                'nombre' => 'CHICLAYO',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'CHONGOYAPE',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'ETEN',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'ETEN PUERTO',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'LAGUNAS',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'MONSEFU',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'NUEVA ARICA',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'OYOTUN',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'PICSI',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'PIMENTEL',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'REQUE',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'JOSE LEONARDO ORTIZ',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'SANTA ROSA',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'SANA',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'LA VICTORIA',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'CAYALTI',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'PATAPO',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'POMALCA',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'PUCALA',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'TUMAN',
                'id_provincia' => '124',
            ],
            [
                'nombre' => 'FERRENAFE',
                'id_provincia' => '125',
            ],
            [
                'nombre' => 'INCAHUASI',
                'id_provincia' => '125',
            ],
            [
                'nombre' => 'CANARIS',
                'id_provincia' => '125',
            ],
            [
                'nombre' => 'PITIPO',
                'id_provincia' => '125',
            ],
            [
                'nombre' => 'PUEBLO NUEVO',
                'id_provincia' => '125',
            ],
            [
                'nombre' => 'MANUEL ANTONIO MESONES MURO',
                'id_provincia' => '125',
            ],
            [
                'nombre' => 'LAMBAYEQUE',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'CHOCHOPE',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'ILLIMO',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'JAYANCA',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'MOCHUMI',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'MORROPE',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'MOTUPE',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'OLMOS',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'PACORA',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'SALAS',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'SAN JOSE',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'TUCUME',
                'id_provincia' => '126',
            ],
            [
                'nombre' => 'LIMA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'ANCON',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'ATE',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'BRENA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'CARABAYLLO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'COMAS',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'CHACLACAYO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'CHORRILLOS',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'LA VICTORIA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'LA MOLINA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'LINCE',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'LURIGANCHO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'LURIN',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'MAGDALENA DEL MAR',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'MIRAFLORES',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'PACHACAMAC',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'PUEBLO LIBRE',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'PUCUSANA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'PUENTE PIEDRA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'PUNTA HERMOSA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'PUNTA NEGRA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'RIMAC',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SAN BARTOLO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SAN ISIDRO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'BARRANCO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SAN MARTIN DE PORRES',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SAN MIGUEL',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'STA MARIA DEL MAR',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SANTA ROSA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SANTIAGO DE SURCO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SURQUILLO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'VILLA MARIA DEL TRIUNFO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'JESUS MARIA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'INDEPENDENCIA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'EL AGUSTINO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SAN JUAN DE MIRAFLORES',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SAN JUAN DE LURIGANCHO',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SAN LUIS',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'CIENEGUILLA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SAN BORJA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'VILLA EL SALVADOR',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'LOS OLIVOS',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'SANTA ANITA',
                'id_provincia' => '127',
            ],
            [
                'nombre' => 'CAJATAMBO',
                'id_provincia' => '128',
            ],
            [
                'nombre' => 'COPA',
                'id_provincia' => '128',
            ],
            [
                'nombre' => 'GORGOR',
                'id_provincia' => '128',
            ],
            [
                'nombre' => 'HUANCAPON',
                'id_provincia' => '128',
            ],
            [
                'nombre' => 'MANAS',
                'id_provincia' => '128',
            ],
            [
                'nombre' => 'CANTA',
                'id_provincia' => '129',
            ],
            [
                'nombre' => 'ARAHUAY',
                'id_provincia' => '129',
            ],
            [
                'nombre' => 'HUAMANTANGA',
                'id_provincia' => '129',
            ],
            [
                'nombre' => 'HUAROS',
                'id_provincia' => '129',
            ],
            [
                'nombre' => 'LACHAQUI',
                'id_provincia' => '129',
            ],
            [
                'nombre' => 'SAN BUENAVENTURA',
                'id_provincia' => '129',
            ],
            [
                'nombre' => 'SANTA ROSA DE QUIVES',
                'id_provincia' => '129',
            ],
            [
                'nombre' => 'SAN VICENTE DE CANETE',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'CALANGO',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'CERRO AZUL',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'COAYLLO',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'CHILCA',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'IMPERIAL',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'LUNAHUANA',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'MALA',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'NUEVO IMPERIAL',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'PACARAN',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'QUILMANA',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'SAN ANTONIO',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'SAN LUIS',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'SANTA CRUZ DE FLORES',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'ZUNIGA',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'ASIA',
                'id_provincia' => '130',
            ],
            [
                'nombre' => 'HUACHO',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'AMBAR',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'CALETA DE CARQUIN',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'CHECRAS',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'HUALMAY',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'HUAURA',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'LEONCIO PRADO',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'PACCHO',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'SANTA LEONOR',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'SANTA MARIA',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'SAYAN',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'VEGUETA',
                'id_provincia' => '131',
            ],
            [
                'nombre' => 'MATUCANA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'ANTIOQUIA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'CALLAHUANCA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'CARAMPOMA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'CASTA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'CUENCA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'CHICLA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'HUANZA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'HUAROCHIRI',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'LAHUAYTAMBO',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'LANGA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'MARIATANA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'RICARDO PALMA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SAN ANDRES DE TUPICOCHA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SAN ANTONIO',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SAN BARTOLOME',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SAN DAMIAN',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SANGALLAYA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SAN JUAN DE TANTARANCHE',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SAN LORENZO DE QUINTI',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SAN MATEO',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SAN MATEO DE OTAO',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SAN PEDRO DE HUANCAYRE',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SANTA CRUZ DE COCACHACRA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SANTA EULALIA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SANTIAGO DE ANCHUCAYA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SANTIAGO DE TUNA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SANTO DOMINGO DE LOS OLLEROS',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SURCO',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'HUACHUPAMPA',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'LARAOS',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'SAN JUAN DE IRIS',
                'id_provincia' => '132',
            ],
            [
                'nombre' => 'YAUYOS',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'ALIS',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'AYAUCA',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'AYAVIRI',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'AZANGARO',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'CACRA',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'CARANIA',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'COCHAS',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'COLONIA',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'CHOCOS',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'HUAMPARA',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'HUANCAYA',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'HUANGASCAR',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'HUANTAN',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'HUANEC',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'LARAOS',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'LINCHA',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'MIRAFLORES',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'OMAS',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'QUINCHES',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'QUINOCAY',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'SAN JOAQUIN',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'SAN PEDRO DE PILAS',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'TANTA',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'TAURIPAMPA',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'TUPE',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'TOMAS',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'VINAC',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'VITIS',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'HONGOS',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'MADEAN',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'PUTINZA',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'CATAHUASI',
                'id_provincia' => '133',
            ],
            [
                'nombre' => 'HUARAL',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'ATAVILLOS ALTO',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'ATAVILLOS BAJO',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'AUCALLAMA',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'CHANCAY',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'IHUARI',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'LAMPIAN',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'PACARAOS',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'SAN MIGUEL DE ACOS',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'VEINTISIETE DE NOVIEMBRE',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'STA CRUZ DE ANDAMARCA',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'SUMBILCA',
                'id_provincia' => '134',
            ],
            [
                'nombre' => 'BARRANCA',
                'id_provincia' => '135',
            ],
            [
                'nombre' => 'PARAMONGA',
                'id_provincia' => '135',
            ],
            [
                'nombre' => 'PATIVILCA',
                'id_provincia' => '135',
            ],
            [
                'nombre' => 'SUPE',
                'id_provincia' => '135',
            ],
            [
                'nombre' => 'SUPE PUERTO',
                'id_provincia' => '135',
            ],
            [
                'nombre' => 'OYON',
                'id_provincia' => '136',
            ],
            [
                'nombre' => 'NAVAN',
                'id_provincia' => '136',
            ],
            [
                'nombre' => 'CAUJUL',
                'id_provincia' => '136',
            ],
            [
                'nombre' => 'ANDAJES',
                'id_provincia' => '136',
            ],
            [
                'nombre' => 'PACHANGARA',
                'id_provincia' => '136',
            ],
            [
                'nombre' => 'COCHAMARCA',
                'id_provincia' => '136',
            ],
            [
                'nombre' => 'IQUITOS',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'ALTO NANAY',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'FERNANDO LORES',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'LAS AMAZONAS',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'MAZAN',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'NAPO',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'PUTUMAYO',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'TORRES CAUSANA',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'INDIANA',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'PUNCHANA',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'BELEN',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'SAN JUAN BAUTISTA',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'TNTE MANUEL CLAVERO',
                'id_provincia' => '137',
            ],
            [
                'nombre' => 'YURIMAGUAS',
                'id_provincia' => '138',
            ],
            [
                'nombre' => 'BALSAPUERTO',
                'id_provincia' => '138',
            ],
            [
                'nombre' => 'JEBEROS',
                'id_provincia' => '138',
            ],
            [
                'nombre' => 'LAGUNAS',
                'id_provincia' => '138',
            ],
            [
                'nombre' => 'SANTA CRUZ',
                'id_provincia' => '138',
            ],
            [
                'nombre' => 'TNTE CESAR LOPEZ ROJAS',
                'id_provincia' => '138',
            ],
            [
                'nombre' => 'NAUTA',
                'id_provincia' => '139',
            ],
            [
                'nombre' => 'PARINARI',
                'id_provincia' => '139',
            ],
            [
                'nombre' => 'TIGRE',
                'id_provincia' => '139',
            ],
            [
                'nombre' => 'URARINAS',
                'id_provincia' => '139',
            ],
            [
                'nombre' => 'TROMPETEROS',
                'id_provincia' => '139',
            ],
            [
                'nombre' => 'REQUENA',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'ALTO TAPICHE',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'CAPELO',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'EMILIO SAN MARTIN',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'MAQUIA',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'PUINAHUA',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'SAQUENA',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'SOPLIN',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'TAPICHE',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'JENARO HERRERA',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'YAQUERANA',
                'id_provincia' => '140',
            ],
            [
                'nombre' => 'CONTAMANA',
                'id_provincia' => '141',
            ],
            [
                'nombre' => 'VARGAS GUERRA',
                'id_provincia' => '141',
            ],
            [
                'nombre' => 'PADRE MARQUEZ',
                'id_provincia' => '141',
            ],
            [
                'nombre' => 'PAMPA HERMOZA',
                'id_provincia' => '141',
            ],
            [
                'nombre' => 'SARAYACU',
                'id_provincia' => '141',
            ],
            [
                'nombre' => 'INAHUAYA',
                'id_provincia' => '141',
            ],
            [
                'nombre' => 'MARISCAL RAMON CASTILLA',
                'id_provincia' => '142',
            ],
            [
                'nombre' => 'PEBAS',
                'id_provincia' => '142',
            ],
            [
                'nombre' => 'YAVARI',
                'id_provincia' => '142',
            ],
            [
                'nombre' => 'SAN PABLO',
                'id_provincia' => '142',
            ],
            [
                'nombre' => 'BARRANCA',
                'id_provincia' => '143',
            ],
            [
                'nombre' => 'ANDOAS',
                'id_provincia' => '143',
            ],
            [
                'nombre' => 'CAHUAPANAS',
                'id_provincia' => '143',
            ],
            [
                'nombre' => 'MANSERICHE',
                'id_provincia' => '143',
            ],
            [
                'nombre' => 'MORONA',
                'id_provincia' => '143',
            ],
            [
                'nombre' => 'PASTAZA',
                'id_provincia' => '143',
            ],
            [
                'nombre' => 'TAMBOPATA',
                'id_provincia' => '144',
            ],
            [
                'nombre' => 'INAMBARI',
                'id_provincia' => '144',
            ],
            [
                'nombre' => 'LAS PIEDRAS',
                'id_provincia' => '144',
            ],
            [
                'nombre' => 'LABERINTO',
                'id_provincia' => '144',
            ],
            [
                'nombre' => 'MANU',
                'id_provincia' => '145',
            ],
            [
                'nombre' => 'FITZCARRALD',
                'id_provincia' => '145',
            ],
            [
                'nombre' => 'MADRE DE DIOS',
                'id_provincia' => '145',
            ],
            [
                'nombre' => 'HUEPETUHE',
                'id_provincia' => '145',
            ],
            [
                'nombre' => 'INAPARI',
                'id_provincia' => '146',
            ],
            [
                'nombre' => 'IBERIA',
                'id_provincia' => '146',
            ],
            [
                'nombre' => 'TAHUAMANU',
                'id_provincia' => '146',
            ],
            [
                'nombre' => 'MOQUEGUA',
                'id_provincia' => '147',
            ],
            [
                'nombre' => 'CARUMAS',
                'id_provincia' => '147',
            ],
            [
                'nombre' => 'CUCHUMBAYA',
                'id_provincia' => '147',
            ],
            [
                'nombre' => 'SAN CRISTOBAL',
                'id_provincia' => '147',
            ],
            [
                'nombre' => 'TORATA',
                'id_provincia' => '147',
            ],
            [
                'nombre' => 'SAMEGUA',
                'id_provincia' => '147',
            ],
            [
                'nombre' => 'OMATE',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'COALAQUE',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'CHOJATA',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'ICHUNA',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'LA CAPILLA',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'LLOQUE',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'MATALAQUE',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'PUQUINA',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'QUINISTAQUILLAS',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'UBINAS',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'YUNGA',
                'id_provincia' => '148',
            ],
            [
                'nombre' => 'ILO',
                'id_provincia' => '149',
            ],
            [
                'nombre' => 'EL ALGARROBAL',
                'id_provincia' => '149',
            ],
            [
                'nombre' => 'PACOCHA',
                'id_provincia' => '149',
            ],
            [
                'nombre' => 'CHAUPIMARCA',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'HUACHON',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'HUARIACA',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'HUAYLLAY',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'NINACACA',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'PALLANCHACRA',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'PAUCARTAMBO',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'SAN FCO DE ASIS DE YARUSYACAN',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'SIMON BOLIVAR',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'TICLACAYAN',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'TINYAHUARCO',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'VICCO',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'YANACANCHA',
                'id_provincia' => '150',
            ],
            [
                'nombre' => 'YANAHUANCA',
                'id_provincia' => '151',
            ],
            [
                'nombre' => 'CHACAYAN',
                'id_provincia' => '151',
            ],
            [
                'nombre' => 'GOYLLARISQUIZGA',
                'id_provincia' => '151',
            ],
            [
                'nombre' => 'PAUCAR',
                'id_provincia' => '151',
            ],
            [
                'nombre' => 'SAN PEDRO DE PILLAO',
                'id_provincia' => '151',
            ],
            [
                'nombre' => 'SANTA ANA DE TUSI',
                'id_provincia' => '151',
            ],
            [
                'nombre' => 'TAPUC',
                'id_provincia' => '151',
            ],
            [
                'nombre' => 'VILCABAMBA',
                'id_provincia' => '151',
            ],
            [
                'nombre' => 'OXAPAMPA',
                'id_provincia' => '152',
            ],
            [
                'nombre' => 'CHONTABAMBA',
                'id_provincia' => '152',
            ],
            [
                'nombre' => 'HUANCABAMBA',
                'id_provincia' => '152',
            ],
            [
                'nombre' => 'PUERTO BERMUDEZ',
                'id_provincia' => '152',
            ],
            [
                'nombre' => 'VILLA RICA',
                'id_provincia' => '152',
            ],
            [
                'nombre' => 'POZUZO',
                'id_provincia' => '152',
            ],
            [
                'nombre' => 'PALCAZU',
                'id_provincia' => '152',
            ],
            [
                'nombre' => 'PIURA',
                'id_provincia' => '153',
            ],
            [
                'nombre' => 'CASTILLA',
                'id_provincia' => '153',
            ],
            [
                'nombre' => 'CATACAOS',
                'id_provincia' => '153',
            ],
            [
                'nombre' => 'LA ARENA',
                'id_provincia' => '153',
            ],
            [
                'nombre' => 'LA UNION',
                'id_provincia' => '153',
            ],
            [
                'nombre' => 'LAS LOMAS',
                'id_provincia' => '153',
            ],
            [
                'nombre' => 'TAMBO GRANDE',
                'id_provincia' => '153',
            ],
            [
                'nombre' => 'CURA MORI',
                'id_provincia' => '153',
            ],
            [
                'nombre' => 'EL TALLAN',
                'id_provincia' => '153',
            ],
            [
                'nombre' => 'AYABACA',
                'id_provincia' => '154',
            ],
            [
                'nombre' => 'FRIAS',
                'id_provincia' => '154',
            ],
            [
                'nombre' => 'LAGUNAS',
                'id_provincia' => '154',
            ],
            [
                'nombre' => 'MONTERO',
                'id_provincia' => '154',
            ],
            [
                'nombre' => 'PACAIPAMPA',
                'id_provincia' => '154',
            ],
            [
                'nombre' => 'SAPILLICA',
                'id_provincia' => '154',
            ],
            [
                'nombre' => 'SICCHEZ',
                'id_provincia' => '154',
            ],
            [
                'nombre' => 'SUYO',
                'id_provincia' => '154',
            ],
            [
                'nombre' => 'JILILI',
                'id_provincia' => '154',
            ],
            [
                'nombre' => 'PAIMAS',
                'id_provincia' => '154',
            ],
            [
                'nombre' => 'HUANCABAMBA',
                'id_provincia' => '155',
            ],
            [
                'nombre' => 'CANCHAQUE',
                'id_provincia' => '155',
            ],
            [
                'nombre' => 'HUARMACA',
                'id_provincia' => '155',
            ],
            [
                'nombre' => 'SONDOR',
                'id_provincia' => '155',
            ],
            [
                'nombre' => 'SONDORILLO',
                'id_provincia' => '155',
            ],
            [
                'nombre' => 'EL CARMEN DE LA FRONTERA',
                'id_provincia' => '155',
            ],
            [
                'nombre' => 'SAN MIGUEL DE EL FAIQUE',
                'id_provincia' => '155',
            ],
            [
                'nombre' => 'LALAQUIZ',
                'id_provincia' => '155',
            ],
            [
                'nombre' => 'CHULUCANAS',
                'id_provincia' => '156',
            ],
            [
                'nombre' => 'BUENOS AIRES',
                'id_provincia' => '156',
            ],
            [
                'nombre' => 'CHALACO',
                'id_provincia' => '156',
            ],
            [
                'nombre' => 'MORROPON',
                'id_provincia' => '156',
            ],
            [
                'nombre' => 'SALITRAL',
                'id_provincia' => '156',
            ],
            [
                'nombre' => 'SANTA CATALINA DE MOSSA',
                'id_provincia' => '156',
            ],
            [
                'nombre' => 'SANTO DOMINGO',
                'id_provincia' => '156',
            ],
            [
                'nombre' => 'LA MATANZA',
                'id_provincia' => '156',
            ],
            [
                'nombre' => 'YAMANGO',
                'id_provincia' => '156',
            ],
            [
                'nombre' => 'SAN JUAN DE BIGOTE',
                'id_provincia' => '156',
            ],
            [
                'nombre' => 'PAITA',
                'id_provincia' => '157',
            ],
            [
                'nombre' => 'AMOTAPE',
                'id_provincia' => '157',
            ],
            [
                'nombre' => 'ARENAL',
                'id_provincia' => '157',
            ],
            [
                'nombre' => 'LA HUACA',
                'id_provincia' => '157',
            ],
            [
                'nombre' => 'PUEBLO NUEVO DE COLAN',
                'id_provincia' => '157',
            ],
            [
                'nombre' => 'TAMARINDO',
                'id_provincia' => '157',
            ],
            [
                'nombre' => 'VICHAYAL',
                'id_provincia' => '157',
            ],
            [
                'nombre' => 'SULLANA',
                'id_provincia' => '158',
            ],
            [
                'nombre' => 'BELLAVISTA',
                'id_provincia' => '158',
            ],
            [
                'nombre' => 'LANCONES',
                'id_provincia' => '158',
            ],
            [
                'nombre' => 'MARCAVELICA',
                'id_provincia' => '158',
            ],
            [
                'nombre' => 'MIGUEL CHECA',
                'id_provincia' => '158',
            ],
            [
                'nombre' => 'QUERECOTILLO',
                'id_provincia' => '158',
            ],
            [
                'nombre' => 'SALITRAL',
                'id_provincia' => '158',
            ],
            [
                'nombre' => 'IGNACIO ESCUDERO',
                'id_provincia' => '158',
            ],
            [
                'nombre' => 'PARINAS',
                'id_provincia' => '159',
            ],
            [
                'nombre' => 'EL ALTO',
                'id_provincia' => '159',
            ],
            [
                'nombre' => 'LA BREA',
                'id_provincia' => '159',
            ],
            [
                'nombre' => 'LOBITOS',
                'id_provincia' => '159',
            ],
            [
                'nombre' => 'MANCORA',
                'id_provincia' => '159',
            ],
            [
                'nombre' => 'LOS ORGANOS',
                'id_provincia' => '159',
            ],
            [
                'nombre' => 'SECHURA',
                'id_provincia' => '160',
            ],
            [
                'nombre' => 'VICE',
                'id_provincia' => '160',
            ],
            [
                'nombre' => 'BERNAL',
                'id_provincia' => '160',
            ],
            [
                'nombre' => 'BELLAVISTA DE LA UNION',
                'id_provincia' => '160',
            ],
            [
                'nombre' => 'CRISTO NOS VALGA',
                'id_provincia' => '160',
            ],
            [
                'nombre' => 'RINCONADA LLICUAR',
                'id_provincia' => '160',
            ],
            [
                'nombre' => 'PUNO',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'ACORA',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'ATUNCOLLA',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'CAPACHICA',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'COATA',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'CHUCUITO',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'HUATA',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'MANAZO',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'PAUCARCOLLA',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'PICHACANI',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'SAN ANTONIO',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'TIQUILLACA',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'VILQUE',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'PLATERIA',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'AMANTANI',
                'id_provincia' => '161',
            ],
            [
                'nombre' => 'AZANGARO',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'ACHAYA',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'ARAPA',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'ASILLO',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'CAMINACA',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'CHUPA',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'JOSE DOMINGO CHOQUEHUANCA',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'MUNANI',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'POTONI',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'SAMAN',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'SAN ANTON',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'SAN JOSE',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'SAN JUAN DE SALINAS',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'STGO DE PUPUJA',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'TIRAPATA',
                'id_provincia' => '162',
            ],
            [
                'nombre' => 'MACUSANI',
                'id_provincia' => '163',
            ],
            [
                'nombre' => 'AJOYANI',
                'id_provincia' => '163',
            ],
            [
                'nombre' => 'AYAPATA',
                'id_provincia' => '163',
            ],
            [
                'nombre' => 'COASA',
                'id_provincia' => '163',
            ],
            [
                'nombre' => 'CORANI',
                'id_provincia' => '163',
            ],
            [
                'nombre' => 'CRUCERO',
                'id_provincia' => '163',
            ],
            [
                'nombre' => 'ITUATA',
                'id_provincia' => '163',
            ],
            [
                'nombre' => 'OLLACHEA',
                'id_provincia' => '163',
            ],
            [
                'nombre' => 'SAN GABAN',
                'id_provincia' => '163',
            ],
            [
                'nombre' => 'USICAYOS',
                'id_provincia' => '163',
            ],
            [
                'nombre' => 'JULI',
                'id_provincia' => '164',
            ],
            [
                'nombre' => 'DESAGUADERO',
                'id_provincia' => '164',
            ],
            [
                'nombre' => 'HUACULLANI',
                'id_provincia' => '164',
            ],
            [
                'nombre' => 'PISACOMA',
                'id_provincia' => '164',
            ],
            [
                'nombre' => 'POMATA',
                'id_provincia' => '164',
            ],
            [
                'nombre' => 'ZEPITA',
                'id_provincia' => '164',
            ],
            [
                'nombre' => 'KELLUYO',
                'id_provincia' => '164',
            ],
            [
                'nombre' => 'HUANCANE',
                'id_provincia' => '165',
            ],
            [
                'nombre' => 'COJATA',
                'id_provincia' => '165',
            ],
            [
                'nombre' => 'INCHUPALLA',
                'id_provincia' => '165',
            ],
            [
                'nombre' => 'PUSI',
                'id_provincia' => '165',
            ],
            [
                'nombre' => 'ROSASPATA',
                'id_provincia' => '165',
            ],
            [
                'nombre' => 'TARACO',
                'id_provincia' => '165',
            ],
            [
                'nombre' => 'VILQUE CHICO',
                'id_provincia' => '165',
            ],
            [
                'nombre' => 'HUATASANI',
                'id_provincia' => '165',
            ],
            [
                'nombre' => 'LAMPA',
                'id_provincia' => '166',
            ],
            [
                'nombre' => 'CABANILLA',
                'id_provincia' => '166',
            ],
            [
                'nombre' => 'CALAPUJA',
                'id_provincia' => '166',
            ],
            [
                'nombre' => 'NICASIO',
                'id_provincia' => '166',
            ],
            [
                'nombre' => 'OCUVIRI',
                'id_provincia' => '166',
            ],
            [
                'nombre' => 'PALCA',
                'id_provincia' => '166',
            ],
            [
                'nombre' => 'PARATIA',
                'id_provincia' => '166',
            ],
            [
                'nombre' => 'PUCARA',
                'id_provincia' => '166',
            ],
            [
                'nombre' => 'SANTA LUCIA',
                'id_provincia' => '166',
            ],
            [
                'nombre' => 'VILAVILA',
                'id_provincia' => '166',
            ],
            [
                'nombre' => 'AYAVIRI',
                'id_provincia' => '167',
            ],
            [
                'nombre' => 'ANTAUTA',
                'id_provincia' => '167',
            ],
            [
                'nombre' => 'CUPI',
                'id_provincia' => '167',
            ],
            [
                'nombre' => 'LLALLI',
                'id_provincia' => '167',
            ],
            [
                'nombre' => 'MACARI',
                'id_provincia' => '167',
            ],
            [
                'nombre' => 'NUNOA',
                'id_provincia' => '167',
            ],
            [
                'nombre' => 'ORURILLO',
                'id_provincia' => '167',
            ],
            [
                'nombre' => 'SANTA ROSA',
                'id_provincia' => '167',
            ],
            [
                'nombre' => 'UMACHIRI',
                'id_provincia' => '167',
            ],
            [
                'nombre' => 'SANDIA',
                'id_provincia' => '168',
            ],
            [
                'nombre' => 'CUYOCUYO',
                'id_provincia' => '168',
            ],
            [
                'nombre' => 'LIMBANI',
                'id_provincia' => '168',
            ],
            [
                'nombre' => 'PHARA',
                'id_provincia' => '168',
            ],
            [
                'nombre' => 'PATAMBUCO',
                'id_provincia' => '168',
            ],
            [
                'nombre' => 'QUIACA',
                'id_provincia' => '168',
            ],
            [
                'nombre' => 'SAN JUAN DEL ORO',
                'id_provincia' => '168',
            ],
            [
                'nombre' => 'YANAHUAYA',
                'id_provincia' => '168',
            ],
            [
                'nombre' => 'ALTO INAMBARI',
                'id_provincia' => '168',
            ],
            [
                'nombre' => 'SAN PEDRO DE PUTINA PUNCO',
                'id_provincia' => '168',
            ],
            [
                'nombre' => 'JULIACA',
                'id_provincia' => '169',
            ],
            [
                'nombre' => 'CABANA',
                'id_provincia' => '169',
            ],
            [
                'nombre' => 'CABANILLAS',
                'id_provincia' => '169',
            ],
            [
                'nombre' => 'CARACOTO',
                'id_provincia' => '169',
            ],
            [
                'nombre' => 'YUNGUYO',
                'id_provincia' => '170',
            ],
            [
                'nombre' => 'UNICACHI',
                'id_provincia' => '170',
            ],
            [
                'nombre' => 'ANAPIA',
                'id_provincia' => '170',
            ],
            [
                'nombre' => 'COPANI',
                'id_provincia' => '170',
            ],
            [
                'nombre' => 'CUTURAPI',
                'id_provincia' => '170',
            ],
            [
                'nombre' => 'OLLARAYA',
                'id_provincia' => '170',
            ],
            [
                'nombre' => 'TINICACHI',
                'id_provincia' => '170',
            ],
            [
                'nombre' => 'PUTINA',
                'id_provincia' => '171',
            ],
            [
                'nombre' => 'PEDRO VILCA APAZA',
                'id_provincia' => '171',
            ],
            [
                'nombre' => 'QUILCA PUNCU',
                'id_provincia' => '171',
            ],
            [
                'nombre' => 'ANANEA',
                'id_provincia' => '171',
            ],
            [
                'nombre' => 'SINA',
                'id_provincia' => '171',
            ],
            [
                'nombre' => 'ILAVE',
                'id_provincia' => '172',
            ],
            [
                'nombre' => 'PILCUYO',
                'id_provincia' => '172',
            ],
            [
                'nombre' => 'SANTA ROSA',
                'id_provincia' => '172',
            ],
            [
                'nombre' => 'CAPASO',
                'id_provincia' => '172',
            ],
            [
                'nombre' => 'CONDURIRI',
                'id_provincia' => '172',
            ],
            [
                'nombre' => 'MOHO',
                'id_provincia' => '173',
            ],
            [
                'nombre' => 'CONIMA',
                'id_provincia' => '173',
            ],
            [
                'nombre' => 'TILALI',
                'id_provincia' => '173',
            ],
            [
                'nombre' => 'HUAYRAPATA',
                'id_provincia' => '173',
            ],
            [
                'nombre' => 'MOYOBAMBA',
                'id_provincia' => '174',
            ],
            [
                'nombre' => 'CALZADA',
                'id_provincia' => '174',
            ],
            [
                'nombre' => 'HABANA',
                'id_provincia' => '174',
            ],
            [
                'nombre' => 'JEPELACIO',
                'id_provincia' => '174',
            ],
            [
                'nombre' => 'SORITOR',
                'id_provincia' => '174',
            ],
            [
                'nombre' => 'YANTALO',
                'id_provincia' => '174',
            ],
            [
                'nombre' => 'SAPOSOA',
                'id_provincia' => '175',
            ],
            [
                'nombre' => 'PISCOYACU',
                'id_provincia' => '175',
            ],
            [
                'nombre' => 'SACANCHE',
                'id_provincia' => '175',
            ],
            [
                'nombre' => 'TINGO DE SAPOSOA',
                'id_provincia' => '175',
            ],
            [
                'nombre' => 'ALTO SAPOSOA',
                'id_provincia' => '175',
            ],
            [
                'nombre' => 'EL ESLABON',
                'id_provincia' => '175',
            ],
            [
                'nombre' => 'LAMAS',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'BARRANQUITA',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'CAYNARACHI',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'CUNUMBUQUI',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'PINTO RECODO',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'RUMISAPA',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'SHANAO',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'TABALOSOS',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'ZAPATERO',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'ALONSO DE ALVARADO',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'SAN ROQUE DE CUMBAZA',
                'id_provincia' => '176',
            ],
            [
                'nombre' => 'JUANJUI',
                'id_provincia' => '177',
            ],
            [
                'nombre' => 'CAMPANILLA',
                'id_provincia' => '177',
            ],
            [
                'nombre' => 'HUICUNGO',
                'id_provincia' => '177',
            ],
            [
                'nombre' => 'PACHIZA',
                'id_provincia' => '177',
            ],
            [
                'nombre' => 'PAJARILLO',
                'id_provincia' => '177',
            ],
            [
                'nombre' => 'RIOJA',
                'id_provincia' => '178',
            ],
            [
                'nombre' => 'POSIC',
                'id_provincia' => '178',
            ],
            [
                'nombre' => 'YORONGOS',
                'id_provincia' => '178',
            ],
            [
                'nombre' => 'YURACYACU',
                'id_provincia' => '178',
            ],
            [
                'nombre' => 'NUEVA CAJAMARCA',
                'id_provincia' => '178',
            ],
            [
                'nombre' => 'ELIAS SOPLIN',
                'id_provincia' => '178',
            ],
            [
                'nombre' => 'SAN FERNANDO',
                'id_provincia' => '178',
            ],
            [
                'nombre' => 'PARDO MIGUEL',
                'id_provincia' => '178',
            ],
            [
                'nombre' => 'AWAJUN',
                'id_provincia' => '178',
            ],
            [
                'nombre' => 'TARAPOTO',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'ALBERTO LEVEAU',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'CACATACHI',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'CHAZUTA',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'CHIPURANA',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'EL PORVENIR',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'HUIMBAYOC',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'JUAN GUERRA',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'MORALES',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'PAPAPLAYA',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'SAN ANTONIO',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'SAUCE',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'SHAPAJA',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'LA BANDA DE SHILCAYO',
                'id_provincia' => '179',
            ],
            [
                'nombre' => 'BELLAVISTA',
                'id_provincia' => '180',
            ],
            [
                'nombre' => 'SAN RAFAEL',
                'id_provincia' => '180',
            ],
            [
                'nombre' => 'SAN PABLO',
                'id_provincia' => '180',
            ],
            [
                'nombre' => 'ALTO BIAVO',
                'id_provincia' => '180',
            ],
            [
                'nombre' => 'HUALLAGA',
                'id_provincia' => '180',
            ],
            [
                'nombre' => 'BAJO BIAVO',
                'id_provincia' => '180',
            ],
            [
                'nombre' => 'TOCACHE',
                'id_provincia' => '181',
            ],
            [
                'nombre' => 'NUEVO PROGRESO',
                'id_provincia' => '181',
            ],
            [
                'nombre' => 'POLVORA',
                'id_provincia' => '181',
            ],
            [
                'nombre' => 'SHUNTE',
                'id_provincia' => '181',
            ],
            [
                'nombre' => 'UCHIZA',
                'id_provincia' => '181',
            ],
            [
                'nombre' => 'PICOTA',
                'id_provincia' => '182',
            ],
            [
                'nombre' => 'BUENOS AIRES',
                'id_provincia' => '182',
            ],
            [
                'nombre' => 'CASPIZAPA',
                'id_provincia' => '182',
            ],
            [
                'nombre' => 'PILLUANA',
                'id_provincia' => '182',
            ],
            [
                'nombre' => 'PUCACACA',
                'id_provincia' => '182',
            ],
            [
                'nombre' => 'SAN CRISTOBAL',
                'id_provincia' => '182',
            ],
            [
                'nombre' => 'SAN HILARION',
                'id_provincia' => '182',
            ],
            [
                'nombre' => 'TINGO DE PONASA',
                'id_provincia' => '182',
            ],
            [
                'nombre' => 'TRES UNIDOS',
                'id_provincia' => '182',
            ],
            [
                'nombre' => 'SHAMBOYACU',
                'id_provincia' => '182',
            ],
            [
                'nombre' => 'SAN JOSE DE SISA',
                'id_provincia' => '183',
            ],
            [
                'nombre' => 'AGUA BLANCA',
                'id_provincia' => '183',
            ],
            [
                'nombre' => 'SHATOJA',
                'id_provincia' => '183',
            ],
            [
                'nombre' => 'SAN MARTIN',
                'id_provincia' => '183',
            ],
            [
                'nombre' => 'SANTA ROSA',
                'id_provincia' => '183',
            ],
            [
                'nombre' => 'TACNA',
                'id_provincia' => '184',
            ],
            [
                'nombre' => 'CALANA',
                'id_provincia' => '184',
            ],
            [
                'nombre' => 'INCLAN',
                'id_provincia' => '184',
            ],
            [
                'nombre' => 'PACHIA',
                'id_provincia' => '184',
            ],
            [
                'nombre' => 'PALCA',
                'id_provincia' => '184',
            ],
            [
                'nombre' => 'POCOLLAY',
                'id_provincia' => '184',
            ],
            [
                'nombre' => 'SAMA',
                'id_provincia' => '184',
            ],
            [
                'nombre' => 'ALTO DE LA ALIANZA',
                'id_provincia' => '184',
            ],
            [
                'nombre' => 'CIUDAD NUEVA',
                'id_provincia' => '184',
            ],
            [
                'nombre' => 'CORONEL GREGORIO ALBARRACIN L.ALFONSO UGARTE',
                'id_provincia' => '184',
            ],
            [
                'nombre' => 'TARATA',
                'id_provincia' => '185',
            ],
            [
                'nombre' => 'CHUCATAMANI',
                'id_provincia' => '185',
            ],
            [
                'nombre' => 'ESTIQUE',
                'id_provincia' => '185',
            ],
            [
                'nombre' => 'ESTIQUE PAMPA',
                'id_provincia' => '185',
            ],
            [
                'nombre' => 'SITAJARA',
                'id_provincia' => '185',
            ],
            [
                'nombre' => 'SUSAPAYA',
                'id_provincia' => '185',
            ],
            [
                'nombre' => 'TARUCACHI',
                'id_provincia' => '185',
            ],
            [
                'nombre' => 'TICACO',
                'id_provincia' => '185',
            ],
            [
                'nombre' => 'LOCUMBA',
                'id_provincia' => '186',
            ],
            [
                'nombre' => 'ITE',
                'id_provincia' => '186',
            ],
            [
                'nombre' => 'ILABAYA',
                'id_provincia' => '186',
            ],
            [
                'nombre' => 'CANDARAVE',
                'id_provincia' => '187',
            ],
            [
                'nombre' => 'CAIRANI',
                'id_provincia' => '187',
            ],
            [
                'nombre' => 'CURIBAYA',
                'id_provincia' => '187',
            ],
            [
                'nombre' => 'HUANUARA',
                'id_provincia' => '187',
            ],
            [
                'nombre' => 'QUILAHUANI',
                'id_provincia' => '187',
            ],
            [
                'nombre' => 'CAMILACA',
                'id_provincia' => '187',
            ],
            [
                'nombre' => 'TUMBES',
                'id_provincia' => '188',
            ],
            [
                'nombre' => 'CORRALES',
                'id_provincia' => '188',
            ],
            [
                'nombre' => 'LA CRUZ',
                'id_provincia' => '188',
            ],
            [
                'nombre' => 'PAMPAS DE HOSPITAL',
                'id_provincia' => '188',
            ],
            [
                'nombre' => 'SAN JACINTO',
                'id_provincia' => '188',
            ],
            [
                'nombre' => 'SAN JUAN DE LA VIRGEN',
                'id_provincia' => '188',
            ],
            [
                'nombre' => 'ZORRITOS',
                'id_provincia' => '189',
            ],
            [
                'nombre' => 'CASITAS',
                'id_provincia' => '189',
            ],
            [
                'nombre' => 'CANOAS DE PUNTA SAL',
                'id_provincia' => '189',
            ],
            [
                'nombre' => 'ZARUMILLA',
                'id_provincia' => '190',
            ],
            [
                'nombre' => 'MATAPALO',
                'id_provincia' => '190',
            ],
            [
                'nombre' => 'PAPAYAL',
                'id_provincia' => '190',
            ],
            [
                'nombre' => 'AGUAS VERDES',
                'id_provincia' => '190',
            ],
            [
                'nombre' => 'CALLAO',
                'id_provincia' => '191',
            ],
            [
                'nombre' => 'BELLAVISTA',
                'id_provincia' => '191',
            ],
            [
                'nombre' => 'LA PUNTA',
                'id_provincia' => '191',
            ],
            [
                'nombre' => 'CARMEN DE LA LEGUA-REYNOSO',
                'id_provincia' => '191',
            ],
            [
                'nombre' => 'LA PERLA',
                'id_provincia' => '191',
            ],
            [
                'nombre' => 'VENTANILLA',
                'id_provincia' => '191',
            ],
            [
                'nombre' => 'CALLERIA',
                'id_provincia' => '192',
            ],
            [
                'nombre' => 'YARINACOCHA',
                'id_provincia' => '192',
            ],
            [
                'nombre' => 'MASISEA',
                'id_provincia' => '192',
            ],
            [
                'nombre' => 'CAMPOVERDE',
                'id_provincia' => '192',
            ],
            [
                'nombre' => 'IPARIA',
                'id_provincia' => '192',
            ],
            [
                'nombre' => 'NUEVA REQUENA',
                'id_provincia' => '192',
            ],
            [
                'nombre' => 'MANANTAY',
                'id_provincia' => '192',
            ],
            [
                'nombre' => 'PADRE ABAD',
                'id_provincia' => '193',
            ],
            [
                'nombre' => 'YRAZOLA',
                'id_provincia' => '193',
            ],
            [
                'nombre' => 'CURIMANA',
                'id_provincia' => '193',
            ],
            [
                'nombre' => 'RAIMONDI',
                'id_provincia' => '194',
            ],
            [
                'nombre' => 'TAHUANIA',
                'id_provincia' => '194',
            ],
            [
                'nombre' => 'YURUA',
                'id_provincia' => '194',
            ],
            [
                'nombre' => 'SEPAHUA',
                'id_provincia' => '194',
            ],
            [
                'nombre' => 'PURUS',
                'id_provincia' => '195',
            ]
        ];

        DB::table('districts')->insert($data);
    }
}
