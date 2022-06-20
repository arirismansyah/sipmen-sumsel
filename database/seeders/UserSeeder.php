<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $admin_1610 = User::create([
            'name' => 'Admin 1610',
            'username' => 'admin_1610',
            'kode_wilayah' => '1610',
            'password' => bcrypt('admin1610'),
        ]);
        $admin_1611 = User::create([
            'name' => 'Admin 1611',
            'username' => 'admin_1611',
            'kode_wilayah' => '1611',
            'password' => bcrypt('admin1611'),
        ]);
        $admin_1613 = User::create([
            'name' => 'Admin 1613',
            'username' => 'admin_1613',
            'kode_wilayah' => '1613',
            'password' => bcrypt('admin1613'),
        ]);
        $admin_1673 = User::create([
            'name' => 'Admin 1673',
            'username' => 'admin_1673',
            'kode_wilayah' => '1673',
            'password' => bcrypt('admin1673'),
        ]);

        
        $admin_1610->assignRole('admin_kab');
        $admin_1611->assignRole('admin_kab');
        $admin_1613->assignRole('admin_kab');
        $admin_1673->assignRole('admin_kab');

        
    }
}
