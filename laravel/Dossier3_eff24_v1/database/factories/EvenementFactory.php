<?php

namespace Database\Factories;

use App\Models\Expert;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Participant;
use App\Models\Evenement;
use App\Models\Inscription;
use App\Models\Atelier;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evenement>
 */
class EvenementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'theme' => fake()->sentence(),
            'date_debut' => fake()->date(),
            'date_fin' => fake()->date(),
            'description' => fake()->paragraph(3),
            'cout_journalier'=>fake()->numberBetween(25.6,2500.86),
            'expert_id'=>Expert::factory()

        ];
    }
}
