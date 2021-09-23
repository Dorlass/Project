<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\skills;

class skillseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        skills::Factory()
        ->count(10)
        ->create();
    }
}