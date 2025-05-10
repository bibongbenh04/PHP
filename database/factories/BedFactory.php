<?php

namespace Database\Factories;

use App\Models\Bed;
use Illuminate\Database\Eloquent\Factories\Factory;

class BedFactory extends Factory
{
    protected $model = Bed::class;

    public function definition(): array
    {
        return [
            'department_id' => $this->faker->numberBetween(1,10),
            'code' => 'Bed'.$this->faker->numberBetween(1,10),
            'status' => 'available',
            'notes' => $this->faker->sentence,
        ];
    }
}
