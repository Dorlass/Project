<?php

namespace Database\Seeders;

use App\Models\recommendation;
use Illuminate\Database\Seeder;

class RecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        recommendation::Factory()
        ->count(count:10)
        ->create();
    }
}
