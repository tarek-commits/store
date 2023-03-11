<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Industry;
use App\Models\StorageType;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->words(2,true) ,
            'code' => $this->faker->words(1,true),
            'business_name' => $this->faker->words(2,true),
            'warehouse_id' =>  Warehouse::inRandomOrder()->first()->id,
            'industry_id' => Industry::inRandomOrder()->first()->id,
            'parent_id' =>Company::inRandomOrder()->first()->id,
            'storage_id' => StorageType::inRandomOrder()->first()->id,
            'contact_name' => $this->faker->words(2,true),
            'contact_number' => $this->faker->randomNumber(8,true),
            'email_id' => $this->faker->email,
            'address_line01' => $this->faker->address,
            'address_line02' => $this->faker->address,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'postal_code' => $this->faker->postcode,
            'state' => $this->faker->words(1,true),
            'contract_date' => $this->faker->date,
            'expires_on' =>$this->faker->date,
            'go_live_date' =>$this->faker->date,
            'purchase_order' => $this->faker->randomNumber(2,true),
            'currency' =>$this->faker->currencyCode



        ];
    }
}
