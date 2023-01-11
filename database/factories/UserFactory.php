<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstNameMale,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'gender' => 'male',
            'country' => $this->faker->country,
            'country_code' => $this->faker->countryCode,
            'phone_number' => $this->faker->phoneNumber,
            'headline' => $this->faker->jobTitle,
            'city' => $this->faker->city,
            'zip' =>  $this->faker->postcode,
            'dob' => $this->faker->date('Y-m-d', 'now'),
            'email_verified_at' => now(),
            'about' => $this->faker->text,
            'status' => 1,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
