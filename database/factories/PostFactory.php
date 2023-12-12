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
        //$user_id = \App\Models\User::factory(1)->create()->first()->id;

        return [
            'content' => fake()->sentence(10, true),
            'image' => fake()->imageUrl(),
            'user_id' => 13,
        ];
    }
}

