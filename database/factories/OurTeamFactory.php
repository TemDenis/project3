<?php

namespace Database\Factories;

use App\Models\OurTeam;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OurTeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ourteam_name = $this->faker->unique()->words($nb=3,$asText=true);
        $slug = Str::slug($ourteam_name);
        return [
            'name' => $ourteam_name,
            'slug' => $slug,
            'occupation' => $this->faker->text(5),
            'description' => $this->faker->text(18),
            'image' => 'img02' . $this->faker->numberBetween(1,3).'.jpg' 
        ];
    }
}
