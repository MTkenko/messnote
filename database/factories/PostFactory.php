<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;

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
    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => fake()->text($maxNbChars = 20),
            'date' => date('Y_m_d'),
            'body' => fake()->text($maxNbChars = 20),
            'rating_1' => 1,
            'rating_2' => 1,
            //'created_at' => $faker->unixTime(),
        ];
    }
}
