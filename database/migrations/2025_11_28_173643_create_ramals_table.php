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
        Schema::create('ramals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 60);
            $table->string('area', 20);
            $table->integer('ramal')->nullable();
            $table->tinyInteger('andar')->nullable();
            $table->string('email', 60)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramals');
    }
};
