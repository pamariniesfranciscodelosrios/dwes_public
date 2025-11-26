<?php

namespace Database\Seeders;

use App\Models\Sim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sim::create([
            'id' => 1,
            'serial_number' => '123456789',
            'company' => 'Movistar',
            'phone_id' => 1,
        ]);
        Sim::create([
            'id' => 2,
            'serial_number' => '987654321',
            'company' => 'Yoigo',
            'phone_id' => 1,
        ]);
        Sim::create([
            'id' => 3,
            'serial_number' => '123459876',
            'company' => 'Vodafone',
            'phone_id' => 2,
        ]);

        
    }
}
