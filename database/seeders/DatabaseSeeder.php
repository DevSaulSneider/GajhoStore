<?php

namespace Database\Seeders;

use App\Models\Departamento;
use App\Models\Distrito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           DepartmentSeeder::class,
           ProvinceSeeder::class,
           DistrictSeeder::class,
           CategorySeeder::class,
           TurnSeeder::class,
           UserSeeder::class,
           ProductSeeder::class,
           PaymentMethodSeeder::class,
           EmployeeSeeder::class,
           PurchaseSeeder::class,
           PurchaseDetailSeeder::class,
           IncidentSeeder::class,
       ]);
    }
}
