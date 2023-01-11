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
            'level' => $this->job_level(),
            'tags' => 'laravel, php, java',
            'type' => $this->job_type(),
            'location_type' => $this->job_location_type(),
            'company_id' => $this->faker->randomDigit,
            'job_category_id' => $this->faker->randomDigit,
            'job_sub_category_id' =>  $this->faker->randomDigit,
            'salary_range_id' => rand(1, 3),
            'summary' => $this->faker->sentence(),
            'status' => $this->job_status(),
            'salary_status' => $this->salary_status(),
            'cover_letter_status' => $this->cover_letter_status(),
            'start_range' => date('Y-m-d'),
            'end_range' => date('Y-m-d', strtotime("+1 week")),
            'description' => $this->faker->paragraph(5),
        ];
    }

    private function job_type()
    {
        $index = rand(0, 3);
        $type = ['freelance', 'contract', 'fulltime', 'parttime '];
        return $type[$index];
    }

    private function job_status()
    {
        $index = rand(0, 1);
        $type = ['pending', 'live',];
        return $type[$index];
    }

    private function salary_status()
    {
        $index = rand(0, 1);
        $type = ['confidential', 'public',];
        return $type[$index];
    }

    private function cover_letter_status()
    {
        $index = rand(0, 1);
        $type = ['yes', 'no',];
        return $type[$index];
    }

    private function job_level()
    {
        $index = rand(0, 7);
        $type = ['entry_level', 'internship', 'graduate_trainee', 'mid_level', 'mid_senior_level', 'senior', 'director', 'executive'];
        return $type[$index];
    }

    private function job_location_type()
    {
        $index = rand(0, 2);
        $type = ['remote', 'on_site', 'hybrid'];
        return $type[$index];
    }
}
