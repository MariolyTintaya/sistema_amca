<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_rutas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasTable extends Migration
{
    public function up()
    {
        Schema::create('ruta', function (Blueprint $table) {
            $table->id('id_ruta');
            $table->integer('distancia')->nullable();
            $table->string('estadoRuta');
            $table->boolean('activo');
            $table->foreignId('destino_id_destino')->constrained('destino');
            $table->timestamps();
        });
    }

}