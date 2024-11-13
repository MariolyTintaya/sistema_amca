<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_transporte_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporteTable extends Migration
{
    public function up()
    {
        Schema::create('transporte', function (Blueprint $table) {
            $table->string('num_placa', 25)->primary();
            $table->integer('num_asientos');
            $table->string('tipo_transporte', 45);
            $table->boolean('activo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transporte');
    }
}
