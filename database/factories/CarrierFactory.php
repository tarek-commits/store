<?php

namespace Database\Factories;

use App\Models\LogisticCompany;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrier>
 */
class CarrierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->words(2,true) ,
            'code' => $this->faker->words(1,true),
            'warehouse_id' =>  Warehouse::inRandomOrder()->first()->id,
            'logistic_company_id' => LogisticCompany::inRandomOrder()->first()->id,
            'country' => $this->faker->country,

        ];
    }
}
