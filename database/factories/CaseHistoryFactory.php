<?php

namespace Database\Factories;

use App\Models\CaseHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CaseHistoryFactory extends Factory
{
    protected $model = CaseHistory::class;

    public function definition(): array
    {
        return [
            'patient_id' => $this->faker->numberBetween(1,10),
            'date' => $this->faker->date(),
            'title' => $this->faker->sentence,
            'food_allergies' => $this->faker->sentence,
            'bleed_tendency' => $this->faker->sentence,
            'heart_disease' => $this->faker->sentence,
            'diabetic' => $this->faker->sentence,
            'surgery' => $this->faker->sentence,
            'accident' => $this->faker->sentence,
            'family_medical_history' => $this->faker->sentence,
            'current_medication' => $this->faker->sentence,
            'female_pregnancy' => $this->faker->sentence,
            'breast_feeding' => $this->faker->sentence,
            'health_insurance' => $this->faker->sentence,
            'low_income' => $this->faker->sentence,
            'reference' => $this->faker->sentence,
            'others' => $this->faker->sentence,
            'status' => 'active',
            'blood_pressure' => $this->faker->numberBetween(80,200).'/'.$this->faker->numberBetween(80,200),
        ];
    }
}
