<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Rack;
use App\Models\Storage_type;
use App\Models\StorageType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status' => 'pallet',
            'name' => $this->faker->words(2,true) ,
            'code' => $this->faker->words(1,true),
            'rack_id' =>  Rack::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'storage_id' => StorageType::inRandomOrder()->first()->id,
            'type' => "pick face",
            'size' => "small",
            'height' => $this->faker->randomFloat(1,100,999),
            'width' => $this->faker->randomFloat(1,100,999),
            'lenght' => $this->faker->randomFloat(1,100,999),
        ];
    }
}
