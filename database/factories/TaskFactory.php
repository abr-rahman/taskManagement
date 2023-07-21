<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = \App\Models\User::pluck('id')->toArray();
        return [
            'admin_id' => $this->faker->randomElement($users),
            'user_id' => $this->faker->randomElement($users),
            'title' => $this->faker->word(2),
            'description' => $this->faker->paragraph(2),
            'status' => $this->faker->boolean(90),
            'date_line' => $this->faker->date(),
        ];
    }
}
