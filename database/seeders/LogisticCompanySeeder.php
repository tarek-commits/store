<?php

namespace Database\Seeders;

use App\Models\LogisticCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogisticCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LogisticCompany::factory(3)->create();
    }
}
