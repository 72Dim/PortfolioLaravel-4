<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),  /* default one word */
            'content' => fake()->text(50), /* default 160 characters */
            'description' => fake()->sentence(3), /* default 6 words */
            'created_at' => fake()->dateTimeBetween(),
            'updated_at' => fake()->dateTimeBetween(),
        ];
    }
}
