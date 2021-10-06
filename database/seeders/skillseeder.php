<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Seeder;

class skillseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Skills::Factory()
            ->count(10)
            ->create();
    }
}