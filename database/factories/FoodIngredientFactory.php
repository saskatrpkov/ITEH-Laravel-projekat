<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodIngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'food_id' => $this->faker->numberBetween(1, 10),
            'ingredient_id' => $this->faker->numberBetween(1, 15),
            'ammount' => $this->faker->numberBetween(1, 40)
        ];
    }
}
