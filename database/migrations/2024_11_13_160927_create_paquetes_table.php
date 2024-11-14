<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_paquetes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTable extends Migration
{
    public function up()
    {
        Schema::create('paquete', function (Blueprint $table) {
            $table->id('id_paquete');
            $table->string('temporada');
            $table->string('tipo_paquete');
            $table->integer('precio');
            $table->string('nombre');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->boolean('activo');
            $table->foreignId('tour_id_tour')->constrained('tour');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paquete');
    }
}
