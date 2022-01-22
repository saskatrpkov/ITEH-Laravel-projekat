<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
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
            'vegan' => $this->faker->boolean(60),
            'gluten_free' => $this->faker->boolean(40)
        ];
    }
}
