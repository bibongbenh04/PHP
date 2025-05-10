<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    public function definition(): array
    {
        return [
            'patient_id' => $this->faker->numberBetween(1, 10),
            'doctor_id' => $this->faker->numberBetween(1, 10),
            'department_id' => $this->faker->numberBetween(1, 10),
            'date' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'time' => $this->faker->time(),
            'status' => Arr::random(['confirmed', 'pending']),
            'notes' => $this->faker->sentence,
        ];
    }
}