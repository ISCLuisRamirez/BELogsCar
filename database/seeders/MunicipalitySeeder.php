<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;

class MunicipalitySeeder extends Seeder
{
    public function run(): void
    {
        Municipality::create([
            'name' => 'Guadalajara',
            'id_state' => 1,
            'is_active' => 1,
        ]);

        Municipality::create([
            'name' => 'Los Angeles',
            'id_state' => 2,
            'is_active' => 1,
        ]);
    }
}