<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositosTable extends Migration
{
    public function up()
    {
        Schema::create('deposito', function (Blueprint $table) {
            $table->id('id_deposito');
            $table->date('fecha');
            $table->boolean('activo');
            $table->foreignId('pago_id_pago')->constrained('pago');
            $table->foreignId('cliente_id_cliente')->constrained('cliente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deposito');
    }
}