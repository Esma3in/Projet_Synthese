<?php

namespace Database\Factories;

use App\Models\Evenement;
use App\Models\Expert;
use App\Models\Participant;
use App\Models\Inscription;
use App\Models\Atelier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atelier>
 */
class AtelierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomAtelier' => fake()->company(),
            'descriptionAtelier'=>fake()->paragraph(5),
            'evenement_id'=>Evenement::factory()
        ];
    }
}
