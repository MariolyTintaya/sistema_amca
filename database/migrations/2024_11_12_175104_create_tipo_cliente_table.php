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
        if (!Schema::hasTable('tipo_cliente')) {
            Schema::create('tipo_cliente', function (Blueprint $table) {
                $table->integer('id_tipo', true)->unique('id_tipo_unique');
                $table->string('descripcion', 45)->nullable();

                $table->primary(['id_tipo']);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_cliente');
    }
};
