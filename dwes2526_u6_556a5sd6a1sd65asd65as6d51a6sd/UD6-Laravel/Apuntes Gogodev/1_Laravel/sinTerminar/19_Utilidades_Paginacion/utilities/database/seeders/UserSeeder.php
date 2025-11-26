<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        //User->factory(100)->create(); //Genera 100 registros IA.
        //opción TUTORIAL: 
        User::factory()->count(100)->create();
    }
}
