<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_tipo_clientes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoClientesTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_cliente', function (Blueprint $table) {
            $table->id('id_tipo');
            $table->string('tipo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_cliente');
    }
}

