<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Membership;

class MembershipSeeder extends Seeder
{
    public function run(): void
    {
        Membership::create([
            'price' => 199.99,
            'period' => 'Mensual',
            'quantity' => 1,
            'id_country' => 1,
            'id_user_created' => 1,
            'is_active' => true,
        ]);
    }
}