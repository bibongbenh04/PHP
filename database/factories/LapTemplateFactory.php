<?php

namespace Database\Factories;

use App\Models\LapTemplate;
use Illuminate\Database\Eloquent\Factories\Factory;

class LapTemplateFactory extends Factory
{
    protected $model = LapTemplate::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'template' => $this->faker->text,
        ];
    }
}
