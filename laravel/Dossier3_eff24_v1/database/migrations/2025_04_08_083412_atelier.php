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
        Schema::create('ateliers',function(Blueprint $table){
            $table->id();
            $table->string('nomAtelier')->nullable();
            $table->text('descriptionAtelier')->nullable();
            $table->foreignId('evenement_id')->constrained()->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ateliers');
    }
};
