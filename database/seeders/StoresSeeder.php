<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stores;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Stores::factory()->count(20)->create();
    }
}
