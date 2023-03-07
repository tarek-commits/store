<?php

namespace Database\Factories;

use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Udm>
 */
class UdmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number_of_udms' =>  $this->faker->randomNumber(5,true) ,
            'warehouse_id' => Warehouse::inRandomOrder()->first()->id,
        ];
    }
}
