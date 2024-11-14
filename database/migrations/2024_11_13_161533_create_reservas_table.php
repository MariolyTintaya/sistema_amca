<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_reservas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id('id_reserva');
            $table->integer('monto_total');
            $table->integer('num_personas');
            $table->date('fecha_creacion');
            $table->boolean('activo');
            $table->foreignId('tour_id_tour')->constrained('tour');
            $table->foreignId('cliente_id_cliente')->constrained('cliente');
            $table->foreignId('deposito_id_deposito')->constrained('deposito');
            $table->foreignId('usuario_id_usuario')->constrained('usuario');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
