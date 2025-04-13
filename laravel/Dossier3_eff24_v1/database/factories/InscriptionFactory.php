<?php

namespace Database\Factories;

use App\Models\Participant;
use App\Models\Evenement;
use App\Models\Expert;
use App\Models\Inscription;
use App\Models\Atelier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inscription>
 */
class InscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dateInscription'=>fake()->dateTime(),
            'statusInscription'=>fake()->randomElement(["payant","not payant"]),
            'participant_id'=>Participant::factory(),
            'evenement_id'=>Evenement::factory(),
        ];
    }
}
