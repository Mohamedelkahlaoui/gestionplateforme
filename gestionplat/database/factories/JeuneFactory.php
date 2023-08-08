<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jeune>
 */
class JeuneFactory extends Factory
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
            'nom' => $this->faker->word,
            'prenom' => $this->faker->word,
            'email' => $this->faker->word,
            'dateNaissance' => $this->faker->date(),
            'adresse' => $this->faker->word,
        ];
    }
}
