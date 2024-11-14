<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_usuarios_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nombre');
            $table->string('password');
            $table->boolean('activo');
            $table->foreignId('rol_id_rol')->constrained('rol');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
