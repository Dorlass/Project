<?php

namespace Database\Factories;

use App\Models\skills;
use Illuminate\Database\Eloquent\Factories\Factory;

class skillsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = skills::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->jobTitle(),
            'level'=>$this->faker->numberBetween(0,5)
            
        ];
    }
}
