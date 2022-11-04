<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'post_id' => 1,
            'text' => fake()->text($maxNbChars = 30),
            'img_path' => fake()->text($maxNbChars = 6),
            'url' => fake()->text($maxNbChars = 6),
        ];
    }
}
