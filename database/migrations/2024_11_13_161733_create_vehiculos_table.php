<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_vehiculos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->id('id_vehiculo');
            $table->string('placa');
            $table->integer('capacidad');
            $table->string('estadoVehiculo');
            $table->boolean('activo');
            $table->foreignId('ruta_id_ruta')->constrained('ruta');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehiculo');
    }
}
