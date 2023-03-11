<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\MaterialType;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PackingMaterial>
 */
class PackingMaterialFactory extends Factory
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
            'sku' => $this->faker->words(1,true),

            'warehouse_id' =>  Warehouse::inRandomOrder()->first()->id,
            'material_id' => MaterialType::inRandomOrder()->first()->id,
            'company_id' =>Company::inRandomOrder()->first()->id,
            'material_weight' => $this->faker->randomNumber(2,true),
            'unit' => 'inch',
            'height' => $this->faker->randomNumber(2,true),
            'width' => $this->faker->randomNumber(2,true),
            'lenght' => $this->faker->randomNumber(2,true),
            'number_of_units' => $this->faker->randomNumber(2,true),
            'threshold_limit' => $this->faker->randomNumber(2,true),

        ];
    }
}
