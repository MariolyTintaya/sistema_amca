<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_paradas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParadasTable extends Migration
{
    public function up()
    {
        Schema::create('parada', function (Blueprint $table) {
            $table->id('id_parada');
            $table->string('nombre');
            $table->string('descripcion');
            $table->boolean('activo');
            $table->foreignId('ruta_id_ruta')->constrained('ruta');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parada');
    }
}
