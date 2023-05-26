<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;
use Faker\Generator as Faker;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $pizza = new Pizza();
            $pizza->name = $faker->randomElement(['Mimmo', 'Margherita', 'Pippo', 'Pluto', 'Paperino']);
            $pizza->description = $faker->randomElement(['Mediocre', 'Buona', 'Perfetta']);
            $pizza->price = $faker->randomElement([4, 9, 20, 7, 11]);
            $pizza->vegetarian = $faker->randomElement([true, false]);
            $pizza->save();
        }
    }
}