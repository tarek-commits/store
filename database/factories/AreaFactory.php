<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Area>
 */
class AreaFactory extends Factory
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
            'code' => $this->faker->words(1,true),
            'warehouse_id' =>  Warehouse::inRandomOrder()->first()->id,
            'category_id' =>  Category::inRandomOrder()->first()->id,
            'height' => $this->faker->randomFloat(1,100,999),
            'width' => $this->faker->randomFloat(1,100,999),
            'lenght' => $this->faker->randomFloat(1,100,999),
        ];
    }
}
