<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    protected $model = Expense::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'amount' => $this->faker->randomFloat(null,1,5000),
            'note' => $this->faker->sentence,
        ];
    }
}
