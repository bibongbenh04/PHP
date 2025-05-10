<?php

namespace Database\Factories;

use App\Models\DayoffSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class DayoffScheduleFactory extends Factory
{
    protected $model = DayoffSchedule::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'date' => $this->faker->date(),
        ];
    }
}
