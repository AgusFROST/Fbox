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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->unique()->slug(),
            'body' => $this->faker->paragraph(mt_rand(5, 50)),
            'img' => $this->faker->imageUrl(640, 480, 'animals', true),
            'user_id' => mt_rand(1, 2),
            'category_id' => mt_rand(1, 4)
        ];
    }
}
