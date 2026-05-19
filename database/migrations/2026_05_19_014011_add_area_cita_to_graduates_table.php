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
    Schema::table('graduates', function (Blueprint $table) {
        $table->string('area')->default('Administración')->after('empresa');
        $table->text('cita')->nullable()->after('descripcion');
    });
}

public function down(): void
{
    Schema::table('graduates', function (Blueprint $table) {
        $table->dropColumn(['area', 'cita']);
    });
}
};
