<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'event_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'location' => $this->faker->city,
        ];
    }
}
