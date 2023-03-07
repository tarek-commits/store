<?php

namespace Database\Seeders;

use App\Models\StorageType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StorageType::factory(3)->create();
    }
}
