<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    protected $model = Document::class;

    public function definition(): array
    {
        return [
            'patient_id' => $this->faker->numberBetween(1,10),
            'doctor_id' => $this->faker->numberBetween(1,10),
            'date' => $this->faker->date(),
            'description' => $this->faker->sentence,
            'doc' => 'patients_documents/T34J3Irn2u0xNKbt5HSe1vYaYnbOBS84gpT9IBIt.txt',
        ];
    }
}
