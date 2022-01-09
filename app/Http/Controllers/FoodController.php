<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodIngredient;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Food::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food = Food::create([
            "name" => $request->name,
            "description" => $request->description,
            "vegan" => $request->vegan,
            "gluten_free" => $request->gluten_free,
            "prep_time" => $request->prep_time,
            "image_url" => $request->image_url,
        ]);
        foreach ($request->ingredients as $ingredient) {
            FoodIngredient::create([
                "food_id" => $food->id,
                "ingredient_id" => $ingredient['ingredient_id'],
                "ammount" => $ingredient['ammount']
            ]);
        }
        return response()->json(Food::find($food->id), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return response()->json($food, 200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return response()->noContent();
    }
}
