<?php

namespace Database\Seeders;

use App\Models\Carrier;
use App\Models\LogisticCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrier::factory(5)->create();
    }
}
