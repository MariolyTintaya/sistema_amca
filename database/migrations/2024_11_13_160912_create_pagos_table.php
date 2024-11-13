<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_pagos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->id('id_pago');
            $table->string('tipo_pago');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pago');
    }
}
