<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sentence = $this->faker->sentence();

        return [
            'author_id' => rand(1, 100),
            'title' => $sentence,
            'content' => $this->faker->text(),
        ];
    }
}
