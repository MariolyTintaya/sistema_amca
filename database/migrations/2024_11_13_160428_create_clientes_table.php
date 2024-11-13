<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->integer('nroDocumento');
            $table->integer('celular');
            $table->string('nombre');
            $table->string('ape_paterno');
            $table->string('ape_materno');
            $table->date('fecha_nac');
            $table->boolean('activo');
            $table->foreignId('tipo_cliente_id_tipo')->constrained('tipo_cliente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
