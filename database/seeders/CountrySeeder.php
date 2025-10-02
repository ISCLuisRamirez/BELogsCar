<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cat_countries')->insert([
            [
                'name' => 'México',
                'is_active' => 1,
            ],
            [
                'name' => 'Estados Unidos',
                'is_active' => 1,
            ],
        ]);
    }
}