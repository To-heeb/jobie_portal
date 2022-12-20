<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'email' => $this->faker->unique()->safeEmail,
            'first_name' => $this->faker->firstNameMale,
            'last_name' => $this->faker->lastName,
            'password' =>  $this->faker->password,
        ];
    }
}
