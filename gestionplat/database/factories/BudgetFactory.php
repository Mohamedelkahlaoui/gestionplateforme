<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Budget;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'exercice' => $this->faker->randomNumber,
            'gestfplat' => $this->faker->randomNumber,
            'aidempj' => $this->faker->randomNumber,
            'entrjeu' => $this->faker->randomNumber,
            'soutess' => $this->faker->randomNumber,
            'foraccje' => $this->faker->randomNumber,
        ];
    }
}
