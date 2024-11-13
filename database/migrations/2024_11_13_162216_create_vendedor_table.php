<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_vendedor_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedorTable extends Migration
{
    public function up()
    {
        Schema::create('vendedor', function (Blueprint $table) {
            $table->id('id_vendedor');
            $table->decimal('sueldo', 5, 2)->nullable();
            $table->date('fecha_contrato')->nullable();
            $table->string('turno', 25)->nullable();
            $table->integer('celular')->nullable();
            $table->boolean('activo');
            $table->foreignId('usuario_id_usuario')->constrained('usuario')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendedor');
    }
}
