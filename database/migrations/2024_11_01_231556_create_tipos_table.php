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
        Schema::create('tipos', function (Blueprint $table) {
            $table->integer('id_plato', true)->unique('id_plato_unique');
            $table->string('nombre_plato')->nullable();
            $table->decimal('precio', 10)->nullable();
            $table->integer('id_rest');
            $table->integer('id_tipo_plato')->nullable();

            $table->primary(['id_plato']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos');
    }
};
