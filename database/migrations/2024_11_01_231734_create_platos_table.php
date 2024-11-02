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
        Schema::create('platos', function (Blueprint $table) {
            $table->increments('id_plato')->unique('id_plato_unique');
            $table->string('nombre', 45);
            $table->integer('tipos_id_plato')->index('fk_platos_tipos1_idx');

            $table->primary(['id_plato']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos');
    }
};
