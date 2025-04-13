<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Expert;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Participant;
use App\Models\Evenement;
use App\Models\Inscription;
use App\Models\Atelier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $experts = Expert::factory(10)->create();
        $participants = Participant::factory(10)->create();

        $evenements = Evenement::factory(10)
            ->recycle($experts)
            ->create();

        Atelier::factory(10)
            ->recycle($evenements)
            ->create();

        Inscription::factory(10)
            ->recycle($evenements)
            ->recycle($participants)
            ->create();
    }
}
