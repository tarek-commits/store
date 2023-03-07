<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'name' => $this->faker->words(2,true) ,
                'short_name' => $this->faker->words(1,true) ,
                'code' => $this->faker->words(1,true),
                'description' => $this->faker->sentence(13),
                'plu_formule' =>$this->faker->words(2,true) ,
                'price_tolerance' =>$this->faker->randomFloat(1,500,999) ,
                'weight_tolerance' => $this->faker->randomFloat(1,500,999),


        ];
    }
}
