<?php

namespace Database\Seeders;

use App\Models\skills;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            skills::Factory()
            ->count(count:10)
            ->create();
    }
}
