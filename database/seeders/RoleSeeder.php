<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'name' => 'super_admin',
            'guard_name' => 'sipmen2'
        ]);

        Role::create([
            'name' => 'admin_prov',
            'guard_name' => 'sipmen2'
        ]);

        Role::create([
            'name' => 'admin_kab',
            'guard_name' => 'sipmen2'
        ]);
    }
}
