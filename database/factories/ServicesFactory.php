<?php

namespace Database\Factories;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $services_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($services_name);
        return [
            'title' => $services_name,
            'slug' => $slug,
            'description' => $this->faker->text(200),
            'image' => 'img10' . $this->faker->numberBetween(1,6).'.jpg'
        ];
    }
}
