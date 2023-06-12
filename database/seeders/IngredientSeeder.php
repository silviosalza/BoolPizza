<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = ['Pomodoro', 'Mozzarella', 'Salame', 'Ananas', 'Gatto'];
        foreach ($ingredients as $ingredient_value) {
            # code...
            $new_type = new Ingredient();
            $new_type->name = $ingredient_value;
            $new_type->slug = Str::slug($ingredient_value);
            $new_type->save();
        }
    }
}
