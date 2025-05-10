<?php

namespace Database\Factories;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineFactory extends Factory
{
    protected $model = Medicine::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'instruction' => $this->faker->sentence,
            'category_id' => $this->faker->numberBetween(1,10),
            'purchase_price' => $this->faker->randomFloat(null,1,5000),
            'sale_price' => $this->faker->randomFloat(null,1,5000),
            'quantity' => $this->faker->numberBetween(1,1000),
            'company' => $this->faker->company,
            'expire_date' => $this->faker->date(),
        ];
    }
};
