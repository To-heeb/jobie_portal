<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobSubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'job_category_id' => 1
        ];
    }
}
