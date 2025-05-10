<?php

namespace Database\Factories;

use App\Models\Prescription;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrescriptionFactory extends Factory
{
    protected $model = Prescription::class;

    public function definition()
    {
        return [
            'patient_id' => $this->faker->numberBetween(1,10),
            'doctor_id' => $this->faker->numberBetween(1,10),
            'blood_pressure' => $this->faker->numberBetween(80,200).'/'.$this->faker->numberBetween(80,200),
            'diabetes' => $this->faker->sentence,
            'symptoms' => $this->faker->sentence,
            'diagnosis' => $this->faker->sentence,
            'advice' => $this->faker->sentence,
            'date' => $this->faker->date(),
        ];
    }
}
