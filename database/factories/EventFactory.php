<?php

namespace Database\Factories;

use App\Models\Events;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $event_place = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($event_place);
        return [
            'place' => $event_name,
            'slug' => $slug,
            'description' => $this->faker->text(200),
            'event_date' => $this->faker->numerify(###-##-###),
            'image' => 'event1' . $this->faker->numberBetween(1,2).'.jpg'
            //
        ];
    }
}
