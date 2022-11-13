<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle,
            'website_link' => $this->faker->url,
            'twitter_link' => $this->faker->url,
            'industry_id' => $this->faker->randomDigit,
            'company_logo' => $this->faker->imageUrl,
            'phone_number' => $this->faker->phoneNumber,
            'city' =>  $this->faker->city,
            'country' =>  $this->faker->country,
            'about' => $this->faker->paragraph(5),
            //' => $this->faker->sentence(),
        ];
    }
}
