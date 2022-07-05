<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->words(2, true),
            "description" => $this->faker->sentence(),
            "due_date" => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            "is_complete" => $this->faker->boolean(),
            "user_id" => $this->faker->randomDigitNotNull(),
        ];
    }
}
