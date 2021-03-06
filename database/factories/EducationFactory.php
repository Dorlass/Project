<?php

namespace Database\Factories;

use App\Models\education;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = education::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'datofbirth' => $this->faker->date(),
            'age' => $this->faker->randomDigit(),
            'emailadress' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'adress' => $this->faker->address(),
        ];
    }
}
