<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => 1,
            "title" => $this->faker->sentence,
            "body" => $this->faker->paragraph,
            "send_date" => $this->faker->dateTimeBetween("now", "+1 year"),
            "recipient" => $this->faker->email,
            "heart_count" => $this->faker->numberBetween(0, 100),
            "is_published" => true,
        ];
    }
}
