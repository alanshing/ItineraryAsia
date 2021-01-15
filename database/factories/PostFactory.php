<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->sentence;
        $slug = Str::slug($title);
        return [
            'user_id' => rand(1, 7),
            'title' => $title,
            'slug' => $slug,
            'body' => $this->faker->text,
            'cover' => '.jpg',
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
