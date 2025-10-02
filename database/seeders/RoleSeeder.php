<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cat_roles')->insert([
            [
                'name' => 'admin',
                'max_users' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'client',
                'max_users' => 50,
                'is_active' => true,
            ],
            [
                'name' => 'provider',
                'max_users' => 5,
                'is_active' => true,
            ]
        ]);
    }
}