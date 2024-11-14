<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tour', function (Blueprint $table) {
            $table->timestamps(); // Esto añadirá las columnas created_at y updated_at
        });
    }

    public function down()
    {
        Schema::table('tour', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });
    }
};
