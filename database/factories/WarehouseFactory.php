<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warehouse>
 */
class WarehouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [

            'name' =>  $this->faker->words(3,true),
            'code' => $this->faker->words(1,true),
            'address' => $this->faker->address ,
            'user_id' =>  User::inRandomOrder()->first()->id,
            'contact_num' =>$this->faker->randomNumber(9,true)


        ];
    }
}
