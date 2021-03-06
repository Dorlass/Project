<?php

namespace Database\Factories;

use App\Models\users;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = users::class;

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
            'adress' => $this->faker->address()
        ];
    }
}
