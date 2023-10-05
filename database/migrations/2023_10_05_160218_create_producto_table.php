<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tipo');
            $table->string('modelo');
            $table->integer('id_marca');
            $table->integer('memoria_ram');
            $table->enum('tipo_almacenamiento', ['SSD', 'HDD','DUAL']);
            $table->integer('capacidad');
            $table->integer('id_procesador');
            $table->float('diagonal_pantalla');
            $table->boolean('touch');
            $table->integer('id_tarjeta');
            $table->integer('id_teclado');
            $table->enum('resoluccion', ['HD', 'FULLHD','4K','2K']);
            $table->enum('so', ['WIN10', 'WIN11','OTRO']);
            $table->integer('cantidad');
            $table->float('precio');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
