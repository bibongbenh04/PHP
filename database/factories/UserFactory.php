<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        $array = ['admin','doctor','patient','nurse','accountant','pharmacist','laboratorist','receptionist'];
        return [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'national_id' => $this->faker->numberBetween(10000000000000,99999999999999),
            'address' => $this->faker->streetAddress,
            'email' => $this->faker->unique()->safeEmail,
            'password' => \Illuminate\Support\Facades\Hash::make($this->faker->password),
            'picture' => 'https://picsum.photos/id/'.$this->faker->numberBetween(1,999).'/200/200',
            'blood_group' => 'O+',
            'birth_date' => $this->faker->dateTime,
            'gender' => 'male',
            'type' => Arr::random($array),
            'phone' => $this->faker->numberBetween(1000000000,9999999999),
            'mobile' => $this->faker->numberBetween(1000000000,9999999999),
            'emergency' => $this->faker->numberBetween(1000000000,9999999999),
        ];
    }
}
