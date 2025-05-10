<?php

namespace Database\Factories;

use App\Models\BedAllotment;
use Illuminate\Database\Eloquent\Factories\Factory;

class BedAllotmentFactory extends Factory
{
    protected $model = BedAllotment::class;

    public function definition(): array
    {
        return [
            'bed_id'=> $this->faker->numberBetween(1,10),
            'patient_id'=> $this->faker->numberBetween(1,10),
            'start_date'=> $this->faker->date(),
            'end_date'=> $this->faker->date(),
            'start_time'=> $this->faker->time(),
            'end_time'=> $this->faker->time(),
            'status'=> 'Up Coming Allotment',
        ];
    }
}
