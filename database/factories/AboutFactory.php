<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $about_question = $this->faker->unique()->words($nb=2, $asText=true);
        $slug = Str::slug($about_question);
        return [
            'question' => $about_question,
            'slug' => $slug,
            'description' => $this->faker->text(300),
            'image' => 'img1' . $this->faker->numberBetween(1,2).'.jpg'
        ];
    }
}
