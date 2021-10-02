<?php

namespace Database\Seeders;

use App\Models\skills;
use Illuminate\Database\Seeder;
use App\Models\users;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::factory()
        ->count(10)
        ->create()->each(function($users)
            $r = rand(0,1);
            if($r = 1){
                $user->skills()->savemany(skills::factory()->count[5]->make());
        };
    }
}