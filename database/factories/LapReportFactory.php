<?php

namespace Database\Factories;

use App\Models\LapReport;
use Illuminate\Database\Eloquent\Factories\Factory;

class LapReportFactory extends Factory
{
    protected $model = LapReport::class;

    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'patient_id' => $this->faker->numberBetween(1,10),
            'doctor_id' => $this->faker->numberBetween(1,10),
            'template_id' => $this->faker->numberBetween(1,10),
            'report' => $this->faker->text,
        ];
    }
}
