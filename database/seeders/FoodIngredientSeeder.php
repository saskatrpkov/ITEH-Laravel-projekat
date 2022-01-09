<?php

namespace Database\Seeders;

use App\Models\FoodIngredient;
use Illuminate\Database\Seeder;

class FoodIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $total = 0;
        for ($i = 0; $i < 10000; $i++) {
            try {
                FoodIngredient::factory(1)->create();
                $total = $total + 1;
                if ($total == 30) {
                    return;
                }
            } catch (\Throwable $th) {
            }
        }
    }
}
