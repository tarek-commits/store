<?php

namespace Database\Factories;

use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderBins>
 */
class OrderBinsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number_of_bins' =>  $this->faker->randomNumber(5,true) ,
            'prefix' => $this->faker->words(1,true),
            'warehouse_id' => Warehouse::inRandomOrder()->first()->id,
            'status' => 'Unallocated',
        ];
    }
}
