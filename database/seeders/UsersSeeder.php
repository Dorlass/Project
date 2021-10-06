<?php

namespace Database\Seeders;

use App\Models\skills;
use Illuminate\Database\Seeder;
use App\Models\users;
use Illuminate\Foundation\Auth\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Factory()
        ->count(count:10)
        ->create();
    }
}
