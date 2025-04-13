<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evenements',function(Blueprint $table){
            $table->id();
            $table->string('theme')->nullable();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->text('description');
            $table->float('cout_journalier')->nullable();
            $table->foreignId('expert_id')->default(1)->constrained()->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
