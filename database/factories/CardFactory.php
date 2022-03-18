<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    public function definition(): array
    {
        return [
            'column_id' => 1,
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(1)
        ];
    }
}
