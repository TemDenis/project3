<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_heading = $this->faker->unique()->words($nb=4, $asText=true);
        $slug = Str::slug($product_heading);
        return [
            'heading' => $product_heading,
            'slug'    => $slug,
            'description' => $this->faker->text(35),
            'category_id' => $this->faker->numberBetween(1,5),
            'image' => 'img1' .$this->faker->numberBetween(1,12).'.jpg'
        ];
    }
}
