<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Projet;

 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projet>
 */
class ProjetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'anneeprog' => $this->faker->word,
            'reference' => $this->faker->word,
            'intitule' => $this->faker->word,
            'couttotal' => $this->faker->word,
            'partIndh' => $this->faker->word,
            'delaireal' => $this->faker->word,
            'provs_id' => $this->faker->word,
            'comm_id' => $this->faker->word,
            'part_id' => $this->faker->word,
        ];
    }
}
