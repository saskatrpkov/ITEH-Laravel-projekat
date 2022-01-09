<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'vegan', 'gluten_free', 'prep_time', 'image_url'];
    protected $with = ['ingredients'];

    public function ingredients()
    {
        return $this->hasMany(FoodIngredient::class);
    }
}
