<?php

namespace Database\Factories;

use App\Models\OurServices;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OurServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ourservices_name = $this->faker->unique()->words($nb=2, $astext=true);
        $slug = Str::slug($ourservices_name);
        return [
            'name' => $ourservices_name,
            'slug' => $slug,
            'description' => $this->faker->text(200),
            'image' => 'off1'. $this->faker->numberBetween(1,3).'.jpg'

            //
        ];
    }
}
