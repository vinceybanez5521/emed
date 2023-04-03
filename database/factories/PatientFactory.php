<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "first_name" => fake()->firstName(),
            "middle_name" => fake()->lastName(),
            "last_name" => fake()->lastName(),
            "address" => fake()->address(),
            "gender" => fake()->randomElement(['Male', 'Female']),
            "civil_status" => fake()->randomElement(['Single', 'Married', 'Annulled', 'Widowed']),
            "date_of_birth" => fake()->date(),
            "phone_number" => fake()->phoneNumber(),
            "user_id" => User::factory(),
        ];
    }
}
