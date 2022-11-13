<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'level' => $this->faker->text,
            'tags' => 'laravel, php, java',
            'type' => $this->job_type(),
            'location_type' => $this->job_location_type(),
            'company_id' => $this->faker->randomDigit,
            'job_category_id' => $this->faker->randomDigit,
            'job_sub_category_id' =>  $this->faker->randomDigit,
            'summary' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(5),
        ];
    }

    private function job_type()
    {
        $index = rand(0, 3);
        $type = ['freelance', 'contract', 'fulltime', 'parttime '];
        return $type[$index];
    }

    private function job_location_type()
    {
        $index = rand(0, 2);
        $type = ['remote', 'on_site', 'hybrid'];
        return $type[$index];
    }
}
