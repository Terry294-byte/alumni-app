<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumniFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'course' => $this->faker->randomElement(['CS', 'IT', 'Networking']),
            'graduation_year' => $this->faker->year(),
        ];
    }
}
