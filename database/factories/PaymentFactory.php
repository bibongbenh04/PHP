<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'patient_id' => $this->faker->numberBetween(1,10),
            'doctor_id' => $this->faker->numberBetween(1,10),
            'sub_total' => $this->faker->numberBetween(1,1000),
            'total' => $this->faker->numberBetween(1000,100000),
            'amount_received' => $this->faker->numberBetween(1000,100000),
            'amount_to_pay' => $this->faker->numberBetween(1000,100000),
            'doctor_commission' => $this->faker->numberBetween(1000,100000),
            'taxes' => $this->faker->numberBetween(1,100),
        ];
    }
}
