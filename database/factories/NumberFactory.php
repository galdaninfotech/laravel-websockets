<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Number>
 */
class NumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'number' => rand(1,90),
            // 'number' => $this->faker->numberBetween(0, 100),
            // 'number' => $this->faker->unique()->randomDigit,

            'tag_line' => $this->faker->title(),
        ];
    }
}
