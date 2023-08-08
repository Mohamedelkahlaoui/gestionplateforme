<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Revenu>
 */
class RevenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'montant' => $this->faker->numberBetween(),
            'description' => $this->faker->word(),
            'dateRev' => $this->faker->date(),
        ];
    }
}
