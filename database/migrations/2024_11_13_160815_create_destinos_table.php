<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinosTable extends Migration
{
    public function up()
    {
        Schema::create('destino', function (Blueprint $table) {
            $table->id('id_destino');
            $table->string('nombre');
            $table->string('pais');
            $table->string('cuidad');
            $table->boolean('activo');
            $table->foreignId('tour_id_tour')->constrained('tour');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('destino');
    }
}