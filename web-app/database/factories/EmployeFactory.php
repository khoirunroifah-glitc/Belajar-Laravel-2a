<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    protected $model = \App\Models\Employe::class;

    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomNumber(),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'gender' => $this->faker->randomElement(['L', 'P']),
            'gaji' => $this->faker->randomElement([1500000, 2500000, 3500000, 4500000]),
        ];
    }
}
