<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_tours_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {
            $table->id('id_tour');
            $table->string('nombre');
            $table->integer('duracion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->boolean('activo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tour');
    }
}
