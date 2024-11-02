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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->increments('id')->unique('id_unique');
            $table->string('nombre_rest', 45);
            $table->string('direccion', 45);
            $table->string('telefono', 45);
            $table->integer('tipos_id_plato')->index('fk_restaurantes_tipos_idx');

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes');
    }
};
