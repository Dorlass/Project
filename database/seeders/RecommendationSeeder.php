<?php

namespace Database\Seeders;

use App\Models\Recommendation;
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
        Recommendation::Factory()
        ->count(10)
        ->create();
    }
}
