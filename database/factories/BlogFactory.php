<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'item_id' => rand(1,10),
            // 'body_uz' => fake()->text(),
            // 'body_qr' => fake()->text(),
            // 'body_ru' => fake()->text(),
        ];
    }
}
