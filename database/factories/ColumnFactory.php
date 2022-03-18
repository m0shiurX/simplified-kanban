<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ColumnFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
        ];
    }
}
