<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ActivitySeeder::class,
            ExperienceSeeder::class,
            RecommendationSeeder::class,
            SkillsSeeder::class,
            UsersSeeder::class
        ]);
        
    }
}
