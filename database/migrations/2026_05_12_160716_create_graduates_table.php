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
        Schema::create('graduates', function (Blueprint $table) {

            $table->id();

            $table->string('nombre');

            $table->string('foto');

            $table->string('generacion');

            $table->string('cargo');

            $table->string('empresa')->nullable();

            $table->text('descripcion');

            $table->string('linkedin')->nullable();

            $table->boolean('destacado')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graduates');
    }
};