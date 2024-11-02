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
        Schema::table('platos', function (Blueprint $table) {
            $table->foreign(['tipos_id_plato'], 'fk_platos_tipos1')->references(['id_plato'])->on('tipos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('platos', function (Blueprint $table) {
            $table->dropForeign('fk_platos_tipos1');
        });
    }
};
