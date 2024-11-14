<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_guias_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiasTable extends Migration
{
    public function up()
    {
        Schema::create('guia', function (Blueprint $table) {
            $table->id('id_guia');
            $table->string('nombre');
            $table->integer('celular');
            $table->string('disponibilidad');
            $table->boolean('activo');
            $table->foreignId('tour_id_tour')->constrained('tour');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guia');
    }
}
