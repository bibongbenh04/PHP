<?php

namespace Database\Factories;

use App\Models\PaymentItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentItemFactory extends Factory
{
    protected $model = PaymentItem::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'code' => 'P-'.$this->faker->numberBetween(1,10),
            'type' => 'Other',
            'price' => $this->faker->randomFloat(null,1,5000),
            'commission' => $this->faker->numberBetween(10,100).'%',
            'quantity' => $this->faker->numberBetween(100,1000),
        ];
    }
}
