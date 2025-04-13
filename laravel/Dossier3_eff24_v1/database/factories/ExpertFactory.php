<?php

namespace Database\Factories;
use App\Models\Expert;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Participant;
use App\Models\Evenement;
use App\Models\Inscription;
use App\Models\Atelier;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expert>
 */
class ExpertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    

    public function definition(): array
    {
        return [
            'nomExp' => fake()->firstName(),
            'prenomExp' => fake()->lastName(),
            'telExp' => fake()->unique()->safeEmail(),
            'SpecialiteExp' => fake()->jobTitle(),
            'EmailExp' => fake()->safeEmail(),
        ];
    }
}
