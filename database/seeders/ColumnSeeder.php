<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Column;

class ColumnSeeder extends Seeder
{
    public function run(): void
    {
        Column::factory(3)->hasCards(5)->create();
    }
}
