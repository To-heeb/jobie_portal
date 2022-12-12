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
            'email' => $this->faker->companyEmail,
            'no_of_employees' => rand(1, 8),
            'employer_id' => rand(1, 8),
            'website_link' => $this->faker->url,
            'twitter_link' => $this->faker->url,
            'facebook_link' => $this->faker->url,
            'instagram_link' => $this->faker->url,
            'industry' => $this->faker->randomDigit,
            'company_logo' => $this->faker->imageUrl,
            'phone_number' => $this->faker->phoneNumber,
            'city' =>  $this->faker->city,
            'state' =>  $this->faker->state,
            'country' =>  $this->faker->country,
            'address' =>  $this->faker->address,
            'about' => $this->faker->paragraph(5),
            //' => $this->faker->sentence(),
        ];
    }
}
