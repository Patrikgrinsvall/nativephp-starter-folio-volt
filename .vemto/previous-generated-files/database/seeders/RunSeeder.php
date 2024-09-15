<?php

namespace Database\Seeders;

use App\Models\Run;
use Illuminate\Database\Seeder;

class RunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Run::factory()
            ->count(1)
            ->create();
    }
}
