<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->text
        ];
    }

    public function newTitle()
    {
        return $this->state(function (array $attributes) {
            $attributes = [
                'title' => 'New title',
                'content' => 'Content of the new blog post'
            ];

            return $attributes;
        });
    }
}
