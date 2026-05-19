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
    Schema::table('docentes', function (Blueprint $table) {
        $table->string('categoria')->default('Profesores por Asignatura')->after('grado_academico');
        $table->string('linea_academica')->nullable()->after('categoria');
    });
}

public function down(): void
{
    Schema::table('docentes', function (Blueprint $table) {
        $table->dropColumn(['categoria', 'linea_academica']);
    });
}
};
