<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions =[
            'All',
            'Warehouses',
            'Customers',
            'Inventory',
            'suppliers',
            'Inbound'
        ];
        foreach ($permissions as $permission){
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
