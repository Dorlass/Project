<?php

namespace Database\Seeders;

use App\Models\activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        activity::Factory()
        ->count(10)
        ->create();
    }
}
