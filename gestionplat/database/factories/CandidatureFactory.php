<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidature>
 */
class CandidatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cnie' => $this->faker->word,
            'nom' => $this->faker->word,
            'prenom' => $this->faker->word,
            'genre' => $this->faker->word,
            'dateNaissance' => $this->faker->date(),
            'profession' => $this->faker->word,
            'tele' => $this->faker->word,
            'email' => $this->faker->word,
            'niveau' => $this->faker->word,
        ];
    }
}
