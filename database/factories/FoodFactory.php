<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->realText,
            'vegan' => $this->faker->boolean(40),
            'gluten_free' => $this->faker->boolean(20),
            'prep_time' => $this->faker->numberBetween(10, 90),
            'image_url' => $this->faker->imageUrl
        ];
    }
}
