<?php

namespace Database\Seeders;

use App\Models\experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        experience::Factory()
        ->count(count:10)
        ->create();
    }
}
