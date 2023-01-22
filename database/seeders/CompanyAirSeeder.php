<?php

namespace Database\Seeders;

use App\Models\CompanyAir;
use Illuminate\Database\Seeder;

class CompanyAirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++){
            CompanyAir::create(
                ['nom' => 'company '.$i]
            );
        }

    }
}
