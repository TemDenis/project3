<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $blog_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($blog_name);
        return [
            'name' => $blog_name,
            'slug' => $slug,
            'description' => $this->faker->text(500),
            'image' => 'img1' .$this->faker->unique()->numberBetween(1,9).'.jpg'
        ];
    }
}
