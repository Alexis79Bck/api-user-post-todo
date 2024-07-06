<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "gender" => fake()->randomElement(["Female", "Male"]),
            "birthday" => fake()->date("Y-m-d"),
            "country" => fake()->country(),
            "state" => fake()->state(),
            "city" => fake()->city(),
            "zipcode" => fake()->postcode(),
            "phone" => fake()->tollFreePhoneNumber(),
            "website" => fake()->domainName()
        ];
    }
}
