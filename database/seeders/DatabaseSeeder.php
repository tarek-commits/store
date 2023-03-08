<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Area;
use App\Models\Category;
use App\Models\User;
use App\Models\Warehouse;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            WarehouseSeeder::class,
            AreaSeeder::class,
            RackSeeder::class,
            StorageTypeSeeder::class,
            LocationSeeder::class,
            UdmSeeder::class,
            OrderBinsSeeder::class,
            MaterialTypeSeeder::class,
            IndustrySeeder::class
        ]);



    }
}
