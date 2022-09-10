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
            'user_id' => 1,
            'category_id' => mt_rand(1, 2),
            'title_post' => fake()->sentence(mt_rand(2, 8)),
            'slug_post' => fake()->slug(),
            'body_post' => fake()->paragraph(mt_rand(10, 15)),
            'images' => '29-Aug-20221661788041.blog.jpg',
            'publish_status' => 1,
            'published_at' => now()
        ];
    }
}
