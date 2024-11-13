<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_usuario_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nombre', 45);
            $table->string('correo', 100)->nullable();
            $table->string('contraseña', 255);
            $table->boolean('activo');
            $table->foreignId('rol_id_rol')->constrained('roles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
