<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        State::create([
            'name' => 'Jalisco',
            'id_country' => 1,
            'is_active' => 1,
        ]);

        State::create([
            'name' => 'California',
            'id_country' => 2,
            'is_active' => 1,
        ]);
    }
}