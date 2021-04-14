<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'title' => $this->faker->name,
          'description' => $this->faker->sentence('3'),
          'published_at' => now(),
          'content' => $this->faker->sentence('10'),
          'image' => $this->faker->imageUrl(256, 256),
        ];
    }
}
