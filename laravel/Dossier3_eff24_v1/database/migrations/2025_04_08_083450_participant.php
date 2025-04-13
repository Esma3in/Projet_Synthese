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
        Schema::create('participants',function(Blueprint $table){
            $table->id();
            $table->string('nomPart')->nullable();
            $table->string('prenomPart')->nullable();
            $table->string('sexePart')->nullable();
            $table->string('telPart')->nullable();
            $table->string('EmailPart')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
