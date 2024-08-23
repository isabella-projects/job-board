<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => '€' . fake()->numberBetween(20, 150) * 1000,
            'location' => fake()->randomElement(['On-Site', 'Hybrid', 'Remote']),
            'schedule' => fake()->randomElement(['Full Time', 'Part-Time', 'Freelance', 'On-Call']),
            'url' => fake()->url,
            'featured' => false
        ];
    }
}
